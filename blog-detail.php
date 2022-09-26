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
<section>
	<div class="container">
    	<div class="row">
	<div class="col-lg-9">
            	<div class="single_post">
				<?php
   $query = $class->Read_News();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>
                    <div class="blog_img">
                        <a href="#">
						  <ul class="list_none blog_meta">
							<h3><p><?php echo $row->title;?></p></h3>
                                <li><a href="#"><i class="ion-calendar"></i><?php echo $row->date;?></a></li>                                
                            </ul>
                            <img src="Admin/news/<?php echo $row->image;?>" alt="blog_img1">
                        </a>
                    </div>					
                    <div class="single_post_content">
                        <div class="blog_text">                         
                             <p><?php echo $row->detail;?>            	
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
			
		
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
            	<div class="sidebar">
                    <div class="widget widget_search">
                        <form class="search_form"> 
                            <input required="" class="form-control" placeholder="Search..." type="text">
                            <button type="submit" title="Subscribe" name="submit" value="Submit">
                                <span class="ti-search"></span>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                    	<h5 class="widget_title">Categories</h5>
                        <ul>
                            <li><a href="#"><span class="categories_name">Event</span></a></li>
                            <li><a href="#"><span class="categories_name">Library</span></a></li>                            
                    	</ul>
                    </div>
                    <div class="widget widget_recent_post">
                    	<h5 class="widget_title">Recent Post</h5>
                        <marquee direction="down"><ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                        </ul></marquee>
                    </div>                    
                </div>
            </div>				
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->


<?php include'Incl/footer.php' ?>