package com.api.springapi.services;

import com.api.springapi.entities.fidelizacionClientes;
import com.api.springapi.repositories.fidelizacionClientesRepository;
import jakarta.transaction.Transactional;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class fidelizacionClientesService implements BaseService{

    private fidelizacionClientesRepository fidelizacionClientesRepository;

    public fidelizacionClientesService(fidelizacionClientesRepository fidelizacionClientesRepository)
    {
        this.fidelizacionClientesRepository = fidelizacionClientesRepository;
    }


    @Override
    @Transactional

    public List findAll() throws Exception {
        try {
            List<fidelizacionClientes>entities=fidelizacionClientesRepository.findAll();
            return entities;
        }catch (Exception e)
        {
            throw new Exception(e.getMessage());
        }
    }

    @Override
    @Transactional
    public fidelizacionClientes findById(Integer id) throws Exception {
        try {
            Optional<fidelizacionClientes> entityOptional = fidelizacionClientesRepository.findById(id);
            return entityOptional.get();
        }catch (Exception e)
        {
            throw new Exception(e.getMessage());
        }
    }

    @Override
    @Transactional
    public Object save(Object entity) throws Exception {
        try {
            //entity = fidelizacionClientesRepository.save(entity);
            return entity;
        }catch (Exception e)
        {
            throw new Exception(e.getMessage());
        }
    }

    @Override
    @Transactional
    public Object update(Integer id, Object entity) throws Exception {
        try {
            Optional<fidelizacionClientes> entityOptional = fidelizacionClientesRepository.findById(id);
            fidelizacionClientes clientes = entityOptional.get();
            clientes =  fidelizacionClientesRepository.save(clientes);
            return clientes;
        }catch (Exception e)
        {
            throw new Exception(e.getMessage());
        }
    }

    @Override
    @Transactional
    public boolean delete(Integer id) throws Exception {
        try {
            if(fidelizacionClientesRepository.existsById(id))
            {
                fidelizacionClientesRepository.deleteById(id);
                return true;
            }else{
                throw new Exception();
            }
        }catch (Exception e)
        {
            throw new Exception(e.getMessage());
        }
    }


}
