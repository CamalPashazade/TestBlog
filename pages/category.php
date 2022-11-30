<?php
include '.././config/config.php';

$id = $_GET['id'];

$query = mysqli_query($db, "SELECT c.title_c, b.* FROM blog b
    LEFT JOIN categories c ON  c.id = b.cat_id
    WHERE cat_id='$id'");
$result = mysqli_query($db, $query);
foreach ($result as $monset) {
?>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static"> -->
                <strong class="d-inline-block mb-2 text-primary"><?= $monset['title'] ?></strong>
                <div class="mb-1 text-muted"><?= date("Y-m-d", strtotime($monset['created_at'])) ?></div>
                <p class="card-text mb-auto"><?= $monset['description'] ?></p>
                <a href="index.php?route=single&id=<?= $monset['id'] ?>" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
    <?php } ?>;
    </div>

    </main>