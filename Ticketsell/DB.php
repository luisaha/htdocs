<?php

    require_once ('includes/config.inc.php');

    class DB {

        private $db;
        private static $instance = null;


        private function __construct()
        {

            $this->db = mysqli_connect (MYSQL_host, MYSQL_user, MYSQL_password, MYSQL_database);

            mysqli_set_charset($this->db, 'utf8');

            if ( !$this->db)
            {
                die('Unable to connect to the database: ' . mysqli_error());
            }

        }

        public static function getInstance()
        {
            if (static::$instance == null)
            {
                static::$instance = new static();
            }
            return static::$instance;
        }


        public function selectQuery($sql)
        {
            $array = array();

            $result = mysqli_query($this->db, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }
            return $array;
        }

        public function query($sql)
        {
            if (mysqli_query($this->db, $sql)) {
                return true;
            }
            $this->getErrorMessage();

            return false;
        }

        private function getErrorMessage()
        {
            echo mysqli_error($this->db);
        }
    }

?>