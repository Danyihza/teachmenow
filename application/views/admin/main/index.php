<?php
$data = $this->session->userdata('data');
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Halaman Admin Teachmenow">
    <meta name="author" content="ThemeSelect">
    <title>Admin Page - Teachmenow</title>
    <link rel="apple-touch-icon" href="<?= base_url(); ?>theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>theme-assets/css/mystyle.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#" onclick="openFullscreen()"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url(); ?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= base_url(); ?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?= $data['username'] ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?= base_url(); ?>theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="<?= base_url(); ?>assets/img/icon.png" style="width: 28px; margin-left: 10px;" />
                        <h3 class="brand-text">&nbsp;&nbsp;Teachmenow</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="cards.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
            </ul>
        </div>
        <a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="<?= base_url('auth/logout') ?>"><i class="ft-power"></i><span class="menu-title" data-i18n=""> Logout</span></a>

        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Section Management</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addsectionmodal" id='add-section'><i class="ft-plus"></i>&nbsp;Add Section</button>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- ../../../<?= base_url(); ?>theme-assets/images/carousel/22.jpg -->

                <!-- Header footer section start -->
                <section id="header-footer">
                    <div class="row match-height" id="section-data">
                        <?php foreach ($section as $s) : ?>
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $s['title']; ?></h4>
                                        <h6 class="card-subtitle text-muted">Section <?= $s['title']; ?></h6>
                                    </div>
                                    <img class="" src="<?= base_url(); ?>theme-assets/images/banner/<?= $s['banner']; ?>" height="200px" alt="Card image cap">
                                    <div class="card-body">
                                    </div>
                                    <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                        <button data-toggle="modal" data-target="#modal<?= $s['id_section'] ?>" class="btn btn-warning"><i class="las la-pencil-alt"></i>Edit</button>
                                        <!-- <a href="#" class="btn btn-warning"><i class="las la-pencil-alt" disabled></i>Edit</a> -->
                                        <button style="color: #ffffff; <?= $s['id_section'] <= 4 ? 'cursor: not-allowed;' : '' ?>" data-id_section="<?= $s['id_section']; ?>" class="btn btn-danger remove" <?= $s['id_section'] <= 4 ? 'disabled' : '' ?>><i class="las la-trash-alt"></i>Remove</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <!-- Header footer section End -->


            </div>
        </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block"><script> document.write(new Date().getFullYear()); </script> &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        </div>
    </footer> -->

    <!-- BEGIN VENDOR JS-->
    <script src="<?= base_url(); ?>theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?= base_url(); ?>theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>theme-assets/js/myscript/edit-section.js" type="text/javascript"></script>

    <script>
        var elem = document.documentElement;

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }
    </script>

    <script>

    </script>

</body>

<!-- Modal Add Section-->
<div class="modal fade" id="addsectionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Section</h5>
                <button type="button" class="close" id="button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="basic-inputs">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Title</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" id="title" class="form-control" />
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 1 (Bold)</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading1" rows="3"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 2</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading2" rows="3"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->
                <div class="form-check form-switch" style="margin-bottom:1rem">
                    <input class="form-check-input" id="switchIcon" name="switchCheckbox" type="checkbox">
                    <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: 1rem;">Show triple icon</label>
                </div>
                <section class="basic-inputs" id="triple-icon">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="lfticon" placeholder="Title" />
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="lfticondsc" rows="3" placeholder="Description"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="rghticon" placeholder="Title" />
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" rows="3" id="rghticondsc" placeholder="Description"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Middle Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="mdlicon" placeholder="Title" />
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" rows="3" id="mdlicondsc" placeholder="Description"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="button-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="confirm">Confirm</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit Home -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit <?= $section[0]['title']; ?></h5>
                <button type="button" class="close" id="button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_section" value="<?= $section[0]['id_section']; ?>">
                <section class="basic-inputs">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Title</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" id="title_home" class="form-control" value="<?= $section[0]['title'] ?>"/>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 1</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading1_home" rows="3"><?= $section[0]['content_1'] ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 2</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading2_home" rows="3"><?= $section[0]['content_2'] ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 3</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading3_home" rows="5"><?= $section[0]['content_3'] ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="button-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="confirm_home">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit About Us-->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit <?= $section[1]['title']; ?></h5>
                <button type="button" class="close" id="button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="basic-inputs">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Title</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" id="title" class="form-control" value="<?= $section[1]['title']; ?>" />
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 1 (Bold)</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading1" rows="3"><?= $section[1]['content_1']; ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading 2</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="heading2" rows="3"><?= $section[1]['content_2']; ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-inputs">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="lfticon" placeholder="Title" value="<?= $section[1]['content_3']; ?>"/>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" id="lfticondsc" rows="3" placeholder="Description"><?= $section[1]['content_4']; ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="rghticon" placeholder="Title" value="<?= $section[1]['content_5']; ?>"/>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" rows="3" id="rghticondsc" placeholder="Description"><?= $section[1]['content_6']; ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Middle Icon</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="mdlicon" placeholder="Title" value="<?= $section[1]['content_7']; ?>"/>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="form-control" rows="3" id="mdlicondsc" placeholder="Description"><?= $section[1]['content_8']; ?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="button-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="confirm">Confirm</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#triple-icon').hide();
    })

    $('#switchIcon').on('click', function() {
        if ($('input[name="switchCheckbox"]').prop('checked')) {
            console.log('hidup')
            $('#triple-icon').slideDown('fast');
        } else {
            $('#triple-icon').slideUp('fast');
        }
    })

    $('#confirm').on('click', function() {
        const title = $('#title').val();
        const heading1 = $('#heading1').val();
        const heading2 = $('#heading2').val();
        const lfticon = $('#lfticon').val();
        const lfticondsc = $('#lfticondsc').val();
        const rghticon = $('#rghticon').val();
        const rghticondsc = $('#rghticondsc').val();
        const mdlicon = $('#mdlicon').val();
        const mdlicondsc = $('#mdlicondsc').val();
        $.ajax({
            url: "<?= base_url('api/admin/addData') ?>",
            method: 'POST',
            data: {
                title: title,
                heading1: heading1,
                heading2: heading2,
                lfticon: lfticon,
                lfticondsc: lfticondsc,
                rghticon: rghticon,
                rghticondsc: rghticondsc,
                mdlicon: mdlicon,
                mdlicondsc: mdlicondsc
            },
            dataType: "text",
            success: function(response) {
                $('#title').val(null);
                $('#heading1').val(null);
                $('#heading2').val(null);
                $('#lfticon').val(null);
                $('#lfticondsc').val(null);
                $('#rghticon').val(null);
                $('#rghticondsc').val(null);
                $('#mdlicon').val(null);
                $('#mdlicondsc').val(null);
                $('#title').removeAttr('value');
                $('#heading1').removeAttr('value');
                $('#heading2').removeAttr('value');
                $('#lfticon').removeAttr('value');
                $('#lfticondsc').removeAttr('value');
                $('#rghticon').removeAttr('value');
                $('#rghticondsc').removeAttr('value');
                $('#mdlicon').removeAttr('value');
                $('#mdlicondsc').removeAttr('value');
                $('#section-data').load(" #section-data");
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    })

    $(document).on('click', '.remove', function() {
        console.log('ckicked')
        const data = $(this).data('id_section');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `<?= base_url('api/admin/deleteData/') ?>${data}`,
                    type: "POST",
                    data: "data",
                    contentType: "application/json; charset=utf-8",
                    dataType: "JSON",
                    success: function(response) {
                        $('#section-data').load(" #section-data");
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    }
                });
            }
        })

    })
</script>



</html>