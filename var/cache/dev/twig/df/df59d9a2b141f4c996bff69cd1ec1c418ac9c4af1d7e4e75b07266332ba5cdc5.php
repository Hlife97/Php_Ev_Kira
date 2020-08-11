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

/* security/adminlogin.html.twig */
class __TwigTemplate_61eebb377603a96176931ab310891d7bf2e8ec582b2fe4260924d44e7400b931 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Matrix Admin</title>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/css/style.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/favicon.png\">
    ";
        // line 11
        $this->loadTemplate("admin/head.html.twig", "security/adminlogin.html.twig", 11)->display($context);
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap-responsive.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/matrix-login.css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id=\"loginbox\">
        <form method=\"post\">
            ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 26
        echo "
            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
            ";
        }
        // line 32
        echo "
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required
                autofocus>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

            ";
        // line 52
        echo "            <br>
            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                Sign in
            </button>
            <button class=\"btn btn-lg btn-success\" type=\"\" href=\"/adminregister.html\">
                Creat Account
            </button>
        </form>

    </div>

    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/matrix.login.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/adminlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  142 => 63,  129 => 52,  124 => 40,  116 => 35,  111 => 32,  103 => 29,  100 => 28,  98 => 27,  95 => 26,  89 => 24,  87 => 23,  76 => 15,  72 => 14,  68 => 13,  63 => 12,  61 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Matrix Admin</title>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link href=\"{{ asset ('assets')}}/admin/dist/css/style.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset ('assets')}}/admin/assets/images/favicon.png\">
    {% include('admin/head.html.twig') %}
    <link rel=\"stylesheet\" href=\"{{ asset ('assets')}}/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"{{ asset ('assets')}}/css/bootstrap-responsive.min.css\" />
    <link rel=\"stylesheet\" href=\"{{ asset ('assets')}}/css/matrix-login.css\" />
    <link href=\"{{ asset ('assets')}}/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id=\"loginbox\">
        <form method=\"post\">
            {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
            {% endif %}

            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required
                autofocus>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
            <br>
            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                Sign in
            </button>
            <button class=\"btn btn-lg btn-success\" type=\"\" href=\"/adminregister.html\">
                Creat Account
            </button>
        </form>

    </div>

    <script src=\"{{ asset ('assets')}}/admin/assets/libs/jquery/dist/jquery.min.js\"></script>
    <script src=\"{{ asset ('assets')}}/js/matrix.login.js\"></script>
</body>

</html>", "security/adminlogin.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\security\\adminlogin.html.twig");
    }
}
