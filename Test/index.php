<!DOCTYPE html>

<html>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <?
            include('Klasse.php');
        ?>
        <title>Test</title>
    </header>

    <body class="pt-5">
        <?
            if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'createPerson')
            {
                $greetings = Klasse::greetings();   //Sobald aus Klasse, genauer Methode etwas zurück gegeben wird, muss erst eine neue Variable, hier $greetings definiert und ihr die Methode zugewiesen werden. Dadurch mittels Variable Ergebnisse index.php verarbeitbar.
                $klasse = new Klasse();
                $klasse->createPerson();
            }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <form action="?action=createPerson" method="post">

                            <input type="text" name="name" placeholder="Name"><br><br>
                            <input type="text" name="age" placeholder="Alter"><br><br>
                            <button type="submit" class="btn btn-info" name="save">Speichern</button>
                        </form>
                        <br>
                        <?
                        if (isset($greetings)){     //Da $greetings nur definiert ist, wenn bestimmter Seitenparameter gesetzt, wird Warnung ausgegeben. Daher dieser Format des isset um zu prüfen ob Variable gefüllt, dann ausgeben.
                            echo $greetings;
                        }

                        ?>
                    </div>

                    <?php


                        $blub = new Klasse();
                        echo $blub->summe(5,4);
                        $ausgabe = new Klasse();
                        echo $ausgabe->$blub;
                    ?>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>