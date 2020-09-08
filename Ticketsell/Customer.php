<?php
    include_once ('CustomerService.php');

    class Customer
    {
        private int $customerId;
        private string $customerName;
        private string $customerAddress;

        public function __construct(int $customerId, String $customerName, String $customerAddress)
        {
            $this->customerId = $customerId;
            $this->customerName = $customerName;
            $this->customerAddress = $customerAddress;
        }

        public function getCustomerName()
        {
            return $this->customerName;
        }

        public function getCustomerAddress()
        {
            return $this->customerAddress;
        }

        public function getCustomerId() {
            return $this->customerId;
        }

    }
?>