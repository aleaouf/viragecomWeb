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

/* registration/register.html.twig */
class __TwigTemplate_aad2bfe2854749db030aa67b4a111643 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        echo "    <div style=\"padding-top: 200px\" class=\"container mx-auto text-center\">
        <div class=\"pb-12\">
            <h1 class=\"heading\">Register</h1>

            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            <div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4\">
                ";
        // line 12
        $context["formFields"] = [["name" => "nom", "label" => "Nom"], ["name" => "prenom", "label" => "Prenom"], ["name" => "email", "label" => "Email"], ["name" => "age", "label" => "Age"], ["name" => "role", "label" => "Role"], ["name" => "plainPassword", "label" => "Password"]];
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 21
            echo "                    <div class=\"form-group\">
                        <label for=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"block text-gray-700\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 22), "html", null, true);
            echo "</label>
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 23), [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 24), [], "any", false, false, false, 24), 'errors');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                <div class=\"form-group\">
                    <div class=\"form-check\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "agreeTerms", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                        <label for=\"agreeTerms\" class=\"form-check-label\">
                            I agree to the Terms and Conditions
                        </label>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "agreeTerms", [], "any", false, false, false, 33), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <button type=\"submit\" class=\"submit-button\">Register</button>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  148 => 39,  139 => 33,  132 => 29,  128 => 27,  119 => 24,  115 => 23,  109 => 22,  106 => 21,  101 => 20,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div style=\"padding-top: 200px\" class=\"container mx-auto text-center\">
        <div class=\"pb-12\">
            <h1 class=\"heading\">Register</h1>

            {{ form_start(registrationForm) }}
            <div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4\">
                {% set formFields = [
                    {'name': 'nom', 'label': 'Nom'},
                    {'name': 'prenom', 'label': 'Prenom'},
                    {'name': 'email', 'label': 'Email'},
                    {'name': 'age', 'label': 'Age'},
                    {'name': 'role', 'label': 'Role'},
                    {'name': 'plainPassword', 'label': 'Password'},
                ] %}
                {% for field in formFields %}
                    <div class=\"form-group\">
                        <label for=\"{{ field.name }}\" class=\"block text-gray-700\">{{ field.label }}</label>
                        {{ form_widget(attribute(registrationForm, field.name), {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(attribute(registrationForm, field.name)) }}
                    </div>
                {% endfor %}
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                        <label for=\"agreeTerms\" class=\"form-check-label\">
                            I agree to the Terms and Conditions
                        </label>
                        {{ form_errors(registrationForm.agreeTerms) }}
                    </div>
                </div>
            </div>

            <button type=\"submit\" class=\"submit-button\">Register</button>
            {{ form_end(registrationForm) }}
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\registration\\register.html.twig");
    }
}
