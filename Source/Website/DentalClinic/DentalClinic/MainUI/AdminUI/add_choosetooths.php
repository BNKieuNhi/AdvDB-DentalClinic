<?php
require_once('./partials/_head.php');
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
                                            <label for="" class="form-col__label">Select Id</label>
                                            <input type="text" name="select_id" class="form-control" readonly value>
                                        </div>

                                        
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Tooth Id</label>
                                            <select name="tooth_id" id="toothId" class="form-cotrol" onchange="getTooth(this.value)">
                                                <option value="" class="">1</option>
                                                <option value="" class="">2</option>
                                                <option value="" class="">3</option>
                                                <option value="" class="">4</option>
                                            </select>
                                        </div>

                                        <div class="form-col">
                                            <label for="" class="form-col__label">Surface Id</label>
                                            <select name="surface_id" id="surfaceId" class="form-cotrol" onchange="getSurface(this.value)">
                                                <option value="" class="">Lingual</option>
                                                <option value="" class="">Facial</option>
                                                <option value="" class="">Distal</option>
                                                <option value="" class="">Medial</option>
                                                <option value="" class="">Top</option>
                                                <option value="" class="">Root</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr class="navbar__divider">

                                <div class="form-row">
                                    <div class="form-row__flex">
                                        <div class="form-col">
                                            <label for="" class="form-col__label">Price ($)</label>
                                            <input type="text" name="choosetooth_price" class="form-control" value>
                                        </div>
                                    </div>
                                </div>

                                <br class="">

                                <div class="form-row">
                                    <div class="form-col margin-0">
                                        <div class="form-col-bottom">
                                            <input type="submit" name="addChooseTooth" value="Add Choose Tooth" class="btn-control btn-control-add" value="">
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