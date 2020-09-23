<?php
    echo '<table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">KNr.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ';
                        $customers = CustomerService::loadCustomers();
                        foreach($customers as $customer)
                        {
                            echo '
                            <tr>
                                <th scope="row">';
                            echo $customer->getCustomerId();
                            echo '</th>
                                <td>';
                            echo $customer->getCustomerName();
                            echo '</td>
                                <td>';
                                 echo $customer->getCustomerAddress();
                                 echo '</td>
                                <td>
                                    <a href="index.php?edit=
                                    ';
                                 echo $customer->getCustomerId();
                                 echo'" class="btn btn-info fa fa-folder rounded-pill"></a>
                                    <a href="index.php?delete=
                                    ';
                                 echo $customer->getCustomerId();
                                 echo '" class="btn btn-danger fa fa-trash rounded-pill"></a>
                                </td>
                            </tr>';
                        }
                        echo'
                        </tbody>
                    </table>';
?>
