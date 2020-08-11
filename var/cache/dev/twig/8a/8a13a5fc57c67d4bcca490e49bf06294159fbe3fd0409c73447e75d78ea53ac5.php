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

/* admin/ev/show.html.twig */
class __TwigTemplate_68215a21c632fb75fc998e9c75632bf051c724c63be73e65f14d52f97a2c4295 extends Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ev/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ev/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/ev/show.html.twig", 1);
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

        echo "Ev";
        
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
        echo "<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Show Category</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Show</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1>Ev</h1>

                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 42, $this->source); })()), "keywords", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50))), "html", null, true);
        echo "\" height=\"40\"></td>
                                    </tr>
                                    <tr>
                                        <th>Star</th>
                                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 54, $this->source); })()), "star", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 58, $this->source); })()), "address", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 62, $this->source); })()), "phone", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 66, $this->source); })()), "fax", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 74, $this->source); })()), "city", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 78, $this->source); })()), "country", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 82, $this->source); })()), "location", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at</th>
                                        <td>";
        // line 90
        ((twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 90, $this->source); })()), "createdAt", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 90, $this->source); })()), "createdAt", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th>
                                        <td>";
        // line 94
        ((twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 94, $this->source); })()), "updatedAt", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 94, $this->source); })()), "updatedAt", [], "any", false, false, false, 94), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_index");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">back</button></a>

                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-dark\">edit</button></a>

                            ";
        // line 103
        echo twig_include($this->env, $context, "admin/ev/_delete_form.html.twig");
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ev/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 103,  236 => 101,  231 => 99,  223 => 94,  216 => 90,  209 => 86,  202 => 82,  195 => 78,  188 => 74,  181 => 70,  174 => 66,  167 => 62,  160 => 58,  153 => 54,  146 => 50,  139 => 46,  132 => 42,  125 => 38,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ev{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Show Category</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Show</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1>Ev</h1>

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
                                </tbody>
                            </table>

                            <a href=\"{{ path('admin_ev_index') }}\"><button type=\"button\" class=\"btn btn-secondary\">back</button></a>

                            <a href=\"{{ path('admin_ev_edit', {'id': ev.id}) }}\"><button type=\"button\" class=\"btn btn-dark\">edit</button></a>

                            {{ include('admin/ev/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/ev/show.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\ev\\show.html.twig");
    }
}
