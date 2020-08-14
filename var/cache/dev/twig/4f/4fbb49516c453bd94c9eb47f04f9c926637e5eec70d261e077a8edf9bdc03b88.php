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

/* admin/comment/index.html.twig */
class __TwigTemplate_965750459739963af9e0d3a5b982b904d856824bbcc80e6af7d18aeadcd09d2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/comment/index.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo "
<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">User Comments</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"\\admin\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Comments</li>
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
                            <h1>Comments</h1>

                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Ip</th>
                                        <th nowrap>Name-Surname</th>
                                        <th>Home</th>
                                        ";
        // line 43
        echo "                                        <th>Rate</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 50
            echo "                                    <tr>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "ip", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "surname", [], "any", false, false, false, 56), "html", null, true);
            echo " </a> </td>
                                        <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo " </a></td>
                                        ";
            // line 60
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"><button
                                                    type=\"button\" class=\"btn btn-info\">show</button></a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><button
                                                    type=\"button\" class=\"btn btn-dark\">edit</button></a>
                                        </td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                                    <tr>
                                        <td colspan=\"10\">no records found</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </tbody>
                            </table>
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
        return "admin/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  198 => 71,  188 => 66,  181 => 62,  175 => 60,  169 => 57,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  141 => 51,  138 => 50,  133 => 49,  125 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"page-wrapper\">
        <div class=\"page-breadcrumb\">
            <div class=\"row\">
                <div class=\"col-12 d-flex no-block align-items-center\">
                    <h4 class=\"page-title\">User Comments</h4>
                    <div class=\"ml-auto text-right\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"\\admin\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Comments</li>
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
                            <h1>Comments</h1>

                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Ip</th>
                                        <th nowrap>Name-Surname</th>
                                        <th>Home</th>
                                        {# <th>Created_at</th>
                                        <th>Updated_at</th> #}
                                        <th>Rate</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for comment in comments %}
                                    <tr>
                                        <td>{{ comment.id }}</td>
                                        <td>{{ comment.subject }}</td>
                                        <td>{{ comment.comment }}</td>
                                        <td>{{ comment.status }}</td>
                                        <td>{{ comment.ip }}</td>
                                        <td><a href=\"{{ path('admin_user_show', {'id': comment.id}) }}\">{{ comment.name }} {{ comment.surname }} </a> </td>
                                        <td><a href=\"{{ path('admin_ev_show', {'id': comment.id}) }}\">{{ comment.title }} </a></td>
                                        {# <td>{{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                        <td>{{ comment.updatedAt ? comment.updatedAt|date('Y-m-d H:i:s') : '' }}</td> #}
                                        <td>{{ comment.rate }}</td>
                                        <td>
                                            <a href=\"{{ path('admin_comment_show', {'id': comment.id}) }}\"><button
                                                    type=\"button\" class=\"btn btn-info\">show</button></a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('admin_comment_edit', {'id': comment.id}) }}\"><button
                                                    type=\"button\" class=\"btn btn-dark\">edit</button></a>
                                        </td>
                                    </tr>
                                    {% else %}
                                    <tr>
                                        <td colspan=\"10\">no records found</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/comment/index.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\comment\\index.html.twig");
    }
}
