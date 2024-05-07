package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(Users.class)
public class Users_ { 

    public static volatile SingularAttribute<Users, Date> createdAt;
    public static volatile SingularAttribute<Users, String> password;
    public static volatile SingularAttribute<Users, Date> emailVerifiedAt;
    public static volatile SingularAttribute<Users, String> name;
    public static volatile SingularAttribute<Users, Date> twoFactorConfirmedAt;
    public static volatile SingularAttribute<Users, String> twoFactorSecret;
    public static volatile SingularAttribute<Users, Long> id;
    public static volatile SingularAttribute<Users, String> rememberToken;
    public static volatile SingularAttribute<Users, String> twoFactorRecoveryCodes;
    public static volatile SingularAttribute<Users, String> email;
    public static volatile SingularAttribute<Users, Date> updatedAt;

}