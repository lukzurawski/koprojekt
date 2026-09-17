<?php
/**
* Template Name: Page-Contact
*
* Template for displaying a contact page
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
                        <h1 class="section-hero__header section-hero__header--global">Kontakt</h1>
                        <p class="section-hero__subheader--global" data-usal="fade-u">Masz pytania dotyczące naszych usług
lub chcesz omówić swój projekt?</p>
<p class="section-hero__subheader--global" data-usal="fade-u">
Skontaktuj się z nami - chętnie pomożemy.</p>
                    </div>
                </div>
            </div>
		</div>
    </div>
</section>

<!-- SECTION FORM -->

  <section id="section-contact" class="section-about--homepage pt-5">

    <img 
        src="<?php echo get_home_url();?>/wp-content/themes/lukante-theme/img/about_lines.svg" 
        class="section-about__lines" 
        alt="" 
        aria-hidden="true"
    >

    <div class="container contact-card" data-aos="fade-in">
      <div class="row">

        <div class="col-lg-7">
          <div class="contact-card__form mb-3 mb-md-0">
            <h4 class="contact-card-form__title">Wyślij wiadomość</h4>
            <?php
            echo do_shortcode('[wpforms id="28"]');
            ?>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="right-contactsidebar">
            <h4 class="text-center right-contactsidebar__header">Dane kontaktowe</h4>
            <div class="right-contactsidebar__contacts">
              <h2 class="mb-0 mt-3 mb-5 text-center"><p><strong>KOPROJEKT</strong></p><p>Katarzyna Opaczyńska</p></h2>

              <div class="mb-0 ms-md-4 d-flex align-items-center">

                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.5049 31.01H21.7069V29.4595H15.5049V31.01ZM10.8534 35.6615C10.0007 35.6615 9.27038 35.3576 8.66259 34.7498C8.05479 34.142 7.75141 33.4122 7.75244 32.5605V4.65154C7.75244 3.79876 8.05634 3.06848 8.66414 2.46068C9.27193 1.85289 10.0017 1.54951 10.8534 1.55054H26.3584C27.2112 1.55054 27.9415 1.85444 28.5493 2.46223C29.1571 3.07003 29.4605 3.7998 29.4594 4.65154V32.5605C29.4594 33.4133 29.1555 34.1436 28.5477 34.7514C27.9399 35.3592 27.2102 35.6625 26.3584 35.6615H10.8534ZM10.8534 24.808H26.3584V9.30303H10.8534V24.808Z" fill="#2589D8" />
                </svg>
                <div>
                  <a href="tel:+48664774020" class="mb-0 d-flex align-items-center">
                    +48 664 77 40 20
                  </a>
                </div>
              </div>

              <div class="mb-0 ms-md-4 d-flex align-items-center">
                <a href="mailto:kop@koprojekt.com" class="mb-2 mt-4 d-flex align-items-center">
                  <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.0098 12.4745L18.6058 20.2269L6.20183 12.4745V9.37346L18.6058 17.1259L31.0098 9.37346M31.0098 6.27246H6.20183C4.48077 6.27246 3.10083 7.6524 3.10083 9.37346V27.9794C3.10083 28.8019 3.42754 29.5906 4.00909 30.1722C4.59064 30.7537 5.37939 31.0804 6.20183 31.0804H31.0098C31.8322 31.0804 32.621 30.7537 33.2025 30.1722C33.7841 29.5906 34.1108 28.8019 34.1108 27.9794V9.37346C34.1108 8.55102 33.7841 7.76227 33.2025 7.18072C32.621 6.59917 31.8322 6.27246 31.0098 6.27246Z" fill="#2589D8" />
                  </svg>
                  kop@koprojekt.com
                </a>
              </div>

              <div class="mb-0 ms-md-4 mt-3 d-flex align-items-center">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.6061 18.7474C19.4589 18.7474 20.1892 18.4435 20.797 17.8357C21.4038 17.229 21.7071 16.4992 21.7071 15.6464C21.7071 14.7936 21.4038 14.0634 20.797 13.4556C20.1892 12.8488 19.4589 12.5454 18.6061 12.5454C17.7534 12.5454 17.0236 12.8488 16.4168 13.4556C15.809 14.0634 15.5051 14.7936 15.5051 15.6464C15.5051 16.4992 15.809 17.229 16.4168 17.8357C17.0236 18.4435 17.7534 18.7474 18.6061 18.7474ZM18.6061 34.2524C14.4456 30.7121 11.3384 27.4235 9.28454 24.3866C7.22961 21.3507 6.20215 18.5407 6.20215 15.9565C6.20215 12.0803 7.44927 8.9922 9.9435 6.69229C12.4367 4.39238 15.3242 3.24243 18.6061 3.24243C21.888 3.24243 24.7756 4.39238 27.2688 6.69229C29.763 8.9922 31.0101 12.0803 31.0101 15.9565C31.0101 18.5407 29.9832 21.3507 27.9293 24.3866C25.8744 27.4235 22.7666 30.7121 18.6061 34.2524Z" fill="#2589D8" />
                </svg>
                <div>
                  <p class="m-0">
                    ul. Akacjowa 7/19
                  </p>
                  <p class="m-0">43-178 Ornontowice</p>
                </div>
              </div>

                <div class="mb-0 ms-md-5 mt-4 d-flex align-items-center">
                    <div>
                        <p class="m-0">
                            NIP: 644-305-08-79
                        </p>
                    </div>
                </div>

              <div class="d-flex justify-content-center align-items-center flex-column mt-5">
                <img src="<?php echo get_home_url(); ?>/wp-content/themes/lukante-theme/img/logo.png" alt="" class="p-3">
              </div>
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