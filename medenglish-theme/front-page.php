<?php
/*
 * Template for the site front page.
 * Designed to be edited with Elementor.
 */
get_header();
?>

<section class="hero">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <a class="cta" href="#contact">Записатись зараз</a>
    </div>
</section>

<section class="features container">
    <div class="feature">
        <h3>Feature One</h3>
        <p>Describe first feature of your courses.</p>
    </div>
    <div class="feature">
        <h3>Feature Two</h3>
        <p>Describe second feature of your courses.</p>
    </div>
    <div class="feature">
        <h3>Feature Three</h3>
        <p>Describe third feature of your courses.</p>
    </div>
</section>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) : ?>
    <?php // Elementor will handle this location ?>
<?php else : ?>
    <section id="contact" class="container">
        <h2>Contact Us</h2>
        <p>Use Elementor form widget to collect inquiries.</p>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
