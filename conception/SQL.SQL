/*
----------------------------------------------------------------------------
    g�n�ration d'une base de donn�es pour
    microsoft sql server
    (1/10/2024 22:02:19)
----------------------------------------------------------------------------
    nom de la base : mlr1
    projet : ges_salles
    auteur : youms
    date de derni�re modification : 1/10/2024 22:01:16
----------------------------------------------------------------------------
*/

if exists
   (
   select 1
   from  sysobjects
   where  name = 'room'
   and type = 'u'
   )
   drop table room
go

if exists
   (
   select 1
   from  sysobjects
   where  name = 'users'
   and type = 'u'
   )
   drop table users
go

if exists
   (
   select 1
   from  sysobjects
   where  name = 'reserver'
   and type = 'u'
   )
   drop table reserver
go



/* -----------------------------------------------------------------------------
      table : room
----------------------------------------------------------------------------- */

create table room
(
     id char(32) not null,
     intitule char(32) not null,
     localisation char(32) not null,
     dimensions char(32) not null,
     prix char(32) not null
)
go


sp_primarykey room, id
go



/* -----------------------------------------------------------------------------
      table : users
----------------------------------------------------------------------------- */

create table users
(
     id char(32) not null,
     auth_provider char(32) not null,
     nom char(32) not null,
     email char(32) not null,
     password char(32) not null,
     role char(32) not null
)
go


sp_primarykey users, id
go



/* -----------------------------------------------------------------------------
      table : reserver
----------------------------------------------------------------------------- */

create table reserver
(
     id char(32) not null,
     id_1 char(32) not null
)
go



/*      index de reserver      */


sp_primarykey reserver, id, id_1
go



/* -----------------------------------------------------------------------------
    refrences sur les tables
----------------------------------------------------------------------------- */


sp_foreignkey reserver, users, id
go


sp_foreignkey reserver, room, id_1
go



/*
-----------------------------------------------------------------------------
    fin de generation
-----------------------------------------------------------------------------
*/
