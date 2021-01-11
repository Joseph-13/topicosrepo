use carros;
drop table auto;
create table auto(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
marca varchar(20),
modelo varchar(20),
año int,
placas varchar(10),
kilometraje int,
serie varchar(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

select * from auto;