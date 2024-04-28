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

/* frontoffice/list_users_front.html.twig */
class __TwigTemplate_915ff86ef7d95665f4ca274addf2f8fe extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/list_users_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/list_users_front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  <link href=";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/img/favicon.png"), "html", null, true);
        echo " rel=\"icon\">
  <link href=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">
  <link href=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/animate.css/animate.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/remixicon/remixicon.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/css/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">

</head>

<body>

<!-- ======= Top Bar ======= -->
<div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
  <div class=\"container d-flex justify-content-between\">
    <div class=\"contact-info d-flex align-items-center\">
      <i class=\"bi bi-envelope\"></i> <a href=\"mailto:contact@example.com\">contact@example.com</a>
      <i class=\"bi bi-phone\"></i> +1 5589 55488 55
    </div>
    <div class=\"d-none d-lg-flex social-links align-items-center\">
      <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
      <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
      <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">

    <h1 class=\"logo me-auto\"><a href=\"index.html\">صحتك</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
      <ul>
        <li><a class=\"nav-link scrollto \" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
        echo "\">Home</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#acabinets\">cabinets</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#pharmacies\">pharmacies</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#laboratoires\">laboratoires</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#forum\">forum</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#événements\">événements</a></li>
        <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
          <ul>
            <li><a href=\"#\">Drop Down 1</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
              <ul>
                <li><a href=\"#\">Deep Drop Down 1</a></li>
                <li><a href=\"#\">Deep Drop Down 2</a></li>
                <li><a href=\"#\">Deep Drop Down 3</a></li>
                <li><a href=\"#\">Deep Drop Down 4</a></li>
                <li><a href=\"#\">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href=\"#\">Drop Down 2</a></li>
            <li><a href=\"#\">Drop Down 3</a></li>
            <li><a href=\"#\">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
      </ul>
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </nav><!-- .navbar -->

    <a href=\"#appointment\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Make an</span> Appointment</a>

  </div>
</header><!-- End Header -->
<main id=\"main\">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class=\"breadcrumbs\">
    <div class=\"container\">

      

            <h1>List of Doctors</h1>

            <table class=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 103
            echo "                    <tr>
                        <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                        <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                        <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                        <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "age", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                        <td>
                            
                           
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                    <tr>
                        <td colspan=\"5\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </tbody>
            </table>

          

    </div>
  </section><!-- End Breadcrumbs Section -->



</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id=\"footer\">

  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 footer-contact\">
          <h3>صحتك</h3>
          <p>
            Esprit <br>
            Tunis, Tunisie <br>
            Tunisie <br><br>
            <strong>Phone:</strong> +21670250000 <br>
            <strong>Email:</strong> info@example.com<br>
          </p>
        </div>

        <div class=\"col-lg-2 col-md-6 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a class=\"nav-link scrollto \" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hello");
        echo "\">Home</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-6 footer-newsletter\">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action=\"\" method=\"post\">
            <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class=\"container d-md-flex py-4\">

    <div class=\"me-md-auto text-center text-md-start\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
    <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
      <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
      <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
      <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
      <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>


<script src=";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/js/main.js"), "html", null, true);
        echo "></script>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontoffice/list_users_front.html.twig";
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
        return array (  360 => 5,  346 => 217,  340 => 214,  336 => 213,  332 => 212,  328 => 211,  324 => 210,  263 => 152,  227 => 118,  218 => 114,  206 => 107,  202 => 106,  198 => 105,  194 => 104,  191 => 103,  186 => 102,  130 => 49,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  <link href={{asset('assetfront/img/favicon.png')}} rel=\"icon\">
  <link href={{asset('assetfront/assets/img/apple-touch-icon.png')}} rel=\"apple-touch-icon\">
  <link href={{asset('assetfront/vendor/fontawesome-free/css/all.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/animate.css/animate.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/bootstrap/css/bootstrap.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/bootstrap-icons/bootstrap-icons.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/boxicons/css/boxicons.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/glightbox/css/glightbox.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/remixicon/remixicon.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/vendor/swiper/swiper-bundle.min.css')}} rel=\"stylesheet\">
  <link href={{asset('assetfront/css/style.css')}} rel=\"stylesheet\">

</head>

<body>

<!-- ======= Top Bar ======= -->
<div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
  <div class=\"container d-flex justify-content-between\">
    <div class=\"contact-info d-flex align-items-center\">
      <i class=\"bi bi-envelope\"></i> <a href=\"mailto:contact@example.com\">contact@example.com</a>
      <i class=\"bi bi-phone\"></i> +1 5589 55488 55
    </div>
    <div class=\"d-none d-lg-flex social-links align-items-center\">
      <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
      <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
      <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">

    <h1 class=\"logo me-auto\"><a href=\"index.html\">صحتك</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

    <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
      <ul>
        <li><a class=\"nav-link scrollto \" href=\"{{path('app_hello')}}\">Home</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#acabinets\">cabinets</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#pharmacies\">pharmacies</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#laboratoires\">laboratoires</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#forum\">forum</a></li>
        <li><a class=\"nav-link scrollto\" href=\"#événements\">événements</a></li>
        <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
          <ul>
            <li><a href=\"#\">Drop Down 1</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
              <ul>
                <li><a href=\"#\">Deep Drop Down 1</a></li>
                <li><a href=\"#\">Deep Drop Down 2</a></li>
                <li><a href=\"#\">Deep Drop Down 3</a></li>
                <li><a href=\"#\">Deep Drop Down 4</a></li>
                <li><a href=\"#\">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href=\"#\">Drop Down 2</a></li>
            <li><a href=\"#\">Drop Down 3</a></li>
            <li><a href=\"#\">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
      </ul>
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </nav><!-- .navbar -->

    <a href=\"#appointment\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">Make an</span> Appointment</a>

  </div>
</header><!-- End Header -->
<main id=\"main\">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class=\"breadcrumbs\">
    <div class=\"container\">

      

            <h1>List of Doctors</h1>

            <table class=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>

                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.age }}</td>
                        <td>
                            
                           
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

          

    </div>
  </section><!-- End Breadcrumbs Section -->



</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id=\"footer\">

  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 footer-contact\">
          <h3>صحتك</h3>
          <p>
            Esprit <br>
            Tunis, Tunisie <br>
            Tunisie <br><br>
            <strong>Phone:</strong> +21670250000 <br>
            <strong>Email:</strong> info@example.com<br>
          </p>
        </div>

        <div class=\"col-lg-2 col-md-6 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a class=\"nav-link scrollto \" href=\"{{path('app_hello')}}\">Home</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-6 footer-newsletter\">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action=\"\" method=\"post\">
            <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class=\"container d-md-flex py-4\">

    <div class=\"me-md-auto text-center text-md-start\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
    <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
      <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
      <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
      <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
      <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src={{asset('assetfront/vendor/purecounter/purecounter_vanilla.js')}}></script>
<script src={{asset('assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{asset('assetfront/vendor/glightbox/js/glightbox.min.js')}}></script>
<script src={{asset('assetfront/vendor/swiper/swiper-bundle.min.js')}}></script>
<script src={{asset('assetfront/vendor/php-email-form/validate.js')}}></script>


<script src={{asset('assetfront/js/main.js')}}></script>
</body>
</html>
", "frontoffice/list_users_front.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\frontoffice\\list_users_front.html.twig");
    }
}
