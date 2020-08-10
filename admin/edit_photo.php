<?php include('includes/header.php'); ?>

<?php
/*if (!$session->is_signed_in()) {
    redirect('login.php');
}*/

if (empty($_GET['id'])) {
    redirect('photos.php');
} else {
    $photo = Photo::find_by_id($_GET['id']);
    if (isset($_POST['update'])) {
        if ($photo) {
            $photo->title = $_POST['title'];
            $photo->path = $_POST['path'];
            $photo->alt = $_POST['alt'];
            $photo->name = $_POST['name'];
            // $photo->type = $_POST['type'];
            // $photo->size = $_POST['size'];
            $photo->update();
        }
    }
}

?>

<?php include('includes/sidebar.php'); ?>
<?php include('includes/content-top.php'); ?>

<!-- hier komt het overzicht van alle foto's -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Edit image</h2>
            <form action="edit_photo.php?id=<?php echo $photo->id; ?>" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $photo->title ?>">
                    </div>
                    <div class="form-group">
                        <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label for="caption">Alt:</label>
                        <input type="text" name="alt" class="form-control" value="<?php echo $photo->alt; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alternate_text">Name:</label>
                        <input type="text" name="name" class="form-control"
                               value="<?php echo $photo->name; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="photo-info-box">
                        <div class="info-box-header">
                            <h4>Save <span class="fas fa-arrow-up" id="toggle"></span></h4>
                        </div>
                        <div class="inside">
                            <div class="box-inner">
                                <p class="text">
                                    <span class="fas fa-calendar">Uploaded on: April 01, 2020 @ 5.26</span>
                                </p>
                                <p class="text">
                                    Photo Id: <span class="data photo_id_box"><?php echo $photo->id; ?></span>
                                </p>
                                <p class="text">
                                    Title: <span class="data"><?php echo $photo->title; ?></span>
                                </p>
                                <p class="text">
                                    File type: <span class="data"><?php echo $photo->type; ?></span>
                                </p>
                                <p class="text">
                                    File size: <span class="data"><?php echo $photo->size; ?></span>
                                </p>
                            </div>
                            <div class="info-box-footer">
                                <div class="info-box-delete float-left">
                                    <a href="delete_photo.php?id=<?php echo $photo->id; ?>"
                                       class="btn btn-danger btn-lg">Delete</a>
                                </div>
                                <div class="info-box-update float-right">
                                    <input type="submit" value="Update" name="update" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>