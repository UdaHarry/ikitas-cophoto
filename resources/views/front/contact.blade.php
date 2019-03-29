@extends('front.layouts')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" style="background: url(srcFront/img/banner/banner.jpg) no-repeat scroll center center;"></div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>Contact Us</h2>
				<div class="page_link">
					<a href="index.html">Home</a>
					<a href="contact.html">Contact</a>
				</div>
			</div>
		</div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================Contact Area =================-->
<section class="contact_area p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>California, United States</h6>
                        <p>Santa monica bullevard</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">00 (440) 9865 562</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">support@colorlib.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div id="mapBox" class="mapBox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.960448395591!2d110.38979251472107!3d-7.013934494933537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b08ecae27d3%3A0xbca7db646419b713!2sIKITAS+3+Menoreh!5e0!3m2!1sid!2sid!4v1553440412978" width="100%" height="450" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->
@endsection

@section('addScript')
<script>
    $(function(){
       $("#F-contact").addClass("active"); 
    });
</script>
@endsection