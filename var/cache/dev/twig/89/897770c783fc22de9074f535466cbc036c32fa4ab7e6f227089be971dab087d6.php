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

/* admin/setting/show.html.twig */
class __TwigTemplate_5abd15e1347c3a20d400e2ca97eb82dd4afff107221eb770f761197739f1a03a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/show.html.twig", 1);
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

        echo "Setting";
        
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
                    <h4 class=\"page-title\">Full Width</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
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
                            <h1>Setting</h1>

                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 42, $this->source); })()), "keywords", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Company</th>
                                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 50, $this->source); })()), "company", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 62, $this->source); })()), "fax", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpserver</th>
                                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 70, $this->source); })()), "smtpserver", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpemail</th>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 74, $this->source); })()), "smtpemail", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Smtppassword</th>
                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 78, $this->source); })()), "smtppassword", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpport</th>
                                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 82, $this->source); })()), "smtpport", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Facebook</th>
                                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 86, $this->source); })()), "facebook", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Instagram</th>
                                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 90, $this->source); })()), "instagram", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Twitter</th>
                                        <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 94, $this->source); })()), "twitter", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Aboutus</th>
                                        <td>";
        // line 98
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 98, $this->source); })()), "aboutus", [], "any", false, false, false, 98);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td>";
        // line 102
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 102, $this->source); })()), "contact", [], "any", false, false, false, 102);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Reference</th>
                                        <td>";
        // line 106
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 106, $this->source); })()), "reference", [], "any", false, false, false, 106);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 110, $this->source); })()), "status", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">back</button></a>

                            <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-dark\">edit</button></a>

                            ";
        // line 119
        echo twig_include($this->env, $context, "admin/setting/_delete_form.html.twig");
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
        return "admin/setting/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 119,  264 => 117,  259 => 115,  251 => 110,  244 => 106,  237 => 102,  230 => 98,  223 => 94,  216 => 90,  209 => 86,  202 => 82,  195 => 78,  188 => 74,  181 => 70,  174 => 66,  167 => 62,  160 => 58,  153 => 54,  146 => 50,  139 => 46,  132 => 42,  125 => 38,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Setting{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Full Width</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
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
                            <h1>Setting</h1>

                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ setting.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ setting.title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>{{ setting.keywords }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ setting.description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Company</th>
                                        <td>{{ setting.company }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ setting.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ setting.phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>{{ setting.fax }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ setting.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpserver</th>
                                        <td>{{ setting.smtpserver }}</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpemail</th>
                                        <td>{{ setting.smtpemail }}</td>
                                    </tr>
                                    <tr>
                                        <th>Smtppassword</th>
                                        <td>{{ setting.smtppassword }}</td>
                                    </tr>
                                    <tr>
                                        <th>Smtpport</th>
                                        <td>{{ setting.smtpport }}</td>
                                    </tr>
                                    <tr>
                                        <th>Facebook</th>
                                        <td>{{ setting.facebook }}</td>
                                    </tr>
                                    <tr>
                                        <th>Instagram</th>
                                        <td>{{ setting.instagram }}</td>
                                    </tr>
                                    <tr>
                                        <th>Twitter</th>
                                        <td>{{ setting.twitter }}</td>
                                    </tr>
                                    <tr>
                                        <th>Aboutus</th>
                                        <td>{{ setting.aboutus|raw }}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td>{{ setting.contact|raw }}</td>
                                    </tr>
                                    <tr>
                                        <th>Reference</th>
                                        <td>{{ setting.reference|raw }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ setting.status }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href=\"{{ path('setting_index') }}\"><button type=\"button\" class=\"btn btn-secondary\">back</button></a>

                            <a href=\"{{ path('setting_edit', {'id': setting.id}) }}\"><button type=\"button\" class=\"btn btn-dark\">edit</button></a>

                            {{ include('admin/setting/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/setting/show.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\setting\\show.html.twig");
    }
}
