<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div id="wrapper-footer">

	<div class="container-fluid site-footer__wrapper">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer">

					<div class="container">
						<div class="row">
							<div class="align-items-center col-md-3 d-flex flex-column align-items-center">
								<img src="<?php echo get_home_url(); ?>/wp-content/themes/lukante-theme/img/logo.png" alt="" class="footer-logo mb-4">
									<p class="fs-6 mb-0">
										<?php
											echo "&copy; " . date("Y") . " Berger Legal";
										?>
									</p>
									<p class="fs-6 mb-2">Wszelkie prawie zastrzeżone</p>
							
							</div>
							<div class="col-md-6 d-flex justify-start flex-column align-items-center align-items-center">
								<div class="footer-menu mb-4">
									<a href="/#" class="mb-0">O nas</a>
									<a href="/#section-spec" class="mb-0">Specjalizacje</a>
									<a href="/#" class="mb-0">Webinary</a>
									<a href="/#" class="mb-0">Kontakt</a>
								</div>
								<p class="footer-desc">
									Od 2010 roku Kancelaria Berger Legal z siedzibą w Bielsku-Białej prowadzi kompleksową obsługę prawną na rzecz przedsiębiorców oraz klientów indywidualnych, skutecznie łącząc wieloletnie doświadczenie z nowoczesnym podejściem do świadczenia usług prawnych. Wspieramy zarówno polskie, jak i zagraniczne podmioty gospodarcze, zapewniając rzetelne, praktyczne i dopasowane do potrzeb klienta doradztwo prawne na terenie całego kraju
								</p>
								<a href="#" class="mt-3">Polityka prywatności</a>
							</div>
							<div class="col-md-3 d-flex justify-start flex-column align-items-center align-items-md-start footer-cont mt-4">
								<a href="mailto:office@bergerlegal.pl" class="mb-3 d-flex align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="$color400"
											class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
											<path
												d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
										</svg>
										office@bergerlegal.pl
								</a>
								<a href="tel:+48338141617" class="mb-3 d-flex align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="$color400"
											class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
										</svg>+48 33 814 16 17
								</a>
									<p class="mb-0">ul. Thomasa W. Wilsona 7 lok. 9</p>
									<p class="mb-0">43-300 Bielsko-Biała</p>
							</div>	
						</div>
					</div>

				</footer><!-- #colophon -->

				<div class="footer-copyright">
					<div class="container">
						<div class="row pt-3">
							<div class="col-12">
								<p class="d-flex align-items-center justify-content-end">
									<span>Design &amp; Dev:</span>
									<a href="https://lukante.pl" class="ms-1 fw-bold copyright-link">Lukante</a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.usal.dev/latest"></script> 

</body>

</html>