package com.api.springapi.entities;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

import java.io.Serializable;
import java.util.Date;

@Entity
@Table(name="fidelizacionClientes")
@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
public class fidelizacionClientes implements Serializable {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="id_cliente")
    private int id;
    private String nombre;
    private String apellido;
    private Integer telefono;
    private String email;
    private Date fecha_de_nacimiento;
    private String ciudad;
    private String direccion;
    private String vehiculo_color;
    private String vehiculo_marca;
    private String vehiculo_matricula;
    private String vehiculo_modelo;
}
