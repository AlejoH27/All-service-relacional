<?php

function bdCrea(PDO $con)
{
 $con->exec(
  'CREATE TABLE IF NOT EXISTS
    USUARIO (
     USU_ID INTEGER,
     USU_NOMBRE TEXT NOT NULL,
     USU_APELLIDOP TEXT NOT NULL,
     USU_APELLIDOM TEXT NOT NULL,
     USU_CUE TEXT NOT NULL,
     USU_MATCH TEXT NOT NULL,
     CONSTRAINT USU_PK
      PRIMARY KEY(USU_ID),
     CONSTRAINT USU_CUE_UNQ
      UNIQUE(USU_CUE)
    )'
 );
 $con->exec(
  'CREATE TABLE IF NOT EXISTS
    ROL (
     ROL_ID TEXT NOT NULL,
     ROL_DESCRIPCION TEXT NOT NULL,
     CONSTRAINT ROL_PK
      PRIMARY KEY(ROL_ID),
     CONSTRAINT ROL_DESCR_UNQ
      UNIQUE(ROL_DESCRIPCION)
    )'
 );
 $con->exec(
  'CREATE TABLE IF NOT EXISTS
    USU_ROL (
     USU_ID INTEGER NOT NULL,
     ROL_ID TEXT NOT NULL,
     CONSTRAINT USU_ROL_PK
      PRIMARY KEY(USU_ID, ROL_ID),
     CONSTRAINT USU_ROL_USU_FK
      FOREIGN KEY (USU_ID)
      REFERENCES USUARIO(USU_ID),
     CONSTRAINT USU_ROL_ROL_FK
      FOREIGN KEY (ROL_ID)
      REFERENCES ROL(ROL_ID)
    )'
 );
}
