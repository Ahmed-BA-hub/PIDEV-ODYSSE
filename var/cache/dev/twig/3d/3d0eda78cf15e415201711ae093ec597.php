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

/* civilisation/show.html.twig */
class __TwigTemplate_1380f134b110c91b6b481e12e7a873dc extends Template
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
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "civilisation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "civilisation/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "civilisation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<fieldset>
<br><br><br><br><br>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/abdallah.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <h1 align=\"center\">Civilisation</h1>
    <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 29, $this->source); })()), "emplacement", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 33, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"Image\" width=\"200px\" height=\"220px\"></td>
            </tr>
        </tbody>
    </table>
    <table align=\"center\">
        <tr>
            <td>    ";
        // line 40
        echo "                    <button class=\"button-5\" role=\"button\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_civilisation_index_back");
        echo "\" style=\"color: white;\">back to list</a></button></td>
            <td>    ";
        // line 42
        echo "                    <button class=\"button-5\" role=\"button\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_civilisation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["civilisation"]) || array_key_exists("civilisation", $context) ? $context["civilisation"] : (function () { throw new RuntimeError('Variable "civilisation" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" style=\"color: white;\">edit</a></button></td>
            <td>     ";
        // line 43
        echo twig_include($this->env, $context, "civilisation/_delete_form.html.twig");
        echo "</td>
        </tr>
    </table>
    <br><br><br><br><br>

    

    

   
    </fieldset>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "civilisation/show.html.twig";
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
        return array (  150 => 43,  145 => 42,  140 => 40,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}


{% block title %}Civilisation{% endblock %}

{% block body %}
<fieldset>
<br><br><br><br><br>
    <link href=\"{{asset('assets/css/abdallah.css')}}\" rel=\"stylesheet\">
    <h1 align=\"center\">Civilisation</h1>
    <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ civilisation.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ civilisation.nom }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ civilisation.description }}</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>{{ civilisation.emplacement }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"{{ vich_uploader_asset(civilisation, 'imageFile') }}\" alt=\"Image\" width=\"200px\" height=\"220px\"></td>
            </tr>
        </tbody>
    </table>
    <table align=\"center\">
        <tr>
            <td>    {# <a href=\"{{ path('app_civilisation_index') }}\">back to list</a>  #}
                    <button class=\"button-5\" role=\"button\"><a href=\"{{ path('app_civilisation_index_back') }}\" style=\"color: white;\">back to list</a></button></td>
            <td>    {# <a href=\"{{ path('app_civilisation_edit', {'id': civilisation.id}) }}\">edit</a> #}
                    <button class=\"button-5\" role=\"button\"><a href=\"{{ path('app_civilisation_edit', {'id': civilisation.id}) }}\" style=\"color: white;\">edit</a></button></td>
            <td>     {{ include('civilisation/_delete_form.html.twig') }}</td>
        </tr>
    </table>
    <br><br><br><br><br>

    

    

   
    </fieldset>
{% endblock %}
", "civilisation/show.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\civilisation\\show.html.twig");
    }
}
