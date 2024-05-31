<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/img/car.ico" type="image/x-icon">
    <title title="AutoParts Dash">AutoParts Dash</title>

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Local Styles -->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" title="Navigation Menu">
        <div class="container">
            <a class="navbar-brand" href="#" title="AutoPerformance Website"><span class="text-primary">Auto</span>PERFORMANCE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #carouselExampleIndicators" title="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #about" title="About Us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #services" title="Our Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #shop-by-parts" title="Shop By Parts">Parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #portfolio" title="Our Packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php #contact" title="Contact Us">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php" title="Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="portfolio" class="portfolio section-padding" title="Portfolio Section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Products</h2>
                        <p>Your passion, our expertise – turning dreams into reality on the road.</p>
                    </div>
                </div>
            </div>
            <div class="wrapper" title="Package Options">
                <div class="services">
                    <div class="row">
                    <?php

if(isset($_GET['product'])) {
    $product = $_GET['product'];
}


    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: ../../index.php');
        exit;
    }
    
    $css_classes = [
        'img-1',
        'img-2',
        'img-3',
        'img-4',
        'img-5',
        'img-6'
    ];
    

    include('../../../functions.php');
    include('../../../connection.php');


    $query = "SELECT name, description, image_url FROM $product";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        
        $class_count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $description = $row['description'];
            $image_url = $row['image_url'];
            $css_class = 'img-' . $class_count;

            echo <<<HTML
        <style>
            .$css_class {
                background-image: url($image_url);
                background-size: cover;
                background-position: center center;
            }
        </style>
HTML;

            echo <<<HTML
            <div class="col-lg-4 col-md-12 col-12" style="margin-bottom: 40px;">
            <a href="product-details.php?product=$product&name=$name">


            <span class="single-img $css_class">
                    <span class="img-text">
                        <h4>$name</h4>
                        <p>$description</p>
                    </span>
                </span>
            </a>
        </div>
HTML;
            $class_count++;
            if ($class_count >= count($css_classes)) {
                $class_count = 0;
            }
        }
    }

    mysqli_close($conn);
?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center py-5" title="Footer Section">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item"><a href="#" title="Facebook"><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" title="Instagram"><i class="bi bi-instagram"></i></a></li>
            </ul>
            <span id="copyright" class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | AutoPerformance
            </span>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>