@extends('front.layouts')

@section('content')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" style="background: url(srcFront/img/banner/banner-2.jpg) no-repeat scroll center center;"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Bitmap Photography</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
						<a href="#" class="btn theme_btn">Explore Gallery</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================ Our Team =================-->
        <section class="service_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Our Last Project</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row service_inner">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="srcFront/img/blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Social Life</h5></a>
                                    <div class="border_line"></div>
                                    <p>Enjoy your social life together</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="srcFront/img/blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Politics</h5></a>
                                    <div class="border_line"></div>
                                    <p>Be a part of politics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="srcFront/img/blog/cat-post/cat-post-1.jpg" alt="post">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <a href="blog-details.html"><h5>Food</h5></a>
                                        <div class="border_line"></div>
                                        <p>Let the food be finished</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Our Team=================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="row testimonials_inner">
        			<div class="col-lg-6">
        				<div class="c_feedback_text">
        					<h4>Client’s Feedback</h4>
        					<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="t_slider owl-carousel">
        					<div class="item">
        						<div class="media">
        							<div class="d-flex">
        								<img src="srcFront/img/testimonials/test-1.png" alt="">
        							</div>
        							<div class="media-body">
        								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
        								<h4>Mark Alviro Wiens</h4>
        								<h6>CEO at Google</h6>
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<div class="media">
        							<div class="d-flex">
        								<img src="srcFront/img/testimonials/test-1.png" alt="">
        							</div>
        							<div class="media-body">
        								<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
        								<h4>Mark Alviro Wiens</h4>
        								<h6>CEO at Google</h6>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
@endsection

@section('addScript')
<script>
    $(function(){
       $("#F-home").addClass("active"); 
    });
</script>
@endsection