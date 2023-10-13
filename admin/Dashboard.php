<?php include('header.php');
if (empty($_SESSION['id'])) {
    header('location:Adminlogin.php');
}
?>

    <div class="container">
        <div class="row" >
            <marquee style="background-color:orange; color:white; font-weight:550;font-size:50px;" direction="right"
              >
                Welcome to Dashboard--
                <?php
                echo $_SESSION['AdminLoginId'];
                ?>
            </marquee>

            <h1 style="Background-color:orange;"></h1>
        </div>
    </div>


<?php include('footer.php') ?>

