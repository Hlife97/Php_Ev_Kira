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

/* home/index.html.twig */
class __TwigTemplate_e4dc50fd101b99146c4b9c4621005a00835c26aa6706172bf916e887ccb2ca6c extends Template
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
            'slider' => [$this, 'block_slider'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
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

        echo "Evini Buradan Kirala!";
        
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

        echo "Ev, kira";
        
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

        echo "En Uygun Fiyata Bu Siteden Ev'ini Kirala";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 6)->display($context);
        
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
<section id=\"recent-works\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Recent Works</h2>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item1.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a> </h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item1.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item2.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item2.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item3.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item3.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item4.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item4.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item5.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item5.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item6.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item6.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item7.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item7.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/recent/item8.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/portfolio/full/item8.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#recent-works-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 123,  302 => 118,  290 => 109,  282 => 104,  270 => 95,  262 => 90,  250 => 81,  242 => 76,  230 => 67,  222 => 62,  210 => 53,  202 => 48,  190 => 39,  182 => 34,  170 => 25,  162 => 20,  148 => 8,  138 => 7,  119 => 6,  100 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Evini Buradan Kirala!{% endblock %}
{% block keywords %}Ev, kira{% endblock %}
{% block description %}En Uygun Fiyata Bu Siteden Ev'ini Kirala{% endblock %}
{% block slider %}{% include('home/slider.html.twig') %}{% endblock %}
{% block body %}

<section id=\"recent-works\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <h2>Recent Works</h2>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item1.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a> </h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item1.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item2.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item2.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item3.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item3.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item4.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item4.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item5.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item5.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item6.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item6.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item7.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item7.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-4 col-md-3\">
                <div class=\"recent-work-wrap\">
                    <img class=\"img-responsive\" src=\"{{ asset ('assets')}}/images/portfolio/recent/item8.png\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"recent-work-inner\">
                            <h3><a href=\"#\">Business theme </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <a class=\"preview\" href=\"{{ asset ('assets')}}/images/portfolio/full/item8.png\" rel=\"prettyPhoto\"><i
                                    class=\"fa fa-eye\"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#recent-works-->
{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\home\\index.html.twig");
    }
}
