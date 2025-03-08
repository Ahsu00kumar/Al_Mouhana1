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
                        <img src="assets/images/al_mouhana_logo.png" alt="Al Mouhana Logo" class="img-fluid" id="for_dark_logo">
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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav for_right_btn">
                    <li></li>
                    <li class="nav-item dropdown ">
                        <a class=" p-3 nav-link dropdown-toggle btn-primary" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z" />
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31" />
                            </svg> Lang
                        </a>
                        <div class="dropdown-menu drop-down-content">
                            <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="#">English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="../">Arabic</a>
                                </li>

                            </ul>
                        </div>
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