<?php
    class Rollercoasters{
        private $db;
        // maakt een constructor 
        public function __construct()
        {
            $this->db = new Database;
        }
        // haalt de data uit de db op door query- select... execute de code die de data ophaalt en vervolgens returned ze de opgevraagde data terug uit de database
        public function getCoasters(){
            $this->db->query('SELECT * FROM rollercoaster');
            $this->db->execute();
            return $this->db->resultSet();
        }
    }
?>