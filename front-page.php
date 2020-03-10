<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <ul class="petitMenu">
                <li><a href="#" style="text-decoration: none" target="_blank" rel="noopener noreferrer">Cours</a></li>
                <li><a href="#" style="text-decoration: none"target="_blank" rel="noopener noreferrer">Ateliers</a></li>
                <li><a href="#" style="text-decoration: none" target="_blank" rel="noopener noreferrer">Événement</a></li>
                <li><a href="#" style="text-decoration: none" target="_blank" rel="noopener noreferrer">Nouvelle</a></li>
            </ul>
            <h2>Les cours du programme de Techniques d'intégration multimédia du collège de Maiosnnueve</h2>
            <div class ="petitGrid" style="display: grid; grid-template-columns:repeat(5,1fr); grid-template-rows:repeat(7, 1fr);">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		$args = array(
            "category_name" => "cours",
			"posts_per_page"=> 30,
            'orderby'=> 'title', 
			"order"=> "ASC"
		);
        $query1 = new WP_Query($args);
        $i=1;
        $arrayy = array_fill(0, 29, array_fill(0, 2, 0));
		while ( $query1->have_posts() ) {   
            $query1->the_post();

            

            
           
        
                $firstLetter = substr(get_the_title(),4,1);
                $secondLetter= substr(get_the_title(),5,1);
                $r = 0;
                $c = 0; 
               

    
                    switch ($firstLetter) {

                        case 1:
                        $r=2;
                            break;
                        case 2:
                        $r=3;
                            break;
                        case 3:
                        $r=4;
                            break;
                        case 4:
                            $r=5;
                            break;
                        case 5:
                            $r=6;
                            break;
                        case 6:
                            $r=7;
                            break;
                
                        default: $r=0;
                    }
    
                    switch ($secondLetter) {
                        case 1:
                        $c=1;
                            break;
                        case 2:
                        $c=2;
                            break;
                        case 3:
                        $c=3;
                            break;
                        case 4:
                            $c=4;
                            break;
                        case 5:
                            $c=5;
                            break;
                        case 6:
                            $c=6;
                            break;
                
                        default: $c=0;
                    }
                    $arrayy[$i][0] = $r;
                    $arrayy[$i][1] = $c;
                    // foreach ($arrayy as $current_key => $current_array) {
                    //     $search_key = array_search($current_array, $arrayy);
                    //     if ($current_key != $search_key) {
                    //         $gridArea = $r ."/". $c ;
                    //         echo '<h3 class="grid-cell dup" style="grid-area:'.$gridArea.'">'.'<p><a href="#">'.substr(get_the_title(),0,7).'</a><p>'.'</h3>';
                    //         break;
                    //     } else{
                    //         $gridArea = $r ."/". $c ;
                    //         echo '<h3 class="grid-cell" style="grid-area:'.$gridArea.'">'.'<p><a href="#">'.substr(get_the_title(),0,7).'</a><p>'.'</h3>';
                    //         break;
                    //     }
                      
                    // }
                    
             
                     $gridArea = $r ."/". $c ;

                     echo '<h3 class="grid-cell" style="grid-area:'.$gridArea.'">'.'<p><a href="#">'.substr(get_the_title(),0,7).'</a><p>'.'</h3>';
                   
                
               
                

        

             
        }
        
       
		?>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();