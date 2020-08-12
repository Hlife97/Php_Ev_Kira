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

/* ev/show.html.twig */
class __TwigTemplate_85c4e2ca74381d650c84a740ae401a506ddd4b18b7ec187155a752ae1305080e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ev/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ev/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "ev/show.html.twig", 1);
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
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 36, $this->source); })()), "keywords", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44))), "html", null, true);
        echo "\" height=\"40\"></td>
                        </tr>
                        <tr>
                            <th>Star</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 48, $this->source); })()), "star", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 52, $this->source); })()), "address", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 60, $this->source); })()), "fax", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 76, $this->source); })()), "location", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 80, $this->source); })()), "status", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>";
        // line 84
        ((twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 84, $this->source); })()), "createdAt", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 84, $this->source); })()), "createdAt", [], "any", false, false, false, 84), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>";
        // line 88
        ((twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 88, $this->source); })()), "updatedAt", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 88, $this->source); })()), "updatedAt", [], "any", false, false, false, 88), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 92, $this->source); })()), "detail", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Userid</th>
                            <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 96, $this->source); })()), "userid", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_ev_index");
        echo "\"><button type=\"button\"
                                        class=\"btn btn-warning\">Back</button></a>

                <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_ev_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\"><button type=\"button\"
                                        class=\"btn btn-info\">edit</button></a>

                <br>";
        // line 107
        echo twig_include($this->env, $context, "ev/_delete_form.html.twig");
        echo "
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
        return "ev/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 107,  249 => 104,  243 => 101,  235 => 96,  228 => 92,  221 => 88,  214 => 84,  207 => 80,  200 => 76,  193 => 72,  186 => 68,  179 => 64,  172 => 60,  165 => 56,  158 => 52,  151 => 48,  144 => 44,  137 => 40,  130 => 36,  123 => 32,  116 => 28,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ ev.id }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ ev.title }}</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{ ev.keywords }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ ev.description }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"{{ asset ('uploads/images/' ~ ev.image) }}\" height=\"40\"></td>
                        </tr>
                        <tr>
                            <th>Star</th>
                            <td>{{ ev.star }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ ev.address }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ ev.phone }}</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>{{ ev.fax }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ ev.email }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ ev.city }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ ev.country }}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>{{ ev.location }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ ev.status }}</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>{{ ev.createdAt ? ev.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>{{ ev.updatedAt ? ev.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td>{{ ev.detail }}</td>
                        </tr>
                        <tr>
                            <th>Userid</th>
                            <td>{{ ev.userid }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('user_ev_index') }}\"><button type=\"button\"
                                        class=\"btn btn-warning\">Back</button></a>

                <a href=\"{{ path('user_ev_edit', {'id': ev.id}) }}\"><button type=\"button\"
                                        class=\"btn btn-info\">edit</button></a>

                <br>{{ include('ev/_delete_form.html.twig') }}
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->
{% endblock %}", "ev/show.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\ev\\show.html.twig");
    }
}
