<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
require_once ('User.php');

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


<body>
    <div class="pull-right pr-3">
        <a href="logout.php" class="btn box-arrow-in-left"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
        </a>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-11">

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3><a href="seite2.php">Seite 2</a></h3>
            </div>
            <br>
            <div class="col-md-3">
                <? echo $_SESSION['username']; ?>
            </div>
            <br>
            <div class="col-md-1">


            </div>

        </div>
    </div>


<div class="container bg-light p-5">

    <div class="row">
        <?php include ('title.php');?>
    </div>
    <div class="row">
        <div class="col-md-4 pt-3">
            <?php include('customerForm.php');?>
        </div>
        <br>
        <div class="col-md-8">
            <?php include('customerTable.php');?>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

