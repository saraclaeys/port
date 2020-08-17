<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>

<?php include('includes/content-top.php'); ?>

<?php $photos = Photo::find_all(); ?>

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <h2>Images</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <table class="table table-header">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Type</th>
                                <th>Alt</th>
                                <th>Size</th>
                                <th>Path</th>
                                <th>Name</th>
                                <th>Edit?</th>
                                <th>Delete?</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($photos as $photo): ?>
                                <tr>
                                    <td><img src="<?php echo $photo->picture_path(); ?>" height="80" width="80" alt=""</td>
                                    <td><?php echo $photo->id; ?></td>
                                    <td><?php echo $photo->title; ?></td>
                                    <td><?php echo $photo->caption; ?></td>
                                    <td><?php echo $photo->type; ?></td>
                                    <td><?php echo $photo->alt; ?></td>
                                    <td><?php echo $photo->size; ?></td>
                                    <td><?php echo $photo->path; ?></td>
                                    <td><?php echo $photo->name; ?></td>
                                    <td><a href="edit_photo.php?id=<?php echo $photo->id; ?>"
                                           class="btn btn-primary rounded-0"><i class="far fa-edit"></i></a></td>
                                    <td><a href="delete_photo.php?id=<?php echo $photo->id; ?>"
                                           class="btn btn-danger rounded-0"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>