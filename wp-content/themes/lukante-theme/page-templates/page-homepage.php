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

<!-- SECTION HERO -->
<section id="section-hero" class="section-hero--homepage">
    <div class="container">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-start align-items-start flex-column">
                <div class="section-dark-glassbox">
                    <div class="ps-4 pr-4">
                        <img src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_quote.svg" class="img-fluid mb-3 mt-3" alt="quote icon" data-usal="fade-u blur delay-500 duration-1000">
                        <h1 class="section-hero__header" data-usal="fade-u split-letter split-delay-10">Jakość nigdy nie jest dziełem przypadku. Jest zawsze rezultatem przemyślanego działania.</h1>
                        <p class="section-hero__subheader" data-usal="fade-d blur delay-1500 duration-1000">- John Ruskin</p>
                    </div>
                    <div class="section-hero__buttons d-flex flex-row justify-content-center" data-usal="fade-u blur delay-2000 duration-1000">  
                        <a href="#section-about" class="btn m-1">
                            <span>Sprawdź kim jesteśmy</span>
                        </a>
                        <a href="<?php echo get_permalink(0); ?>" class="btn m-1">
                            <span>Zobacz nasze realizacje</span>
                        </a>
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

                    <span class="section-about__eyebrow" data-usal="fade-u blur duration-800">
                        WITAJ NA NASZEJ STRONIE
                    </span>

                    <h2 class="section-about__header" data-usal="fade-u">
                        Projektujemy z myślą
                        o <span>bezpieczeństwie, jakości</span>
                        i efektywności.
                    </h2>

                    <div class="section-about__line"></div>

                    <div class="section-about__text" data-usal="fade-u blur delay-500 duration-1000">
                        <p>
                            KOProjekt to rzetelne usługi projektowe i doradztwo
                            techniczne dla małych i średnich inwestycji.
                        </p>

                        <p>
                            Specjalizujemy się w opracowywaniu dokumentacji
                            projektowej oraz uzgodnieniowej dla stanowisk
                            przeładunkowych podlegających pod Transportowy
                            Dozór Techniczny, zapewniając rozwiązania zgodne z
                            obowiązującymi przepisami i wymaganiami technicznymi.
                        </p>

                        <p>
                            W naszej pracy łączymy techniczną precyzję z
                            partnerskim podejściem, ponieważ wierzymy,
                            że najlepsze rozwiązania powstają dzięki dobrej
                            współpracy i zrozumieniu potrzeb klienta.
                        </p>
                    </div>

                    <a href="<?php echo get_permalink(12); ?>" class="btn">
                        <span>Poznaj nas</span>
                    </a>

                </div>
            </div>


            <!-- PRAWA KOLUMNA -->
            <div class="col-12 col-md-6">
                <div class="row section-about__boxes">

                    <!-- BOX 1 -->
                    <div class="col-12 col-sm-6">
                        <div class="section-about__box">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_documentation.svg" 
                                class="section-about__box-icon img-fluid" 
                                alt=""
                                aria-hidden="true"
                            >

                            <h3 class="section-about__box-header">
                                Dokumentacja<br>
                                projektowa
                            </h3>

                            <div class="section-about__box-line"></div>

                            <p>
                                Kompleksowe opracowanie
                                projektów od koncepcji
                                po dokumentację techniczną.
                            </p>

                        </div>
                    </div>


                    <!-- BOX 2 -->
                    <div class="col-12 col-sm-6">
                        <div class="section-about__box">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_safety.svg" 
                                class="section-about__box-icon img-fluid" 
                                alt=""
                                aria-hidden="true"
                            >

                            <h3 class="section-about__box-header">
                                Zgodność<br>
                                i bezpieczeństwo
                            </h3>

                            <div class="section-about__box-line"></div>

                            <p>
                                Kompleksowe opracowanie
                                projektów od koncepcji
                                po dokumentację techniczną.
                            </p>

                        </div>
                    </div>


                    <!-- BOX 3 -->
                    <div class="col-12 col-sm-6">
                        <div class="section-about__box">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_partnership.svg" 
                                class="section-about__box-icon img-fluid" 
                                alt=""
                                aria-hidden="true"
                            >

                            <h3 class="section-about__box-header">
                                Partnerstwo
                            </h3>

                            <div class="section-about__box-line"></div>

                            <p>
                                Kompleksowe opracowanie
                                projektów od koncepcji
                                po dokumentację techniczną.
                            </p>

                        </div>
                    </div>


                    <!-- BOX 4 -->
                    <div class="col-12 col-sm-6">
                        <div class="section-about__box">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/icon_quality.svg" 
                                class="section-about__box-icon img-fluid" 
                                alt=""
                                aria-hidden="true"
                            >

                            <h3 class="section-about__box-header">
                                Jakość<br>
                                i doświadczenie
                            </h3>

                            <div class="section-about__box-line"></div>

                            <p>
                                Kompleksowe opracowanie
                                projektów od koncepcji
                                po dokumentację techniczną.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION SERVICES -->
<section id="section-services" class="section-services--homepage">

    <img 
        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/services_lines.svg" 
        class="section-services__lines" 
        alt="" 
        aria-hidden="true"
    >

    <div class="container">
        <div class="row align-items-center">

            <!-- LEWA KOLUMNA - ZDJĘCIE -->
            <div class="col-12 col-md-6">
                <div class="section-services__imagebox" data-usal="fade-u blur duration-1000">

                    <img 
                        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/services.jpg" 
                        class="section-services__image img-fluid" 
                        alt="Stanowisko przeładunkowe"
                    >

                </div>

                <div class="d-flex justify-content-center" data-usal="fade-u blur delay-500 duration-1000">
                    <a href="<?php echo get_permalink(0); ?>" class="btn">
                        <span>Nasze realizacje</span>
                    </a>
                </div>
            </div>


            <!-- PRAWA KOLUMNA - USŁUGI -->
            <div class="col-12 col-md-6">
                <div class="section-services__content">

                    <span 
                        class="section-services__eyebrow"
                        data-usal="fade-u blur duration-800"
                    >
                        CO ROBIMY?
                    </span>

                    <h2 
                        class="section-services__header">
                        Poznaj <span>nasze usługi</span>
                    </h2>

                    <div class="section-services__line"></div>


                    <div class="section-services__list">

                        <!-- USŁUGA 1 -->
                        <div 
                            class="section-services__item"
                            data-usal="fade-u blur delay-300 duration-800"
                        >
                            <div class="section-services__icon">
                                <span>✓</span>
                            </div>

                            <p>
                                Opracowywanie dokumentacji projektowej infrastruktury
                                technicznej – od stanowisk rozładunkowych, poprzez
                                magazynowanie, aż po dystrybucję surowców do procesu
                                produkcyjnego.
                            </p>
                        </div>


                        <!-- USŁUGA 2 -->
                        <div 
                            class="section-services__item"
                            data-usal="fade-u blur delay-450 duration-800"
                        >
                            <div class="section-services__icon">
                                <span>✓</span>
                            </div>

                            <p>
                                Przygotowywanie dokumentacji uzgodnieniowej dla instalacji
                                podlegających Transportowemu Dozorowi Technicznemu.
                            </p>
                        </div>


                        <!-- USŁUGA 3 -->
                        <div 
                            class="section-services__item"
                            data-usal="fade-u blur delay-600 duration-800"
                        >
                            <div class="section-services__icon">
                                <span>✓</span>
                            </div>

                            <p>
                                Doradztwo techniczne w zakresie instalacji przeładunku
                                i magazynowania surowców.
                            </p>
                        </div>


                        <!-- USŁUGA 4 -->
                        <div 
                            class="section-services__item"
                            data-usal="fade-u blur delay-750 duration-800"
                        >
                            <div class="section-services__icon">
                                <span>✓</span>
                            </div>

                            <p>
                                Audyty techniczne istniejących instalacji.
                            </p>
                        </div>


                        <!-- USŁUGA 5 -->
                        <div 
                            class="section-services__item"
                            data-usal="fade-u blur delay-900 duration-800"
                        >
                            <div class="section-services__icon">
                                <span>✓</span>
                            </div>

                            <p>
                                Wsparcie techniczne na etapie projektowania,
                                realizacji oraz modernizacji inwestycji.
                            </p>
                        </div>

                    </div>


                    <div 
                        class="d-flex justify-content-center justify-content-md-start"
                        data-usal="fade-u blur delay-1100 duration-1000"
                    >
                        <a href="<?php echo get_permalink(0); ?>" class="btn">
                            <span>Zobacz pełną ofertę</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

<!-- section testimonials -->
 <section id="section-testimonials" class="section-testimonials--homepage">

    <div class="container">

        <!-- NAGŁÓWEK -->
        <div class="row">
            <div class="col-12">

                <div class="section-testimonials__heading text-center">

                    <span 
                        class="section-testimonials__eyebrow"
                        data-usal="fade-u blur duration-800"
                    >
                        OPINIE KLIENTÓW
                    </span>

                    <h2 
                        class="section-testimonials__header"
                        data-usal="fade-u split-letter split-delay-20"
                    >
                        Zaufanie, na którym budujemy wspólne sukcesy
                    </h2>

                    <div class="section-testimonials__line"></div>

                </div>

            </div>
        </div>


        <!-- OPINIE -->
        <div class="row">
            <div class="col-12">

                <div class="section-testimonials__slider">

                    <div class="section-testimonials__track">


                        <!-- OPINIA 1 -->
                        <div class="section-testimonials__item">
                            <div class="section-testimonials__box">

                                <div class="section-testimonials__quote">
                                    ”
                                </div>

                                <div class="section-testimonials__text">
                                    <p>
                                        Współpraca z KOProjekt to gwarancja
                                        profesjonalizmu i terminowości.
                                        Dokumentacja została przygotowana z
                                        najwyższą starannością, a proces
                                        uzgodnień przebiegł sprawnie i
                                        bezproblemowo.
                                    </p>
                                </div>

                                <div class="section-testimonials__author">
                                    <strong>
                                        Kierownik inwestycji
                                    </strong>

                                    <span>
                                        Branża chemiczna Firma Sp. z o.o.
                                    </span>
                                </div>

                            </div>
                        </div>


                        <!-- OPINIA 2 -->
                        <div class="section-testimonials__item">
                            <div class="section-testimonials__box">

                                <div class="section-testimonials__quote">
                                    ”
                                </div>

                                <div class="section-testimonials__text">
                                    <p>
                                        Współpraca z KOProjekt to gwarancja
                                        profesjonalizmu i terminowości.
                                        Dokumentacja została przygotowana z
                                        najwyższą starannością, a proces
                                        uzgodnień przebiegł sprawnie i
                                        bezproblemowo.
                                    </p>
                                </div>

                                <div class="section-testimonials__author">
                                    <strong>
                                        Kierownik inwestycji
                                    </strong>

                                    <span>
                                        Branża chemiczna Firma Sp. z o.o.
                                    </span>
                                </div>

                            </div>
                        </div>


                        <!-- OPINIA 3 -->
                        <div class="section-testimonials__item">
                            <div class="section-testimonials__box">

                                <div class="section-testimonials__quote">
                                    ”
                                </div>

                                <div class="section-testimonials__text">
                                    <p>
                                        Współpraca z KOProjekt to gwarancja
                                        profesjonalizmu i terminowości.
                                        Dokumentacja została przygotowana z
                                        najwyższą starannością, a proces
                                        uzgodnień przebiegł sprawnie i
                                        bezproblemowo.
                                    </p>
                                </div>

                                <div class="section-testimonials__author">
                                    <strong>
                                        Kierownik inwestycji
                                    </strong>

                                    <span>
                                        Branża chemiczna Firma Sp. z o.o.
                                    </span>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>


        <!-- STEROWANIE -->
        <div class="row">
            <div class="col-12">

                <div class="section-testimonials__controls">

                    <button 
                        type="button" 
                        class="section-testimonials__arrow section-testimonials__arrow--prev"
                        aria-label="Poprzednie opinie"
                    >
                        <span>←</span>
                    </button>

                    <button 
                        type="button" 
                        class="section-testimonials__arrow section-testimonials__arrow--next"
                        aria-label="Następne opinie"
                    >
                        <span>→</span>
                    </button>

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

                    <a href="<?php echo get_permalink(0); ?>" class="btn">
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