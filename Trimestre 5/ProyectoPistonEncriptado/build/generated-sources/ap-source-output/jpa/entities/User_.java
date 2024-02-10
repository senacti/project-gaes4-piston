package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(User.class)
public class User_ { 

    public static volatile SingularAttribute<User, Date> createdAt;
    public static volatile SingularAttribute<User, String> password;
    public static volatile SingularAttribute<User, Date> emailVerifiedAt;
    public static volatile SingularAttribute<User, String> name;
    public static volatile SingularAttribute<User, Date> twoFactorConfirmedAt;
    public static volatile SingularAttribute<User, String> twoFactorSecret;
    public static volatile SingularAttribute<User, Long> id;
    public static volatile SingularAttribute<User, String> twoFactorRecoveryCodes;
    public static volatile SingularAttribute<User, String> rememberToken;
    public static volatile SingularAttribute<User, String> email;
    public static volatile SingularAttribute<User, Date> updatedAt;

}