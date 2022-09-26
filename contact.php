<?php
ob_start();
include('incl/header.php');
include('incl/menu.php');
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$insert = $class->Contact_Info($name,$email,$phone_no,$subject,$message);
	if($insert == false){
		$error_msg = "form not submitted";	
		}else{        			
		$success_msg = "Form submitted successfully";
		header("referesh:2; contact.php");
		}
}
?>
<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_img.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Contact</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION CONTACT -->
<section class="small_pb">
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Get In Touch</h2>
                    </div>
                   
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="box_shadow1 radius_all_10">
                	<div class="row no-gutters">
                    	<div class="col-md-6 animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        	<div class="padding_eight_all">
                                <div class="field_form">
								<form action="" method="post" name="enq">
                                    <?php
		                             if(isset($success_msg)){
		                             ?>
                                    <div class="alert alert-success"><strong>Response: <?php echo $success_msg;?></strong></div>
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
                                            <div class="form-group col-12">
                                                <input required="required" placeholder="Enter Name" class="form-control" name="name" type="text">
                                             </div>
                                            <div class="form-group col-12">
                                                <input required="required" placeholder="Enter Email" id="txtEmail" onkeyup="ValidateEmail();" class="form-control" name="email" type="email">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="tel" required="required" placeholder="Enter Phone No."  pattern="^\d{10}$" class="form-control" name="phone_no" type="tel">
                                            </div>
                                            <div class="form-group col-12">
											 <textarea required="required" placeholder="subject" class="form-control" name="subject" rows="1"></textarea>
										    </div>
                                            <div class="form-group col-lg-12">
                                                <textarea required="required" placeholder="Message" class="form-control" name="message" rows="3"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Submit</button>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <div id="alert-msg" class="alert-msg text-center"></div>
                                            </div>
                                        </div>
                                    </form>		
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION CONTACT -->
<section class="small_pt">
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Contact Information</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="overlay_bg_danger_90 icon_box text-center text_white radius_all_10 background_bg animation" data-img-src="assets/images/address_img.jpg" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon mb-3">
                		<img src="assets/images/map_icon.png" alt="map_icon">
                    </div>
                    <div class="intro_desc">
                        <h5>Address</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="overlay_bg_light_green_90 icon_box text-center text_white radius_all_10 background_bg animation" data-img-src="assets/images/call_img.jpg" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon mb-3">
                		<img src="assets/images/phone_icon.png" alt="phone_icon">
                    </div>
                    <div class="intro_desc">
                        <h5>Call Us</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation" data-img-src="assets/images/email_img.jpg" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon mb-3">
                        <img src="assets/images/email_icon.png" alt="email_icon">
                    </div>
                    <div class="intro_desc">
                        <h5>Email</h5>
                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f0999e969fb0839984959e919d95de939f9d">[email&#160;protected]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- END SECTION CALL TO ACTION -->

<?php
include('incl/footer.php');
?>

