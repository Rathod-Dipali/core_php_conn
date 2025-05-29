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
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label>Mobile :</label>
                <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
            </div>
            <div class="form-group">
                <label>Password :</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label>Image :</label>
                <input type="file" class="form-control mb-1" name="image" id="image">
                <img src="" alt="Image not choosen" width="100" id="img">
            </div>
            <button type="submit" class="btn btn-outline-primary mt-5" name="add_btn" id="add_btn">Add Data</button>
        </form>
    </div>
</section>
<?php require "footer.php"; ?>
<script>
    var file = document.getElementById("image");
    var img = document.getElementById("img");
    file.addEventListener("change", (e) => {
        img.src = URL.createObjectURL(e.target.files[0])
    })
</script>