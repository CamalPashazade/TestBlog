<?php
include "../config/config.php";
$query = "SELECT * FROM categories";
$result = mysqli_query($db, $query);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Create</h3>
                </div>
                <form action="index.php?route=bstore" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <br>
                            <textarea name="content" id="content" cols="40" rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="custom-file">
                            <label class="custom-file-label" for="image">Image</label>
                            <input class="custom-file-input" type="file" name="image" id="image" class="form-control">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="Video">Video</label>
                            <input type="text" name="video" id="description" class="form-control" placeholder="Enter Video">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <br>
                            <select class="custom-select form-control" name="cat_id" id="cat_id">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Main">Main</label>
                            <br>
                            <select class="custom-select form-control" id="Main" name="main">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>