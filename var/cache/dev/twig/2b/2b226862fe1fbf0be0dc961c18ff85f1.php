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

/* programe/_form.html.twig */
class __TwigTemplate_344e1927d75b0b9dc4075a22b257ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programe/_form.html.twig"));

        // line 1
        echo " ";
        // line 8
        echo "


";
        // line 12
        echo "
";
        // line 13
        echo " 
<style>
    /* Ajoutez vos styles CSS personnalisés ici */
    .custom-input {
        width: 20%; /* Largeur de 100% pour remplir la largeur du conteneur */
    padding: 10px; /* Espacement interne autour du texte */
    border: 1px solid #ccc; /* Bordure de 1px solide grise */
    border-radius: 5px; /* Coins arrondis */
    box-sizing: border-box; /* Inclure la taille de la bordure dans la largeur et la hauteur */
    font-size: 14px; /* Taille de la police */
    margin-bottom: 10px; /* Marge en bas pour séparer les champs */

    }

    .custom-textarea {
        width: 20%; /* Largeur de 100% pour remplir la largeur du conteneur */
    padding: 10px; /* Espacement interne autour du texte */
    border: 1px solid #ccc; /* Bordure de 1px solide grise */
    border-radius: 5px; /* Coins arrondis */
    box-sizing: border-box; /* Inclure la taille de la bordure dans la largeur et la hauteur */
    font-size: 14px; /* Taille de la police */
    margin-bottom: 10px; /* Marge en bas pour séparer les champs */
    }

    .custom-button {
        background-color: #4CAF50; /* Couleur de fond */
    color: white; /* Couleur du texte */
    padding: 10px 20px; /* Espacement interne haut/bas et gauche/droite */
    border: none; /* Pas de bordure */
    border-radius: 5px; /* Coins arrondis */
    cursor: pointer; /* Curseur pointeur au survol */
    font-size: 14px; /* Taille de la police */
    margin-top: 10px; /* Marge en haut pour séparer du champ précédent */
    }
    

    /* Ajoutez d'autres styles personnalisés au besoin */

</style> 

";
        // line 53
        echo " 
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "custom-input", "placeholder" => "Entrez le nom"]]);
        echo "
    <br>
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "duree", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "custom-input", "placeholder" => "Entrez la durée"]]);
        echo "
    <br>
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "date", [], "any", false, false, false, 60), 'row', ["attr" => ["placeholder" => "Sélectionnez la date"]]);
        echo " 

    <br>
    <br>
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "civilisation_id", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "custom-input"]]);
        echo "
    <br>

    <button class=\"button-5\">";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 67, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "programe/_form.html.twig";
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
        return array (  130 => 68,  126 => 67,  120 => 64,  113 => 60,  108 => 58,  103 => 56,  98 => 54,  95 => 53,  53 => 13,  50 => 12,  45 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {#{{ form_start(form ,{'attr': {'novalidate': 'novalidate'}} ) }}
    {{ form_widget(form) }}

        

    <button class=\"button-5\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}



{# templates/formulaire.twig #}

{# Inclure vos propres styles CSS #} 
<style>
    /* Ajoutez vos styles CSS personnalisés ici */
    .custom-input {
        width: 20%; /* Largeur de 100% pour remplir la largeur du conteneur */
    padding: 10px; /* Espacement interne autour du texte */
    border: 1px solid #ccc; /* Bordure de 1px solide grise */
    border-radius: 5px; /* Coins arrondis */
    box-sizing: border-box; /* Inclure la taille de la bordure dans la largeur et la hauteur */
    font-size: 14px; /* Taille de la police */
    margin-bottom: 10px; /* Marge en bas pour séparer les champs */

    }

    .custom-textarea {
        width: 20%; /* Largeur de 100% pour remplir la largeur du conteneur */
    padding: 10px; /* Espacement interne autour du texte */
    border: 1px solid #ccc; /* Bordure de 1px solide grise */
    border-radius: 5px; /* Coins arrondis */
    box-sizing: border-box; /* Inclure la taille de la bordure dans la largeur et la hauteur */
    font-size: 14px; /* Taille de la police */
    margin-bottom: 10px; /* Marge en bas pour séparer les champs */
    }

    .custom-button {
        background-color: #4CAF50; /* Couleur de fond */
    color: white; /* Couleur du texte */
    padding: 10px 20px; /* Espacement interne haut/bas et gauche/droite */
    border: none; /* Pas de bordure */
    border-radius: 5px; /* Coins arrondis */
    cursor: pointer; /* Curseur pointeur au survol */
    font-size: 14px; /* Taille de la police */
    margin-top: 10px; /* Marge en haut pour séparer du champ précédent */
    }
    

    /* Ajoutez d'autres styles personnalisés au besoin */

</style> 

{# Afficher le formulaire #} 
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    {{ form_row(form.nom, {'attr': {'class': 'custom-input', 'placeholder': 'Entrez le nom'}}) }}
    <br>
    {{ form_row(form.duree, {'attr': {'class': 'custom-input', 'placeholder': 'Entrez la durée'}}) }}
    <br>
    {{ form_row(form.date, {'attr': { 'placeholder': 'Sélectionnez la date'}}) }} 

    <br>
    <br>
    {{ form_row(form.civilisation_id, {'attr': {'class': 'custom-input'}}) }}
    <br>

    <button class=\"button-5\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} ", "programe/_form.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\programe\\_form.html.twig");
    }
}
