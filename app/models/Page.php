<?php

class Page
{
   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   // ====GET ALL RECORDS====
   public function getAll($table, $orderby)
   {
      $this->db->query("SELECT * FROM $table ORDER BY $orderby DESC");

      return $this->db->resultSet();
   }
   // SELECT ALL ACTIVE NFTS
   public function getAllActive($table, $col)
   {
      $this->db->query("SELECT * FROM $table WHERE visibility = '0' ORDER BY $col DESC");

      return $this->db->resultSet();
   }

     // SELECT ALL ACTIVE NFTS LIMIT
     public function getAllActiveLimit($table, $col, $limit)
     {
        $this->db->query("SELECT * FROM $table WHERE visibility = '0' ORDER BY $col DESC LIMIT $limit");
  
        return $this->db->resultSet();
     }

   // SELECT ACTIVE NFTS BY USER ID
   public function getActiveId($table, $col, $param, $orderby)
   {
      $this->db->query("SELECT * FROM $table WHERE $col = '$param' AND visibility = '0' ORDER BY $orderby DESC");

      return $this->db->resultSet();
   }
   // SELECT INACTIVE NFTS BY USER ID
   public function getInactiveId($table, $col, $param, $orderby)
   {
      $this->db->query("SELECT * FROM $table WHERE $col = '$param' AND visibility = '1' ORDER BY $orderby DESC");

      return $this->db->resultSet();
   }
   
     public function selectWhereAnd($table, $col, $param, $cols, $params)
     {
        $this->db->query("SELECT * FROM $table WHERE $col = '$param' AND $cols = '$params'");
  
        return $this->db->singleSet();
     }

   // SELECT ALL WITH WHERE CLAUSE
   public function selectWhere($table, $col, $param, $orderby)
   {
      $this->db->query("SELECT * FROM $table WHERE $col = '$param' ORDER BY $orderby DESC");

      return $this->db->resultSet();
   }
   // SELECT ALL WITH WHERE CLAUSE LIMIT
   public function selectLimit($table, $col, $param, $limit)
   {
      $this->db->query("SELECT * FROM $table WHERE $col = '$param' LIMIT $limit");

      return $this->db->singleSet();
   }
}