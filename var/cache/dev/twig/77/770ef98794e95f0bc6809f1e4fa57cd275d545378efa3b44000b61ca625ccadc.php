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

/* ad/_ad.html.twig */
class __TwigTemplate_3db61a467c72627840b9b63853e6751783cbe2af7b45c705ff40550c4972bcf6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 5, $this->source); })()), "rooms", [], "any", false, false, false, 5), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 5, $this->source); })()), "price", [], "any", false, false, false, 5), 2, ",", " "), "html", null, true);
        echo "&euro; / nuit</strong> <br>

            ";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "comments", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "                ";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 8)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "avgRatings", [], "any", false, false, false, 8)]));
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                <small>Pas encore note!</small>
            ";
        }
        // line 12
        echo "
        </div>

        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 16, $this->source); })()), "coverImage", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"Image de l'appartement\"
                 style=\"height: 200px; width: 100%; display: block\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "
                </a>
            </h4>
            <p class=\"card-text\">
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 27, $this->source); })()), "introduction", [], "any", false, false, false, 27), "html", null, true);
        echo "
            </p>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary float-right\">En savoir plus!</a>

            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 31, $this->source); })()), "author", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 32, $this->source); })()), "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  110 => 32,  108 => 31,  103 => 29,  98 => 27,  91 => 23,  87 => 22,  78 => 16,  74 => 15,  69 => 12,  65 => 10,  62 => 9,  59 => 8,  57 => 7,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = path('ads_show', {'slug': ad.slug}) %}
<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            {{ ad.rooms }} chambres, <strong>{{ ad.price | number_format(2, ',', ' ') }}&euro; / nuit</strong> <br>

            {% if ad.comments|length > 0 %}
                {% include 'partials/rating.html.twig' with {'rating' : ad.avgRatings} %}
            {% else %}
                <small>Pas encore note!</small>
            {% endif %}

        </div>

        <a href=\"{{ url }}\">
            <img src=\"{{ ad.coverImage}}\" alt=\"Image de l'appartement\"
                 style=\"height: 200px; width: 100%; display: block\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"{{ url }}\">
                    {{ ad.title}}
                </a>
            </h4>
            <p class=\"card-text\">
                {{ ad.introduction }}
            </p>
            <a href=\"{{ url }}\" class=\"btn btn-primary float-right\">En savoir plus!</a>

            {% if app.user and app.user == ad.author %}
                <a href=\"{{ path('ads_edit',{ 'slug' : ad.slug }) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
        </div>
    </div>
</div>", "ad/_ad.html.twig", "C:\\xampp\\htdocs\\symbnb\\templates\\ad\\_ad.html.twig");
    }
}
