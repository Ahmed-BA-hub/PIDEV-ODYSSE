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

/* reservation_restaurant/list_admin.html.twig */
class __TwigTemplate_3296e35f5d6db328b49e2cb9059e53ba extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/list_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/list_admin.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reservation_restaurant/list_admin.html.twig", 1);
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

        echo "ReservationRestaurant List";
        
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
        echo "<script>
document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêcher la soumission du formulaire par défaut

    var date = document.getElementById('date-input').value; // Récupérer la date saisie dans le champ de recherche
    var restaurantName = document.getElementById('restaurant-name-input').value; // Récupérer le nom du restaurant saisi

    // Envoyer la requête AJAX avec la date saisie et le nom du restaurant
    fetch('/reservations/search?date=' + date + '&restaurantName=' + restaurantName)
        .then(response => response.json())
        .then(data => {
            // Mettre à jour le contenu du tableau HTML avec les résultats de la recherche
            var tableBody = document.getElementById('reservation-table-body');
            tableBody.innerHTML = ''; // Effacer le contenu actuel du tableau

            // Ajouter chaque réservation correspondant à la date saisie dans le tableau
            data.forEach(function(reservation) {
                var row = '<tr>';
                row += '<td>' + reservation.id + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.date + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.nbpersonne + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.heure + '</td>'; // Modifier avec les propriétés de la réservation
                row += '</tr>';
                tableBody.innerHTML += row; // Ajouter la ligne au tableau
            });
        })
        .catch(error => console.error('Error:', error));
});

</script>

    <h1>Reservation Restaurant </h1>
<form id=\"search-form\" action=\"/reservation/restaurant/admin/list\" method=\"GET\">
    <input type=\"date\" id=\"date-input\" name=\"date\">
    <input type=\"text\" id=\"restaurant-name-input\" name=\"restaurantName\">
    <button type=\"submit\">Rechercher</button>
</form>
    <table class=\"table\" id=\"reservation-table-body\">
        <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Nbpersonne</th>
                <th>Heure</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_restaurants"]) || array_key_exists("reservation_restaurants", $context) ? $context["reservation_restaurants"] : (function () { throw new RuntimeError('Variable "reservation_restaurants" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_restaurant"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "restaurant", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "date", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "date", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "nbpersonne", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "heure", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_restaurant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">show</a>
                 </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation_restaurant/list_admin.html.twig";
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
        return array (  181 => 69,  172 => 65,  163 => 61,  158 => 59,  154 => 58,  150 => 57,  146 => 56,  143 => 55,  138 => 54,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}ReservationRestaurant List{% endblock %}

{% block body %}
<script>
document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêcher la soumission du formulaire par défaut

    var date = document.getElementById('date-input').value; // Récupérer la date saisie dans le champ de recherche
    var restaurantName = document.getElementById('restaurant-name-input').value; // Récupérer le nom du restaurant saisi

    // Envoyer la requête AJAX avec la date saisie et le nom du restaurant
    fetch('/reservations/search?date=' + date + '&restaurantName=' + restaurantName)
        .then(response => response.json())
        .then(data => {
            // Mettre à jour le contenu du tableau HTML avec les résultats de la recherche
            var tableBody = document.getElementById('reservation-table-body');
            tableBody.innerHTML = ''; // Effacer le contenu actuel du tableau

            // Ajouter chaque réservation correspondant à la date saisie dans le tableau
            data.forEach(function(reservation) {
                var row = '<tr>';
                row += '<td>' + reservation.id + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.date + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.nbpersonne + '</td>'; // Modifier avec les propriétés de la réservation
                row += '<td>' + reservation.heure + '</td>'; // Modifier avec les propriétés de la réservation
                row += '</tr>';
                tableBody.innerHTML += row; // Ajouter la ligne au tableau
            });
        })
        .catch(error => console.error('Error:', error));
});

</script>

    <h1>Reservation Restaurant </h1>
<form id=\"search-form\" action=\"/reservation/restaurant/admin/list\" method=\"GET\">
    <input type=\"date\" id=\"date-input\" name=\"date\">
    <input type=\"text\" id=\"restaurant-name-input\" name=\"restaurantName\">
    <button type=\"submit\">Rechercher</button>
</form>
    <table class=\"table\" id=\"reservation-table-body\">
        <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Nbpersonne</th>
                <th>Heure</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation_restaurant in reservation_restaurants %}
            <tr>
                <td>{{ reservation_restaurant.restaurant }}</td>
                <td>{{ reservation_restaurant.date ? reservation_restaurant.date|date('Y-m-d') : '' }}</td>
                <td>{{ reservation_restaurant.nbpersonne }}</td>
                <td>{{ reservation_restaurant.heure }}</td>
                <td>
                    <a href=\"{{ path('app_reservation_restaurant_show', {'id': reservation_restaurant.id}) }}\">show</a>
                 </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "reservation_restaurant/list_admin.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDEV-ODYSSE\\templates\\reservation_restaurant\\list_admin.html.twig");
    }
}
