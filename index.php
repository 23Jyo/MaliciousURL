<?php
include('header.php');
?>
		<!-- top-area End -->
<style>
.se{
	    font-size: 72px;
    font-weight: 600;
	text-transform: none;
	letter-spacing: 1px;
}	
</style>		
		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h1 class="se">
						<span style="color: #ff545a;">S</span>
						<span style="color: #ff545a;">e</span>
						<span style="color: #ff545a;">a</span>
						<span style="color: #ff545a;">r</span>
						<span style="color: #ff545a;">c</span>
						<span style="color: #ff545a;">h</span>
					</h1>
					<p>
						Find What You Need, Promote What You Offer – All in One Place
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form method="POST" action="data.php">
								<input type="text" class="subscription-input-form" name="data" placeholder="Type here" style="border-radius: 41px; width:">
								<button class="appsLand-btn subscribe-btn" name="submit" style="border-radius: 0 30px 30px 0;">
									search
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->
		
		


<?php
include('footer.php');
?>