<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>

<?php include('includes/content-top.php'); ?>

<?php
if (empty($_GET['id'])) {
    redirect('photos.php');
} else {
    $photo = Photo::find_by_id($_GET['id']);
    if (isset($_POST['update'])) {
        if ($photo) {
            $photo->title = $_POST['title'];
            $photo->caption = $_POST['caption'];
            /*  $photo->type = $_POST['type'];*/
            $photo->alt = $_POST['alt'];
            /* $photo->size = $_POST['size'];*/
           /* $photo->path = $_POST['path'];*/
            $photo->name = $_POST['name'];

            $photo->update();
            redirect('photos.php');
        }
    }
}
?>


    <!-- hier komt het overzicht van alle foto's -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid">
                    <h2>Edit image</h2>
                    </div>
                    <form action="edit_photo.php?id=<?php echo $photo->id; ?>" method="post">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control"
                                       value="<?php echo $photo->title ?>">
                            </div>
                            <div class="form-group">
                                <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>"
                                                                   alt=""></a>
                            </div>
                            <div class="form-group">
                                <label for="caption">Caption:</label>
                                <input type="text" name="caption" class="form-control"
                                       value="<?php echo $photo->caption; ?>">
                            </div>
                            <div class="form-group">
                                <label for="alt">Alt:</label>
                                <input type="text" name="alt" class="form-control" value="<?php echo $photo->alt; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control"
                                       value="<?php echo $photo->name; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="photo-info-box">
                                <div class="info-box-header">
                                    <h4>Save</h4>
                                </div>
                                <div class="inside">
                                    <div class="box-inner">
                                        <p class="text">
                                            Photo Id: <span class="data"><?php echo $photo->id; ?></span>
                                        </p>
                                        <p class="text">
                                            Title: <span class="data"><?php echo $photo->title; ?></span>
                                        </p>
                                        <p class="text">
                                            <label for="type">File Type</label>
                                            <input readonly type="text" name="type" class="form-control"
                                                   value="<?php echo $photo->type ?>">
                                        </p>
                                        <p class="text">
                                            <label for="size">Size Type</label>
                                            <input readonly type="text" name="size" class="form-control"
                                                   value="<?php echo $photo->size ?>">
                                        </p>
                                    </div>
                                    <div class="info-box-footer">
                                        <div class="info-box-delete float-left">
                                            <a href="delete_photo.php?id=<?php echo $photo->id; ?>"
                                               class="btn btn-danger btn-lg">Delete</a>
                                        </div>
                                        <div class="info-box-update float-right">
                                            <input type="submit" value="Update" name="update"
                                                   class="btn btn-primary btn-lg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>