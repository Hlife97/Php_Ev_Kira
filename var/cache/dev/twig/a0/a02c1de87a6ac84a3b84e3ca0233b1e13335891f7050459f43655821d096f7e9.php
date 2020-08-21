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

/* user/reservation_show.html.twig */
class __TwigTemplate_9b30f6f605c01904302c3294194e894ae83697439bdb380dc39c6ebc46523431 extends Template
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
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservation_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservation_show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/reservation_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "-Reservations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-2\">

                <div class=\"tab-wrap\">
                    <div align=\"center\" class=\"media\">
                        ";
        // line 13
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                        <!--/.media-body-->
                    </div>
                    <!--/.media-->
                </div>
                <!--/.tab-wrap-->
            </div>
            <!--/.col-sm-6-->

            <div align=\"center\" class=\"col-xs-8 col-sm-10\">
                <h2>My Rents</h2>

                <table class=\"table\">

                        <tr>
                            <th>Home</th>
                            <td><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), 0, [], "array", false, false, false, 30), "evid", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), 0, [], "array", false, false, false, 30), "hname", [], "any", false, false, false, 30), "html", null, true);
        echo "</a></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "userid", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</a></td>
                        </tr>
                            <th>Surname</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "surname", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), 0, [], "array", false, false, false, 44), "phone", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 48, $this->source); })()), 0, [], "array", false, false, false, 48), "message", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), 0, [], "array", false, false, false, 52), "status", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), 0, [], "array", false, false, false, 56), "created_at", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                        </tr>
                </table>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/reservation_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  162 => 52,  155 => 48,  148 => 44,  141 => 40,  135 => 37,  127 => 34,  118 => 30,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }}-Reservations{% endblock %}

{% block body %}
<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-2\">

                <div class=\"tab-wrap\">
                    <div align=\"center\" class=\"media\">
                        {{ include('user/usermenu.html.twig') }}

                        <!--/.media-body-->
                    </div>
                    <!--/.media-->
                </div>
                <!--/.tab-wrap-->
            </div>
            <!--/.col-sm-6-->

            <div align=\"center\" class=\"col-xs-8 col-sm-10\">
                <h2>My Rents</h2>

                <table class=\"table\">

                        <tr>
                            <th>Home</th>
                            <td><a href=\"{{ path('ev_show', {'id': reservation[0].evid}) }}\">{{ reservation[0].hname }}</a></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><a href=\"{{ path('user_show', {'id': reservation[0].userid}) }}\">{{ reservation[0].name }}</a></td>
                        </tr>
                            <th>Surname</th>
                            <td>{{ reservation[0].surname }}</td>
                        <tr>
                            <th>Email</th>
                            <td>{{ reservation[0].email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ reservation[0].phone }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ reservation[0].message }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ reservation[0].status }}</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>{{ reservation[0].created_at }}</td>
                        </tr>
                </table>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

{% endblock %}", "user/reservation_show.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\reservation_show.html.twig");
    }
}
