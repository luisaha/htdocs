<?php

    if ($update == true) {
        echo '<form action = "?action=updateCustomer" method = "post" >
            <div>
                <input type = "hidden" name = "id" value = "';
                echo $customer->getCustomerId();
                echo '" >
            </div>
            ';
    }
    else {
        echo '<form action = "?action=createCustomer" method = "post" >';
    }

    echo '<div class="form-group" >
          <input type = "text" class="form-control" name = "customerName" method = "post" value = " 
          ';

    echo $update==true ? $customer->getCustomerName() : '' ;

    echo '" placeholder = "Name" >
         </div >
         <div class="form-group" >
         <input type = "text" class="form-control" name = "customerAddress" method = "post" value = " 
         ';

    echo $update==true ? $customer->getCustomerAddress() : '';

    echo ' " placeholder = "Adresse" >
         </div >
         ';

    if ($update == true) {
        echo '<button type = "submit" class="btn btn-info rounded-pill" name = "update" > Änderungen speichern </button >';
    } else {
        echo '<button type = "submit" class="btn btn-primary rounded-pill" > Registrieren</button >';
    }
    echo '</form> <br>';

?>