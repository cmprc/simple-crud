<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url() ?>assets/images/logos/fav.png" />
    <!--[if IE]><link rel="shortcut icon" href="img/fav.ico"><![endif]-->

    <!-- Title Page-->
    <title>treZoom</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>assets/fonts/fontawesome/css/fontawesome.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="<?= site_url() ?>">
                            <img src="<?= base_url() ?>/assets/images/logos/logo.png" class="logo" alt="Trello">
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="fa fa-plus"></i>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__item">
                                        <div class="content">
                                            <a href="<?= site_url('users/add') ?>">Novo usuário</a>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="content">
                                            <a href="<?= site_url('tasks/add') ?>">Nova tarefa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="https://www.codeigniter.com/user_guide/" target="_blank" class="link">ci_documentation</a>
                    </div>
                </div>
        </header>
        <!-- END HEADER DESKTOP -->