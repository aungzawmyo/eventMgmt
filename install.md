<< Requirement >>

Composer version 2.7.2 2024-03-11 17:12:18
PHP version (7.4 to 8) can be used
Mysql 



<< Database >>

- Restore database
    create database name : db_event
    restore this sql file(db_event.sql)


<< Installation >>
-after git clone
    run ( composer install)
-after composer install
    run ( php artisan serve)




note for composer install 


- composer config -g -- disable-tls true

- composer config -g -- disable-tls false