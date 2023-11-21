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
@Table(name = "ventas")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Ventas.findAll", query = "SELECT v FROM Ventas v")
    , @NamedQuery(name = "Ventas.findById", query = "SELECT v FROM Ventas v WHERE v.id = :id")
    , @NamedQuery(name = "Ventas.findByMecanico", query = "SELECT v FROM Ventas v WHERE v.mecanico = :mecanico")
    , @NamedQuery(name = "Ventas.findByPorcentaje", query = "SELECT v FROM Ventas v WHERE v.porcentaje = :porcentaje")
    , @NamedQuery(name = "Ventas.findByMarcaDelVehiculo", query = "SELECT v FROM Ventas v WHERE v.marcaDelVehiculo = :marcaDelVehiculo")
    , @NamedQuery(name = "Ventas.findByModeloVehiculo", query = "SELECT v FROM Ventas v WHERE v.modeloVehiculo = :modeloVehiculo")
    , @NamedQuery(name = "Ventas.findByMatricula", query = "SELECT v FROM Ventas v WHERE v.matricula = :matricula")
    , @NamedQuery(name = "Ventas.findByVin", query = "SELECT v FROM Ventas v WHERE v.vin = :vin")
    , @NamedQuery(name = "Ventas.findByFechaDeSolicitud", query = "SELECT v FROM Ventas v WHERE v.fechaDeSolicitud = :fechaDeSolicitud")
    , @NamedQuery(name = "Ventas.findByServicio", query = "SELECT v FROM Ventas v WHERE v.servicio = :servicio")
    , @NamedQuery(name = "Ventas.findByProducto", query = "SELECT v FROM Ventas v WHERE v.producto = :producto")
    , @NamedQuery(name = "Ventas.findByTotal", query = "SELECT v FROM Ventas v WHERE v.total = :total")
    , @NamedQuery(name = "Ventas.findByCreatedAt", query = "SELECT v FROM Ventas v WHERE v.createdAt = :createdAt")
    , @NamedQuery(name = "Ventas.findByUpdatedAt", query = "SELECT v FROM Ventas v WHERE v.updatedAt = :updatedAt")
    , @NamedQuery(name = "Ventas.findByInhabilitado", query = "SELECT v FROM Ventas v WHERE v.inhabilitado = :inhabilitado")})
public class Ventas implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id")
    private Long id;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Mecanico")
    private String mecanico;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Porcentaje")
    private String porcentaje;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "MarcaDelVehiculo")
    private String marcaDelVehiculo;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "ModeloVehiculo")
    private String modeloVehiculo;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Matricula")
    private String matricula;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Vin")
    private String vin;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "FechaDeSolicitud")
    private String fechaDeSolicitud;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Servicio")
    private String servicio;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Producto")
    private String producto;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "Total")
    private String total;
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

    public Ventas() {
    }

    public Ventas(Long id) {
        this.id = id;
    }

    public Ventas(Long id, String mecanico, String porcentaje, String marcaDelVehiculo, String modeloVehiculo, String matricula, String vin, String fechaDeSolicitud, String servicio, String producto, String total, boolean inhabilitado) {
        this.id = id;
        this.mecanico = mecanico;
        this.porcentaje = porcentaje;
        this.marcaDelVehiculo = marcaDelVehiculo;
        this.modeloVehiculo = modeloVehiculo;
        this.matricula = matricula;
        this.vin = vin;
        this.fechaDeSolicitud = fechaDeSolicitud;
        this.servicio = servicio;
        this.producto = producto;
        this.total = total;
        this.inhabilitado = inhabilitado;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getMecanico() {
        return mecanico;
    }

    public void setMecanico(String mecanico) {
        this.mecanico = mecanico;
    }

    public String getPorcentaje() {
        return porcentaje;
    }

    public void setPorcentaje(String porcentaje) {
        this.porcentaje = porcentaje;
    }

    public String getMarcaDelVehiculo() {
        return marcaDelVehiculo;
    }

    public void setMarcaDelVehiculo(String marcaDelVehiculo) {
        this.marcaDelVehiculo = marcaDelVehiculo;
    }

    public String getModeloVehiculo() {
        return modeloVehiculo;
    }

    public void setModeloVehiculo(String modeloVehiculo) {
        this.modeloVehiculo = modeloVehiculo;
    }

    public String getMatricula() {
        return matricula;
    }

    public void setMatricula(String matricula) {
        this.matricula = matricula;
    }

    public String getVin() {
        return vin;
    }

    public void setVin(String vin) {
        this.vin = vin;
    }

    public String getFechaDeSolicitud() {
        return fechaDeSolicitud;
    }

    public void setFechaDeSolicitud(String fechaDeSolicitud) {
        this.fechaDeSolicitud = fechaDeSolicitud;
    }

    public String getServicio() {
        return servicio;
    }

    public void setServicio(String servicio) {
        this.servicio = servicio;
    }

    public String getProducto() {
        return producto;
    }

    public void setProducto(String producto) {
        this.producto = producto;
    }

    public String getTotal() {
        return total;
    }

    public void setTotal(String total) {
        this.total = total;
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
        if (!(object instanceof Ventas)) {
            return false;
        }
        Ventas other = (Ventas) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "jpa.entities.Ventas[ id=" + id + " ]";
    }
    
}
