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
import javax.persistence.Lob;
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
@Table(name = "personal_access_tokens")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "PersonalAccessTokens.findAll", query = "SELECT p FROM PersonalAccessTokens p")
    , @NamedQuery(name = "PersonalAccessTokens.findById", query = "SELECT p FROM PersonalAccessTokens p WHERE p.id = :id")
    , @NamedQuery(name = "PersonalAccessTokens.findByTokenableType", query = "SELECT p FROM PersonalAccessTokens p WHERE p.tokenableType = :tokenableType")
    , @NamedQuery(name = "PersonalAccessTokens.findByTokenableId", query = "SELECT p FROM PersonalAccessTokens p WHERE p.tokenableId = :tokenableId")
    , @NamedQuery(name = "PersonalAccessTokens.findByName", query = "SELECT p FROM PersonalAccessTokens p WHERE p.name = :name")
    , @NamedQuery(name = "PersonalAccessTokens.findByToken", query = "SELECT p FROM PersonalAccessTokens p WHERE p.token = :token")
    , @NamedQuery(name = "PersonalAccessTokens.findByLastUsedAt", query = "SELECT p FROM PersonalAccessTokens p WHERE p.lastUsedAt = :lastUsedAt")
    , @NamedQuery(name = "PersonalAccessTokens.findByExpiresAt", query = "SELECT p FROM PersonalAccessTokens p WHERE p.expiresAt = :expiresAt")
    , @NamedQuery(name = "PersonalAccessTokens.findByCreatedAt", query = "SELECT p FROM PersonalAccessTokens p WHERE p.createdAt = :createdAt")
    , @NamedQuery(name = "PersonalAccessTokens.findByUpdatedAt", query = "SELECT p FROM PersonalAccessTokens p WHERE p.updatedAt = :updatedAt")})
public class PersonalAccessTokens implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id")
    private Long id;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "tokenable_type")
    private String tokenableType;
    @Basic(optional = false)
    @NotNull
    @Column(name = "tokenable_id")
    private long tokenableId;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "name")
    private String name;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 64)
    @Column(name = "token")
    private String token;
    @Lob
    @Size(max = 65535)
    @Column(name = "abilities")
    private String abilities;
    @Column(name = "last_used_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date lastUsedAt;
    @Column(name = "expires_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date expiresAt;
    @Column(name = "created_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date createdAt;
    @Column(name = "updated_at")
    @Temporal(TemporalType.TIMESTAMP)
    private Date updatedAt;

    public PersonalAccessTokens() {
    }

    public PersonalAccessTokens(Long id) {
        this.id = id;
    }

    public PersonalAccessTokens(Long id, String tokenableType, long tokenableId, String name, String token) {
        this.id = id;
        this.tokenableType = tokenableType;
        this.tokenableId = tokenableId;
        this.name = name;
        this.token = token;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getTokenableType() {
        return tokenableType;
    }

    public void setTokenableType(String tokenableType) {
        this.tokenableType = tokenableType;
    }

    public long getTokenableId() {
        return tokenableId;
    }

    public void setTokenableId(long tokenableId) {
        this.tokenableId = tokenableId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getToken() {
        return token;
    }

    public void setToken(String token) {
        this.token = token;
    }

    public String getAbilities() {
        return abilities;
    }

    public void setAbilities(String abilities) {
        this.abilities = abilities;
    }

    public Date getLastUsedAt() {
        return lastUsedAt;
    }

    public void setLastUsedAt(Date lastUsedAt) {
        this.lastUsedAt = lastUsedAt;
    }

    public Date getExpiresAt() {
        return expiresAt;
    }

    public void setExpiresAt(Date expiresAt) {
        this.expiresAt = expiresAt;
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

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof PersonalAccessTokens)) {
            return false;
        }
        PersonalAccessTokens other = (PersonalAccessTokens) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "jpa.entities.PersonalAccessTokens[ id=" + id + " ]";
    }
    
}
