				<!-- <section id="informasi_kpr" class="informasi_kpr">
					<div class="container"> -->
				<section style="background-color: #F9F9F9;padding-bottom:5px;">
			    <?php if(!isset($_SESSION['tc_id_user'])):?>
			    <div class="container" style="margin-top: 90px;padding-top: 70px;margin-bottom: 40px;">
			    <?php else:?>
			    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
			    <?php endif;?>

						<div class="row">

							<div class="col-md-9 col-lg-9">
								<h3><?php echo $title;?></h3>
								<img src="<?php echo base_url();?>/assets/custom/images/properti/2.jpg" class="img-responsive img-rounded spesifikasi_gambar_kpr">

								<!-- <div class="row">
									<div class="col-md-12">

										<div class="content_informasi_kpr">

											
											<div class="isi_content">

												<div class="alert alert-success" style="font-weight: bold;">Terdapat beberapa game yang telah FarmerGamer sediakan, agar para petani dan calon pembeli dapat bertransaksi secara aman. Berikut ini game yang FarmerGamer sediakan :
												<ul>
													<li><span class="badge" style="font-size: 15px;background-color: #5cb85c;">1</span> <span class="badge" style="font-size: 15px;background-color: #dd4b39">RO Return</span></li>
													<li><span class="badge" style="font-size: 15px;background-color: #5cb85c;">2</span> <span class="badge" style="font-size: 15px;background-color: #dd4b39">RF Return</span></li>
													<li><span class="badge" style="font-size: 15px;background-color: #5cb85c;">3</span> <span class="badge" style="font-size: 15px;background-color: #dd4b39">Blade N Soul</span></li>
												</ul>
												</div>
											</div>

											
										</div>
									
									</div>
								</div> -->

							</div>

							<div class="col-md-3">
								<div class="info_berita">
									<div class="judul_info">Panduan</div>
									<ul>
										<li><a href="#" class="link_berita"><i class="fa fa-caret-right"></i> Panduan Transaksi Aman</a></li>
										<li><a href="#" class="link_berita"><i class="fa fa-caret-right"></i> Cara Pesan</a></li>
										<li><a href="#" class="link_berita"><i class="fa fa-caret-right"></i> Cara Pembayaran</a></li>
										<li><a href="#" class="link_berita"><i class="fa fa-caret-right"></i> Cara Pengembalian Dana</a></li>
										<li><a href="#" class="link_berita"><i class="fa fa-caret-right"></i> Daftar Game</a></li>
									</ul>
								</div>

								<div class="info_berita" style="background-color: #333;color: white;">
									<span>Jual Produk</span>
									<button style="float: right;font-size: 12px;background-color: transparent;outline-color: white;color: white;">Selengkapnya</button>
								</div>

								<div class="row" style="margin-top: -7px;">
									<div class="card-side-with-carousel">
										<div class="col-md-12">
					                        <a href="<?php echo base_url();?>dijual/detail_properti/">
					                            <figure>
					                                <img src="<?php echo base_url();?>assets/custom/images/properti/3.jpg" alt="Image" class="img-responsive">
					                            </figure>
					                            <div style="padding: 10px;border: 1px solid #ccc;margin-top: -20px;">
					                            
					                                <p><a href="<?php echo base_url();?>dijual/detail_properti/" class="link_berita">Disewakan Gedung Kantor Di Pusat Kota</a></p>
					                                <p style="margin-top: -20px;"><i class="fa fa-map-marker" style="color: red;"></i> Candi, Semarang</p>
					                            </div>
					                        </a>
					                    </div>

					                    <div class="col-md-12">
					                        <a href="<?php echo base_url();?>dijual/detail_properti/">
					                            <figure>
					                                <img src="<?php echo base_url();?>assets/custom/images/properti/1.jpg" alt="Image" class="img-responsive">
					                            </figure>
					                            <div style="padding: 10px;border: 1px solid #ccc;margin-top: -20px;">
					                            
					                                <p><a href="<?php echo base_url();?>dijual/detail_properti/" class="link_berita">Dijual Rumah Nyaman Siap Huni</a></p>
					                                <p style="margin-top: -20px;"><i class="fa fa-map-marker" style="color: red;"></i> Pekayon, Bekasi</p>
					                            </div>
					                        </a>
					                    </div>

									</div>
								</div>

							</div>    

							<div class="col-md-12 konten-sosial">
								<button class="button-sosial-twitter"><i class="fa fa-twitter"></i> Tweet</button>
								<button class="button-sosial-facebook"><i class="fa fa-facebook"></i> Like</button>
								<button class="button-sosial-google"><i class="fab fa-google"></i> +1</button>
								<button class="button-sosial-linkedin"><i class="fa fa-linkedin"></i> Share</button>
							</div>

						</div>
					</div>
				</section>