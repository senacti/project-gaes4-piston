package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(PersonalAccessTokens.class)
public class PersonalAccessTokens_ { 

    public static volatile SingularAttribute<PersonalAccessTokens, String> abilities;
    public static volatile SingularAttribute<PersonalAccessTokens, Date> createdAt;
    public static volatile SingularAttribute<PersonalAccessTokens, Date> lastUsedAt;
    public static volatile SingularAttribute<PersonalAccessTokens, String> tokenableType;
    public static volatile SingularAttribute<PersonalAccessTokens, String> name;
    public static volatile SingularAttribute<PersonalAccessTokens, Long> id;
    public static volatile SingularAttribute<PersonalAccessTokens, Long> tokenableId;
    public static volatile SingularAttribute<PersonalAccessTokens, Date> expiresAt;
    public static volatile SingularAttribute<PersonalAccessTokens, String> token;
    public static volatile SingularAttribute<PersonalAccessTokens, Date> updatedAt;

}