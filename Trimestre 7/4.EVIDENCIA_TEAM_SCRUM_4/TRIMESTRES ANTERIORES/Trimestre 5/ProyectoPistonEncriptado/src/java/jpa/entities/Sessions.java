/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpa.entities;

import java.io.Serializable;
import java.math.BigInteger;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Lob;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author USER
 */
@Entity
@Table(name = "sessions")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Sessions.findAll", query = "SELECT s FROM Sessions s")
    , @NamedQuery(name = "Sessions.findById", query = "SELECT s FROM Sessions s WHERE s.id = :id")
    , @NamedQuery(name = "Sessions.findByUserId", query = "SELECT s FROM Sessions s WHERE s.userId = :userId")
    , @NamedQuery(name = "Sessions.findByIpAddress", query = "SELECT s FROM Sessions s WHERE s.ipAddress = :ipAddress")
    , @NamedQuery(name = "Sessions.findByLastActivity", query = "SELECT s FROM Sessions s WHERE s.lastActivity = :lastActivity")})
public class Sessions implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 255)
    @Column(name = "id")
    private String id;
    @Column(name = "user_id")
    private BigInteger userId;
    @Size(max = 45)
    @Column(name = "ip_address")
    private String ipAddress;
    @Lob
    @Size(max = 65535)
    @Column(name = "user_agent")
    private String userAgent;
    @Basic(optional = false)
    @NotNull
    @Lob
    @Size(min = 1, max = 2147483647)
    @Column(name = "payload")
    private String payload;
    @Basic(optional = false)
    @NotNull
    @Column(name = "last_activity")
    private int lastActivity;

    public Sessions() {
    }

    public Sessions(String id) {
        this.id = id;
    }

    public Sessions(String id, String payload, int lastActivity) {
        this.id = id;
        this.payload = payload;
        this.lastActivity = lastActivity;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public BigInteger getUserId() {
        return userId;
    }

    public void setUserId(BigInteger userId) {
        this.userId = userId;
    }

    public String getIpAddress() {
        return ipAddress;
    }

    public void setIpAddress(String ipAddress) {
        this.ipAddress = ipAddress;
    }

    public String getUserAgent() {
        return userAgent;
    }

    public void setUserAgent(String userAgent) {
        this.userAgent = userAgent;
    }

    public String getPayload() {
        return payload;
    }

    public void setPayload(String payload) {
        this.payload = payload;
    }

    public int getLastActivity() {
        return lastActivity;
    }

    public void setLastActivity(int lastActivity) {
        this.lastActivity = lastActivity;
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
        if (!(object instanceof Sessions)) {
            return false;
        }
        Sessions other = (Sessions) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "jpa.entities.Sessions[ id=" + id + " ]";
    }
    
}
