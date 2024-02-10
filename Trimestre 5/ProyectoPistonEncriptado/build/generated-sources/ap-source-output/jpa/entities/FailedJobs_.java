package jpa.entities;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2024-02-01T10:13:06")
@StaticMetamodel(FailedJobs.class)
public class FailedJobs_ { 

    public static volatile SingularAttribute<FailedJobs, String> exception;
    public static volatile SingularAttribute<FailedJobs, Date> failedAt;
    public static volatile SingularAttribute<FailedJobs, String> payload;
    public static volatile SingularAttribute<FailedJobs, String> connection;
    public static volatile SingularAttribute<FailedJobs, Long> id;
    public static volatile SingularAttribute<FailedJobs, String> uuid;
    public static volatile SingularAttribute<FailedJobs, String> queue;

}