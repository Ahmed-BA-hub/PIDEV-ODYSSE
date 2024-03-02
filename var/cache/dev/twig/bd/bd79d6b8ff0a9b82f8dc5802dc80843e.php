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

/* programe/show_front.html.twig */
class __TwigTemplate_cfc14692dad4b4619994a26e7123c3d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/show_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/show_front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "programe/show_front.html.twig", 1);
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

        echo "programes ";
        
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
        echo "<br><br><br><br><br>
<h1 align=\"center\">programes details</h1>
<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 15, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"Image\" width=\"200px\" height=\"220px\"></a> 
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programe_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">return</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>";
        // line 19
        ((twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 19, $this->source); })()), "date", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 19, $this->source); })()), "date", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</span>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 33, $this->source); })()), "duree", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 45, $this->source); })()), "getCivilisationId", [], "method", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
        echo "</a></h4>
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

                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "programe/show_front.html.twig";
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
        return array (  144 => 45,  129 => 33,  123 => 30,  109 => 19,  104 => 17,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}programes {% endblock %}

{% block body %}
<br><br><br><br><br>
<h1 align=\"center\">programes details</h1>
<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(programe, 'imageFile') }}\" alt=\"Image\" width=\"200px\" height=\"220px\"></a> 
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_programe_index', {'id': programe.id}) }}\">return</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"destination-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-car\"></i><span>{{ programe.date ? programe.date|date('Y-m-d') : '' }}</span>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">{{ programe.nom }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ programe.duree }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"meta-item meta-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"coauthors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">{{programe.getCivilisationId().nom}}</a></h4>
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

                    {% endblock %}", "programe/show_front.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\programe\\show_front.html.twig");
    }
}
