import javax.inject.Named;
import javax.enterprise.context.SessionScoped;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

@Named("ciudadesController")
@SessionScoped
public class CiudadesController implements Serializable {

    private final List<String> ciudades;
    private String ciudadSeleccionada;

    public CiudadesController() {
    ciudades = new ArrayList<>();
    ciudades.add("Bogotá");
    ciudades.add("Medellín");
    ciudades.add("Cali");
    ciudades.add("Barranquilla");
    ciudades.add("Cartagena");
    ciudades.add("San Marta");
    ciudades.add("Bucaramanga");
    ciudades.add("Cúcuta");
    ciudades.add("Pereira");
    ciudades.add("Santa Marta");
    ciudades.add("Manizales");
    ciudades.add("Ibagué");
    ciudades.add("Pasto");
    ciudades.add("Neiva");
    ciudades.add("Popayán");
    ciudades.add("Valledupar");
    ciudades.add("Villavicencio");
    ciudades.add("Montería");
    ciudades.add("Sincelejo");
    ciudades.add("Tunja");


       
        
        // Agrega más ciudades según sea necesario
    }

    public List<String> getCiudades() {
        return ciudades;
    }

    public String getCiudadSeleccionada() {
        return ciudadSeleccionada;
    }

    public void setCiudadSeleccionada(String ciudadSeleccionada) {
        this.ciudadSeleccionada = ciudadSeleccionada;
    }
}
