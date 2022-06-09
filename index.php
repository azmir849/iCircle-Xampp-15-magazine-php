<?php include("./include/header.php") ?>
<!--    Home Section Start  ------------------------------------------->
<section>
    <div class="home">
        <div class="container">
            <div class="home_wrapper">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sideBar">
                            <div class="sideBar_wrapper">
                                <ul>
                                    <?php
                                    foreach (array_slice($no_position,0,10)  as $value) {
                                    ?>
                                        <li>
                                            <div class="name"><a href=<?= "book.php?id=" . $value->id ?>><?=$value->menu_name?></a></div>
                                            <div class="edit">
                                                <ul>
                                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                    <li><i class="fa-solid fa-trash"></i></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="banner">
                            <?php if (!empty($sliders)) { ?>
                                <?php foreach ($sliders as $key => $slide) { ?>
                                    <div class="banner_item">
                                        <img src="<?= "https://icircles.app/uploads/slider/" . $ms_id . "/" . $slide->image ?>" alt="">
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>

                        <div class="profiledesk">
                            <div class="profile">
                                <?php foreach ($front_section as $key => $menu) {
                                    if ($menu->menui_item == 3 && $menu->status == 1) { ?>
                                        <h5><?= $menu->page_title; ?></h5>
                                        <div class="profileImg">
                                            <img src="<?= "https://icircles.app/uploads/content/" . $ms_id . "/" . $menu->featured_image ?>" alt="">
                                        </div>
                                        <div class="profileBio">
                                            <p><?= $menu->body_content; ?></p>
                                        </div>
                                <?php }
                                } ?>

                                <!-- <h5> সম্পাদকের ডেস্ক</h5>
                                <div class="profileImg">
                                    <img src="images/poetry.jpg" alt="">
                                </div>
                                <div class="profileBio">
                                    <p>গোলাম মোস্তফা অনন্ত অসীম প্রেমময় তুমি বিচার দিনের স্বামী। যত গুণগান হে চির মহান তোমারি অন্তর্যামী। দ্যুলোক-ভূলোক সবারে ছাড়িয়া তোমারি চরণে পড়ি লুটাইয়া তোমারি সকাশে যাচি হে শকতি তোমারি করুণাকামী। সরল সঠিক পূণ্য পন্থা মোদের দাও গো বলি, চালাও সে-পথে যে-পথে তোমার প্রিয়জন গেছে চলি। যে-পথে তোমার চির-অভিশাপ যে-পথে ভ্রান্তি, চির-পরিতাপ হে মহাচালক,মোদের কখনও করো না সে পথগামী। </p>
                                </div> -->
                            </div>
                        </div>
                        <div class="buttonSection">
                            <ul>
                                <li><a href="#">বর্তমান সমস্যা</a></li>
                                <li><a href="#">আপনার নিবন্ধ, কবিতা, উপন্যাস, গল্প জমা দিন</a></li>
                                <li><a href="#">নতুন সেকশন যোগাযোগ করুন</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------- Home Section End --------------------------------------------------->

<?php include("./include/footer.php") ?>