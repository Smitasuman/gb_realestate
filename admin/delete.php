<?php
session_start();
include "config.php";
if(empty($_SESSION['id'])){
    header('location:Adminlogin.php');
}
$id = $_GET['id'];//To get the data of each id

$sql = "DELETE FROM `slider` WHERE id='$id'";//delete query for each id

$result = $conn->query($sql);//connect and execute the operation 

if ($result == TRUE) {//conditions
?>
<script type="text/javascript"> alert("Data Deleted successfully");
    window.open("http://localhost/GB%20REALESTATE%20DESIGNS%20PVT%20LTD/admin/slider.php", "_self");
</script>

<?php
} else {
    ?>
<script type="text/javascript"> alert("Please try again");</script>
<?php
}
$conn->close();
    ?>