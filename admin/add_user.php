<?php include('includes/header.php'); ?>

<?php include('includes/content-top.php'); ?>

<?php include('includes/sidebar.php'); ?>

<?php

$user = new User();

if (isset($_POST['submit'])) {

    $user->username = $_POST['username'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->password = $_POST['password'];
    $user->title = $_POST['title'];
    $user->email = $_POST['email'];
    $user->set_file($_FILES['file']);
    $user->about = $_POST['about'];

    $user->save_user_and_image();
}

?>

    <!-- hier komt het overzicht van alle users -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Add User</h3>
                            <form action="add_user.php" method="post" enctype="">
                                <h4>Username</h4>
                                <input type="text" name="username">
                                <h4>First name</h4>
                                <input type="text" name="first_name">
                                <h4>Last name</h4>
                                <input type="text" name="last_name">
                                <h4>Password</h4>
                                <input type="password" name="password">
                                <h4>Title</h4>
                                <input type="text" name="title">
                                <h4>E-mail</h4>
                                <input type="email" name="email">
                                <h4>Image</h4>
                                <div class="form-group">
                                    <label for="file">Upload image:</label>
                                    <input type="file" name="file" class="form-control" value="">
                                </div>
                                <h4>About</h4>
                                <textarea name="about" id="mytextarea" cols="30" rows="10"></textarea>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>