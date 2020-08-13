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

/* home/contact.html.twig */
class __TwigTemplate_f3765854f2954fc9049842034fc80fc7bacc7474e781cfee769e42d79cb9afe3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/contact.html.twig", 1);
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

        echo "Contact ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<section id=\"contact-info\">
    <div class=\"center\">
        <h2>Contact</h2>
    </div>
    <div class=\"gmap-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5 text-center\">
                    <div class=\"gmap\">
                        <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"
                            src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed\"></iframe>
                    </div>
                </div>

                <div class=\"col-sm-7 map-content\">
                    <ul class=\"row\">
                        <li class=\"col-sm-4\">
                            <address>
                                <h5>Our Address</h5>
                                ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 28, $this->source); })()), 0, [], "array", false, false, false, 28), "address", [], "any", false, false, false, 28);
        echo "
                            </address>

                            <address>
                                <h5>Phone & E-mail</h5>
                                ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 33, $this->source); })()), 0, [], "array", false, false, false, 33), "phone", [], "any", false, false, false, 33);
        echo "
                                <br>
                                ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 35, $this->source); })()), 0, [], "array", false, false, false, 35), "email", [], "any", false, false, false, 35);
        echo "
                            </address>

                            <address>
                                <h5>Company</h5>
                                ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "company", [], "any", false, false, false, 40);
        echo "
                            </address>

                            <address>
                                <h5>Fax</h5>
                                ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "fax", [], "any", false, false, false, 45);
        echo "
                            </address>
                        </li>


                        <li class=\"col-sm-8\">
                            <address>
                                <h5>İlanımdaki İletişim Bilgilerimi Nasıl Değiştirebilirim?</h5>
                                ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 53, $this->source); })()), 0, [], "array", false, false, false, 53), "contact", [], "any", false, false, false, 53);
        echo "
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/gmap_area -->

<section id=\"contact-page\">
    <div class=\"container\">
        <div class=\"center\">
            <h2>Drop Your Message</h2>
        </div>
        ";
        // line 69
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

        <div class=\"row contact-wrap\">
            <div class=\"status alert alert-success\" style=\"display: none\"></div>
            <form name=\"messages\" method=\"post\" class=\"contact-form\" role=\"form\">
                <div class=\"col-sm-5 col-sm-offset-1\" id=\"messages\">
                    <div class=\"form-group\">
                        <label for=\"messages_name\">Name *</label>
                        <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"messages_email\">Email *</label>
                        <input type=\"email\" id=\"messages_email\" name=\"messages[email]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"messages_subject\">Subject *</label>
                        <input type=\"text\" id=\"messages_subject\" name=\"messages[subject]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <label for=\"messages_message\">Message *</label>
                        <textarea id=\"messages_message\" name=\"messages[message]\" required=\"required\"
                            class=\"form-control\" rows=\"8\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-messeage"), "html", null, true);
        echo "\" />
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Submit Message</button>
                    </div>
                </div>
            </form>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 98,  210 => 69,  191 => 53,  180 => 45,  172 => 40,  164 => 35,  159 => 33,  151 => 28,  129 => 8,  119 => 7,  100 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Contact {{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}}{% endblock %}

{% block body %}

<section id=\"contact-info\">
    <div class=\"center\">
        <h2>Contact</h2>
    </div>
    <div class=\"gmap-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5 text-center\">
                    <div class=\"gmap\">
                        <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"
                            src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed\"></iframe>
                    </div>
                </div>

                <div class=\"col-sm-7 map-content\">
                    <ul class=\"row\">
                        <li class=\"col-sm-4\">
                            <address>
                                <h5>Our Address</h5>
                                {{ setting[0].address | raw}}
                            </address>

                            <address>
                                <h5>Phone & E-mail</h5>
                                {{ setting[0].phone | raw}}
                                <br>
                                {{ setting[0].email | raw}}
                            </address>

                            <address>
                                <h5>Company</h5>
                                {{ setting[0].company | raw}}
                            </address>

                            <address>
                                <h5>Fax</h5>
                                {{ setting[0].fax | raw}}
                            </address>
                        </li>


                        <li class=\"col-sm-8\">
                            <address>
                                <h5>İlanımdaki İletişim Bilgilerimi Nasıl Değiştirebilirim?</h5>
                                {{ setting[0].contact | raw}}
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/gmap_area -->

<section id=\"contact-page\">
    <div class=\"container\">
        <div class=\"center\">
            <h2>Drop Your Message</h2>
        </div>
        {{ include('messages.html.twig') }}

        <div class=\"row contact-wrap\">
            <div class=\"status alert alert-success\" style=\"display: none\"></div>
            <form name=\"messages\" method=\"post\" class=\"contact-form\" role=\"form\">
                <div class=\"col-sm-5 col-sm-offset-1\" id=\"messages\">
                    <div class=\"form-group\">
                        <label for=\"messages_name\">Name *</label>
                        <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"messages_email\">Email *</label>
                        <input type=\"email\" id=\"messages_email\" name=\"messages[email]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"messages_subject\">Subject *</label>
                        <input type=\"text\" id=\"messages_subject\" name=\"messages[subject]\" class=\"form-control\"
                            required=\"required\">
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <label for=\"messages_message\">Message *</label>
                        <textarea id=\"messages_message\" name=\"messages[message]\" required=\"required\"
                            class=\"form-control\" rows=\"8\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-messeage') }}\" />
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Submit Message</button>
                    </div>
                </div>
            </form>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->
{% endblock %}", "home/contact.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\home\\contact.html.twig");
    }
}
