<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.scss).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscrore
 */
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<?php
    get_header();
?>
    <main>
        <?php
            if ( have_posts() ) :
                while(have_posts()):
                    the_post();
                    the_title("<h1 style='color: crimson'>", "</h1>");
                    the_content();
                endwhile;
            endif;
        ?>
    </main>
<?php
    get_footer();
?>
</html>

