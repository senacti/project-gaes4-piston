package jpa.entities;

import java.math.BigInteger;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(Sessions.class)
public class Sessions_ { 

    public static volatile SingularAttribute<Sessions, String> payload;
    public static volatile SingularAttribute<Sessions, String> ipAddress;
    public static volatile SingularAttribute<Sessions, String> userAgent;
    public static volatile SingularAttribute<Sessions, Integer> lastActivity;
    public static volatile SingularAttribute<Sessions, String> id;
    public static volatile SingularAttribute<Sessions, BigInteger> userId;

}