<?php
	extract($spchitiet);
	$html_sp_lienquan=showsp($splienquan);
?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href=""><?=$name?></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/<?=$img?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/cat1_sp2.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?=$name?></h3>
						<h2><?=number_format($price,0,",",".")?> VNĐ</h2>
						
						<p>Lấy cảm hứng từ những trận đấu sau vườn của Mike với anh trai Larry, Chủ đề anh chị em được đề cập xuyên suốt dòng sản phẩm này của Jordan . Đế cao su không chỉ mang lại lực kéo ấn tượng còn kể câu chuyện về cách mà MJ trở thành người dẫn đầu. "Swing for the Fence"— vượt qua giới hạn để hướng đến tương lai là câu nói mà Larry đã nói với em trai của mình.</p>
						<div class="product_count">
							<label for="qty">Size giày:</label>
                				<div class="sorting">
                    			<select>
									<option value="1">35</option>
									<option value="1">36</option>
									<option value="1">37</option>
									<option value="1">38</option>
									<option value="1">39</option>
									<option value="1">40</option>
									<option value="1">41</option>
									<option value="1">42</option>
									<option value="1">43</option>
								</select>
								</div>
						</div>
						<div class="card_area d-flex align-items-center">
							<form action="index.php?pg=addcart" method="post">
								<input type="hidden" name="name" value="<?=$name?>">
								<input type="hidden" name="img" value="<?=$img?>">
								<input type="hidden" name="price" value="<?=$price?>">
								<div class="product_count">
									<label for="qty">Số lượng:</label>
									<input type="number" name="soluong" id="sst" min="1" value="1" max="12" title="Quantity:" class="input-text qty">
								</div>
									<a href="" class="social-info">
										<button type="submit" name="addcart" class="primary-btn">Mua Ngay</button>
									</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Giới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Thông số</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Bình luận</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>
					Sự rạng rỡ sống mãi trong <?=$name?> bản gốc bóng rổ mang đến một vòng quay mới mẻ cho những gì bạn biết rõ nhất: lớp phủ được khâu bền, hoàn thiện sạch sẽ và lượng đèn flash hoàn hảo để khiến bạn tỏa sáng.
					Giới hạn ở (1) cặp cho mỗi người tiêu dùng

					Có ® thể xuất hiện một hoặc hai lần trên lưỡi và / hoặc sockliner do sự thay đổi được thực hiện bởi Nike. Sản phẩm bạn mua có thể xuất hiện khác về mặt này so với sản phẩm được mô tả trên Nike.com hoặc NikeApp.
					</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Chiều rộng</h5>
									</td>
									<td>
										<h5>12cm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Chiều dài</h5>
									</td>
									<td>
										<h5>45cm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Trọng lượng</h5>
									</td>
									<td>
										<h5>50g</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Chất lượng</h5>
									</td>
									<td>
										<h5>Tốt</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						
						<div class="col-lg-6">
							<div class="review_box">
								<div id="binhluan">
									<iframe src="view/binhluan.php?id_product=<?=$id?>" width="100%" height="300px" frameborder="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Sản phẩm liên quan</option>
                    </select>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
					<?=$html_sp_lienquan;?>
                    <!-- <div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p1.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p2.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p3.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div> -->
                </div>
            </section>
            <!-- End Best Seller -->
        </div>
		</div>
	</section>

	<!--================End Product Description Area =================-->
