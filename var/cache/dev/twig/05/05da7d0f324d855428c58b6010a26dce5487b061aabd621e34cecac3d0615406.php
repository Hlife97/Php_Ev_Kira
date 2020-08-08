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
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(assets/images/slider/bg1.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/slider/img1.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class=\"item\" style=\"background-image: url(assets/images/slider/bg2.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/slider/img2.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class=\"item\" style=\"background-image: url(assets/images/slider/bg3.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/slider/img3.png\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
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
        return array (  122 => 72,  96 => 49,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(assets/images/slider/bg1.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ asset ('assets')}}/images/slider/img1.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class=\"item\" style=\"background-image: url(assets/images/slider/bg2.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ asset ('assets')}}/images/slider/img2.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class=\"item\" style=\"background-image: url(assets/images/slider/bg3.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem
                                        aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"{{ asset ('assets')}}/images/slider/img3.png\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
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
