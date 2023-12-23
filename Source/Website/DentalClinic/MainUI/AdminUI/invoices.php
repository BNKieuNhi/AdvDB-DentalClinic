<?php
$page_title = "Smile - Staff List";
require_once('./partials/_head.php');

$pageSize = 20;
$pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$invoices = getAllWithPagination('INVOICE', $pageSize, $pageNumber, 'ID_Invoice');
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
                    <form action="" method="POST" class="container-recent-inner">
                        <div class="container-recent__heading heading__button">
                            <a href="add_invoices.php" class="btn-control btn-control-add">
                                <i class="fa-solid fa-file-invoice btn-control-icon"></i>
                                Add new invoice
                            </a>
                            
                            <div class="pagination">
                                <?php
                                    $totalPages = ceil($invoices['total'] / $pageSize);
                                    $maxPagesToShow = 4;
                                    $halfMax = floor($maxPagesToShow / 2);

                                    // Hiển thị nút Previous
                                    if ($pageNumber > 1) {
                                        echo '<a href="?page=' . ($pageNumber - 1) . '">&laquo;</a>';
                                    } else {
                                        echo '<a class="disabled" href="#">&laquo;</a>';
                                    }

                                    // Hiển thị các nút trang
                                    for ($i = max(1, $pageNumber - $halfMax); $i <= min($totalPages, $pageNumber + $halfMax); $i++) {
                                        echo '<a class="' . ($i == $pageNumber ? 'active' : '') . '" href="?page=' . $i . '">' . $i . '</a>';
                                    }

                                    // Hiển thị nút Next
                                    if ($pageNumber < $totalPages) {
                                        echo '<a href="?page=' . ($pageNumber + 1) . '">&raquo;</a>';
                                    } else {
                                        echo '<a class="disabled" href="#">&raquo;</a>';
                                    }
                                ?>
                            </div>
                            <?php
                                $strKeyword = null;

                                if(isset($_POST["btn-search"]))
                                {
                                    $strKeyword = $_POST["search_text"];
                                    $invoices = searchByKeyword('INVOICE', $strKeyword);
                                    
                                    // $count = sizeof($invoices['data']);
                                    // if($count <= 0)
                                    // {
                                    //     redirect('add_invoices.php', 'No data found.', '');
                                    // }
                                }
                                else
                                {
                                    $invoices = getAllWithPagination('INVOICE', $pageSize, $pageNumber, 'ID_Invoice');
                                }
                            ?>
                            <div class="container__heading-search">
                                <input type="text" class="heading-search__area" placeholder="Search by code, date, time..." name="search_text" value="<?php echo $strKeyword;?>">
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
                                        <th class="text-column" scope="col">Time</th> 
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
                                        <?php
                                            $invoice_time = $invoice['InvoiceTime']->format(' H:i:s Y-m-d');
                                        ?>
                                        <th class="text-column" scope="row"><?php echo $invoice_time?></th>                                        <th class="text-column" scope="row">
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
                    </form>
                </div>
            </div>
            <!-- Footer -->
            <?php 
            require_once('./partials/_footer.php'); 
            ?>
        </div>
    </div>

</body>
</html>