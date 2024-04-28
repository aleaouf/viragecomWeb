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

/* espacepartenaire/show.html.twig */
class __TwigTemplate_016804fb1f6539c8b7e3518c713e08e1 extends Template
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
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/show.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "espacepartenaire/show.html.twig", 1);
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

        echo "Espacepartenaire";
        
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
        echo "    <h1>Espacepartenaire</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEspace</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 12, $this->source); })()), "idEspace", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 16, $this->source); })()), "idUser", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 24, $this->source); })()), "localisation", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 28, $this->source); })()), "getIdType", [], "any", false, false, false, 28), "nomtype", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photos</th>
<td>
                                                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 33, $this->source); })()), "photos", [], "any", false, false, false, 33)) {
            // line 34
            echo "                                                        <img class=\"img-fluid w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 34, $this->source); })()), "photos", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
        }
        // line 36
        echo "                                                </td>            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 41, $this->source); })()), "getCategorie", [], "method", false, false, false, 41)) {
            // line 42
            echo "                <tr>
                    <th>Categorie</th>
                    <td>
                        ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 45, $this->source); })()), "getCategorie", [], "method", false, false, false, 45), "isEspacecouvert", [], "method", false, false, false, 45)) {
                // line 46
                echo "                            Espace Couvert
                        ";
            }
            // line 48
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 48, $this->source); })()), "getCategorie", [], "method", false, false, false, 48), "isEspaceenfants", [], "method", false, false, false, 48)) {
                // line 49
                echo "                            Espace Enfants
                        ";
            }
            // line 51
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 51, $this->source); })()), "getCategorie", [], "method", false, false, false, 51), "isEspacefumeur", [], "method", false, false, false, 51)) {
                // line 52
                echo "                            Espace Fumeur
                        ";
            }
            // line 54
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 54, $this->source); })()), "getCategorie", [], "method", false, false, false, 54), "isServicerestauration", [], "method", false, false, false, 54)) {
                // line 55
                echo "                            Service Restauration
                        ";
            }
            // line 57
            echo "                    </td>
                </tr>
            ";
        } else {
            // line 60
            echo "                <tr>
                    <th>Categorie</th>
                    <td>No Category</td>
                </tr>
            ";
        }
        // line 65
        echo "            
            <tr>
                <th>Accepted</th>
                <td>";
        // line 68
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 68, $this->source); })()), "accepted", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Nbclick</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 72, $this->source); })()), "nbclick", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
 <!-- Button to accept Espacepartenaire -->
    ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 77, $this->source); })()), "accepted", [], "any", false, false, false, 77)) {
            // line 78
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_accept", ["idEspace" => twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 78, $this->source); })()), "idEspace", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" method=\"POST\">
            <button type=\"submit\">Accept</button>
        </form>
    ";
        }
        // line 82
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_index");
        echo "\">back to list</a>


    ";
        // line 85
        echo twig_include($this->env, $context, "espacepartenaire/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "espacepartenaire/show.html.twig";
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
        return array (  233 => 85,  226 => 82,  218 => 78,  216 => 77,  208 => 72,  201 => 68,  196 => 65,  189 => 60,  184 => 57,  180 => 55,  177 => 54,  173 => 52,  170 => 51,  166 => 49,  163 => 48,  159 => 46,  157 => 45,  152 => 42,  150 => 41,  145 => 39,  140 => 36,  134 => 34,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}

{% block title %}Espacepartenaire{% endblock %}

{% block body %}
    <h1>Espacepartenaire</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEspace</th>
                <td>{{ espacepartenaire.idEspace }}</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ espacepartenaire.idUser }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ espacepartenaire.nom }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ espacepartenaire.localisation }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ espacepartenaire.getIdType.nomtype }}</td>
            </tr>
            <tr>
                <th>Photos</th>
<td>
                                                    {% if espacepartenaire.photos %}
                                                        <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/images/' ~ espacepartenaire.photos) }}\" alt=\"\">
                                                    {% endif %}
                                                </td>            </tr>
            <tr>
                <th>Description</th>
                <td>{{ espacepartenaire.description }}</td>
            </tr>
           {% if espacepartenaire.getCategorie() %}
                <tr>
                    <th>Categorie</th>
                    <td>
                        {% if espacepartenaire.getCategorie().isEspacecouvert() %}
                            Espace Couvert
                        {% endif %}
                        {% if espacepartenaire.getCategorie().isEspaceenfants() %}
                            Espace Enfants
                        {% endif %}
                        {% if espacepartenaire.getCategorie().isEspacefumeur() %}
                            Espace Fumeur
                        {% endif %}
                        {% if espacepartenaire.getCategorie().isServicerestauration() %}
                            Service Restauration
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <th>Categorie</th>
                    <td>No Category</td>
                </tr>
            {% endif %}
            
            <tr>
                <th>Accepted</th>
                <td>{{ espacepartenaire.accepted ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Nbclick</th>
                <td>{{ espacepartenaire.nbclick }}</td>
            </tr>
        </tbody>
    </table>
 <!-- Button to accept Espacepartenaire -->
    {% if not espacepartenaire.accepted %}
        <form action=\"{{ path('app_espacepartenaire_accept', {'idEspace': espacepartenaire.idEspace}) }}\" method=\"POST\">
            <button type=\"submit\">Accept</button>
        </form>
    {% endif %}
    <a href=\"{{ path('app_espacepartenaire_index') }}\">back to list</a>


    {{ include('espacepartenaire/_delete_form.html.twig') }}
{% endblock %}
", "espacepartenaire/show.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\espacepartenaire\\show.html.twig");
    }
}
