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
                                style=\"background-image: url(";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
        echo "); height:380px\">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-3\">
                                            <div class=\"carousel-content\">
                                                <h1 class=\"animation animated-item-1\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
                                                <a class=\"preview\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29))), "html", null, true);
        echo "\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">
                                                <div class=\"slider-img\">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 44
            echo "                            <div class=\"item\"
                                style=\"background-image: url(";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 45))), "html", null, true);
            echo "); height:380px \">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"carousel-content\">
                                                <a class=\"preview\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 50))), "html", null, true);
            echo "\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <h1 class=\"animation animated-item-1\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</h1>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
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
        // line 66
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
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 87, $this->source); })()), "title", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 91, $this->source); })()), "keywords", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 99, $this->source); })()), "price", [], "any", false, false, false, 99), "html", null, true);
        echo " TRY</td>
                        </tr>
                        ";
        // line 105
        echo "                        <tr>
                            <th>Star</th>
                            <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 107, $this->source); })()), "star", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 111, $this->source); })()), "address", [], "any", false, false, false, 111), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 115, $this->source); })()), "phone", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 125
        echo "                        <tr>
                            <th>City</th>
                            <td>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 127, $this->source); })()), "city", [], "any", false, false, false, 127), "html", null, true);
        echo "</td>
                        </tr>
                       <tr>
                            <th>Country</th>
                            <td>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 131, $this->source); })()), "country", [], "any", false, false, false, 131), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 137
        echo "                        ";
        // line 141
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
                            <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Rent</a></li>
                            <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Detail</a></li>
                            <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Comments</a></li>
                            <!--<li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                            <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>-->
                        </ul>
                    </div>

                    <div class=\"parrent media-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 165, $this->source); })()), "image", [], "any", false, false, false, 165))), "html", null, true);
        echo "\"
                                            style=\"width:80px;height:80px\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Price: ";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 169, $this->source); })()), "price", [], "any", false, false, false, 169), "html", null, true);
        echo "₺</h4>
                                            <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reservation_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
        echo "\"><button class=\"btn btn-info\">Rent Home</button></a>
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
            echo "                            <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>If you want to add comment please
                                    login</a></li>
                            ";
        }
        // line 239
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
        return array (  453 => 239,  448 => 236,  436 => 227,  404 => 198,  399 => 195,  397 => 194,  394 => 193,  385 => 190,  378 => 189,  374 => 188,  365 => 182,  358 => 178,  347 => 170,  343 => 169,  336 => 165,  310 => 141,  308 => 137,  303 => 131,  296 => 127,  292 => 125,  287 => 115,  280 => 111,  273 => 107,  269 => 105,  264 => 99,  257 => 95,  250 => 91,  243 => 87,  220 => 66,  205 => 57,  197 => 52,  192 => 50,  184 => 45,  181 => 44,  177 => 43,  166 => 35,  157 => 29,  153 => 28,  145 => 23,  128 => 8,  118 => 7,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
                                                <a class=\"preview\" href=\"{{ asset ('uploads/images/' ~ ev.image) }}\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
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
                                style=\"background-image: url({{ asset ('uploads/images/' ~ rs.image) }}); height:380px \">
                                <div class=\"container\">
                                    <div class=\"row slide-margin\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"carousel-content\">
                                                <a class=\"preview\" href=\"{{ asset ('uploads/images/' ~ rs.image) }}\"
                                                    rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                                <h1 class=\"animation animated-item-1\">{{ ev.title}}</h1>
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
                        <tr>
                            <th>Price</th>
                            <td>{{ ev.price }} TRY</td>
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
                        {# <tr>
                            <th>Fax</th>
                            <td>{{ ev.fax }}</td>
                        </tr>
                         <tr>
                            <th>Email</th>
                            <td>{{ ev.email }}</td>
                        </tr> #}
                        <tr>
                            <th>City</th>
                            <td>{{ ev.city }}</td>
                        </tr>
                       <tr>
                            <th>Country</th>
                            <td>{{ ev.country }}</td>
                        </tr>
                        {#  <tr>
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
                            <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Rent</a></li>
                            <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Detail</a></li>
                            <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Comments</a></li>
                            <!--<li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                            <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>-->
                        </ul>
                    </div>

                    <div class=\"parrent media-body\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"tab1\">
                                <div class=\"media\">
                                    <div class=\"pull-left\">
                                        <img class=\"img-responsive\" src=\"{{ asset ('uploads/images/' ~ ev.image) }}\"
                                            style=\"width:80px;height:80px\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Price: {{ ev.price }}₺</h4>
                                            <a href=\"{{ path('user_reservation_new', {'id': ev.id}) }}\"><button class=\"btn btn-info\">Rent Home</button></a>
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
                            <li><a href=\"/loginuser\"><i class=\"icon-lock\"></i>If you want to add comment please
                                    login</a></li>
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
