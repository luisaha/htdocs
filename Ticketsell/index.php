<!DOCTYPE html>

<html>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Ticketverkauf</title>
    </header>
    <?
        require_once('Customer.php');
        require_once('CustomerService.php');
        require_once('Event.php');
        require_once('Organizer.php');
        require_once('Transfer.php');
        require_once('Ticket.php');
        require_once('SeatType.php');
        require_once('EventSeatType.php');

        if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'createCustomer')
        {
            CustomerService::createCustomer();
        } elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == 'updateCustomer')
        {
            CustomerService::updateCustomer();
        }

        if (isset($_GET['delete']) && $_GET['delete'] !='success')
        {
            CustomerService::deleteCustomer();
        }

        if (isset($_GET['edit']) && $_GET['edit'] !='success')
        {
            $update = true;
            $id = 0;
            $name = '';
            $address = '';
            $customer = CustomerService::loadCustomer();
        } else
        {
            $update = false;
        }
        ?>

    <body class="pt-5">
        <div class="container">
            <div class="row">
                <?
                if (isset($_GET['signup']) && $_GET['signup']=='success')
                {
                    ?>
                    <div class="row alert alert-success" role="alert">
                        Der Kunde wurde erfolgreich registriert!
                    </div>
                    <?
                }

                if (isset($_GET['delete']) && $_GET['delete'] =='success')
                {
                    ?>
                    <div class="row alert alert-danger" role="alert">
                        Der Kunde wurde gelöscht!
                    </div>
                    <?
                }

                if (isset($_GET['edit']) && $_GET['edit'] =='success')
                {
                ?>
                <div class="row alert alert-info" role="alert">
                    Die Kundendaten wurden aktualisiert!
                </div>
                <?
                }
                ?>
            </div>
        </div>
        <div class="container bg-light p-5">
            <div class="row">
                <div class="col p-2">
                    <h1 class="text-center font-weight-bold">Anmeldung Ticketverkauf</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pt-3">
                      <?
                      if ($update == true)
                      {

                      ?>
                        <form action="?action=updateCustomer" method="post">
                            <div>
                                <input type="hidden" name="id" value="<? echo $customer->getCustomerId(); ?>" >
                            </div>

                        <?
                        }
                        else
                        {
                        ?>
                        <form action="?action=createCustomer" method="post">
                            <?
                            }
                            ?>

                        <div class="form-group">
                            <input type="text" class="form-control" name="customerName" method="post"
                                   value="<? echo $update==true ? $customer->getCustomerName() : '' ?>" placeholder="Name">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="customerAddress" method="post"
                                   value="<? echo $update==true ? $customer->getCustomerAddress() : '' ?>" placeholder="Adresse">
                        </div>
                        <?
                            if ($update == true)
                            {
                        ?>
                                <button type="submit" class="btn btn-info" name="update">Änderungen speichern</button>
                        <?
                            }
                            else
                            {
                        ?>
                                <button type="submit" class="btn btn-primary">Registrieren</button>
                        <?
                            }
                        ?>
                    </form>
                    <br>
                </div>
                <br>
                <div class="col-md-8">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">KNr.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $customers = CustomerService::loadCustomers();
                        foreach($customers as $customer)
                        {
                            ?>
                            <tr>
                                <th scope="row"><? echo $customer->getCustomerId(); ?></th>
                                <td><? echo $customer->getCustomerName(); ?></td>
                                <td><? echo $customer->getCustomerAddress(); ?></td>
                                <td>
                                    <a href="index.php?edit=<?php echo $customer->getCustomerId();?>" class="btn btn-info fa fa-folder"></a>
                                    <a href="index.php?delete=<?php echo $customer->getCustomerId();?>" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                        <? }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>