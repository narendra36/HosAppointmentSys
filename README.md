# HosAppointmentSys
Hospital Appointment System

#HOW TO IMPORT/EXPORT DATABASE TO/FROM .sql FILE :
    
If it's an entire DB, then:

    $ mysqldump -u [uname] -p[pass] db_name > db_backup.sql

If it's all DBs, then:

    $ mysqldump -u [uname] -p[pass] --all-databases > all_db_backup.sql
    
If it's specific tables within a DB, then:

    $ mysqldump -u [uname] -p[pass] db_name table1 table2 > table_backup.sql
    

You can even go as far as auto-compressing the output using gzip (if your DB is very big):

    $ mysqldump -u [uname] -p[pass] db_name | gzip > db_backup.sql.gz

If you want to do this remotely and you have the access to the server in question, then the following would work (presuming the MySQL server is on port 3306):

    $ mysqldump -P 3306 -h [ip_address] -u [uname] -p[pass] db_name > db_backup.sql


**To import**

Type the following command to import sql data file:

    $ mysql -u username -p -h localhost DATA-BASE-NAME < data.sql

In this example, import 'data.sql' file into 'blog' database using Sathish as username:

    $ mysql -u sat -p -h localhost blog < data.sql

If you have a dedicated database server, replace localhost hostname with with actual server name or IP address as follows:

    $ mysql -u username -p -h 202.54.1.10 databasename < data.sql

OR use hostname such as mysql.cyberciti.biz

    $ mysql -u username -p -h mysql.cyberciti.biz database-name < data.sql

If you do not know the database name or database name is included in sql dump you can try out something as follows:


    $ mysql -u username -p -h 202.54.1.10 < data.sql
    
    
