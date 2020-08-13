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

/* home/evshow.html.twig */
class __TwigTemplate_10f18687f5488bcfd2112cd65f67c89e8fbeaf7bb494345b577f5e3a982830fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/evshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/evshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/evshow.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 4, $this->source); })()), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
        
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
        echo "<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6 col-sm-6\">
                ";
        // line 13
        echo "                <section id=\"main-slider\" class=\"no-margin\">
                    <div class=\"carousel slide\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\" style=\"height:380px\">
                            <div class=\"item active\"
                                style=\"background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24))), "html", null, true);
        echo "); height:380px\">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-3\">
                                            <div class=\"carousel-content\">
                                                <h1 class=\"animation animated-item-1\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
                                                <h2 class=\"animation animated-item-2\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</h2>
                                                <a class=\"preview\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31))), "html", null, true);
        echo "\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
                                                <div class=\"slider-img\">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 47
            echo "                            <div class=\"item\"
                                style=\"background-image: url(";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48))), "html", null, true);
            echo "); height:380px \">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"carousel-content\">
                                                <a class=\"preview\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53))), "html", null, true);
            echo "\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <h1 class=\"animation animated-item-1\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</h1>
                                                <h2 class=\"animation animated-item-2\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
            echo "</h2>
                                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">
                                                <div class=\"slider-img\">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "

                        </div>
                        <!--/.carousel-inner-->
                    </div>
                    <!--/.carousel-->
                    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </section>
                <!--/#main-slider-->
            </div>

            <div align=\"center\" class=\"col-xs-6 col-sm-6\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 92, $this->source); })()), "title", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 96, $this->source); })()), "keywords", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 100, $this->source); })()), "description", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 106
        echo "                        <tr>
                            <th>Star</th>
                            <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 108, $this->source); })()), "star", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 112, $this->source); })()), "address", [], "any", false, false, false, 112), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 116, $this->source); })()), "phone", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 120, $this->source); })()), "fax", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 128, $this->source); })()), "city", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 132, $this->source); })()), "country", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 138
        echo "                        ";
        // line 142
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <!--/.row-->
        <hr>
        <div class=\"col-xs-12 col-sm-12\">
            <div class=\"tab-wrap\">
                <div class=\"media\">
                    <div class=\"parrent pull-left\">
                        <ul class=\"nav nav-tabs nav-stacked\">
                            <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Houses & Price</a></li>
                            <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Detail</a></li>
                            <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Comments</a></li>
                            <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                            <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                        </ul>
                    </div>

                    <div class=\"parrent media-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"images/tab1.png\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Houses & Price List</h4>

                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane active in\" id=\"tab2\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 178, $this->source); })()), "image", [], "any", false, false, false, 178))), "html", null, true);
        echo "\"
                                            style=\"width:80px;height:80px\">
                                    </div>
                                    <div class=\"media-body\">
                                        ";
        // line 182
        echo twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 182, $this->source); })()), "detail", [], "any", false, false, false, 182);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab3\">
                                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 189
            echo "                                <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "subject", [], "any", false, false, false, 189), "html", null, true);
            echo " [Rate:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 189), "html", null, true);
            echo "]</h5>
                                <p>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 190), "html", null, true);
            echo " </p>
                                <hr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
                                ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194)) {
            // line 195
            echo "                                <div class=\"row contact-wrap\">
                                    <div class=\"status alert alert-success\" style=\"display: none\"></div>
                                    <form name=\"comment\" method=\"post\"
                                        action=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\" class=\"contact-form\"
                                        role=\"form\">
                                        <div class=\"col-sm-5 col-sm-offset-1\" id=\"comment\">

                                            <div class=\"form-group\">
                                                <label for=\"comment_subject\">Subject *</label>
                                                <input type=\"text\" id=\"comment_subject\" name=\"comment[subject]\"
                                                    class=\"form-control\" required=\"required\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"comment_subject\">Rate *</label>
                                                <select id=\"comment_rate\" name=\"comment[rate]\" class=\"form-control\"
                                                    required=\"required\">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-5\">
                                            <div class=\"form-group\">
                                                <label for=\"comment_comment\">Message *</label>
                                                <textarea id=\"comment_comment\" name=\"comment[comment]\"
                                                    required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"hidden\" name=\"token\" value=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment"), "html", null, true);
            echo "\" />
                                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Send
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            ";
        } else {
            // line 236
            echo "                            <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>If you want to add comment please login</a></li>
                            ";
        }
        // line 238
        echo "                        </div>
                        <!--/.tab-content-->
                    </div>
                    <!--/.media-body-->
                </div>
                <!--/.media-->
            </div>
            <!--/.tab-wrap-->
        </div>
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
        return "home/evshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 238,  455 => 236,  443 => 227,  411 => 198,  406 => 195,  404 => 194,  401 => 193,  392 => 190,  385 => 189,  381 => 188,  372 => 182,  365 => 178,  327 => 142,  325 => 138,  320 => 132,  313 => 128,  306 => 124,  299 => 120,  292 => 116,  285 => 112,  278 => 108,  274 => 106,  269 => 100,  262 => 96,  255 => 92,  232 => 71,  217 => 62,  208 => 56,  204 => 55,  199 => 53,  191 => 48,  188 => 47,  184 => 46,  173 => 38,  163 => 31,  159 => 30,  155 => 29,  147 => 24,  134 => 13,  128 => 8,  118 => 7,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ ev.title }}{% endblock %}
{% block keywords %}{{ ev.keywords }}{% endblock %}
{% block description %}{{ ev.description }}{% endblock %}

{% block body %}
<section id=\"content\" class=\"shortcode-item\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6 col-sm-6\">
                {# #}
                <section id=\"main-slider\" class=\"no-margin\">
                    <div class=\"carousel slide\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                            <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\" style=\"height:380px\">
                            <div class=\"item active\"
                                style=\"background-image: url({{ asset ('uploads/images/' ~ ev.image) }}); height:380px\">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-3\">
                                            <div class=\"carousel-content\">
                                                <h1 class=\"animation animated-item-1\">{{ ev.title}}</h1>
                                                <h2 class=\"animation animated-item-2\">{{ ev.description }}</h2>
                                                <a class=\"preview\" href=\"{{ asset ('uploads/images/' ~ ev.image) }}\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"{{ path('ev_show', {'id': ev.id}) }}\">
                                                <div class=\"slider-img\">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% for rs in images %}
                            <div class=\"item\"
                                style=\"background-image: url({{ asset ('uploads/images/' ~ ev.image) }}); height:380px \">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"carousel-content\">
                                                <a class=\"preview\" href=\"{{ asset ('uploads/images/' ~ ev.image) }}\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <h1 class=\"animation animated-item-1\">{{ ev.title}}</h1>
                                                <h2 class=\"animation animated-item-2\">{{ ev.description }}</h2>
                                                <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"{{ path('ev_show', {'id': ev.id}) }}\">
                                                <div class=\"slider-img\">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}


                        </div>
                        <!--/.carousel-inner-->
                    </div>
                    <!--/.carousel-->
                    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </section>
                <!--/#main-slider-->
            </div>

            <div align=\"center\" class=\"col-xs-6 col-sm-6\">
                <table class=\"table\">
                    <tbody>
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
                        {# <tr>
                            <th>Image</th>
                            <td><img src=\"{{ asset ('uploads/images/' ~ ev.image) }}\" height=\"40\"></td>
                        </tr> #}
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
                        {# <tr>
                            <th>Location</th>
                            <td>{{ ev.location }}</td>
                        </tr> #}
                        {# <tr>
                            <th>Detail</th>
                            <td>{{ ev.detail | raw }}</td>
                        </tr> #}
                    </tbody>
                </table>
            </div>
        </div>
        <!--/.row-->
        <hr>
        <div class=\"col-xs-12 col-sm-12\">
            <div class=\"tab-wrap\">
                <div class=\"media\">
                    <div class=\"parrent pull-left\">
                        <ul class=\"nav nav-tabs nav-stacked\">
                            <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Houses & Price</a></li>
                            <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Detail</a></li>
                            <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Comments</a></li>
                            <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                            <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                        </ul>
                    </div>

                    <div class=\"parrent media-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"images/tab1.png\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Houses & Price List</h4>

                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane active in\" id=\"tab2\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"{{ asset ('uploads/images/' ~ ev.image) }}\"
                                            style=\"width:80px;height:80px\">
                                    </div>
                                    <div class=\"media-body\">
                                        {{ ev.detail | raw }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab3\">
                                {% for rs in comments %}
                                <h5>{{ rs.subject}} [Rate:{{ rs.rate}}]</h5>
                                <p>{{ rs.comment}} </p>
                                <hr>
                                {% endfor %}

                                {% if app.user %}
                                <div class=\"row contact-wrap\">
                                    <div class=\"status alert alert-success\" style=\"display: none\"></div>
                                    <form name=\"comment\" method=\"post\"
                                        action=\"{{ path('user_new_comment', {'id': ev.id}) }}\" class=\"contact-form\"
                                        role=\"form\">
                                        <div class=\"col-sm-5 col-sm-offset-1\" id=\"comment\">

                                            <div class=\"form-group\">
                                                <label for=\"comment_subject\">Subject *</label>
                                                <input type=\"text\" id=\"comment_subject\" name=\"comment[subject]\"
                                                    class=\"form-control\" required=\"required\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"comment_subject\">Rate *</label>
                                                <select id=\"comment_rate\" name=\"comment[rate]\" class=\"form-control\"
                                                    required=\"required\">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-5\">
                                            <div class=\"form-group\">
                                                <label for=\"comment_comment\">Message *</label>
                                                <textarea id=\"comment_comment\" name=\"comment[comment]\"
                                                    required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('comment') }}\" />
                                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Send
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {% else  %}
                            <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>If you want to add comment please login</a></li>
                            {% endif %}
                        </div>
                        <!--/.tab-content-->
                    </div>
                    <!--/.media-body-->
                </div>
                <!--/.media-->
            </div>
            <!--/.tab-wrap-->
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#content-->
{% endblock %}", "home/evshow.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\home\\evshow.html.twig");
    }
}
