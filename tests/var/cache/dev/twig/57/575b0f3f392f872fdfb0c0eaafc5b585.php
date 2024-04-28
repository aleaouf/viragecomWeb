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

/* frontoffice/index.html.twig */
class __TwigTemplate_af3f7085d6c16ffd10b11ded58c0cb86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontoffice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "        <div style=\"padding-top: 200px\" class=\"container\">
            <h1>Welcome, ";
            // line 7
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "nom", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "nom", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "nom", [], "any", false, false, false, 7), "html", null, true))) : (print ("User")));
            echo " ";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "prenom", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "prenom", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 7), "prenom", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
            echo "!</h1>
            <p>You are logged in as ";
            // line 8
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 8), "role", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 8), "role", [], "any", false, false, false, 8)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 8), "role", [], "any", false, false, false, 8), "html", null, true))) : (print ("Role")));
            echo ".</p>
            <p>Your email address: ";
            // line 9
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 9), "email", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 9), "email", [], "any", false, false, false, 9)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 9), "email", [], "any", false, false, false, 9), "html", null, true))) : (print ("Email")));
            echo "</p>
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 10), "age", [], "any", true, true, false, 10)) {
                // line 11
                echo "                <p>Your age: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "age", [], "any", false, false, false, 11), "html", null, true);
                echo "</p>
            ";
            }
            // line 13
            echo "            <!-- Add more information as needed -->
            <p>This is the home page of our website. Feel free to explore and learn more about what we have to offer.</p>
            <p>Here are some quick links to get you started:</p>
            <ul>
                <li><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
            echo "\">About Us</a></li>
                <li><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
            echo "\">Contact Us</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>
    ";
        } else {
            // line 23
            echo "        <!-- You may want to add content for non-authenticated users or redirect them to the login page -->
        <div style=\"padding-top: 200px\" class=\"container\">
            <h1>Welcome to Viragecom!</h1>
            <p>This is the home page of our website . Feel free to explore and learn more about what we have to offer.</p>
            <p>Here are some quick links to get you started:</p>
            <ul>
                <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
            echo "\">About Us</a></li>
                <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
            echo "\">Contact Us</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>
    ";
        }
        // line 35
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
        return "frontoffice/index.html.twig";
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
        return array (  136 => 35,  128 => 30,  124 => 29,  116 => 23,  108 => 18,  104 => 17,  98 => 13,  92 => 11,  90 => 10,  86 => 9,  82 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% if app.user %}
        <div style=\"padding-top: 200px\" class=\"container\">
            <h1>Welcome, {{ app.user.nom ?? 'User' }} {{ app.user.prenom ?? '' }}!</h1>
            <p>You are logged in as {{ app.user.role ?? 'Role' }}.</p>
            <p>Your email address: {{ app.user.email ?? 'Email' }}</p>
            {% if app.user.age is defined %}
                <p>Your age: {{ app.user.age }}</p>
            {% endif %}
            <!-- Add more information as needed -->
            <p>This is the home page of our website. Feel free to explore and learn more about what we have to offer.</p>
            <p>Here are some quick links to get you started:</p>
            <ul>
                <li><a href=\"{{ path('app_hello') }}\">About Us</a></li>
                <li><a href=\"{{ path('app_hello') }}\">Contact Us</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>
    {% else %}
        <!-- You may want to add content for non-authenticated users or redirect them to the login page -->
        <div style=\"padding-top: 200px\" class=\"container\">
            <h1>Welcome to Viragecom!</h1>
            <p>This is the home page of our website . Feel free to explore and learn more about what we have to offer.</p>
            <p>Here are some quick links to get you started:</p>
            <ul>
                <li><a href=\"{{ path('app_hello') }}\">About Us</a></li>
                <li><a href=\"{{ path('app_hello') }}\">Contact Us</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>
    {% endif %}
    
{% endblock %}
", "frontoffice/index.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\frontoffice\\index.html.twig");
    }
}
