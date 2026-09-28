<?php
/**
 * Brandeur01 Problem Cards Section Template
 */
?>
<section id="problems" class="section-padding" aria-labelledby="problems-heading" style="background: var(--color-brand-bg);">
    <div class="container">
        <div style="text-align:center; max-width:600px; margin:0 auto var(--spacing-lg) auto;">
            <h2 id="problems-heading" style="font-size:36px; font-weight:800; color:var(--color-brand-text); letter-spacing:-0.5px; margin-bottom:var(--spacing-xs);">What are you trying to solve?</h2>
            <p style="color:var(--color-brand-text-muted); font-size:16px;">Select the business bottleneck currently impacting your commercial performance.</p>
        </div>
        <div class="grid-3" role="list">
            
            <!-- Card 1: Need More Customers -->
            <div role="listitem">
                <a href="<?php echo esc_url( home_url( '/problem/need-more-customers/' ) ); ?>" class="card-link" aria-label="Explore I need more customers solution">
                    <div class="card">
                        <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-primary);">I need more customers</h3>
                        <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Growth pipelines require structured scaling protocols or execution tactics.</p>
                        <span style="color:var(--color-brand-primary); font-weight:600; font-size:14px; display:inline-flex; align-items:center;">Explore Blueprint →</span>
                    </div>
                </a>
            </div>

            <!-- Card 2: Website Not Converting -->
            <div role="listitem">
                <a href="<?php echo esc_url( home_url( '/problem/website-not-converting/' ) ); ?>" class="card-link" aria-label="Explore Our website isn't working solution">
                    <div class="card">
                        <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-primary);">Our website isn't working</h3>
                        <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Traffic arrives successfully but exits before initiating an active conversion pathway.</p>
                        <span style="color:var(--color-brand-primary); font-weight:600; font-size:14px; display:inline-flex; align-items:center;">Explore Blueprint →</span>
                    </div>
                </a>
            </div>

            <!-- Card 3: Automate Work -->
            <div role="listitem">
                <a href="<?php echo esc_url( home_url( '/problem/automate-work/' ) ); ?>" class="card-link" aria-label="Explore We need to automate work solution">
                    <div class="card">
                        <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-primary);">We need to automate work</h3>
                        <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Operational capacity is blocked by assets performing repetitive tracking tasks.</p>
                        <span style="color:var(--color-brand-primary); font-weight:600; font-size:14px; display:inline-flex; align-items:center;">Explore Blueprint →</span>
                    </div>
                </a>
            </div>

            <!-- Card 4: Use AI Properly -->
            <div role="listitem">
                <a href="<?php echo esc_url( home_url( '/problem/use-ai-properly/' ) ); ?>" class="card-link" aria-label="Explore We want to use AI properly solution">
                    <div class="card">
                        <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-primary);">We want to use AI properly</h3>
                        <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Deploying clean capability layers securely without increasing unnecessary tool sprawl.</p>
                        <span style="color:var(--color-brand-primary); font-weight:600; font-size:14px; display:inline-flex; align-items:center;">Explore Blueprint →</span>
                    </div>
                </a>
            </div>

            <!-- Card 5: Marketing Inconsistent -->
            <div role="listitem">
                <a href="<?php echo esc_url( home_url( '/problem/marketing-inconsistent/' ) ); ?>" class="card-link" aria-label="Explore Marketing is inconsistent solution">
                    <div class="card">
                        <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-primary);">Marketing is inconsistent</h3>
                        <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Uncertain which client acquisition channels yield a genuine business outcome return.</p>
                        <span style="color:var(--color-brand-primary); font-weight:600; font-size:14px; display:inline-flex; align-items:center;">Explore Blueprint →</span>
                    </div>
                </a>
            </div>

            <!-- Card 6: Not Sure Diagnostic Flow -->
            <div role="listitem">
                <div class="card" style="border: 2px solid var(--color-brand-secondary); background: linear-gradient(180deg, var(--color-brand-surface) 0%, #FAFAFF 100%);">
                    <h3 style="font-size:20px; font-weight:700; margin-bottom:var(--spacing-xs); color:var(--color-brand-secondary);">I am not sure what is wrong</h3>
                    <p style="color:var(--color-brand-text-muted); font-size:14px; margin-bottom:var(--spacing-sm); flex-grow:1;">Initiate a complete diagnostic assessment check to accurately prioritize growth friction.</p>
                    <a href="#diagnostic-flow" class="btn btn-secondary" style="color:var(--color-brand-secondary); border-color:var(--color-brand-secondary); font-size:14px; width:100%; text-decoration:none;" aria-label="Start Strategic Growth Assessment Flow">Start Strategic Diagnostic →</a>
                </div>
            </div>

        </div>
    </div>
</section>