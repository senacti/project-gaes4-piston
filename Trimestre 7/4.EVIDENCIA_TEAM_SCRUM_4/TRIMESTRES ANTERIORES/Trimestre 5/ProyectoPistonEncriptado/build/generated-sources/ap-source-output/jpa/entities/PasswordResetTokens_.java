package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(PasswordResetTokens.class)
public class PasswordResetTokens_ { 

    public static volatile SingularAttribute<PasswordResetTokens, Date> createdAt;
    public static volatile SingularAttribute<PasswordResetTokens, String> email;
    public static volatile SingularAttribute<PasswordResetTokens, String> token;

}