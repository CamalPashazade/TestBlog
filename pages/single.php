<!doctype html>
<html lang="en">
<!-- http://localhost/all/BlogPro/pages/single.php?page=1# -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Blog Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">





    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Large</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <?php
                include '../config/config.php';

                $query = ("SELECT  categories.title FROM categories");
                $categories = mysqli_query($db, $query);
                foreach ($categories as $category) {
                    if (is_array($category)) {
                        foreach ($category as  $val) {
                        }
                    }
                ?>

                


                    <a class="p-2 link-secondary" href="#"><?= $val ?></a>

                <?php } ?>
                <!-- <a class="p-2 link-secondary" href="#">U.S.</a>
                <a class="p-2 link-secondary" href="#">Technology</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Culture</a>
                <a class="p-2 link-secondary" href="#">Business</a>
                <a class="p-2 link-secondary" href="#">Politics</a>
                <a class="p-2 link-secondary" href="#">Opinion</a>
                <a class="p-2 link-secondary" href="#">Science</a>
                <a class="p-2 link-secondary" href="#">Health</a>
                <a class="p-2 link-secondary" href="#">Travel</a> -->
            </nav>
        </div>
    </div>
    <!-- ilk manset goy olan -->
    <?php
    $query = " Select * FROM  blog WHERE is_monset='1' and status='1' ORDER BY id DESC limit 1 ";
    $result = mysqli_query($db, $query);
    foreach ($result as $value) { ?>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic"><?php echo $value['title'] ?> </h1>
                    <a href="#" style="color: red;">Continue</a>
                <?php } ?>
                </div>
            </div>

            <!--ilk manset goy olan bitir -->




            <?php

            include '../config/config.php';

            if (isset($_GET['page'])) {

                $page = $_GET['page'];
            } else {

                $page = 1;
            };


            $showData = 2; // seyifede nece eded blog gosterilecek

            $limit = ($page - 1) * $showData; //0




            $query = mysqli_query($db, "SELECT * FROM  blog  WHERE is_monset=1 and status=1 ORDER BY created_at DESC  ");


            $countData = mysqli_num_rows($query); // 7


            $query = mysqli_query($db, "SELECT *FROM blog LIMIT " . $limit . ',' . $showData); // 0,2 kimidir

            $monsets = mysqli_fetch_all($query, MYSQLI_ASSOC); // tabloda olan butun melumati cekir

            $total_pages = ceil($countData / $showData); //4, //  tabloda olan id sayi hisseni bolurk seyifede nece blok gosterileceyine 

            $pagLink = "";

            foreach ($monsets as $monset) {

            ?>
                
                    <div class="col-md-6 ">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary"><?= $monset['title'] ?></strong>
                                <div class="mb-1 text-muted"><?= date("Y-m-d", strtotime($monset['created_at'])) ?></div>
                                <p class="card-text mb-auto"><?= $monset['description'] ?></p>
                                <a href="index.php?route=single&id=<?= $monset['id'] ?>" class="stretched-link">Continue
                                    reading</a>
                            </div>
                        </div>
                    </div>
                
            <?php } ?>



            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <?php
                    if ($page >= 2) {
                        echo "<li class='page-item'> 
                    <a class='page-link' href='single.php?page=" . ($page - 1) . "' aria-label='Previous'>
                     <span aria-hidden='true'>&laquo;</span>
                 <span class='sr-only'>Previous</span>
                     </a>
                        </li>";
                    };
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            $pagLink .= "<li class='page-item'><a class=' active page-link' href='single.php?page="
                                . $i . "'>" . $i . " </a>";
                        } else {
                            $pagLink .= "<li class='page-item'><a class='page-link' href='single.php?page=" . $i . "'>
                                                    " . $i . " </a></li>";
                        }
                    };
                    echo $pagLink;

                    if ($page < $total_pages) {
                        echo "<li class='page-item'>
                            <a class='page-link' href='single.php?page=" . ($page + 1) . "' aria-label='Previous'>
                                <span class='sr-only'>Next</span>
                                <span aria-hidden='true'>>></span>
                            </a>
                            </li>";
                    };
                    ?>


                </ul>
            </nav>


            <hr>
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Blogs</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Test Blog</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="single.html" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
            <!--  test hissesi-->
        </main>

        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>