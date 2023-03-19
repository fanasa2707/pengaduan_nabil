<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #eee
        }

        .tab-contents {
            background-color: rgb(230, 228, 228)
        }

        .nav-tabs .nav-link,
        .nav-tabs {
            border: none;
            color: black
        }

        .nav-tabs .nav-link:focus {
            border-bottom: 3px solid blue;
            font-weight: 700
        }

        .selected-tab {
            background-color: rgb(231, 234, 238)
        }

        .year {
            margin-left: 100px;
            font-size: 20px;
            font-weight: 700;
            padding-top: 10px
        }

        .vertical-progress {
            width: 2px;
            height: 250px
        }

        #small-font {
            font-size: 14px
        }

        #blue-background {
            background-color: #AEC2B6
        }

        #dot1,
        #dot2,
        #dot3 {
            position: absolute;
            width: 20px;
            height: 20px;
            border: 5px solid #fff;
            border-radius: 50%;
            background: rgb(21, 90, 194)
        }

        #arrow {
            content: "";
            position: absolute;
            margin-left: -5px;
            border-width: 9px;
            border-style: solid;
            border-color: white transparent transparent transparent;
            transform: rotate(90deg)
        }

        #bluearrow {
            content: "";
            position: absolute;
            margin-left: -5px;
            border-width: 9px;
            border-style: solid;
            border-color: rgb(29, 99, 240) transparent transparent transparent;
            transform: rotate(90deg)
        }

        @media(min-width:992px) {
            #profile {
                width: 75px;
                width: 75px
            }

            .h4 {
                font-weight: bolder
            }

            #border-right {
                border-right: 2px solid rgb(165, 165, 165)
            }

            #dot1 {
                left: 112px
            }

            #dot2 {
                left: 112px;
                bottom: 138px
            }

            #dot3 {
                left: 112px;
                bottom: 25px
            }

            #status1 {
                position: absolute;
                width: 300px;
                height: 50px;
                left: 150px;
                bottom: 245px
            }

            #status2 {
                position: absolute;
                width: 300px;
                height: 50px;
                left: 150px;
                bottom: 126px
            }

            #status3 {
                position: absolute;
                width: 300px;
                height: 50px;
                left: 150px;
                bottom: 15px
            }

            #arrow,
            #bluearrow {
                top: 31%;
                left: -4%
            }

            .view {
                height: 360px;
                margin-top: 5%
            }
        }

        @media(max-width:991px) {
            #profile {
                width: 60px;
                height: 60px
            }

            #info h5,
            #info {
                font-size: 15px
            }

            .h4 {
                font-size: 16px
            }

            #count {
                font-size: 12px
            }

            #border-right {
                border-right: 2px solid rgb(165, 165, 165)
            }

            #status1 {
                position: absolute;
                width: 200px;
                height: 38px;
                left: 98px;
                bottom: 245px
            }

            #status2 {
                position: absolute;
                width: 200px;
                height: 38px;
                left: 98px;
                bottom: 126px
            }

            #status3 {
                position: absolute;
                width: 200px;
                height: 38px;
                left: 98px;
                bottom: 15px
            }

            #status1 .font-weight-bold,
            #status2 .font-weight-bold,
            #status3 .font-weight-bold,
            .day {
                font-size: 12px
            }

            #status1 .text-muted,
            #status2 .text-white,
            #task,
            #small-font {
                font-size: 10px
            }

            .dates {
                font-size: 14px
            }

            #dot1 {
                left: 100px
            }

            #dot2 {
                left: 100px;
                bottom: 138px
            }

            #dot3 {
                left: 100px;
                bottom: 25px
            }

            #arrow,
            #bluearrow {
                top: 21%;
                left: -6%
            }

            .selected-tab,
            .details {
                font-size: 15px
            }

            .view {
                height: 340px;
                margin-top: 2%
            }
        }

        @media(max-width:767px) {
            #profile {
                width: 45px;
                height: 45px
            }

            #info {
                font-size: 10px
            }

            #info h5 {
                margin-bottom: 3px
            }

            #blue-background .h4 {
                font-size: 12px
            }

            #blue-background #count {
                font-size: 10px
            }

            .nav-tabs .nav-link,
            .nav-tabs {
                border: none;
                color: black;
                font-size: 13px
            }

            .btn {
                padding: 2px;
                font-size: 12px;
                margin-left: 10px
            }

            .timeline {
                font-size: 10px
            }

            .year {
                margin-left: 110px
            }

            #status1 {
                left: 188px;
                bottom: 220px
            }

            #status2 {
                left: 188px;
                bottom: 105px
            }

            #status3 {
                left: 188px;
                bottom: -7px
            }

            #status1 .font-weight-bold,
            #status2 .font-weight-bold,
            #status3 .font-weight-bold,
            .day {
                font-size: 12px
            }

            #status1 .text-muted,
            #status2 .text-white,
            #task,
            #small-font {
                font-size: 10px
            }

            .dates,
            .updated {
                font-size: 14px
            }

            #dot1 {
                left: 147px
            }

            #dot2 {
                left: 147px;
                bottom: 114px
            }

            #dot3 {
                left: 147px;
                bottom: 1px
            }

            #arrow,
            #bluearrow {
                top: 21%;
                left: -6%
            }

            .vertical-progress {
                margin-left: 15px
            }

            .view {
                height: 280px;
                margin-bottom: 10px
            }
        }

        @media(max-width: 567px) {
            #blue-background {
                position: absolute;
                top: 118px
            }

            .nav-tabs {
                padding-top: 75px;
                padding-left: 15px
            }

            #profile {
                margin-left: 2px
            }

            .btn {
                margin-top: 10px
            }

            .timeline {
                margin-left: 10px;
                margin-top: 10px
            }

            #dot1,
            #dot2,
            #dot3 {
                left: 100px
            }

            #status1,
            #status2,
            #status3 {
                left: 130px;
                width: 180px
            }

            #status3 {
                bottom: -30px;
                height: 16%
            }

            #arrow,
            #bluearrow {
                left: -12px
            }
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">