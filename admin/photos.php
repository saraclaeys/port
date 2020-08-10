<?php include('includes/header.php'); ?>

<?php
if (!$session->is_signed_in()) {
    redirect('login.php');
}
$photos = Photo::find_all();
?>

<?php include('includes/sidebar.php'); ?>

<?php include('includes/content-top.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Images</h2>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>File</th>
                    <th>Size</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($photos as $photo): ?>
                <tr>
                    <td><img src="<?php echo $photo->picture_path(); ?>" height="250" width="195" alt=""</td>
                    <td><?php echo $photo->id; ?></td>
                    <td><?php echo $photo->title; ?></td>
                    <td><?php echo $photo->path; ?></td>
                    <td><?php echo $photo->size; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>