//we have user entity with columns username, passworD

CREATE TABLE data(user_id int,password int);

CREATE TABLE ADDRESS(id int not null,user_id int,adress varchar(250),PRIMARY KEY (id),FOREIGN KEY(user_id),REFERENCEs USER(user_id));