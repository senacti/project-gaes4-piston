package com.api.springapi.repositories;

import com.api.springapi.entities.fidelizacionClientes;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository

public interface fidelizacionClientesRepository  extends JpaRepository<fidelizacionClientes, Integer> {
}
