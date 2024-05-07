package com.api.springapi.controllers;

import com.api.springapi.services.fidelizacionClientesService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("api/v1/fidelizacionClientes")
@CrossOrigin(origins = "*")
public class fidelizacionClientesController {

    private fidelizacionClientesService fidelizacionClientesService;

    public fidelizacionClientesController(fidelizacionClientesService FidelizacionClientesService ) {
        this.fidelizacionClientesService = FidelizacionClientesService ;
    }

    @GetMapping("")
    public ResponseEntity<?> getAll() {
        try {
            return ResponseEntity.status(HttpStatus.OK).body(fidelizacionClientesService.findAll());
        } catch (Exception e) {
            return ResponseEntity.status(HttpStatus.NOT_FOUND).body("{\"error\":\"Error. Por favor, inténtelo nuevamente.\"}");
        }
    }

    @GetMapping("/{id}")
    public ResponseEntity<?> getById(@PathVariable Integer id) {
        try {
            return ResponseEntity.status(HttpStatus.OK).body(fidelizacionClientesService.findById(id));
        } catch (Exception e) {
            return ResponseEntity.status(HttpStatus.NOT_FOUND).body("{\"error\":\"Error. Por favor, inténtelo nuevamente.\"}");
        }
    }
}
