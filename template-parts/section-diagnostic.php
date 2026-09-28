<?php
/**
 * Brandeur01 Growth Diagnostic Block Template
 */
?>
<section id="diagnostic-flow" class="section-padding" style="background: var(--color-brand-surface); border-top: 1px solid var(--color-brand-border);" aria-labelledby="diagnostic-heading">
    <div class="container" style="max-width: 600px; text-align: center;">
        <h3 id="diagnostic-heading" style="font-size: 28px; font-weight: 800; margin-bottom: var(--spacing-sm); color: var(--color-brand-text);">Brandeur Growth Diagnostic</h3>
        <p style="color: var(--color-brand-text-muted); margin-bottom: var(--spacing-md);">Let's narrow down exactly what is blocking your execution capacity.</p>
        <div style="background: var(--color-brand-bg); padding: var(--spacing-md); border-radius: var(--border-radius-lg); border: 1px solid var(--color-brand-border); text-align: left;">
            <label for="diagnostic-select" class="form-label" style="font-size: 16px; margin-bottom: var(--spacing-xs);">What is your primary commercial threat?</label>
            <select id="diagnostic-select" class="form-control" aria-label="Select primary commercial threat">
                <option value="need-more-customers">I need more customers / scaling pipeline</option>
                <option value="website-not-converting">Our website traffic doesn't convert into qualified leads</option>
                <option value="automate-work">We are losing working hours to manual processes</option>
                <option value="use-ai-properly">Deploying AI capabilities securely without tool sprawl</option>
                <option value="marketing-inconsistent">Marketing metrics are highly inconsistent across platforms</option>
            </select>
            <button id="diagnostic-submit-btn" type="button" class="btn btn-primary" style="width: 100%; margin-top: var(--spacing-sm);">Analyze Bottleneck State →</button>
        </div>
    </div>
</section>