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

/* Espacepartenaire/_form.html.twig */
class __TwigTemplate_90eb3e332a362d6fe2dd5e830d7cbc4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Espacepartenaire/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Espacepartenaire/_form.html.twig"));

        // line 2
        echo "
<style>
    /* Custom form styles */
    .needs-validation {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Custom styles for form inputs */
    .needs-validation input[type=\"text\"],
    .needs-validation textarea,
    .needs-validation select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-sizing: border-box;
    }

    /* Custom styles for choice label */
    .needs-validation label {
        display: block; /* Ensures labels appear on new lines */
        margin-bottom: 5px; /* Adjust spacing between labels and inputs */
        font-weight: bold; /* Example: make labels bold */
    }

    /* Custom styles for radio buttons */
    .needs-validation input[type=\"radio\"] {
        /* Example styles: */
        margin-right: 5px; /* Adjust spacing between radio buttons */
        vertical-align: middle; /* Align radio buttons vertically with labels */
    }

    /* Custom styles for the submit button */
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px; /* Adjust spacing between button and other elements */
    }
</style>

";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        echo "
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'widget');
        echo "
    <button class=\"btn\">";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 50, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Espacepartenaire/_form.html.twig";
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
        return array (  103 => 51,  99 => 50,  95 => 49,  91 => 48,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Your Twig template #}

<style>
    /* Custom form styles */
    .needs-validation {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Custom styles for form inputs */
    .needs-validation input[type=\"text\"],
    .needs-validation textarea,
    .needs-validation select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-sizing: border-box;
    }

    /* Custom styles for choice label */
    .needs-validation label {
        display: block; /* Ensures labels appear on new lines */
        margin-bottom: 5px; /* Adjust spacing between labels and inputs */
        font-weight: bold; /* Example: make labels bold */
    }

    /* Custom styles for radio buttons */
    .needs-validation input[type=\"radio\"] {
        /* Example styles: */
        margin-right: 5px; /* Adjust spacing between radio buttons */
        vertical-align: middle; /* Align radio buttons vertically with labels */
    }

    /* Custom styles for the submit button */
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px; /* Adjust spacing between button and other elements */
    }
</style>

{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "Espacepartenaire/_form.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\espacepartenaire\\_form.html.twig");
    }
}
