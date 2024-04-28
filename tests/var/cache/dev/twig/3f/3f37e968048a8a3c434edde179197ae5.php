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

/* base.backoffice.html.twig */
class __TwigTemplate_1f01faba561a17f87bd9d512fd9996e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.backoffice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">



    <title> Viragecom</title>


    <!-- Custom fonts for this template-->
    <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom styles for this template-->
    <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/css/sb-admin-2.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
</head>
<head>
    <!-- ... autres balises head ... -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
</head>

<body id=\"page-top\">
<!-- Page Wrapper -->
<div id=\"wrapper\">
    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\"> Viragecom </div>
        </a>
        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">
        <!-- Heading -->

        <!-- Divider -->
        <hr class=\"sidebar-divider\">
        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Sections
        </div>
        <!-- Nav Items for Sections -->

        <li class=\"nav-item\">
            
            
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Components:</h6>
";
        // line 57
        echo "
                </div>
            </div>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span></span></a>
        </li>
        
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_patients");
        echo "\">
                <i class=\"fas fa-fw fa-user-friends\"></i>
                <span></span>
            </a>
        </li>
        <!-- Add more sections as needed -->
        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>
        <!-- Logout Button -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">
        <!-- Main Content -->
        <div id=\"content\">
            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">HViragecom</span>
                            <img class=\"img-profile rounded-circle\" src=\"/Users/helio/Pictures/Screenshots/Capture d'écran_20240130_112641.png\">
                        </a>
                        <!-- Dropdown - User Information -->    
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class=\"container-fluid\">
                
                <!-- Content Row -->
                ";
        // line 138
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src=";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
<!-- Core plugin JavaScript-->
<script src=";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "></script>
<!-- Custom scripts for all pages-->
<script src=";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetfront/js/sb-admin-2.min.js"), "html", null, true);
        echo "></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 138
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 139
        echo "                    <section class=\"breadcrumbs\">
                        <div class=\"container\">
                            WELCOME BACK
                        </div>
                    </section><!-- End Breadcrumbs Section -->
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.backoffice.html.twig";
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
        return array (  267 => 139,  257 => 138,  244 => 181,  239 => 179,  234 => 177,  230 => 176,  197 => 145,  195 => 138,  136 => 82,  119 => 68,  106 => 57,  66 => 18,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">



    <title> Viragecom</title>


    <!-- Custom fonts for this template-->
    <link href={{asset('assetfront/vendor/fontawesome-free/css/all.min.css')}} rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom styles for this template-->
    <link href={{asset('assetfront/css/sb-admin-2.min.css')}} rel=\"stylesheet\">
</head>
<head>
    <!-- ... autres balises head ... -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
</head>

<body id=\"page-top\">
<!-- Page Wrapper -->
<div id=\"wrapper\">
    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\"> Viragecom </div>
        </a>
        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">
        <!-- Heading -->

        <!-- Divider -->
        <hr class=\"sidebar-divider\">
        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Sections
        </div>
        <!-- Nav Items for Sections -->

        <li class=\"nav-item\">
            
            
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Components:</h6>
{#                    <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>#}
{#                    <a class=\"collapse-item\" href=\"cards.html\">Cards</a>#}

                </div>
            </div>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span></span></a>
        </li>
        
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_patients') }}\">
                <i class=\"fas fa-fw fa-user-friends\"></i>
                <span></span>
            </a>
        </li>
        <!-- Add more sections as needed -->
        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>
        <!-- Logout Button -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">
        <!-- Main Content -->
        <div id=\"content\">
            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">HViragecom</span>
                            <img class=\"img-profile rounded-circle\" src=\"/Users/helio/Pictures/Screenshots/Capture d'écran_20240130_112641.png\">
                        </a>
                        <!-- Dropdown - User Information -->    
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class=\"container-fluid\">
                
                <!-- Content Row -->
                {% block body %}
                    <section class=\"breadcrumbs\">
                        <div class=\"container\">
                            WELCOME BACK
                        </div>
                    </section><!-- End Breadcrumbs Section -->
                {% endblock %}
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src={{asset('assetfront/vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('assetfront/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- Core plugin JavaScript-->
<script src={{asset('assetfront/vendor/jquery-easing/jquery.easing.min.js')}}></script>
<!-- Custom scripts for all pages-->
<script src={{asset('assetfront/js/sb-admin-2.min.js')}}></script>
</body>
</html>", "base.backoffice.html.twig", "C:\\Users\\Adem Tounsi\\Desktop\\viragecomWeb\\templates\\base.backoffice.html.twig");
    }
}
