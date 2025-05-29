<?php
$info_array = ['title' => 'Add Admin'];
require "navbar.php";
?>
<section class="mt-3 pt-5">
    <div class="container border p-5">
        <h2 class="text-center text-primary">Add Data</h2>
        <form class="mt-4" action="insert.php" id="add_form" name="add_form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name :</label>
                <input type="text" class="form-control" name="name" id="name">
                <small id="pname_error"></small>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="email" class="form-control" name="email" id="email">
                <small id="pprice_error"></small>
            </div>
            <div class="form-group">
                <label>Mobile :</label>
                <input type="number" class="form-control" name="mobile" id="mobile">
                <small id="pqnty_error"></small>
            </div>
            <!-- <div class="form-group">
                        <label>Image :</label>
                        <input type="file" class="form-control" name="product_img" id="product_img">
                        <small id="pimg_error"></small>
                    </div> -->
            <button type="submit" class="btn btn-outline-primary mt-5" name="add_btn" id="add_btn">Add Data</button>
        </form>
    </div>
</section>
<?php require "footer.php"; ?>