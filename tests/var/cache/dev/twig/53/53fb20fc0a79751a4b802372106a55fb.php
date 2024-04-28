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

/* base.html.twig */
class __TwigTemplate_31391a9be05108d314534c6f64f176d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>

<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">
    <h1 class=\"logo me-auto\"><a href=\"index.html\">Viragecom</a></h1>
    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
      <ul>
        <li><a class=\"nav-link scrollto\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
        echo "\">Home</a></li>
       
        <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
      </ul>
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </nav>
    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_front_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"appointment-btn scroll-to-top\">Profile</a>
      <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"appointment-btn scroll-to-top\">Logout</a>
    ";
        } else {
            // line 37
            echo "      <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"appointment-btn scroll-to-top\">Login</a>
      <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"appointment-btn scroll-to-top\">Register</a>
    ";
        }
        // line 40
        echo "  </div>
</header>

";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "  <section class=\"breadcrumbs\">
    <div class=\"container\">
      WELCOME
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  213 => 44,  203 => 43,  184 => 5,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  147 => 50,  145 => 43,  140 => 40,  135 => 38,  130 => 37,  125 => 35,  120 => 34,  118 => 33,  109 => 27,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  <link href=\"{{ asset('assetfront/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assetfront/assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">
  <link href=\"{{ asset('assetfront/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assetfront/css/style.css') }}\" rel=\"stylesheet\">
</head>

<body>

<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">
    <h1 class=\"logo me-auto\"><a href=\"index.html\">Viragecom</a></h1>
    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
      <ul>
        <li><a class=\"nav-link scrollto\" href=\"{{ path('app_hello') }}\">Home</a></li>
       
        <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
      </ul>
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </nav>
    {% if app.user %}
      <a href=\"{{ path('app_utilisateur_front_edit', {'id': app.user.id}) }}\" class=\"appointment-btn scroll-to-top\">Profile</a>
      <a href=\"{{ path('app_logout') }}\" class=\"appointment-btn scroll-to-top\">Logout</a>
    {% else %}
      <a href=\"{{ path('app_login') }}\" class=\"appointment-btn scroll-to-top\">Login</a>
      <a href=\"{{ path('app_register') }}\" class=\"appointment-btn scroll-to-top\">Register</a>
    {% endif %}
  </div>
</header>

{% block body %}
  <section class=\"breadcrumbs\">
    <div class=\"container\">
      WELCOME
    </div>
  </section>
{% endblock %}

<script src=\"{{ asset('assetfront/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assetfront/vendor/glightbox/js/glightbox.min.js') }}\"></script>
<script src=\"{{ asset('assetfront/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<script src=\"{{ asset('assetfront/vendor/php-email-form/validate.js') }}\"></script>
<script src=\"{{ asset('assetfront/js/main.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\base.html.twig");
    }
}
