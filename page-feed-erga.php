<?php
/*
 * Template Name: Feed Projects on Map
 * Description: Feeder
 */
 get_header(); ?>
 
 <style>
	 
	 #header, #footer {
	    display: none !important;
	    visibility: hidden !important;
	}
	
	#container {
	    padding: 0px !important;
	    margin: 0px !important;
	    width: auto !important;
	}
	
	.col-1-5 {
	    text-align: center;
	    display: inline-block;
	    width: 18.15%;
	    font-size: 8px;
	    color: #808284;
	    line-height: 1em;
	}
	
 </style>
 

<div id="feeder" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="row top-ipodomes">
			
			<h6>Συνολικός αριθμός έργων <i class="fa fa-question-circle"></i>
				<br><b>1.046</b>
			</h6>
			
			<div class="line-chart">
				
				<div class="line" style="background: #D1C99B; width: 11%; z-index: 5;"></div>
				
				<div class="line" style="background: #A39A3E; width: 26%; z-index: 4;"></div>
				
				<div class="line" style="background: #B0C2A1; width: 37%; z-index: 3;"></div>
				
				<div class="line" style="background: #1E8FC6; width: 63%; z-index: 2;"></div>
				
				<div class="line" style="background: #206898; width: 97%; z-index: 1; border-top-right-radius: 4px; border-bottom-right-radius: 4px;"></div>
				
			</div>
			
			<div class="row top-gap">
				
				<div class="col-1-5">
					
					<strong style="color:#D1C99B;">11%</strong> Π.Ε. Ευρυτανίας
					
				</div>
				
				<div class="col-1-5">
					
					<strong style="color:#A39A3E; ">15%</strong> Π.Ε. Φωκίδας
					
				</div>
				
				<div class="col-1-5">
					
					<strong style="color:#B0C2A1; ">11%</strong> Π.Ε. Βοιωτίας
					
				</div>
				
				<div class="col-1-5">
					
					<strong style="color: #1E8FC6;">26%</strong> Π.Ε. Ευβοίας
					
				</div>
				
				<div class="col-1-5">
					
					<strong style="color: #206898">37%</strong> Π.Ε. Φθιώτιδας
					
				</div>
				
			</div>
			
		</div>
			
	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->



<?php get_footer(); ?>