<?php include('./include/header.php');?>

<section>
    <div class="archive">
        <div class="container">
            <div class="archive_wrapper">
                <div class="row">
                        <?php foreach ($no_position as $value) {
                             $dateTimeString = $value->date;
                             $datetime = new DateTime($dateTimeString);
                             $year = $datetime->format('d-M-Y');
                             // echo '<script>console.log(' . json_encode($datetime->format('Y')) . ')</script>';
                             ?>
                            <div class="col-sm-6 col-lg-3">
                            <div class="archive_card">
                                <div class="arcchiveImg">
                                    <img src="<?= "https://icircles.app/uploads/content/" . $ms_id . "/" . $value->featured_image ?>" alt="">
                                </div>
                                <div class="archiveText">
                                    <h4><a href=<?= "book.php?id=" . $value->id ?>><?=$value->menu_name?></a></h4>
                                    <h5><i class="fa-solid fa-user"></i><?= $ms_info->name ?></h5>
                                    <div class="card_info">
                                        <ul>
                                            <li><i class="fa-solid fa-clock"></i><?=$year?></li>
                                            <li> <i class="fa-solid fa-eye"></i> ১৯৫</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('./include/footer.php'); ?>