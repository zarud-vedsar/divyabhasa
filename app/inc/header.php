<body class>
<style>
        #loader {
    background: #6c757ded;
}

.loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    /* Semi-transparent dark background */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    /* Make sure it's on top of other content */
}

.loader {
    border: 4px solid rgba(255, 255, 255, 0.2);
    /* Semi-transparent border */
    border-top: 4px solid #ffffff;
    /* White border for spinning effect */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    /* Rotation animation */
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
    </style>
   
<div id="loader">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div>
    <div id="wrapper">

        <div id="preloader">
            <div id="spinner">
                <img src="./assets/images/preloaders/1.gif" alt>
            </div>
        </div>
        <?php

            function getFilenameFromUrl() {
                $requestUri = $_SERVER['REQUEST_URI'];
                $fileName = pathinfo($requestUri, PATHINFO_BASENAME);

                return $fileName;
            }
            $currfilename = getFilenameFromUrl();

            ?>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <style>
        /* Custom styles for the modal */
        .modal-backdrop {
            display: none;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            width: 90%;
            max-width: 500px;
        }

        .tabs .nav-link {
            cursor: pointer;
        }

        .tab-content {
            padding: 20px;
        }
        </style>


        <header id="header" class="header" id="desktop_nav">
            <div class="header-top bg-blue-111 sm-text-center p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget no-border m-0">
                                <ul class="list-inline xs-text-center text-white mt-5">
                                    <li class="m-0 pl-10 pr-10"> <a
                                            href="tel:<?= $select_website_setting[0]['contact'] ?>"
                                            class="text-white"><i class="fal fa-phone text-theme-colored"></i>
                                            <?= $select_website_setting[0]['contact'] ?></a> </li>
                                    <!-- <li class="m-0 pl-10 pr-10"> <i class="fal fa-clock text-theme-colored"></i> Mon-Fri 8:00 to 2:00 </li> -->
                                    <li class="m-0 pl-10 pr-10"> <a
                                            href="mailto:<?= $select_website_setting[0]['email'] ?>"
                                            class="text-white"><i class="fal fa-envelope text-theme-colored"></i>
                                            <?= $select_website_setting[0]['email'] ?></a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 pr-0">
                            <div class="widget no-border m-0">
                                <ul
                                    class="styled-icons icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                    <li><a href="#"><i class="fab fa-facebook-f text-white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google text-white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 ">
                            <a class="btn btn-colored  btn-theme-colored  pb-10" id="logingbtn" href="#promoModal2"
                                data-lightbox="inline">Login</a>

                        </div>
                        <div class="col-md-1 ">
                            <a class="btn btn-colored  btn-theme-colored  pb-10" href="#promoModal1"
                                data-lightbox="inline">Register</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord">
                            <a class="menuzord-brand pull-left flip m-0" href="./">
                                <h1><?= $select_website_setting[0]['website_title'] ?></h1>
                                <!-- <img src="./upload/<?= $select_website_setting[0]['dark_logo'] ?>" alt> -->
                            </a>
                            <ul class="menuzord-menu">
                                <li <?= ($currfilename=='index.php')? "class='active'":""  ?>><a href="./">Home</a></li>
                                <li <?= ($currfilename=='about.php')? "class='active'":""  ?>><a
                                        href="./about.php">About</a></li>
                                <li <?= ($currfilename=='classes.php')? "class='active'":""  ?>><a
                                        href="./classes.php">Classes</a></li>
                                <li <?= ($currfilename=='gallery.php')? "class='active'":""  ?>><a
                                        href="./gallery.php">Gallery</a></li>
                                <li <?= ($currfilename=='faq.php')? "class='active'":""  ?>><a href="./faq.php">Faq</a>
                                </li>
                                <li <?= ($currfilename=='contact.php')? "class='active'":""  ?>><a
                                        href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

       <script>
        setTimeout(() => {
        document.getElementById('loader').style.display = 'none';
    }, 1000); // hide delay when page load
       </script>