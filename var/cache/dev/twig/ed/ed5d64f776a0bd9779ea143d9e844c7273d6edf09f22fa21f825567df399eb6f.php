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

/* admin/image/new.html.twig */
class __TwigTemplate_3d6be65001e0bb55ac5a181d42c4e0e933afa3cdce6b4cd757a282653f2fb66b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/css/style.min.css\" rel=\"stylesheet\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/assets/images/favicon.png\">

<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"form-group row\">
            <label class=\"col-md-3\">Title Name</label>
            <input class=\"col-md-9 form-control\" type=\"text\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\" placeholder=\"Title Name Here\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-3\">File Upload</label>
            <div class=\"col-md-9\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\" required=\"\">
                    <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
                    <div class=\"invalid-feedback\">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"border-top\">
        <div class=\"card-body\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </div>
</div>

<!--start contact contant-->

<div class=\"row\">
    <table class=\"table table-light mb-0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["image"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 46))), "html", null, true);
            echo "\" height=\"40\">
                </td>
                <td>
                    <form method=\"post\" action=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 49), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())]), "html", null, true);
            echo "\"
                        onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 52))), "html", null, true);
            echo "\">
                        <button class=\"btn\">Delete</button>
                    </form>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/image/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 62,  130 => 58,  119 => 52,  113 => 49,  107 => 46,  102 => 44,  98 => 43,  95 => 42,  90 => 41,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset ('assets')}}/admin/dist/css/style.min.css\" rel=\"stylesheet\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset ('assets')}}/admin/assets/images/favicon.png\">

<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"form-group row\">
            <label class=\"col-md-3\">Title Name</label>
            <input class=\"col-md-9 form-control\" type=\"text\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\" placeholder=\"Title Name Here\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-3\">File Upload</label>
            <div class=\"col-md-9\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" id=\"image_image\" name=\"image[image]\" required=\"\">
                    <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
                    <div class=\"invalid-feedback\">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"border-top\">
        <div class=\"card-body\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </div>
</div>

<!--start contact contant-->

<div class=\"row\">
    <table class=\"table table-light mb-0\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for image in image %}
            <tr>
                <td>{{ image.id }}</td>
                <td>{{ image.title }}</td>
                <td>
                    <img src=\"{{ asset('uploads/images/' ~ image.image) }}\" height=\"40\">
                </td>
                <td>
                    <form method=\"post\" action=\"{{ path('admin_image_delete', {'id': image.id, 'id': id}) }}\"
                        onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ image.id) }}\">
                        <button class=\"btn\">Delete</button>
                    </form>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>", "admin/image/new.html.twig", "C:\\xampp\\htdocs\\ev_kira\\templates\\admin\\image\\new.html.twig");
    }
}
