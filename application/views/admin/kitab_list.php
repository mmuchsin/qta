<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<title>Admin Unlogic Tech - Prototype Kitab</title>
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
                    <h1 class="text-dark fw-bold my-0 fs-2">Tambah Kitab</h1>
                    <!--end::Heading-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">Kitab</a>
                        </li>
                        <li class="breadcrumb-item text-dark">Tambah Kitab</li>
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
                            <a href="#" class="text-muted">&nbsp;&nbsp;&nbsp;Kitab</a>
                        </li>
                        <li class="breadcrumb-item text-dark">Tambah Kitab</li>
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
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Kitab</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Daftar Kitab</span>
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="tambah berita acara baru!">
                                    <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#tambah_kitab">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        Tambah Kitab Baru
                                    </a>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="min-w-150px">No</th>
                                                <th class="min-w-140px">Judul</th>
                                                <th class="min-w-140px">Penulis</th>
                                                <th class="min-w-140px">Admin</th>
                                                <th class="min-w-100px text-end">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $noo=1; foreach($kitab as $s) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $noo ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/kitab/'.$s['id_kitab']) ?>" class="text-dark fw-bolder text-hover-primary d-block fs-6"><?php echo $s['judul'] ?></a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7"><?php echo date('d F Y', strtotime($s['tanggal'])) ?></span>
                                                </td>
                                                <td>
                                                    <?php echo $s['penulis'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $this->db->get_where('admin', ['id' => $s['admin']])->row('nama') ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="<?php echo base_url('admin/kitab/'.$s['id_kitab']) ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#hapus_kitab<?php echo $s['id_kitab'] ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $noo++; } ?>
                                        </tbody>
                                    </table>
                                </div>
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
                <!--begin::Copyright-->
                <!-- <div class="text-dark order-2 order-md-1">
                    <span class="text-gray-400 fw-bold me-1">Created by</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                </div> -->
                <!--end::Copyright-->
                <!--begin::Menu-->
                <!-- <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/products/seven-html-pro" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul> -->
                <!--end::Menu-->
            </div>
        </div>
		<div class="modal fade" id="tambah_kitab" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<div class="modal-content">
					<div class="modal-header">
						<h2>
                            Tambah Kitab
                        </h2>
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="modal-body py-lg-10 px-lg-10">
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<form class="form" novalidate="novalidate" action="<?php echo base_url() ?>admin/kitab_tambah" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- <div class="col-4">
                                            <div class="w-100">
                                                <div class="fv-row mb-10">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Background Kitab</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Background Kitab.."></i>
                                                    </label>
                                                    <input type="file" class="form-control form-control-lg form-control-solid" name="background_header" placeholder=""/>
                                                </div>
                                            </div>
                                        </div> -->
                                        <input type="hidden" name="admin" value="<?php echo $admin['id'] ?>">
                                        <div class="col-6">
                                            <div class="w-100">
                                                <div class="fv-row mb-10">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Judul Kitab</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Judul Kitab.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="judul" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="w-100">
                                                <div class="fv-row mb-10">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Penulis</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Penulis Kitab.."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="penulis" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="w-100">
                                                <div class="fv-row mb-10">
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">Tanggal</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tanggal Kitab.."></i>
                                                    </label>
                                                    <input type="date" class="form-control form-control-lg form-control-solid" name="tanggal" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="d-flex flex-stack pt-10">
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
        <?php $no=1; foreach($kitab as $sm) { ?>
		<div class="modal fade" id="hapus_kitab<?php echo $sm['id_kitab'] ?>" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<div class="modal-content">
					<div class="modal-header">
						<h2>
                            Konfirmasi
                        </h2>
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="modal-body py-lg-10 px-lg-10">
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<div class="flex-row-fluid py-lg-5 px-lg-15">
                                <div class="w-100">
                                    <p>Apakah Anda Yakin akan menghapus Kitab <strong>"<?php echo $sm['judul'] ?>"</strong> ?</p>
                                </div>
                                <div class="d-flex flex-stack pt-10">
                                    <div class="me-2">

                                    </div>
                                    <div>
                                        <a href="<?php echo base_url('admin/kitab_hapus/'.$sm['id_kitab']) ?>" class="btn btn-lg btn-primary">
                                            <span class="indicator-label">
                                                Ya, Hapus!
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Modal - Create App-->
        <?php $no++; } ?>
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