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
            		<h1>Student Portal</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="adding.php">cutoff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">student portal</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION FEATURE -->

<section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="assets/images/counter_bg.jpg">
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-5 col-6">
                <div class="single_categories cat_style2">
                    <a href="Result/logo.php" class="bg_blue2">
                        <i class="fa fa-laptop"></i>
                        Exam Result
                    </a>
                </div>
            </div> 
			<div class="col-lg-3 col-sm-5 col-6">
                <div class="single_categories cat_style2">
                    <a href="#" class="bg_orange">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Exam Time Table                        
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5 col-6">
            	<div class="single_categories cat_style2">
                    <a href="#" class="bg_blue2">
             <i class="fa fa-calendar-alt"></i> 
			 Event Calender                        
                    </a>
                </div>
            </div>
			 <div class="col-lg-3 col-sm-5 col-6">
            	<div class="single_categories cat_style2">
                    <a href="#" class="bg_orange">
                        <i class="fa fa-calendar-check"></i>
                        Upcomming Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section class="bg_gray">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	
            </div>
        </div>
 <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">CuttOff Generator</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" >
				
				  <div class="row">
                  <div class="col-lg-6 col-md-7">
                  <div class="form-group">
                    <label>Physics Mark</label>
                    <div class="input-group">
                    <input type="number" name="number1" class="form-control"  min="1" max="200" placeholder="Enter your physics Mark">
                  </div>
                  </div>				  
                  <div class="form-group">
                    <label>Chemistry Mark</label>
                    <div class="input-group">
                    <input type="number" name="number2" class="form-control" min="1" max="200" placeholder="Enter your Chemistry Mark">
                  </div>
                  </div>				  				  
                  <div class="form-group">
                    <label>Mathematics Mark</label>
                    <div class="input-group">
                    <input type="number" name="number3" class="form-control" min="1" max="200" placeholder="Enter your Mathamtics Mark">
                  </div>
                  </div> 			  
					<button type="submit" title="Submit Your Message!" class="btn btn-default rounded-0" onclick="myFunction()" name="submit" value="Submit">Get Cuttoff</button>
					</div></div></div>			
                </form>
				<div class="col-lg-6 col-md-5">
				<center><span class="badge badge-success"> 
				<h5>Your Cuttoff Mark is<span class="badge badge-light"><h3>
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];		
        $sum1 =  $number1/4; 
        $sum2 = $number2/4;
        $sum3 = $number3/2;	
        $total = $sum1 + $sum2 + $sum3;		
echo ":" .$total;   
}  
?> </h3></span>
</center>
</span></div>
              </div>
              <!-- /.card-body -->
</div></section> 

<!-- END SECTION FEATURE -->        

<?php
include('incl/footer.php');
?>

