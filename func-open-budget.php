<?php switch_to_blog(21); 
	
	
// $args = array(
// 	'posts_per_page'   => 3,
// 	'offset'           => 2,
// 	'orderby'          => 'date',
// 	'order'            => 'DESC',
// 	'post_type'        => 'apidata',
// 	'post_status'      => 'publish',
// 	'suppress_filters' => true 
// );

	$args = array(
			'posts_per_page'   => 2,
			'offset'           => 0,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'apidata',
			'post_status'      => 'publish',
			'suppress_filters' => true 
	);
	
	$fetchDB = get_posts($args);
	
	$data = json_decode($fetchDB[0]->post_content);
console_log($fetchDB);
	
/*
	$sum = $data->expenseList[7]->approved + $data->expenseList[647]->approved + $data->expenseList[1234]->approved + $data->expenseList[1824]->approved + $data->expenseList[2391]->approved;
	$y2 = ($data->expenseList[1234]->approved /$sum)*100;
  $y3 = ($data->expenseList[1824]->approved /$sum)*100;
  $y4 = ($data->expenseList[2391]->approved /$sum)*100;
  $y5 = ($data->expenseList[647]->approved /$sum)*100;
  $y1 = ($data->expenseList[7]->approved /$sum)*100;
*/

	/*$sum = $data->expenseList[7]->approved + $data->expenseList[684]->approved + $data->expenseList[1321]->approved + $data->expenseList[1948]->approved + $data->expenseList[2550]->approved;
	$y2 = ($data->expenseList[684]->approved /$sum)*100;
	$y3 = ($data->expenseList[1321]->approved /$sum)*100;
	$y4 = ($data->expenseList[1948]->approved /$sum)*100;
	$y5 = ($data->expenseList[2550]->approved /$sum)*100;
	$y1 = ($data->expenseList[7]->approved /$sum)*100;*/
	
	// -----OLD SHEET------
	// $sum = $data->expenseList[7]->approved + $data->expenseList[689]->approved + $data->expenseList[1348]->approved + $data->expenseList[1976]->approved + $data->expenseList[2589]->approved;
	// $y2 = ($data->expenseList[689]->approved /$sum)*100;
	// $y3 = ($data->expenseList[1348]->approved /$sum)*100;
	// $y4 = ($data->expenseList[1976]->approved /$sum)*100;
	// $y5 = ($data->expenseList[2589]->approved /$sum)*100;
	// $y1 = ($data->expenseList[7]->approved /$sum)*100;
	

	$sum = $data->expenseList[7]->approved + $data->expenseList[705]->approved + $data->expenseList[1425]->approved + $data->expenseList[2082]->approved + $data->expenseList[2708]->approved;
				
				$y1 = ($data->expenseList[7]->approved /$sum)*100;
				$y2 = ($data->expenseList[705]->approved /$sum)*100;
				$y3 = ($data->expenseList[1425]->approved /$sum)*100;
				$y4 = ($data->expenseList[2082]->approved /$sum)*100;
				$y5 = ($data->expenseList[2708]->approved /$sum)*100;

				$sumes =$data->incomeList[6]->eispraxthenta + $data->incomeList[171]->eispraxthenta + $data->incomeList[349]->eispraxthenta + $data->incomeList[472]->eispraxthenta + $data->incomeList[617]->eispraxthenta;

				$esfth = ($data->incomeList[6]->eispraxthenta /$sumes)*100;
				$eseb = ($data->incomeList[171]->eispraxthenta /$sumes)*100;
				$eseur = ($data->incomeList[349]->eispraxthenta /$sumes)*100;
				$esfwk = ($data->incomeList[472]->eispraxthenta /$sumes)*100;
				$esboiot = ($data->incomeList[617]->eispraxthenta /$sumes)*100;
				
				
				$sumepen = $data->incomeList[7]->approved + $data->incomeList[156]->approved + $data->incomeList[323]->approved + $data->incomeList[439]->approved + $data->incomeList[574]->approved;


				$penfth = ($data->incomeList[7]->approved /$sumepen)*100;
				$peneub = ($data->incomeList[156]->approved /$sumepen)*100;
				$peneur = ($data->incomeList[323]->approved /$sumepen)*100;
				$penfwk = ($data->incomeList[439]->approved /$sumepen)*100;
				$penboi = ($data->incomeList[574]->approved /$sumepen)*100;

?>

<h4 class="col-title">Προϋπολογισμός</h4>
	<?php echo '<h6>Τελευταία ενημέρωση: Ιούνιος 2023</h6>'; ?>
	<?php //echo '<h6>Τελευταία ενημέρωση: '.strtok($data->responseDate, ' ').'</h6>'; ?>
	<h6>Έξοδα ανά περιφερειακή ενότητα</h6>
	
	
	<canvas id="open-budget" class="chart" height="100" width="100"></canvas>
	
	<div class="chart-legend">
		
		<ul class="open-budget-legend">
			
			<li class="main-color thin">
				<div style="background: #D1C99B;"> <?php echo round($y2); ?>%</div> <div style="width: 67px;">Ευβοίας</div>
			</li>
			
			<li class="main-color thin">
				<div style="background: #A39A3E;"> <?php echo round($y3); ?>%</div> <div style="width: 67px;">Ευρυτανίας</div>
			</li>
			
			<li class="main-color thin">
				<div style="background: #B0C2A1; "> <?php echo round($y4); ?>%</div> <div style="width: 67px;">Φωκίδας</div>
			</li>
			
			<li class="main-color thin">
				<div style="background: #1E8FC6;"> <?php echo round($y5); ?>%</div> <div style="width: 67px;">Βοιωτίας</div>
			</li>
			
			<li class="main-color thin">
				<div style="background: #206898; color: #fff;"> <?php echo round($y1); ?>%</div> <div style="width: 67px;">Φθιώτιδας</div>
			</li>
			
		</ul>
		
	</div>
	
	<hr style="margin-top: -15px;">
	
	<h6 class="left-label-title smaller">Εισπραχθέντα Έσοδα Ανά Περιφερειακή Ενότητα</h6>
	
	<div class="row no-margins">
			
		<div class="col-1-5">
			
			<canvas id="pita1"></canvas> <strong style="color:#D1C99B;"><?php echo round($eseur); ?>%</strong> Π.Ε. Ευρυτανίας
			<!--<canvas id="pita1"></canvas> <strong style="color:#D1C99B;">9.5%</strong> Π.Ε. Ευρυτανίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita2"></canvas> <strong style="color:#A39A3E; "><?php echo round($esfwk); ?>%</strong> Π.Ε. Φωκίδας
			<!--<canvas id="pita2"></canvas> <strong style="color:#A39A3E; ">3.5%</strong> Π.Ε. Φωκίδας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita3"></canvas> <strong style="color:#B0C2A1; "><?php echo round($esboiot); ?>%</strong> Π.Ε. Βοιωτίας
			<!--<canvas id="pita3"></canvas> <strong style="color:#B0C2A1; ">9.8%</strong> Π.Ε. Βοιωτίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita4"></canvas> <strong style="color: #1E8FC6;"><?php echo round($eseb); ?>%</strong> Π.Ε. Ευβοίας
			<!--<canvas id="pita4"></canvas> <strong style="color: #1E8FC6;">19.4%</strong> Π.Ε. Ευβοίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita5"></canvas> <strong style="color: #206898"><?php echo round($esfth); ?>%</strong> Π.Ε. Φθιώτιδας
			<!--<canvas id="pita5"></canvas> <strong style="color: #206898">57.7%</strong> Π.Ε. Φθιώτιδας-->
			
		</div>
		
	</div>
	
	<hr>
	<?php /*
	<h6 class="left-label-title smaller">Δημόσιες επενδύσεις ανά Περιφερειακή Ενότητα </h6>
	
	<div class="row no-margins">
			
		<div class="col-1-5">
			
			<canvas id="pita6"></canvas> <strong style="color:#D1C99B;"><?php echo round($peneur);?>%</strong> Π.Ε. Ευρυτανίας
			<!--<canvas id="pita6"></canvas> <strong style="color:#D1C99B;">10.3%</strong> Π.Ε. Ευρυτανίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita7"></canvas> <strong style="color:#A39A3E; "><?php echo round($penfwk);?>%</strong> Π.Ε. Φωκίδας
			<!--<canvas id="pita7"></canvas> <strong style="color:#A39A3E; ">1.8%</strong> Π.Ε. Φωκίδας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita8"></canvas> <strong style="color:#B0C2A1; "><?php echo round($penboi);?>%</strong> Π.Ε. Βοιωτίας
			<!--<canvas id="pita8"></canvas> <strong style="color:#B0C2A1; ">5.5%</strong> Π.Ε. Βοιωτίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita9"></canvas> <strong style="color: #1E8FC6;"><?php echo round($peneub);?>%</strong> Π.Ε. Ευβοίας
			<!--<canvas id="pita9"></canvas> <strong style="color: #1E8FC6;">18.7%</strong> Π.Ε. Ευβοίας-->
			
		</div>
		
		<div class="col-1-5">
			
			<canvas id="pita10"></canvas> <strong style="color: #206898"><?php echo round($penfth);?>%</strong> Π.Ε. Φθιώτιδας
			<!--<canvas id="pita10"></canvas> <strong style="color: #206898">63.7%</strong> Π.Ε. Φθιώτιδας-->
			
		</div>
		
	</div>
	
	<hr>
	*/ ?>
	
	<div class="row buttons">
		
		<div class="col-xs-6"> <a class="button-bordered" href="http://www.diafaniasterea.gr/" target="_blank"> Διαύγεια στη Στερεά</a> </div>
		<div class="col-xs-6"> <a class="button-bordered" href="https://et.diavgeia.gov.gr/f/pste" target="_blank"> Διαφάνεια στη Στερεά</a> </div>
		
	</div>
	
	<hr>
	<div>
		<a href="http://hello.crowdapps.net/opendata-stereas-elladas/open-budget/" target="_blank" class="view-more main-color">περισσότερα</a>
	</div>
	<br>

	
	<!-- Novoville iframe tab -->
		
	<hr>


	
<!-- 	<a href="https://region.novoville.com/" target="_blank" class="view-more main-color">Στειλε την αναφορά σου</a> -->
	
	<script type="text/javascript">
		
		jQuery(window).load(function($){
			
			var chart = jQuery("#open-budget").get(0).getContext("2d");
			
			var data = [
				
			    {
			        value: <?php echo $y2; ?>,
			        color: "#D1C99B",
			        highlight: "#D1C99B",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: <?php echo $y3; ?>,
			        color: "#A39A3E",
			        highlight: "#A39A3E",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: <?php echo $y4; ?>,
			        color: "#B0C2A1",
			        highlight: "#B0C2A1",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: <?php echo $y5; ?>,
			        color: "#1E8FC6",
			        highlight: "#1E8FC6",
			        label: "Κατηγορία εξόδων"
			    },
			    {
			        value: <?php echo $y1; ?>,
			        color: "#206898",
			        highlight: "#206898",
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
				    
				    tooltipTemplate: false,
			
				
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
				    
				    tooltipTemplate: false,
			
				
				};	
			
			
			var openbudget = new Chart(chart).Pie(data, options);

			var pita1 = new Chart( jQuery("#pita1").get(0).getContext("2d") ).Pie(data2, options2);
			var pita2 = new Chart( jQuery("#pita2").get(0).getContext("2d") ).Pie(data3, options2);
			var pita3 = new Chart( jQuery("#pita3").get(0).getContext("2d") ).Pie(data4, options2);
			var pita4 = new Chart( jQuery("#pita4").get(0).getContext("2d") ).Pie(data5, options2);
			var pita5 = new Chart( jQuery("#pita5").get(0).getContext("2d") ).Pie(data6, options2);
			
			//var pita6 = new Chart( jQuery("#pita6").get(0).getContext("2d") ).Pie(data7, options2);
			//var pita7 = new Chart( jQuery("#pita7").get(0).getContext("2d") ).Pie(data8, options2);
			//var pita8 = new Chart( jQuery("#pita8").get(0).getContext("2d") ).Pie(data9, options2);
			//var pita9 = new Chart( jQuery("#pita9").get(0).getContext("2d") ).Pie(data10, options2);
			//var pita10 = new Chart( jQuery("#pita10").get(0).getContext("2d") ).Pie(data11, options2);
		
		});
		
	</script>
	
<?php restore_current_blog(); 
/**
* With this at any point in your code you can console log any PHP variable
* e.g. $text = var_dump_ret(anything());
* console_log($text);
* var_dump_pre() only adds the pre tags to the var_dump() function so it is more human friendly, when reading.
*/

// Output to the console
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// return var_dump to variable
function var_dump_ret($mixed = null) {
  ob_start();
  var_dump($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

// Pretify var_dump
function var_dump_pre($mixed = null) {
  echo '<pre>';
  var_dump($mixed);
  echo '</pre>';
  return null;
}
?>