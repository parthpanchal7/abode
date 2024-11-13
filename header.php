<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" href="assets/styles/style.css">
<meta name="robots" content="noindex">
</head>

<body class="<?php echo isset($headerClass) ? $headerClass : ''; ?>">
    <div class="main-header">
        <div class="container">
            <div class="main-header-wrap">
                <div class="logo-col">
                    <!-- <a href="/">
                        <?php if(isset($headerClass)): ?>
                        <img src="assets/images/abode-logo.png" alt="logo">
                        <?php else: ?>
                        <img src="assets/images/abode-logo.png" alt="logo">
                        <?php endif; ?>
                    </a> -->
                </div>
                <div class="menu-toggle">
                    <div class="inner">
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="main-menu-wrap">
                    <ul class="main-menu">
                        <li class="has-submenu mega-menu-wrapper"><a href="#">Services</a>
                            <ul class="submenu mega-menu">
                                <div class="mega-menu-wrap">
                                    <div class="single-menu-wrap" data-menu-title="data-consulting">
                                        <div class="left-part">
                                            <div class="left-menu-wrap">
                                                <div class="single-menu" data-menu-title="data-consulting">
                                                    <a href="#">
                                                        <div class="single-menu-item">
                                                            <span class="single-menu-icon">
                                                                <img src="assets/images/icon-data-consulting.png"
                                                                    alt="data consulting">
                                                            </span>

                                                            <strong>Data Consulting</strong>
                                                        </div>
                                                        <p class="single-menu-desc">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Repellendus harum laborum facilis asperiores. Atque, illum!
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="single-menu" data-menu-title="business-consulting">
                                                    <a href="#">
                                                        <div class="single-menu-item">
                                                            <span class="single-menu-icon">
                                                                <img src="assets/images/icon-business-consulting.png"
                                                                    alt="business consulting">
                                                            </span>

                                                            <strong>Business Consulting</strong>
                                                        </div>
                                                        <p class="single-menu-desc">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Repellendus harum laborum facilis asperiores. Atque, illum!
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="single-menu" data-menu-title="it-consulting">
                                                    <a href="#">
                                                        <div class="single-menu-item">
                                                            <span class="single-menu-icon">
                                                                <img src="assets/images/icon-it-consulting.png"
                                                                    alt="it consulting">
                                                            </span>

                                                            <strong>IT Consulting</strong>
                                                        </div>
                                                        <p class="single-menu-desc">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Repellendus harum laborum facilis asperiores. Atque, illum!
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="single-menu" data-menu-title="digital-services">
                                                    <a href="#">
                                                        <div class="single-menu-item">
                                                            <span class="single-menu-icon">
                                                                <img src="assets/images/icon-digital-services.png"
                                                                    alt="digital services">
                                                            </span>

                                                            <strong>Digital Services</strong>
                                                        </div>
                                                        <p class="single-menu-desc">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Repellendus harum laborum facilis asperiores. Atque, illum!
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-part">
                                            <div class="right-menu-wrap">
                                                <div class="single-menu" data-menu-title="data-consulting">
                                                    <h3 class="single-menu-title">Data Consulting</h3>
                                                    <ul>
                                                        <li><a href="#">Data Collection Services</a></li>
                                                        <li><a href="#">Web Research Services</a></li>
                                                        <li><a href="#">Web Scraping Services</a></li>
                                                        <li><a href="#">Mobile App Scraping Services</a></li>
                                                        <li><a href="#">Data Processing Services</a></li>
                                                        <li><a href="#">Data Mining Services</a></li>
                                                        <li><a href="#">Data Management Services</a></li>
                                                        <li><a href="#">Data Enrichment Services</a></li>
                                                    </ul>
                                                </div>
                                                <div class="single-menu" data-menu-title="business-consulting">
                                                    <h3 class="single-menu-title">Business Consulting</h3>
                                                    <ul>
                                                        <li><a href="#">Market Intelligence Services</a></li>
                                                        <li><a href="#">Business Intelligence Consulting Services</a>
                                                        </li>
                                                        <li><a href="#">Business Process Management Services</a></li>
                                                        <li><a href="#">Competitor Intelligence Service</a></li>
                                                        <li><a href="#">Sentiment Analysis Service</a></li>
                                                        <li><a href="#">Business Process Automation Services</a></li>
                                                        <li><a href="#">Business Process Consulting</a></li>
                                                        <li><a href="#">Ecommerce Management Services</a></li>
                                                    </ul>
                                                </div>
                                                <div class="single-menu" data-menu-title="it-consulting">
                                                    <h3 class="single-menu-title">IT Consulting</h3>
                                                    <ul>
                                                        <li><a href="#">Help Desk Outsourcing</a></li>
                                                        <li><a href="#">Outsource Web Development Services</a></li>
                                                        <li><a href="#">Software Development Consulting Services</a>
                                                        </li>
                                                        <li><a href="#">Custom Application Development Service</a></li>
                                                        <li><a href="#">IT Software Support Service</a></li>
                                                    </ul>
                                                </div>
                                                <div class="single-menu" data-menu-title="digital-services">
                                                    <h3 class="single-menu-title">Digital Services</h3>
                                                    <ul>
                                                        <li><a href="#">Outsource Digital Marketing Services</a></li>
                                                        <li><a href="#">Outsource SEO Services</a></li>
                                                        <li><a href="#">Social Media Marketing Consulting Services</a>
                                                        </li>
                                                        <li><a href="#">Graphic Design And Branding Services</a></li>
                                                        <li><a href="#">Outsource Photo Editing Services</a></li>
                                                        <li><a href="#">UI UX Design</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#">Industries</a>
                            <ul class="submenu">
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Healthcare</a></li>
                                <li><a href="#">Finance</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#">Hire</a>
                            <ul class="submenu">
                                <li><a href="#">Hire Dedicated Resources</a></li>
                                <li><a href="#">Hire Data Expert</a></li>
                                <li><a href="#">Hire Data Annotaters</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#">Insight</a>
                            <ul class="submenu last">
                                <li><a href="blogs.php">Blog</a></li>
                                <li><a href="#">Case Study</a></li>
                            </ul>
                        </li>
                        <li><a class="btn header-btn" href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>