<?php switch_to_blog(10); ?>

<h4 class="col-title">Έργα & δράσεις</h4>
				
	<div class="row top-ipodomes">
		
		<?php 
			$erga = get_posts(
			    array(
			        'posts_per_page' => -1,
			        'post_type' => 'listing',
			 
			    )
			); 
			
		?>
		
		<h6>Συνολικός αριθμός έργων
			<br><b><?php echo count($erga); ?></b>
		</h6>
		
		<div class="line-chart">
			
			<?php 
				$erga_eurutanias = get_posts(
				    array(
				        'posts_per_page' => -1,
				        'post_type' => 'listing',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'listing_location',
				                'field' => 'term_id',
				                'terms' => 43,
				            )
				        )
				    )
				); 
				$erga_eurutanias_pososto = ( count($erga_eurutanias) * 100 ) / count($erga);
			?>
			<div class="line" style="background: #D1C99B; width: <?php echo $erga_eurutanias_pososto; ?>%; z-index: 5;"></div>
			
			<?php 
				$erga_fokidas = get_posts(
				    array(
				        'posts_per_page' => -1,
				        'post_type' => 'listing',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'listing_location',
				                'field' => 'term_id',
				                'terms' => 45,
				            )
				        )
				    )
				); 
				$erga_fokidas_pososto = ( count($erga_fokidas) * 100 ) / count($erga);
			?>
			<div class="line" style="background: #A39A3E; width: <?php echo $erga_fokidas_pososto + $erga_eurutanias_pososto; ?>%; z-index: 4;"></div>
			
			<?php 
				$erga_viowtias = get_posts(
				    array(
				        'posts_per_page' => -1,
				        'post_type' => 'listing',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'listing_location',
				                'field' => 'term_id',
				                'terms' => 44,
				            )
				        )
				    )
				); 
				$erga_viowtias_pososto = ( count($erga_viowtias) * 100 ) / count($erga);
			?>
			<div class="line" style="background: #B0C2A1; width: <?php echo $erga_viowtias_pososto + $erga_fokidas_pososto + $erga_eurutanias_pososto; ?>%; z-index: 3;"></div>
			
			<?php 
				$erga_evoias = get_posts(
				    array(
				        'posts_per_page' => -1,
				        'post_type' => 'listing',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'listing_location',
				                'field' => 'term_id',
				                'terms' => 29,
				            )
				        )
				    )
				); 
				$erga_evoias_pososto = ( count($erga_evoias) * 100 ) / count($erga);
			?>
			<div class="line" style="background: #1E8FC6; width: <?php echo $erga_evoias_pososto + $erga_viowtias_pososto + $erga_fokidas_pososto + $erga_eurutanias_pososto; ?>%; z-index: 2;"></div>
			
			<?php 
				$erga_fthiotidas = get_posts(
				    array(
				        'posts_per_page' => -1,
				        'post_type' => 'listing',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'listing_location',
				                'field' => 'term_id',
				                'terms' => 38,
				            )
				        )
				    )
				); 
				$erga_fthiotidas_pososto = ( count($erga_fthiotidas) * 100 ) / count($erga);
			?>
			<div class="line" style="background: #206898; width: calc(<?php echo $erga_fthiotidas_pososto + $erga_evoias_pososto + $erga_viowtias_pososto + $erga_fokidas_pososto + $erga_eurutanias_pososto; ?>% - 3%); z-index: 1; border-top-right-radius: 4px; border-bottom-right-radius: 4px;"></div>
			
		</div>
		
		<div class="row top-gap">
			
			<div class="col-1-5">
				
				
				<strong style="color:#D1C99B;"><?php echo round($erga_eurutanias_pososto); ?>%</strong> Π.Ε. Ευρυτανίας
				
			</div>
			
			<div class="col-1-5">
				
				<strong style="color:#A39A3E; "><?php echo round($erga_fokidas_pososto); ?>%</strong> Π.Ε. Φωκίδας
				
			</div>
			
			<div class="col-1-5">
				
				<strong style="color:#B0C2A1; "><?php echo round($erga_viowtias_pososto); ?>%</strong> Π.Ε. Βοιωτίας
				
			</div>
			
			<div class="col-1-5">
				
				<strong style="color: #1E8FC6;"><?php echo round($erga_evoias_pososto); ?>%</strong> Π.Ε. Ευβοίας
				
			</div>
			
			<div class="col-1-5">
				
				<strong style="color: #206898"><?php echo round($erga_fthiotidas_pososto); ?>%</strong> Π.Ε. Φθιώτιδας
				
			</div>
			
		</div>
		
	</div>
	
	<hr>
	<br>
	<h6 class="left-label-title">Κατανομή έργων ανά θεματική ενότητα</h6>
	
	<ul class="list">

		<li class="border-bottom">
			Συγκοινωνίες <canvas class="thematikes"></canvas>
		</li>
		
		<li class="border-bottom">
			Διάφορα <canvas class="thematikes2"></canvas>
		</li>
		
		<li class="border-bottom">
			Οικισμός - Περιβάλλον  <canvas class="thematikes3"></canvas>
		</li>
		
		<li class="border-bottom">
			Υδρευση - Αποχέτευση <canvas class="thematikes4"></canvas>
		</li>
		
		<li class="border-bottom">
			Τουρισμός - Μουσεία - Μνημεία - Πολιτισμός <canvas class="thematikes5"></canvas>
		</li>
		
		<li class="border-bottom">
			Εκπαίδευση <canvas class="thematikes6"></canvas>
		</li>
		
		<li class="border-bottom">
			Εγγειοβελτιωτικά <canvas class="thematikes7"></canvas>
		</li>
		
		<li class="border-bottom">
			Δημόσια Διοίκηση <canvas class="thematikes8"></canvas>
		</li>
		
		<li class="border-bottom">
			Υγεία - Πρόνοια <canvas class="thematikes9"></canvas>
		</li>
		
	</ul>
	
	<div class="row labels">
			
		<div class="col-1-5">
			
			<span style="background:#D1C99B;"></span> Π.Ε. Ευρυτανίας
			
		</div>
		
		<div class="col-1-5">
			
			<span style="background:#A39A3E; "></span> Π.Ε. Φωκίδας
			
		</div>
		
		<div class="col-1-5">
			
			<span style="background:#B0C2A1; "></span> Π.Ε. Βοιωτίας
			
		</div>
		
		<div class="col-1-5">
			
			<span style="background:#1E8FC6;"></span> Π.Ε. Ευβοίας
			
		</div>
		
		<div class="col-1-5">
			
			<span style="background:#206898"></span> Π.Ε. Φθιώτιδας
			
		</div>
		
	</div>
	
	<script type="text/javascript">
						
		jQuery(window).load(function($){
		
			var ctx = jQuery(".thematikes").get(0).getContext("2d");
			
			var data = [
				
			    {
			        value: 77,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 62,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 37,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 82,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 161,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data2 = [
				
			    {
			        value: 6,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 59,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 17,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 86,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 66,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data3 = [
				
			    {
			        value: 14,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 12,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 15,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 30,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 34,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data4 = [
				
			    {
			        value: 5,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 3,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 18,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 13,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 12,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data5 = [
				
			    {
			        value: 8,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 4,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 7,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 10,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 15,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data6 = [
				
			    {
			        value: 0,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 0,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 7,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 31,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 13,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data7 = [
				
			    {
			        value: 0,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 1,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 1,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 1,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 42,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data8 = [
				
			    {
			        value: 0,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 0,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 5,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 3,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 14,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var data9 = [
				
			    {
			        value: 1,
			        color:"#D1C99B",
			        highlight: "#D1C99B",
			        label: "25% Π.Ε. Ευρυτανίας"
			    },
			    
			    {
			        value: 0,
			        color: "#AC9A3E",
			        highlight: "#AC9A3E",
			        label: "10% Π.Ε. Φωκίδας "
			    },
			    
			    {
			        value: 3,
			        color: "#B0C2A2",
			        highlight: "#B0C2A2",
			        label: "25% Π.Ε. Βοιωτίας"
			    },
			    
			    {
			        value: 4,
			        color: "#1E8FC7",
			        highlight: "#1E8FC7",
			        label: "15% Π.Ε. Ευβοίας "
			    },
			    
			    {
			        value: 4,
			        color: "#206898",
			        highlight: "#206898",
			        label: "25% Π.Ε. Φθιώτιδας"
			    }
			    
			];
			
			var options = 
				{
				    //Boolean - Whether we should show a stroke on each segment
				    segmentShowStroke : false,
				
				    //String - The colour of each segment stroke
				    segmentStrokeColor : "#fff",
				
				    //Number - The width of each segment stroke
				    segmentStrokeWidth : 0,
				
				    //Number - The percentage of the chart that we cut out of the middle
				    percentageInnerCutout : 65, // This is 0 for Pie charts
				
				    //Number - Amount of animation steps
				    animationSteps : 100,
				
				    //String - Animation easing effect
				    animationEasing : "easeOutBounce",
				
				    //Boolean - Whether we animate the rotation of the Doughnut
				    animateRotate : true,
				
				    //Boolean - Whether we animate scaling the Doughnut from the centre
				    animateScale : false,
				    
				    showTooltip: false,
				    
				    tooltipTemplate: false,
				
				}

			

			var thematikes = new Chart(ctx).Pie(data, options);
			
			var ctx2 = jQuery(".thematikes2").get(0).getContext("2d"); var thematikes2 = new Chart(ctx2).Pie(data2, options);
			var ctx3 = jQuery(".thematikes3").get(0).getContext("2d"); var thematikes3 = new Chart(ctx3).Pie(data3, options);
			var ctx4 = jQuery(".thematikes4").get(0).getContext("2d"); var thematikes4 = new Chart(ctx4).Pie(data4, options);
			var ctx5 = jQuery(".thematikes5").get(0).getContext("2d"); var thematikes5 = new Chart(ctx5).Pie(data5, options);
			var ctx6 = jQuery(".thematikes6").get(0).getContext("2d"); var thematikes6 = new Chart(ctx6).Pie(data6, options);
			var ctx7 = jQuery(".thematikes7").get(0).getContext("2d"); var thematikes7 = new Chart(ctx7).Pie(data7, options);
			var ctx8 = jQuery(".thematikes8").get(0).getContext("2d"); var thematikes8 = new Chart(ctx8).Pie(data8, options);
			var ctx9 = jQuery(".thematikes9").get(0).getContext("2d"); var thematikes9 = new Chart(ctx9).Pie(data9, options);

		});
		
	</script>
	
	
<?php restore_current_blog(); ?>