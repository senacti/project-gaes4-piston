package jpa.sessions;

import jpa.entities.User;
import java.util.List;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.NoResultException;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

@Stateless
public class UserFacade extends AbstractFacade<User> {

    @PersistenceContext(unitName = "ProyectoPistonPU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public UserFacade() {
        super(User.class);
    }

    public User validarUsuario(String email, String password) {
    try {
        Query query = em.createQuery("SELECT u FROM User u WHERE u.email = :email AND u.password = :password");
        query.setParameter("email", email);
        query.setParameter("password", password);

        List<User> results = query.getResultList();
        if (results != null && !results.isEmpty()) {
            return results.get(0);
        } else {
            return null; 
        }
    } catch (NoResultException e) {
        return null;
    } catch (Exception e) {
        throw new RuntimeException("Error al validar el usuario.", e);
    }
}

    
    public boolean registrarUsuario(User nuevoUsuario) {
    try {
        em.persist(nuevoUsuario);
        return true;
    } catch (Exception e) {
        e.printStackTrace();
        return false;
    }
}
}



    

