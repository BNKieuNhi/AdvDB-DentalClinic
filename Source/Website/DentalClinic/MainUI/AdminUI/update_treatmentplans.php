<?php
require_once('./partials/_head.php');

$select_id = $_GET['id'];
$select = getbyKeyValue('SELECT_TREATMENT', 'ID_Select', $select_id);
$dentists = getIdbyUserType('USER_DENTAL', 'Dentist');
$choose_tooths = getAllByKeyValue('CHOOSE_TOOTH', 'ID_Select', $select_id);
$choose_treatments = getAllByKeyValue('CHOOSE_TREATMENT', 'ID_Select', $select_id);
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
                    <div class="card shadow">
                        <div class="container-recent__heading">
                            <p class="recent__heading-title">Please Fill All Fields</p>
                        </div>
                        
                        <div class="container-recent__body card__body-form">
                            <form method="POST" class="">
                                <div class="form-row">
                                    <div class="form-row__flex">
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Select Treatment Id</label>
                                            <input type="text" name="select_id" class="form-control" readonly value="<?php echo $select_id?>">
                                        </div>

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Paitent Id</label>
                                            <input type="text" name="paitent_id" class="form-control" readonly value="<?php echo $select['data']['ID_Customer']?>">
                                        </div>

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Dentist Id</label>
                                            <input type="text" name="select_returndays" class="form-control" value="<?php echo $select['data']['ID_Dentist']?>">
                                            <!-- <select name="dentist_id" id="dentistId" class="form-cotrol" onchange="getDentist(this.value)"> -->
                                                <!-- <option value="" class="">1</option>
                                                <option value="" class="">2</option> -->
                                                <?php
                                                // $count = sizeof($dentists['data']);
                                                // if($count > 0)
                                                // {
                                                ?>
                                                    <?php  //foreach($dentists['data'] as $dentist) 
                                                    //{  
                                                    ?>
                                                <!-- <option class=""><?php //echo $dentist['ID_User']?></option> -->
                                                <?php
                                                //     }
                                                // }
                                                // else
                                                // {
                                                    ?>
                                                    <!-- <th class="text-column" scope="row"><?php //echo 'No Data Found'?></th>  -->
                                                    <?php
                                                // }
                                            ?>
                                            <!-- </select> -->
                                        </div>
                                    </div>
                                </div>

                                <hr class="navbar__divider">

                                <div class="form-row">
                                    <div class="form-row__flex">
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Date Time</label>
                                            <input type="datetime-local" name="select_datetime" class="form-control" value="<?php //echo $select['data']['DateTime']?>">
                                        </div>
                                        
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Return Days</label>
                                            <input type="text" name="select_returndays" class="form-control" value="<?php echo $select['data']['ReturnDays']?>">
                                        </div>
                                                                                
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Select Treatment Status</label>
                                            <select name="select_status" id="selectStatus" class="form-cotrol">
                                            <?php if($select['data']['SelectionStatus'] == 'Planning')
                                                { ?>
                                                    <option value="Planning" selected>Planning</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Canceled">Canceled</option>
                                                <?php 
                                                } 
                                                elseif($select['data']['SelectionStatus'] == 'Completed')
                                                { ?>
                                                    <option value="Completed" selected>Completed</option>
                                                    <option value="Canceled">Canceled</option>
                                                    <option value="Planning">Planning</option>
                                                <?php 
                                                } 
                                                else
                                                { ?>
                                                    <option value="Canceled" selected>Canceled</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Planning">Planning</option>
                                                <?php 
                                                }
                                                ?> 
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <br class="">

                                <div class="form-row">
                                    <div class="form-col margin-0">
                                        <div class="form-col-bottom">
                                            <input type="submit" name="updatePlan" value="Update Treatment Plan" class="btn-control btn-control-add" value="">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Choose Tooth -->
            <div class="container">
                <div class="container-recent">
                    <div class="container-recent-inner">
                        <div class="container-recent__heading">
                            <p class="recent__heading-title">Choose Tooth</p>
                            <a href="add_choosetooths.php?id=<?php echo $select_id?>" class="btn-control btn-control-add">
                                <i class="fa-solid fa-tooth btn-control-icon"></i>
                                Add tooth
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-column-emphasis" scope="col">Select Id</th> 
                                        <th class="text-column-emphasis" scope="col">Tooth Id</th> 
                                        <th class="text-column" scope="col">Surface</th> 
                                        <th class="text-column" scope="col">Price ($)</th> 
                                        <th class="text-column" scope="col">Action</th> 
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                <?php
                                    if($choose_tooths['status'] != 'No Data Found')
                                    {
                                    ?>
                                        <?php  foreach($choose_tooths['data'] as $choose_tooth) 
                                        {  
                                        ?>
                                    <tr>
                                        <th class="text-column-emphasis" scope="row"><?php echo $choose_tooth['ID_Select']?></th> 
                                        <th class="text-column-emphasis" scope="row"><?php echo $choose_tooth['ID_Tooth']?></th> 
                                        <th class="text-column" scope="row"><?php echo $choose_tooth['ID_Surface']?></th> 
                                        <th class="text-column" scope="row"><?php echo $choose_tooth['Price']?></th> 
                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <button class="btn-control btn-control-delete" name="btn-delete">
                                                    <i class="fa-solid fa-trash-can btn-control-icon"></i>
                                                    Delete
                                                </button>
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
                    </div>
                </div>
            </div>

            <!-- Choose Treatment -->
            <div class="container">
                <div class="container-recent">
                    <div class="container-recent-inner">
                        <div class="container-recent__heading">
                            <p class="recent__heading-title">Choose treatment</p>
                            <a href="add_choosetreatments.php?id=<?php echo $select_id?>" class="btn-control btn-control-add">
                                <i class="fa-solid fa-square-plus btn-control-icon"></i>
                                Add treatment
                            </a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-column-emphasis" scope="col">Select Id</th> 
                                        <th class="text-column-emphasis" scope="col">Treatment Id</th> 
                                        <th class="text-column" scope="col">Price ($)</th> 
                                        <th class="text-column" scope="col">Action</th> 
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                <?php
                                    if($choose_treatments['status'] != 'No Data Found')
                                    {
                                    ?>
                                        <?php  foreach($choose_treatments['data'] as $choose_treatment) 
                                        {  
                                        ?>
                                    <tr>
                                        <th class="text-column-emphasis" scope="row"><?php echo $choose_treatment['ID_Select']?></th> 
                                        <th class="text-column-emphasis" scope="row"><?php echo $choose_treatment['ID_Treatment']?></th> 
                                        <th class="text-column" scope="row"><?php echo $choose_treatment['Price']?></th> 
                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <button class="btn-control btn-control-delete" name="btn-delete">
                                                    <i class="fa-solid fa-trash-can btn-control-icon"></i>
                                                    Delete
                                                </button>
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