<?php
ob_start();
include('incl/header.php');
include('incl/menu.php');
if(isset($_POST['submit']))
{
	$student_name = $_POST['student_name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$parent_name = $_POST['parent_name'];
	$phone_no = $_POST['phone_no'];
	$standard = $_POST['standard'];
	$message = $_POST['message'];
	$insert = $class->Admission_Details($student_name,$dob,$gender,$parent_name,$phone_no,$standard,$message);
	if($insert == false){
		$error_msg = "form not submitted";	
		}else{        			
		$success_msg = "Form submitted successfully";
		header("referesh:2; modelschool.php");
		}
}
?>



<!-- START SECTION INQUIRY -->
<section class="pb-0 background_bg bg_blue_dark" data-img-src="assets/images/g.png">
	<div class="container">
    	<div class="row align-items-end">
        	<div class="col-lg-6 col-md-7">
            	<div class="register_form text_white padding_eight_all animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                    <div class="heading_s1 heading_light">
                        <h2>Register<span class="text_default">Admission</span></h2>
                    </div>
                   
                    <form action="" method="post" class="pt-md-2 form_transparent" >
					  <?php
		              if(isset($success_msg)){
		              ?>
                      <div class="alert primary-info"><strong>Response: <?php echo $success_msg;?></strong></div>
		              <?php
                       }
                       ?>
		              <?php
		               if(isset($error_msg)){
		               ?>
		              <div class="alert alert-danger"><strong>Response: <?php echo $error_msg;?></strong></div>
		              <?php
		               }
		                ?>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Student Name " class="form-control" name="student_name" type="text">
                             </div>
                            <div class="form-group col-sm-6">
                                <input  placeholder="Date Of Birth" class="form-control" name="dob" type="date" required>
                            </div>
							<div class="form-group col-sm-6">
                                <div class="custom_select">
                                	<select name="gender" class="form-control">
                                    	<option>Select Gender</option>
                                        <option>male</option>
                                        <option>female</option>
                                     </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Parent/Guardian Name *" class="form-control" name="parent_name" type="text">
                            </div>
                            <div class="form-group col-sm-6">
                                <input  required="required" placeholder="Mobile Number*" pattern="^\d{10}$" class="form-control" name="phone_no" type="tel"  >
                            </div>
							
                            <div class="form-group col-sm-6">
                                <div class="custom_select">
                                	<select name="standard" class="form-control">
                                    	<option>Select Standard</option>
                                        <option>LKG</option>
                                        <option>UKG</option>
                                        <option>1st Standrad</option>
                                        <option>2nd Standard</option>
										<option>3rd Standard</option>
										<option>4th Standard</option>
                                        <option>5th Standard</option>
										<option>6th Standrad</option>
                                        <option>7th Standard</option>
										<option>8th Standard</option>
										<option>9th Standard</option>
                                        <option>10th Standard</option>
										<option>11th Standard</option>
                                        <option>12th Standard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea required="required" placeholder="Address" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default rounded-0" name="submit" value="Submit">Admission</button>
                            </div>
                            <div class="col-sm-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="large_divider"></div>
            </div>
            <div class="col-lg-6 col-md-5">
            	<div class="text-center animation" data-animation="fadeInRight" data-animation-delay="0.03s">
            		<img src="assets/images/girl_img.png" alt="girl_img" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INQUIRY -->

<!-- START SECTION BANNER -->
<section class="banner_section p-0">
    <div id="carouselExampleFade" class="banner_content_wrap banner_py_large carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg position_right_center" data-img-src="assets/images/ban7.jpg">
                    <div class="row justify-content-end">
                        <div class="col-lg-6 col-md-7">                
						<div class="container"><!-- STRART CONTAINER -->

                            <div class="banner_content animation" data-animation="fadeInDown" data-animation-delay="0.2s">
                                <h2 class="animation text-uppercase font_style1" data-animation="fadeInDown" data-animation-delay="0.4s">Eduction from a new angle</h2>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"> </p>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
                           </div>
	    </div>
    </div>
</section>
<!-- START SECTION ABOUT -->
<section class="overflow_hide">
	<div class="container">
    	<div class="row align-items-center">
            <div class="col-md-5">
            	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.01s">
            		<img src="assets/images/jpg" alt="aboutus"/>
                </div>
            </div>
            <div class="col-md-7">
            	<div class="padding_eight_all animation fancy_box" data-animation="fadeInRight" data-animation-delay="0.02s">
                    <div class="heading_s1"> 
                      <h2>Academics</h2>
                    </div>
                    <p>Learning is a child centered and growth oriented. We provide education with state -of - the -art facilities for the holistic development of your child through innovative and experienced teaching methods.

we endeavor to make the learning process enjoyable and enlightening. We have classes for kindergarten to subsequently A - level.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->


<!-- START SECTION FEATURE -->
<section class="staggered-animation-wrap">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <div class="heading_s1 text-center">
                        <h2 class="font_style1">Our Model school campus</h2>
                    </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="icon_box text-center bg_danger text_white icon_box_style3 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon bg-white mb-3">
                		<i class="fa fa-book text_danger"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Learning Zone</h5>
                        <p>
The classrooms are airy spacious and well-constructed It is vibrant with latest technology internet facilitated smart boards, projectors and bulletin display brings in the world and beyond within our reach and make class learning a delightful experience.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
            	<div class="icon_box text-center bg_orange text_white icon_box_style3 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon bg-white mb-3">
                		<i class="fa fa-globe text_orange"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Digital Classrooms</h5>
                        <p>
Smart board is an interactive white board and it’s a tool of teachers. It is updated with information of various subjects according to the student’s standards. Its and innovative teaching technique to make our concepts easy to reach our children.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            	<div class="icon_box text-center bg_light_green text_white icon_box_style3 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon bg-white mb-3">
                        <i class="fa fa-leaf"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Park</h5>
                        <p>
The most enchanting Schools always have large open playgrounds with interesting play equipment that leaves many options for creativity. Our school is one among them.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            	<div class="icon_box text-center bg_light_navy text_white icon_box_style3 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon bg-white mb-3">
                        <i class="fa fa-headphones-alt text_light_navy"></i>
                    </div>
                    <div class="intro_desc">
                        <h5>Hi-Tech Lab</h5>
                    <p>
Our school is equipped with smart classrooms and hi-tech modern labs to provide better learning experience to its students</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="ol_shape20">
        <div class="staggered-animation" data-animation="bounceInDown" data-animation-delay="0.1s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape20.png" alt="shape20"/>
        </div>
    </div>
    <div class="ol_shape21">
        <div class="staggered-animation" data-animation="bounceInUp" data-animation-delay="0.2s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape21.png" alt="shape21"/>
        </div>
    </div>
    <div class="ol_shape22">
        <div class="staggered-animation" data-animation="bounceInRight" data-animation-delay="0.3s">
            <img data-parallax='{"y": 30, "smoothness": 20}' src="assets/images/shape22.png" alt="shape22"/>
        </div>
    </div>
    <div class="ol_shape23">
        <div class="staggered-animation" data-animation="bounceInUp" data-animation-delay="0.4s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape23.png" alt="shape23"/>
        </div>
    </div>
    <div class="ol_shape24">
        <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.5s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape24.png" alt="shape24"/>
        </div>
    </div>
    <div class="ol_shape25">
        <div class="staggered-animation" data-animation="bounceInDown" data-animation-delay="0.6s">
            <img data-parallax='{"y": 30, "smoothness": 20}' src="assets/images/shape25.png" alt="shape25"/>
        </div>
    </div>
    <div class="ol_shape26">
        <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.7s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape26.png" alt="shape26"/>
        </div>
    </div>
    <div class="ol_shape27">
        <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.7s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape27.png" alt="shape27"/>
        </div>
    </div>
    <div class="ol_shape28">
        <div class="staggered-animation" data-animation="bounceInLeft" data-animation-delay="0.7s">
            <img data-parallax='{"y": -30, "smoothness": 20}' src="assets/images/shape28.png" alt="shape28"/>
        </div>
    </div>
</section> 
<!-- END SECTION FEATURE -->

<!-- START SECTION VIDEO -->
<section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="assets/images/ber5.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                    <div class="mt-md-5 mt-4 text_white animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    	<h2>Video Tour For Our Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION VIDEO -->





<?php
include('incl/footer.php');
?>

