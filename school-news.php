<?php include'Incl/header.php' ?>
<?php include'Incl/menu.php' ?>
<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_img.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>News & Blogs</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News & Blog</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION BLOG -->
<section class="small_pt">
	<div class="container">
        <div class="row justify-content-center">
<?php
   $query = $class->Read_News();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>		
        	<div class="col-lg-4 col-md-6">			
            	<div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<div class="blog_img radius_ltrt_10">
                        <a href="#">
                            <img src="Admin/news/<?php echo $row->image;?>"  style="width:500px;height:300px;" alt="blog_small_img1">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="blog-detail.php"><?php echo $row->title;?></a></h6>
                        <p><?php echo $row->short;?></p>                        
						<a href="blog-detail.php?nid" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white radius_lbrb_10">
                        <ul class="list_none blog_meta">
                           <li><a href="#"><i class="fa fa-calendar"></i><?php echo $row->date;?></li>
                        </ul>
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
<!-- END SECTION BLOG -->

<?php include'Incl/footer.php' ?>