<?php
/**
 * Brandeur01 Contact & Execution Request Section Template
 */
?>
<section id="contact" class="section-padding" style="background: var(--color-brand-surface); border-top: 1px solid var(--color-brand-border);" aria-labelledby="contact-heading">
    <div class="container" style="max-width: 720px;">
        <div style="text-align: center; margin-bottom: var(--spacing-lg);">
            <h2 id="contact-heading" style="font-size: 32px; font-weight: 800; color: var(--color-brand-text); letter-spacing: -0.5px; margin-bottom: var(--spacing-xs);">Initiate Strategic Execution Discussion</h2>
            <p style="color: var(--color-brand-text-muted); font-size: 16px;">Connect directly with Brandeur engineering and growth specialists to address your commercial bottleneck.</p>
        </div>

        <div id="contact-selected-bottleneck-banner" class="selected-bottleneck-badge" style="display: none;" role="status">
            <span><strong>Active Focus:</strong></span>
            <span id="contact-selected-bottleneck-text"></span>
        </div>

        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" style="background: var(--color-brand-bg); padding: var(--spacing-md); border-radius: var(--border-radius-lg); border: 1px solid var(--color-brand-border);">
            <input type="hidden" name="action" value="brandeur_contact_submit">
            <?php wp_nonce_field('brandeur_contact_nonce', 'contact_nonce'); ?>

            <div class="form-group">
                <label for="contact-name" class="form-label">Full Name *</label>
                <input type="text" id="contact-name" name="contact_name" class="form-control" required placeholder="e.g. Sarah Jenkins">
            </div>

            <div class="form-group">
                <label for="contact-email" class="form-label">Work Email *</label>
                <input type="email" id="contact-email" name="contact_email" class="form-control" required placeholder="sarah@company.com">
            </div>

            <div class="form-group">
                <label for="contact-company" class="form-label">Company / Organization</label>
                <input type="text" id="contact-company" name="contact_company" class="form-control" placeholder="Company Name">
            </div>

            <div class="form-group">
                <label for="contact-bottleneck-select" class="form-label">Identified Bottleneck State *</label>
                <select id="contact-bottleneck-select" name="contact_bottleneck" class="form-control" required>
                    <option value="">Select your bottleneck state...</option>
                    <option value="need-more-customers">I need more customers / scaling pipeline</option>
                    <option value="website-not-converting">Our website traffic doesn't convert into qualified leads</option>
                    <option value="automate-work">We are losing working hours to manual processes</option>
                    <option value="use-ai-properly">Deploying AI capabilities securely without tool sprawl</option>
                    <option value="marketing-inconsistent">Marketing metrics are inconsistent across platforms</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contact-message" class="form-label">Project Context & Current Challenges</label>
                <textarea id="contact-message" name="contact_message" class="form-control" rows="4" placeholder="Briefly describe your current setup and specific execution requirements..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-sm);">Request Execution Assessment →</button>
        </form>
    </div>
</section>
