<?php

session_start();

if ($_SESSION["login"] != "true") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php include('../../template/head.php'); ?>
<?php include('../../template/sidebar.php'); ?>


<div class="pagetitle">
    <h1>Dashboard Page</h1>
</div>

<?php include('../../template/foot.php'); ?>