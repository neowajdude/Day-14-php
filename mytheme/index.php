<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="default">
        <div class="head_top">
            <div class="row px-2 text-white">
                <div class="col-lg-6">
                    <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="d-inline-block px-1">৯ অগ্রহায়ণ, ১৪২৯</p>
                    <a class="text-white px-1 text-decoration-none" href="#">English</a>
                </div>
            </div>
        </div>

        <div class="logo mt-3">
            <div class="row">
                <div class="col-lg-5">
                    <a href="#">
                        <?php the_custom_logo(); ?>
                    </a>
                </div>
                <div class="col-lg-5 mt-4">
                    <input class="w-75" type="text" placeholder="খুঁজুন ">
                    <button>অনুসন্ধান </button>
                </div>
                <div class="col-lg-2 d-flex mt-3">
                    <div>
                        <a href="#"><img class="doyel px-2 pt-3" src="doc/images/header/a2i-logo-footer.png" alt=""></a>
                    </div>
                    <div class="px-2">
                        <p class="text-primary m-0">সাথে থাকুন:</p>
                        <a href="#"><img src="doc/images/header/facebook-icon.png" alt=""></a>
                        <a href="#"><img src="doc/images/header/twitter-blue-icon.png" alt=""></a>
                        <a href="#"><img src="doc/images/header/youtube-icon.png" alt=""></a>
                        <a href="#"><img src="doc/images/header/gplus-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="default mt-3">
        <?php
        wp_nav_menu([
            'menu_location'=>'TM',
            'menu_class'=>'nav'
        ]);
        ?>
        <!-- <ul class="nav nav_bar bg-light">
            <li class="nav-item"><a class="nav-link text-dark" href="">হোম</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">বাংলাদেশ সম্পর্কিত</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">ই-সেবাসমূহ</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">সেবাখাত</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">ব্যবসা-বাণিজ্য</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href=""> বৈদেশিক বিনিয়োগ</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">আইন-বিধি</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">তথ্য বাতায়ন</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">সেবাকুঞ্জ</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="">ফরমস</a></li>
        </ul> -->
    </nav>

    <section class="mt-3 default">
        <div class="row">
            <div class="col-lg-8 left_part">
                <div class="banner">
                   <a href="#"><?php dynamic_sidebar('mainbanner'); ?></a> 
                </div>
                
                <div class="slider mt-2">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <?php $qry1= new WP_Query([
                            'post_type'=>'post',
                            'category_name'=>'slider'
                        ]); ?>
                        <div class="carousel-inner">
                            <?php while($qry1->have_posts()):$qry1->the_post(); ?>
                                <div class="carousel-item active">
                                    <?php the_post_thumbnail(); ?>
                                    <!-- <a href="#"><img src="" alt=""></a>  -->
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

                <div class="tab mt-3 ms-2">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">সকল ই-সেবা</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row w-100 tab_under">
                                <div class="col-lg-2">
                                    <a class="d-inline-block text-danger text-center" href="#"><img src="doc/images/tab/agriculture.png" alt=""><br>কৃষি</a>
                                </div>
                                <div class="col-lg-2">
                                    <a class="d-inline-block text-danger text-center" href="#"><img src="doc/images/tab/call_center.png" alt=""><br>কল সেন্টার</a>
                                </div>
                                <div class="col-lg-2">
                                    <a class="d-inline-block text-danger text-center" href="#"><img src="doc/images/tab/agriculture.png" alt=""><br>মৎস্য ও প্রাণী</a>
                                </div>
                                <div class="col-lg-2">
                                    <a class="d-inline-block text-danger text-center" href="#"><img src="doc/images/tab/mobile_service.png" alt=""><br>মোবাইল সেবা</a>
                                </div>
                                <div class="col-lg-2">
                                    <a class="d-inline-block text-danger text-center" href="#"><img src="doc/images/tab/helpdesk.png" alt=""><br>হেল্পডেস্ক</a>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                </div>

                <div class="uddog mt-4 mx-2">
                    <div class="row">
                        <div class="col-lg-7">
                            <h6 class="text-primary">উদ্যোগ</h6>
                            <ul class="list-unstyled m-0">
                                <li><a class="text-decoration-none text-dark" href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> (১৩-০৬-২০১৬)</li>
                                <li><a class="text-decoration-none text-dark" href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> (১৩-০৬-২০১৬)</li>
                                <li><a class="text-decoration-none text-dark" href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> (১৩-০৬-২০১৬)</li>
                                <li><a class="text-decoration-none text-dark" href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> (১৩-০৬-২০১৬)</li>
                                <li><a class="text-decoration-none text-dark" href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> (১৩-০৬-২০১৬)</li>
                            </ul>
                            <a class="sokol float-end mt-3 text-decoration-none" href="#">সকল</a>
                        </div>
                    </div>
                </div>

                <div class="tabs ps-2 mt-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/forms_portal_logo (1).png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/Konnect Logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/logo_0_0.png" alt=""></a>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/TP main-logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/vision_2021_bn.png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/visit-bangladesh-logo (1).png" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/forms_portal_logo (1).png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/Konnect Logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#"><img class="w-100" src="doc/images/tabs/logo_0_0.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="yothob mt-3">
                    <div>
                        <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                        <div class="d-flex justify-content-between">
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="আশ্রয়ণের  অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="mt-2">
                        <p>অন্যান্য ভিডিও</p>
                        <div class="d-flex justify-content-between">
                            <iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="193" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="বন্যার সময় কি করণীয়...?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="220" height="200" src="https://www.youtube.com/embed/aI97ajpyq00" title="How to Registration on Surokkha Web (www.surokkha.gov.bd)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 right_par">
                <div class="sidebar common">
                    <?php dynamic_sidebar('sideimage'); ?>
                </div>

                <div class="selector common">
                    <h6 class="text-primary">সকল বাতায়ন</h6>
                    <div class="d-flex">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ওয়েবসাইট বাছাই করুন</option>
                            <option value="1">মন্ত্রণালয়</option>
                            <option value="2">অধিদপ্তর </option>
                            <option value="3">ঢাকা বিভাগ</option>
                          </select>
                          <button>চলুন</button>
                    </div>
                </div>

                <div class="yotob mt-3 common">
                    <p class="yoto_p m-0">মুজিব১০০ আ্যাপ</p>
                        <?php dynamic_sidebar('youtube'); ?>
                </div>

                <div class="mt-3 common">
                    <p class="yoto_p">মাস্ক পরুন সেবা নিন</p>
                    <img style="height: 230px;" class="w-100" src="doc/images/dengu/mask-bd-portal (1).jpg" alt="">

                </div>

                <div class="mt-3 common">
                    <h6 class="text-primary">ডেঙ্গু প্রতিরোধে করণীয়</h6>
                    <img style="height: 230px;" class="w-100" src="doc/images/dengu/dengu.jpg" alt="">
                </div>

            </div>
        </div>
    </section>





    <div class="footer_top"></div>

    <footer class="default">
        <div class="row pt-3">
            <div class="col-lg-7 left_footer">
                <ul class="nav nav_bar nav_bottom">
                    <li class="nav-item"><a class="nav-link text-dark" href="">গোপনীয়তার নীতিমালা</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="">ব্যবহারের শর্তাবলি</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="">সার্বিক সহযোগিতায়</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="">সাইট ম্যাপ</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="">সচরাচর জিজ্ঞাসা</a></li>
                </ul>
                <div>
                    <p class="footer_p mt-3 ps-3">সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
                </div>
            </div>

            

            <div class="col-lg-5 right_footer text-end">
                <p class="footer_p">পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <div class="d-flex justify-content-end">
                    <p class="footer_p pt-4 px-2">কারিগরি সহায়তায়:</p>
                    <img src="doc/images/footer/np-logo-set.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    
</body>
</html>