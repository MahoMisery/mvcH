<?php
    class Rollercoasters{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getUsers(){
            $this->db->query('SELECT * FROM rollercoaster');
            $this->db->execute();
            return $this->db->resultSet();
        }
    }
?>