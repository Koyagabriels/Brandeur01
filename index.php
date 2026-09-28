<?php /** Brandeur01 Master Page Orchestrator Layout */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/section', 'header'); ?>
    <main>
        <?php get_template_part('template-parts/section', 'hero'); ?>
        <?php get_template_part('template-parts/section', 'problems'); ?>
        <?php get_template_part('template-parts/section', 'diagnostic'); ?>
        <?php get_template_part('template-parts/section', 'model'); ?>
        <?php get_template_part('template-parts/section', 'capabilities'); ?>
        <?php get_template_part('template-parts/section', 'contact'); ?>
    </main>
    <?php get_template_part('template-parts/section', 'footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>