<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* destination_list.html.twig */
class __TwigTemplate_dd8231d28685d36e12771b8585d287c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination_list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Tour & Travel Bootstrap Template</title>

    <!-- Plugins CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/css/plugins.css"), "html", null, true);
        echo "\">\t
    
    <!-- Custom style -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsiveness.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><link id=\"jssDefault\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/skins/default.css"), "html", null, true);
        echo "\">
    
\t</head>
\t
\t<body>
\t\t
\t\t<!-- ======================= Start Navigation ===================== -->
\t\t<nav class=\"navbar navbar-default navbar-mobile navbar-fixed light bootsnav\">
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index-2.html\">
\t\t\t\t\t\t<img src=\"assets/img/logo.png\" class=\"logo logo-display\" alt=\"\">
\t\t\t\t\t\t<img src=\"assets/img/logo.png\" class=\"logo logo-scrolled\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Home 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-2.html\">Home 2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-3.html\">Home 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-4.html\">Home 4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-5.html\">Home 5</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown megamenu-fw\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Brows</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu megamenu-content\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Destinations</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid.html\">Destination Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list.html\">Destination List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list-sidebar.html\">Destination List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-detail.html\">Destination Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Tours</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid.html\">Tour Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list.html\">Tour List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list-sidebar.html\">tour List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-detail.html\">Tour Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Hotels</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid.html\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Restaurants</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid.html\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-list.html\">Restaurant List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid-sidebar.html\">Restaurant Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-list-sidebar.html\">Restaurant List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t</div><!-- end row -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"hire-guider.html\">Find Guide</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Extra</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Add To Cart</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"payment-methode.html\">Paayment Methode</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"success-page.html\">Success Page</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"coming-soon.html\">Coming Soon</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"about-us.html\">About Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">View More</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faqs.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">LogIn</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"signup.html\">SignUp</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"icons.html\">icons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"dashboard/index.html.twig\">Dashboard</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"br-right\"><a href=\"javascript:void(0)\"  data-toggle=\"modal\" data-target=\"#signin\"><i class=\"login-icon ti-user\"></i>Login</a></li>
\t\t\t\t\t\t<li class=\"sign-up\"><a class=\"btn-signup red-btn\" href=\"tour-grid-sidebar.html\"><span class=\"ti-briefcase\"></span>Booking Toor</a></li> 
\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>   
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->
\t\t
\t\t<!-- ======================= Start Page Title ===================== -->
\t\t<div class=\"page-title image-title\" style=\"background-image:url(assets/img/destination.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-wrap\">
\t\t\t\t<h2>Destination List</h2>
\t\t\t\t<p><a href=\"#\" class=\"theme-cl\">Home</a> | <span>Destination List</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ======================= End Page Title ===================== -->
\t\t
\t\t<!-- =========== Start All Destination In List View =================== -->
\t\t";
        // line 723
        echo "\t\t<!-- =========== End All Destination In List View =================== -->
\t\t\t";
        // line 724
        $this->displayBlock('body', $context, $blocks);
        // line 725
        echo "\t\t<!-- ============== Before Footer ====================== -->
\t\t<section class=\"before-footer bt-1 bb-1\">
\t\t\t<div class=\"container-fluid padd-0 full-width\">
\t\t\t
\t\t\t\t<div class=\" col-md-2 col-sm-2 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex\">
\t\t\t\t\t\t<h4>Contact Us!</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t53 Boulevard Victor Hugo 44200 Nantes, France
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t<span class=\"d-block mrg-bot-0\">06 52 52 20 30</span>
\t\t\t\t\t\t<a href=\"#\" class=\"theme-cl\"><strong>hello@gmail.com</strong></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-4 padd-0\">
\t\t\t\t\t<div class=\"data-flex padd-0\">
\t\t\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin theme-cl\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<!-- =================== Before Footer ====================== -->
\t\t\t
\t\t<!-- ================= footer start ========================= -->
\t\t<footer class=\"footer dark-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-md-8 col-sm-8\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Destinations</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid.html\">Destination Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list.html\">Destination List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list-sidebar.html\">Destination List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-detail.html\">Destination Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid.html\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Tours</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid.html\">Tour Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list.html\">Tour List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list-sidebar.html\">tour List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-detail.html\">Tour Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"http://themezhub.com/\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Hotels</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid.html\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<h4>Subscribe Now</h4>
\t\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-location-arrow font-20\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Social Box -->
\t\t\t\t\t\t<div class=\"f-social-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook facebook-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google google-plus-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter twitter-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-pinterest pinterest-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram instagram-cl\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- App Links -->
\t\t\t\t\t\t<div class=\"f-app-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-apple\"></i>App Store</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-android\"></i>Play Store</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"copyright text-center\">
\t\t\t\t\t\t\t<p><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</footer>
\t\t
\t\t<!-- Sign Up Window Code -->
\t\t<div class=\"modal fade\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\" id=\"myModalLabel1\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" alt=\"\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-advance theme-bg\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#employer\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i> Employer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#candidate\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i> Candidate</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Employer Panel 1-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade in show active\" id=\"employer\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"log-option\"><span>OR</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\"><i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\"><i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 1-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Candidate Panel 2-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"candidate\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"log-option\"><span>OR</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\"><i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\"><i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 2-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>   
\t\t<!-- End Sign Up Window -->
\t\t<!-- Switcher -->
\t\t<button class=\"w3-button w3-teal w3-xlarge w3-right\" onclick=\"openRightMenu()\"><i class=\"spin theme-cl fa fa-cog\" aria-hidden=\"true\"></i></button>
\t\t<div class=\"w3-sidebar w3-bar-block w3-card-2 w3-animate-right\" style=\"display:none;right:0;\" id=\"rightMenu\">
\t\t  <button onclick=\"closeRightMenu()\" class=\"w3-bar-item w3-button w3-large theme-bg\">Close &times;</button>
\t\t   <ul id=\"styleOptions\" title=\"switch styling\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-default\" data-theme=\"skins/default\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-red\" data-theme=\"skins/red\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-green\" data-theme=\"skins/green\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-blue\" data-theme=\"skins/blue\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-pink\" data-theme=\"skins/pink\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-purple\" data-theme=\"skins/purple\"></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- /Switcher -->
\t\t 
\t\t<!-- =================== START JAVASCRIPT ================== -->
\t\t<script src=\"assets/plugins/js/jquery.min.js\"></script>
\t\t<script src=\"assets/plugins/js/bootstrap.min.js\"></script>
\t\t<script src=\"assets/plugins/js/viewportchecker.js\"></script>
\t\t<script src=\"assets/plugins/js/bootsnav.js\"></script>
\t\t<script src=\"assets/plugins/js/slick.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.fancybox.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.downCount.js\"></script>
\t\t<script src=\"assets/plugins/js/freshslider.1.0.0.js\"></script>
\t\t<script src=\"assets/plugins/js/moment.min.js\"></script>
\t\t<script src=\"assets/plugins/js/daterangepicker.js\"></script>
\t\t<script src=\"assets/plugins/js/wysihtml5-0.3.0.js\"></script>
\t\t<script src=\"assets/plugins/js/bootstrap-wysihtml5.js\"></script>
\t\t
\t\t<!-- Dashboard Js -->
\t\t<script src=\"assets/plugins/js/jquery.slimscroll.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.metisMenu.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.easing.min.js\"></script>
 
\t\t<!-- Custom Js -->
\t\t<script src=\"assets/js/custom.js\"></script>
\t\t
\t\t<script src=\"assets/js/jQuery.style.switcher.js\"></script>
\t\t<script>
\t\t\tfunction openRightMenu() {
\t\t\t\tdocument.getElementById(\"rightMenu\").style.display = \"block\";
\t\t\t}
\t\t\tfunction closeRightMenu() {
\t\t\t\tdocument.getElementById(\"rightMenu\").style.display = \"none\";
\t\t\t}
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#styleOptions').styleSwitcher();
\t\t\t});
\t\t</script>
\t
    </body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 724
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "destination_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  549 => 724,  231 => 725,  229 => 724,  226 => 723,  67 => 16,  63 => 15,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Tour & Travel Bootstrap Template</title>

    <!-- Plugins CSS -->
\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/css/plugins.css')}}\">\t
    
    <!-- Custom style -->
    <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('assets/css/responsiveness.css')}}\" rel=\"stylesheet\"><link id=\"jssDefault\" rel=\"stylesheet\" href=\"{{asset('assets/css/skins/default.css')}}\">
    
\t</head>
\t
\t<body>
\t\t
\t\t<!-- ======================= Start Navigation ===================== -->
\t\t<nav class=\"navbar navbar-default navbar-mobile navbar-fixed light bootsnav\">
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index-2.html\">
\t\t\t\t\t\t<img src=\"assets/img/logo.png\" class=\"logo logo-display\" alt=\"\">
\t\t\t\t\t\t<img src=\"assets/img/logo.png\" class=\"logo logo-scrolled\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Home 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-2.html\">Home 2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-3.html\">Home 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-4.html\">Home 4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-5.html\">Home 5</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown megamenu-fw\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Brows</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu megamenu-content\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Destinations</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid.html\">Destination Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list.html\">Destination List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list-sidebar.html\">Destination List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"destination-detail.html\">Destination Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Tours</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid.html\">Tour Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list.html\">Tour List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list-sidebar.html\">tour List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tour-detail.html\">Tour Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Hotels</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid.html\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Restaurants</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid.html\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-list.html\">Restaurant List</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid-sidebar.html\">Restaurant Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-list-sidebar.html\">Restaurant List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- end col-3 -->
\t\t\t\t\t\t\t\t\t</div><!-- end row -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"hire-guider.html\">Find Guide</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Extra</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Add To Cart</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"payment-methode.html\">Paayment Methode</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"success-page.html\">Success Page</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"coming-soon.html\">Coming Soon</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"about-us.html\">About Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">View More</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faqs.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">LogIn</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"signup.html\">SignUp</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"icons.html\">icons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"dashboard/index.html.twig\">Dashboard</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"br-right\"><a href=\"javascript:void(0)\"  data-toggle=\"modal\" data-target=\"#signin\"><i class=\"login-icon ti-user\"></i>Login</a></li>
\t\t\t\t\t\t<li class=\"sign-up\"><a class=\"btn-signup red-btn\" href=\"tour-grid-sidebar.html\"><span class=\"ti-briefcase\"></span>Booking Toor</a></li> 
\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>   
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->
\t\t
\t\t<!-- ======================= Start Page Title ===================== -->
\t\t<div class=\"page-title image-title\" style=\"background-image:url(assets/img/destination.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-wrap\">
\t\t\t\t<h2>Destination List</h2>
\t\t\t\t<p><a href=\"#\" class=\"theme-cl\">Home</a> | <span>Destination List</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ======================= End Page Title ===================== -->
\t\t
\t\t<!-- =========== Start All Destination In List View =================== -->
\t\t{#<section class=\"gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<!-- Row -->
\t\t\t\t<div class=\"row mrg-0\">
\t\t\t\t\t<div class=\"tr-single-box short-box\">
\t\t\t\t\t\t<div class=\"col-sm-3 hidden-xs align-self-center\">
\t\t\t\t\t\t\t<h4>Shorty By</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-9 text-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"btn-group mr-lg-2\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tShort By
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu pull-right animated flipInX\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Accending</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Decending</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">By Date</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t <a href=\"destination-grid.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-layout-grid2\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t <a href=\"destination-list.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-view-list-alt\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Row -->
\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-8.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>3 days</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-22%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Bali, Indonesia</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$170</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Hong Kong</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>25</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-7.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>17h</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Istanbul, Turkey</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$224</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">United Kingdom</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>19</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-6.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>23h</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Halifax, Nova Scotia</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$234</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Singapore</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>17</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-5.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>2 daysh</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-15%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Casablanca, Morocco</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$204</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Switzerland</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>13</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-4.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>12h</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Rovinj, Croatia </a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$134</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">United States</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>20</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-3.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>10h</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Marrakech, Morroco</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$154</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Saudi Arabia</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>13</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-2.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>2 days</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-13%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Prague, Czech Republic</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$104</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Austrailia</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>18</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Single Destination List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/destination/des-1.jpg\" class=\"img-responsive destination-box-img\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>7h</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-10%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">London, United Kingdom</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$134</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">Netherlands</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i><span>10</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-rating fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t  <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t\t<span class=\"ti-arrow-left\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t\t\t<li class=\"page-item active\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t  <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t<span class=\"ti-arrow-right\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</section>#}
\t\t<!-- =========== End All Destination In List View =================== -->
\t\t\t{% block body %}{% endblock %}
\t\t<!-- ============== Before Footer ====================== -->
\t\t<section class=\"before-footer bt-1 bb-1\">
\t\t\t<div class=\"container-fluid padd-0 full-width\">
\t\t\t
\t\t\t\t<div class=\" col-md-2 col-sm-2 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex\">
\t\t\t\t\t\t<h4>Contact Us!</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t53 Boulevard Victor Hugo 44200 Nantes, France
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t<span class=\"d-block mrg-bot-0\">06 52 52 20 30</span>
\t\t\t\t\t\t<a href=\"#\" class=\"theme-cl\"><strong>hello@gmail.com</strong></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-4 padd-0\">
\t\t\t\t\t<div class=\"data-flex padd-0\">
\t\t\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter theme-cl\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin theme-cl\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<!-- =================== Before Footer ====================== -->
\t\t\t
\t\t<!-- ================= footer start ========================= -->
\t\t<footer class=\"footer dark-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-md-8 col-sm-8\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Destinations</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid.html\">Destination Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list.html\">Destination List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-list-sidebar.html\">Destination List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destination-detail.html\">Destination Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-grid.html\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Tours</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid.html\">Tour Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list.html\">Tour List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-list-sidebar.html\">tour List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"tour-detail.html\">Tour Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"http://themezhub.com/\">Restaurant Grid</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<h4>Featured Hotels</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid.html\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list.html\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<h4>Subscribe Now</h4>
\t\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-location-arrow font-20\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Social Box -->
\t\t\t\t\t\t<div class=\"f-social-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook facebook-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google google-plus-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter twitter-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-pinterest pinterest-cl\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram instagram-cl\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- App Links -->
\t\t\t\t\t\t<div class=\"f-app-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-apple\"></i>App Store</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-android\"></i>Play Store</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"copyright text-center\">
\t\t\t\t\t\t\t<p><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</footer>
\t\t
\t\t<!-- Sign Up Window Code -->
\t\t<div class=\"modal fade\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\" id=\"myModalLabel1\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" alt=\"\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-advance theme-bg\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#employer\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i> Employer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#candidate\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i> Candidate</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Employer Panel 1-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade in show active\" id=\"employer\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"log-option\"><span>OR</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\"><i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\"><i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 1-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Candidate Panel 2-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"candidate\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"log-option\"><span>OR</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\"><i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\"><i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 2-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>   
\t\t<!-- End Sign Up Window -->
\t\t<!-- Switcher -->
\t\t<button class=\"w3-button w3-teal w3-xlarge w3-right\" onclick=\"openRightMenu()\"><i class=\"spin theme-cl fa fa-cog\" aria-hidden=\"true\"></i></button>
\t\t<div class=\"w3-sidebar w3-bar-block w3-card-2 w3-animate-right\" style=\"display:none;right:0;\" id=\"rightMenu\">
\t\t  <button onclick=\"closeRightMenu()\" class=\"w3-bar-item w3-button w3-large theme-bg\">Close &times;</button>
\t\t   <ul id=\"styleOptions\" title=\"switch styling\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-default\" data-theme=\"skins/default\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-red\" data-theme=\"skins/red\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-green\" data-theme=\"skins/green\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-blue\" data-theme=\"skins/blue\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-pink\" data-theme=\"skins/pink\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript: void(0)\" class=\"cl-box cl-purple\" data-theme=\"skins/purple\"></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- /Switcher -->
\t\t 
\t\t<!-- =================== START JAVASCRIPT ================== -->
\t\t<script src=\"assets/plugins/js/jquery.min.js\"></script>
\t\t<script src=\"assets/plugins/js/bootstrap.min.js\"></script>
\t\t<script src=\"assets/plugins/js/viewportchecker.js\"></script>
\t\t<script src=\"assets/plugins/js/bootsnav.js\"></script>
\t\t<script src=\"assets/plugins/js/slick.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.fancybox.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.downCount.js\"></script>
\t\t<script src=\"assets/plugins/js/freshslider.1.0.0.js\"></script>
\t\t<script src=\"assets/plugins/js/moment.min.js\"></script>
\t\t<script src=\"assets/plugins/js/daterangepicker.js\"></script>
\t\t<script src=\"assets/plugins/js/wysihtml5-0.3.0.js\"></script>
\t\t<script src=\"assets/plugins/js/bootstrap-wysihtml5.js\"></script>
\t\t
\t\t<!-- Dashboard Js -->
\t\t<script src=\"assets/plugins/js/jquery.slimscroll.min.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.metisMenu.js\"></script>
\t\t<script src=\"assets/plugins/js/jquery.easing.min.js\"></script>
 
\t\t<!-- Custom Js -->
\t\t<script src=\"assets/js/custom.js\"></script>
\t\t
\t\t<script src=\"assets/js/jQuery.style.switcher.js\"></script>
\t\t<script>
\t\t\tfunction openRightMenu() {
\t\t\t\tdocument.getElementById(\"rightMenu\").style.display = \"block\";
\t\t\t}
\t\t\tfunction closeRightMenu() {
\t\t\t\tdocument.getElementById(\"rightMenu\").style.display = \"none\";
\t\t\t}
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#styleOptions').styleSwitcher();
\t\t\t});
\t\t</script>
\t
    </body>

</html>", "destination_list.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\destination_list.html.twig");
    }
}
