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

/* admin/footer.html.twig */
class __TwigTemplate_0adace9c0d8a16cd6e87dc11208afac81da8769cdab318e07b3bbaee6e96e821 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        // line 1
        echo " <!-- footer -->
 <!-- ============================================================== -->
 <footer class=\"footer text-center\">
     All Rights Reserved by Matrix-admin. Designed and Developed by <a href=\"https://wrappixel.com\">WrapPixel</a>.
 </footer>
 <!-- ============================================================== -->
 <!-- End footer -->
 <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/popper.js/dist/umd/popper.min.js\"></script>
 <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
 <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/extra-libs/sparkline/sparkline.js\"></script>
 <!--Wave Effects -->
 <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/waves.js\"></script>
 <!--Menu sidebar -->
 <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/sidebarmenu.js\"></script>
 <!--Custom JavaScript -->
 <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/custom.min.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  80 => 18,  75 => 16,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- footer -->
 <!-- ============================================================== -->
 <footer class=\"footer text-center\">
     All Rights Reserved by Matrix-admin. Designed and Developed by <a href=\"https://wrappixel.com\">WrapPixel</a>.
 </footer>
 <!-- ============================================================== -->
 <!-- End footer -->
 <script src=\"{{ asset ('assets')}}/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src=\"{{ asset ('assets')}}/admin/assets/libs/popper.js/dist/umd/popper.min.js\"></script>
 <script src=\"{{ asset ('assets')}}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src=\"{{ asset ('assets')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
 <script src=\"{{ asset ('assets')}}/admin/assets/extra-libs/sparkline/sparkline.js\"></script>
 <!--Wave Effects -->
 <script src=\"{{ asset ('assets')}}/admin/dist/js/waves.js\"></script>
 <!--Menu sidebar -->
 <script src=\"{{ asset ('assets')}}/admin/dist/js/sidebarmenu.js\"></script>
 <!--Custom JavaScript -->
 <script src=\"{{ asset ('assets')}}/admin/dist/js/custom.min.js\"></script>", "admin/footer.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\footer.html.twig");
    }
}
