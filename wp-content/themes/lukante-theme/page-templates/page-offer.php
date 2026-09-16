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
                        <h1 class="section-hero__header section-hero__header--global" data-usal="fade-u">O nas</h1>
                        <p class="section-hero__subheader--global" data-usal="fade-u split-letter split-delay-10">Łączymy wiedzę inżynierską z praktycznym doświadczeniem, aby tworzyć bezpieczne i funkcjonalne rozwiązania.</p>
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

            <!-- LEWA KOLUMNA -->
            <div class="col-12 col-md-6 d-flex justify-content-start align-items-start flex-column">
                <div class="section-about__content">

                    <h2 class="section-header--global" data-usal="fade-u">
                        Nazywam się <strong>Katarzyna <span class="color100">Opaczyńska</span></strong> i jestem założycielką firmy
                        <span class="color100"><strong>KOProjekt</strong></span>.
                    </h2>

                    <div class="section-about__line"></div>

                    <div class="section-about__text" data-usal="fade-u blur delay-500 duration-1000">
                        <p>
                            Od lat zajmuję się projektowaniem infrastruktury technicznej oraz opracowywaniem dokumentacji dla instalacji przeładunkowych i magazynowych. W swojej pracy łączę wiedzę inżynierską z praktycznym podejściem do realizacji inwestycji, dzięki czemu tworzę rozwiązania zgodne z wymaganiami technicznymi, bezpieczne i funkcjonalne.
                        </p>
                    </div>

                        <div class="section-about__box--global mt-5" data-usal="fade-u blur delay-500 duration-1000">

                            <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_quote.svg" class="img-fluid mb-3 mt-3" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">

                            <p>
                                Wierzę, że nawet najbardziej wymagające projekty można realizować w atmosferze dobrej współpracy, wzajemnego zaufania i spokoju. Dlatego oprócz wiedzy technicznej wnoszę do każdego projektu zaangażowanie, odpowiedzialność i otwartość na potrzeby klienta. Jestem przekonana, że najlepsze rozwiązania powstają tam, gdzie doświadczenie spotyka się z dialogiem.
                            </p>

                        </div>


                </div>
            </div>


            <!-- PRAWA KOLUMNA -->
            <div class="col-12 col-md-6">
                    <div class="section-about__box section__imagebox">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/person.jpg" 
                                class="section-services__image img-fluid section__image" 
                                alt=""
                                aria-hidden="true"
                            >

                    </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION CTA -->
 <section id="section-cta" class="section-cta--global">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 d-flex justify-content-center align-items-center flex-row">
                    <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon-edu.svg" class="img-fluid me-3 section-cta__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                    <p class="section-cta-global__txt" data-usal="fade-u">Swoje wykształcenie inżynierskie systematycznie rozwijam, poszerzając kompetencje na studiach podyplomowych z zakresu zarządzania projektami, bezpieczeństwa technicznego oraz komunikacji i rozwoju kompetencji interpersonalnych.</p>
            </div>
        </div>
    </div>
 </section>

 <section id="section-school" class="section-school--aboutuspage">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-start flex-column">
                <h2 class="section__header"
                        data-usal="fade-u blur delay-500 duration-1000">
                   Ukończyłam:
                </h2>
                <div class="section__header-line"></div>
            </div>
        </div>
        <div class="row mt-3">

            <div class="col-md-3">
                <div class="section-school__box" data-usal="fade-u blur delay-500 duration-500">
                    <div class="d-flex justify-content-start align-items-center flex-row mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon-edu.svg" class="img-fluid me-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">WSB</p>
                    </div>
                    <p class="section-school__box-subheader">Akademia Project Managera – Zarządzanie Projektami</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="section-school__box" data-usal="fade-d blur delay-700 duration-500">
                    <div class="d-flex justify-content-start align-items-center flex-row mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon-edu.svg" class="img-fluid me-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Główny Instytut Górnictwa (GIG)</p>
                    </div>
                    <p class="section-school__box-subheader">Bezpieczeństwo techniczne w przestrzeniach zagrożonych wybuchem</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="section-school__box" data-usal="fade-u blur delay-900 duration-500">
                    <div class="d-flex justify-content-start align-items-center flex-row mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon-edu.svg" class="img-fluid me-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Wyższą Szkołę Informatykii Zarządzania w Rzeszowie</p>
                    </div>
                    <p class="section-school__box-subheader">Coaching i NLP</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="section-school__box" data-usal="fade-d blur delay-1100 duration-500">
                    <div class="d-flex justify-content-start align-items-center flex-row mb-3">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon-edu.svg" class="img-fluid me-2 section-school__icon" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="section-school__box-header">Politechnikę Śląską</p>
                    </div>
                    <p class="section-school__box-subheader">Inżynieria Chemiczna i Procesowa</p>
                </div>
            </div>

        </div>
    </div>
 </section>


 <!-- SECTION CTA with BOX -->
 <section id="section-cta" class="section-cta-box--global">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="section-cta--box d-flex justify-content-center align-items-center flex-row" data-usal="fade-d blur delay-500 duration-1000">
                    <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_people.svg" class="img-fluid me-3 section-cta__icon" alt="quote icon">
                    <p class="section-cta-global__txt">Łączenie wiedzy technicznej z umiejętnościami zarządzania projektami i skutecznej komunikacji pozwala mi prowadzić inwestycje w sposób uporządkowany, efektywny i oparty na dobrej współpracy z klientem.</p>
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

                    <a href="#" class="btn">
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