<!DOCTYPE html>

<html>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Ticketverkauf</title>
    </header>
    <?
        require_once('CustomerService.php');
        require_once('Customer.php');
        require_once('Event.php');
        require_once('Organizer.php');
        require_once('Transfer.php');
        require_once('Ticket.php');
        require_once('SeatType.php');
        require_once('EventSeatType.php');

        if ($_REQUEST['action'] == 'createCustomer')
            {
                Customer::createCustomer();
            }
    ?>
    <body>
        <div class="container-sm mt-5">
            <h1>Anmeldung Ticketverkauf</h1>
            <br>
            <div>
                <form action="?action=createCustomer" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="customerName" name="customerName" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="customerAddress" name="customerAddress" placeholder="Adresse">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrieren</button>
                </form>
            </div>
        </div>
        <br>
        <div class="container-sm">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">KNr.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                    <?
                        $postData = Customer::loadCustomers();
                        foreach($postData as $row)
                        {
                    ?>
                    <tr>
                        <th scope="row"><? echo $row['id']; ?></th>
                        <td><? echo $row['name']; ?></td>
                        <td><? echo $row['address']; ?></td>
                    </tr>

                    <? } ?>
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>