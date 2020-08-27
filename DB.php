<?php

    require_once ('includes/config.php');

    class DB {

        public $db;

        function __construct()
        {
            $this->db = mysqli_connect (MYSQL_host, MYSQL_user, MYSQL_password, MYSQL_database);

            mysqli_set_charset($this->db, 'utf8');

            if ( !$this->db)
            {
                die('Unable to connect to the database: ' . mysqli_error());
            }

        }

        function query($sql)
        {
            $array = array();

            $result = mysqli_query($this->db, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
                $array[] = $row;
            }
            return $array;
        }
    }

?>