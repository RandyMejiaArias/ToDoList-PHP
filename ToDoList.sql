/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     9/3/2020 17:50:32                            */
/*==============================================================*/


drop table if exists TASK;

/*==============================================================*/
/* Table: TASK                                                  */
/*==============================================================*/
create table TASK
(
   IDTASK               int(8) not null auto_increment,
   TITLETASK            varchar(256) not null,
   DESCRIPTIONTASK      text not null,
   CREATED_AT           timestamp not null,
   primary key (IDTASK)
);

