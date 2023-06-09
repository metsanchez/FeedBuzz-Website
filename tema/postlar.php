<section class="main-content pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mgr-50">
				<div class="blog-section mb-20">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending-tab" aria-selected="true">En Yeniler</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="mostview-tab" data-toggle="tab" href="#most-view" role="tab" aria-controls="mostview-tab" aria-selected="false">En Eskiler</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular-tab" aria-selected="false">Popüler Olanlar</a>
						</li>
					</ul>
					<!--tabs-list end-->
					<div class="clearfix"></div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="trending" role="tabpanel" aria-labelledby="trending-tab">
							<div class="blog-items">
								<div class="row">
									<?php	
								$query = $db->query("SELECT * FROM yazilar order By yazi_id DESC LIMIT 6");
								if ( $query->rowCount() ){
									foreach( $query as $row ){
										$baslik = $row["baslik"];
										$baslik_seo = $row["baslik_seo"];
										$aciklama = $row["aciklama"];
										$resim = $row["resim"];
										$tarih = $row["tarih"];
										$yazar = $row["yazar"];
										$resim = $row["resim"];
										$hit = $row["hit"];
										$yazi_id = $row["yazi_id"];
										$kategori_adi = $row["kategori_adi"];
										$kategori_adi_seo = $row["kategori_adi_seo"];
										$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=130&w=170";
										$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
											$sorgu->execute();
											$say = $sorgu->fetchColumn();
										echo'<div class="col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="blog-item">
										<div class="blog-img">
										<img src="'.$resim.'" alt="'.$baslik.'">
										</div><!--blog-img end-->
										<div class="blog-info">
										<a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'" class="post-category">'.$kategori_adi.'</a>
										<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
										<ul class="meta">
										<li>'.strftime('%d %B %Y, %A', strtotime($row['tarih'])).'</li>
										<li><i class="la la-eye"></i>'.$hit.'</li>
										<li><i class="la la-comment-o"></i>'.$say.'</li>
										</ul>
										</div><!--blog-info end-->
										</div><!--blog-item end-->
										</div>';
									}
								}
								?>



								</div>
							</div>
							<!--blog-items end-->
						</div>
						<div class="tab-pane fade" id="most-view" role="tabpanel" aria-labelledby="mostview-tab">
							<div class="blog-items">
								<div class="row">
									<?php	
								$query = $db->query("SELECT * FROM yazilar order By yazi_id ASC LIMIT 6");
								if ( $query->rowCount() ){
									foreach( $query as $row ){
										$baslik = $row["baslik"];
										$baslik_seo = $row["baslik_seo"];
										$aciklama = $row["aciklama"];
										$resim = $row["resim"];
										$tarih = $row["tarih"];
										$yazar = $row["yazar"];
										$resim = $row["resim"];
										$hit = $row["hit"];
										$yazi_id = $row["yazi_id"];
										$kategori_adi = $row["kategori_adi"];
										$kategori_adi_seo = $row["kategori_adi_seo"];
										$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=130&w=170";
										$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
											$sorgu->execute();
											$say = $sorgu->fetchColumn();
										echo'<div class="col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="blog-item">
										<div class="blog-img">
										<img src="'.$resim.'" alt="'.$baslik.'">
										</div><!--blog-img end-->
										<div class="blog-info">
										<a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'" class="post-category">'.$kategori_adi.'</a>
										<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
										<ul class="meta">
										<li>'.strftime('%d %B %Y, %A', strtotime($row['tarih'])).'</li>
										<li><i class="la la-eye"></i>'.$hit.'</li>
										<li><i class="la la-comment-o"></i>'.$say.'</li>
										</ul>
										</div><!--blog-info end-->
										</div><!--blog-item end-->
										</div>';
									}
								}
								?>


								</div>
							</div>
							<!--blog-items end-->
						</div>
						<div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
							<div class="blog-items">
								<div class="row">
									<?php	
								$query = $db->query("SELECT * FROM yazilar order By hit DESC LIMIT 6");
								if ( $query->rowCount() ){
									foreach( $query as $row ){
										$baslik = $row["baslik"];
										$baslik_seo = $row["baslik_seo"];
										$aciklama = $row["aciklama"];
										$resim = $row["resim"];
										$tarih = $row["tarih"];
										$yazar = $row["yazar"];
										$resim = $row["resim"];
										$hit = $row["hit"];
										$haber_id = $row["haber_id"];
										$kategori_adi = $row["kategori_adi"];
										$kategori_adi_seo = $row["kategori_adi_seo"];
										$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=130&w=170";
										$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
											$sorgu->execute();
											$say = $sorgu->fetchColumn();
										echo'<div class="col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="blog-item">
										<div class="blog-img">
										<img src="'.$resim.'" alt="'.$baslik.'">
										</div><!--blog-img end-->
										<div class="blog-info">
										<a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'" class="post-category">'.$kategori_adi.'</a>
										<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
										<ul class="meta">
										<li>'.strftime('%d %B %Y, %A', strtotime($row['tarih'])).'</li>
										<li><i class="la la-eye"></i>'.$hit.'</li>
										<li><i class="la la-comment-o"></i>'.$say.'</li>
										</ul>
										</div><!--blog-info end-->
										</div><!--blog-item end-->
										</div>';
									}
								}
								?>


								</div>
							</div>
							<!--blog-items end-->
						</div>
					</div>
					<!--tab-content end-->
				</div>
				<!--blog-section end-->

				<!--blog-section end-->
				<div class="blog-section">
					<div class="blog-items style2 sec-padding">
						<div class="row">
							

						</div>
					</div>
					<!--blog-items end-->
				</div>
				<!--blog-section end-->
				<div class="blog-section">
					
					<!--blog-items end-->
				</div>
				<!--blog-section end-->
				<div class="blog-section">
					<div class="blog-items style2 sec-padding2">
						<div class="row">
							
						</div>
					</div>
					<!--blog-items end-->
				</div>
				<!--blog-section end-->
				<!--<div class="heeney-pagination text-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-left"></i></a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
							</li>
						</ul>
					</nav>
				</div>-->
				<!--heeney-pagination end-->
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget widget-trending-posts">
						<h3 class="widget-title">Popüler Yazılar</h3>
						<div class="wd-posts">
							<?php	
					$query = $db->query("SELECT * FROM yazilar order By hit DESC LIMIT 6");
					if ( $query->rowCount() ){
						foreach( $query as $row ){
							$baslik = $row["baslik"];
							$baslik_seo = $row["baslik_seo"];
							$aciklama = $row["aciklama"];
							$resim = $row["resim"];
							$tarih = $row["tarih"];
							$yazar = $row["yazar"];
							$resim = $row["resim"];
							$hit = $row["hit"];
							$yazi_id = $row["yazi_id"];
							$kategori_adi = $row["kategori_adi"];
							$kategori_adi_seo = $row["kategori_adi_seo"];
							$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=67&w=83";
							$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
							$sorgu->execute();
							$say = $sorgu->fetchColumn();
						echo'<div class="wd-post">
							<img src="'.$resim.'" alt="'.$baslik.'">
							<div class="wd-post-info">
								<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
								<span class="post-date">'.strftime('%d %B %Y, %A', strtotime($row['tarih'])).'</span>
							</div>
						</div>';
					}
				}
				?>
							<!--wd-post end-->



						</div>
						<!--wd-posts end-->
					</div>
					<!--widget-trending-posts end-->
					

				
					<!--subscribe-wd end-->
					<div class="widget widget-recent-post">
						<h3 class="widget-title">En Çok Yorum Alanlar</h3>
						<div class="recent-post-carousel">

							<?php	
					$query = $db->query("SELECT * FROM yazilar order By yazi_id DESC LIMIT 0,4");
					if ( $query->rowCount() ){
						foreach( $query as $row ){
							$baslik = $row["baslik"];
							$baslik_seo = $row["baslik_seo"];
							$resim = $row["resim"];
							$resim = $row["resim"];
							$hit = $row["hit"];
							$kategori_adi = $row["kategori_adi"];
							$kategori_adi_seo = $row["kategori_adi_seo"];
							$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=130&w=170";
							echo'<div class="post-slide">
							<div class="wd-post">
							<img src="'.$resim.'" alt="'.$baslik.'">
							<div class="wd-post-info">
								<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
							</div>
						</div>
						</div>';
						}
					}
					?>
							<!--post-slide end-->
						</div>
						<!--carousel end-->
					</div>
					<!--widget-recent-post end-->
					
					<!--widget-adver end-->
					<div class="widget widget-catgs">
						<h3 class="widget-title">Kategoriler</h3>
						<ul class="catgs-links">
							<?php 		
                            $query = $db->query("SELECT * FROM kategoriler");
                            if ( $query->rowCount() ){
                            foreach( $query as $row ){
                            	$kategori_adi = $row["kategori_adi"];
                            	$kategori_adi_seo = $row["kategori_adi_seo"];
                            	$kategori_aciklama = $row["kategori_aciklama"];

                            	$sorgu = $db->prepare("SELECT COUNT(*) FROM yazilar where kategori_adi_seo = '$kategori_adi_seo' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
						echo'<li><a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'">'.$kategori_adi.'  - <span>'.$say.'</span></a></li>';
					}
				}
				?>
						</ul>
						<!--catgs-links end-->
					</div>

				</div>
				<!--sidebar end-->
			</div>
		</div>
	</div>
</section>
<!--main-content end-->