<?php include('includes/header.php'); ?>
<?php
/*if (!$session->is_signed_in()) {
    redirect('login.php');
}*/


if (empty($_GET['id'])) {
    redirect('users.php');
}

$user = User::find_by_id($_GET['id']);

if (isset($_POST['submit'])) {
    if ($user) {
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->title = $_POST['title'];
        $user->email = $_POST['email'];
        $user->about = $_POST['about'];
        if (empty($_FILES['file'])) {
            $user->save();
        } else {
            $user->set_file($_FILES['file']);
            $user->save_user_and_image();
            // $user->save();
            redirect('edit_user.php?id={user->id}');
        }
    }
}

?>

<?php include('includes/sidebar.php'); ?>
<?php include('includes/content-top.php'); ?>

<!-- hier komt het overzicht van alle users -->
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex align-items-baseline flex-wrap mt-3">
                    <h2 class="mr-4 mb-0">Edit user</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="edit_user.php?id=<?php $user->id; ?>" method="post" enctype="">
                            <h3>Id</h3>
                            <p><?php echo $user->id; ?></p>
                            <h3>Image</h3>
                            <?php $photo = Photo::find_by_id($user->image_id); ?>
                            <img src="../images/<?php echo $photo->name; ?>" alt="<?php echo $photo->alt; ?>" width="150px" height="auto">
                            <p><?php echo $photo->name; ?></p>
                            <h3>Username</h3>
                            <input type="text" name="username" value="<?php echo $user->username; ?>">
                            <h3>Password</h3>
                            <input type="password" name="password" value="<?php echo $user->password; ?>">
                            <h3>First name</h3>
                            <input type="text" name="first_name" value="<?php echo $user->first_name; ?>">
                            <h3>Last name</h3>
                            <input type="text" name="last_name" value="<?php echo $user->last_name; ?>">
                            <h3>Title</h3>
                            <input type="text" name="title" value="<?php echo $user->title; ?>">
                            <h3>E-mail</h3>
                            <input type="email" name="email" value="<?php echo $user->email; ?>">
                            <h3>About</h3>
                            <textarea name="about" id="mytextarea" cols="30" rows="10"><?php echo $user->about; ?></textarea>
                            <input type="submit" value="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>