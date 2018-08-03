CREATE DATABASE mydb;


CREATE TABLE donors (
    name varchar(30),
    gender varchar(30),
    email varchar(30),
    contact varchar(30),
    country varchar(30),
	state varchar(30),
	city varchar(30),
	address varchar(100),
	bg varchar(30)
);

INSERT INTO donors (name, gender, email,contact,country,state, city,address,bg)
VALUES ('sakshi', 'female', 'sakshi@gmail.com', '9988564589','India','Haryana','Ambala','xyz','o+');