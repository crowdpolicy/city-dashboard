<h4 class="col-title">Διαβουλεύσεις</h4>	

	<img id="diab" src="<?php echo get_template_directory_uri(); ?>/images/graph-text.png" />
	
	<?php switch_to_blog(11); ?>

	<?php 
		/*			
		$ideas_args = array( 'post_type' => 'idea', 'post_status' => 'publish', 'posts_per_page' => -1, 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'idea', ), ), );		
		$i_query = get_posts( $ideas_args );
		$ideas = 0;
		foreach($i_query as $a): $ideas++; endforeach; wp_reset_postdata();
		
		$sugg_args = array( 'post_type' => 'idea', 'post_status' => 'publish', 'posts_per_page' => -1, 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'suggestion', ), ), );
		$s_query = get_posts( $sugg_args );
		$suggs = 0;
		foreach($s_query as $a): $suggs++; endforeach; wp_reset_postdata();
		
		$ideas = round($ideas);
		$suggs = round($suggs);
		$total = $ideas + $suggs;
		*/
			
	?>
	
	<?php 
				
		$ideas_args = array( 'post_type' => 'idea', 'post_status' => 'publish', 'posts_per_page' => -1, 
								'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'idea', ), ), );	
									
		$i_query = get_posts( $ideas_args );
		$ideas = count($i_query);
		wp_reset_postdata();
		
		$sugg_args = array( 'post_type' => 'idea', 'post_status' => 'publish', 'posts_per_page' => -1,
							 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'suggestion', ), ), );
							 
		$s_query = get_posts( $sugg_args );
		$suggs = count($s_query);
		wp_reset_postdata(); 
		
		$total = $ideas + $suggs;
		
		$euritania = 0;
		$fokida = 0;
		$voiotia = 0;
		$evoia = 0;
		$fthiotida = 0;
		
		foreach($i_query as $idea){
			
			if( get_field('katoikw', $idea->ID) == 'Ευρυτανίας' ){ $euritania++; }
			elseif( get_field('katoikw', $idea->ID) == 'Φωκίδας' ){ $fokida++; }
			elseif( get_field('katoikw', $idea->ID) == 'Βοιωτίας' ){ $voiotia++; }
			elseif( get_field('katoikw', $idea->ID) == 'Εύβοιας' ){ $evoia++; }
			elseif( get_field('katoikw', $idea->ID) == 'Φθιώτιδας' ){ $fthiotida++; }
			else{ $euritania++; $fokida++; $voiotia++; $evoia++; $fthiotida++; }
			
		}
		
		$euritania_s = 0;
		$fokida_s = 0;
		$voiotia_s = 0;
		$evoia_s = 0;
		$fthiotida_s = 0;
		
		foreach($s_query as $sugg){
			
			if( get_field('katoikw', $sugg->ID) == 'Ευρυτανίας' ){ $euritania_s++; }
			elseif( get_field('katoikw', $sugg->ID) == 'Φωκίδας' ){ $fokida_s++; }
			elseif( get_field('katoikw', $sugg->ID) == 'Βοιωτίας' ){ $voiotia_s++; }
			elseif( get_field('katoikw', $sugg->ID) == 'Εύβοιας' ){ $evoia_s++; }
			elseif( get_field('katoikw', $sugg->ID) == 'Φθιώτιδας' ){ $fthiotida_s++; }
			else{ $euritania_s++; $fokida_s++; $voiotia_s++; $evoia_s++; $fthiotida_s++; }
			
		}
			
	?>
	
	<hr>
	
	<h6 class="left-label-title centered">Διαβουλεύσεις #σχόλια</h6> <br>
	
	<div class="line-chart">
			
		<div class="line" style="background: #415081; width: <?php echo round(($ideas/$total)*100); ?>%; z-index: 1;"> <div class="idea"></div> </div>
		
		<div class="line" style="background: #3292AE; width: 97%; z-index: 0; border-top-right-radius: 4px; border-bottom-right-radius: 4px;"> 
			<div class="sugg"></div> 
		</div>
		
	</div>
	
	<div class="row top-gap" style="margin-top: 30px !important; text-align: center">
		
		<div class="col-xs-6 idea-labels">
			<a href="http://hello.crowdapps.net/perifereia-stereas-diavouleusi/all-ideas" target="_blank"><b class="ideas-color"><?php echo round(($ideas/$total)*100); ?>%</b> ιδέες <br> (υποβολή από πολίτες)</a>
		</div>
		
		<div class="col-xs-6 idea-labels">
			<a href="http://hello.crowdapps.net/perifereia-stereas-diavouleusi/all-suggestions" target="_blank"><b class="sugg-color"><?php echo round(($suggs/$total)*100); ?>%</b> προτάσεις <br> (υποβολή από φορείς) </a>
		</div>
		
	</div>
	
	<div class="graph-container">
		
		<div class="graph-labels">
			
			<div class="col-1-5 gray">ΠΕ Ευρυτανίας</div>	
			
			<div class="col-1-5 gray">ΠΕ Φωκίδας</div>	
			 
			<div class="col-1-5 gray">ΠΕ Βοιωτίας</div>	
			
			<div class="col-1-5 gray">ΠΕ<br>Ευβοίας</div>	
			
			<div class="col-1-5 gray">ΠΕ Φθιώτιδας</div>	
		
		</div>
		
		<canvas id="graph"></canvas>
		
			
		
		<div class="graph-sub-labels">
			
			<div class="col-1-5 gray"> <b class="ideas-color"><?php echo $euritania; ?></b> ιδέες <br> <b class="sugg-color"><?php echo $euritania; ?></b> προτάσεις </div>	
			
			<div class="col-1-5 gray"> <b class="ideas-color"><?php echo $fokida; ?></b> ιδέες <br> <b class="sugg-color"><?php echo $fokida_s; ?></b> προτάσεις </div>	
			
			<div class="col-1-5 gray"> <b class="ideas-color"><?php echo $voiotia; ?></b> ιδέες <br> <b class="sugg-color"><?php echo $voiotia_s; ?></b> προτάσεις </div>	
			
			<div class="col-1-5 gray"> <b class="ideas-color"><?php echo $evoia; ?></b> ιδέες <br> <b class="sugg-color"><?php echo $evoia_s; ?></b> προτάσεις </div>	
			
			<div class="col-1-5 gray"> <b class="ideas-color"><?php echo $fthiotida; ?></b> ιδέες <br> <b class="sugg-color"><?php echo $fthiotida_s; ?></b> προτάσεις </div>		
		
		</div>
			
	</div>
	
	
	<div class="row no-margins">	

	<?php
		$ideas_args = array( 'post_type' => 'idea', 'posts_per_page' => 2, 'post_status' => 'publish', 'order' => 'DESC', 'orderby' => 'date' );	
		$loopIdeas = get_posts( $ideas_args );
		if($loopIdeas):	
	?>
	
		<div class="col-xs-6" style="border-right: 1px solid #808284;">
		
			<h6 class="left-label-title" style="margin-left: 0px;">Τελευταία Σχόλια σχετικά με τις Διαβουλεύσεις</h6> <br>

					
				<?php foreach ( $loopIdeas as $post ) : setup_postdata( $post );  ?>
				
					<div class="idea-entry">
						
						<a href="<?php the_permalink(); ?>" target="_blank"> <?php the_title(); ?> </a>
						<date> <?php echo get_the_date("d/m/Y", $post->ID); ?>
							<span><?php $comments_count = wp_count_comments($post->ID); echo $comments_count->approved; ?> σχόλια</span>
						</date>
					</div>
				
				<?php endforeach; ?>
			
		</div>
	
	<?php endif; wp_reset_postdata(); ?>
	
	<?php
		$com_args = get_comments( array('status' => 'approve', 'number'=>'2') );	
		if($com_args):	
	?>
	
		<div class="col-xs-6">
		
			<h6 class="left-label-title">Τελευταία Σχόλια</h6> <br><br>
					
				<?php foreach ( $com_args as $comment ) : setup_postdata( $comment );  ?>
				
					<?php if(isset($_GET['debug'])) var_dump($comment); ?>
				
					<div class="comment-entry">
						
						<a href="<?php echo get_the_permalink($comment->comment_post_ID)."#comment-".$comment->comment_ID; ?>" target="_blank"> <?php echo get_the_title($comment->comment_post_ID); ?> </a>
						
						<date>
							<?php echo date("d/m/Y", strtotime($comment->comment_date)); ?>
						</date>
						
					</div>
				
				<?php endforeach; ?>
			
		</div>
	
	<?php endif; ?>
	
	</div>
	
	<a href="http://hello.crowdapps.net/perifereia-stereas-diavouleusi/" target="_blank" class="view-more main-color">περισσότερα</a>
	
	<script type="text/javascript">
		
		jQuery(window).load(function($){
			
			var chart = jQuery("#graph").get(0).getContext("2d");
			
			var data = {
			    labels: ["", "", "", "", ""],
			    datasets: [
				    
			        {
			            label: "Ιδέες: ",
			            fillColor: "#415081",
			            strokeColor: "#415081",
			            highlightFill: "#415081",
			            highlightStroke: "#415081",
			            data: [ <?php echo $euritania.", ".$fokida.", ".$voiotia.", ".$evoia.", ".$fthiotida; ?> ]
			        },
			        {
			            label: "Προτάσεις: ",
			            fillColor: "#3292AE",
			            strokeColor: "#3292AE",
			            highlightFill: "#3292AE",
			            highlightStroke: "#3292AE",
			            data: [ <?php echo $euritania_s.", ".$fokida_s.", ".$voiotia_s.", ".$evoia_s.", ".$fthiotida_s; ?> ]
			        }
			        
			    ]
			};

			
			var options = {
				
				tooltipTemplate: false,
				
				showTooltips: false,
				
			    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
			    scaleBeginAtZero : true,
			
			    //Boolean - Whether grid lines are shown across the chart
			    scaleShowGridLines : true,
			
			    //String - Colour of the grid lines
			    scaleGridLineColor : "RGBA(128, 130, 132, 0.4);",
			
			    //Number - Width of the grid lines
			    scaleGridLineWidth : 1,
			
			    //Boolean - Whether to show horizontal lines (except X axis)
			    scaleShowHorizontalLines: true,
			
			    //Boolean - Whether to show vertical lines (except Y axis)
			    scaleShowVerticalLines: false,
			
			    //Boolean - If there is a stroke on each bar
			    barShowStroke : false,
			
			    //Number - Pixel width of the bar stroke
			    barStrokeWidth : 0,
			
			    //Number - Spacing between each of the X value sets
			    barValueSpacing : 10,
			
			    //Number - Spacing between data sets within X values
			    barDatasetSpacing : 1,
			    
			    onAnimationComplete: function () {
			        this.showTooltip(this.segments, false);
			    }, 
			    
			};

			
			var deliberations = new Chart(chart).Bar(data, options);
		
		});
		
	</script>

<?php restore_current_blog(); ?>