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

/* base.html.twig */
class __TwigTemplate_1b460fe7021bc38480f5ef79f843a02d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<title>Tour & Travel Bootstrap Template</title>

\t\t<!-- Plugins CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/css/plugins.css"), "html", null, true);
        echo "\">

\t\t<!-- Custom style -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsiveness.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><link id=\"jssDefault\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/skins/default.css"), "html", null, true);
        echo "\">

\t</head>

\t<body>

\t\t<!-- ======================= Start Navigation ===================== -->
\t\t<nav class=\"navbar navbar-default navbar-mobile navbar-fixed light bootsnav\">
\t\t\t<div
\t\t\t\tclass=\"container\">

\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index-2.html\">
\t\t\t\t\t\t<img src=\"";
        // line 34
        echo "assets/img/logo.png";
        echo "\" class=\"logo logo-display\" alt=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 35
        echo "assets/img/logo.png";
        echo "\" class=\"logo logo-scrolled\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">

\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\">Home</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown megamenu-fw\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Brows</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu megamenu-content\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Destinations</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_civilisation_index");
        echo "\">Civilisation List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_programe_index");
        echo "\">Programe List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-list-sidebar.html\">Destination List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Destination Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Tours</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-grid.html\">Tour Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-list.html\">Tour List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-list-sidebar.html\">tour List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-detail.html\">Tour Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Hotels</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-grid.html\">Hotel Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_list");
        echo "\">Hotel List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Hotel Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Restaurants</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-grid.html\">Restaurant Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_list");
        echo "\">Restaurant List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-grid-sidebar.html\">Restaurant Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-list-sidebar.html\">Restaurant List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-detail.html\">Restaurant Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_find_guide");
        echo "\">Find Guide</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Extra</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"cart.html\">Add To Cart</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"payment-methode.html\">Paayment Methode</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"success-page.html\">Success Page</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"about-us.html\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">View More</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"faqs.html\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">LogIn</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"signup.html\">SignUp</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons.html\">icons</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\"></a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"br-right\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#signin\">
\t\t\t\t\t\t\t\t<i class=\"login-icon ti-user\"></i>Login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sign-up\">
\t\t\t\t\t\t\t<a class=\"btn-signup red-btn\" href=\"tour-grid-sidebar.html\">
\t\t\t\t\t\t\t\t<span class=\"ti-briefcase\"></span>Booking Toor</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->
\t\t";
        // line 231
        $this->displayBlock('body', $context, $blocks);
        // line 232
        echo "\t\t<!-- ============== Before Footer ====================== -->
\t\t<section class=\"before-footer bt-1 bb-1\">
\t\t\t<div class=\"container-fluid padd-0 full-width\">

\t\t\t\t<div class=\" col-md-2 col-sm-2 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex\">
\t\t\t\t\t\t<h4>Contact Us!</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t53 Boulevard Victor Hugo 44200 Nantes, France
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t<span class=\"d-block mrg-bot-0\">06 52 52 20 30</span>
\t\t\t\t\t\t<a href=\"#\" class=\"theme-cl\">
\t\t\t\t\t\t\t<strong>hello@gmail.com</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 col-sm-4 padd-0\">
\t\t\t\t\t<div class=\"data-flex padd-0\">
\t\t\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- =================== Before Footer ====================== -->

\t\t<!-- ================= footer start ========================= -->
\t\t<footer class=\"footer dark-bg\">
\t\t\t<div
\t\t\t\tclass=\"container\">

\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">

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
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_list");
        echo "\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<h4>Subscribe Now</h4>
\t\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-location-arrow font-20\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

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

\t\t\t\t\t\t<!-- App Links -->
\t\t\t\t\t\t<div class=\"f-app-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-apple\"></i>App Store</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-android\"></i>Play Store</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</footer>

\t\t<!-- Sign Up Window Code -->
\t\t<div class=\"modal fade\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\" id=\"myModalLabel1\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" alt=\"\"></div>

\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-advance theme-bg\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#employer\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\tEmployer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#candidate\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\tCandidate</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Nav tabs -->

\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"tab-content\">

\t\t\t\t\t\t\t<!-- Employer Panel 1-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade in show active\" id=\"employer\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"log-option\">
\t\t\t\t\t\t\t\t\t<span>OR</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 1-->

\t\t\t\t\t\t\t<!-- Candidate Panel 2-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"candidate\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"log-option\">
\t\t\t\t\t\t\t\t\t<span>OR</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 2-->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Sign Up Window -->
\t\t<!-- Switcher -->
\t\t<button class=\"w3-button w3-teal w3-xlarge w3-right\" onclick=\"openRightMenu()\">
\t\t\t<i class=\"spin theme-cl fa fa-cog\" aria-hidden=\"true\"></i>
\t\t</button>
\t\t<div class=\"w3-sidebar w3-bar-block w3-card-2 w3-animate-right\" style=\"display:none;right:0;\" id=\"rightMenu\">
\t\t\t<button onclick=\"closeRightMenu()\" class=\"w3-bar-item w3-button w3-large theme-bg\">Close &times;</button>
\t\t\t<ul id=\"styleOptions\" title=\"switch styling\">
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

\t\t<!-- =================== START JAVASCRIPT ================== -->
\t\t<script src=\"";
        // line 527
        echo "assets/plugins/js/jquery.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 528
        echo "assets/plugins/js/bootstrap.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 529
        echo "assets/plugins/js/viewportchecker.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 530
        echo "assets/plugins/js/bootsnav.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 531
        echo "assets/plugins/js/slick.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 532
        echo "assets/plugins/js/jquery.nice-select.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 533
        echo "assets/plugins/js/jquery.fancybox.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 534
        echo "assets/plugins/js/jquery.downCount.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 535
        echo "assets/plugins/js/freshslider.1.0.0.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 536
        echo "assets/plugins/js/moment.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 537
        echo "assets/plugins/js/daterangepicker.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 538
        echo "assets/plugins/js/wysihtml5-0.3.0.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 539
        echo "assets/plugins/js/bootstrap-wysihtml5.js";
        echo "\"></script>

\t\t<!-- Dashboard Js -->
\t\t<script src=\"";
        // line 542
        echo "assets/plugins/js/jquery.slimscroll.min.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 543
        echo "assets/plugins/js/jquery.metisMenu.js";
        echo "\"></script>
\t\t<script src=\"";
        // line 544
        echo "assets/plugins/js/jquery.easing.min.js";
        echo "\"></script>

\t\t<!-- Custom Js -->
\t\t<script src=\"";
        // line 547
        echo "assets/js/custom.js";
        echo "\"></script>

\t\t<script>
\t\t\t\$(function () {

\$('input[name=\"book-date\"]').daterangepicker({
autoUpdateInput: false,
locale: {
cancelLabel: 'Clear'
}
});

\$('input[name=\"book-date\"]').on('apply.daterangepicker', function (ev, picker) {
\$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});

\$('input[name=\"book-date\"]').on('cancel.daterangepicker', function (ev, picker) {
\$(this).val('');
});

});
\t\t</script>

\t\t<script src=\"";
        // line 570
        echo "assets/js/jQuery.style.switcher.js";
        echo "\"></script>
\t\t<script>
\t\t\tfunction openRightMenu() {
document.getElementById(\"rightMenu\").style.display = \"block\";
}
function closeRightMenu() {
document.getElementById(\"rightMenu\").style.display = \"none\";
}
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function () {
\$('#styleOptions').styleSwitcher();
});
\t\t</script>

\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 231
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
        return "base.html.twig";
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
        return array (  740 => 231,  710 => 570,  684 => 547,  678 => 544,  674 => 543,  670 => 542,  664 => 539,  660 => 538,  656 => 537,  652 => 536,  648 => 535,  644 => 534,  640 => 533,  636 => 532,  632 => 531,  628 => 530,  624 => 529,  620 => 528,  616 => 527,  410 => 324,  316 => 232,  314 => 231,  290 => 210,  230 => 153,  205 => 131,  180 => 109,  131 => 63,  125 => 60,  109 => 47,  94 => 35,  90 => 34,  68 => 17,  64 => 16,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<title>Tour & Travel Bootstrap Template</title>

\t\t<!-- Plugins CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('assets/plugins/css/plugins.css')}}\">

\t\t<!-- Custom style -->
\t\t<link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('assets/css/responsiveness.css')}}\" rel=\"stylesheet\"><link id=\"jssDefault\" rel=\"stylesheet\" href=\"{{asset('assets/css/skins/default.css')}}\">

\t</head>

\t<body>

\t\t<!-- ======================= Start Navigation ===================== -->
\t\t<nav class=\"navbar navbar-default navbar-mobile navbar-fixed light bootsnav\">
\t\t\t<div
\t\t\t\tclass=\"container\">

\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index-2.html\">
\t\t\t\t\t\t<img src=\"{{('assets/img/logo.png')}}\" class=\"logo logo-display\" alt=\"\">
\t\t\t\t\t\t<img src=\"{{('assets/img/logo.png')}}\" class=\"logo logo-scrolled\" alt=\"\">
\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">

\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"{{path('app_home_page')}}\">Home</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown megamenu-fw\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Brows</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu megamenu-content\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Destinations</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_civilisation_index') }}\">Civilisation List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_programe_index') }}\">Programe List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-grid-sidebar.html\">Destination Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-list-sidebar.html\">Destination List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">Destination Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Tours</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-grid.html\">Tour Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-list.html\">Tour List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-grid-sidebar.html\">Tour Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-list-sidebar.html\">tour List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tour-detail.html\">Tour Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Hotels</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-grid.html\">Hotel Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_hotel_list')}}\">Hotel List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Hotel Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-menu col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Restaurants</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-grid.html\">Restaurant Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_restaurant_list')}}\">Restaurant List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-grid-sidebar.html\">Restaurant Grid Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-list-sidebar.html\">Restaurant List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"restaurant-detail.html\">Restaurant Detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end col-3 -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_find_guide')}}\">Find Guide</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Extra</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu animated fadeOutUp\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"cart.html\">Add To Cart</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"payment-methode.html\">Paayment Methode</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"success-page.html\">Success Page</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"about-us.html\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">View More</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"faqs.html\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">LogIn</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"signup.html\">SignUp</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"icons.html\">icons</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_dashboard')}}\"></a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"br-right\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#signin\">
\t\t\t\t\t\t\t\t<i class=\"login-icon ti-user\"></i>Login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sign-up\">
\t\t\t\t\t\t\t<a class=\"btn-signup red-btn\" href=\"tour-grid-sidebar.html\">
\t\t\t\t\t\t\t\t<span class=\"ti-briefcase\"></span>Booking Toor</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->
\t\t{% block body %}{% endblock %}
\t\t<!-- ============== Before Footer ====================== -->
\t\t<section class=\"before-footer bt-1 bb-1\">
\t\t\t<div class=\"container-fluid padd-0 full-width\">

\t\t\t\t<div class=\" col-md-2 col-sm-2 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex\">
\t\t\t\t\t\t<h4>Contact Us!</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t53 Boulevard Victor Hugo 44200 Nantes, France
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-sm-3 br-1 mbb-1\">
\t\t\t\t\t<div class=\"data-flex text-center\">
\t\t\t\t\t\t<span class=\"d-block mrg-bot-0\">06 52 52 20 30</span>
\t\t\t\t\t\t<a href=\"#\" class=\"theme-cl\">
\t\t\t\t\t\t\t<strong>hello@gmail.com</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 col-sm-4 padd-0\">
\t\t\t\t\t<div class=\"data-flex padd-0\">
\t\t\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin theme-cl\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- =================== Before Footer ====================== -->

\t\t<!-- ================= footer start ========================= -->
\t\t<footer class=\"footer dark-bg\">
\t\t\t<div
\t\t\t\tclass=\"container\">

\t\t\t\t<!-- Row Start -->
\t\t\t\t<div class=\"row\">

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
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_hotel_list')}}\">Hotel List</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-grid-sidebar.html\">Hotel Grid Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-list-sidebar.html\">Hotel List Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"hotel-detail.html\">Hotel Detail</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"restaurant-detail.html\">Restaurant Detail</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<h4>Subscribe Now</h4>
\t\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-location-arrow font-20\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>

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

\t\t\t\t\t\t<!-- App Links -->
\t\t\t\t\t\t<div class=\"f-app-box\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-apple\"></i>App Store</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-android\"></i>Play Store</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</footer>

\t\t<!-- Sign Up Window Code -->
\t\t<div class=\"modal fade\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\" id=\"myModalLabel1\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"text-center\"><img src=\"assets/img/logo.png\" class=\"img-responsive\" alt=\"\"></div>

\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-advance theme-bg\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#employer\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\tEmployer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#candidate\" role=\"tab\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\tCandidate</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- Nav tabs -->

\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"tab-content\">

\t\t\t\t\t\t\t<!-- Employer Panel 1-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade in show active\" id=\"employer\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"log-option\">
\t\t\t\t\t\t\t\t\t<span>OR</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 1-->

\t\t\t\t\t\t\t<!-- Candidate Panel 2-->
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"candidate\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>User Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"*********\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>Remember me
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Forget\" class=\"fl-right\">Forgot Password?</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn theme-btn full-width btn-m\">LogIn
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<div class=\"log-option\">
\t\t\t\t\t\t\t\t\t<span>OR</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row mrg-bot-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"fb-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>Sign In With Facebook</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"\" class=\"gplus-log-btn log-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>Sign In With Google+</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/.Panel 2-->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tab panels -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Sign Up Window -->
\t\t<!-- Switcher -->
\t\t<button class=\"w3-button w3-teal w3-xlarge w3-right\" onclick=\"openRightMenu()\">
\t\t\t<i class=\"spin theme-cl fa fa-cog\" aria-hidden=\"true\"></i>
\t\t</button>
\t\t<div class=\"w3-sidebar w3-bar-block w3-card-2 w3-animate-right\" style=\"display:none;right:0;\" id=\"rightMenu\">
\t\t\t<button onclick=\"closeRightMenu()\" class=\"w3-bar-item w3-button w3-large theme-bg\">Close &times;</button>
\t\t\t<ul id=\"styleOptions\" title=\"switch styling\">
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

\t\t<!-- =================== START JAVASCRIPT ================== -->
\t\t<script src=\"{{('assets/plugins/js/jquery.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/viewportchecker.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/bootsnav.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/slick.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/jquery.nice-select.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/jquery.fancybox.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/jquery.downCount.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/freshslider.1.0.0.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/moment.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/daterangepicker.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/wysihtml5-0.3.0.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/bootstrap-wysihtml5.js')}}\"></script>

\t\t<!-- Dashboard Js -->
\t\t<script src=\"{{('assets/plugins/js/jquery.slimscroll.min.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/jquery.metisMenu.js')}}\"></script>
\t\t<script src=\"{{('assets/plugins/js/jquery.easing.min.js')}}\"></script>

\t\t<!-- Custom Js -->
\t\t<script src=\"{{('assets/js/custom.js')}}\"></script>

\t\t<script>
\t\t\t\$(function () {

\$('input[name=\"book-date\"]').daterangepicker({
autoUpdateInput: false,
locale: {
cancelLabel: 'Clear'
}
});

\$('input[name=\"book-date\"]').on('apply.daterangepicker', function (ev, picker) {
\$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});

\$('input[name=\"book-date\"]').on('cancel.daterangepicker', function (ev, picker) {
\$(this).val('');
});

});
\t\t</script>

\t\t<script src=\"{{('assets/js/jQuery.style.switcher.js')}}\"></script>
\t\t<script>
\t\t\tfunction openRightMenu() {
document.getElementById(\"rightMenu\").style.display = \"block\";
}
function closeRightMenu() {
document.getElementById(\"rightMenu\").style.display = \"none\";
}
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function () {
\$('#styleOptions').styleSwitcher();
});
\t\t</script>

\t</body>

</html>
", "base.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\base.html.twig");
    }
}
