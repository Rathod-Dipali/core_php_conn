<?php

    $info_array = ['title' => 'Edit Admin'];
    require "navbar.php";

    $query = "select * from `admin` where id='$_GET[id]'";
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
                <input type="text" class="form-control" name="name" id="name" value="<?= $row['name'] ?>" required>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $row['email'] ?>" required>
            </div>
            <div class="form-group">
                <label>Mobile :</label>
                <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="<?= $row['mobile'] ?>" required>
            </div>
            <div class="form-group">
                <label>Image :</label>
                <input type="file" class="form-control mb-1" name="image" id="image">
                <img src="<?= $base_url ?>assets/upload/<?= $row['image'] ?>" id="img" alt="Image not choosen" width="100">
            </div>
            <button type="submit" class="btn btn-outline-primary mt-5" name="update_admin" id="update_admin">Update Data</button>
        </form>
    </div>
</section>

<?php require "footer.php"; ?>

<script>
    var file = document.getElementById("image");
    var img = document.getElementById("img");
    file.addEventListener("change", (e) => {
        img.src = URL.createObjectURL(e.target.files[0])
    });
</script>
