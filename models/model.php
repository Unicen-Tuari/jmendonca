<?php

class Model
{
  protected $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_mascotas;charset=utf8',
            'root', '');
  }

  ?>
