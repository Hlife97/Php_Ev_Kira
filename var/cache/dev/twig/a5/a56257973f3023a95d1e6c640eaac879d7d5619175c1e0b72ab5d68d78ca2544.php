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

/* messages.html.twig */
class __TwigTemplate_322bcd1a04a98670636dedb5952b21d2ff13ac8f480e05c1ee950d039f3e84c4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "all", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                echo "\t\t";
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 4
                    echo "\t\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t\t<button type=\"button\" class=\"class\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
\t\t\t\t<h4>
\t\t\t\t\t<i class=\"icon fa fa-check\"></i>OK!</h4>
\t\t\t\t";
                    // line 8
                    echo $context["flash"];
                    echo "
\t\t\t</div>

\t\t";
                } elseif ((0 === twig_compare(                // line 11
$context["label"], "error"))) {
                    // line 12
                    echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t";
                    // line 15
                    echo $context["flash"];
                    echo "
\t\t\t</div>
\t\t";
                } elseif ((0 === twig_compare(                // line 17
$context["label"], "info"))) {
                    // line 18
                    echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t";
                    // line 21
                    echo $context["flash"];
                    echo "
\t\t\t</div>

\t\t";
                } elseif ((0 === twig_compare(                // line 24
$context["label"], "warning"))) {
                    // line 25
                    echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t";
                    // line 28
                    echo $context["flash"];
                    echo "
\t\t\t</div>

\t\t";
                } elseif ((0 === twig_compare(                // line 31
$context["label"], "warning"))) {
                    // line 32
                    echo "\t\t\t<div class=\"alert alert-warning alert-dismissible\">
\t\t\t\t<button type=\"button\" class=\"class\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
\t\t\t\t<h4>
\t\t\t\t\t<i class=\"icon fa fa-warning\"></i>Uyari !</h4>
\t\t\t\t";
                    // line 36
                    echo $context["flash"];
                    echo "
\t\t\t</div>
\t\t";
                }
                // line 39
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 36,  107 => 32,  105 => 31,  99 => 28,  94 => 25,  92 => 24,  86 => 21,  81 => 18,  79 => 17,  74 => 15,  69 => 12,  67 => 11,  61 => 8,  55 => 4,  52 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for label, flashes in app.session.flashbag.all %}
\t{% for flash in flashes %}
\t\t{% if (label=='success') %}
\t\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t\t<button type=\"button\" class=\"class\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
\t\t\t\t<h4>
\t\t\t\t\t<i class=\"icon fa fa-check\"></i>OK!</h4>
\t\t\t\t{{ flash|raw }}
\t\t\t</div>

\t\t{% elseif (label=='error') %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t{{ flash|raw }}
\t\t\t</div>
\t\t{% elseif (label=='info') %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t{{ flash|raw }}
\t\t\t</div>

\t\t{% elseif (label=='warning') %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>
\t\t\t\t\tError!</strong>
\t\t\t\t{{ flash|raw }}
\t\t\t</div>

\t\t{% elseif (label=='warning') %}
\t\t\t<div class=\"alert alert-warning alert-dismissible\">
\t\t\t\t<button type=\"button\" class=\"class\" data-dismiss=\"alert\" aria-hidden=\"true\">x</button>
\t\t\t\t<h4>
\t\t\t\t\t<i class=\"icon fa fa-warning\"></i>Uyari !</h4>
\t\t\t\t{{ flash|raw }}
\t\t\t</div>
\t\t{% endif %}
\t{% endfor %}
{% endfor %}
", "messages.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\messages.html.twig");
    }
}
