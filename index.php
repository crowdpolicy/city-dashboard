<?php get_header(); ?>

		<div id="div-wrapper">
			
			<div class="col-xs-12" style="position:relative;">
				
				<h3>Το Δικαίωμα να Γνωρίζουμε</h3>
				
				<p>Η Περιφέρεια Στερεάς Ελλάδας αποφάσισε να ‘ανοίξει’ τα δεδομένα της και να πληροφορεί τους πολίτες για τα οικονομικά της, τα έργα της, τον προγραμματισμό της. Κάθε πολίτης πλέον έχει πρόσβαση στις δαπάνες, τα έσοδα, τις κατανομές πόρων, τα προγράμματα, την πρόοδο των έργων και άλλες κατηγορίες πληροφόρησης. Σε αυτόν τον πίνακα θα βλέπετε συγκεντρωμένες τις βασικές κατηγορίες της δημόσιας πληροφορίας που θα κοινοποιεί στο εξής η Περιφέρεια Στερεάς Ελλάδας και μπορείτε να επιλέγετε αυτές που σας ενδιαφέρουν, ώστε να γνωρίζετε περισσότερα.</p>
				
				<p>Ο πίνακας αυτός αποτελεί μέρος ενός ευρύτερου στρατηγικού σχεδίου, με τον τίτλο “Έξυπνη Στερεά”, που φιλοδοξεί να μετατρέψει την Περιφέρεια Στερεάς Ελλάδας σε πρότυπη περιφέρεια που καινοτομεί και δημιουργεί χρήσιμες υπηρεσίες για τους πολίτες και τις επιχειρήσεις της. Μία από αυτές τις κατευθύνσεις είναι η ανοιχτή διακυβέρνηση και το δικαίωμα κάθε πολίτη να έχει πρόσβαση στη δημόσια πληροφορία, να αξιολογεί και να ελέγχει τις αρχές της Περιφέρειας για το έργο και την αποτελεσματικότητά τους. </p>
				<p>&nbsp</p> 
				<p>&nbsp</p>
				<div style="position:absolute; bottom:8px; right:10px; border-radius:3px; border:0x solid #FF9900; background-color: #FFCC00; font-weight:bold; padding:5px 10px; color:#FFFBD0; font-style: italic;   ">Πιλοτική - δοκιμαστική λειτουργία</div>
			</div>
			
		</div>
		  
		<div id="div-wrapper">

			<div class="col-xs-4">
				
				<?php include(locate_template("func-projects-on-map.php")); ?>
				
			</div>

			<div class="col-xs-4">
				
				<?php include(locate_template("func-open-budget.php")); ?>

			</div>
			
			<div class="col-xs-4">
					
				<?php include(locate_template("func-deliberations.php"));  ?>
				
			</div>
			<div class="col-md-12 mx-auto">
				<!--<iframe id="novoville" src="https://dashboard.novoville.com/public/statistics/reports/central_greece"></iframe>-->
			</div>
			
		
		</div>


	<!-- <section id="content" role="main">
		
		<?php  //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php //get_template_part( 'entry' ); ?>
			<?php //comments_template(); ?>
			
		<?php //endwhile; endif; ?>

		
	</section>-->
	
<?php get_footer(); ?>