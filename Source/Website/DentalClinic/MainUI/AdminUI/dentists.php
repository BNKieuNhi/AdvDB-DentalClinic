<?php
// session_start();
// include('config/config.php');
// include('config/checklogin.php');
// check_login();
$page_title = "Smile - Dentist List";
require_once('./partials/_head.php');
// require_once('./partials/_analytics.php');
$dentists = getbyUserType('USER_DENTAL', 'Dentist');
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
                        <div class="container-recent__heading heading__button">
                            <a href="add_dentists.php" class="btn-control btn-control-add">
                                <i class="fa-solid fa-user-plus btn-control-icon"></i>
                                Add new dentist
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
                                        <th class="text-column-emphasis" scope="col">ID</th> 
                                        <th class="text-column" scope="col">USERNAME</th> 
                                        <th class="text-column" scope="col">FULL NAME</th> 
                                        <th class="text-column" scope="col">Gender</th> 
                                        <th class="text-column" scope="col">Phone Number</th> 
                                        <th class="text-column" scope="col">Address</th> 
                                        <!-- <th class="text-column" scope="col">DOB</th>  -->
                                        <th class="text-column" scope="col">ACTION</th> 
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                <?php
                                    $count = sizeof($dentists['data']);
                                    //echo $dentists['data'];
                                    if($count > 0)
                                    {
                                    ?>
                                        <?php  foreach($dentists['data'] as $dentist) 
                                        {  
                                        ?>
                                    <tr>
                                        <th class="text-column-emphasis" scope="row"><?php echo $dentist['ID_User']?></th>
                                        <th class="text-column" scope="row"><?php echo $dentist['Username']?></th>
                                        <th class="text-column" scope="row"><?php echo $dentist['Fullname']?></th> 
                                        <?php if($dentist['Gender'] = 'F')
                                            {?>
                                                <th class="text-column" scope="row">Female</th> 
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                                <th class="text-column" scope="row">Male</th> 
                                            <?php
                                            }
                                        ?>
                                        <th class="text-column" scope="row"><?php echo $dentist['PhoneNumber']?></th> 
                                        <th class="text-column" scope="row"><?php echo $dentist['CurrAddress']?></th> 
                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <button class="btn-control btn-control-delete" name="btn-delete">
                                                    <i class="fa-solid fa-trash-can btn-control-icon"></i>
                                                    Delete
                                                </button>
                                                <a href="update_staffs.php" class="btn-control btn-control-edit">
                                                    <i class="fa-solid fa-user-pen btn-control-icon"></i>
                                                    Update
                                                </a>
                                            </div>
                                        </th> 
                                    </tr>
                                    <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <th class="text-column" scope="row"><?php echo 'No Data Found'?></th> 
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
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