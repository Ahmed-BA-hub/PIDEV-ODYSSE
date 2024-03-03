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

/* programe/show.html.twig */
class __TwigTemplate_6d2ff8f006c3c662b5366a305a99e7da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "programe/show.html.twig", 1);
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

        echo "Programe";
        
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
    <h1 align=\"center\">Programe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 24, $this->source); })()), "duree", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                
                ";
        // line 34
        echo "            </tr>
            <tr>
                <th>civilisation</th>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 37, $this->source); })()), "getCivilisationId", [], "method", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</th>
            </tr>
        </tbody>
    </table>
    <table align=\"center\">
        <tr>
            <td>    ";
        // line 44
        echo "                    <button class=\"button-5\" role=\"button\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programe_index_back");
        echo "\" style=\"color: white;\">back to list</a></button></td>
            <td>    ";
        // line 46
        echo "                    <button class=\"button-5\" role=\"button\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programe_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["programe"]) || array_key_exists("programe", $context) ? $context["programe"] : (function () { throw new RuntimeError('Variable "programe" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" style=\"color: white;\">edit</a></button></td>
            <td>    ";
        // line 47
        echo twig_include($this->env, $context, "programe/_delete_form.html.twig");
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
        return "programe/show.html.twig";
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
        return array (  155 => 47,  150 => 46,  145 => 44,  136 => 37,  131 => 34,  123 => 28,  116 => 24,  109 => 20,  102 => 16,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}


{% block title %}Programe{% endblock %}

{% block body %}
<fieldset>
<br><br><br><br><br>
    <link href=\"{{asset('assets/css/abdallah.css')}}\" rel=\"stylesheet\">
    <h1 align=\"center\">Programe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ programe.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ programe.nom }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ programe.duree }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ programe.date ? programe.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Image</th>
                
                {# <td><img src=\"{{ asset (programe.image) }}\" alt=\"image\" width=\"100px\" height=\"100px\" /></td> #}
            </tr>
            <tr>
                <th>civilisation</th>
                <th>{{programe.getCivilisationId().nom}}</th>
            </tr>
        </tbody>
    </table>
    <table align=\"center\">
        <tr>
            <td>    {# <a href=\"{{ path('app_programe_index') }}\">back to list</a> #}
                    <button class=\"button-5\" role=\"button\"><a href=\"{{ path('app_programe_index_back') }}\" style=\"color: white;\">back to list</a></button></td>
            <td>    {# <a href=\"{{ path('app_programe_edit', {'id': programe.id}) }}\">edit</a> #}
                    <button class=\"button-5\" role=\"button\"><a href=\"{{ path('app_programe_edit', {'id': programe.id}) }}\" style=\"color: white;\">edit</a></button></td>
            <td>    {{ include('programe/_delete_form.html.twig') }}</td>
        </tr>
    </table>
    <br><br><br><br><br>
    
    </fieldset>
{% endblock %}
", "programe/show.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\programe\\show.html.twig");
    }
}
