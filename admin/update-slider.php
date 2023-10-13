<?php
include "header.php";
include_once 'config.php';
$id = $_GET['id'];
?>


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Slider Images</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->

                <?php
                $sql = "SELECT * FROM `slider` where id='$id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>

                    <form action="update_image.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                        <input type="hidden" name="oldimage" value="<?php echo $row['id'] ?>" />

                        <div class="form-group">
                            <label> Status</label>
                            <select class="pops" name="status">
                                <?php
                                //  $sql1 = "SELECT * FROM slider  ";
                                //  $result1 = mysqli_query($conn, $sql1);
                                //     if (mysqli_num_rows($result)) {
                                ?>
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>

                            <?php
                            //  } 
                            ?>
                        </div>


                        <!-- <div class="form-group">
                                    <label for="exampleInputCategory">Slider Status</label>
                                    <select class="form-control" name="status"> -->
                        <?php
                        // include 'config.php';
                        // $sql1 = "SELECT * FROM slider";
                        // $result1 = mysqli_query($conn, $sql1);
                        // if (mysqli_num_rows($result1)) {
                        //     while ($row1 = mysqli_fetch_assoc($result1)) {
                        //         if ($row['status'] == $row1['status']) {
                        //             $selected = "Active";
                        //         } else {
                        //             $selected = "";
                    
                        //         }
                        //         echo " <option  value={$row1['category_id']} $selected> {$row1['category_name']} </option>";
                        //     }
                        // }
                        ?>
                        <!-- </select> -->
                        <!-- </div> -->




                        <div class="form-group">
                            <label for="">Post image</label>
                            <input type="file" name="image">
                            <img src="upload/<?php echo $row['image'] ?>" height="100px">
                            <input type="hidden" name="image_old" value="<?php echo $row['image'] ?>">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update" />

                    </form>
                    <!-- Form End -->
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>