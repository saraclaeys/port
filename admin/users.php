<?php include("includes/header.php");

   /* if(!$session->is_signed_in ()){
    redirect ('login.php');
    }*/
?>
<?php include("includes/content-top.php"); ?>

<?php include("includes/sidebar.php"); ?>

<?php $users = User::find_all(); ?>

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex align-items-baseline flex-wrap mt-3">
                        <h2 class="mr-4 mb-0">Users</h2>
                        <a href="add_user.php" class="btn btn-primary rounded-0"><i class="fas fa-user-plus"></i> Add User</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All users</h4>
                            <div class="table-responsive">
                                <table id="status-report-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                      <!--  <th>Role</th>-->
                                        <th>Title</th>
                                        <th>Show user</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($users as $user) {
                                        echo '<tr>';
                                        //$photo = Photo::find_by_id($user->user_image);
                                        echo '<td><img src="images/users/' . $user->user_image . '" height="80" width="80"></td>';
                                        echo '<td>' . $user->username . '</td>';
                                        echo '<td>' . $user->first_name . '</td>';
                                        echo '<td>' . $user->last_name . '</td>';

                                        /*$role = Role::find_by_id($user->role_id);
                                        echo '<td>' . $role->role . '</td>';*/
                                        echo '<td>' . $user->title . '</td>';
                                        ?>
                                        <td><a href="show_user.php?id=<?php echo $user->id; ?>"
                                               class="btn btn-primary rounded-0"><i class="far fa-eye"></i></a></td>
                                        <?php
                                        echo '</tr>';
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>