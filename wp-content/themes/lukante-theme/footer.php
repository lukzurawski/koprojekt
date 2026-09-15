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

				<footer id="footer" class="site-footer">

					<div class="container">

						<div class="row">

							<!-- LOGO / OPIS -->
							<div class="col-12 col-md-5 col-lg-6">

								<div class="footer__about">

									<a href="<?php echo get_home_url();?>" class="footer__logo">
										<img
											src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/logo.png"
											class="img-fluid"
											alt="KOProjekt"
										>
									</a>

									<p class="footer__description">
										Rzetelne usługi projektowe i doradztwo techniczne
										dla infrastruktury przeładunku, magazynowania
										i dystrybucji surowców.
									</p>

								</div>

							</div>


							<!-- NAWIGACJA -->
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">

								<div class="footer__column">

									<h3 class="footer__title">
										Nawigacja
									</h3>

									<ul class="footer__nav">

										<li>
											<a href="#">
												Strona główna
											</a>
										</li>

										<li>
											<a href="#">
												Oferta
											</a>
										</li>

										<li>
											<a href="#">
												Nasze realizacje
											</a>
										</li>

										<li>
											<a href="#">
												O nas
											</a>
										</li>

										<li>
											<a href="#">
												Kontakt
											</a>
										</li>

									</ul>

								</div>

							</div>


							<!-- KONTAKT -->
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">

								<div class="footer__column">

									<h3 class="footer__title">
										Dane kontaktowe
									</h3>

									<div class="footer__contact">

										<a href="tel:+48664774020" class="footer__contact-item">

											<span>
												+48 664 77 40 20
											</span>

										</a>


										<a href="mailto:biuro@koprojekt.com" class="footer__contact-item">

											<span>
												biuro@koprojekt.com
											</span>

										</a>


										<div class="footer__contact-item">


											<span>
												43-178 Ornontowice
											</span>

										</div>

									</div>

								</div>

							</div>

						</div>


						<!-- DOLNA LINIA -->
						<div class="row">

							<div class="col-12">

								<div class="footer__bottom">

									<p>
										© 2026 KOProjekt. Wszelkie prawa zastrzeżone.
									</p>

								</div>

							</div>

						</div>

					</div>

				</footer>
				
				
				<!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

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

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.usal.dev/latest"></script> 

</body>

</html>