<?php
interface Database {
  public function listarProdutos();
  public function adicionarProduto();
  public function alterarProduto();
}

class MysqlDB implements Database {
  public function listarProdutos() {
  }

  public function adicionarProduto() {
    echo "Adicionando com Mysql";
  }

  public function alterarProduto() {

  }  
}

class OracleDB implements Database {
  public function listarProdutos() {

  }

  public function adicionarProduto() {
    echo "Adicionando com Oracle";
  }

  public function alterarProduto() {

  }  
}

class SqlDB implements Database {
  public function listarProdutos() {

  }

  public function adicionarProduto() {
    echo "Adicionando com Sql";
  }

  public function alterarProduto() {

  }  
}

$db = new SqlDB();
$db->adicionarProduto();