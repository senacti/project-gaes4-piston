package jsf;

import jpa.entities.User;
import jpa.sessions.UserFacade;
import jsf.util.JsfUtil;
import jsf.util.PaginationHelper;
import java.util.ResourceBundle;
import javax.annotation.ManagedBean;
import javax.faces.component.UIComponent;

import javax.faces.convert.Converter;
import javax.faces.convert.FacesConverter;
import javax.faces.model.DataModel;
import javax.faces.model.ListDataModel;
import javax.faces.model.SelectItem;

import javax.ejb.EJB;
import javax.enterprise.context.SessionScoped;
import javax.inject.Named;
import java.io.Serializable;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;
import javax.servlet.http.HttpSession;

@Named("userController")
@SessionScoped
public class UserController implements Serializable {

    private String email;
    private String password;
    private String name;
    private User current;
    private String nombreUsuario;
    private DataModel items = null;
    @EJB
    private jpa.sessions.UserFacade ejbFacade;
    private PaginationHelper pagination;
    private int selectedItemIndex;

    @EJB
    private UserFacade userFacade;

    public UserController() {
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String registrarUsuario() {
        User nuevoUsuario = new User();
        nuevoUsuario.setName(name);
        nuevoUsuario.setEmail(email);
        nuevoUsuario.setPassword(password);

        if (userFacade.registrarUsuario(nuevoUsuario)) {
            FacesContext.getCurrentInstance().addMessage(null, new FacesMessage("Usuario registrado exitosamente"));
            name = "";
            email = "";
            password = "";
            return "login";
        } else {
            FacesContext.getCurrentInstance().addMessage(null, new FacesMessage("Error al registrar usuario"));
            return null;
        }
    }

    public String registrarUsuarioM() {
        User nuevoUsuario = new User();
        nuevoUsuario.setName(name);
        nuevoUsuario.setEmail(email);

        // Encripta la contraseña
        String hashedPassword = util.PasswordHashing.hashPassword(password);
        nuevoUsuario.setPassword(hashedPassword);

        if (userFacade.registrarUsuario(nuevoUsuario)) {
            FacesContext.getCurrentInstance().addMessage(null, new FacesMessage("Usuario registrado exitosamente"));
            name = "";
            email = "";
            password = "";
            return "loginM";
        } else {
            FacesContext.getCurrentInstance().addMessage(null, new FacesMessage("Error al registrar usuario"));
            return null;
        }
    }

    public String validaLogin() {
        User user = userFacade.validarUsuario(email, password);

        if (user != null) {
            email = user.getEmail();
            nombreUsuario = user.getName();
            
            if ("leo@gmail.com".equals(email)) {
                return "dashboard";
            } else  {
                return "/mecanicos2/List?faces-redirect=true";
            }
            
        } else {
            return "login";
        }
    }

    public String validaLoginM() {
        User user = userFacade.validarUsuario(email, password);

        if (user != null) {
            email = user.getEmail();
            return "mecanicos";
        } else {
            return "loginM";
        }
    }

    public String logout() {
        HttpSession session = (HttpSession) FacesContext.getCurrentInstance().getExternalContext().getSession(false);

        if (session != null) {
            session.invalidate();
        }

        return "home?faces-redirect=true";
    }

    public boolean isLoggedIn() {
        return email != null && !email.isEmpty();
    }

    public boolean isMecanico() {
        return isLoggedIn() && !"leo@gmail.com".equals(email);
    }

    public boolean isAdministrador() {
        return isLoggedIn() && "leo@gmail.com".equals(email);
    }

    public boolean isNone() {
        return !isLoggedIn() || (!"leo@gmail.com".equals(email) && "leo@gmail.com".equals(email));
    }

    public String getNombreUsuario() {
        return nombreUsuario;
    }

    public void setNombreUsuario(String nombreUsuario) {
        this.nombreUsuario = nombreUsuario;
    }

    public User getSelected() {
        if (current == null) {
            current = new User();
            selectedItemIndex = -1;
        }
        return current;
    }

    private UserFacade getFacade() {
        return ejbFacade;
    }

    public PaginationHelper getPagination() {
        if (pagination == null) {
            pagination = new PaginationHelper(10) {

                @Override
                public int getItemsCount() {
                    return getFacade().count();
                }

                @Override
                public DataModel createPageDataModel() {
                    return new ListDataModel(getFacade().findRange(new int[]{getPageFirstItem(), getPageFirstItem() + getPageSize()}));
                }
            };
        }
        return pagination;
    }

    public String prepareList() {
        recreateModel();
        return "List";
    }

    public String prepareView() {
        current = (User) getItems().getRowData();
        selectedItemIndex = pagination.getPageFirstItem() + getItems().getRowIndex();
        return "View";
    }

    public String prepareCreate() {
        current = new User();
        selectedItemIndex = -1;
        return "Create";
    }

    public String create() {
        try {
            getFacade().create(current);
            JsfUtil.addSuccessMessage(ResourceBundle.getBundle("/resources/Bundle").getString("UserCreated"));
            return prepareCreate();
        } catch (Exception e) {
            JsfUtil.addErrorMessage(e, ResourceBundle.getBundle("/resources/Bundle").getString("PersistenceErrorOccured"));
            return null;
        }
    }

    public String prepareEdit() {
        current = (User) getItems().getRowData();
        selectedItemIndex = pagination.getPageFirstItem() + getItems().getRowIndex();
        return "Edit";
    }

    public String update() {
        try {
            getFacade().edit(current);
            JsfUtil.addSuccessMessage(ResourceBundle.getBundle("/resources/Bundle").getString("UserUpdated"));
            return "View";
        } catch (Exception e) {
            JsfUtil.addErrorMessage(e, ResourceBundle.getBundle("/resources/Bundle").getString("PersistenceErrorOccured"));
            return null;
        }
    }

    public String destroy() {
        current = (User) getItems().getRowData();
        selectedItemIndex = pagination.getPageFirstItem() + getItems().getRowIndex();
        performDestroy();
        recreatePagination();
        recreateModel();
        return "List";
    }

    public String destroyAndView() {
        performDestroy();
        recreateModel();
        updateCurrentItem();
        if (selectedItemIndex >= 0) {
            return "View";
        } else {
            // all items were removed - go back to list
            recreateModel();
            return "List";
        }
    }

    private void performDestroy() {
        try {
            getFacade().remove(current);
            JsfUtil.addSuccessMessage(ResourceBundle.getBundle("/resources/Bundle").getString("UserDeleted"));
        } catch (Exception e) {
            JsfUtil.addErrorMessage(e, ResourceBundle.getBundle("/resources/Bundle").getString("PersistenceErrorOccured"));
        }
    }

    private void updateCurrentItem() {
        int count = getFacade().count();
        if (selectedItemIndex >= count) {
            // selected index cannot be bigger than number of items:
            selectedItemIndex = count - 1;
            // go to previous page if last page disappeared:
            if (pagination.getPageFirstItem() >= count) {
                pagination.previousPage();
            }
        }
        if (selectedItemIndex >= 0) {
            current = getFacade().findRange(new int[]{selectedItemIndex, selectedItemIndex + 1}).get(0);
        }
    }

    public DataModel getItems() {
        if (items == null) {
            items = getPagination().createPageDataModel();
        }
        return items;
    }

    private void recreateModel() {
        items = null;
    }

    private void recreatePagination() {
        pagination = null;
    }

    public String next() {
        getPagination().nextPage();
        recreateModel();
        return "List";
    }

    public String previous() {
        getPagination().previousPage();
        recreateModel();
        return "List";
    }

    public SelectItem[] getItemsAvailableSelectMany() {
        return JsfUtil.getSelectItems(ejbFacade.findAll(), false);
    }

    public SelectItem[] getItemsAvailableSelectOne() {
        return JsfUtil.getSelectItems(ejbFacade.findAll(), true);
    }

    public User getUser(java.lang.Long id) {
        return ejbFacade.find(id);
    }

    @FacesConverter(forClass = User.class)
    public static class UserControllerConverter implements Converter {

        @Override
        public Object getAsObject(FacesContext facesContext, UIComponent component, String value) {
            if (value == null || value.length() == 0) {
                return null;
            }
            UserController controller = (UserController) facesContext.getApplication().getELResolver().
                    getValue(facesContext.getELContext(), null, "userController");
            return controller.getUser(getKey(value));
        }

        java.lang.Long getKey(String value) {
            java.lang.Long key;
            key = Long.valueOf(value);
            return key;
        }

        String getStringKey(java.lang.Long value) {
            StringBuilder sb = new StringBuilder();
            sb.append(value);
            return sb.toString();
        }

        @Override
        public String getAsString(FacesContext facesContext, UIComponent component, Object object) {
            if (object == null) {
                return null;
            }
            if (object instanceof User) {
                User o = (User) object;
                return getStringKey(o.getId());
            } else {
                throw new IllegalArgumentException("object " + object + " is of type " + object.getClass().getName() + "; expected type: " + User.class.getName());
            }
        }

    }

}
