<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/generalservice/home/173');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response);
curl_close($ch);
$ms_id = $result->data->ms_id;
$front_section = $result->data->front_sections;
$sponsors = $result->data->sponsors;
$main_nav = $result->data->main_nav;
$no_position = $result->data->no_position;
$ms_info = $result->data->ms_info;
$foot_nav = $result->data->foot_nav;
$sliders = $result->data->sliders;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://icircles.app/uploads/micrositeslogo/<?= $ms_info->entity_logo ?>" type="image/png">
    <title><?= $ms_info->name ?></title>
    <link rel="shortcut icon" href="images/bmana.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <!--
             Header Section Start 
   --------------------------------------------------->
    <section id="home">
        <div class="header">
            <div class="container">
                <div class="header_top">
                    <div class="top_left">
                        <div class="logo">
                            <img src="<?= "https://icircles.app/uploads/micrositeslogo/" . $ms_info->entity_logo ?>" alt="">
                        </div>
                    </div>
                    <div class="top_right">
                        <div class="info">
                            <ul>
                                <li><i class="fa-solid fa-phone"></i><?= $ms_info->entity_phone ?></li>
                                <li><i class="fa-solid fa-envelope"></i> <?= $ms_info->entity_email ?></li>
                            </ul>
                        </div>
                        <div class="icon">
                            <ul>
                                <?php if (isset($ms_info->fb_url)) { ?>
                                    <li><a href="<?= $ms_info->fb_url ?>"><i class="fa-brands fa-facebook-square fb"></i></a></li>
                                <?php } ?>
                                <?php if (isset($ms_info->twiter_url)) { ?>
                                    <li><a href="<?= $ms_info->twiter_url ?>"><i class="fa-brands fa-twitter-square tr"></i></a></li>
                                <?php } ?>
                                <?php if (isset($ms_info->linkedin_url)) { ?>
                                    <li><a href="<?= $ms_info->linkedin_url ?>"><i class="fa-brands fa-linkedin lk"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="NavBarHeader">
                <div class="container">
                    <div class="navItems">
                        <div class="navbar">
                            <div class="navbar_left">
                                <ul>
                                    <!-- <li><a href="#">হোম</a></li> -->
                                    <li><a href="index.php">Home</a></li>
                                    <?php foreach ($main_nav as $key => $item) { ?>
                                        <li><a href=<?= "page.php?id=" . $item->id ?>><?= $item->menu_name ?></a></li>
                                    <?php } ?>
                                    <!-- <li><a href="archive.php">সংরক্ষণাগার</a></li> -->
                                </ul>
                            </div>
                            <div class="navbar_right">
                                <div class="search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <div class="searchBar">
                            <form action="#">
                                <input type="text" class="form_control" placeholder="অনুসন্ধান করুন">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
                 Header Section End 
     --------------------------------------------------->