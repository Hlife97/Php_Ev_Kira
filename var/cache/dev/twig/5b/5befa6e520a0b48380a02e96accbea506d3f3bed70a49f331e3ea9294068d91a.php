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

/* admin/header.html.twig */
class __TwigTemplate_d4895496855db144e03d69b9b846dfc1c6f8b543fb2c67b6b5148684367fced1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        // line 1
        echo "<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin5\">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i
                        class=\"ti-menu ti-close\"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/logo-icon.png\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                        <!-- dark Logo text -->
                        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" />

                    </span>
                    <!-- Logo icon -->
                    <!-- <b class=\"logo-icon\"> -->
                    <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src=\"../../assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\"
                    data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link sidebartoggler waves-effect waves-light\"
                            href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\"><i
                                class=\"mdi mdi-menu font-24\"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-none d-md-block\">Create New <i class=\"fa fa-angle-down\"></i></span>
                            <span class=\"d-block d-md-none\"><i class=\"fa fa-plus\"></i></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\"
                            href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search position-absolute\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\"> <a
                                class=\"srh-btn\"><i class=\"ti-close\"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i
                                class=\"font-24 mdi mdi-comment-processing\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\"
                            aria-labelledby=\"2\">
                            <ul class=\"list-style-none\">
                                <li>
                                    <div class=\"\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-success btn-circle\"><i
                                                        class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Event today</h5>
                                                    <span class=\"mail-desc\">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Settings</h5>
                                                    <span class=\"mail-desc\">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Pavan kumar</h5>
                                                    <span class=\"mail-desc\">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-danger btn-circle\"><i
                                                        class=\"fa fa-link\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Luanch Admin</h5>
                                                    <span class=\"mail-desc\">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My
                                Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My
                                Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i>
                                Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i>
                                Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i
                                    class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"p-l-30 p-10\"><a href=\"javascript:void(0)\"
                                    class=\"btn btn-sm btn-success btn-rounded\">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 186,  82 => 35,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin5\">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i
                        class=\"ti-menu ti-close\"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon p-l-10\">
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"{{ asset ('assets')}}/admin/assets/images/logo-icon.png\" alt=\"homepage\" class=\"light-logo\" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                        <!-- dark Logo text -->
                        <img src=\"{{ asset ('assets')}}/admin/assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" />

                    </span>
                    <!-- Logo icon -->
                    <!-- <b class=\"logo-icon\"> -->
                    <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src=\"../../assets/images/logo-text.png\" alt=\"homepage\" class=\"light-logo\" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\"
                    data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-left mr-auto\">
                    <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link sidebartoggler waves-effect waves-light\"
                            href=\"javascript:void(0)\" data-sidebartype=\"mini-sidebar\"><i
                                class=\"mdi mdi-menu font-24\"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-none d-md-block\">Create New <i class=\"fa fa-angle-down\"></i></span>
                            <span class=\"d-block d-md-none\"><i class=\"fa fa-plus\"></i></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item search-box\"> <a class=\"nav-link waves-effect waves-dark\"
                            href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search position-absolute\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search &amp; enter\"> <a
                                class=\"srh-btn\"><i class=\"ti-close\"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav float-right\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-bell font-24\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i
                                class=\"font-24 mdi mdi-comment-processing\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\"
                            aria-labelledby=\"2\">
                            <ul class=\"list-style-none\">
                                <li>
                                    <div class=\"\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-success btn-circle\"><i
                                                        class=\"ti-calendar\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Event today</h5>
                                                    <span class=\"mail-desc\">Just a reminder that event</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Settings</h5>
                                                    <span class=\"mail-desc\">You can customize this template</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Pavan kumar</h5>
                                                    <span class=\"mail-desc\">Just see the my admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\" class=\"link border-top\">
                                            <div class=\"d-flex no-block align-items-center p-10\">
                                                <span class=\"btn btn-danger btn-circle\"><i
                                                        class=\"fa fa-link\"></i></span>
                                                <div class=\"m-l-10\">
                                                    <h5 class=\"m-b-0\">Luanch Admin</h5>
                                                    <span class=\"mail-desc\">Just see the my new admin!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic\" href=\"\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                src=\"{{ asset ('assets')}}/admin/assets/images/users/1.jpg\" alt=\"user\" class=\"rounded-circle\" width=\"31\"></a>
                        <div class=\"dropdown-menu dropdown-menu-right user-dd animated\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-user m-r-5 m-l-5\"></i> My
                                Profile</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-wallet m-r-5 m-l-5\"></i> My
                                Balance</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-email m-r-5 m-l-5\"></i>
                                Inbox</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5 m-l-5\"></i>
                                Account Setting</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\"><i
                                    class=\"fa fa-power-off m-r-5 m-l-5\"></i> Logout</a>
                            <div class=\"dropdown-divider\"></div>
                            <div class=\"p-l-30 p-10\"><a href=\"javascript:void(0)\"
                                    class=\"btn btn-sm btn-success btn-rounded\">View Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->", "admin/header.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\header.html.twig");
    }
}
