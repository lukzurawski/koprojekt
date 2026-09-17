<?php
/**
* Template Name: Page-Offer
*
* Template for displaying an offer page
*
* @package Understrap
*/
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;
  
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main>

<!-- SECTION HERO -->
<section id="section-hero" class="section-hero--homepage section-hero--global">
    <div class="container">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-start align-items-start flex-column">
                <div class="section-dark-glassbox section-dark-glassbox--global">
                    <div class="ps-4 pr-4">
                        <h1 class="section-hero__header section-hero__header--global">Oferta</h1>
                        <p class="section-hero__subheader--global" data-usal="fade-u">Specjalizujemy się w kompleksowym opracowywaniu dokumentacji technicznej dla stanowisk nalewczych i odbiorczych (NO) oraz infrastruktury związanej z przeładunkiem, magazynowaniem i dystrybucją surowców.</p>
                    </div>
                </div>
            </div>
		</div>
    </div>
</section>

<!-- SECTION ABOUT -->
<section id="section-about" class="section-about--homepage">
    <img 
        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/about_lines.svg" 
        class="section-about__lines" 
        alt="" 
        aria-hidden="true"
    >

    <div class="container">

        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-start align-items-start flex-column">
                <div class="section-about__content">

                    <h2 class="section__header"
                            data-usal="fade-u blur duration-1000">
                    Zakres <span class="color100">naszych usług</span> obejmuje:
                    </h2>

                    <div class="section-about__line"></div>

                </div>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-md-4 mb-2">
                <div class="section-school__box section-offer__box" data-usal="fade-d blur delay-700 duration-500">
                    <div class="d-flex justify-content-start align-items-start flex-column mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_note.svg" class="img-fluid mb-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Opracowanie <span class="color150">Projektów Budowlanych</span> (wielobranżowych)</p>
                    </div>
                    <p class="section-school__box-subheader">niezbędnych do uzyskania pozwolenia na budowę</p>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="section-school__box section-offer__box" data-usal="fade-d blur delay-700 duration-500">
                    <div class="d-flex justify-content-start align-items-start flex-column mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_note.svg" class="img-fluid mb-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Przygotowanie <span class="color150">Projektów Wykonawczych</span> w branżach:</p>
                    </div>
                        <ul class="section-school__box-subheader">
                            <li>technologiczno-mechanicznej,</li>
                            <li>konstrukcyjno-budowlanej,</li>
                            <li>sanitarnej i instalacyjnej,</li>
                            <li>elektrycznej,</li>
                            <li>AKPiA (Aparatura Kontrolno-Pomiarowa i Automatyka),</li>
                        </ul>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="section-school__box section-offer__box" data-usal="fade-d blur delay-700 duration-500">
                    <div class="d-flex justify-content-start align-items-start flex-column mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_note.svg" class="img-fluid mb-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Opracowanie dokumentacji uzgodnieniowej dla  <span class="color150">Transportowego Dozoru Technicznego (TDT) </span></p>
                    </div>
                    <p class="section-school__box-subheader">oraz kompleksową obsługę procesu jej uzgodnienia.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- SECTION CTA -->
 <section id="section-cta" class="section-cta--global">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center flex-row mb-3">
                    <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_check.svg" class="img-fluid me-3 section-cta__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                    <h3>
                        W zależności od potrzeb inwestycji zapewniamy również wsparcie formalno-prawne, obejmujące:
                    </h3>
                </div>

                        <ul class="section-cta-global__txt section-cta-global__txt--dark" data-usal="fade-u">
                            <li>uzyskanie decyzji o warunkach zabudowy,</li>
                            <li>uzyskanie decyzji o środowiskowych uwarunkowaniach,</li>
                            <li>przygotowanie i uzyskanie innych decyzji oraz uzgodnień administracyjnych niezbędnych do realizacji inwestycji.</li>
                        </ul>
            </div>
        </div>
    </div>
 </section>


 <!-- SECTION CTA with BOX -->
 <section id="section-cta" class="section-cta-box--global">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="section-cta--box d-flex justify-content-center align-items-center flex-row" data-usal="fade-d blur delay-500 duration-1000">
                    <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_people.svg" class="img-fluid me-3 section-cta__icon" alt="quote icon">
                    <div>
                        <p class="section-cta-global__txt section-cta-global__txt--light">Zapewniamy kompleksową obsługę procesu projektowego – od koncepcji i dokumentacji, poprzez uzgodnienia, aż po wsparcie na etapie realizacji inwestycji.</p>
                        <p class="section-cta-global__txt">Dzięki temu nasi klienci zyskują jednego partnera odpowiedzialnego za sprawny przebieg całego procesu.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>



<!-- SECTION CTA CONTACT -->
 <section id="section-cta-contact" class="section-cta-contact--homepage">

    <!-- DEKORACYJNE LINIE -->
    <img 
        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/cta_lines_left.svg" 
        class="section-cta-contact__lines section-cta-contact__lines--left" 
        alt="" 
        aria-hidden="true"
    >

    <img 
        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/cta_lines_right.svg" 
        class="section-cta-contact__lines section-cta-contact__lines--right" 
        alt="" 
        aria-hidden="true"
    >


    <div class="container">
        <div class="row align-items-center">

            <!-- TEKST -->
            <div class="col-12 col-md-6">

                <div 
                    class="section-cta-contact__content"
                    data-usal="fade-u blur duration-1000"
                >

                    <h2 class="section-cta-contact__header">
                        Masz projekt?
                    </h2>

                    <p class="section-cta-contact__subheader">
                        Porozmawiajmy o współpracy.
                    </p>

                    <p class="section-cta-contact__text">
                        Skontaktuj się z nami - chętnie odpowiemy na pytania
                        <br class="d-none d-md-block">
                        i przygotujemy rozwiązanie dopasowane do Twoich potrzeb.
                    </p>

                </div>

            </div>


            <!-- PRZYCISK -->
            <div class="col-12 col-md-4">

                <div 
                    class="section-cta-contact__button d-flex justify-content-md-end justify-content-start"
                    data-usal="fade-u blur delay-500 duration-1000"
                >

                    <a href="<?php echo get_permalink(18); ?>" class="btn">
                        <span>Skontaktuj się z nami</span>
                    </a>

                </div>

            </div>

        </div>
    </div>

</section>

</main>

<?php
get_footer();