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
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "image", [], "any", false, false, false, 11))), "html", null, true);
        echo ");
                
                \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-3\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 19, $this->source); })()), 0, [], "array", false, false, false, 19), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                                    <div class=\"slider-img\">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 34
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "id", [], "any", false, false, false, 34)))) {
                // line 35
                echo "
                <div class=\"item\" style=\"background-image: url(";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 36))), "html", null, true);
                echo ");
                            
                            \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 43), "html", null, true);
                echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 44), "html", null, true);
                echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ev_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 50)]), "html", null, true);
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
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  140 => 60,  134 => 59,  122 => 50,  113 => 44,  109 => 43,  99 => 36,  96 => 35,  93 => 34,  89 => 33,  78 => 25,  69 => 19,  65 => 18,  55 => 11,  43 => 1,);
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
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url({{ asset ('uploads/images/' ~ slider[0].image) }});
                
                \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-3\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">{{ slider[0].title}}</h1>
                                    <h2 class=\"animation animated-item-2\">{{ slider[0].description }}</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
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

                <div class=\"item\" style=\"background-image: url({{ asset ('uploads/images/' ~ rs.image) }});
                            
                            \">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">{{ rs.title}}</h1>
                                    <h2 class=\"animation animated-item-2\">{{ rs.description }}</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
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
