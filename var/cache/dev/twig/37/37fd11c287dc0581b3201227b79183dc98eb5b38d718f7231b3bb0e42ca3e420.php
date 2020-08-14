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

/* admin/ev/index.html.twig */
class __TwigTemplate_43d7d5779aed43669a76a3c0ecc6a966ef395d0b1434932db9152dd542e7d816 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ev/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ev/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/ev/index.html.twig", 1);
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

        echo "Ev index";
        
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
        echo "<SCRIPT language=\"JavaScript\" type=\"text/javascript\">
function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ); }
</SCRIPT>

<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Home List</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"\\admin\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">RentHome</li>
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

                            <h3>Rent Home</h3>

                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Star</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Gallery</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evs"]) || array_key_exists("evs", $context) ? $context["evs"] : (function () { throw new RuntimeError('Variable "evs" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 54
            echo "                                    <tr>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "catname", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "keywords", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "description", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                        <td><img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ev"], "image", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" height=\"40\"></td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "star", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "email", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ev"], "status", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                        <td>
                                            <a
                                                href=\"javascript:openWin('";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => twig_get_attribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "','','toolbar=no,location=no, directories=0, status=no, top=50,left=100, menuBar=no, scrollBars=yes,resizable=no, width=900, height=600'); \">
                                                <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.png\" height=\"40\"></a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"><button
                                                    type=\"button\" class=\"btn btn-info\">show</button></a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"><button
                                                    type=\"button\" class=\"btn btn-dark\">edit</button></a>
                                        </td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                    <tr>
                                        <td colspan=\"17\">no records found</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                </tbody>
                            </table>
                            <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_new");
        echo "\"><button type=\"button\"
                                    class=\"btn btn-success btn-lg\">Creat New</button></a>
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
        return "admin/ev/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 85,  219 => 83,  210 => 79,  200 => 74,  193 => 70,  187 => 67,  183 => 66,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  142 => 54,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Ev index{% endblock %}

{% block body %}
<SCRIPT language=\"JavaScript\" type=\"text/javascript\">
function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ); }
</SCRIPT>

<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">Home List</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"\\admin\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">RentHome</li>
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

                            <h3>Rent Home</h3>

                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Star</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Gallery</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for ev in evs %}
                                    <tr>
                                        <td>{{ ev.id }}</td>
                                        <td>{{ ev.catname }}</td>
                                        <td>{{ ev.title }}</td>
                                        <td>{{ ev.keywords }}</td>
                                        <td>{{ ev.description }}</td>
                                        <td><img src=\"{{ asset ('uploads/images/' ~ ev.image) }}\" height=\"40\"></td>
                                        <td>{{ ev.star }}</td>
                                        <td>{{ ev.email }}</td>
                                        <td>{{ ev.status }}</td>
                                        <td>
                                            <a
                                                href=\"javascript:openWin('{{ path('admin_image_new',{'id':ev.id}) }}','','toolbar=no,location=no, directories=0, status=no, top=50,left=100, menuBar=no, scrollBars=yes,resizable=no, width=900, height=600'); \">
                                                <img src=\"{{ asset ('assets/admin/img') }}/gallery.png\" height=\"40\"></a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('admin_ev_show', {'id': ev.id}) }}\"><button
                                                    type=\"button\" class=\"btn btn-info\">show</button></a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('admin_ev_edit', {'id': ev.id}) }}\"><button
                                                    type=\"button\" class=\"btn btn-dark\">edit</button></a>
                                        </td>
                                    </tr>
                                    {% else %}
                                    <tr>
                                        <td colspan=\"17\">no records found</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                            <a href=\"{{ path('admin_ev_new') }}\"><button type=\"button\"
                                    class=\"btn btn-success btn-lg\">Creat New</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/ev/index.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\ev\\index.html.twig");
    }
}
