<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<title>Admin Unlogic Tech - Prototype Admin</title>
		<meta name="description" content="Content Management Service untuk Website Masjid Darul Muttaqin Kajar. By Unlogic Tech" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:url" content="https://theunlogic.com" />
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?php echo base_url() ?>assets/admin/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo base_url() ?>assets/admin/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>assets/admin/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">	
        <!--begin::Header-->
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <!--begin::Container-->
            <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pt-5 pb-lg-2" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_container', lg: '#kt_header_container', xl: 'kt_content_container'}">
                    <!--begin::Heading-->
                    <h1 class="text-dark fw-bold my-0 fs-2">Tambah Admin</h1>
                    <!--end::Heading-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-dark">Tambah Admin</li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title=-->
                <!--begin::Wrapper-->
                <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                    <!--begin::Aside mobile toggle-->
                    <!-- <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                            </svg>
                        </span>
                    </div> -->
                    <!--end::Aside mobile toggle-->
                    <!--begin::Logo-->
                    <!-- <a href="../dist/index.html" class="d-flex align-items-center">
                        <img alt="Logo" src="<?php echo base_url() ?>assets/admin/dist/assets/media/logos/logo-default.svg" class="h-40px" />
                    </a> -->
                    <!-- <h1 class="text-dark fw-bold my-0 fs-2 pt-4 pb-2">&nbsp;&nbsp;&nbsp;Dashboard</h1> -->
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1 pt-4">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">&nbsp;&nbsp;&nbsp;Admin</a>
                        </li>
                        <li class="breadcrumb-item text-dark">Tambah Admin</li>
                    </ul>
                    <!--end::Logo-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Toolbar wrapper-->
                <div class="d-flex flex-shrink-0">
                    <!--begin::Invite user-->
                    <!-- <div class="d-flex ms-3">
                        <a href="#" class="btn bg-body btn-color-gray-600 btn-active-info" tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">New User</a>
                    </div> -->
                    <!--end::Invite user-->
                    <!--begin::Create app-->
                    <!-- <div class="d-flex ms-3">
                        <a href="#" class="btn btn-info" tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">New Goal</a>
                    </div> -->
                    <!--end::Create app-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <div class="row gy-5 g-xl-12">
                    <div class="col-xl-12">
                        <div class="card shadow-sm card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Admin</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Tambah Admin Baru</span>
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="tambah berita acara baru!">
                                    <!-- <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#tambah_admin">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        Tambah Admin Baru
                                    </a> -->
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <form class="form" novalidate="novalidate" action="<?php echo base_url() ?>admin/admin_tambah_proses" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- <div class="col-4">
                                            <div class="w-100">
                                                <div class="fv-row mb-10">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Background Admin</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Background Admin.."></i>
                                                    </label>
                                                    <input type="file" class="form-control form-control-lg form-control-solid" name="background_header" placeholder=""/>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-12"><div class="separator my-2"></div></div>
                                        <div class="col-6">
                                            <div class="w-100">
                                                <div class="fv-row mb-5 pt-5">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Username</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Username Admin.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="username" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="w-100">
                                                <div class="fv-row mb-5 pt-5">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Password</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Password Admin.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="password" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12"><div class="separator my-2"></div></div>
                                        <div class="col-4">
                                            <div class="w-100">
                                                <div class="fv-row mb-5 pt-5">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Nama Admin</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Judul Admin.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="nama" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="w-100">
                                                <div class="fv-row mb-5 pt-5">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">No HP</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nomor Handphone Admin.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="no_hp" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="w-100">
                                                <div class="fv-row mb-5 pt-5">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Alamat</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Alamat Admin.."></i>
                                                    </label>
                                                    <textarea name="alamat" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="d-flex flex-stack pt-5 pb-5">
                                        <div class="me-2">

                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                <span class="indicator-label">
                                                    Simpan
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
            </div>
        </div>
        <!--end::Footer-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!-- <script>
			swal("Good job!", "You clicked the button!", "success");
		</script> -->
		<?php if ($this->session->flashdata('success')) { ?>
			<script>
				swal("Berhasil!", "<?php echo $this->session->flashdata('success') ?>", "success");
			</script>
		<?php } elseif ($this->session->flashdata('danger')) { ?>
			<script>
				swal("Gagal!", "<?php echo $this->session->flashdata('danger') ?>", "error");
			</script>
		<?php } ?>
        <!-- Datepicker -->
        <script type="text/javascript">
        $('.datepickers').datetimepicker({
            format : 'yyyy-MM-DD'
        });
        </script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?php echo base_url() ?>assets/admin/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url() ?>assets/admin/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?php echo base_url() ?>assets/admin/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?php echo base_url() ?>assets/admin/dist/assets/js/custom/widgets.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>