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

/* dashboard/index.html.twig */
class __TwigTemplate_89358c8891d02d897d3f970a223a719b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>ODYSSEE</title>

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

\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\">Home</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_list");
        echo "\">Hotel List</a></li>
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
\t\t\t\t\t\t\t<a href=\"dashboard.html\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"dropdown dash-link\"><a href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive avatar\" alt=\"\" />Hi, Daniel</a> 
\t\t\t\t\t\t\t<ul class=\"dropdown-menu left-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"dashboard.html\">Dashboard</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://themezhub.com/\">My Profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Log Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>   
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->

\t\t
\t\t<!-- ======================= Start Dashboard ===================== -->
\t\t<section class=\"dashboard gray-bg padd-0 mrg-top-50\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-3 dashboard-bg\">
\t\t\t\t\t\t<!-- /. NAV TOP  -->
\t\t\t\t\t\t\t<nav class=\"navbar navbar-side\">
\t\t\t\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#dashboard-menu\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse sidebar-collapse\" id=\"dashboard-menu\">
\t\t\t\t\t\t\t\t<div class=\"profile-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-wrapper-thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"dashboard-user-status bg-success\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h4>Duke Daniel</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"nav\" id=\"main-menu\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"dashboard.html\"><i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i>Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"messages.html\"><i class=\"ti-email\" aria-hidden=\"true\"></i>Messages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"fa fa-clone\" aria-hidden=\"true\"></i>Manage Listing <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_civilisation_index_back");
        echo "\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Civilisation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-tours.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage programs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t   <li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-destinations.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Destinations</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-restaurants.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Restaurants</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"ti-location-pin\" aria-hidden=\"true\"></i>Add Listings <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://themezhub.com/\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Hotels</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_civilisation_new");
        echo "\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Civilisation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t   <li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_programe_new");
        echo "\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Programe</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"add-restaurants.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Restaurants</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"invoice.html\"><i class=\"fa-print\" aria-hidden=\"true\"></i>Invoice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"ti-calendar\" aria-hidden=\"true\"></i>My Booking <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"booking-1.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Booking 1</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"booking-2.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Booking 2</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Settings <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"basic-settings.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Basic Settings</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"site-settings.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Site Settings</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"my-profile.html\"><i class=\"ti-user\" aria-hidden=\"true\"></i>My Profile</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"add-payment-methode.html\"><i class=\"ti-credit-card\" aria-hidden=\"true\"></i>Add Payment Methode</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"log-off\">
\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- /. NAV SIDE  -->
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-lg-push-2 col-md-push-2 col-sm-push-3\">
\t\t\t\t\t\t<div class=\"row mrg-0 mrg-top-20\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h3 class=\"dashboard-title\">Dashboard</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- row -->
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rwidget-caption info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-info icon ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>372</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>New Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:80%;\" class=\"bg-info widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-danger icon ti-shopping-cart-full\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>412</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Happy Customer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:50%;\" class=\"bg-danger widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-success icon ti-medall\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>870</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>World Award</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:60%;\" class=\"bg-success widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption purple\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-purple icon ti-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>4770</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Total Sales</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:40%;\" class=\"bg-purple widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- row -->
\t\t\t\t\t\t\t\t\t";
        // line 389
        echo " ";
        $this->displayBlock('body', $context, $blocks);
        // line 390
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 480
        echo "\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= End Dashboard ===================== -->
\t\t\t
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
\t\t\t</div>
\t\t</footer>
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
\t\t<script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/viewportchecker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/bootsnav.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.downCount.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/freshslider.1.0.0.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Dashboard Js -->
\t\t<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/raphael.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/js/morris.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chart.js"), "html", null, true);
        echo "\"></script>
 
\t\t<!-- Custom Js -->
\t\t<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
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

    // line 389
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
        return "dashboard/index.html.twig";
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
        return array (  725 => 389,  696 => 663,  691 => 661,  685 => 658,  681 => 657,  677 => 656,  673 => 655,  669 => 654,  665 => 653,  659 => 650,  655 => 649,  651 => 648,  647 => 647,  643 => 646,  639 => 645,  635 => 644,  631 => 643,  627 => 642,  623 => 641,  619 => 640,  615 => 639,  611 => 638,  451 => 480,  448 => 390,  445 => 389,  284 => 210,  278 => 207,  253 => 185,  230 => 165,  193 => 131,  131 => 72,  92 => 36,  67 => 16,  63 => 15,  57 => 12,  44 => 1,);
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

    <title>ODYSSEE</title>

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

\t\t\t\t<!-- End Logo Header Navigation -->

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-left\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"{{path('app_home_page')}}\">Home</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Hotel Grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_hotel_list')}}\">Hotel List</a></li>
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
\t\t\t\t\t\t\t<a href=\"dashboard.html\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"dropdown dash-link\"><a href=\"#\" class=\"dropdown-toggle\"><img src=\"{{asset('assets/img/user-3.jpg')}}\" class=\"img-responsive avatar\" alt=\"\" />Hi, Daniel</a> 
\t\t\t\t\t\t\t<ul class=\"dropdown-menu left-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"dashboard.html\">Dashboard</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://themezhub.com/\">My Profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Log Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t</div>   
\t\t</nav>
\t\t<!-- ======================= End Navigation ===================== -->

\t\t
\t\t<!-- ======================= Start Dashboard ===================== -->
\t\t<section class=\"dashboard gray-bg padd-0 mrg-top-50\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-3 dashboard-bg\">
\t\t\t\t\t\t<!-- /. NAV TOP  -->
\t\t\t\t\t\t\t<nav class=\"navbar navbar-side\">
\t\t\t\t\t\t\t<!-- Start Logo Header Navigation -->
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#dashboard-menu\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse sidebar-collapse\" id=\"dashboard-menu\">
\t\t\t\t\t\t\t\t<div class=\"profile-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-wrapper-thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/img/user-3.jpg')}}\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"dashboard-user-status bg-success\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h4>Duke Daniel</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"nav\" id=\"main-menu\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"dashboard.html\"><i class=\"fa fa-dashboard\" aria-hidden=\"true\"></i>Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"messages.html\"><i class=\"ti-email\" aria-hidden=\"true\"></i>Messages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"fa fa-clone\" aria-hidden=\"true\"></i>Manage Listing <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_civilisation_index_back') }}\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Civilisation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-tours.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage programs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t   <li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-destinations.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Destinations</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"manage-restaurants.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Manage Restaurants</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"ti-location-pin\" aria-hidden=\"true\"></i>Add Listings <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://themezhub.com/\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Hotels</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_civilisation_new') }}\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Civilisation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t   <li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_programe_new') }}\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Programe</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"add-restaurants.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Add Restaurants</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"invoice.html\"><i class=\"fa-print\" aria-hidden=\"true\"></i>Invoice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"ti-calendar\" aria-hidden=\"true\"></i>My Booking <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"booking-1.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Booking 1</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"booking-2.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Booking 2</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Settings <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"basic-settings.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Basic Settings</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"site-settings.html\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i>Site Settings</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"my-profile.html\"><i class=\"ti-user\" aria-hidden=\"true\"></i>My Profile</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"add-payment-methode.html\"><i class=\"ti-credit-card\" aria-hidden=\"true\"></i>Add Payment Methode</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"log-off\">
\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- /. NAV SIDE  -->
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-lg-push-2 col-md-push-2 col-sm-push-3\">
\t\t\t\t\t\t<div class=\"row mrg-0 mrg-top-20\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h3 class=\"dashboard-title\">Dashboard</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- row -->
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rwidget-caption info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-info icon ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>372</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>New Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:80%;\" class=\"bg-info widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-danger icon ti-shopping-cart-full\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>412</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Happy Customer</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:50%;\" class=\"bg-danger widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-success icon ti-medall\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>870</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>World Award</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:60%;\" class=\"bg-success widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget simple-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-caption purple\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 padd-r-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"cl-purple icon ti-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>4770</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Total Sales</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width:40%;\" class=\"bg-purple widget-horigental-line\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- row -->
\t\t\t\t\t\t\t\t\t{#<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">Extra Area Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-center m-t-40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><i class=\"fa fa-circle m-r-5 cl-purple\"></i>Booking 220</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><i class=\"fa fa-circle m-r-5 cl-inverse\"></i>Cancelation 20</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><i class=\"fa fa-circle m-r-5 cl-success\"></i>Earning \$220</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"extra-area-chart\" style=\"height: 350px;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>#} {% block body %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{#<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Recen Booking</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-list ground-list-hove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground ground-single-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ground-avatar\" src=\"assets/img/user-1.jpg\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-status bg-online pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">Maryam Amiri</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-fade\">Co-Founder</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">Online</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground ground-single-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ground-avatar\" src=\"assets/img/user-2.jpg\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-status bg-offline pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">Maryam Amiri</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-fade\">Co-Founder</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">10 Min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground ground-single-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ground-avatar\" src=\"assets/img/user-3.jpg\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-status bg-working pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">Maryam Amiri</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-fade\">Co-Founder</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">20 Min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground ground-single-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ground-avatar\" src=\"assets/img/user-4.jpg\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-status bg-busy pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">Maryam Amiri</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-fade\">Co-Founder</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">18 Min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground ground-single-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"ground-avatar\" src=\"assets/img/user-5.jpg\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"profile-status bg-online pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">Maryam Amiri</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-fade\">Co-Founder</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ground-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">Online</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>#}
\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= End Dashboard ===================== -->
\t\t\t
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
\t\t\t</div>
\t\t</footer>
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
\t\t<script src=\"{{asset('assets/plugins/js/jquery.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/viewportchecker.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/bootsnav.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/slick.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/jquery.nice-select.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/jquery.fancybox.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/jquery.downCount.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/freshslider.1.0.0.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/moment.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/daterangepicker.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/wysihtml5-0.3.0.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/bootstrap-wysihtml5.js')}}\"></script>
\t\t
\t\t<!-- Dashboard Js -->
\t\t<script src=\"{{asset('assets/plugins/js/jquery.slimscroll.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/jquery.metisMenu.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/jquery.easing.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/raphael.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/plugins/js/morris.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/js/chart.js')}}\"></script>
 
\t\t<!-- Custom Js -->
\t\t<script src=\"{{asset('assets/js/custom.js')}}\"></script>
\t\t
\t\t<script src=\"{{asset('assets/js/jQuery.style.switcher.js')}}\"></script>
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

</html>", "dashboard/index.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\dashboard\\index.html.twig");
    }
}
