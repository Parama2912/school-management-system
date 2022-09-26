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
            		<h1>School Gallery</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our School Gallery</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION GALLERY -->
<section>
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Gallery</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
    	<div class="row">
            <div class="col-md-12 text-center">
                <ul class="list_none grid_filter animation" data-animation="fadeInUp" data-animation-delay="0.02s">                    
                    <li><a href="#" data-filter=".Infrastructure">Infrastructure</a></li>
                    <li><a href="#" data-filter=".campus">Campus</a></li>
                    <li><a href="#" data-filter=".events">Events</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="grid_container gutter_medium grid_col3 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
					<?php
   $query = $class->Read_Gallery();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>		
                    <li class="grid_item Infrastructure">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="Admin/gallery/<?php echo $row->image;?>" style="width:500px;height:300px;" alt="image">
                            </a>                           
                        </div>
                    </li>
					<?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';
	
		 }
		 ?>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
					  <!-- START PORTFOLIO ITEM -->
					<?php
   $query = $class->Read_Gallery12();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>		
                    <li class="grid_item campus">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="Admin/gallery/<?php echo $row->image;?>" style="width:500px;height:300px;" alt="image">
                            </a>
                            
                        </div>
                    </li>
					<?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';
	
		 }
		 ?>
                    <!-- END PORTFOLIO ITEM -->
                    
                    <!-- START PORTFOLIO ITEM -->
                    
					<?php
   $query = $class->Read_Gallery13();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>		
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">                              
                                <a href="#" class="image_link">
                                    <img src="Admin/gallery/<?php echo $row->image;?>" style="width:500px;height:300px;" alt="image">
                                </a>
                               <div class="gallery_content">								
                               <div class="text_holder text_white">                               		
                                </div>	</div>							
                        </div>
                    </li>
					<?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';
	
		 }
		 ?>
                    
                    <!-- END PORTFOLIO ITEM -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION GALLERY -->

<?php
include('incl/footer.php');
?>

