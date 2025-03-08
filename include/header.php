<style>
    .header-scrolled {
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-bottom: 1px solid #fff;

    }

    .header-scrolled .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 1) !important;

    }

    .header-scrolled .navbar-light .navbar-nav .nav-link.btn-primary {
        color: rgb(255, 255, 255) !important;

    }
</style>
<header id="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div>
                <a class="navbar-brand" href="index.php">
                    <figure class="mb-0">
                        <img src="assets/images/logo_white.png" alt="Al Mouhana Logo" class="img-fluid" id="for_white_logo">
                        <img src="assets/images/al_mouhana_logo.png" alt="Al Mouhana Logo" class="img-fluid" id="for_dark_logo" style="display:none">
                    </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Who We Are </a>
                        <div class="dropdown-menu drop-down-content">
                            <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="about.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="word_from_director.php">Word From Director </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Our products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav for_right_btn">
                    <li></li>
                    <li class="nav-item dropdown ">
                        <!-- <select class=" p-3 nav-link dropdown-toggle btn-primary text-white" onchange="changeLanguage(this.value)">
                            <option value="en">English</option>
                            <option value="ar">Arabic</option>
                        </select> -->
                        <div id="google_translate_element" class="nav-link "></div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link btn-primary p-3 " href="quote.php">
                            Request A Quote&nbsp;
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                </svg>
                            </span>
                        </a>

                    </li>
                </ul>
                <!-- <div class="outer-div position-relative float-left w-100">

                    <div class="callus_outer position-absolute">
                        <span class="text-white">Call us now:</span>
                        <a href="tel:+012(345)6789" class="text-decoration-none text-white">+012 (345) 6789</a>
                    </div>
                </div> -->
            </div>
        </nav>
    </div>
</header>