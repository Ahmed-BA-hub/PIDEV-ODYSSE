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

/* hotel/index.html.twig */
class __TwigTemplate_0869dea8fa1aa9eff022378d4de6c15c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HotelController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- ======================= Start Page Title ===================== -->
\t\t<div class=\"page-title image-title\" style=\"background-image:url(assets/img/hotel.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-wrap\">
\t\t\t\t<h2>Hotel List</h2>
\t\t\t\t<p><a href=\"#\" class=\"theme-cl\">Home</a> | <span>Hotel List</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ======================= End Pagee Title ===================== -->
\t\t
\t\t<!-- =========== Start All Hotel In Grid View =================== -->
\t\t<section class=\"gray-bg\">
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
\t\t\t\t\t\t\t\t <a href=\"hotel-grid.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-layout-grid2\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t <a href=\"hotel-list.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-view-list-alt\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Row -->
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-1.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Netherlands</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Antique Resort</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$254</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-warning\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-warning font-bold\">fair</span>1050 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>782</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-2.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Saudi Arabia</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-13%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Iceberg Resort</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$220</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1062 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>1782</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-3.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">United States</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-10%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Vision Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$424</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-info\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-info font-bold\">superb</span>1362 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>7254</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-4.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">San Marino</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Monsoon Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-danger\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-danger font-bold\">poor</span>1240 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2412</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-5.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Switzerland</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-20%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Comfort Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1300 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2541</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-6.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Singapore</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-11%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Farmhouse Hotel</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-info\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-info font-bold\">superb</span>2541 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>3215</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-7.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">United Kingdom</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Ivory House Hotel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-warning\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-warning font-bold\">fair</span>1110 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2540</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-8.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Qatar</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-10%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Prophecy Motel</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1200 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>1258</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t</section>
\t\t<!-- =========== End All Hotel In Grid View =================== -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hotel/index.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HotelController!{% endblock %}

{% block body %}
<!-- ======================= Start Page Title ===================== -->
\t\t<div class=\"page-title image-title\" style=\"background-image:url(assets/img/hotel.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-title-wrap\">
\t\t\t\t<h2>Hotel List</h2>
\t\t\t\t<p><a href=\"#\" class=\"theme-cl\">Home</a> | <span>Hotel List</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ======================= End Pagee Title ===================== -->
\t\t
\t\t<!-- =========== Start All Hotel In Grid View =================== -->
\t\t<section class=\"gray-bg\">
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
\t\t\t\t\t\t\t\t <a href=\"hotel-grid.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-layout-grid2\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t <a href=\"hotel-list.html\" class=\"btn btn-default tooltips\">
\t\t\t\t\t\t\t\t\t <i class=\"ti-flix ti-view-list-alt\"></i>
\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Row -->
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-1.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Netherlands</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Antique Resort</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$254</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-warning\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-warning font-bold\">fair</span>1050 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>782</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-2.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Saudi Arabia</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-13%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Iceberg Resort</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$220</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1062 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>1782</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-3.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">United States</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-10%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Vision Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$424</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-info\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-info font-bold\">superb</span>1362 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>7254</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-4.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">San Marino</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Monsoon Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-danger\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-danger font-bold\">poor</span>1240 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2412</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-5.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Switzerland</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-20%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Comfort Motel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1300 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2541</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-6.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Singapore</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-11%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Farmhouse Hotel</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-info\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-info font-bold\">superb</span>2541 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>3215</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-7.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">United Kingdom</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-12%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Ivory House Hotel</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">From <strong class=\"theme-cl\">\$324</strong> /per person</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-warning\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-warning font-bold\">fair</span>1110 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>2540</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t<!-- Singl hotel List -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"hotel-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/hotel/hotel-8.jpg\" class=\"img-responsive hotel-box-img\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-bookmark\">                                   
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-bookmark\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"hotel-place\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Qatar</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-sm-7\">\t
\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"discount-flick\">-10%</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner-ellipsis\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0px; padding: 0px; border: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"hotel-detail.html\">Prophecy Motel</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1200 Review</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"ti-eye padd-r-5\"></i>1258</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t</section>
\t\t<!-- =========== End All Hotel In Grid View =================== -->
{% endblock %}
", "hotel/index.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\hotel\\index.html.twig");
    }
}
