<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Settings</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=settings/create" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM  settings");
                                    $settings = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                    foreach ($settings as $setting) {
                                    ?>
                                        <tr>
                                            <td><?= $setting['_key'] ?></td>
                                            <td><?= $setting['value'] ?></td>
                                            <td><?= $setting['status'] ?></td>
                                            <td style="display:flex;column-gap:5px;">
                                                <a href="index.php?route=settings/edit&id=<?= $setting['id'] ?>" title="Edit" class="btn btn-sm btn-primary pull-right">
                                                    <i class="voyager-paper-plane">Edit</i>
                                                </a>
                                                <a href="index.php?route=settings/delete&id=<?= $setting['id'] ?>" title="Delete" class="btn btn-sm btn-danger pull-right">
                                                    <i class="voyager-paper-plane">Delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>