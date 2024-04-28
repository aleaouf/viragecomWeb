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

/* espacepartenaire/show_for_user.html.twig */
class __TwigTemplate_b7bc1fe0c6ecd81c6a5850c19249dba9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/show_for_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/show_for_user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espacepartenaire/show_for_user.html.twig", 1);
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

        echo "Espacepartenaire index";
        
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
    <div id=\"wrapper\">
        <div id=\"main\">
            <div class=\"inner\">

                <!-- Services -->
                <section class=\"services\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["espacepartenaires"]) || array_key_exists("espacepartenaires", $context) ? $context["espacepartenaires"] : (function () { throw new RuntimeError('Variable "espacepartenaires" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espacepartenaire"]) {
            // line 16
            echo "                            <div class=\"col-md-4\">
                                <div class=\"service-item\">
                                    <h4>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "localisation", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                                                                            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "getIdType", [], "any", false, false, false, 20), "nomtype", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>

                                    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "photos", [], "any", false, false, false, 22)) {
                // line 23
                echo "                                        <img class=\"img-fluid w-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "photos", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" alt=\"\">
                                    ";
            }
            // line 25
            echo "                                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                                    <div class=\"actions\">
                                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_usershow", ["idEspace" => twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">show</a>
                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_edit", ["idEspace" => twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">edit</a>
                                    </div>
                                </div>
                            </div>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                            <div class=\"col-md-12\">
                                <p>no records found</p>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espacepartenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </div>
                    </div>
                        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_espacepartenaire");
        echo "\">Create new</a>

                </section>
            </div>
        </div>

    </div>
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
        return "espacepartenaire/show_for_user.html.twig";
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
        return array (  162 => 39,  158 => 37,  149 => 33,  139 => 28,  135 => 27,  129 => 25,  123 => 23,  121 => 22,  116 => 20,  112 => 19,  108 => 18,  104 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espacepartenaire index{% endblock %}

{% block body %}
<div style=\"padding-top: 200px\" class=\"container\">
    <div id=\"wrapper\">
        <div id=\"main\">
            <div class=\"inner\">

                <!-- Services -->
                <section class=\"services\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            {% for espacepartenaire in espacepartenaires %}
                            <div class=\"col-md-4\">
                                <div class=\"service-item\">
                                    <h4>{{ espacepartenaire.nom }}</h4>
                                    <p>{{ espacepartenaire.localisation }}</p>
                                                                            <p>{{ espacepartenaire.getIdType.nomtype }}</p>

                                    {% if espacepartenaire.photos %}
                                        <img class=\"img-fluid w-100\" src=\"{{ asset('uploads/images/' ~ espacepartenaire.photos) }}\" alt=\"\">
                                    {% endif %}
                                    <p>{{ espacepartenaire.description }}</p>
                                    <div class=\"actions\">
                                        <a href=\"{{ path('app_espacepartenaire_usershow', {'idEspace': espacepartenaire.idEspace}) }}\">show</a>
                                        <a href=\"{{ path('app_espacepartenaire_edit', {'idEspace': espacepartenaire.idEspace}) }}\">edit</a>
                                    </div>
                                </div>
                            </div>
                            {% else %}
                            <div class=\"col-md-12\">
                                <p>no records found</p>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                        <a href=\"{{ path('app_new_espacepartenaire') }}\">Create new</a>

                </section>
            </div>
        </div>

    </div>
    <div>
{% endblock %}
", "espacepartenaire/show_for_user.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\espacepartenaire\\show_for_user.html.twig");
    }
}
