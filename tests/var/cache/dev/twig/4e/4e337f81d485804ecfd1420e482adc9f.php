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

/* espacepartenaire/usershow.html.twig */
class __TwigTemplate_9bb724f7091a8a27acd8cf7c1b4827e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/usershow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/usershow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espacepartenaire/usershow.html.twig", 1);
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
        echo "<div style=\"padding-top: 200px\" class=\"container\">
    <h1>Espacepartenaire</h1>

    <table class=\"table\">
        <tbody>
            
            
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 19, $this->source); })()), "localisation", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
             
            <tr>
                <th>Type</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 24, $this->source); })()), "getIdType", [], "any", false, false, false, 24), "nomtype", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photos</th>
<td>
                                                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 29, $this->source); })()), "photos", [], "any", false, false, false, 29)) {
            // line 30
            echo "                                                        <img class=\"img-fluid w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 30, $this->source); })()), "photos", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
        }
        // line 32
        echo "                                                </td>            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 37, $this->source); })()), "getCategorie", [], "method", false, false, false, 37)) {
            // line 38
            echo "                <tr>
                    <th>Categorie</th>
                    <td>
                        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 41, $this->source); })()), "getCategorie", [], "method", false, false, false, 41), "isEspacecouvert", [], "method", false, false, false, 41)) {
                // line 42
                echo "                            Espace Couvert
                        ";
            }
            // line 44
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 44, $this->source); })()), "getCategorie", [], "method", false, false, false, 44), "isEspaceenfants", [], "method", false, false, false, 44)) {
                // line 45
                echo "                            Espace Enfants
                        ";
            }
            // line 47
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 47, $this->source); })()), "getCategorie", [], "method", false, false, false, 47), "isEspacefumeur", [], "method", false, false, false, 47)) {
                // line 48
                echo "                            Espace Fumeur
                        ";
            }
            // line 50
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 50, $this->source); })()), "getCategorie", [], "method", false, false, false, 50), "isServicerestauration", [], "method", false, false, false, 50)) {
                // line 51
                echo "                            Service Restauration
                        ";
            }
            // line 53
            echo "                    </td>
                </tr>
            ";
        } else {
            // line 56
            echo "                <tr>
                    <th>Categorie</th>
                    <td>No Category</td>
                </tr>
            ";
        }
        // line 61
        echo "            
          
        </tbody>
    </table>
 <!-- Button to accept Espacepartenaire -->
    ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 66, $this->source); })()), "accepted", [], "any", false, false, false, 66)) {
            // line 67
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_accept", ["idEspace" => twig_get_attribute($this->env, $this->source, (isset($context["espacepartenaire"]) || array_key_exists("espacepartenaire", $context) ? $context["espacepartenaire"] : (function () { throw new RuntimeError('Variable "espacepartenaire" does not exist.', 67, $this->source); })()), "idEspace", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" method=\"POST\">
            <button type=\"submit\">Accept</button>
        </form>
    ";
        }
        // line 71
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_show_accepted");
        echo "\">back to list</a>

<div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "espacepartenaire/usershow.html.twig";
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
        return array (  203 => 71,  195 => 67,  193 => 66,  186 => 61,  179 => 56,  174 => 53,  170 => 51,  167 => 50,  163 => 48,  160 => 47,  156 => 45,  153 => 44,  149 => 42,  147 => 41,  142 => 38,  140 => 37,  135 => 35,  130 => 32,  124 => 30,  122 => 29,  114 => 24,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espacepartenaire{% endblock %}

{% block body %}
<div style=\"padding-top: 200px\" class=\"container\">
    <h1>Espacepartenaire</h1>

    <table class=\"table\">
        <tbody>
            
            
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
            
          
        </tbody>
    </table>
 <!-- Button to accept Espacepartenaire -->
    {% if not espacepartenaire.accepted %}
        <form action=\"{{ path('app_espacepartenaire_accept', {'idEspace': espacepartenaire.idEspace}) }}\" method=\"POST\">
            <button type=\"submit\">Accept</button>
        </form>
    {% endif %}
    <a href=\"{{ path('app_espacepartenaire_show_accepted') }}\">back to list</a>

<div>
{% endblock %}
", "espacepartenaire/usershow.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\espacepartenaire\\usershow.html.twig");
    }
}
