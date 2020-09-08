<?php

    include_once ('DB.php');
    include_once ('Customer.php');
    include_once ('includes/config.inc.php');



    class CustomerService
    {


        public static function loadCustomers()
        {
            $db = DB::getInstance();
            $query = 'SELECT * FROM customer';
            $result = $db->selectQuery($query);
            $customers = [];
            foreach($result as $customerRow)
            {
                $customer = new Customer($customerRow['id'], $customerRow['name'], $customerRow['address']);
                if ($customer instanceof Customer) {
                    $customers[] = $customer;
                }
            }
            return $customers;
        }

        public static function createCustomer()
        {

            $customer = $_POST['customerName'];
            $address = $_POST['customerAddress'];
            $db = DB::getInstance();
            $sql = "INSERT INTO customer (name, address) VALUES ('$customer','$address');";
            $result = $db->query($sql);
            if ($result)
            {
                header('Location: index.php?signup=success');
            }
        }

        public static function deleteCustomer()
        {
            $db = DB::getInstance();
            $id = $_GET['delete'];
            $sql = "DELETE FROM Customer WHERE id=$id";
            $result = $db->query($sql);
            if ($result)
            {
                header("location: index.php?delete=success");
            }
        }

        public static function loadCustomer()
        {
            $db = DB::getInstance();
            $id = $_GET['edit'];
            $sql = "SELECT * FROM customer WHERE id=$id";
            $result = $db->selectQuery($sql);
            //$customers = [];
            //$customer = new Customer($customerRow['id'], $customerRow['name'], $customerRow['address']);

                foreach($result as $customerRow)
                {
                    $customer = new Customer($customerRow['id'], $customerRow['name'], $customerRow['address']);
                }
                return $customer;

        }

        public static function updateCustomer()
        {
            $id = $_POST['id'];
            $customer = $_POST['name'];
            $address = $_POST['address'];
            $db = DB::getInstance();
            $sql = "UPDATE customer SET name='$customer', address='$address' WHERE id=$id";
            $result = $db->query($sql);
            if ($result)
            {
                header("location: index.php?edit=success");
            }
        }

    }