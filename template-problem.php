<?php
/**
 * Template Name: Problem Sub-Landing Page
 * Description: Master layout handler for individual business bottleneck landing pages.
 */

get_header();

// Determine problem slug from query var, GET param, or page slug
$problem_slug = get_query_var('problem_slug');
if ( empty( $problem_slug ) && isset( $_GET['problem'] ) ) {
    $problem_slug = sanitize_text_field( $_GET['problem'] );
}
if ( empty( $problem_slug ) && is_page() ) {
    $problem_slug = get_post_field( 'post_name', get_queried_object_id() );
}

$problem_data = brandeur_get_problem_data( $problem_slug );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('problem-landing-page'); ?>>
    <?php get_template_part('template-parts/section', 'header'); ?>

    <main id="main-content">
        <!-- Problem Hero Block -->
        <section class="section-padding" style="background: linear-gradient(135deg, #F8FAFC 0%, #EFF6FF 100%); border-bottom: 1px solid var(--color-brand-border);">
            <div class="container" style="max-width: 800px; text-align: center;">
                <span class="problem-hero-badge"><?php echo esc_html( $problem_data['category'] ); ?></span>
                <h1 style="font-size: 36px; font-weight: 800; color: var(--color-brand-text); line-height: 1.25; letter-spacing: -0.5px; margin-bottom: var(--spacing-sm);">
                    <?php echo esc_html( $problem_data['title'] ); ?>
                </h1>
                <p style="font-size: 18px; color: var(--color-brand-text-muted); margin-bottom: var(--spacing-md); max-width: 680px; margin-left: auto; margin-right: auto;">
                    <?php echo esc_html( $problem_data['summary'] ); ?>
                </p>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-sm); align-items: center; justify-content: center;">
                    <a href="#contact" class="btn btn-primary" style="width: 100%; max-width: 300px;">Diagnose This Bottleneck →</a>
                    <a href="<?php echo esc_url( home_url( '/#problems' ) ); ?>" class="btn btn-secondary" style="width: 100%; max-width: 300px;">View All Problem Patterns</a>
                </div>
            </div>
        </section>

        <!-- Structural Root Causes / Friction Analysis -->
        <section class="section-padding" style="background: var(--color-brand-surface); border-bottom: 1px solid var(--color-brand-border);">
            <div class="container">
                <div style="text-align: center; max-width: 600px; margin: 0 auto var(--spacing-lg) auto;">
                    <h2 style="font-size: 28px; font-weight: 800; color: var(--color-brand-text); margin-bottom: var(--spacing-xs);">Root Cause Friction Analysis</h2>
                    <p style="color: var(--color-brand-text-muted); font-size: 15px;">Why traditional quick fixes fail to resolve this core execution bottleneck.</p>
                </div>
                <div class="grid-3">
                    <?php foreach ( $problem_data['root_causes'] as $cause ) : ?>
                        <div class="root-cause-card">
                            <h3 style="font-size: 18px; font-weight: 700; color: var(--color-brand-text); margin-bottom: var(--spacing-xs);">
                                <?php echo esc_html( $cause['title'] ); ?>
                            </h3>
                            <p style="font-size: 14px; color: var(--color-brand-text-muted);">
                                <?php echo esc_html( $cause['description'] ); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Brandeur Execution Framework -->
        <section class="section-padding" style="background: var(--color-brand-bg); border-bottom: 1px solid var(--color-brand-border);">
            <div class="container">
                <h2 style="text-align: center; font-size: 28px; font-weight: 800; margin-bottom: var(--spacing-lg);">The Brandeur Execution Roadmap</h2>
                <div class="model-flow-container" style="display: flex; flex-direction: column; gap: var(--spacing-md);">
                    <?php foreach ( $problem_data['roadmap_steps'] as $index => $step ) : ?>
                        <div class="model-step" style="background: var(--color-brand-surface); padding: var(--spacing-sm); border-radius: var(--border-radius); border-left: 4px solid var(--color-brand-primary);">
                            <strong style="color: var(--color-brand-primary);"><?php echo esc_html( ($index + 1) . '. ' . $step['phase'] ); ?></strong>
                            <p style="font-size: 14px; color: var(--color-brand-text-muted); margin-top: 4px;"><?php echo esc_html( $step['detail'] ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Concrete Technical & Strategic Deliverables -->
        <section class="section-padding" style="background: var(--color-brand-surface); border-bottom: 1px solid var(--color-brand-border);">
            <div class="container">
                <div style="text-align: center; max-width: 600px; margin: 0 auto var(--spacing-lg) auto;">
                    <h2 style="font-size: 28px; font-weight: 800; color: var(--color-brand-text); margin-bottom: var(--spacing-xs);">Execution Deliverables</h2>
                    <p style="color: var(--color-brand-text-muted); font-size: 15px;">Accountable technical and strategic assets deployed to resolve this friction.</p>
                </div>
                <div class="grid-2">
                    <?php foreach ( $problem_data['deliverables'] as $item ) : ?>
                        <div class="deliverable-card">
                            <h4 style="font-size: 18px; font-weight: 700; color: var(--color-brand-primary); margin-bottom: var(--spacing-xs);"><?php echo esc_html( $item['title'] ); ?></h4>
                            <p style="font-size: 14px; color: var(--color-brand-text-muted);"><?php echo esc_html( $item['description'] ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Pre-populated Contact Layout -->
        <?php get_template_part('template-parts/section', 'contact'); ?>
    </main>

    <?php get_template_part('template-parts/section', 'footer'); ?>
    <?php wp_footer(); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactSelect = document.getElementById('contact-bottleneck-select');
        const contactBadgeText = document.getElementById('contact-selected-bottleneck-text');
        const contactBadgeContainer = document.getElementById('contact-selected-bottleneck-banner');
        
        const targetSlug = '<?php echo esc_js( $problem_slug ); ?>';
        if (contactSelect && targetSlug) {
            for (let i = 0; i < contactSelect.options.length; i++) {
                if (contactSelect.options[i].value === targetSlug) {
                    contactSelect.selectedIndex = i;
                    if (contactBadgeText && contactBadgeContainer) {
                        contactBadgeText.textContent = contactSelect.options[i].text;
                        contactBadgeContainer.style.display = 'flex';
                    }
                    break;
                }
            }
        }
    });
    </script>
</body>
</html>
