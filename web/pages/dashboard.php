<?php
    include '../../actions/sample.php';

    $admin = new sample();

?>
    <html lang="en">

    <head>
        <link rel="icon" href="../../src/img/logo.png">
        <link rel="stylesheet" href="../../src/css/dash-card.css">
    </head>
    <div id="wrapper">
        <?php include '../includes/header.php'?>
        <?php include '../includes/side-nav.php'?>
        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="height:100%" class="card-counter primary">
                               <img style="width:350px;margin-left: 50px" src="../../src/img/chart1.png" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div style="height:100%" class="card-counter success">
                                <img style="width:350px;margin-left: 50px" src="../../src/img/chart2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-counter primary">
                                <i class="	fa fa-line-chart"></i>
                                <span class="count-numbers">10</span>
                                <span class="count-name">Views</span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card-counter success">
                                <i class="fa fa-comments"></i>
                                <span class="count-numbers">10</span>
                                <span class="count-name">Comments</span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card-counter danger">
                                <i class="fa fa-book"></i>
                                <span class="count-numbers">10</span>
                                <span class="count-name">Published</span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card-counter info">
                                <i class="fa fa-users"></i>
                                <span class="count-numbers"><?php echo $admin->getAdminsCount()?></span>
                                <span class="count-name">Admins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>