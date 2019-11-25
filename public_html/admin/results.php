<?php
include('includes/header.php');
include('includes/navbar.php');
?>


    <!-- Main Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Results for Session ID: 1</h1>
        </div>

        <!-- Content Row -->
        <div class="col-lg-12">

            <div class="row">

                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Group 1
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    <h4>Raw Scores</h4>
                                    <form action="../includes/session-create.inc.php" method="post">
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 1 - Clarity:  7</h6>
                                        </div>
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 2 - Comprehensiveness:  8</h6>
                                        </div>
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 3 - Presentation:  7</h6>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            Total Raw Score: 22 / 30
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Group 2
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    <h4>Raw Scores</h4>
                                    <form action="../includes/session-create.inc.php" method="post">
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 1 - Clarity:  6</h6>
                                        </div>
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 2 - Comprehensiveness:  9</h6>
                                        </div>
                                        <div class="input-group">
                                            <h6>Average score from judges on Criterion 3 - Presentation:  4</h6>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            Total Raw Score: 19 / 30
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>


<?php
include('includes/footer.php');
?>