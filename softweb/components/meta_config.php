<?php
    $currentPage = basename($_SERVER['PHP_SELF']); 
    
    $metaData = [

    ];
        
            
    
    // Default meta (if page not found)
    $defaultMeta = [
        "title" => "Best Digital Marketing Agency in Vapi India | Softweb",
        "description" => "SoftWeb is your trusted partner for Best Digital Marketing (SEO, SMM, PPC), expert web development (e-commerce, redesign, maintenance), graphic designing, website design and professional event management services. With over 20 years of proven success in Vapi, Daman, Silvassa, Valsad, and across India, we innovate digital excellence to help your business thrive.",
        "keywords" => "IT solutions best in Vapi, digital marketing best in Vapi, web development best in Daman, SEO services best in Silvassa, web design best in Umargam, graphic design best in Sarigam, event management best in Vapi, ecommerce website best in Surat, social media marketing best in Pardi, website redesign best in Navsari, logo design best in Gundlav"
    ];
    
    // Select current page meta
    $pageMeta = $metaData[$currentPage] ?? $defaultMeta;
    
    $title = !empty($pageMeta['title']) ? $pageMeta['title'] : $defaultMeta['title'];
    $description = !empty($pageMeta['description']) ? $pageMeta['description'] : $defaultMeta['description'];
    $keywords = !empty($pageMeta['keywords']) ? $pageMeta['keywords'] : $defaultMeta['keywords'];
    
    // Detect protocol (http / https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
                || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
    
    // Get domain
    $domain = $_SERVER['HTTP_HOST'];
    
    // Get current URI without query string
    $uri = strtok($_SERVER["REQUEST_URI"], '?');
    
    // Build canonical URL
    $canonical = $protocol . $domain . $uri;
    
    // Optional: remove / from homepage
    if (basename($uri) == '/') {
        $canonical = $protocol . $domain . '/';
    }
    ?>