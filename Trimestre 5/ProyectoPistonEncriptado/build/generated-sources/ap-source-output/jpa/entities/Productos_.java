package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(Productos.class)
public class Productos_ { 

    public static volatile SingularAttribute<Productos, String> descripcion;
    public static volatile SingularAttribute<Productos, Date> createdAt;
    public static volatile SingularAttribute<Productos, Integer> idCategoriaDeProductos;
    public static volatile SingularAttribute<Productos, Boolean> inhabilitado;
    public static volatile SingularAttribute<Productos, Integer> id;
    public static volatile SingularAttribute<Productos, String> cantidadProducto;
    public static volatile SingularAttribute<Productos, String> nombreProducto;
    public static volatile SingularAttribute<Productos, Date> updatedAt;

}