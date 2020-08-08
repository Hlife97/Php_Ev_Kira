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

/* admin/category/_form.html.twig */
class __TwigTemplate_13326797b7d74f2d96e75b64fefb3a43e362ab25ec908421478625deb1df654e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form.html.twig"));

        // line 1
        echo "<div class=\"card\">
    <form class=\"form-horizontal\" name=\"category\" method=\"post\">
        <div class=\"card-body\">
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Parent</label>
                <select id=\"category_parentid\" name=\"category[parentid]\" class=\"col-sm-9\">
                    <option value=\"0\"> Main Category </option>
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 9, $this->source); })()), "parentid", [], "any", false, false, false, 9)))) ? (" Selected") : (""));
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "
                    </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </select>
            </div>
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Category Name</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_title\" name=\"category[title]\"
                        value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Keywords</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_keywords\" name=\"category[keywords]\"
                        value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 25, $this->source); })()), "keywords", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"email1\" class=\"col-sm-3 text-right control-label col-form-label\">Description</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_description\" name=\"category[description]\"
                        value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"cono1\" class=\"col-sm-3 text-right control-label col-form-label\">Image</label>
                <div class=\"col-sm-9\">
                    <input type=\"file\" class=\"form-control\" id=\"category_image\" name=\"category[image]\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"cono1\" class=\"col-sm-3 text-right control-label col-form-label\">Status</label>
                <select id=\"category_status\" name=\"category[status]\" class=\"col-sm-9\">
                    <option> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "html", null, true);
        echo " </option>
                    <option> True </option>
                    <option> False </option>
                </select>
            </div>
        </div>
        <div class=\"border-top\">
            <div class=\"card-body\">
                <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 52, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  113 => 44,  98 => 32,  88 => 25,  78 => 18,  70 => 12,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <form class=\"form-horizontal\" name=\"category\" method=\"post\">
        <div class=\"card-body\">
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Parent</label>
                <select id=\"category_parentid\" name=\"category[parentid]\" class=\"col-sm-9\">
                    <option value=\"0\"> Main Category </option>
                    {% for cat in categories %}
                    <option value=\"{{ cat.id }}\" {{ cat.id == category.parentid ? ' Selected': '' }}> {{ cat.title }}
                    </option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Category Name</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_title\" name=\"category[title]\"
                        value=\"{{category.title}}\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"lname\" class=\"col-sm-3 text-right control-label col-form-label\">Keywords</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_keywords\" name=\"category[keywords]\"
                        value=\"{{category.keywords}}\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"email1\" class=\"col-sm-3 text-right control-label col-form-label\">Description</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"category_description\" name=\"category[description]\"
                        value=\"{{category.description}}\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"cono1\" class=\"col-sm-3 text-right control-label col-form-label\">Image</label>
                <div class=\"col-sm-9\">
                    <input type=\"file\" class=\"form-control\" id=\"category_image\" name=\"category[image]\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"cono1\" class=\"col-sm-3 text-right control-label col-form-label\">Status</label>
                <select id=\"category_status\" name=\"category[status]\" class=\"col-sm-9\">
                    <option> {{ category.status }} </option>
                    <option> True </option>
                    <option> False </option>
                </select>
            </div>
        </div>
        <div class=\"border-top\">
            <div class=\"card-body\">
                <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
            </div>
        </div>
    </form>
</div>", "admin/category/_form.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\category\\_form.html.twig");
    }
}
