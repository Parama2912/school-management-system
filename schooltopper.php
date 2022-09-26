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
            		<h1>School Toppers</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">School Toppers</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION TEACHER -->
<!-- 12th Academic Achievers -->
<section>
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2> 12th Yearly Academic Acheivers</h2>
                    </div>
                    
                </div>
            </div>
        </div> 
		<div class="row">
		<?php
   $query = $class->Read_Academic12();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>
		 <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style3 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="team_img">
                    <?php
	if(!empty($row->image)){
	?>
       <img src="Admin/academic/<?php echo $row->image;?>" alt="team1">           
		   <?php
	}else{
		   ?>
		    <img src="Admin/image/image6.png" alt="team1">           
		   <?php
	}
    ?> 
	</div>
                    <div class="team_title radius_lbrb_10 text-center"> 
                      Name:<h5><b><?php echo $row->name;?></b></h5>
                        std:<h5><b><?php echo $row->standard;?></b></h5>
						Year:<h5><b><?php echo $row->year;?></b></h5>
						Mark:<h5><b><?php echo $row->mark;?></b></h5>
						
				    </div>											
                </div>
            </div>		
		
		<?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';	
		 }
		 ?>
		 </div>
        </div>

</section>
<!-- 10th Academic Acheivers -->
<section>
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>10th Yearly Academic Acheivers</h2>
                    </div>                    
                </div>
            </div>
        </div> 
		<div class="row">
		<?php
   $query = $class->Read_Academic();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>
		 <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style3 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="team_img">
                    <?php
	if(!empty($row->image)){
	?>
       <img src="Admin/academic/<?php echo $row->image;?>" alt="team1">           
		   <?php
	}else{
		   ?>
		    <img src="Admin/image/image6.png" alt="team1">           
		   <?php
	}
    ?> 
	</div>
                    <div class="team_title radius_lbrb_10 text-center"> 
                      Name:<h5><b><?php echo $row->name;?></b></h5>
                        std:<h5><b><?php echo $row->standard;?></b></h5>
						Year:<h5><b><?php echo $row->year;?></b></h5>
						Mark:<h5><b><?php echo $row->mark;?></b></h5>
						
				    </div>											
                </div>
            </div>		
		
		<?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';	
		 }
		 ?>
		 </div>
        </div>

</section>

<?php
include('incl/footer.php');
?>

