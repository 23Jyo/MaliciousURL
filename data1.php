<?php
include('header.php');
?>

<style>
.subscription-input-group {
    position: relative;
    text-align: center;
    max-width: 630px;
    margin: 0 !important ; 
}
.subscription-input-group .subscription-input-form {
    display: inline-block;
    width: 730px !important;
}


.single-explore-item {
    background: #fff;
    border: none !important; 
    border-radius: 3px !important;
}

</style>




		<!--welcome-hero start -->
		<section id="home" class="" style="background-color:#f8fafb">
			<div class="container">
				<br><br>
				
				
				<?php
				   // Get the link from the query string
					if (isset($_GET['link'])) {
						$link = $_GET['link'];

						// Save the link 
						$myfile = fopen("input_url.txt","w") or die("Unable to open file!");
						fwrite($myfile,$link); // Write information to the file
						fclose($myfile); // close the file
						
					   
					   set_time_limit(0);

					   echo "<br>";
					   //$python = `python test.py`;
					   //echo "<pre>".$python."</pre>";
					
					   $python1 = "C:\\ProgramData\\Anaconda3\\python.exe";
					   $file = "C:\\xampp\\htdocs\\search_engine\\test_phishing.py";
					   $python=exec($python1 . " " . $file);
					
					   echo "<div class='col-lg-12 col-md-12 well' style='background-color:' >
							 <pre><h3>input url: </h3>".$link."</pre><br>";
							 
						if ($python == 1) {
							echo '<h3>Website is safe to use..</h3><br> <a href="' . htmlspecialchars($link) . '" target="_blank" class="btn btn-success">Continue</a>';
						} else {
							echo '<h3 style="color:red">Website is unsafe to use..</h3> <a href="' . htmlspecialchars($link) . '" target="_blank" class="btn btn-danger">Still want to continue</a>';
						} 
						echo "<br><br></div>";
				   }
					   
				   
				?>
				
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->









		<!--subscription strat -->
<?php
include('footer.php');
?>