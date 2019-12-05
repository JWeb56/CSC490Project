<?php
include('includes/header.php');
include('includes/navbar.php');
require '../includes/session-get-id.inc.php'
?>


    <!-- Main Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Current Sessions in Progess</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Poop on my face
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    <h4>Total farts</h4>
                                    <form action="../includes/session-create.inc.php" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_name"
                                                   placeholder="Name of Event">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_category"
                                                   style="flex-wrap: wrap;" placeholder="Category Names">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_judge"
                                                   placeholder="Judges for the event">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-success" name="session-create-submit">
                                            Create
                                        </button>
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
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Poop on my face
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    <h4>Total farts</h4>
                                    <form action="../includes/session-create.inc.php" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_name"
                                                   placeholder="Name of Event">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_category"
                                                   style="flex-wrap: wrap;" placeholder="Category Names">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control mt-1" name="event_judge"
                                                   placeholder="Judges for the event">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-success" name="session-create-submit">
                                            Create
                                        </button>
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