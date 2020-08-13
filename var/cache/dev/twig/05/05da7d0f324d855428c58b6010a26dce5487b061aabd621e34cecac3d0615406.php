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

/* home/slider.html.twig */
class __TwigTemplate_6f1b283a2f563343e38e416f85389a63995980110cb749fe844f075184df633c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        echo "    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
            </ol>
            <div class=\"carousel-inner\" style=\"height:450px\">
                <div class=\"item active\" style=\"background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "image", [], "any", false, false, false, 11))), "html", null, true);
        echo "); height:450px \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-3\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Rent</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">
                                    <div class=\"slider-img\">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 32
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 32, $this->source); })()), 0, [], "array", false, false, false, 32), "id", [], "any", false, false, false, 32)))) {
                // line 33
                echo "
                <div class=\"item\" style=\"background-image: url(";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 34))), "html", null, true);
                echo "); height:450px\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 40), "html", null, true);
                echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Rent</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 46)]), "html", null, true);
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
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
    <!--/#main-slider-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 56,  136 => 55,  124 => 46,  116 => 41,  112 => 40,  108 => 39,  100 => 34,  97 => 33,  94 => 32,  90 => 31,  79 => 23,  71 => 18,  67 => 17,  63 => 16,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
            </ol>
            <div class=\"carousel-inner\" style=\"height:450px\">
                <div class=\"item active\" style=\"background-image: url({{ asset ('uploads/images/' ~ slider[0].image) }}); height:450px \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-3\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">{{ slider[0].title}}</h1>
                                    <h2 class=\"animation animated-item-2\">{{ slider[0].description }}</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"{{ path ('ev_show', {'id': slider[0].id})}}\">Rent</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"{{ path('ev_show', {'id': slider[0].id}) }}\">
                                    <div class=\"slider-img\">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {% for rs in slider %}
                {%  if rs.id != slider[0].id  %}

                <div class=\"item\" style=\"background-image: url({{ asset ('uploads/images/' ~ rs.image) }}); height:450px\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">{{ rs.title}}</h1>
                                    <h2 class=\"animation animated-item-2\">{{ rs.description }}</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"{{ path ('ev_show', {'id': rs.id})}}\">Rent</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"{{ path('ev_show', {'id': rs.id}) }}\">
                                    <div class=\"slider-img\">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
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
    <!--/#main-slider-->", "home/slider.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\home\\slider.html.twig");
    }
}
