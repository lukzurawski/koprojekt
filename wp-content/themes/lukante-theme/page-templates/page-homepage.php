<?php
/**
* Template Name: Page-Homepage
*
* Template for displaying a homepage
*
* @package Understrap
*/
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;
  
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main>

<section id="section-hero" class="section-hero--homepage">
    <div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="section-hero__header" data-usal="fade-u split-letter split-delay-100">Berger Legal</h1>
            </div>
		</div>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center flex-column align-items-center">
                <p class="section-hero__subheader" data-usal="fade-d blur delay-400 duration-500">Zapraszamy do kontaktu</p>
                <span class="section-hero__subheader--p" data-usal="fade blur delay-600 duration-500">email: <a href="mailto:office@bergerlegal.pl">office@bergerlegal.pl</a></span>
                <p class="section-hero__subheader--p" data-usal="fade blur delay-600 duration-500">tel. +48 505 101 791, +48 33 814 16 17</p>
            </div>
        </div>
    </div>
</section>

</main>

<?php
get_footer();