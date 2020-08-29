<?php
    class Organizer
    {
        private string $organizerName;
        private string $organizerBankAccount;
        private float $organizerAmount;

        public function getOrganizerName()
        {
            return $this->organizerName;
        }

        public function getOrganizerBankAccount()
        {
            return $this->organizerBankAccount;
        }

        public function getOrganizerAmount()
        {
            return $this->organizerAmount;
        }

    }
?>