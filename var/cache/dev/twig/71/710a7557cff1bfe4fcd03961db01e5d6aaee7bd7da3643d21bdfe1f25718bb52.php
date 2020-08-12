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

/* user/show.html.twig */
class __TwigTemplate_a9956e578d4e23a67d566eeab6fd3341be58e32f8fa547b94538e476fe63b000 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/show.html.twig", 1);
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
        echo "-Profile";
        
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

                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "roles", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "roles", [], "any", false, false, false, 37)), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "password", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Surname</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "surname", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "image", [], "any", false, false, false, 53))), "html", null, true);
        echo "\" height=\"70\"></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "status", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>";
        // line 61
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "createdAt", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "createdAt", [], "any", false, false, false, 61), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>";
        // line 65
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "updatedAt", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "updatedAt", [], "any", false, false, false, 65), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\"><button type=\"button\"
                        class=\"btn btn-info\">edit</button></a>

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
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 69,  180 => 65,  173 => 61,  166 => 57,  159 => 53,  152 => 49,  145 => 45,  138 => 41,  131 => 37,  124 => 33,  117 => 29,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }}-Profile{% endblock %}

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

                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ app.user.id }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ app.user.email }}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>{{ app.user.roles ? app.user.roles|json_encode : '' }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>{{ app.user.password }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ app.user.name }}</td>
                        </tr>
                        <tr>
                            <th>Surname</th>
                            <td>{{ app.user.surname }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"{{ asset ('uploads/images/' ~ app.user.image) }}\" height=\"70\"></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ app.user.status }}</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>{{ app.user.createdAt ? app.user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>{{ app.user.updatedAt ? app.user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href=\"{{ path('user_edit', {'id': app.user.id}) }}\"><button type=\"button\"
                        class=\"btn btn-info\">edit</button></a>

            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

{% endblock %}", "user/show.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\show.html.twig");
    }
}
