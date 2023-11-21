/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpa.sessions;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import jpa.entities.PersonalAccessTokens;

/**
 *
 * @author USER
 */
@Stateless
public class PersonalAccessTokensFacade extends AbstractFacade<PersonalAccessTokens> {

    @PersistenceContext(unitName = "ProyectoPistonPU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public PersonalAccessTokensFacade() {
        super(PersonalAccessTokens.class);
    }
    
}
