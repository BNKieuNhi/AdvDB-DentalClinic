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
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Dentist Name</label>
                                            <input type="text" name="dentist_name" class="form-control" value="LJCH-7436">
                                        </div>
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Gender</label>
                                            <select name="dentist_gender" id="dentistGender" class="form-cotrol" onchange="getCustomerGender(this.value)">
                                                <option value="" class="">Select Gender</option>
                                                <option value="" class="">Nam</option>
                                                <option value="" class="">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Dentist Phone Number</label>
                                            <input type="text" name="dentist_phone" class="form-control" value>
                                        </div>
                                    </div>
                                </div>

                                <hr class="navbar__divider">

                                <div class="form-row">
                                    <div class="form-row__flex">
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Dentist Address</label>
                                            <input type="text" name="dentist_address" class="form-control" value="Street 5">
                                        </div>

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Date Of Birth</label>
                                            <input type="text" name="dentist_dob" class="form-control" value>
                                        </div>
                                    </div>
                                </div>

                                <br class="">

                                <div class="form-row">
                                    <div class="form-col margin-0">
                                        <div class="form-col-bottom">
                                            <input type="submit" name="addDentist" value="Add Dentist" class="btn-control btn-control-add" value="">
                                        </div>
                                    </div>
                                </div>

                            </form>
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