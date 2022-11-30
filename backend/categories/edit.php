<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Categorie Edit</h3>
                </div>
                <?php
                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM  categories where id=$id");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <form action="categories/update.php?id=<?= $id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?= $row['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="Menu">Menu</label>
                                <select name="menu" class="form-control">
                                    <?php
                                    if ($row['is_menu'] == 1) {
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
                                <label for="Status">Status</label>
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