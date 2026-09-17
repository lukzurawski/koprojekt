<?php
/**
* Template Name: Page-Portfolio
*
* Template for displaying an portfolio page
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
                        <h1 class="section-hero__header section-hero__header--global" data-usal="fade-u">Realizacje</h1>
                        <p class="section-hero__subheader--global" data-usal="fade-u split-letter split-delay-10">Wieloletnie doświadczenie, dziesiątki zrealizowanych projektów i zaufanie klientów z różnych gałęzi przemysłu.</p>
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

                    <div class="section-about__text" data-usal="fade-u blur delay-500 duration-1000">
                        <p class="fw-bold">
                            Wieloletnie doświadczenie zaowocowało ponad 460 dokumentacjami uzgodnieniowymi (projektowymi i modernizacyjnymi) dla ramion nalewczych i elastycznych przewodów (węży) dla takich mediów jak kwasy, ługi, asfalty, oleje, żywice, paliwa, ect.
                        </p>
                        <p>
                            Zdobyte doświadczenie pozwala nam realizować zarówno projekty nowych instalacji, jak i modernizacje istniejących obiektów, z zachowaniem najwyższych standardów bezpieczeństwa, zgodności z obowiązującymi przepisami oraz wymaganiami Transportowego Dozoru Technicznego.
                        </p>
                        <p class="fw-bold">
                            Poza dokumentacją dla stanowisk przeładunkowych zrealizowaliśmy również wiele projektów związanych z infrastrukturą technologiczną dla różnych gałęzi przemysłu. Zdobyte doświadczenie pozwala nam podejmować się zarówno standardowych, jak i bardziej wymagających inwestycji.
                        </p>
                        <p>
                            Najlepszym potwierdzeniem jakości naszej pracy jest zaufanie klientów, którzy regularnie powierzają nam kolejne projekty i od lat korzystają z naszego wsparcia.
                        </p>

                    </div>

                </div>
            </div>


            <!-- PRAWA KOLUMNA -->
            <div class="col-12 col-md-6">
                    <div class="section-about__box section__imagebox">

                            <img 
                                src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/portfolio-baner.png" 
                                class="section-services__image img-fluid section__image" 
                                alt=""
                                aria-hidden="true"
                            >

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
                    <p class="section-cta-global__txt">Na życzenie przedstawimy listę referencyjną obejmującą wykonane realizacje oraz referencje od naszych klientów.</p>
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