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

/* user/reservations.html.twig */
class __TwigTemplate_67c1d060f87bee4223a15a424571ddca6ba796e46b7eef2ffd3a1a19321de2be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservations.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/reservations.html.twig", 1);
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
                    <thead>
                    <tr>
                        <th>Home</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 42
            echo "                        <tr>
                            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "userid", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "evid", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "hname", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "surname", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "phone", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                           <!-- <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td> -->
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "message", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "created_at", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">show</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                        <tr>
                            <td colspan=\"18\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
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
        return "user/reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  191 => 58,  182 => 54,  177 => 52,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  143 => 44,  137 => 43,  134 => 42,  129 => 41,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                    <thead>
                    <tr>
                        <th>Home</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td><a href=\"{{ path('user_show', {'id': reservation.userid}) }}\">{{ reservation.name }}</a></td>
                            <td><a href=\"{{ path('ev_show', {'id': reservation.evid}) }}\">{{ reservation.hname }}</a></td>
                            <td>{{ reservation.surname }}</td>
                            <td>{{ reservation.email }}</td>
                            <td>{{ reservation.phone }}</td>
                           <!-- <td>{{ reservation.checkin ? reservation.checkin|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ reservation.checkout ? reservation.checkout|date('Y-m-d H:i:s') : '' }}</td> -->
                            <td>{{ reservation.message }}</td>
                            <td>{{ reservation.status }}</td>
                            <td>{{ reservation.created_at }}</td>
                            <td>
                                <a href=\"{{ path('user_reservation_show', {'id': reservation.id}) }}\">show</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"18\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

{% endblock %}", "user/reservations.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\reservations.html.twig");
    }
}
