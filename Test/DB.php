<?

    error_reporting(E_ALL);

    define ( 'MYSQL_host','localhost' ); //define() Konstanten zu definieren
    define ( 'MYSQL_user','root' );
    define ( 'MYSQL_password','root' );
    define ( 'MYSQL_database','test' );

    class DB {
        private $db;
        private static $instance = null;

        private function __construct() //Konstruktor wird direkt bei Aufruf der Klasse ausgeführt und generiert gleichzeitig neue Instanz.
        {
            $this->db = mysqli_connect (MYSQL_host,MYSQL_user,MYSQL_password,MYSQL_database);

            mysqli_set_charset($this->db,'utf8');

            if (!$this->db)
            {
                die('Unable to connect to database: '.  mysqli_error());
            }
        }

        public static function getInstance()
        {
            if (static::$instance == null) //static:: ist der Zeiger bei statischen Attributen und Methoden, ähnlich wie $this->
            {
                static::$instance = new static(); //?????? woher static() ?????
            }
            return static::$instance;
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

