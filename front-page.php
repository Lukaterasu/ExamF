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
		while ( $query1->have_posts() ) {   
            $query1->the_post();
            
           
           

            // for($e =0; $e<29;$e++){
                $firstLetter = substr(get_the_title(),4,1);
                $secondLetter= substr(get_the_title(),5,1);
                $text1 = "";
                $text2= "";
                switch($firstLetter){
                    case 1:
                        $text1 = "session: 1";
                        break;
                    case 2:
                        $text1 = "session: 2";
                        break;
                    case 3:
                        $text1 = "session: 3";
                        break;
                    case 4:
                        $text1 = "session: 4";
                        break;
                    case 5:
                        $text1 = "session: 5";
                        break;
                    case 6:
                        $text1 = "session: 6";
                        break;


                }
                switch($secondLetter){
                    case 1:
                        $text2 = "domaine: 1";
                        break;
                    case 2:
                        $text2 = "domaine: 2";
                        break;
                    case 3:
                        $text2 = "domaine: 3";
                        break;
                    case 4:
                        $text2 = "domaine: 4";
                        break;
                    case 5:
                        $text2 = "domaine: 5";
                        break;
                    case 6:
                        $text2 = "domaine: 6";
                        break;


                }
            // }
           
            echo '<h4 class="items">' .$i. '. <a href="#" class="title">' . get_the_title() . '</a>__' .'<span class="text1">'. $text1 .'</span>'. '__'.'<span class="text2">'. $text2 .'</span>'.'</h4>';
            $i++;
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();