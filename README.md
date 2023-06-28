# PruebaPhp

mysql -u campus -p

create database campuslands;

use campuslands

create table campers(
    -> idCamper int not null auto_increment,
    -> nombreCamper varchar(50),
    -> apellidoCamper varchar(50),
    -> fechaNac date,
    -> CONSTRAINT pk_campers primary key(idCamper)
    -> );

create table region(
    -> idReg int not null auto_increment,
    -> nombreReg varchar(50),
    -> constraint pk_region primary key(idReg)
    -> ); 

create table departamento(
    -> idDep int not null auto_increment,
    -> nombreDep varchar(50),
    -> constraint pk_departamento primary key(idDep)
    -> );

create table pais(
    -> idPais int not null auto_increment,
    -> nombrePais varchar(50),
    -> constraint pk_pais primary key(idPais)
    -> );

alter table departamento add idPais int(11);

alter table departamento add constraint fk_PaisDep foreign key (idPais) references pais(idPais);

alter table region add idDep int(11);

alter table region add constraint fk_DepRegion foreign key (idDep) references pais(idDep);

alter table campers add idReg int(11);

alter table region add constraint fk_RegionCamp foreign key (idReg) references pais(idReg);