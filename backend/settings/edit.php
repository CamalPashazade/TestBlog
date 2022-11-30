<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Categorie Edit</h3>
                </div>
                <?php
                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM  settings where id=$id");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <form action="settings/update.php?id=<?= $id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" name="key" id="key" class="form-control" placeholder="Enter Key" value="<?= $row['_key'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" name="value" id="value" class="form-control" placeholder="Enter Value" value="<?= $row['value'] ?>">
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