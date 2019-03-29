@extends('front.layouts')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" style="background: url(srcFront/img/banner/banner.jpg) no-repeat scroll center center;"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Services</h2>
						<div class="page_link">
							<a href="#">Home</a>
							<a href="#">Services</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Service Area =================-->
        <section class="service_area p_120">
        	<div class="container">
        		<div class="row service_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-camera"></i>
        					<a href="#"><h4>Photography</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-picture"></i>
        					<a href="#"><h4>Image Maipulation</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-camera-video"></i>
        					<a href="#"><h4>Videography</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-film-play"></i>
        					<a href="#"><h4>Cinematography</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-eye"></i>
        					<a href="#"><h4>Pro Photoshoot</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="service_item">
        					<i class="lnr lnr-bullhorn"></i>
        					<a href="#"><h4>Digital Media</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Service Area =================-->
@endsection

@section('addScript')
<script>
    $(function(){
       $("#F-service").addClass("active"); 
    });
</script>
@endsection