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

/* partials/sidebar.html.twig */
class __TwigTemplate_e9d7d53cb689034afb8e270faf24b04706a2139f24f75c04e4c32303bc94dcb4 extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        $context["sidebar_page"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/sidebar"], "method");
        // line 5
        $context["sidebar_page_content"] = $this->getAttribute(($context["sidebar_page"] ?? null), "content", []);
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 8
            echo "    <div class=\"sidebar-content\">
        ";
            // line 9
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "
";
        // line 14
        if ((($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "top") || twig_test_empty($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", [])))) {
            // line 15
            echo "    ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 16
                echo "        <div class=\"sidebar-content\">
            ";
                // line 17
                echo ($context["sidebar_page_content"] ?? null);
                echo "
        </div>
    ";
            }
        }
        // line 21
        echo "
";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 23
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE"), "html", null, true);
            echo "</h4>
        ";
            // line 25
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 25)->display($context);
            // line 26
            echo "    </div>
";
        }
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 29
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE"), "html", null, true);
            echo "</h4>
        <a class=\"button\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 36
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE"), "html", null, true);
            echo "</h4>
        ";
            // line 38
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 38)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 39
            echo "    </div>
";
        }
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 42
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE"), "html", null, true);
            echo "</h4>
        ";
            // line 44
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 44)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 45
            echo "    </div>
";
        }
        // line 47
        echo "
";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "bottom")) {
            // line 50
            echo "    ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 51
                echo "        <div class=\"sidebar-content\">
            ";
                // line 52
                echo ($context["sidebar_page_content"] ?? null);
                echo "
        </div>
    ";
            }
        }
        // line 56
        echo "
";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 58
            echo "    <div class=\"sidebar-content syndicate\">
        <h4>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE"), "html", null, true);
            echo "</h4>
        <a class=\"btn\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0
        </a>
        <a class=\"btn\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  171 => 60,  167 => 59,  164 => 58,  162 => 57,  159 => 56,  152 => 52,  149 => 51,  146 => 50,  144 => 49,  141 => 47,  137 => 45,  135 => 44,  131 => 43,  128 => 42,  126 => 41,  122 => 39,  120 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  100 => 31,  96 => 30,  93 => 29,  91 => 28,  87 => 26,  85 => 25,  81 => 24,  78 => 23,  76 => 22,  73 => 21,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  55 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  41 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% set sidebar_page = pages.find('/sidebar') %}
{% set sidebar_page_content =  sidebar_page.content %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'top' or sidebar_page.header.position is empty %}
    {% if sidebar_page_content is not empty %}
        <div class=\"sidebar-content\">
            {{ sidebar_page_content|raw }}
        </div>
    {% endif %}
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
        <a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
    </div>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
        {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
    </div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'bottom' %}
    {% if sidebar_page_content is not empty %}
        <div class=\"sidebar-content\">
            {{ sidebar_page_content|raw }}
        </div>
    {% endif %}
{% endif %}

{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
        <a class=\"btn\" href=\"{{ feed_url }}.atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0
        </a>
        <a class=\"btn\" href=\"{{ feed_url }}.rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS
        </a>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/sidebar.html.twig");
    }
}
