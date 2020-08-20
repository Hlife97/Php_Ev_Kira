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

/* admin/sidebar.html.twig */
class __TwigTemplate_805c032e97d0a6cafb850e4df3e9b0a62f4bab719d890fcebe369f5ade52b268 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "      <style type=\"text/css\">
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
    text-align:center;
}
      </style>

<aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <div class=\"image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "image", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" class=\"center\" alt=\"User Image\" width=\"50\" >
        </div>
        <div class=\"info\">
            <a href=\"/admin/user\" class=\"center\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "surname", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
        </div>
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"p-t-30\">

                <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                        href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span
                            class=\"hide-menu\">Leased</span></a>
                    <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                        <li class=\"sidebar-item\"><a href=\"form-basic.html\" class=\"sidebar-link\"><i
                                    class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> New </span></a>
                        </li>
                        <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i
                                    class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\">Accepted</span></a>
                        </li>
                    </ul>
                </li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/category\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span
                            class=\"hide-menu\">Category</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/ev\"
                        aria-expanded=\"false\"><i class=\"mdi mdi-home\"></i><span class=\"hide-menu\">Homes</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/setting\" aria-expanded=\"false\"><i class=\"mdi mdi-settings\"></i><span
                            class=\"hide-menu\">Settings</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/user\" aria-expanded=\"false\"><i class=\"mdi mdi- fas fa-user\"></i><span
                            class=\"hide-menu\">Users</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/comment\" aria-expanded=\"false\"><i class=\"mdi mdi-forum\"></i><span
                            class=\"hide-menu\">Comments</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/messages\" aria-expanded=\"false\"><i class=\"mdi mdi-email\"></i><span
                            class=\"hide-menu\">Messeages</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" aria-expanded=\"false\"><i class=\"mdi mdi-logout-variant\"></i><span
                            class=\"hide-menu\">Log Out</span></a></li>
            </ul>
        </nav>
    </div>
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 53,  65 => 18,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("      <style type=\"text/css\">
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
    text-align:center;
}
      </style>

<aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <div class=\"image\">
            <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" class=\"center\" alt=\"User Image\" width=\"50\" >
        </div>
        <div class=\"info\">
            <a href=\"/admin/user\" class=\"center\">{{app.user.name}} {{app.user.surname}}</a>
        </div>
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"p-t-30\">

                <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                        href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span
                            class=\"hide-menu\">Leased</span></a>
                    <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                        <li class=\"sidebar-item\"><a href=\"form-basic.html\" class=\"sidebar-link\"><i
                                    class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> New </span></a>
                        </li>
                        <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i
                                    class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\">Accepted</span></a>
                        </li>
                    </ul>
                </li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/category\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span
                            class=\"hide-menu\">Category</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"/admin/ev\"
                        aria-expanded=\"false\"><i class=\"mdi mdi-home\"></i><span class=\"hide-menu\">Homes</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/setting\" aria-expanded=\"false\"><i class=\"mdi mdi-settings\"></i><span
                            class=\"hide-menu\">Settings</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/user\" aria-expanded=\"false\"><i class=\"mdi mdi- fas fa-user\"></i><span
                            class=\"hide-menu\">Users</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/comment\" aria-expanded=\"false\"><i class=\"mdi mdi-forum\"></i><span
                            class=\"hide-menu\">Comments</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"/admin/messages\" aria-expanded=\"false\"><i class=\"mdi mdi-email\"></i><span
                            class=\"hide-menu\">Messeages</span></a></li>
                <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                        href=\"{{ path('app_logout')}}\" aria-expanded=\"false\"><i class=\"mdi mdi-logout-variant\"></i><span
                            class=\"hide-menu\">Log Out</span></a></li>
            </ul>
        </nav>
    </div>
</aside>", "admin/sidebar.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\sidebar.html.twig");
    }
}
