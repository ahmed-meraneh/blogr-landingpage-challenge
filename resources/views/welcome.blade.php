<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogr</title>
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/x-icon">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <!-- Header starts here -->
        <section class="header">
            <div class="navigation">
                <a href="#"><img src="{{ asset('assets/images/logo.svg') }}" alt="Blogr logo"></a>
                <ul class="site-nav">
                    
                    <li><a href="#">Product</a><img src="{{ asset('assets/images/icon-arrow-light.svg') }}" alt="dropdown arrow">
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Marketplace</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Integrations</a></li>
                            </ul>
                        </div>
                    </li>        
                    
                    <li><a href="#">Company</a><img src="{{ asset('assets/images/icon-arrow-light.svg') }}" alt="dropdown arrow">
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li><a href="#">Connect</a><img src="{{ asset('assets/images/icon-arrow-light.svg') }}" alt="dropdown arrow">
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <ul class="register">
                    <li><a href="#" class="login">Login</a></li>
                    <li><a href="#" class="signup">Sign Up</a></li>
                </ul>
                <img src="{{ asset('assets/images/icon-hamburger.svg') }}" alt="hamburger" id="mobilemenu">
            </div>
            
            <div class="header-content">
                <h1>A modern publishing platform</h1>
                <p>Grow your audience and build your online brand</p>
                <ul class="header-content-links">
                    <li><a href="#" class="start">Start for free</a></li>
                    <li><a href="#" class="learn">Learn More</a></li>
                </ul>
            </div>
        </section>

        <!-- Mobile Navigation starts here -->
        <div id="mobilenav" class="mobilenav">
            <ul>
                <li class="connect">
                    <div class="connect-text">
                        <a href="#">Product</a>
                        <img src="{{ asset('assets/images/icon-arrow-dark.svg') }}" alt="dropdown arrow">
                    </div>
                    <div class="dropdown-menu-mobile">
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Marketplace</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Integrations</a></li>
                        </ul>
                    </div>
                </li>
                
                <li class="connect">
                    <div class="connect-text">
                        <a href="#">Company</a>
                        <img src="{{ asset('assets/images/icon-arrow-dark.svg') }}" alt="dropdown arrow">
                    </div>
                    <div class="dropdown-menu-mobile">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </li>
                
                <li class="connect">
                    <div class="connect-text">
                        <a href="#">Connect</a>
                        <img src="{{ asset('assets/images/icon-arrow-dark.svg') }}" alt="dropdown arrow">
                    </div>
                    <div class="dropdown-menu-mobile">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                </li>
                
                <li><a href="#">Login</a></li>
                <li class="signup"><a href="#">Sign Up</a></li>
            </ul>
        </div>

        <!-- Blogr description -->
        <section class="description">
            <h2>Designed for the future</h2>
            <div class="description-content">
                <div class="description-content-leftcolumn">
                    <h3>Introducing an extensible editor</h3>
                    <p>
                        Blogr features an exceedingly intuitive interface which lets you focus on one thing: creating content. 
                        The editor supports management of multiple blogs and allows easy manipulation of embeds such as images, 
                        videos, and Markdown. Extensibility with plugins and themes provide easy ways to add functionality or 
                        change the looks of a blog
                    </p>
                    <h3>Robust content management</h3>
                    <p>
                        Flexible content management enables users to easily move through posts. Increase the usability of your blog 
                        by adding customized categories, sections, format, or flow. With this functionality, you???re in full control.
                    </p>
                </div>
                <div class="description-content-rightcolumn">
                    <img src="{{ asset('assets/images/illustration-editor-desktop.svg') }}" alt="editor illustration" class="desktop-editor">
                    <img src="{{ asset('assets/images/illustration-editor-mobile.svg') }}" alt="editor illustration" class="mobile-editor">
                </div>
            </div>
        </section>
        <!-- Services -->
        <section class="services">
            <div class="services-leftcolumn">
                <img src="{{ asset('assets/images/illustration-phones.svg') }}" alt="phone illustration" class="phone">
                <img src="{{ asset('assets/images/bg-pattern-circles.svg') }}" alt="circle pattern" class="circle-pattern">
            </div>
            <div class="services-rightcolumn">
                <h4>State of the Art Infrastructure</h4>
                <p>With reliability and speed in mind, worldwide data centers provide the backbone for ultra-fast connectivity. 
                    This ensures your site will load instantly, no matter where your readers are, keeping your site competitive.
                </p>
            </div>
        </section>
        <!-- Features -->
        <section class="features">
            <div class="features-leftcolumn">
                <img src="{{ asset('assets/images/illustration-laptop-desktop.svg') }}" alt="laptop illustration" class="desktop-illustration">
                <img src="{{ asset('assets/images/illustration-laptop-mobile.svg') }}" alt="laptop illustration" class="mobile-illustration">
            </div>
            <div class="features-rightcolumn">
                <h5>Free, open, simple</h5>
                <p>Blogr is a free and open source application backed by a large community of helpful developers. It supports 
                    features such as code syntax highlighting, RSS feeds, social media integration, third-party commenting tools, 
                    and works seamlessly with Google Analytics. The architecture is clean and is relatively easy to learn.
                </p>
                <h5>Powerful tooling</h5>
                <p>Batteries included. We built a simple and straightforward CLI tool that makes customization and deployment a breeze, but
                    capable of producing even the most complicated sites.
                </p>
            </div>
        </section>
        
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-box">
                <a href="#"><img src="{{ asset('assets/images/logo.svg') }}" alt="Blogr logo"></a>
            </div>
            <div class="footer-box">
                <h6>Product</h6>
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Marketplace</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Integrations</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <h6>Company</h6>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <h6>Connect</h6>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
            
            <div class="attribution">
                Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank" rel="noopener">Frontend Mentor</a>. 
                Coded by <a href="https://github.com/uzoway" target="_blank" rel="noopener">Uzoway</a>.
            </div>
        </footer>
    </body>
</html>
