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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_348041a5e3dbc07dc05abf8d95a08d7d71fdd5b442211c9182746444af70fe23 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        echo "Tableau de board";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-users fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "users", [], "any", false, false, false, 16), "html", null, true);
        echo " Utilisateurs</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-dark mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-hotel fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "ads", [], "any", false, false, false, 30), "html", null, true);
        echo " Annonces</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-warning mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-folder fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "bookings", [], "any", false, false, false, 44), "html", null, true);
        echo " Reserv</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-success mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-comment fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "comments", [], "any", false, false, false, 58), "html", null, true);
        echo " Avis client</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-success\">
                    <h2 class=\"alert-heading my-3\">
                        <i class=\"fas fa-arrow-up\"></i>
                        Les annonces populaires
                    </h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Annonce</th>
                                <th>Poprio</th>
                                <th>Moyenne</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestAds"]) || array_key_exists("bestAds", $context) ? $context["bestAds"] : (function () { throw new RuntimeError('Variable "bestAds" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 83
            echo "                            <tr>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                <td>
                                    <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 86), "html", null, true);
            echo "\" alt=\"\" class=\"avatar avatar-micro\">
                                    ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 87), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 87), "html", null, true);
            echo "
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 91
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 91), 1, ",", " "), "html", null, true);
            echo "
                                    </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-danger\">
                    <h2 class=\"alert-heading my-3\">
                        <i class=\"fas fa-arrow-down\"></i>
                        Les pires annonces
                    </h2>
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Poprio</th>
                            <th>Moyenne</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstAds"]) || array_key_exists("worstAds", $context) ? $context["worstAds"] : (function () { throw new RuntimeError('Variable "worstAds" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 116
            echo "                            <tr>
                                <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                                <td>
                                    <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 119), "html", null, true);
            echo "\" alt=\"\" class=\"avatar avatar-micro\">
                                    ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 120), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 120), "html", null, true);
            echo "
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 124
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 124), 1, ",", " "), "html", null, true);
            echo "
                                    </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 129,  260 => 124,  251 => 120,  247 => 119,  242 => 117,  239 => 116,  235 => 115,  214 => 96,  203 => 91,  194 => 87,  190 => 86,  185 => 84,  182 => 83,  178 => 82,  151 => 58,  134 => 44,  117 => 30,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de board{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-users fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.users }} Utilisateurs</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-dark mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-hotel fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.ads }} Annonces</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-warning mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-folder fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.bookings }} Reserv</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card text-white bg-success mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-comment fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.comments }} Avis client</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-success\">
                    <h2 class=\"alert-heading my-3\">
                        <i class=\"fas fa-arrow-up\"></i>
                        Les annonces populaires
                    </h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Annonce</th>
                                <th>Poprio</th>
                                <th>Moyenne</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for ad in bestAds %}
                            <tr>
                                <td>{{ ad.title }}</td>
                                <td>
                                    <img src=\"{{ ad.picture }}\" alt=\"\" class=\"avatar avatar-micro\">
                                    {{ ad.firstName }} {{ ad.lastName }}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        {{ ad.note | number_format(1, \",\", \" \") }}
                                    </span>
                                </td>
                            </tr>
                        {% endfor%}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-danger\">
                    <h2 class=\"alert-heading my-3\">
                        <i class=\"fas fa-arrow-down\"></i>
                        Les pires annonces
                    </h2>
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Poprio</th>
                            <th>Moyenne</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for ad in worstAds %}
                            <tr>
                                <td>{{ ad.title }}</td>
                                <td>
                                    <img src=\"{{ ad.picture }}\" alt=\"\" class=\"avatar avatar-micro\">
                                    {{ ad.firstName }} {{ ad.lastName }}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        {{ ad.note | number_format(1, \",\", \" \") }}
                                    </span>
                                </td>
                            </tr>
                        {% endfor%}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/dashboard/index.html.twig", "C:\\xampp\\htdocs\\symbnb\\templates\\admin\\dashboard\\index.html.twig");
    }
}
