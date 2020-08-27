<?php
    class Event
    {
        private string $eventName;
        private $eventStartTime; //Einfach date als Datentyp angeben?

        public function getEventName()
        {
            return $this->eventName;
        }

        public function getEventStartTime()
        {
            return $this->eventStartTime;
        }
    }
?>