<?php include("./include/header.php");
$page_id = $_GET['id'];
// echo '<script>console.log(' . json_encode($page_id) . ')</script>';
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, 'https://icircles.app/api/generalservice/page/' . $ms_info->id . '/' . $page_id);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($ch1);
$result1 = json_decode($response1);
echo '<script>console.log(' . json_encode($result1) . ')</script>';
curl_close($ch1);
$pdfBooks = $result1->data;
?>
<section>
    <div class="backNav">
        <div class="container">
            <ul>
                <li><a href="page.php"> <i class="fa-solid fa-arrow-left"></i> প্রধান সূচক</a></li>
            </ul>
        </div>
    </div>
</section>
<!--
             Header Section End 
   --------------------------------------------------->

<!--
             Archive Section Start 
   --------------------------------------------------->

<section>
    <div class="book">
        <div class="container">
            <div class="publishedate">
                <h6>বছর ২৬, ইস্যু ০৭, এপ্রিল ২০২২</h6>
            </div>
            <div class="book_wrapper">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sideBar">
                            <div class="sideBar_wrapper">
                                <ul>
                                    <?php
                                    foreach (array_slice($no_position,0,10) as $value) {
                                    ?>
                                        <li>
                                            <div class="profileIcon">
                                                <img src="<?= "https://icircles.app/uploads/content/" . $ms_id . "/" . $value->featured_image ?>" alt="">
                                            </div>
                                            <div class="profileDetail">
                                                <h5 class="mt-3"><a href=<?= "book.php?id=" . $value->id ?>><?= $value->menu_name ?></a></h5>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 p-0">
                        <div class="bookPdf">
                            <?php foreach ($pdfBooks as $value) {
                                if ($value->documents) { ?>
                                    <iframe src="<?= "https://icircles.app/uploads/content/" . $ms_id ?>/<?= $value->documents ?>" width="100%" height="750px" style="border: none;" allowFullScreen>
                                    </iframe>
                                <?php
                                } else { ?>
                                    <h3 class="text-center mt-5">Documents Not Found!!.Please upload your documents.</h3>
                                <?php
                                }
                                ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
             Archive Section End 
   --------------------------------------------------->
<?php include("./include/footer.php") ?>

<script>
    $('.nav-tabs li a').click(function(e) {
        //get selected href
        var href = $(this).attr('href');

        //set all nav tabs to inactive
        $('.nav-tabs li').removeClass('active');

        //get all nav tabs matching the href and set to active
        $('.nav-tabs li a[href="' + href + '"]').closest('li').addClass('active');

        //active tab
        $('.tab-pane').removeClass('active');
        $('.tab-pane' + href).addClass('active');
    })
</script>