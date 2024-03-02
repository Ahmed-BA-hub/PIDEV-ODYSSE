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

/* civilisation/show_front.html.twig */
class __TwigTemplate_71b862a5f7b3c22f482d399f22c0eaae extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "civilisation/show_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "civilisation/show_front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "civilisation/show_front.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Civilisation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<br><br><br><br><br>
    
    <h1 align=\"center\">Civilisations details</h1>
 <div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 19, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"Image\" width=\"200px\" height=\"220px\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_civilisation_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\">return</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
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
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 50, $this->source); })()), "emplacement", [], "any", false, false, false, 50), "html", null, true);
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
        return "civilisation/show_front.html.twig";
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
        return array (  144 => 50,  129 => 38,  123 => 35,  107 => 22,  101 => 19,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}

{% block title %}Civilisation{% endblock %}

{% block body %}

<br><br><br><br><br>
    
    <h1 align=\"center\">Civilisations details</h1>
 <div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<article class=\"destination-box list-style\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t\t\t\t\t<div class=\"destination-box-image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(civilisation, 'imageFile') }}\" alt=\"Image\" width=\"200px\" height=\"220px\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_civilisation_index', {'id': civilisation.id}) }}\">return</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"destination-detail.html\">{{ civilisation.nom }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ civilisation.description }}</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"destination-detail.html\">{{ civilisation.emplacement }}</a></h4>
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
{% endblock %}
", "civilisation/show_front.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\civilisation\\show_front.html.twig");
    }
}
