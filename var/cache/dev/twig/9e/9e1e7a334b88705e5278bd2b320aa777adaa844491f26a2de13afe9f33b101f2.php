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

/* user/comments.html.twig */
class __TwigTemplate_034c223ac9ad56d179e423b28a81c60f9dce887ffd5f544b4f3b9d10745c74f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/comments.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/comments.html.twig", 1);
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
        echo "-Comments";
        
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
                <h2>My Comments</h2>
 <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Home Name</th>
                                        <th>Created_At</th>
                                        <th>Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "                                    <tr>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "subject", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                        <td nowrap ><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "evid", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo " </a></td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                        ";
            // line 47
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                                    <tr>
                                        <td colspan=\"10\">no records found</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </tbody>
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
        return "user/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  169 => 50,  160 => 47,  156 => 45,  150 => 44,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  131 => 39,  126 => 38,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }}-Comments{% endblock %}

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
                <h2>My Comments</h2>
 <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Home Name</th>
                                        <th>Created_At</th>
                                        <th>Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for comment in comments %}
                                    <tr>
                                        <td>{{ comment.id }}</td>
                                        <td>{{ comment.subject }}</td>
                                        <td>{{ comment.comment }}</td>
                                        <td>{{ comment.status }}</td>
                                        <td nowrap ><a href=\"{{ path('ev_show', {'id': comment.evid}) }}\">{{ comment.title }} </a></td>
                                        <td>{{ comment.created_at}}</td>
                                        {#<td>{{ comment.updatedAt ? comment.updatedAt|date('Y-m-d H:i:s') : '' }}</td> #}
                                        <td>{{ comment.rate }}</td>
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
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

{% endblock %}", "user/comments.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\comments.html.twig");
    }
}
