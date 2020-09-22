<?php


                if (isset($_GET['signup']) && $_GET['signup']=='success')
                {

                  echo  '<div class="row alert alert-success" role="alert">
                        Der Kunde wurde erfolgreich registriert!
                    </div>';

                }

                if (isset($_GET['delete']) && $_GET['delete'] =='success')
                {

                    echo '<div class="row alert alert-danger" role="alert">
                        Der Kunde wurde gelöscht!
                    </div>';

                }

                if (isset($_GET['edit']) && $_GET['edit'] =='success')
                {

                    echo '<div class="row alert alert-info" role="alert">
                    Die Kundendaten wurden aktualisiert!
                </div>';

                }


?>