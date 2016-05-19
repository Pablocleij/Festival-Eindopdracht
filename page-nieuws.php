<?php 

// Grabs the header
require 'header.php';

?>


<!-- Main content-->

<div id="maincontent">
	
	
	<div id="nieuwsartikelfeed">	
	<?php 
		// Arguments for the query
		$args = array (
		    'post_type'              => array( 'nieuws' ),
		    'posts_per_page'         => '4',
		 );

		// the Query
		$query = new WP_Query( $args );

		// the Loop
		if ( $query->have_posts() ) {
		    while ( $query->have_posts() ) {
		        $query->the_post();
		        $y = get_permalink();
		        echo "<div class='container'>";
			        echo "<div class='row'>";
				        echo "<div id='thumbnail'  class=''>";
					        echo "<a href='$y'>";
					       	   the_post_thumbnail('post-thumb');
					        echo "</a>";
				        echo "</div>";
				        echo "<div id='nieuwsartikel' class=''>";
					        echo "<h1>";
						        echo "<a href='$y'>";	
						        the_title();
						        echo "</a>";
					        echo "</h1>";
					        echo "<p>Geschreven door ";	
					        	the_author();
					        echo "</p>";
					        echo "<br>";
					        	the_excerpt();
					        echo "<button class='readmore' ><a href='$y'>  Lees meer </a></button>";
				    	echo "</div>";
				   	echo "</div>";
		    	echo "</div>";
		    }
		} else {
		    // no posts found
		}

			// Restore original Post Data
			wp_reset_postdata();

			?>
		</div>

</div>

<?php 

// Grabs the footer
require 'footer.php';

?>


