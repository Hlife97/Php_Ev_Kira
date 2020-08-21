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

/* home/header.html.twig */
class __TwigTemplate_9add630cb6a71c9b1d7a59b506e05ed0f14001adefcc0b26c7e5df75ea580007 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "    <header id=\"header\">
        <div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\">
                            <p><i class=\"fa fa-phone-square\"></i> +0123 456 70 90</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                        <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"https://www.facebook.com/hdyt.hov/\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/hidayet_hidayetov/\"><i class=\"fa fa-instagram\"></i></a></li>
                                <li><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCr7XvvjR2sAJcs_U2GPzcpA?view_as=subscriber\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"https://www.skype.com/en/\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class=\"navbar navbar-inverse\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/logo.png\"
                            alt=\"logo\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/\">Anasayfa</a></li>
                        <li><a href=\"/about\">Hakkımızda</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kiralık <i
                                    class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categori"]) || array_key_exists("categori", $context) ? $context["categori"] : (function () { throw new RuntimeError('Variable "categori" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 55
            echo "                                <li><a href=\"/categori_ev/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </ul>
                        </li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"/contact\">İletişim</a></li>
                        ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 62
            echo "                        <li><a href=\"/user\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "image", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" alt=\"user\"
                                    class=\"rounded-circle\" width=\"20\"> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
            echo " </a></li>
                        <li><a href=\"/logout\">Logout</a></li>
                        ";
        } else {
            // line 66
            echo "                        <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>Login</a></li>
                        <li><a href=\"/register\">SignUp</a></li>
                        ";
        }
        // line 69
        echo "
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 69,  135 => 66,  129 => 63,  124 => 62,  122 => 61,  116 => 57,  105 => 55,  101 => 54,  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <header id=\"header\">
        <div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\">
                            <p><i class=\"fa fa-phone-square\"></i> +0123 456 70 90</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                        <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"https://www.facebook.com/hdyt.hov/\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/hidayet_hidayetov/\"><i class=\"fa fa-instagram\"></i></a></li>
                                <li><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCr7XvvjR2sAJcs_U2GPzcpA?view_as=subscriber\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"https://www.skype.com/en/\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class=\"navbar navbar-inverse\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ asset ('assets')}}/images/logo.png\"
                            alt=\"logo\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/\">Anasayfa</a></li>
                        <li><a href=\"/about\">Hakkımızda</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kiralık <i
                                    class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                {% for rs in categori %}
                                <li><a href=\"/categori_ev/{{ rs.id }}\">{{ rs.title }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"/contact\">İletişim</a></li>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li><a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"user\"
                                    class=\"rounded-circle\" width=\"20\"> {{ app.user.name }} </a></li>
                        <li><a href=\"/logout\">Logout</a></li>
                        {% else  %}
                        <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>Login</a></li>
                        <li><a href=\"/register\">SignUp</a></li>
                        {% endif %}

                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->", "home/header.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\home\\header.html.twig");
    }
}
