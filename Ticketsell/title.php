<?php
    if($_SESSION['viewTitle']== '1')
    {
        echo '
        <div class="row">
            <div class="col p-2">
                <h1 class="text-center font-weight-bold">Anmeldung Ticketverkauf</h1>
                <br>
            </div>
        </div>
        ';

    }
    else {
        echo '
        <div class="row">
            <div class="col p-2">

                <br>
            </div>
        </div>
        ';
    }
