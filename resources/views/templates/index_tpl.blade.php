    @extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div id="slide">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<a href="#"><img src="images/slider1.png" alt=""></a>
			</div>
			<div class="item">
				<a href="#"><img src="images/slider2.jpg" alt=""></a>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>
<div class="box-content">
	<div class="container-fluid">
		<div class="head-title">
			<h1>sản phẩm chính</h1>
			<span></span>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp3.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp2.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp4.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp3.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp2.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>

<div class="box-content">
	<div class="container-fluid">
		<div class="head-title">
			<h1>Sản phẩm bán chạy</h1>
			<span></span>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp3.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp2.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp1.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp4.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp3.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="box-product">
					<div class="p-block">
						<a href="#">
							<img src="images/sp2.png" alt="">
							
						</a>
					</div>
					<div class="p-infor">
						<p class="name-product"><a href="#">Sản phẩm 1</a></p>
						<p class="p-price">Giá:200,000</p>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>

<div class="box-content bg-1">
	<div class="container-fluid">
		<div class="head-title">
			<h1>Kiến thức</h1>
			<span></span>
		</div>

		<div class="owl-carousel pro-slide">
			<div class="item">
				<a href="#">
					<img src="images/sp1.png" alt="">
					<p>Kinh nghiệm chăm sóc cây cảnh</p>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="images/sp2.png" alt="">
					<p>Kinh nghiệm chăm sóc cây cảnh</p>
				</a>
			</div>
			<div class="item">
				<a href="#">
					<img src="images/sp3.png" alt="">
					<p>Kinh nghiệm chăm sóc cây cảnh</p>
				</a>
			</div>
			
		</div>
	</div>
</div>

<div class="box-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 customer-said">
				<div class="head-title heaf-left">
					<h1>khách hàng nói gì</h1>
					<span></span>
				</div>
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="cus-caption">
								<p>"Tôi thật sự hài lòng về sản phẩm của công ty,chất lượng tốt, giá thành ổn định. Thái độ phục vụ của nhân viên tận tình, chu đáo. Tôi sẽ ủng hộ trong các dự án trong tương lai."</p>
							</div>

							<div class="cus-avt">
								<p>Tạ bích ngọc</p>
								<i>Manager CDIT</i>
								<img src="images/avt.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="cus-caption">
								<p>"Tôi thật sự hài lòng về sản phẩm của công ty,chất lượng tốt, giá thành ổn định. Thái độ phục vụ của nhân viên tận tình, chu đáo. Tôi sẽ ủng hộ trong các dự án trong tương lai."</p>
							</div>

							<div class="cus-avt">
								<p>Trungtt</p>
								<i>Manager CDIT</i>
								<img src="images/avt.png" alt="">
							</div>
						</div>
						<div class="item ">
							<div class="cus-caption">
								<p>"Tôi thật sự hài lòng về sản phẩm của công ty,chất lượng tốt, giá thành ổn định. Thái độ phục vụ của nhân viên tận tình, chu đáo. Tôi sẽ ủng hộ trong các dự án trong tương lai."</p>
							</div>

							<div class="cus-avt">
								<p>Thỏ bày màu</p>
								<i>Manager CDIT</i>
								<img src="images/avt.png" alt="">
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 partner">
				<div class="head-title heaf-left">
					<h1>đối tác của chúng tôi</h1>
					<span></span>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p1.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p2.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p3.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p4.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p5.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
						<a href="#"><img src="images/p1.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
