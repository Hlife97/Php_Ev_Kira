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
class __TwigTemplate_1105f34a3e6405e537d9ac33ad12567bdfea4d380911289ff0ec61bff3e740a8 extends Template
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
        echo " <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
     <!-- Sidebar scroll-->
     <div class=\"scroll-sidebar\">
         <!-- Sidebar navigation-->
         <nav class=\"sidebar-nav\">
             <ul id=\"sidebarnav\" class=\"p-t-30\">
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"index.html\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span
                             class=\"hide-menu\">Dashboard</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"charts.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span
                             class=\"hide-menu\">Charts</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"widgets.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bubble\"></i><span
                             class=\"hide-menu\">Widgets</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"tables.html\" aria-expanded=\"false\"><i class=\"mdi mdi-border-inside\"></i><span
                             class=\"hide-menu\">Tables</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"grid.html\"
                         aria-expanded=\"false\"><i class=\"mdi mdi-blur-linear\"></i><span class=\"hide-menu\">Full
                             Width</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span
                             class=\"hide-menu\">Forms </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"form-basic.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> Form Basic </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Form Wizard </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"pages-buttons.html\" aria-expanded=\"false\"><i class=\"mdi mdi-relative-scale\"></i><span
                             class=\"hide-menu\">Buttons</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-face\"></i><span
                             class=\"hide-menu\">Icons </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"icon-material.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-emoticon\"></i><span class=\"hide-menu\"> Material Icons </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"icon-fontawesome.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-emoticon-cool\"></i><span class=\"hide-menu\"> Font Awesome Icons
                                 </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"pages-elements.html\" aria-expanded=\"false\"><i class=\"mdi mdi-pencil\"></i><span
                             class=\"hide-menu\">Elements</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i
                             class=\"mdi mdi-move-resize-variant\"></i><span class=\"hide-menu\">Addons </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-multiplication-box\"></i><span class=\"hide-menu\"> Gallery </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-calendar.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-calendar-check\"></i><span class=\"hide-menu\"> Calendar </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-invoice.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-bulletin-board\"></i><span class=\"hide-menu\"> Invoice </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-chat.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-message-outline\"></i><span class=\"hide-menu\"> Chat Option
                                 </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-account-key\"></i><span
                             class=\"hide-menu\">Authentication </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"authentication-login.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-all-inclusive\"></i><span class=\"hide-menu\"> Login </span></a></li>
                         <li class=\"sidebar-item\"><a href=\"authentication-register.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-all-inclusive\"></i><span class=\"hide-menu\"> Register </span></a>
                         </li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-alert\"></i><span
                             class=\"hide-menu\">Errors </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"error-403.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 403 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-404.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 404 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-405.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 405 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-500.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 500 </span></a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
     <!-- Sidebar scroll-->
     <div class=\"scroll-sidebar\">
         <!-- Sidebar navigation-->
         <nav class=\"sidebar-nav\">
             <ul id=\"sidebarnav\" class=\"p-t-30\">
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"index.html\" aria-expanded=\"false\"><i class=\"mdi mdi-view-dashboard\"></i><span
                             class=\"hide-menu\">Dashboard</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"charts.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bar\"></i><span
                             class=\"hide-menu\">Charts</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"widgets.html\" aria-expanded=\"false\"><i class=\"mdi mdi-chart-bubble\"></i><span
                             class=\"hide-menu\">Widgets</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"tables.html\" aria-expanded=\"false\"><i class=\"mdi mdi-border-inside\"></i><span
                             class=\"hide-menu\">Tables</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"grid.html\"
                         aria-expanded=\"false\"><i class=\"mdi mdi-blur-linear\"></i><span class=\"hide-menu\">Full
                             Width</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-receipt\"></i><span
                             class=\"hide-menu\">Forms </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"form-basic.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-note-outline\"></i><span class=\"hide-menu\"> Form Basic </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"form-wizard.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-note-plus\"></i><span class=\"hide-menu\"> Form Wizard </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"pages-buttons.html\" aria-expanded=\"false\"><i class=\"mdi mdi-relative-scale\"></i><span
                             class=\"hide-menu\">Buttons</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-face\"></i><span
                             class=\"hide-menu\">Icons </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"icon-material.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-emoticon\"></i><span class=\"hide-menu\"> Material Icons </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"icon-fontawesome.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-emoticon-cool\"></i><span class=\"hide-menu\"> Font Awesome Icons
                                 </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                         href=\"pages-elements.html\" aria-expanded=\"false\"><i class=\"mdi mdi-pencil\"></i><span
                             class=\"hide-menu\">Elements</span></a></li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i
                             class=\"mdi mdi-move-resize-variant\"></i><span class=\"hide-menu\">Addons </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"index2.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-view-dashboard\"></i><span class=\"hide-menu\"> Dashboard-2 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-gallery.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-multiplication-box\"></i><span class=\"hide-menu\"> Gallery </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-calendar.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-calendar-check\"></i><span class=\"hide-menu\"> Calendar </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-invoice.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-bulletin-board\"></i><span class=\"hide-menu\"> Invoice </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"pages-chat.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-message-outline\"></i><span class=\"hide-menu\"> Chat Option
                                 </span></a></li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-account-key\"></i><span
                             class=\"hide-menu\">Authentication </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"authentication-login.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-all-inclusive\"></i><span class=\"hide-menu\"> Login </span></a></li>
                         <li class=\"sidebar-item\"><a href=\"authentication-register.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-all-inclusive\"></i><span class=\"hide-menu\"> Register </span></a>
                         </li>
                     </ul>
                 </li>
                 <li class=\"sidebar-item\"> <a class=\"sidebar-link has-arrow waves-effect waves-dark\"
                         href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"mdi mdi-alert\"></i><span
                             class=\"hide-menu\">Errors </span></a>
                     <ul aria-expanded=\"false\" class=\"collapse  first-level\">
                         <li class=\"sidebar-item\"><a href=\"error-403.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 403 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-404.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 404 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-405.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 405 </span></a>
                         </li>
                         <li class=\"sidebar-item\"><a href=\"error-500.html\" class=\"sidebar-link\"><i
                                     class=\"mdi mdi-alert-octagon\"></i><span class=\"hide-menu\"> Error 500 </span></a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->", "admin/sidebar.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\sidebar.html.twig");
    }
}
