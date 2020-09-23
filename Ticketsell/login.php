<?php

    session_start(); //Nicht vergessen
    $name = $_POST['userName'];

    if (!isset($name) or empty($name)) {
        $name = "Gast";
    }
    //Session registrieren
    $_SESSION['userName'] = $name;
?>

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
            <?php include ('message.php'); ?>
        </div>
        <div class="row">
            <div class="col-md-10">
                <h3><a href="seite2.php">Seite 2</a></h3>
            </div>
            <br>
            <div class="col-md-2">
                <h3><a href="logout.php">Logout</a></h3>
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

