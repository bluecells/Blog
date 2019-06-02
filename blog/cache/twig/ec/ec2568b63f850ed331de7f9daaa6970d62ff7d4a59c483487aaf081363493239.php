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

/* item.html.twig */
class __TwigTemplate_55fc085e29e6fcd7583f6b107beb80f368d942ed3b069302387d2ef703e7ddc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"), "/blog")], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
            <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 14)->display($context);
            // line 15
            echo "            ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 17)->display(twig_array_merge($context, ["id" => "blog-hero"]));
            // line 18
            echo "    ";
        }
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        // line 22
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 23
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 25
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 26
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 26)->display($context);
            // line 27
            echo "            ";
        }
        // line 28
        echo "
            ";
        // line 29
        $this->loadTemplate("item.html.twig", "item.html.twig", 29, "634181194")->display($context);
        // line 47
        echo "
        </section>
    </section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  94 => 23,  91 => 22,  88 => 21,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog]) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog]) %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}
    {% endif %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' %}
                {% block item %}
                    {% include 'partials/blog-item.html.twig' %}
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                {% endblock %}
                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
            {% endembed %}

        </section>
    </section>
{% endblock %}
", "item.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_55fc085e29e6fcd7583f6b107beb80f368d942ed3b069302387d2ef703e7ddc9___634181194 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 41
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 29
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_item($context, array $blocks = [])
    {
        // line 31
        echo "                    ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 31)->display($context);
        // line 32
        echo "                    ";
        echo " ";
        // line 33
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 34
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "item.html.twig", 34)->display($context);
            echo "</p>
                    ";
        }
        // line 36
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 37
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "item.html.twig", 37)->display($context);
            echo "</p>
                    ";
        }
        // line 39
        echo "                ";
    }

    // line 42
    public function block_sidebar($context, array $blocks = [])
    {
        // line 43
        echo "                        ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 43)->display($context);
        // line 44
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 44,  262 => 43,  259 => 42,  255 => 39,  249 => 37,  246 => 36,  240 => 34,  237 => 33,  234 => 32,  231 => 31,  228 => 30,  223 => 29,  220 => 41,  214 => 29,  112 => 47,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  94 => 23,  91 => 22,  88 => 21,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = page.find(theme_var('blog-page')|default('/blog')) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog]) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog]) %}
{% set show_pagination = header_var('show_pagination', [page, blog]) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}
    {% endif %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' %}
                {% block item %}
                    {% include 'partials/blog-item.html.twig' %}
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                {% endblock %}
                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
            {% endembed %}

        </section>
    </section>
{% endblock %}
", "item.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/item.html.twig");
    }
}
