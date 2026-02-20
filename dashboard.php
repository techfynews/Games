<?php
    // dashboard.php: A simple dashboard for displaying available SEO tools
    
    // Sample array of SEO tools
    $seoTools = [
        'Google Search Console',
        'Moz',
        'Ahrefs',
        'SEMrush',
        'Yoast SEO',
        'Screaming Frog',
        'Ubersuggest'
    ];
    
    // Display the SEO tools on the dashboard
    echo '<h1>Available SEO Tools</h1>';
    echo '<ul>';
    foreach ($seoTools as $tool) {
        echo '<li>' . htmlspecialchars($tool) . '</li>';
    }
    echo '</ul>';