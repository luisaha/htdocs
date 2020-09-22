<?

    include_once ('DB.php');

    class Klasse
    {
        /*public function formfields()
        {
            $name = $_POST['name'];                 //In Variable $name wird aus Formular gelesener Inhalt bei Feld "name" eingespeichert
            $age = $_POST['age'];
        }*/


        public function createPerson()
        {

            $name = $_POST['name'];                 //In Variable $name wird aus Formular gelesener Inhalt bei Feld "name" eingespeichert
            $age = $_POST['age'];
            $db = DB::getInstance();                //Neue Instanz für bestehende DBverbindung aufbauen und in Var $db gegeben. :: da static
            $sql = "INSERT INTO person (name,age) VALUES ('$name','$age');"; //In var $sql wird Array mit MySQL Anweisung und Daten aus Formular gegeben
            $result = $db->query($sql);             //In Var $result wird mittels $db Instanz auf die Funktion query() (Aus DB.php) zugegriffen und der Array $sql mitgegeben.


        }

        public static function greetings()
        {

                $name = $_POST['name'];
                $age = $_POST['age'];
                $ausgabe = [];                      //Leeres Array. Wäre dies ein String und man möchte die Ausgaben aller Bedingungen nacheinander ausgeben, dann ...   $ausgabe .= 'Angehangener Teil';
                if ($age < 10) {
                     $ausgabe[] = $name . ' ist ein Kind.';
                } elseif ($age <= 20) {
                    $ausgabe[] =  $name . ' ist ein Teenager.';
                } else {
                    $ausgabe[] = $name . ' ist älter als 20. ';
                }

                switch ($age):
                    case 10:
                        $ausgabe[] = ' Hey';        //Bei Arrays werden alle nacheinander gemachten Zuweisungen als Elemente des Arrays gespeichert. Daher kein .=  wie bei Strings nötig.
                        break;
                    case 20:
                        $ausgabe[] = ' Ho';
                        break;
                    case 30:
                        $ausgabe[] = ' Hi';
                        break;
                    default:
                        $ausgabe[] = $name . 'hat in den letzten 12 Monaten keinen runden Geburtstag gefeiert.';
                endswitch;

//----------------------------------
                // Array gezielt auslesen. Hier der Fall, dass nur ab dem 2. Element in den $result string geschrieben wird.

                $result= '';                        //Neuer leerer String

                foreach ($ausgabe as $key => $value) { // Hier Format mit $key Variable um mittels if Bedingung gewünschte Elemente auszuwählen. $value neue Variable in die Element mit aktuellen Key geschrieben wird.
                    if ($key != 0)
                    {
                        $result .= $value;          //Durch Schleife wird $result immer wieder beschrieben. Damit vorriger Teil nicht überschrieben wird .= (Anhängen)
                    }
                }

                return $result;                     //return immer nur 1 mal verwendbar, dann bricht Funktion oder was auch immer ab. Daher return ganz zum Schluss
        }



        public function summe($eins,$zwei)
        {
            $summe = $eins + $zwei;
            return $summe; //Einfach zu schreiben ist       return $eins + $zwei;
        }



        /*private $id;
       private $id2;


       public function getId()
       {
           return $this->id;
       }

       public function getName()
       {
           return $this->id2;
       }

       public function __construct($eins,$zwei)
       {
           $this->id = $eins;
           $this->id2 = $zwei;
       }*/

    }


