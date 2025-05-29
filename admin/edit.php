<?php
$info_array = ['title' => 'Edit Admin'];
require "navbar.php";
$id = $_GET['id'];
$query = "select * from `add_admin` where id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<section class="mt-3 pt-5">
    <div class="container border p-5">
        <h2 class="text-center text-primary">Update Data</h2>
        <form class="mt-4" action="update.php" id="edit_form" name="edit_form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $row['id'] ?>">
            <div class="form-group">
                <label>Name :</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $row['name'] ?>">
                <small id="pname_error"></small>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $row['email'] ?>">
                <small id="pprice_error"></small>
            </div>
            <div class="form-group">
                <label>Mobile :</label>
                <input type="number" class="form-control" name="mobile" id="mobile" value="<?= $row['mobile'] ?>">
                <small id="pqnty_error"></small>
            </div>
            <!-- <div class="form-group">
                        <label>Image :</label>
                        <input type="file" class="form-control" name="product_img" id="product_img">
                        <small id="pimg_error"></small>
                    </div> -->
            <button type="submit" class="btn btn-outline-primary mt-5" name="update_btn" id="update_btn">Update Data</button>
        </form>
    </div>
</section>
<?php require "footer.php"; ?>