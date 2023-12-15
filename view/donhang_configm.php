<?php
        
        $html_donhang='';
        foreach ($_SESSION["giohang"] as $sp) {
			$madh = "SS"."-".date("His-dmY");
            $tongdonhang = get_tongdonhang();
            $giatrivoucher=10;
            $thanhtoan = $tongdonhang - $giatrivoucher;
            extract($sp); 
            $html_donhang.='<li><a href="#">'.$name.'<span class="middle">x '.$soluong.'</span></a></li>';
        }
        // $html_tongdh='';
        // foreach ($_SESSION["giohang"] as $sp) {
        //     extract($sp);
        //     $html_tongdh='<li><a href="#">Tổng đơn hàng <span>'.$total.'</span></a></li>';
        // }
        $html_cart = viewcart();
?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đặt hàng thành công</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Cảm ơn bạn đã đặt hàng tại Super Sneakers</h3>
			<div class="row order_d_inner">
				<div class="col-lg-10">
					<div class="details_item">
						<h4>Thông tin người đặt</h4>
						<ul class="list">
							<li><a href="#"><span>Mã đơn hàng : </span><?=$madh?></a></li>
							<li><a href="#"><span>Thành tiền : </span><?=number_format($thanhtoan,0,",",".")?> VNĐ</a></li>
							<li><a href="#"><span>P/t thanh toán : </span>Thanh toán khi nhận hàng</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!--================End Order Details Area =================-->