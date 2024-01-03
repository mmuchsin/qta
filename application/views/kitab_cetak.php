<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo 'Kitab '.$kitab['judul'] ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/unlogic-logo.png" />
		<!-- Google Font: Source Sans Pro -->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--<link href="https://db.onlinewebfonts.com/c/eb289d26afbfd6114ddfdc053113218e?family=LPMQ+Isep+Misbah" rel="stylesheet">-->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/tambahan/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/tambahan/dist/css/adminlte.min.css">
		<style type="text/css" media="all">
			@page {
				/* margin: 10mm 30mm 10mm 7mm; */
				margin: 10mm 7mm 10mm 7mm;
				/* margin: 0; */
				size: A4; /* Ukuran Kertas A4 = 2480px x 3508px */
				/* orientation: landscape; */
			}
			@font-face {
                font-family: "arab pegon pesantren";
                src: url('<?php echo base_url() ?>assets/font/arab pegon pesantren.ttf');
            }
		</style>
	</head>

	<body>
		<div class="container-fluid">
			<div class="text-center" style="font-family:Poppins; font-size:2rem; font-weight:600;">
				<?php echo $kitab['judul'] ?>
			</div>
			<?php
				$halaman = 1;
				foreach($kitab_bab as $b) {
					$kitab_isi = $this->db->get_where('kitab_isi', ['id_bab' => $b['id_bab']])->result_array();
			?>
				<div class="card shadow-none">
					<div class="text-center mb-2" style="font-family:Poppins; font-size:2rem; font-weight:400;">
						<?php
						    if($b['urutan'] != '') {
						        echo $b['urutan'].'<br>';
						    } else {
						        echo "&nbsp;";
						    }
						    if($b['judul'] != '') {
						        echo $b['judul'];
						    } else {
						        echo "&nbsp;";
						    }
						?>
					</div>
					<?php
						$no_kalimat = 1;
						$no_fn		= 1;
						$batas_isi	= $this->db->limit(1)->order_by('id_isi', 'DESC')->get_where('kitab_isi', ['id_bab' => $b['id_bab']])->row('id_isi');
						for ($i=0; $i <= $batas_isi; $i++) {
							$kitab_isi = $this->db->limit(25, $i)->get_where('kitab_isi', ['id_bab' => $b['id_bab']])->result_array();
					?>
						<?php if($kitab_isi != NULL) { ?>
    						<?php if($i == 0) { ?>
    							<div class="row float-right" style="direction:rtl; height:1250px; position:relative;">
    						<?php } else { ?>
    							<div class="row float-right pt-3" style="direction:rtl; height:1350px; position:relative;">
    						<?php } ?>
    							<?php foreach($kitab_isi as $ks) { ?>
    								<div class="col-auto pl-1 mb-4 pt-4" style="margin-bottom:10px;">
    									<p class="text-right border-bottom border-dashed mb-2 pr-2" style="font-family:'arab pegon pesantren'; font-size:2.25rem; font-weight:500;">
    										<?php
												if($ks['kalimat_utama'] != '') {
													echo $ks['kalimat_utama'];
												} else {
													echo '&nbsp;';
												}
											?>
											<span class="border border-1 border-dark rounded-pill" style="padding: 2px 3px 2px 2px; font-family: Poppins; font-size: 0.75rem; font-weight: 500;">
												<?php echo $no_kalimat ?>
											</span>
    									</p>
    									<div class="row text-right pt-4" style="font-family:'arab pegon pesantren';">
    										<?php if($ks['kalimat_miring'] != '') { ?>
    											<?php
    												$perKata	= explode(" ", $ks['kalimat_miring']);
    												$filter		= array_values(array_filter($perKata));
    												$jml_kata	= count($filter);
    												if ($jml_kata < 4) {
    											?>
    												<div class="col-auto mt-2 pr-0" style="font-size:1.75rem; transform:rotate(-45deg); margin-left:0px;">
    													<?php echo $filter[0] ?>&nbsp;<?php echo $filter[1] ?>
    												</div>
    												<div class="col-auto mt-2 pr-0" style="font-size:1.75rem; transform:rotate(-45deg); margin-left:0px;">
    													<?php echo $filter[2] ?> <?php echo $filter[3] ?>
    												</div>
    											<?php } else { ?>
    												<div class="col-auto mt-2 pr-0" style="font-size:1.75rem; transform:rotate(-45deg); margin-left:0px;">
    													<?php echo $filter[0] ?>&nbsp;<?php echo $filter[1] ?>
    												</div>
    												<div class="col-auto mt-2 pr-0" style="font-size:1.75rem; transform:rotate(-45deg); margin-left:0px;">
    													<?php echo $filter[2] ?>
    												</div>
    												<div class="col-auto mt-2 pr-0" style="font-size:1.75rem; transform:rotate(-45deg); margin-left:0px;">
    													...
    												</div>
    											<?php } ?>
    										<?php } ?>
    									</div>
    								</div>
    							<?php $no_kalimat++; } ?>
    							<div class="col-12"><hr></div>
    							<?php foreach($kitab_isi as $fn) { ?>
    								<?php if($fn['kalimat_miring'] != '') { ?>
    									<?php
    										$perKataa	= explode(" ", $fn['kalimat_miring']);
    										$filterr    = array_values(array_filter($perKataa));
    										$jml_kataa	= count($filterr);
    										if ($jml_kataa > 3) {
    									?>
    										<div class="col-auto pt-1 mr-2">
    											<div class="row border-bottom border-dashed text-right float-right" style="font-family:Poppins; direction:rtl;">
    												<?php if($fn['footnote'] != '') { ?>
    													<div class="col-auto ml-2">
    														<div class="row">
    															<div class="col-auto">
    																<?php if($fn['kalimat_miring'] != '') { ?>
    																	<div class="col-auto pr-1" style="font-family:'arab pegon pesantren'; font-size:1.75rem; font-weight:300;">
    																		<?php echo $fn['kalimat_miring'] ?>
    																		<span class="border border-5 border-dark rounded-pill" style="padding: 2px 3px 2px 2px; font-family:Poppins; font-size:0.75rem; font-weight:500;">
    																			<?php echo $no_fn ?>
    																		</span>
    																		<br>
    																		<p class="pb-0 mb-1" style="font-family:'arab pegon pesantren'; font-size:1.75rem; font-weight:300;"><?php echo $fn['footnote']; ?></p>
    																	</div>
    																<?php } ?>
    															</div>
    														</div>
    													</div>
    												<?php } else { ?>
    													<div class="col-auto ml-2" style="font-family:'arab pegon pesantren'; font-size:1.75rem;">
    														<?php echo $fn['kalimat_miring'] ?>
    														<span class="border border-5 border-dark rounded-pill" style="padding: 2px 3px 2px 2px; font-family:Poppins; font-size:0.75rem; font-weight:500;">
    															<?php echo $no_fn ?>
    														</span>
    													</div>
    												<?php } ?>
    											</div>
    										</div>
    									<?php } elseif($fn['footnote'] != '') { ?>
    										<div class="col-auto pt-1 mr-2">
    											<div class="row border-bottom border-dashed text-right float-right" style="font-family:Poppins; direction:rtl;">
													<div class="col-auto ml-2">
														<div class="row">
															<div class="col-auto">
																<div class="col-auto pr-1">
																	<span class="border border-5 border-dark rounded-pill" style="padding: 2px 3px 2px 2px; font-family:Poppins; font-size:0.75rem; font-weight:500;">
																		<?php echo $no_fn ?>
																	</span>
																	<br>
																	<p class="pb-0 mb-1" style="font-family:'arab pegon pesantren'; font-size:1.75rem; font-weight:300;">( <?php echo $fn['footnote']; ?> )</p>
																</div>
															</div>
														</div>
													</div>
    											</div>
    										</div>
        								<?php } ?>
    								<?php } ?>
    							<?php $no_fn++; } ?>
    							<div class="col-12 mb-4">
    								&nbsp;
    							</div>
    							<div class="mb-4" style="height:20px; width:100%; bottom:0; position:absolute;">
    								<hr>
    								<p class="text-center" style="height:20px; width:100%; font-family:Poppins; font-size:1.5rem; font-weight:600;"><?php echo $halaman; ?></p>
    							</div>
    						</div>
						<?php  $halaman++; } ?>
					<?php $i += 24; } ?>
				</div>
			<?php } ?>

		</div>
		<script>
			window.addEventListener("load", window.print());
			// window.onfocus=function(){ window.close();}
		</script>
	</body>

</html>