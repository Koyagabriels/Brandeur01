<?php
/**
 * Brandeur01 Core Engine Functions Initialization
 */

function brandeur_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'brandeur'),
    ));
}
add_action('after_setup_theme', 'brandeur_setup_theme');

/**
 * Enqueue Theme Scripts and Styles
 */
function brandeur_enqueue_assets() {
    wp_enqueue_style('brandeur-style', get_stylesheet_uri(), array(), '1.0.0');
    
    if (file_exists(get_template_directory() . '/assets/js/diagnostic.js')) {
        wp_enqueue_script(
            'brandeur-diagnostic',
            get_template_directory_uri() . '/assets/js/diagnostic.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'brandeur_enqueue_assets');

/**
 * Register Custom Query Vars & Rewrite Rules for Dynamic Problem Sub-Landing Pages
 */
function brandeur_register_query_vars( $vars ) {
    $vars[] = 'problem_slug';
    $vars[] = 'bottleneck';
    return $vars;
}
add_filter( 'query_vars', 'brandeur_register_query_vars' );

function brandeur_add_rewrite_rules() {
    add_rewrite_rule( '^problem/([^/]+)/?', 'index.php?problem_slug=$matches[1]', 'top' );
}
add_action( 'init', 'brandeur_add_rewrite_rules' );

/**
 * Dynamic Template Include Handler for Problem Landing Pages
 */
function brandeur_template_routing( $template ) {
    $problem_slug = get_query_var( 'problem_slug' );
    if ( empty( $problem_slug ) && isset( $_GET['problem'] ) ) {
        $problem_slug = sanitize_text_field( $_GET['problem'] );
    }

    if ( ! empty( $problem_slug ) ) {
        $problem_template = get_template_directory() . '/template-problem.php';
        if ( file_exists( $problem_template ) ) {
            return $problem_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'brandeur_template_routing' );

/**
 * Approved Dynamic Problem Repository Data Handler
 */
function brandeur_get_problem_data( $slug ) {
    $problems = array(
        'need-more-customers' => array(
            'slug' => 'need-more-customers',
            'title' => 'Scaling Customer Pipelines & Commercial Acquisition',
            'summary' => 'Build structured acquisition protocols, optimize outbound and inbound conversion channels, and establish repeatable growth pipelines.',
            'category' => 'Growth & Acquisition Architecture',
            'root_causes' => array(
                array(
                    'title' => 'Unstructured Channel Deployment',
                    'description' => 'Traffic generation lacks dedicated, repeatable campaign protocols resulting in unpredictable lead flow.'
                ),
                array(
                    'title' => 'Conversion Funnel Leakage',
                    'description' => 'Prospects exit before initiating direct consultation calls due to friction in initial messaging.'
                ),
                array(
                    'title' => 'Misaligned Target ICP Focus',
                    'description' => 'Acquisition channels reach low-intent audiences rather than high-value decision makers.'
                ),
            ),
            'roadmap_steps' => array(
                array( 'phase' => 'Understand', 'detail' => 'Audit current acquisition channels, lead quality metrics, and sales conversion pathways.' ),
                array( 'phase' => 'Diagnose', 'detail' => 'Isolate specific funnel drop-offs and misaligned audience positioning.' ),
                array( 'phase' => 'Design', 'detail' => 'Architect structured acquisition frameworks and targeted value propositions.' ),
                array( 'phase' => 'Build', 'detail' => 'Deploy high-intent conversion pathways, landing assets, and campaign tracking.' ),
                array( 'phase' => 'Improve', 'detail' => 'Analyze real-time acquisition performance and refine conversion velocity.' ),
            ),
            'deliverables' => array(
                array(
                    'title' => 'Acquisition Channel Architecture',
                    'description' => 'Comprehensive strategic framework mapping top-performing client acquisition pathways.'
                ),
                array(
                    'title' => 'High-Intent Landing Components',
                    'description' => 'Mobile-optimized WordPress page structures engineered for high conversion rates.'
                ),
            ),
        ),

        'website-not-converting' => array(
            'slug' => 'website-not-converting',
            'title' => 'Optimizing Website Conversion Architecture',
            'summary' => 'Transform site traffic into active conversion pathways with frictionless user journeys, targeted positioning, and performance optimization.',
            'category' => 'Conversion Architecture',
            'root_causes' => array(
                array(
                    'title' => 'Frictional User Journeys',
                    'description' => 'Complex navigation and unclear calls to action force qualified visitors to bounce prematurely.'
                ),
                array(
                    'title' => 'Positioning Misalignment',
                    'description' => 'Value proposition fails to resonate immediately upon mobile viewport load.'
                ),
                array(
                    'title' => 'Technical & Mobile Latency',
                    'description' => 'Slow load speeds and poorly optimized assets frustrate users on mobile devices.'
                ),
            ),
            'roadmap_steps' => array(
                array( 'phase' => 'Understand', 'detail' => 'Evaluate user session metrics, mobile responsiveness, and drop-off points.' ),
                array( 'phase' => 'Diagnose', 'detail' => 'Pinpoint exact UX friction points and messaging disconnects on main pages.' ),
                array( 'phase' => 'Design', 'detail' => 'Design mobile-first user flows focused on intuitive primary conversion actions.' ),
                array( 'phase' => 'Build', 'detail' => 'Implement lightweight WordPress templates and high-contrast call-to-action blocks.' ),
                array( 'phase' => 'Improve', 'detail' => 'Continuously test page interactions and layout refinements based on real analytics.' ),
            ),
            'deliverables' => array(
                array(
                    'title' => 'UX & Conversion Audit Blueprint',
                    'description' => 'In-depth analysis identifying visual friction, content gaps, and structural conversion leaks.'
                ),
                array(
                    'title' => 'Mobile-First Theme Optimization',
                    'description' => 'Clean, semantic code modifications ensuring rapid load times and seamless navigation.'
                ),
            ),
        ),

        'automate-work' => array(
            'slug' => 'automate-work',
            'title' => 'Operational Automation & Process Integration',
            'summary' => 'Eliminate repetitive manual tracking, streamline workflow bottlenecks, and connect fragmented business tools into unified automated pipelines.',
            'category' => 'Operational Automation',
            'root_causes' => array(
                array(
                    'title' => 'Manual Data Silos',
                    'description' => 'Team members spend valuable hours copying data between disconnected business applications.'
                ),
                array(
                    'title' => 'Fragmented System Workflows',
                    'description' => 'Lack of native API integration causes operational delays and data discrepancies.'
                ),
                array(
                    'title' => 'Operational Scalability Ceiling',
                    'description' => 'Business throughput is constrained by human tracking capacity rather than automated code.'
                ),
            ),
            'roadmap_steps' => array(
                array( 'phase' => 'Understand', 'detail' => 'Document all manual operational routines and resource allocation bottlenecks.' ),
                array( 'phase' => 'Diagnose', 'detail' => 'Identify high-frequency, rule-based tasks suitable for software automation.' ),
                array( 'phase' => 'Design', 'detail' => 'Map clean API integration architectures and automated event triggers.' ),
                array( 'phase' => 'Build', 'detail' => 'Implement webhooks, CRM synchronizations, and custom automation routines.' ),
                array( 'phase' => 'Improve', 'detail' => 'Monitor automation execution stability and refine data pipelines.' ),
            ),
            'deliverables' => array(
                array(
                    'title' => 'Workflow Integration Blueprint',
                    'description' => 'Detailed system architecture diagram mapping automated data flow across business platforms.'
                ),
                array(
                    'title' => 'Custom API Integration Modules',
                    'description' => 'Robust code connectors linking disparate software systems to eliminate manual effort.'
                ),
            ),
        ),

        'use-ai-properly' => array(
            'slug' => 'use-ai-properly',
            'title' => 'Secure AI Integration & Capability Deployment',
            'summary' => 'Deploy tailored AI capabilities safely within your business operations without increasing tool sprawl or compromising data security.',
            'category' => 'AI System Architecture',
            'root_causes' => array(
                array(
                    'title' => 'Uncoordinated Tool Sprawl',
                    'description' => 'Ad-hoc adoption of disparate third-party AI tools creates confusion and fragmented workflows.'
                ),
                array(
                    'title' => 'Data Governance & Security Risks',
                    'description' => 'Lack of structured protocols for handling sensitive business data within AI models.'
                ),
                array(
                    'title' => 'Superficial Implementations',
                    'description' => 'Deploying AI for novelty rather than embedding it into core execution workflows.'
                ),
            ),
            'roadmap_steps' => array(
                array( 'phase' => 'Understand', 'detail' => 'Review operational workflows to locate high-ROI AI application opportunities.' ),
                array( 'phase' => 'Diagnose', 'detail' => 'Evaluate security requirements, data privacy constraints, and team readiness.' ),
                array( 'phase' => 'Design', 'detail' => 'Architect secure AI deployment frameworks and standardized prompt structures.' ),
                array( 'phase' => 'Build', 'detail' => 'Embed targeted AI capability layers directly into existing software systems.' ),
                array( 'phase' => 'Improve', 'detail' => 'Conduct team operational training and continuously optimize AI response quality.' ),
            ),
            'deliverables' => array(
                array(
                    'title' => 'AI Governance & Security Framework',
                    'description' => 'Guidelines ensuring safe data handling and compliant usage of AI technologies.'
                ),
                array(
                    'title' => 'Custom AI Workflow Capability',
                    'description' => 'Tailored software integration connecting AI models to daily operational processes.'
                ),
            ),
        ),

        'marketing-inconsistent' => array(
            'slug' => 'marketing-inconsistent',
            'title' => 'Marketing Performance & Attribution Frameworks',
            'summary' => 'Establish unified analytics, clear channel attribution, and consistent execution systems to maximize commercial returns.',
            'category' => 'Marketing Systems',
            'root_causes' => array(
                array(
                    'title' => 'Fragmented Analytics Tracking',
                    'description' => 'Marketing platforms report isolated data without unified cross-channel attribution.'
                ),
                array(
                    'title' => 'Unclear Channel ROI',
                    'description' => 'Inability to isolate which specific marketing channels generate genuine business revenue.'
                ),
                array(
                    'title' => 'Irregular Content Execution',
                    'description' => 'Unsystematic publishing schedules lead to inconsistent market presence and lost momentum.'
                ),
            ),
            'roadmap_steps' => array(
                array( 'phase' => 'Understand', 'detail' => 'Audit existing marketing channels, analytics configurations, and spend distribution.' ),
                array( 'phase' => 'Diagnose', 'detail' => 'Identify reporting gaps and channel performance inconsistencies.' ),
                array( 'phase' => 'Design', 'detail' => 'Define unified metrics framework and structured campaign cadence.' ),
                array( 'phase' => 'Build', 'detail' => 'Set up centralized tracking dashboards and standard operating procedures.' ),
                array( 'phase' => 'Improve', 'detail' => 'Review channel returns regularly to reallocate effort toward top performers.' ),
            ),
            'deliverables' => array(
                array(
                    'title' => 'Unified Performance Dashboard',
                    'description' => 'Centralized view tracking customer acquisition metrics and multi-channel ROI.'
                ),
                array(
                    'title' => 'Execution Playbook & Guidelines',
                    'description' => 'Standard operating procedures for maintaining consistent marketing quality and timing.'
                ),
            ),
        ),
    );

    if ( isset( $problems[ $slug ] ) ) {
        return $problems[ $slug ];
    }

    // Default fallback to first problem if slug is unrecognized
    return $problems['website-not-converting'];
}
