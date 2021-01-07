	<?php /* Template Name: home */ ?>
	<!DOCTYPE html>
	<html lang="fa">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title> ALEF Radiology | Dr Mahsa Khademi</title>
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/yeakn.css">
	    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.png">
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/plugins.css">
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/purple-color.css" id="option-color">
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/main.css">
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/rtl-main.css">
	    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/khademi.css">

	    <link href="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.css" rel="stylesheet" type="text/css">
	    <script src="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.js" type="text/javascript"></script>
	</head>

	<body data-spy="scroll" data-target="#scrollspy" data-offset="1" class="rtl flat-demo">

	    <div id="overlayer"></div>
	    <span class="loader"></span>


	    <!-- Portfolio Single Modal Start -->
	    <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-scrollable" role="document">
	            <div class="modal-content text-muted">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="portfolioModalScrollable">کارهای من</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <div class="pt-4 pb-5">
	                        <div class="container">
	                            <div class="row">
	                                <div class="col-12 col-md-10 mx-auto">
	                                    <div class="text-center">
	                                        <h2 class="mb-3">تک صفحه <span class="base-color"> نمونه کار</span></h2>
	                                        <p class="max-width-450">در رادیولوژی الف ، رادیوگرافی های درون و بیرون دهان و
	                                            همچنین سی تی اسکن فک و صورت CBCT با بهترین دقت و حداقلی ترین دوز تابش با کمک
	                                            استفاده از به روزترین دستگاه های روز انجام می شود تا رضایت حداکثری مشتریان
	                                            جلب شود .</p>
	                                    </div>
	                                    <div class="row contact-info mt-5">
	                                        <div class="col-md-4">
	                                            <div class="text-center">
	                                                <div>

	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-4 p-title-border mt-3 mt-md-0">
	                                            <div class="text-center">
	                                                <div>
	                                                    <h6 class="contact_detail-title">تاریخ اتمام پروژه :</h6>
	                                                    <p class="mb-0">اردیبهشت 99</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-4 mt-3 mt-md-0">
	                                            <div class="text-center">
	                                                <div>
	                                                    <h6>مهارت ها :</h6>
	                                                    <p class="mb-0">HTML5 / PHP / CSS3</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="mt-5">
	                                        <div class="portfolio-single-item image-border">
	                                            <img src="ax/alef/1.jpg" class="d-block" alt="...">
	                                        </div>
	                                    </div>
	                                    <div class="text-md-left mt-5">
	                                        <p class="my-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
	                                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
	                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
	                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
	                                            حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
	                                        <p class="mt-3 mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
	                                            با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
	                                            و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
	                                            متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد
	                                            گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
	                                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
	                                            در زبان فارسی ایجاد کرد.</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--  Portfolio Single Modal End  -->

	    <!-- Blog Single Modal Start -->




	    <!-- blog post begin -->
	    <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => '3',
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
	        <?php while ($query->have_posts()) : ?>
	            <?php $query->the_post(); ?>
	            <!-- Item begin -->

	            <div class="blog-single modal fade" id="the_<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
	                <div class="modal-dialog modal-dialog-scrollable" role="document">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <h5 class="modal-title" id="blogModalScrollable"><?php the_title(); ?></h5>
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                <span aria-hidden="true">&times;</span>
	                            </button>
	                        </div>
	                        <div class="modal-body">
	                            <!--   Blog-single   Start -->
	                            <div class="pt-4 pb-5 text-muted">
	                                <div class="container">
	                                    <div class="row">
	                                        <div class="col-lg-10 mx-auto blog">
	                                            <div class="rounded px-lg-5">
	                                                <div class="text-md-left">
	                                                    <h4 class="mb-4"><?php the_title(); ?></h4>
	                                                    <div class="image-border">
	                                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
	                                                    </div>
	                                                    <span class="d-inline-block py-4"> <?php the_date('d M'); ?>
	                                                    </span>
	                                                    <?php
                                                        the_content(  );
                                                        ?>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--  Blog Single Modal End  -->

	            <!-- Item end -->
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
	    <?php endif; ?>
	    <!-- blog post end -->






	    <div id="pagepiling" class="pilling-page">

	        <!-- Social -->
	        <div class="social-box">
	            <div class="follow-label">
	                <span>مسیر های ارتباطی</span>
	            </div>
	            <div class="social">
	                <a href="javascript:void(0);"><i class="fa fa-whatsapp"></i></a>
	                <a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
	                <a href="javascript:void(0);"><i class="fa fa-telegram"></i></a>
	                <a href="javascript:void(0);"><i class="fa fa-phone"></i></a>
	            </div>
	        </div>

	        <!--   Header Start -->
	        <header>
	            <div class="logo-area">
	                <a href="#hero" class="logo">
	                    <span class="base-color ml-1">الف </span><span>رادیولوژی</span>
	                </a>
	            </div>
	            <div class="header-info-area">
	                <a class="overlay-menu-toggler lni-menu size-md" href="javascript:void(0);"></a>
	            </div>
	        </header>
	        <!--   Header End   -->

	        <!--    Overlay Menu Start    -->
	        <div class="overlay-menu bg-blue py-3 px-4 text-center center-item">
	            <!-- Overlay Menu -->
	            <div id="scrollspy" class="overlay-menu-list">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-lg-8 mx-auto overlay-nav">
	                            <ul class="list-group text-left" id="myMenu">
	                                <li data-menuanchor="hero" class="list-group-item"><a href="#hero">خانه</a></li>

	                                <li data-menuanchor="portfolio" class="list-group-item"><a href="#portfolio">
	                                        گالری تصاویر
	                                    </a></li>
	                                <li data-menuanchor="client" class="list-group-item"><a href="#testimonial">خدمات الف رادیولوژی</a>
	                                </li>
	                                <li data-menuanchor="blog" class="list-group-item"><a href="#blog">وبلاگ</a></li>

	                                <li data-menuanchor="client" class="list-group-item"><a href="#contact">ارتباط با
	                                        الف رادیولوژی</a>
	                                </li>
	                            </ul>
	                            <ul class="list-group contact-info text-left mb-0">
	                                <li class="list-group-item"><span>تماس با من :</span></li>
	                                <li class="list-group-item"><span><i class="lni-map-marker ml-1"></i>
	                                        زعفرانیه، میدان الف،
	                                        خیابان مقدس اردبیلی روبروی پالادیوم، ساختمان پیراسته،پلاک 81 <br>طبقه 3
	                                        واحد32
	                                    </span></li>
	                                <li class="list-group-item"><span><?= ot_get_option('phone_number'); ?><i class="lni-phone-handset ml-1"></i></span>
	                                </li>
	                                <li class="list-group-item"><span><?= ot_get_option('email'); ?><i class="lni-envelope ml-1"></i></span>
	                                </li>
	                                <li class="list-group-item"><span>مسیر های ارتباطی :</span></li>
	                                <li class="list-group-item">
	                                    <ul class="list-inline socails">
	                                        <li class="list-inline-item"><a href="#"><i class="fa fa-whatsapp"></i></a>
	                                        </li>
	                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
	                                        </li>
	                                        <li class="list-inline-item"><a href="#"><i class="fa fa-telegram"></i></a>
	                                        </li>
	                                        <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
	                                    </ul>
	                                </li>








	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!--    Overlay Menu End    -->

	        <!--    Hero Start    -->
	        <section class="section pp-scrollable hero hero-01 full-screen p-0" id="hero" data-navigation-tooltip="خانه">
	            <div class="container-fluid">
	                <div class="row justify-content-center" id="hero-slider">
	                    <div class="owl-carousel owl-theme">
	                        <!--  Item1 -->
	                        <div class="hero-slide hero-item1 full-screen"></div>
	                        <!--  Item2 -->
	                        <div class="hero-slide hero-item2 full-screen"></div>
	                        <!--  Item3 -->
	                        <div class="hero-slide hero-item3 full-screen"></div>
	                    </div>
	                </div>
	                <div class="text-center hero-content">
	                    <div class="col-lg-12">
	                        <div class="hero-content text-center">
	                            <h1 class="dark-color mb-0 mt-3">دکتر مهسا خادمی</h1>
	                            <h3 class="dark-color text-capitalize mb-3"><span class="base-color ml-1 ">الف رادیولوژی
	                                </span><span class="element" data-elements="تصویر برداری تخصصی درون و برون دهان , تصویر برداری تخصصی فک و صورت "></span>
	                                </h1>
	                                <p class=" mx-auto mt-4 dark-color">
	                                    در رادیولوژی الف ، رادیوگرافی های درون و بیرون دهان و همچنین سی تی اسکن فک و صورت
	                                    CBCT با بهترین دقت و حداقلی ترین دوز تابش با کمک استفاده از به روزترین دستگاه های
	                                    روز انجام می شود تا رضایت حداکثری مشتریان جلب شود .
	                                </p>
	                        </div>
	                    </div>
	                </div>
	                <div class="scroll-down">
	                    <a href="#about">
	                        <span></span>
	                    </a>
	                </div>
	            </div>
	        </section>




	        <!-- Portfolio Start -->
	        <section id="portfolio" class="section pp-scrollable portfolio" data-navigation-tooltip="نمونه کار">
	            <div class="display-table">
	                <div class="display-content">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-12">

	                                <div class="title-content">
	                                    <h2>گالری تصاویر <span class="base-color mr-1">الف رادیولوژی</span></h2>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <!--   Portfolio Filters   -->
	                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-center portfolio-filter">
	                                <li class="button-border list-inline-item">
	                                    <a href="#" data-filter="*" class="pill-button active">همه</a>
	                                </li>
	                                <li class="button-border list-inline-item">
	                                    <a href="#" data-filter=".mohit" class="pill-button">محیط مطب</a>
	                                </li>
	                                <li class="button-border list-inline-item">
	                                    <a href="#" data-filter=".moraje" class="pill-button">تصاویر مراجعین</a>
	                                </li>
	                                <li class="button-border list-inline-item">
	                                    <a href="#" data-filter=".radio" class="pill-button">رادیوگرافی</a>
	                                </li>
	                                <li class="button-border list-inline-item">
	                                    <a href="#" data-filter=".alef" class="pill-button">الف رادیولوژی</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <!-- portfolio row begin -->
	                        <div class="portfolio-items row">
	                            <!-- mohit begin -->
	                            <?php
                                $args = [
                                    'post_type' => 'matab_gallery',
                                    'category_name' => 'محیط مطب',
                                ];
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
	                                <?php while ($query->have_posts()) : ?>
	                                    <?php $query->the_post(); ?>
	                                    <!-- Item begin -->
	                                    <div class="col-lg-4 portfolio-item mohit">
	                                        <div class="image-border">
	                                            <div class="portfolio-item-content">
	                                                <img src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="/" class="img-fluid">
	                                                <div class="img-overlay text-center">
	                                                    <div class="img-overlay-content">
	                                                        <div class="portfolio-icon">
	                                                            <a href="<?php the_post_thumbnail_url(); ?>" class="js-zoom-gallery">
	                                                                <i class="lni-search"></i>
	                                                            </a>
	                                                        </div>
	                                                        <h5 class="mt-3 mb-0">محیط مطب</h5>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- Item end -->
	                                <?php endwhile; ?>
	                                <?php wp_reset_postdata(); ?>
	                            <?php endif; ?>
	                            <!-- mohit end -->

	                            <!-- morajein begin -->
	                            <?php
                                $args = [
                                    'post_type' => 'matab_gallery',
                                    'category_name' => 'مراجعین',
                                ];
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
	                                <?php while ($query->have_posts()) : ?>
	                                    <?php $query->the_post(); ?>
	                                    <!-- Item begin -->
	                                    <div class="col-lg-4 portfolio-item moraje">
	                                        <div class="image-border">
	                                            <div class="portfolio-item-content">
	                                                <img src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="/" class="img-fluid">
	                                                <div class="img-overlay text-center">
	                                                    <div class="img-overlay-content">
	                                                        <div class="portfolio-icon">
	                                                            <a href="<?php the_post_thumbnail_url(); ?>" class="js-zoom-gallery">
	                                                                <i class="lni-search"></i>
	                                                            </a>
	                                                        </div>
	                                                        <h5 class="mt-3 mb-0">محیط مطب</h5>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- Item end -->
	                                <?php endwhile; ?>
	                                <?php wp_reset_postdata(); ?>
	                            <?php endif; ?>
	                            <!-- morajein end -->


	                            <!-- radio begin -->
	                            <?php
                                $args = [
                                    'post_type' => 'matab_gallery',
                                    'category_name' => 'رادیوگرافی',
                                ];
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
	                                <?php while ($query->have_posts()) : ?>
	                                    <?php $query->the_post(); ?>
	                                    <!-- Item begin -->
	                                    <div class="col-lg-4 portfolio-item radio">
	                                        <div class="image-border">
	                                            <div class="portfolio-item-content">
	                                                <img src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="/" class="img-fluid">
	                                                <div class="img-overlay text-center">
	                                                    <div class="img-overlay-content">
	                                                        <div class="portfolio-icon">
	                                                            <a href="<?php the_post_thumbnail_url(); ?>" class="js-zoom-gallery">
	                                                                <i class="lni-search"></i>
	                                                            </a>
	                                                        </div>
	                                                        <h5 class="mt-3 mb-0">محیط مطب</h5>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- Item end -->
	                                <?php endwhile; ?>
	                                <?php wp_reset_postdata(); ?>
	                            <?php endif; ?>
	                            <!-- radio end -->


	                            <!-- alef begin -->
	                            <?php
                                $args = [
                                    'post_type' => 'matab_gallery',
                                    'category_name' => 'الف',
                                ];
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
	                                <?php while ($query->have_posts()) : ?>
	                                    <?php $query->the_post(); ?>
	                                    <!-- Item begin -->
	                                    <div class="col-lg-4 portfolio-item alef">
	                                        <div class="image-border">
	                                            <div class="portfolio-item-content">
	                                                <img src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="/" class="img-fluid">
	                                                <div class="img-overlay text-center">
	                                                    <div class="img-overlay-content">
	                                                        <div class="portfolio-icon">
	                                                            <a href="<?php the_post_thumbnail_url(); ?>" class="js-zoom-gallery">
	                                                                <i class="lni-search"></i>
	                                                            </a>
	                                                        </div>
	                                                        <h5 class="mt-3 mb-0">محیط مطب</h5>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- Item end -->
	                                <?php endwhile; ?>
	                                <?php wp_reset_postdata(); ?>
	                            <?php endif; ?>
	                            <!-- alef end -->



	                        </div>
	                        <!-- portfolio row end -->
	                    </div>
	                </div>
	            </div>
	        </section>
	        <!--  Portfolio End  -->

	        <!-- Testimonial Start -->
	        <section id="testimonial" class="section pp-scrollable testimonial" data-navigation-tooltip="خدمات الف رادیولوژی">
	            <div class="display-table">
	                <div class="display-content">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-12">

	                                <div class="title-content">
	                                    <h2> خدمات <span class="base-color"> الف رادیولوژی </span></h2>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-12">
	                                <div class="owl-carousel">
	                                    <!-- Testimonial Item-01 -->
	                                    <div class="testimonial-item box-border">
	                                        <div class="testimonial-image">
	                                            <div class="testimonial-image-border">


	                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
	                                                    <g id="outline">
	                                                        <rect x="25" y="48" width="2" height="2" />
	                                                        <rect x="25" y="52" width="2" height="2" />
	                                                        <path d="M58,26V19h1a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H50V3a1,1,0,0,0-1-1H36a1,1,0,0,0-.707.293L32,5.586,30.707,4.293a1,1,0,0,0-1.154-.188l-4,2a1,1,0,0,0-.26,1.6l9,9A1,1,0,0,0,35,17a.959.959,0,0,0,.16-.013,1,1,0,0,0,.735-.54l2-4a1,1,0,0,0-.188-1.154L36.414,10l2-2H44V22H39a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h5V38.586l-4.293-4.293A1,1,0,0,0,39,34H22V30h2v1a1,1,0,0,0,1,1H35a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1H25a1,1,0,0,0-1,1v1H21a1,1,0,0,0-1,1v5H15.721L12,22.837V16a4,4,0,0,0-8,0v7a1.9,1.9,0,0,0,.051.316l6,18A1,1,0,0,0,11,42h7v3a1,1,0,0,0,1,1h2V56H18a1,1,0,0,0-.895.553l-2,4A1,1,0,0,0,16,62H36a1,1,0,0,0,.9-1.447l-2-4A1,1,0,0,0,34,56H31V46h2a1,1,0,0,0,1-1V42h2.586L44,49.414V56H42a1,1,0,0,0-.9.553l-2,4A1,1,0,0,0,40,62H54a1,1,0,0,0,.9-1.447l-2-4A1,1,0,0,0,52,56H50V53.324a3.566,3.566,0,0,0,2.854-1.8,3.511,3.511,0,0,0,.536-1.841,4.885,4.885,0,0,0-1.683-3.387L50,44.586V19h2v7h2V19h2v7ZM26,28h8v2H26ZM6,16a2,2,0,0,1,4,0v6H6Zm5.721,24L6.387,24h3.892l5.333,16ZM46,4h2V56H46ZM34.726,14.312,27.688,7.274,29.8,6.217l5.98,5.98ZM38,6a1,1,0,0,0-.707.293L35,8.586,33.414,7l3-3H44V6Zm2,20V24h4v2ZM17.721,40l-1.333-4H20v4ZM33.382,58l1,2H17.618l1-2ZM23,56V46h6V56Zm9-12H20V42H32Zm5.707-3.707A1,1,0,0,0,37,40H22V36H38.586L44,41.414v5.172ZM51.382,58l1,2H41.618l1-2ZM50.293,47.707a3.042,3.042,0,0,1,1.1,1.973,1.514,1.514,0,0,1-.247.8A1.668,1.668,0,0,1,50,51.317v-3.9ZM50,17V15h8v2Z" />
	                                                    </g>
	                                                </svg>


	                                            </div>
	                                        </div>
	                                        <h5 class="d-block text-center font-weight-bold base-color h5  mt-3"><?= ot_get_option('khadamat_title_1'); ?></small></h5>
	                                        <p class="mb-0 mt-3 text-dark text-center"> <?= ot_get_option('khadamat_text_1'); ?></p>
	                                    </div>
	                                    <!-- Testimonial Item-02 -->
	                                    <div class="testimonial-item box-border">
	                                        <div class="testimonial-image">
	                                            <div class="testimonial-image-border">
	                                                <svg viewBox="0 -32 496 496" xmlns="http://www.w3.org/2000/svg">
	                                                    <path d="m231.816406 399.808594c5.289063.121094 10.679688.191406 16.183594.191406v-16c-5.375 0-10.648438-.070312-15.816406-.191406zm0 0" />
	                                                    <path d="m52.832031 365.34375c25.257813 10.878906 79.984375 29.746094 162.769531 33.855469l.796876-15.984375c-80.269532-3.984375-132.964844-22.117188-157.230469-32.558594zm0 0" />
	                                                    <path d="m463.816406 246.199219c-.9375-12.382813-11.199218-22.199219-23.816406-22.199219h-32c-6.167969 0-11.742188 2.40625-16 6.238281-4.257812-3.839843-9.832031-6.238281-16-6.238281h-32c-7.007812 0-13.273438 3.070312-17.664062 7.878906-5.273438-4.847656-12.246094-7.878906-19.960938-7.878906h-36.75c-8.554688 0-16.21875 3.703125-21.625 9.519531-5.414062-5.816406-13.070312-9.519531-21.625-9.519531h-36.75c-7.714844 0-14.6875 3.03125-19.96875 7.878906-4.382812-4.808594-10.648438-7.878906-17.65625-7.878906h-32c-6.167969 0-11.742188 2.40625-16 6.238281-4.257812-3.839843-9.832031-6.238281-16-6.238281h-32c-12.617188 0-22.878906 9.816406-23.816406 22.199219l-30.734375 99.898437c-.960938 3.109375-1.449219 6.359375-1.449219 9.621094 0 15.105469 10.441406 28.265625 25 31.816406 10.34375 5.664063 86.167969 44.464844 223 44.464844s212.65625-38.800781 223-44.472656c14.558594-3.542969 25-16.703125 25-31.808594 0-3.261719-.488281-6.503906-1.449219-9.621094zm-55.816406-6.199219h32c4.414062 0 8 3.585938 8 8v32c0 13.230469-10.769531 24-24 24s-24-10.769531-24-24v-32c0-4.414062 3.585938-8 8-8zm-72 8c0-4.414062 3.585938-8 8-8h32c4.414062 0 8 3.585938 8 8v32c0 13.230469-10.769531 24-24 24s-24-10.769531-24-24zm-66.375-8h36.75c7.511719 0 13.625 6.113281 13.625 13.625 0 .992188-.113281 1.992188-.328125 2.960938l-10.28125 46.246093c-2.238281 10.113281-11.039063 17.167969-21.390625 17.167969s-19.152344-7.054688-21.390625-17.167969l-10.28125-46.246093c-.214844-.96875-.328125-1.96875-.328125-2.960938 0-7.511719 6.113281-13.625 13.625-13.625zm-80 0h36.75c7.511719 0 13.625 6.113281 13.625 13.625 0 .992188-.113281 1.992188-.328125 2.960938l-10.28125 46.246093c-2.238281 10.113281-11.039063 17.167969-21.390625 17.167969s-19.152344-7.054688-21.390625-17.167969l-10.28125-46.246093c-.214844-.96875-.328125-1.96875-.328125-2.960938 0-7.511719 6.113281-13.625 13.625-13.625zm-69.625 0h32c4.414062 0 8 3.585938 8 8v32c0 13.230469-10.769531 24-24 24s-24-10.769531-24-24v-32c0-4.414062 3.585938-8 8-8zm-72 8c0-4.414062 3.585938-8 8-8h32c4.414062 0 8 3.585938 8 8v32c0 13.230469-10.769531 24-24 24s-24-10.769531-24-24zm418.542969 124.136719-1.285157.253906-1.152343.664063c-.738281.433593-75.875 42.945312-216.105469 42.945312-139.800781 0-215.375-42.519531-216.121094-42.953125l-1.152344-.65625-1.277343-.253906c-7.792969-1.570313-13.449219-8.464844-13.449219-16.417969 0-1.671875.246094-3.328125.742188-4.917969l17.699218-57.519531c5.503906 15.511719 20.183594 26.71875 37.558594 26.71875 13.128906 0 24.703125-6.449219 32-16.246094 7.296875 9.796875 18.871094 16.246094 32 16.246094 14.289062 0 26.753906-7.59375 33.832031-18.886719l1.152344 5.191407c3.878906 17.488281 19.105469 29.695312 37.015625 29.695312s33.136719-12.207031 37.015625-29.695312l2.984375-13.425782 2.984375 13.425782c3.878906 17.488281 19.105469 29.695312 37.015625 29.695312s33.136719-12.207031 37.015625-29.695312l1.152344-5.191407c7.078125 11.292969 19.542969 18.886719 33.832031 18.886719 13.128906 0 24.703125-6.449219 32-16.246094 7.296875 9.796875 18.871094 16.246094 32 16.246094 17.375 0 32.054688-11.207031 37.558594-26.71875l17.699218 57.519531c.496094 1.589844.742188 3.246094.742188 4.917969 0 7.953125-5.65625 14.847656-13.457031 16.417969zm0 0" />
	                                                    <path d="m264.191406 32.199219c-5.289062-.136719-10.6875-.199219-16.191406-.199219v16c5.367188 0 10.640625.0625 15.808594.191406zm0 0" />
	                                                    <path d="m443.167969 66.65625c-25.257813-10.878906-79.984375-29.746094-162.769531-33.855469l-.796876 15.976563c80.285157 4 132.972657 22.125 157.230469 32.574218zm0 0" />
	                                                    <path d="m32.183594 185.800781c.9375 12.382813 11.199218 22.199219 23.816406 22.199219h32c6.167969 0 11.742188-2.40625 16-6.238281 4.257812 3.839843 9.832031 6.238281 16 6.238281h32c7.007812 0 13.273438-3.070312 17.664062-7.878906 5.273438 4.847656 12.246094 7.878906 19.960938 7.878906h36.75c8.554688 0 16.21875-3.703125 21.625-9.519531 5.414062 5.816406 13.070312 9.519531 21.625 9.519531h36.75c7.714844 0 14.6875-3.03125 19.96875-7.878906 4.382812 4.808594 10.648438 7.878906 17.65625 7.878906h32c6.167969 0 11.742188-2.40625 16-6.238281 4.257812 3.839843 9.832031 6.238281 16 6.238281h32c12.617188 0 22.878906-9.816406 23.816406-22.199219l30.734375-99.890625c.960938-3.109375 1.449219-6.359375 1.449219-9.628906 0-15.105469-10.441406-28.273438-25-31.816406-10.34375-5.664063-86.167969-44.464844-223-44.464844s-212.65625 38.800781-223 44.472656c-14.558594 3.535156-25 16.703125-25 31.808594 0 3.269531.488281 6.511719 1.449219 9.621094zm55.816406 6.199219h-32c-4.414062 0-8-3.59375-8-8v-32c0-13.230469 10.769531-24 24-24s24 10.769531 24 24v32c0 4.40625-3.585938 8-8 8zm72-8c0 4.40625-3.585938 8-8 8h-32c-4.414062 0-8-3.59375-8-8v-32c0-13.230469 10.769531-24 24-24s24 10.769531 24 24zm66.375 8h-36.75c-7.511719 0-13.625-6.113281-13.625-13.625 0-1 .113281-1.992188.328125-2.960938l10.28125-46.253906c2.238281-10.105468 11.039063-17.160156 21.390625-17.160156s19.152344 7.054688 21.390625 17.167969l10.289063 46.265625c.207031.957031.320312 1.949218.320312 2.949218 0 7.503907-6.113281 13.617188-13.625 13.617188zm80 0h-36.75c-7.511719 0-13.625-6.113281-13.625-13.625 0-1 .113281-1.992188.328125-2.960938l10.28125-46.253906c2.238281-10.105468 11.039063-17.160156 21.390625-17.160156s19.152344 7.054688 21.390625 17.167969l10.289063 46.265625c.207031.957031.320312 1.949218.320312 2.949218 0 7.503907-6.113281 13.617188-13.625 13.617188zm69.625 0h-32c-4.414062 0-8-3.59375-8-8v-32c0-13.230469 10.769531-24 24-24s24 10.769531 24 24v32c0 4.40625-3.585938 8-8 8zm72-8c0 4.40625-3.585938 8-8 8h-32c-4.414062 0-8-3.59375-8-8v-32c0-13.230469 10.769531-24 24-24s24 10.769531 24 24zm-418.542969-124.136719 1.285157-.253906 1.152343-.664063c.738281-.425781 75.875-42.945312 216.105469-42.945312 139.800781 0 215.375 42.519531 216.121094 42.953125l1.152344.664063 1.277343.253906c7.792969 1.554687 13.449219 8.457031 13.449219 16.410156 0 1.671875-.246094 3.328125-.742188 4.917969l-17.699218 57.519531c-5.503906-15.511719-20.183594-26.71875-37.558594-26.71875-13.128906 0-24.703125 6.449219-32 16.246094-7.296875-9.796875-18.871094-16.246094-32-16.246094-14.289062 0-26.753906 7.59375-33.832031 18.886719l-1.152344-5.191407c-3.878906-17.488281-19.105469-29.695312-37.015625-29.695312s-33.136719 12.207031-37.015625 29.695312l-2.984375 13.433594-2.984375-13.433594c-3.878906-17.488281-19.105469-29.695312-37.015625-29.695312s-33.136719 12.207031-37.015625 29.695312l-1.152344 5.191407c-7.078125-11.292969-19.542969-18.886719-33.832031-18.886719-13.128906 0-24.703125 6.449219-32 16.246094-7.296875-9.796875-18.871094-16.246094-32-16.246094-17.375 0-32.046875 11.207031-37.558594 26.71875l-17.699218-57.527344c-.496094-1.582031-.742188-3.238281-.742188-4.910156 0-7.953125 5.65625-14.855469 13.457031-16.417969zm0 0" />
	                                                </svg>
	                                            </div>
	                                        </div>
	                                        <h5 class="d-block text-center font-weight-bold base-color  h5  mt-3"><?= ot_get_option('khadamat_title_2'); ?></small></h5>
	                                        <p class="mb-0 mt-3 text-dark text-center"><?= ot_get_option('khadamat_text_2'); ?></p>
	                                    </div>
	                                    <!-- Testimonial Item-03 -->
	                                    <div class="testimonial-item box-border">
	                                        <div class="testimonial-image">
	                                            <div class="testimonial-image-border">

	                                                <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	                                                    <path d="m54 2h-44a3 3 0 0 0 -3 3v54a3 3 0 0 0 3 3h44a3 3 0 0 0 3-3v-54a3 3 0 0 0 -3-3zm-43 58h-1a1 1 0 0 1 -1-1v-54a1 1 0 0 1 1-1h1zm7-56h28v4h-28zm25 49v7h-30v-56h3v6h32v-6h3v48h-7a1 1 0 0 0 -1 1zm2 1h4.586l-4.586 4.586zm10 5a1 1 0 0 1 -1 1h-7.586l6.293-6.293a1 1 0 0 0 .293-.707v-49h1a1 1 0 0 1 1 1z" />
	                                                    <path d="m15 17v18h34v-18zm4 16h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm28 12h-26v-2h26zm0-4h-26v-2h26zm0-4h-26v-2h26zm0-4h-26v-2h26z" />
	                                                    <path d="m23.567 46.629a6.7 6.7 0 0 1 -1.567.371 6.7 6.7 0 0 1 -1.567-.371c-1.32-.41-2.964-.918-4.185-.018-.84.618-1.248 1.727-1.248 3.389 0 3.159 2.24 8 5 8 1.281 0 1.647-1.465 1.97-2.758.009-.037.019-.077.03-.119.011.042.021.082.03.119.323 1.293.689 2.758 1.97 2.758 2.76 0 5-4.841 5-8 0-1.662-.408-2.771-1.248-3.389-1.221-.9-2.864-.392-4.185.018zm.735 9.3c-.119-.317-.246-.828-.332-1.168-.323-1.296-.689-2.761-1.97-2.761s-1.647 1.465-1.97 2.758c-.086.34-.213.851-.332 1.168-1.077-.495-2.698-3.359-2.698-5.926 0-1.316.3-1.683.435-1.779.409-.3 1.563.056 2.406.318a7.666 7.666 0 0 0 2.159.461 7.666 7.666 0 0 0 2.159-.461c.843-.262 2-.619 2.406-.318.131.1.435.463.435 1.779 0 2.567-1.621 5.431-2.7 5.926z" />
	                                                    <path d="m31 48h14v2h-14z" />
	                                                    <path d="m31 52h10v2h-10z" />
	                                                    <path d="m31 56h8v2h-8z" />
	                                                    <path d="m47 48h2v2h-2z" />
	                                                    <path d="m15 37h34v2h-34z" />
	                                                    <path d="m15 41h14v2h-14z" />
	                                                    <path d="m31 41h8v2h-8z" />
	                                                    <path d="m41 41h2v2h-2z" />
	                                                    <path d="m23 12h18v2h-18z" />
	                                                    <path d="m43 12h2v2h-2z" />
	                                                    <path d="m19 12h2v2h-2z" />
	                                                </svg>

	                                            </div>
	                                        </div>
	                                        <h5 class="d-block text-center font-weight-bold base-color h5  mt-3"><?= ot_get_option('khadamat_title_3'); ?></small></h5>
	                                        <p class="mb-0 mt-3 text-dark text-center"><?= ot_get_option('khadamat_text_3'); ?></p>
	                                    </div>
	                                    <!-- Testimonial Item-04 -->
	                                    <div class="testimonial-item box-border">
	                                        <div class="testimonial-image">
	                                            <div class="testimonial-image-border">
	                                                <svg viewBox="-64 0 480 480.00075" xmlns="http://www.w3.org/2000/svg">
	                                                    <path d="m8 480h304c4.417969 0 8-3.582031 8-8v-108.9375c7.746094-9.042969 32-41.902344 32-99.0625s-24.253906-90.019531-32-99.058594v-28.941406c0-4.417969-3.582031-8-8-8h-60.6875l50.34375-50.34375c3.125-3.121094 3.125-8.1875 0-11.3125l-2.34375-2.34375 18.34375-18.34375c3.125-3.125 3.125-8.1875 0-11.3125l-32-32c-3.121094-3.125-8.1875-3.125-11.3125 0l-18.34375 18.34375-2.34375-2.34375c-3.125-3.125-8.1875-3.125-11.3125 0l-128 128c-3.125 3.125-3.125 8.191406 0 11.3125l2.34375 2.34375-26.34375 26.34375c-3.125 3.125-3.125 8.191406 0 11.3125l32 32c3.125 3.125 8.1875 3.125 11.3125 0l26.34375-26.34375 2.34375 2.34375c3.125 3.125 8.191406 3.125 11.3125 0l20.320312-20.320312c17.320313 11.5625 40.636719 7.734374 53.347657-8.761719 10.292969 5.394531 48.675781 29.40625 48.675781 87.425781 0 52.605469-41.625 82.367188-50.304688 88h-37.695312v-56c0-4.417969-3.582031-8-8-8h-144c-4.417969 0-8 3.582031-8 8v32c0 4.417969 3.582031 8 8 8h104v16h-24c-4.417969 0-8 3.582031-8 8v56h-88c-22.082031.027344-39.9726562 17.921875-40 40v16c0 4.417969 3.582031 8 8 8zm272-460.6875 20.6875 20.6875-12.6875 12.6875-20.6875-20.6875zm-152 193.375-20.6875-20.6875 20.6875-20.6875 20.6875 20.6875zm88-36.6875c-13.253906 0-24-10.746094-24-24s10.746094-24 24-24 24 10.746094 24 24c-.015625 13.25-10.75 23.984375-24 24zm22.023438-57.335938c-15.835938-10.511718-36.886719-8.40625-50.324219 5.035157-13.441407 13.4375-15.546875 34.488281-5.035157 50.324219l-14.664062 14.664062-36.6875-36.6875 116.6875-116.6875 36.6875 36.6875zm17.167968 41.335938c1.078125-5.277344 1.078125-10.71875 0-16h48.808594v16zm56.808594 104c1.117188-33.488281-12.722656-65.738281-37.765625-88h34.144531c18.933594 25.34375 28.675782 56.382812 27.621094 88 1.054688 31.617188-8.6875 62.65625-27.617188 88h-36.71875c25.320313-22.285156 39.980469-54.273438 40.335938-88zm-248 56v-16h128v16zm128 16v56c0 4.417969-3.582031 8-8 8s-8-3.582031-8-8v-56zm-48 32h16v24c0 13.253906 10.746094 24 24 24s24-10.746094 24-24v-24h96v48h-160zm-128 88c.015625-13.25 10.75-23.984375 24-24h264v32h-288zm0 0" />
	                                                    <path d="m272 384h16v16h-16zm0 0" />
	                                                    <path d="m240 384h16v16h-16zm0 0" />
	                                                </svg>
	                                            </div>
	                                        </div>
	                                        <h5 class="d-block text-center font-weight-bold base-color h5  mt-3"><?= ot_get_option('khadamat_title_4'); ?></small></h5>
	                                        <p class="mb-0 mt-3 text-dark text-center"> ><?= ot_get_option('khadamat_text_4'); ?></p>
	                                    </div>


	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <!--  Testimonial End  -->

	        <!--  Blog Start  -->
	        <section id="blog" class="section pp-scrollable blog" data-navigation-tooltip="بلاگ">
	            <div class="display-table">
	                <div class="display-content">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-12">

	                                <div class="title-content">
	                                    <h2>مطالب اخیر</h2>
	                                </div>
	                            </div>
	                        </div>

	                        <!-- blog row begin -->
	                        <div class="row">


	                            <!-- blog post begin -->
	                            <?php
                                $args = [
                                    'post_type' => 'post',
                                    'posts_per_page' => '3',
                                ];
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
	                                <?php while ($query->have_posts()) : ?>
	                                    <?php $query->the_post(); ?>
	                                    <!-- Item begin -->
	                                    <div class="col-lg-4">
	                                        <div class="blog-item box-border">
	                                            <div class="blog-image">
	                                                <div class="blog-intro">
	                                                    <img src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="/">
	                                                </div>
	                                            </div>
	                                            <div class="blog-content">
	                                                <ul class="list-inline mt-4">
	                                                    <li class="list-inline-item">
	                                                        <i class="lni-calendar base-color"></i>
	                                                        <span class="text-muted"><?php the_date('d M') ?></span>
	                                                    </li>
	                                                    <li class="list-inline-item">
	                                                        <i class="lni-comment base-color"></i>
	                                                        <span class="text-muted">الف رادیولوژی</span>
	                                                    </li>
	                                                </ul>
	                                                <h6 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"><?php the_title(); ?></a></h6>
	                                                <p class="text-dark">
	                                                    <?php the_excerpt(); ?>
	                                                </p>
	                                                <div class="blog-link">
	                                                    <a class="base-color" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#the_<?php the_ID(); ?>">ادامه مطلب...</a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- Item end -->
	                                <?php endwhile; ?>
	                                <?php wp_reset_postdata(); ?>
	                            <?php endif; ?>
	                            <!-- blog post end -->
	                        </div>

	                        <!-- blog row end -->
	                    </div>
	                </div>
	            </div>
	        </section>
	        <!--   Blog End   -->

	        <!-- Contact Start -->
	        <section id="contact" class="section pp-scrollable contact" data-navigation-tooltip="تماس با من">
	            <div class="display-table">
	                <div class="display-content">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-12">

	                                <div class="title-content">
	                                    <h2>ارتباط با <span class="base-color"> الف رادیو لوژی</span></h2>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row contact-info">
	                            <div class="col-12">
	                                <div id="map" style="width: 100%; height: 450px;"></div>
	                            </div>

	                            <div class="col-lg-4">
	                                <div class="contact-info-text text-center">
	                                    <div class="base-color">
	                                        <i class="lni-phone-handset size-md"></i>
	                                    </div>
	                                    <div class="mt-3">
	                                        <h5 class="text-dark mb-0">تلفن تماس</h5>
	                                        <small class="text-muted"><?= ot_get_option('phone_number'); ?></small>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-4">
	                                <div class="contact-info-text text-center">
	                                    <div class="base-color">
	                                        <i class="lni-map-marker size-md"></i>
	                                    </div>
	                                    <div class="mt-3">
	                                        <h5 class="text-dark mb-0 contact_detail-title">آدرس مطب</h5>
	                                        <small class="text-muted"><?= ot_get_option('address'); ?></small>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-4">
	                                <div class="contact-info-text text-center">
	                                    <div class="base-color">
	                                        <i class="lni-pointer size-md"></i>
	                                    </div>
	                                    <div class="mt-3">
	                                        <h5 class="text-dark mb-0">تلگرام </h5>
	                                        <small class="text-muted"><?= ot_get_option('telegram'); ?></small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-lg-12 mt-5 contact-form">
	                                <form id="contactForm">
	                                    <div class="row">
	                                        <div class="col-lg-6 form-item">
	                                            <div class="form-group">
	                                                <input name="name" id="name" type="text" class="form-control" placeholder="نام*" required>
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-6 form-item">
	                                            <div class="form-group">
	                                                <input name="email" id="email" type="email" class="form-control" placeholder="شماره تماس*" required>
	                                            </div>
	                                        </div>

	                                        <div class="col-12 form-item">
	                                            <div class="form-group">
	                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="پیام..."></textarea>
	                                            </div>
	                                        </div>
	                                        <div class="col-sm-12 mt-4 text-left">
	                                            <div class="button-border">
	                                                <a href="javascript:void(0)" class="pill-button" id="submit-btn" onclick="sendEmail()">ارسال پیام</a>
	                                            </div>
	                                            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
	                                                <div class="toast-body d-inline-block"></div>
	                                                <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
	                                                    <span aria-hidden="true" class="lni-close size-xs "></span>
	                                                </button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                        <div class="row copy-right">
	                            <div class="col-12 text-center text-dark">
	                                <p> حقوق کپی رایت سایت محفوظ است </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <!--  Contact End  -->





	    </div>

	    <!--  JavaScripts  -->
	    <script src="<?= get_template_directory_uri() ?>/assets/js/jquery-3.4.1.min.js"></script>
	    <!--  Plugin Js  -->
	    <script src="<?= get_template_directory_uri() ?>/assets/js/plugins.js"></script>
	    <!--  Custom JS  -->
	    <script src="<?= get_template_directory_uri() ?>/assets/js/arshia-rtl.js"></script>
	    <script src="<?= get_template_directory_uri() ?>/assets/js/khademi.js"></script>




	    <script type="text/javascript">
	        var myMap = new L.Map('map', {
	            key: 'web.Yax9vpkRvp1PR6m8JAnoiw92pbcSZfga4mdaT2jE',
	            maptype: 'neshan',
	            poi: true,
	            traffic: false,
	            center: [35.699739, 51.338097],
	            zoom: 14
	        });
	    </script>



	</body>

	</html>