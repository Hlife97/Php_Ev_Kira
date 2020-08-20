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

/* user/newreservation.html.twig */
class __TwigTemplate_6477aa49f0a42a7fe55ffd6eb861d07017fe4c45b7788e63cbab79710cb5c590 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/newreservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/newreservation.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/newreservation.html.twig", 1);
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
        echo "-Rents";
        
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
<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-2\">

                <div class=\"tab-wrap\">
                    <div align=\"center\" class=\"media\">
                        ";
        // line 14
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                    </div>
                    <!--/.media-->
                </div>
                <!--/.tab-wrap-->
            </div>
            <!--/.col-sm-6-->

            <div align=\"center\" class=\"col-xs-8 col-sm-10\">
                <h2>Rent</h2>
                <hr>
                <h4>Home: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                <hr>
                ";
        // line 28
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

                <div class=\"row contact-wrap\">
                    <div class=\"status alert alert-success\" style=\"display: none\"></div>
                    <form name=\"reservation\" method=\"post\" class=\"contact-form\" role=\"form\">
                        <div class=\"col-sm-5 col-sm-offset-1\" id=\"reservation\">
                            <div class=\"form-group\">
                                <label for=\"reservation_name\">Name *</label>
                                <input type=\"text\" id=\"reservation_name\" name=\"reservation[name]\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_surname\">Sruname *</label>
                                <input type=\"text\" id=\"reservation_name\" name=\"reservation[surname]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "surname", [], "any", false, false, false, 41), "html", null, true);
        echo "\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_email\">Email *</label>
                                <input type=\"email\" id=\"reservation_email\" name=\"reservation[email]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_subject\">Phone *</label>
                                <input type=\"text\" id=\"reservation_phone\" name=\"reservation[phone]\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <div class=\"form-group\">
                                <label for=\"reservation_message\">Message *</label>
                                <textarea id=\"reservation_message\" name=\"reservation[message]\" required=\"required\"
                                    class=\"form-control\" rows=\"8\"></textarea>
                            </div>
                            <div class=\"form-group\">
                            **************Credit Card Informations ********************
                                <input type=\"hidden\" name=\"token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-messeage"), "html", null, true);
        echo "\" />
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Rent</button>
                            </div>
                        </div>
                    </form>
                    <!--/.row-->
                </div>
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
        return "user/newreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  146 => 46,  138 => 41,  130 => 36,  119 => 28,  114 => 26,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name }}-Rents{% endblock %}

{% block body %}

<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-2\">

                <div class=\"tab-wrap\">
                    <div align=\"center\" class=\"media\">
                        {{ include('user/usermenu.html.twig') }}

                    </div>
                    <!--/.media-->
                </div>
                <!--/.tab-wrap-->
            </div>
            <!--/.col-sm-6-->

            <div align=\"center\" class=\"col-xs-8 col-sm-10\">
                <h2>Rent</h2>
                <hr>
                <h4>Home: {{ ev.title }}</h4>
                <hr>
                {{ include('messages.html.twig') }}

                <div class=\"row contact-wrap\">
                    <div class=\"status alert alert-success\" style=\"display: none\"></div>
                    <form name=\"reservation\" method=\"post\" class=\"contact-form\" role=\"form\">
                        <div class=\"col-sm-5 col-sm-offset-1\" id=\"reservation\">
                            <div class=\"form-group\">
                                <label for=\"reservation_name\">Name *</label>
                                <input type=\"text\" id=\"reservation_name\" name=\"reservation[name]\" value=\"{{ app.user.name }}\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_surname\">Sruname *</label>
                                <input type=\"text\" id=\"reservation_name\" name=\"reservation[surname]\" value=\"{{ app.user.surname }}\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_email\">Email *</label>
                                <input type=\"email\" id=\"reservation_email\" name=\"reservation[email]\" value=\"{{ app.user.email }}\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"reservation_subject\">Phone *</label>
                                <input type=\"text\" id=\"reservation_phone\" name=\"reservation[phone]\" class=\"form-control\"
                                    required=\"required\">
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <div class=\"form-group\">
                                <label for=\"reservation_message\">Message *</label>
                                <textarea id=\"reservation_message\" name=\"reservation[message]\" required=\"required\"
                                    class=\"form-control\" rows=\"8\"></textarea>
                            </div>
                            <div class=\"form-group\">
                            **************Credit Card Informations ********************
                                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-messeage') }}\" />
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Rent</button>
                            </div>
                        </div>
                    </form>
                    <!--/.row-->
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

{% endblock %}", "user/newreservation.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\user\\newreservation.html.twig");
    }
}
