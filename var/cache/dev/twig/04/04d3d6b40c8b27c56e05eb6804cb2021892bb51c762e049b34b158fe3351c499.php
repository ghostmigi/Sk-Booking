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

/* booking/show.html.twig */
class __TwigTemplate_204ef80b8c3bd27281b13a4f96f385fae361fbfcfec07840ae3a552568af0244 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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

        echo "Votre reservation (n° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo ")";
        
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
        echo "
    ";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "ad", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "author", [], "any", false, false, false, 8);
        // line 9
        echo "
    <div class=\"container\">
        <h1 class=\"my-4\">Votre reservation (n° ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo ")</h1>

        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13), "get", [0 => "withAlert"], "method", false, false, false, 13)) {
            // line 14
            echo "            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre reservation aupres de 
                    <strong>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })()), "fullName", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>
                    </strong>
                    pour l'annonce
                    <strong>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
                    </strong>
                    a bien ete prise en compte !
                </p>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"row\">
            <div class=\"col\">
              <div class=\"alert alert-light\">
                  <h2>Details</h2>
                  <dl class=\"row\">
                      <dt class=\"col-md-4\">Numero</dt>
                      <dd class=\"col-md-8\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "</dd>
                      <dt class=\"col-md-4\">Date d'arrivee</dt>
                      <dd class=\"col-md-8\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 38, $this->source); })()), "startDate", [], "any", false, false, false, 38), "d/m/y"), "html", null, true);
        echo "</dd>
                      <dt class=\"col-md-4\">Date de depart</dt>
                      <dd class=\"col-md-8\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "endDate", [], "any", false, false, false, 40), "d/m/y"), "html", null, true);
        echo "</dd>
                      <dt class=\"col-md-4\">Nombre de nuits</dt>
                      <dd class=\"col-md-8\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 42, $this->source); })()), "duration", [], "any", false, false, false, 42), "html", null, true);
        echo "</dd>
                      <dt class=\"col-md-4\">Montant total</dt>
                      <dd class=\"col-md-8\">";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "amount", [], "any", false, false, false, 44), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                      <dt class=\"col-md-4\">Commentaire</dt>
                      <dd class=\"col-md-8\">";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 46), "Aucun Commentaire")) : ("Aucun Commentaire")), "html", null, true);
        echo "</dd>
                  </dl>

                  <hr>

                  <h2 class=\"alert-heading\">Votre hote</h2>

                  <div class=\"row mb-3\">
                      <div class=\"col-3\">
                          <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 55, $this->source); })()), "picture", [], "any", false, false, false, 55), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 55, $this->source); })()), "fullName", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
                      </div>
                      <div class=\"col-9\">
                          <h4>
                              <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 59, $this->source); })()), "fullName", [], "any", false, false, false, 59), "html", null, true);
        echo "</a>
                          </h4>

                          <span class=\"badge badge-primary\">";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 62, $this->source); })()), "ads", [], "any", false, false, false, 62)), "html", null, true);
        echo " annonces</span>
                      </div>
                  </div>
                  ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65);
        echo "
                  <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 66, $this->source); })()), "slug", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'infos sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 66, $this->source); })()), "firstName", [], "any", false, false, false, 66), "html", null, true);
        echo "</a>
              </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    ";
        // line 71
        if ((twig_date_converter($this->env) > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 71, $this->source); })()), "endDate", [], "any", false, false, false, 71)))) {
            // line 72
            echo "                        ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 72, $this->source); })()), "ad", [], "any", false, false, false, 72), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)], "method", false, false, false, 72);
            // line 73
            echo "                        ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 73, $this->source); })()))) {
                // line 74
                echo "                            <blockquote>
                                ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 75, $this->source); })()), "content", [], "any", false, false, false, 75), "html", null, true);
                echo "
                            </blockquote>
                            <strong>Note :</strong> ";
                // line 77
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 77)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 77, $this->source); })()), "rating", [], "any", false, false, false, 77)]));
                // line 78
                echo "                        ";
            } else {
                // line 79
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_start');
                echo "
                            ";
                // line 80
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'widget');
                echo "
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            ";
                // line 82
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
                echo "
                        ";
            }
            // line 84
            echo "                    ";
        } else {
            // line 85
            echo "                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    ";
        }
        // line 87
        echo "
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hebergement</h2>
                    <h4>
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 94, $this->source); })()), "title", [], "any", false, false, false, 94), "html", null, true);
        echo "</a>
                    </h4>
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 96, $this->source); })()), "coverImage", [], "any", false, false, false, 96), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 96, $this->source); })()), "title", [], "any", false, false, false, 96), "html", null, true);
        echo "\" class=\"img-fluid\">
                    ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 97, $this->source); })()), "content", [], "any", false, false, false, 97);
        echo "
                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 98, $this->source); })()), "slug", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'informations</a>
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
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 98,  284 => 97,  278 => 96,  271 => 94,  262 => 87,  258 => 85,  255 => 84,  250 => 82,  245 => 80,  240 => 79,  237 => 78,  235 => 77,  230 => 75,  227 => 74,  224 => 73,  221 => 72,  219 => 71,  209 => 66,  205 => 65,  199 => 62,  191 => 59,  182 => 55,  170 => 46,  165 => 44,  160 => 42,  155 => 40,  150 => 38,  145 => 36,  136 => 29,  125 => 23,  116 => 19,  109 => 14,  107 => 13,  102 => 11,  98 => 9,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre reservation (n° {{ booking.id }}){% endblock %}

{% block body %}

    {% set ad = booking.ad %}
    {% set author = ad.author %}

    <div class=\"container\">
        <h1 class=\"my-4\">Votre reservation (n° {{ booking.id }})</h1>

        {% if app.request.query.get('withAlert') %}
            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre reservation aupres de 
                    <strong>
                        <a href=\"{{ path('user_show',{'slug' : author.slug}) }}\">{{ author.fullName }}</a>
                    </strong>
                    pour l'annonce
                    <strong>
                        <a href=\"{{ path('ads_show',{'slug' : ad.slug}) }}\">{{ ad.title }}</a>
                    </strong>
                    a bien ete prise en compte !
                </p>
            </div>
        {% endif %}

        <div class=\"row\">
            <div class=\"col\">
              <div class=\"alert alert-light\">
                  <h2>Details</h2>
                  <dl class=\"row\">
                      <dt class=\"col-md-4\">Numero</dt>
                      <dd class=\"col-md-8\">{{ booking.id }}</dd>
                      <dt class=\"col-md-4\">Date d'arrivee</dt>
                      <dd class=\"col-md-8\">{{ booking.startDate | date('d/m/y') }}</dd>
                      <dt class=\"col-md-4\">Date de depart</dt>
                      <dd class=\"col-md-8\">{{ booking.endDate | date('d/m/y') }}</dd>
                      <dt class=\"col-md-4\">Nombre de nuits</dt>
                      <dd class=\"col-md-8\">{{ booking.duration }}</dd>
                      <dt class=\"col-md-4\">Montant total</dt>
                      <dd class=\"col-md-8\">{{ booking.amount | number_format(2, ',', ' ') }} &euro;</dd>
                      <dt class=\"col-md-4\">Commentaire</dt>
                      <dd class=\"col-md-8\">{{ booking.comment | default('Aucun Commentaire')}}</dd>
                  </dl>

                  <hr>

                  <h2 class=\"alert-heading\">Votre hote</h2>

                  <div class=\"row mb-3\">
                      <div class=\"col-3\">
                          <img src=\"{{ author.picture }}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{ author.fullName }}\">
                      </div>
                      <div class=\"col-9\">
                          <h4>
                              <a href=\"{{ path('user_show', {'slug' : author.slug}) }}\">{{ author.fullName }}</a>
                          </h4>

                          <span class=\"badge badge-primary\">{{ author.ads|length }} annonces</span>
                      </div>
                  </div>
                  {{ author.description | raw }}
                  <a href=\"{{ path('user_show', {'slug' : author.slug} ) }}\" class=\"btn btn-primary\">Plus d'infos sur {{ author.firstName }}</a>
              </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    {% if date() > date(booking.endDate) %}
                        {% set comment = booking.ad.commentFromAuthor(app.user) %}
                        {% if comment is not null %}
                            <blockquote>
                                {{ comment.content }}
                            </blockquote>
                            <strong>Note :</strong> {% include 'partials/rating.html.twig' with {'rating': comment.rating} %}
                        {% else %}
                            {{ form_start(form) }}
                            {{ form_widget(form) }}
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            {{ form_end(form) }}
                        {% endif %}
                    {% else %}
                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    {% endif %}

                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hebergement</h2>
                    <h4>
                        <a href=\"{{ path('ads_show',{'slug' : ad.slug}) }}\">{{ ad.title }}</a>
                    </h4>
                    <img src=\"{{ ad.coverImage }}\" alt=\"Image de {{ ad.title }}\" class=\"img-fluid\">
                    {{ ad.content | raw }}
                    <a href=\"{{ path('ads_show',{'slug' : ad.slug}) }}\" class=\"btn btn-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "booking/show.html.twig", "C:\\xampp\\htdocs\\symbnb\\templates\\booking\\show.html.twig");
    }
}
