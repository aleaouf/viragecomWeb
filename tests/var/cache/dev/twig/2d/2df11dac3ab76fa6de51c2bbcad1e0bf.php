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

/* backoffice/user/index.html.twig */
class __TwigTemplate_c903a7b08109464d3639503b4e299e6d extends Template
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
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "backoffice/user/index.html.twig", 1);
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
        echo "    <div class=\"container mt-4\">
        <h1>Utilisateur Index</h1>

        <table class=\"table table-striped mt-4\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "age", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "role", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"User Actions\">
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Show</a>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-secondary\">Edit</a>
                            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["utilisateur"], "isBanned", [], "any", false, false, false, 30)) {
                // line 31
                echo "                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_unban", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">Unban</button>
                                </form>
                            ";
            } else {
                // line 35
                echo "                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Ban</button>
                                </form>
                            ";
            }
            // line 39
            echo "                            <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 40))), "html", null, true);
            echo "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_backoffice");
        echo "\" class=\"btn btn-success mt-3\">Create New</a>
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
        return "backoffice/user/index.html.twig";
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
        return array (  172 => 54,  167 => 51,  158 => 47,  146 => 40,  141 => 39,  133 => 35,  125 => 31,  123 => 30,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  90 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Utilisateur Index</h1>

        <table class=\"table table-striped mt-4\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for utilisateur in utilisateurs %}
                <tr>
                    <td>{{ utilisateur.id }}</td>
                    <td>{{ utilisateur.nom }}</td>
                    <td>{{ utilisateur.prenom }}</td>
                    <td>{{ utilisateur.age }}</td>
                    <td>{{ utilisateur.role }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"User Actions\">
                            <a href=\"{{ path('app_utilisateur_show', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                            <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-secondary\">Edit</a>
                            {% if utilisateur.isBanned %}
                                <form method=\"post\" action=\"{{ path('admin_user_unban', {'id': utilisateur.id}) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">Unban</button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('admin_user_ban', {'id': utilisateur.id}) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Ban</button>
                                </form>
                            {% endif %}
                            <form method=\"post\" action=\"{{ path('app_utilisateur_delete', {'id': utilisateur.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ utilisateur.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_register_backoffice') }}\" class=\"btn btn-success mt-3\">Create New</a>
    </div>
{% endblock %}
", "backoffice/user/index.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\backoffice\\user\\index.html.twig");
    }
}
