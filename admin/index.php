<?php
$info_array = ['title' => 'Admin Data'];
require "navbar.php";
$query = "select * from `admin`";
$result = mysqli_query($con, $query);
?>
<section class="mt-3 pt-5">
    <div class="container">
        <h1 class="text-center mb-3 text-bg-info text-light">Show Data</h1>
        <a href="<?php $base_url ?>add.php"><button class="btn btn-outline-primary mb-3">Insert Data</button></a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>User Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                </thead>
                <tbody>
                    <tr>
                        <th><?= $no ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['mobile'] ?></th>
                        <th>
                            <img class="user_image"
                                src="<?= $base_url ?>assets/upload/<?= $row['image'] ?>"
                                onerror="this.onerror=null; this.src='<?= $base_url ?>assets/upload/default.jpg';"
                                width="100"
                                height="100"
                                alt="User Image">
                        </th>
                        <!-- <th><img class="user_image" src="<?= $base_url ?>assets/upload/<?= (file_exists('assets/upload/' . $row['image']) && !empty($row['image'])) ? $row['image'] : 'default.jpg' ?>" width="100"></th> -->
                        <td align="center"> <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-info">Edit</button></a></td>
                        <td align="center"> <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                    </tr>
                </tbody>
            <?php $no++;
                    } ?>

            </table>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>