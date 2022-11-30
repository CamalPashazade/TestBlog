<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Admin Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php

                $sql = "SELECT c.id,c.title FROM categories c";
                $query = mysqli_query($db, $sql);
                $categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM  blog where id=$id");
                while ($row = mysqli_fetch_array($query)) {

                ?>
                    <form action="blogs/update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>" placeholder="Enter Title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" value="<?= $row['description'] ?>" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="./../uploads/<?php echo $row['image']; ?>" alt="Image" width="50" height="50">
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="video">Video</label>
                                <input type="text" name="video" class="form-control" value="<?= $row['video'] ?>" placeholder="Enter Video">
                            </div>
                            <div class="form-group">
                                <label for="email">Category ID</label>
                                <select name="cat_id" class="form-control">
                                    <?php foreach ($categories as $category) { ?>
                                        <?php
                                        if ($row['cat_id'] == $category['id']) {
                                            $select = "selected";
                                        } else {
                                            $select = "";
                                        }
                                        ?>
                                        <option value="<?php echo $category['id']; ?>" <?php echo $select; ?>><?php echo $category['title']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="video">Content</label>
                                <input type="text" name="content" class="form-control" value="<?= $row['content'] ?>" placeholder="Enter Video">
                            </div>
                            <div class="form-group">
                                <label for="password">Is Monset</label>
                                <select name="is_monset" class="form-control">
                                    <?php
                                    if ($row['is_monset'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $active = '';
                                        $passive = 'selected';
                                    }
                                    ?>
                                    <option value="0" <?= $passive ?>>Passive</option>
                                    <option value="1" <?= $active ?>>Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Status</label>
                                <select name="status" class="form-control">
                                    <?php
                                    if ($row['status'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $active = '';
                                        $passive = 'selected';
                                    }
                                    ?>
                                    <option value="0" <?= $passive ?>>Passive</option>
                                    <option value="1" <?= $active ?>>Active</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    <?php } ?>
                    </form>
            </div>

        </div>
    </section>
</div>