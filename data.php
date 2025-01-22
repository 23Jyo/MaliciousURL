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


<?php
if(isset($_POST['submit']))
{
	$data=$_POST['data'];
}

?>

		<!--welcome-hero start -->
		<section id="home" class="" style="background-color:#f8fafb">
			<div class="container">
				<br><br>
				<div class="subscription-input-group">
					<form class="form-inline">
						<input type="text" value="<?php echo $data ?>" id="searchInput" class="subscription-input-form" placeholder="Type here" style="    border-radius: 41px; width:">
						<span style="cursor: pointer;
							top: 12%;
							position: absolute;
							right: -30px;
							font-size: 30px;" 
							onclick="document.getElementById('searchInput').value = ''"
							>x</span>
					  <button type="submit" class="appsLand-btn subscribe-btn" name="submit" style="margin-right: -240px; border-radius: 0 30px 30px 0;">Search</button>
					</form>
				</div>
				<br><br>
				
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->


<?php

$data=$_POST['data'];
	
	error_reporting(0);
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("datamining2") or die(mysql_error());


	if($_REQUEST['dd']==1)
	{
		mysql_query("TRUNCATE TABLE data2") or die(mysql_error());

		mysql_query("TRUNCATE TABLE relavent") 
		or die(mysql_error());

	}


	if($data!="")
	{
		$data=str_replace(" ","+","$data");
		//echo $data;
		$uu=$data;
		$url = "http://www.google.co.in/search?q=$data";
		$html= file_get_contents($url);

		$dom = new DOMDocument();
		@$dom->loadHTML($html);
		$xPath = new DOMXPath($dom);
		
		$elements = $xPath->query("//a/@href");
		foreach ($elements as $e) 
		{     
			$mystring=$e->nodeValue;
			//echo $mystring;          
			$test_link=$mystring;
					
			$com_link='http://www.google.co.in/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."kkkk<br><br>";
				
			$com_link='https://www.google.co.in/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."llll<br><br>";
				
			$com_link='http://maps.google.co.in/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."ssss<br><br>";
				
			$com_link='http://news.google.co.in/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."vvvv<br><br>";	
				
			$com_link='http://www.orkut.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."wwww<br><br>";
				
			$com_link='https://mail.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."wwww<br><br>";
				
			$com_link='https://drive.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."wwww<br><br>";
				
			$com_link='https://www.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."wwww<br><br>";
				
			$com_link='http://www.blogger.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."wwww<br><br>";
				
			$com_link='https://docs.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
			   
			$com_link='https://play.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";   
			   
			$com_link='https://play.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
			   	   
			$com_link='http://translate.google.co.in/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
			   
			$com_link='http://www.youtube.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
			   
			$com_link='https://photos.google.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
				
			$com_link='/intl/en/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
					
			$com_link='/preferences?hl=en';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
				
			$com_link='/webhp?hl=en-IN';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
				
			$com_link='/url?q=http://webcache.googleusercontent.com/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
				
			$com_link='/support/websearch/bin/';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			// echo $test_link."<br><br>";
				
			$com_link='/services';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
			   
			$com_link='search?';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
			   
			$com_link='tools/feedback/survey/html?productId=196&query=allievo&hl=en-IN';			
			$val=chech_finder($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker($val,$test_link);
			//echo $test_link."<br><br>";
			   
			$com_link='/url?q=';
			$val=chech_finder_new($test_link,$com_link);
			//echo $val."<br>";
			$test_link=maker_new($val,$test_link);
		
		}
	}
					
						   
	function chech_finder($test_link,$com_link)
	{
		$pos=strpos($test_link,$com_link);
		return $pos;
	}
								
								
	function maker($val,$test_link)
	{
		//echo $val;
		if(is_numeric($val))
			$test_link="";
		else
			$test_link=$test_link;
		return $test_link;
	}

	function chech_finder_new($test_link,$com_link)
	{
		$pos=strpos($test_link,$com_link);
		return $pos;
	}
	
	



?>



		
		
		<!--blog start -->
		<section id="blog" class="blog" style="margin-top: -110px;">
			<div class="container">
				<div class="blog-content">
					<div class="row">
						<?php
						$url = "https://www.google.co.in/search?hl=en&site=imghp&tbm=isch&source=hp&biw=1366&bih=667&q='$data'&oq='$data'";
						$html= file_get_contents($url);
						//echo $html;
					
						$dom = new DOMDocument();
						@$dom->loadHTML($html);

						 // run xpath for the dom

						$xPath = new DOMXPath($dom);
						// get links from starting page
						 
						$elements = $xPath->query("//img/@src");
						foreach ($elements as $e) 
						{     
							$mystring=$e->nodeValue;
						
						?>
						<div class="col-md-3 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="<?php echo $mystring ?>" style="width:262px; height:177px;" alt="blog image">
								</div>
							</div>
						</div>
						<?php
						}
						?>
						
					</div>
					
					
					
					<div class="row">
						
<?php
function maker_new($val, $test_link)
{
	global $uu, $linkss;
	if (is_numeric($val)) {
		$test_link = strtok($test_link, "&");
	}
	
	$new_link = ltrim($test_link, '/url?q=');
	
	$path = "images/google.jpg";

	if (!empty($new_link)) {
		$test_link2 = substr($test_link, 0, 150) . '...';
		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("datamining2") or die(mysql_error());
		
		if (strlen($test_link2) < 100) {
			$tags = get_meta_tags($new_link);
			$des = isset($tags['description']) ? addslashes($tags['description']) : "No description available";
			
			$d = explode("/", ltrim($test_link, '/url?q='))[2];
			$df = ltrim($test_link, '/url?q=');
			
			$rating = calculate_metadata_rating($tags); // Call function to calculate rating based on metadata

			// Insert the link with description and rating into the database
			mysql_query("INSERT INTO relavent (link, des, url, rating) VALUES ('$df', '$des', '$d', '$rating')");
			
			// Color coding based on rating
			$link_color = ($rating < 3) ? 'red' : 'green';

			if (stristr($test_link2, "http")) {
?>
				<div class="col-md-12 col-sm-6">
					<div class="single-explore-item">
						<div class="single-explore-txt bg-theme-1" >
							<div class="">
								<div class="row">
									<div class="col-sm-12">
										<h1>
											<?php
											$cc = $new_link;
											echo "<a href='data1.php?link=" . $cc . "' target='_blank' style='color:" . $link_color . ";'>" . str_replace("/url?q=", "", $test_link2) . "</a>";
											?>
										</h1>
										<p>
											<?php echo $des ?>
										</p>
										<p>Rating: <?php echo $rating; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php
			}
		}
	}
}

// Function to calculate quality rating based on metadata
function calculate_metadata_rating($tags)
{
	$rating = 0;

	// Check if 'description' tag exists and has content
	if (isset($tags['description']) && !empty($tags['description'])) {
		$rating += 2;
		if (strlen($tags['description']) > 50) $rating += 1; // Additional points for longer descriptions
	}

	// Check if 'keywords' tag exists and is meaningful
	if (isset($tags['keywords']) && !empty($tags['keywords'])) {
		$rating += 2;
		// Further increase rating if keywords contain relevant words (example: 'quality', 'trusted', etc.)
		//$relevant_keywords = ['quality', 'trusted', 'secure'];
		
		$relevant_keywords = [
			'official', 'verified', 'trusted', 'guide', 'latest', 'high-quality', 
			'recommended', 'analysis', 'study', 'review', 'current', '2024','secure','certified','tutorial','expert','support'
		];
		
		foreach ($relevant_keywords as $keyword) {
			if (stripos($tags['keywords'], $keyword) !== false) {
				$rating += 1;
				break;
			}
		}
	}

	// Example of another tag check (can add more based on your criteria)
	if (isset($tags['author']) && !empty($tags['author'])) {
		$rating += 1; // Add points if author information is present
	}

	// Normalize rating to a scale of 1-5
	return min(max($rating, 1), 5); // Ensure rating is within bounds of 1-5
}
?>
						
</div>
					
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->







		<!--subscription strat -->
<?php
include('footer.php');
?>