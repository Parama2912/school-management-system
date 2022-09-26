<?php
include('incl/header.php');
include('incl/menu.php');
?>
<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_img.jpg">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div class="page-title">
               <h1>Alumini & Volunteer</h1>
            </div>
         </div>
         <div class="col-sm-6">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb justify-content-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Alumini & Volunteer</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION FEATURE -->
<section class="staggered-animation-wrap">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-8">
            <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
               <div class="heading_s1 text-center">
                  <h2 class="font_style1">Fund Donators </h2>
               </div>
               <p></p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-8 col-lg-8">
            <div class="single_course">
               <div class="course_tabs">                  
                  <div class="tab-content">                   
                        <div class="border radius_all_5 tab_box">
                           <div class="table-responsive">
                              <table class="table align-middle">
                                 <thead>
                                    <th>S.NO</th>
                                    <th>Name</th>
									 <th>Place</th>
                                    <th>Offering</th>                        
                                 </thead>
                                 <tbody>
                                    
									<?php
   $query = $class->Read_Volunteer();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>
 <tr>            
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->location;?></td>
			<td><?php echo $row->offering;?></td>
					
		 </tr>
		 	 <?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';
	
		 }
		 ?>
									
                                 </tbody>

                              </table>
                           </div>
                        </div>
                      </div>
                  </div>
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
<?php include'incl/footer.php' ?>
