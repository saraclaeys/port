<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php
if(empty($_GET['id'])){
    redirect ('users.php');
}

$user = User::find_by_id ($_GET['id']);
?>
    <!-- partial -->
    <div class="container-fluid">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex align-items-baseline flex-wrap mt-3">
                    <h2 class="mr-4 mb-0">Show user</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Id</h3>
                        <p><?php echo $user->id; ?></p>
                        <h3>Image</h3>
                        <?php $photo = Photo::find_by_id ($user->id); ?>
                        <img src="<?php echo $user->image_path_and_placeholder(); ?>" height="auto" width="100px">
                        <p><?php echo $user->user_image; ?></p>
                        <h3>Username</h3>
                        <p><?php echo $user->username; ?></p>
                        <h3>Password</h3>
                        <p><?php echo $user->password; ?></p>
                        <h3>First name</h3>
                        <p><?php echo $user->first_name; ?></p>
                        <h3>Last name</h3>
                        <p><?php echo $user->last_name; ?></p>
<!--                        <h3>Role</h3>
                        <?php /*$role = Role::find_by_id ($user->role_id); */?>
                        <p><?php /*echo $role->role; */?></p>-->
                        <h3>Title</h3>
                        <p><?php echo $user->title; ?></p>
                        <h3>E-mail</h3>
                        <p><?php echo $user->email; ?></p>
                        <h3>About</h3>
                        <p><?php echo $user->about; ?></p>
                        <h3>Edit user</h3>
                        <p> <a href="edit_user.php?id=<?php echo $user->id; ?>" class="btn btn-primary rounded-0"><i class="fas fa-edit"> Edit user</i></a>
                        <a href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"> Delete user</i></a></p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
<?php include("includes/footer.php"); ?>