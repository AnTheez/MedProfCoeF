<?php
/*
 * Template for the site front page.
 * Designed to be edited with Elementor.
 */
get_header();
?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <a class="cta" href="#contact">Записатись зараз</a>
        </div>
        <div class="hero-image">
            <img src="https://via.placeholder.com/600x400.png?text=Medical+English" alt="Course preview">
        </div>
    </div>
</section>

<section class="features container">
    <div class="feature">
        <h3>Індивідуальні курси</h3>
        <p>Персональні заняття для медиків різних спеціальностей.</p>
    </div>
    <div class="feature">
        <h3>Онлайн-платформа</h3>
        <p>Сучасні матеріали та інтерактивні завдання в зручному форматі.</p>
    </div>
    <div class="feature">
        <h3>Сертифікат після завершення</h3>
        <p>Отримайте підтвердження ваших знань англійської мови.</p>
    </div>
</section>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) : ?>
    <?php // Elementor will handle this location ?>
<?php else : ?>
    <section id="contact" class="container contact-section">
        <h2>Зв'яжіться з нами</h2>
        <p>Використайте віджет форми Elementor для надсилання заявок.</p>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
