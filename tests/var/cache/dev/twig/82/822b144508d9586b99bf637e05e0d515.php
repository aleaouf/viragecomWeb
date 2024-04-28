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

/* espacepartenaire/index.html.twig */
class __TwigTemplate_4731607db0651c4b9e181b5334c5f031 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espacepartenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "espacepartenaire/index.html.twig", 1);
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
        echo "    <div id=\"wrapper\">
        <div id=\"main\">
            <div class=\"inner\">

                <!-- Services -->
                <section class=\"services\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Localisation</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["espacepartenaires"]) || array_key_exists("espacepartenaires", $context) ? $context["espacepartenaires"] : (function () { throw new RuntimeError('Variable "espacepartenaires" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["espacepartenaire"]) {
            // line 27
            echo "                                            <tr>
                                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "localisation", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "getIdType", [], "any", false, false, false, 30), "nomtype", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_show", ["idEspace" => twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">show</a>
                                                    ";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "accepted", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                                        <form id=\"acceptForm_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 35), "html", null, true);
                echo "\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_accept", ["idEspace" => twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" method=\"POST\">
                                                            <a href=\"#\" onclick=\"acceptEspacepartenaire('";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 36), "html", null, true);
                echo "'); return false;\">accept</a>
                                                        </form>
                                                    ";
            }
            // line 39
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espacepartenaire_delete", ["idEspace" => twig_get_attribute($this->env, $this->source, $context["espacepartenaire"], "idEspace", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\"></a>
                                                    ";
            // line 40
            echo twig_include($this->env, $context, "espacepartenaire/_delete_form.html.twig");
            echo "

                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                                            <tr>
                                                <td colspan=\"5\">No records found</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espacepartenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <script>
        function acceptEspacepartenaire(id) {
            var form = document.getElementById(\"acceptForm_\" + id);
            var formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData
            }).then(response => {
                if (response.ok) {
                    location.reload(); // Refresh the page
                } else {
                    // Handle the error case
                }
            }).catch(error => {
                // Handle network errors
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "espacepartenaire/index.html.twig";
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
        return array (  199 => 49,  190 => 45,  172 => 40,  167 => 39,  161 => 36,  154 => 35,  152 => 34,  148 => 33,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  128 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}

{% block title %}Espacepartenaire index{% endblock %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"main\">
            <div class=\"inner\">

                <!-- Services -->
                <section class=\"services\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Localisation</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for espacepartenaire in espacepartenaires %}
                                            <tr>
                                                <td>{{ espacepartenaire.nom }}</td>
                                                <td>{{ espacepartenaire.localisation }}</td>
                                                <td>{{ espacepartenaire.getIdType.nomtype }}</td>
                                                <td>{{ espacepartenaire.description }}</td>
                                                <td>
                                                    <a href=\"{{ path('app_espacepartenaire_show', {'idEspace': espacepartenaire.idEspace}) }}\">show</a>
                                                    {% if not espacepartenaire.accepted %}
                                                        <form id=\"acceptForm_{{ espacepartenaire.idEspace }}\" action=\"{{ path('app_espacepartenaire_accept', {'idEspace': espacepartenaire.idEspace}) }}\" method=\"POST\">
                                                            <a href=\"#\" onclick=\"acceptEspacepartenaire('{{ espacepartenaire.idEspace }}'); return false;\">accept</a>
                                                        </form>
                                                    {% endif %}
                                                    <a href=\"{{ path('app_espacepartenaire_delete', {'idEspace': espacepartenaire.idEspace}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\"></a>
                                                    {{ include('espacepartenaire/_delete_form.html.twig') }}

                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"5\">No records found</td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <script>
        function acceptEspacepartenaire(id) {
            var form = document.getElementById(\"acceptForm_\" + id);
            var formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData
            }).then(response => {
                if (response.ok) {
                    location.reload(); // Refresh the page
                } else {
                    // Handle the error case
                }
            }).catch(error => {
                // Handle network errors
            });
        }
    </script>
{% endblock %}
", "espacepartenaire/index.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\espacepartenaire\\index.html.twig");
    }
}
