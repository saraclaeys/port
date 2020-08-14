<div class="content">
    <div class="container-fluid d-flex align-items-center justify-content-center mb-4">

        <div class="row d-flex content">
            <div class="col-12 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center d-flex content">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger mb-1">Users
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo User::count_all(); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center d-flex content">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success mb-1">Photos
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo Photo::count_all(); ?></div>
                            </div>
                            <div class="col-auto float-right">
                                <i class="far fa-images fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center d-flex content">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary mb-1">Views
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $session->count; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-12">

                <!-------------------------------- pie chart ------------------------------------->
                <div id="piechart" style="width: 900px; height: 500px;"></div>

                <!-------------------------------- modified file ------------------------------->
                <div class="footer">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i>
                        <?php
                        $file = 'index.php';
                        $lastModifiedTimestamp = filemtime($file);
                        $lastModifiedDatetime = date("d M Y H:i:s", $lastModifiedTimestamp);

                        echo "Dashboard was last modified on $lastModifiedDatetime"; ?>
                    </div>
                </div>
                <!-------------------------------- end of modified file ------------------------------->
            </div>
        </div>
    </div>
</div>