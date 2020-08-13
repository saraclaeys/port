<div class="content">
    <div class="container-fluid">

        <!-- Connectie Database testen -->
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