<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request A Quote | Al Mouhana Trading Company</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <?php include('include/files.php'); ?>
    <style>
        .footer-section {
            margin-top: 0px;
            padding: 185px 0 0;
        }
    </style>
</head>

<body>
    <div class="sub-banner-section-outer contact-banner-section position-relative">
        <?php include('include/header.php'); ?>

        <!-- SUB BANNER SECTION -->
        <section class="banner-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content text-center">
                            <h1 data-aos="fade-up">Request A Quote</h1>
                            <!-- <p class="text-white" data-aos="fade-right">Bam libero tempore cum soluta nobis est eligendi cumaue imedit nelaceat ossimus omnis volueta raelle.</p> -->
                            <div class="btn_wrapper" data-aos="fade-up">
                                <span class="sub_home_span">Home </span>-<span class="sub_span"> Request A Quote</span>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="shape4 mb-0 position-absolute shape">
                    <img src="assets/images/sub_banner_shape4.png" alt="" class="img-fluid">
                </figure>
                <figure class="shape5 mb-0 position-absolute">
                    <img src="assets/images/sub_banner_shape5.png" alt="" class="img-fluid">
                </figure>
                <figure class="shape6 mb-0 position-absolute shape">
                    <img src="assets/images/sub_banner_shape6.png" alt="" class="img-fluid">
                </figure>
            </div>
        </section>
        <figure class="shape1 mb-0 position-absolute shape_2">
            <img src="assets/images/sub_banner_shape1.png" alt="" class="img-fluid">
        </figure>
        <figure class="shape2 mb-0 position-absolute shape_2">
            <img src="assets/images/sub_banner_shape2.png" alt="" class="img-fluid">
        </figure>
        <figure class="shape3 mb-0 position-absolute">
            <img src="assets/images/sub_banner_shape3.png" alt="" class="img-fluid">
        </figure>
    </div>
    <section class="contact-section position-relative">
        <div class="container">
            <figure class="right_shape mb-0 position-absolute shape">
                <img src="assets/images/contact_us_right_shape.png" alt="" class="img-fluid">
            </figure>
            <div class="row contact_box position-relative">
                <figure class="left_shape h-100 mb-0 position-absolute shape_2">
                    <img src="assets/images/contact_us_left_shape.png" alt="" class="img-fluid">
                </figure>

                <form method="POST" class="contact_box_parent">
                    <div class="row p-5">
                        <div class="col-lg-12">
                            <h4 class="mb-4 pb-1">Request A Quote</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label>Name <span>*</span></label>
                                <input type="text" placeholder="Full Name Here *" name="name" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label>Email Id <span>*</span></label>
                                <input type="email" placeholder="Email Here *" name="email" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label>Mobile Number <span>*</span></label>
                                <input type="text" placeholder="Phone No *" name="phone" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label>Country <span>*</span></label>
                                <input type="text" placeholder="Country" name="country" value="">
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="input-box mb-20">
                                <label>Subject <span>*</span></label>
                                <input type="text" placeholder="Subject *" name="subject" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-box file mb-20">
                                <label>Attachment File </label>
                                <label for="budget">pdf, doc, docx, zip file only</label>
                                <input type="file" id="budget" name="file">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-box mb-20">
                                <label>Description <span>*</span></label>
                                <textarea name="description" id="#" class="form-control" placeholder="Project Description *"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-12">
                            <div class="input-box mb-20 text-center">
                                <button class="main-btn wow fadeInUp mt-20 btn btn-primary px-5 py-3" data-wow-duration="1s" data-wow-delay=".3s" type="submit" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include('include/footer.php') ?>
    <?php include('include/file_js.php') ?>
</body>

</html>