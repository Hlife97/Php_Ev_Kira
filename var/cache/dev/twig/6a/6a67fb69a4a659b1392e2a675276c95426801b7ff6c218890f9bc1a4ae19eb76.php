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

/* user/usermenu.html.twig */
class __TwigTemplate_3f5bfb0aa0489619dafecc2d96256f61d6c7d8b8806639487040fc14abbf3967 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        // line 1
        echo "
<ul class=\"nav nav-tabs nav-stacked\">
    <li class=\"active\"><a href=\"/user\">My Account</a></li>
    <li class=\"\"><a href=\"/user\">Profile</a></li>
    <li class=\"\"><a href=\"/user/comments\">My Comments</a></li>
    <li class=\"\"><a href=\"/user/reservations\">Reservations</a></li>
    <li class=\"\"><a href=\"/user/renthouse\">Rent House</a></li>
    <li class=\"\"><a href=\"/logout\">Logout</a></li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/usermenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<ul class=\"nav nav-tabs nav-stacked\">
    <li class=\"active\"><a href=\"/user\">My Account</a></li>
    <li class=\"\"><a href=\"/user\">Profile</a></li>
    <li class=\"\"><a href=\"/user/comments\">My Comments</a></li>
    <li class=\"\"><a href=\"/user/reservations\">Reservations</a></li>
    <li class=\"\"><a href=\"/user/renthouse\">Rent House</a></li>
    <li class=\"\"><a href=\"/logout\">Logout</a></li>
</ul>", "user/usermenu.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\usermenu.html.twig");
    }
}
