<?php
// session_start();
// include('config/config.php');
// include('config/checklogin.php');
// check_login();
require_once('./partials/_head.php');
// require_once('./partials/_analytics.php');
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
                                        <!-- <div class="form-col">
                                            <label for="" class="form-col__label">Select Treatment Id</label>
                                            <select name="select_id" id="selectId" class="form-cotrol" onchange="getSelect(this.value)">
                                                <option value="" class="">1</option>
                                                <option value="" class="">2</option>
                                            </select>
                                        </div> -->

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Paitent Id</label>
                                            <input type="text" name="paitent_id" class="form-control" readonly value>
                                        </div>

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Dentist Id</label>
                                            <select name="dentist_id" id="dentistId" class="form-cotrol" onchange="getDentist(this.value)">
                                                <option value="" class="">1</option>
                                                <option value="" class="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr class="navbar__divider">

                                <div class="form-row">
                                    <div class="form-row__flex">
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Date Time</label>
                                            <input type="text" name="select_datetime" class="form-control" value>
                                        </div>
                                        
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Return Days</label>
                                            <input type="text" name="select_returndays" class="form-control" value>
                                        </div>
                                                                                
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Select Treatment Status</label>
                                            <select name="select_status" id="selectStatus" class="form-cotrol" onchange="getStatus(this.value)">
                                                <option value="" class="">Đã hoàn thành</option>
                                                <option value="" class="">Đã hủy</option>
                                                <option value="" class="">Kế hoạch</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <br class="">

                                <div class="form-row">
                                    <div class="form-col margin-0">
                                        <div class="form-col-bottom">
                                            <input type="submit" name="updateSelect" value="Update Select Treatment" class="btn-control btn-control-add" value="">
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
                            <a href="add_choosetooths.php" class="btn-control btn-control-add">
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
                                    <tr>
                                        <th class="text-column-emphasis" scope="row">1</th> 
                                        <th class="text-column-emphasis" scope="row">1</th> 
                                        <th class="text-column" scope="row">Distal</th> 
                                        <th class="text-column" scope="row">13</th> 
                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <button class="btn-control btn-control-delete" name="btn-delete">
                                                    <i class="fa-solid fa-trash-can btn-control-icon"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </th> 
                                    </tr>

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
                            <a href="add_choosetreatments.php" class="btn-control btn-control-add">
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
                                    <tr>
                                        <th class="text-column-emphasis" scope="row">1</th> 
                                        <th class="text-column-emphasis" scope="row">1</th> 
                                        <th class="text-column" scope="row">12</th> 
                                        <th class="text-column" scope="row">
                                            <div class="text-column__action">
                                                <button class="btn-control btn-control-delete" name="btn-delete">
                                                    <i class="fa-solid fa-trash-can btn-control-icon"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </th> 
                                    </tr>

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