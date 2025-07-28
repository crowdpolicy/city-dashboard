<?php
/*
 * Template Name: Feed Openbudget
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
	
	hr {
	    margin-top: 8px;
	    margin-bottom: 8px;
	}
	
	canvas{
		width: 30px !important;
		height: 30px !important;
	}
	
	.left-label-title {
	    font-size: 15px;
	    font-weight: 300;
	    color: #808284;
	    line-height: 1em;
	    margin: 0px;
	}
	
 </style>
 

<div id="feeder" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<center><h6 class="left-label-title smaller">Κατανομή εσόδων ανά Περιφερειακή Ενότητα</h6></center><br>
	
		<div class="row no-margins">
				
			<div class="col-1-5">
				
				<canvas id="pita1"></canvas> <strong style="color:#D1C99B;">9.5%</strong> Π.Ε. Ευρυτανίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita2"></canvas> <strong style="color:#A39A3E; ">3.5%</strong> Π.Ε. Φωκίδας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita3"></canvas> <strong style="color:#B0C2A1; ">9.8%</strong> Π.Ε. Βοιωτίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita4"></canvas> <strong style="color: #1E8FC6;">19.4%</strong> Π.Ε. Ευβοίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita5"></canvas> <strong style="color: #206898">57.7%</strong> Π.Ε. Φθιώτιδας
				
			</div>
			
		</div>
		
		<hr>
		
		<center><h6 class="left-label-title smaller">Δημόσιες επενδύσεις ανά Περιφερειακή Ενότητα </h6></center><br>
		
		<div class="row no-margins">
				
			<div class="col-1-5">
				
				<canvas id="pita6"></canvas> <strong style="color:#D1C99B;">10.3%</strong> Π.Ε. Ευρυτανίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita7"></canvas> <strong style="color:#A39A3E; ">1.8%</strong> Π.Ε. Φωκίδας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita8"></canvas> <strong style="color:#B0C2A1; ">5.5%</strong> Π.Ε. Βοιωτίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita9"></canvas> <strong style="color: #1E8FC6;">18.7%</strong> Π.Ε. Ευβοίας
				
			</div>
			
			<div class="col-1-5">
				
				<canvas id="pita10"></canvas> <strong style="color: #206898">63.7%</strong> Π.Ε. Φθιώτιδας
				
			</div>
			
		</div>
		
		<script type="text/javascript">
		
		jQuery(window).load(function($){
			
			var data = [
				
			    {
			        value: 40000,
			        color: "#D9DAE1",
			        highlight: "#D9DAE1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 81000000,
			        color: "#6D6E6E",
			        highlight: "#6D6E6E",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 49000000,
			        color: "#FFFFFF",
			        highlight: "#FFFFFF",
			        label: "Κατηγορία εξόδων"
			    }
			]
			
			var options =
				
				{
				    //Boolean - Whether we should show a stroke on each segment
				    segmentShowStroke : false,
				
				    //Number - The width of each segment stroke
				    segmentStrokeWidth : 0,
				
				    //Number - The percentage of the chart that we cut out of the middle
				    percentageInnerCutout : 0, // This is 0 for Pie charts
				
				    //Number - Amount of animation steps
				    animationSteps : 50,
				
				    //String - Animation easing effect
				    animationEasing : "ease",
				
				    //Boolean - Whether we animate the rotation of the Doughnut
				    animateRotate : true,
			
				
				};
			
			
			var data2 = [
				
			    {
			        value: 9.5,
			        color: "#D1C99B",
			        highlight: "#D9DAE1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 90.5,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data3 = [
				
			    {
			        value: 3.5,
			        color: "#A39A3E",
			        highlight: "#D9DAE1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 96.5,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data4 = [
				
			    {
			        value: 9.8,
			        color: "#B0C2A1",
			        highlight: "#B0C2A1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 90.2,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data5 = [
				
			    {
			        value: 19.4,
			        color: "#1E8FC6",
			        highlight: "#1E8FC6",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 80.6,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data6 = [
				
			    {
			        value: 57.7,
			        color: "#206898",
			        highlight: "#206898",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 42.3,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			
			var data7 = [
				
			    {
			        value: 10.3,
			        color: "#D1C99B",
			        highlight: "#D1C99B",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 89.7,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data8 = [
				
			    {
			        value: 1.8,
			        color: "#A39A3E",
			        highlight: "#A39A3E",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 98.2,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data9 = [
				
			    {
			        value: 5.5,
			        color: "#B0C2A1",
			        highlight: "#B0C2A1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 94.5,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data10 = [
				
			    {
			        value: 18.7,
			        color: "#1E8FC6",
			        highlight: "#1E8FC6",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 81.3,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var data11 = [
				
			    {
			        value: 63.7,
			        color: "#206898",
			        highlight: "#206898",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: 36.3,
			        color: "#F0F1F5",
			        highlight: "#F0F1F5",
			        label: "Κατηγορία εξόδων"
			    }
			];
			
			var options2 =
				
				{
				    //Boolean - Whether we should show a stroke on each segment
				    segmentShowStroke : true,
				    
				    segmentStrokeColor : "#808284",
				
				    //Number - The width of each segment stroke
				    segmentStrokeWidth : 1,
				
				    //Number - The percentage of the chart that we cut out of the middle
				    percentageInnerCutout : 0, // This is 0 for Pie charts
				
				    //Number - Amount of animation steps
				    animationSteps : 50,
				
				    //String - Animation easing effect
				    animationEasing : "ease",
				
				    //Boolean - Whether we animate the rotation of the Doughnut
				    animateRotate : true,
			
				
				};	

			var pita1 = new Chart( jQuery("#pita1").get(0).getContext("2d") ).Pie(data2, options2);
			var pita2 = new Chart( jQuery("#pita2").get(0).getContext("2d") ).Pie(data3, options2);
			var pita3 = new Chart( jQuery("#pita3").get(0).getContext("2d") ).Pie(data4, options2);
			var pita4 = new Chart( jQuery("#pita4").get(0).getContext("2d") ).Pie(data5, options2);
			var pita5 = new Chart( jQuery("#pita5").get(0).getContext("2d") ).Pie(data6, options2);
			
			var pita6 = new Chart( jQuery("#pita6").get(0).getContext("2d") ).Pie(data7, options2);
			var pita7 = new Chart( jQuery("#pita7").get(0).getContext("2d") ).Pie(data8, options2);
			var pita8 = new Chart( jQuery("#pita8").get(0).getContext("2d") ).Pie(data9, options2);
			var pita9 = new Chart( jQuery("#pita9").get(0).getContext("2d") ).Pie(data10, options2);
			var pita10 = new Chart( jQuery("#pita10").get(0).getContext("2d") ).Pie(data11, options2);
		
		});
		
	</script>
	
	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->



<?php get_footer(); ?>