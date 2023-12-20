<?php
// session_start();
// include('config/config.php');
// include('config/checklogin.php');
// check_login();
$page_title = "Smile - Staff List";
require_once('./partials/_head.php');
$invoices = getAll('INVOICE');
?>

<body>
    <!-- Sidebar -->
    <?php
    require_once('./partials/_sidebar.php');
    ?>
    <!-- Main content -->
    <div class="main-content">
        <div class="content">
            <!-- Top navbar -->
            <?php
            require_once('./partials/_topnav.php');
            ?>
            <!-- Page content -->
            <div class="container">
                <div class="container-recent">
                    <div class="container-recent-inner">
                        <div class="container-recent__heading">
                            <a href="add_invoices.php" class="btn-control btn-control-add">
                                <i class="fa-solid fa-file-invoice btn-control-icon"></i>
                                Add new invoice
                            </a>
                            <div class="container__heading-search">
                                <input type="text" class="heading-search__area" placeholder="Search by code, name..." name="search_text">
                                <button class="btn-control btn-control-search" name="btn-search">
                                    <i class="fa-solid fa-magnifying-glass btn-control-icon"></i>
                                    Search
                                </button>                        

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-column-emphasis" scope="col">Id</th> 
                                        <th class="text-column" scope="col">Select Treatment</th> 
                                        <th class="text-column" scope="col">Payment Id</th> 
                                        <th class="text-column" scope="col">Total ($)</th> 
                                        <!-- <th class="text-column" scope="col">Time</th>  -->
                                        <th class="text-column" scope="col">ACTIONS</th> 
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                <?php
                                    $count = sizeof($invoices['data']);
                                    //echo $invoices['data'];
                                    if($count > 0)
                                    {
                                    ?>
                                        <?php  foreach($invoices['data'] as $invoice) 
                                        {  
                                        ?>
                                    <tr>
                                        <th class="text-column-emphasis" scope="row"><?php echo $invoice['ID_Invoice']?></th>
                                        <th class="text-column" scope="row"><?php echo $invoice['ID_Select']?></th>
                                        <th class="text-column" scope="row"><?php echo $invoice['ID_Payment']?></th>
                                        <th class="text-column" scope="row"><?php echo $invoice['Total']?></th> 

                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <a href="invoice_detail.php" class="btn-control btn-control-edit">
                                                    <i class="fa-solid fa-file-lines btn-control-icon"></i>
                                                    View Detail
                                                </a>
                                            </div>
                                        </th>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    else
                                    {?>
                                       <th class="text-column" scope="row"><?php echo 'No Data Found'?></th> 
                                    <?php    
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
       