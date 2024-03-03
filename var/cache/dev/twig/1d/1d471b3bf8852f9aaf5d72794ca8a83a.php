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

/* guidedetails/index.html.twig */
class __TwigTemplate_ae68daff8edd6c972875c0941c51688e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guidedetails/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guidedetails/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guidedetails/index.html.twig", 1);
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

        echo "Hello GuidedetailsController!";
        
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
        echo "
<!-- ======================= Start Banner ===================== -->
\t\t<section class=\"page-title-banner\" style=\"background-image:url(assets/img/banner.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tr-list-detail\">
\t\t\t\t\t\t<div class=\"tr-list-thumb\">
\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tr-list-info\">
\t\t\t\t\t\t\t<h4>Daniel Duke Warm</h4>
\t\t\t\t\t\t\t<p>Austrailia</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= End Banner ===================== -->
\t\t
\t\t<!-- ======================= Guide Detail ===================== -->
\t\t<section class=\"tr-single-detail gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-md-8 col-sm-8\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Guide Detail -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-user\"></i>Guide</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"guider-box-detail\">
\t\t\t\t\t\t\t\t\t\t<div class=\"guider-box-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"guider-box-detail-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Daniel Duke Warm<sup class=\"theme-cl\">Guide</sup></h4>
\t\t\t\t\t\t\t\t\t\t\t<p>4 year Experience<span class=\"guider-status bg-success\">Online</span></p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">View Detail</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Message</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pr-table\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Tour type:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-danger\">Extraordinary</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-warning\">Food</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-success\">Travel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Activity Lavel:</strong>Minimal</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Language:</strong>English, French</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Location:</strong>Canada</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong></strong></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Ratting -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-star-o\"></i>Ratting</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"review_summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>8.5</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"cl-success\">Superb</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Based on 4 reviews</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>5 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" style=\"width: 90%\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>4 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>3 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>2 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 10%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>1 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-files\"></i>Description</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus..</p>
\t\t\t\t\t\t\t\t\t<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Extra features -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-thumb-up\"></i>Extra Features</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"simple-features-list\">
\t\t\t\t\t\t\t\t\t\t<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
\t\t\t\t\t\t\t\t\t\t<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
\t\t\t\t\t\t\t\t\t\t<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
\t\t\t\t\t\t\t\t\t\t<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
\t\t\t\t\t\t\t\t\t\t<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
\t\t\t\t\t\t\t\t\t\t<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
\t\t\t\t\t\t\t\t\t\t<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
\t\t\t\t\t\t\t\t\t\t<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\" data-toggle=\"collapse\" data-target=\"#review-pannel\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-write\"></i>All Review<i class=\"ti-menu fl-right\"></i></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body collapse\" id=\"review-pannel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-1.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.7/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Daniel Dicoss</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>87</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>52</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-2.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.4/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Archita Singh</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>65</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>78</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-3.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>5.0/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Devesh Patri</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>110</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>47</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-4.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.9/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Ruchi Sethi</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>120</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>36</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.8/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Duke Divalkis</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>80</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>70</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-6.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.7/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Shilka Rai</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>120</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>140</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<!-- Sidebar Start -->
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Tourist Overview -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Daniel Duke Warm<sup class=\"cl-success\">Tour Guide</sup></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10k Rehire
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-timer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t3 Year Exp.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t785 View
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t110 Share
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t22 comments
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t20 Likes
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- overview & booking Form -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"font-20\"><span class=\"theme-cl font-20\">\$</span>216<sub>/Per Day</sub></h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1362 Review</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<form class=\"book-form\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Check In</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"checkin\" id=\"checkin\" class=\"form-control\" value=\"Check in\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Check Out</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"checkout\" id=\"checkout\" class=\"form-control\" value=\"Check out\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Adult</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"adult\" value=\"1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Children</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"children\" value=\"0\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Room</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sl-side\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"wide form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-display=\"Room\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Night</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sl-side\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"wide form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-display=\"Night\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default full-width text-left\" data-toggle=\"collapse\" data-target=\"#extra-service\">Choose Extra Amenities<i class=\"ti-settings fl-right mrg-top-5\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"extra-service\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-features\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSatellite TV
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"2\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCoffeemaker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"3\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLuxury Bedding
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSwimming Pool
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"5\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFree Parking
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"6\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFree Wifi
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"7\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPets Allow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"8\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tElevator
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"9\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSpa/Sauna 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"11\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSecurity cameras 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 mrg-top-15\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-arrow theme-btn full-width\">Book now</a>\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Share this -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Share this</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGoogle plus
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tTwitter
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tLinkedIn
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tInstagram
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pinterest\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPinterest
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Share this -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Share this</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<div class=\"single-side-slide\">
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-1.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Suryansh Vighul</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$42/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-2.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Richita Setthy</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$32/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-3.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Adam Survinia</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$47/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-md-4 -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= Guide Detail ===================== -->\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "guidedetails/index.html.twig";
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

{% block title %}Hello GuidedetailsController!{% endblock %}

{% block body %}

<!-- ======================= Start Banner ===================== -->
\t\t<section class=\"page-title-banner\" style=\"background-image:url(assets/img/banner.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tr-list-detail\">
\t\t\t\t\t\t<div class=\"tr-list-thumb\">
\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tr-list-info\">
\t\t\t\t\t\t\t<h4>Daniel Duke Warm</h4>
\t\t\t\t\t\t\t<p>Austrailia</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= End Banner ===================== -->
\t\t
\t\t<!-- ======================= Guide Detail ===================== -->
\t\t<section class=\"tr-single-detail gray-bg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-md-8 col-sm-8\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Guide Detail -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-user\"></i>Guide</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"guider-box-detail\">
\t\t\t\t\t\t\t\t\t\t<div class=\"guider-box-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"guider-box-detail-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Daniel Duke Warm<sup class=\"theme-cl\">Guide</sup></h4>
\t\t\t\t\t\t\t\t\t\t\t<p>4 year Experience<span class=\"guider-status bg-success\">Online</span></p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info\">View Detail</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Message</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pr-table\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Tour type:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-danger\">Extraordinary</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-warning\">Food</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"t-type bg-success\">Travel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Activity Lavel:</strong>Minimal</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Language:</strong>English, French</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Location:</strong>Canada</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><strong></strong></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Ratting -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-star-o\"></i>Ratting</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"review_summary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>8.5</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"cl-success\">Superb</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Based on 4 reviews</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 98%\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>5 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" style=\"width: 90%\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>4 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>3 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>2 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 10%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-3\"><small><strong>1 stars</strong></small></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /row -->\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-files\"></i>Description</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus..</p>
\t\t\t\t\t\t\t\t\t<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Extra features -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-thumb-up\"></i>Extra Features</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"simple-features-list\">
\t\t\t\t\t\t\t\t\t\t<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
\t\t\t\t\t\t\t\t\t\t<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
\t\t\t\t\t\t\t\t\t\t<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
\t\t\t\t\t\t\t\t\t\t<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
\t\t\t\t\t\t\t\t\t\t<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
\t\t\t\t\t\t\t\t\t\t<li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
\t\t\t\t\t\t\t\t\t\t<li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</li>
\t\t\t\t\t\t\t\t\t\t<li>Pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes.</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t\t<div class=\"tr-single-header\" data-toggle=\"collapse\" data-target=\"#review-pannel\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t<h4><i class=\"ti-write\"></i>All Review<i class=\"ti-menu fl-right\"></i></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tr-single-body collapse\" id=\"review-pannel\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-1.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.7/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Daniel Dicoss</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>87</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>52</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-2.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.4/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Archita Singh</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>65</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>78</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-3.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>5.0/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Devesh Patri</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>110</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>47</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-4.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.9/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Ruchi Sethi</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>120</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>36</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-5.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.8/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Duke Divalkis</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>80</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>70</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Review -->
\t\t\t\t\t\t\t\t\t<div class=\"review-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"review-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-6.jpg\" class=\"img-responsive img-circle\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"review-box-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviewer-rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-star cl-warning\"></i>4.7/<span>5</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-user-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Shilka Rai</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-lc text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-heart\"></i>120</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"ti-comment\"></i>140</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<!-- Sidebar Start -->
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Tourist Overview -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Daniel Duke Warm<sup class=\"cl-success\">Tour Guide</sup></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10k Rehire
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-timer\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t3 Year Exp.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t785 View
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t110 Share
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-comment-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t22 comments
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t20 Likes
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- overview & booking Form -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-comment fl-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"view-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fl-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"font-20\"><span class=\"theme-cl font-20\">\$</span>216<sub>/Per Day</sub></h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t<div class=\"hotel-review entry-location\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"review-status bg-success\"><i class=\"ti-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<h6><span class=\"cl-success font-bold\">Good</span>1362 Review</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<form class=\"book-form\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Check In</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"checkin\" id=\"checkin\" class=\"form-control\" value=\"Check in\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Check Out</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"checkout\" id=\"checkout\" class=\"form-control\" value=\"Check out\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Adult</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"adult\" value=\"1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Children</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"children\" value=\"0\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Room</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sl-side\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"wide form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-display=\"Room\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Night</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sl-side\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"wide form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-display=\"Night\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default full-width text-left\" data-toggle=\"collapse\" data-target=\"#extra-service\">Choose Extra Amenities<i class=\"ti-settings fl-right mrg-top-5\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"extra-service\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-features\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSatellite TV
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"2\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCoffeemaker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"3\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLuxury Bedding
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"4\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSwimming Pool
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"5\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFree Parking
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"6\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFree Wifi
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"7\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPets Allow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"8\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tElevator
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"9\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSpa/Sauna 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"custom-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"11\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSecurity cameras 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 mrg-top-15\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-arrow theme-btn full-width\">Book now</a>\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Share this -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Share this</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<ul class=\"extra-service half\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGoogle plus
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tTwitter
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tLinkedIn
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tInstagram
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-icon-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pinterest\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tPinterest
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Share this -->
\t\t\t\t\t\t<div class=\"tr-single-box\">
\t\t\t\t\t\t\t<div class=\"tr-single-header\">
\t\t\t\t\t\t\t\t<h4>Share this</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tr-single-body\">
\t\t\t\t\t\t\t\t<div class=\"single-side-slide\">
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-1.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Suryansh Vighul</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$42/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-2.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Richita Setthy</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$32/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Single Guide -->
\t\t\t\t\t\t\t\t\t<div class=\"guides-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"guides-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guides-img-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/user-3.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"guider-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Adam Survinia</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"theme-cl font-bold\">\$47/Hour</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"guide-detail.html\" class=\"btn theme-btn full-width\">Book Now</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-md-4 -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- ======================= Guide Detail ===================== -->\t

{% endblock %}
", "guidedetails/index.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\guidedetails\\index.html.twig");
    }
}
