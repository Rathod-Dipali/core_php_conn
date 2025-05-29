<?php
$info_array = ['title' => 'Home'];
require "navbar.php";
?>
<section class="mt-3 pt-5">
    <div class="container p-5">
        <h2 class="text-center text-primary"><?php echo "Welcome ".$_SESSION['name']; ?></h2>
    </div>
</section>
<?php require "footer.php"; ?>