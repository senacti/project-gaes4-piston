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
@Table(name = "productos")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Productos.findAll", query = "SELECT p FROM Productos p")
    , @NamedQuery(name = "Productos.findById", query = "SELECT p FROM Productos p WHERE p.id = :id")
    , @NamedQuery(name = "Productos.findByNombreProducto", query = "SELECT p FROM Productos p WHERE p.nombreProducto = :nombreProducto")
    , @NamedQuery(name = "Productos.findByCantidadProducto", query = "SELECT p FROM Productos p WHERE p.cantidadProducto = :cantidadProducto")
    , @NamedQuery(name = "Productos.findByDescripcion", query = "SELECT p FROM Productos p WHERE p.descripcion = :descripcion")
    , @NamedQuery(name = "Productos.findByIdCategoriaDeProductos", query = "SELECT p FROM Productos p WHERE p.idCategoriaDeProductos = :idCategoriaDeProductos")
    , @NamedQuery(name = "Productos.findByCreatedAt", query = "SELECT p FROM Productos p WHERE p.createdAt = :createdAt")
    , @NamedQuery(name = "Productos.findByUpdatedAt", query = "SELECT p FROM Productos p WHERE p.updatedAt = :updatedAt")
    , @NamedQuery(name = "Productos.findByInhabilitado", query = "SELECT p FROM Productos p WHERE p.inhabilitado = :inhabilitado")})
public class Productos implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id")
    private Integer id;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "NOMBRE_PRODUCTO")
    private String nombreProducto;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "CANTIDAD_PRODUCTO")
    private String cantidadProducto;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "DESCRIPCION")
    private String descripcion;
    @Basic(optional = false)
    @NotNull
    @Column(name = "ID_CATEGORIA_DE_PRODUCTOS")
    private int idCategoriaDeProductos;
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

    public Productos() {
    }

    public Productos(Integer id) {
        this.id = id;
    }

    public Productos(Integer id, String nombreProducto, String cantidadProducto, String descripcion, int idCategoriaDeProductos, boolean inhabilitado) {
        this.id = id;
        this.nombreProducto = nombreProducto;
        this.cantidadProducto = cantidadProducto;
        this.descripcion = descripcion;
        this.idCategoriaDeProductos = idCategoriaDeProductos;
        this.inhabilitado = inhabilitado;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNombreProducto() {
        return nombreProducto;
    }

    public void setNombreProducto(String nombreProducto) {
        this.nombreProducto = nombreProducto;
    }

    public String getCantidadProducto() {
        return cantidadProducto;
    }

    public void setCantidadProducto(String cantidadProducto) {
        this.cantidadProducto = cantidadProducto;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public int getIdCategoriaDeProductos() {
        return idCategoriaDeProductos;
    }

    public void setIdCategoriaDeProductos(int idCategoriaDeProductos) {
        this.idCategoriaDeProductos = idCategoriaDeProductos;
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
        if (!(object instanceof Productos)) {
            return false;
        }
        Productos other = (Productos) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "jpa.entities.Productos[ id=" + id + " ]";
    }
    
}
