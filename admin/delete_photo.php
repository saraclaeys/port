<?php include('includes/header.php');?>

<?php include('includes/sidebar.php'); ?>

<?php include('includes/content-top.php'); ?>

<?php
if (empty($_GET['id'])) {
    redirect('photos.php');
}

$photo = Photo::find_by_id($_GET['id']);

if ($photo) {
    $photo->delete_photo();
    redirect('photos.php');
} else {
    redirect('photos.php');
}
?>

<h1>Delete photo</h1>

<?php include("includes/footer.php"); ?>
