<?php
include('header.php');
?>


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add New Images</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <!-- Form -->
                        <form class="slider_form" action="action-slider.php" method="POST"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label> Status</label>
                                <select class="pops" name="status">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Post Slider image</label>
                                <input name="image" type="file" required>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                        </form>
                    </div>

                    <div class="col-md-6">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>