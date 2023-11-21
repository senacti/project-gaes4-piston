/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpa.entities;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author USER
 */
@Entity
@Table(name = "mecanicos")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Mecanicos.findAll", query = "SELECT m FROM Mecanicos m")
    , @NamedQuery(name = "Mecanicos.findById", query = "SELECT m FROM Mecanicos m WHERE m.id = :id")
    , @NamedQuery(name = "Mecanicos.findByCedula", query = "SELECT m FROM Mecanicos m WHERE m.cedula = :cedula")
    , @NamedQuery(name = "Mecanicos.findByNombre", query = "SELECT m FROM Mecanicos m WHERE m.nombre = :nombre")
    , @NamedQuery(name = "Mecanicos.findByApellido", query = "SELECT m FROM Mecanicos m WHERE m.apellido = :apellido")
    , @NamedQuery(name = "Mecanicos.findByDireccion", query = "SELECT m FROM Mecanicos m WHERE m.direccion = :direccion")
    , @NamedQuery(name = "Mecanicos.findByTelefono", query = "SELECT m FROM Mecanicos m WHERE m.telefono = :telefono")
    , @NamedQuery(name = "Mecanicos.findByEmail", query = "SELECT m FROM Mecanicos m WHERE m.email = :email")
    , @NamedQuery(name = "Mecanicos.findByCiudad", query = "SELECT m FROM Mecanicos m WHERE m.ciudad = :ciudad")
    , @NamedQuery(name = "Mecanicos.findByEspecialidad", query = "SELECT m FROM Mecanicos m WHERE m.especialidad = :especialidad")
    , @NamedQuery(name = "Mecanicos.findByCreatedAt", query = "SELECT m FROM Mecanicos m WHERE m.createdAt = :createdAt")
    , @NamedQuery(name = "Mecanicos.findByUpdatedAt", query = "SELECT m FROM Mecanicos m WHERE m.updatedAt = :updatedAt")
    , @NamedQuery(name = "Mecanicos.findByInhabilitado", query = "SELECT m FROM Mecanicos m WHERE m.inhabilitado = :inhabilitado")})
public class Mecanicos implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id")
    private Long id;
    @Basic(optional = false)
    @NotNull
    @Column(name = "cedula")
    private int cedula;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "nombre")
    private String nombre;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "apellido")
    private String apellido;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "direccion")
    private String direccion;
    @Basic(optional = false)
    @NotNull
    @Column(name = "telefono")
    private int telefono;
    // @Pattern(regexp="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?", message="Invalid email")//if the field contains email address consider using this annotation to enforce field validation
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "email")
    private String email;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "ciudad")
    private String ciudad;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 45)
    @Column(name = "especialidad")
    private String especialidad;
    @Column(name = "created_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date createdAt;
    @Column(name = "updated_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date updatedAt;
    @Basic(optional = false)
    @NotNull
    @Column(name = "inhabilitado")
    private boolean inhabilitado;

    public Mecanicos() {
    }

    public Mecanicos(Long id) {
        this.id = id;
    }

    public Mecanicos(Long id, int cedula, String nombre, String apellido, String direccion, int telefono, String email, String ciudad, String especialidad, boolean inhabilitado) {
        this.id = id;
        this.cedula = cedula;
        this.nombre = nombre;
        this.apellido = apellido;
        this.direccion = direccion;
        this.telefono = telefono;
        this.email = email;
        this.ciudad = ciudad;
        this.especialidad = especialidad;
        this.inhabilitado = inhabilitado;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public int getCedula() {
        return cedula;
    }

    public void setCedula(int cedula) {
        this.cedula = cedula;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public int getTelefono() {
        return telefono;
    }

    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getCiudad() {
        return ciudad;
    }

    public void setCiudad(String ciudad) {
        this.ciudad = ciudad;
    }

    public String getEspecialidad() {
        return especialidad;
    }

    public void setEspecialidad(String especialidad) {
        this.especialidad = especialidad;
    }

    public Date getCreatedAt() {
        return createdAt;
    }

    public void setCreatedAt(Date createdAt) {
        this.createdAt = createdAt;
    }

    public Date getUpdatedAt() {
        return updatedAt;
    }

    public void setUpdatedAt(Date updatedAt) {
        this.updatedAt = updatedAt;
    }

    public boolean getInhabilitado() {
        return inhabilitado;
    }

    public void setInhabilitado(boolean inhabilitado) {
        this.inhabilitado = inhabilitado;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Mecanicos)) {
            return false;
        }
        Mecanicos other = (Mecanicos) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "jpa.entities.Mecanicos[ id=" + id + " ]";
    }
    
}
