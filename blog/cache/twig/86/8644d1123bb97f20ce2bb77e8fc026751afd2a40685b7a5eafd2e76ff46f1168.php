<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/blog-item.html.twig */
class __TwigTemplate_fa3915fd48f758942b22b778f0ef96081fbd26039cbb3ee2caff3975188cece0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"content-item h-entry\">

    ";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "        <div class=\"content-title text-center\">
            ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h2"]));
            // line 6
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method")) {
                // line 7
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                    // line 8
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
                    echo "</h3>
                ";
                }
                // line 10
                echo "                ";
                $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 10)->display($context);
                // line 11
                echo "                ";
                $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 11)->display($context);
                // line 12
                echo "            ";
            }
            // line 13
            echo "        </div>
    ";
        }
        // line 15
        echo "
    <div class=\"e-content\">
        ";
        // line 18
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "display_post_summary", []), "enabled", [])) {
            // line 19
            echo "            ";
            $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", [])));
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            ";
            $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", []);
            // line 22
            echo "        ";
        }
        // line 23
        echo "
        ";
        // line 25
        echo "        ";
        if ( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method"))) {
            // line 26
            echo "            ";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 27
                echo "                ";
                echo ($context["content"] ?? null);
                echo "
            ";
            } else {
                // line 29
                echo "                ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                echo "
            ";
            }
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
            ";
            // line 33
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true)) {
                // line 34
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["page"] ?? null), "url", []) . "/chromeless:true"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                echo "\" class=\"btn btn-primary topwindow external-link\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.CONTINUE_READING"), "html", null, true);
                echo "</a>
            ";
            }
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </div>

    ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
            // line 40
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 40)->display($context);
            // line 41
            echo "    ";
        }
        // line 42
        echo "
</div>

";
        // line 46
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 47
            echo "
    <p class=\"prev-next text-center\">
        ";
            // line 49
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 50
                echo "            <a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\">
                <i class=\"fa fa-angle-left\"></i>
                ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 57
                echo "            <a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
                echo "
                <i class=\"fa fa-angle-right\"></i>
            </a>
        ";
            }
            // line 61
            echo "    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 61,  171 => 57,  169 => 56,  166 => 55,  160 => 52,  154 => 50,  152 => 49,  148 => 47,  146 => 46,  141 => 42,  138 => 41,  135 => 40,  133 => 39,  129 => 37,  126 => 36,  116 => 34,  114 => 33,  109 => 32,  106 => 31,  100 => 29,  94 => 27,  91 => 26,  88 => 25,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  66 => 15,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

    {% if not hero_image_name %}
        <div class=\"content-title text-center\">
            {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
            {% if not (grav.uri.param('hidepagetitle')) %}
                {% if page.header.subtitle %}
                    <h3>{{ page.header.subtitle }}</h3>
                {% endif %}
                {% include 'partials/blog/date.html.twig' %}
                {% include 'partials/blog/taxonomy.html.twig' %}
            {% endif %}
        </div>
    {% endif %}

    <div class=\"e-content\">
        {# check to hide post summary on page - hibbittsdesign.org #}
        {% if page.parent.header.display_post_summary.enabled %}
            {% set content = page.content|slice(page.summary | length) %}
        {% else %}
            {% set content = page.content %}
        {% endif %}

        {# check to show summary only - hibbittsdesign.org #}
        {% if not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
            {% if content is not empty %}
                {{ content|raw }}
            {% else %}
                {{ page.summary|raw }}
            {% endif %}
        {% else %}
            {{ page.summary|raw }}
            {% if page.header.continue_link is same as(true) %}
              <a href=\"{{ page.url ~ '/chromeless:true' }}\" title=\"{{ page.title }}\" class=\"btn btn-primary topwindow external-link\">{{ 'THEME_QUARK.BLOG.ITEM.CONTINUE_READING'|t }}</a>
            {% endif %}
        {% endif %}
    </div>

    {% if config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}

</div>

{# added check for content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}

    <p class=\"prev-next text-center\">
        {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\">
                <i class=\"fa fa-angle-left\"></i>
                {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}
            </a>
        {% endif %}

        {% if not page.isFirst %}
            <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }}
                <i class=\"fa fa-angle-right\"></i>
            </a>
        {% endif %}
    </p>

{% endif %}
", "partials/blog-item.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/blog-item.html.twig");
    }
}
