<?php

    include_once ('includes/config.inc.php');
    include_once ('Customer.php');
    include_once ('DB.php');

    class Customer
    {
        private string $customerName;
        private string $customerAddress;


        public function getCustomerName()
        {
            return $this->customerName;
        }

        public function getCustomerAddress()
        {
            return $this->customerAddress;
        }

        public static function loadCustomers()
        {
            $db = new DB();
            $abc = 'SELECT * FROM customer';

            $result = $db->query($abc);

            return $result;
        }

        public static function createCustomer()
        {

            $customer = $_POST['customerName'];
            $address = $_POST['customerAddress'];

            $database = new DB();

            $sql = "INSERT INTO customer (name, address) VALUES ('$customer','$address');";

            $result = $database->query($sql);
            //header('Location: ../index.php?signup=success');
        }

    }


?>