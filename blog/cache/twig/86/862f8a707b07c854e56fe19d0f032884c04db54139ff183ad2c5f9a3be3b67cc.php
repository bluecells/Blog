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

/* blog.html.twig */
class __TwigTemplate_6fed311bedd4aff9c0c250e7ea583ba692bcca48227a2dd0a47d048032c12ff0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_breadcrumbs", [], "any", true, true)) {
            // line 6
            $context["show_breadcrumbs"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_breadcrumbs", []);
        } else {
            // line 8
            $context["show_breadcrumbs"] = true;
        }
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 11
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 13
            $context["show_sidebar"] = true;
        }
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_pagination", [], "any", true, true)) {
            // line 16
            $context["show_pagination"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_pagination", []);
        } else {
            // line 18
            $context["show_pagination"] = true;
        }
        // line 32
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
    }

    // line 33
    public function block_hero($context, array $blocks = [])
    {
        // line 34
        echo "        ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 34)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
        // line 35
        echo "    ";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 40
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 42
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 43
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 43)->display($context);
            // line 44
            echo "            ";
        }
        // line 45
        echo "
            ";
        // line 46
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 46, "1634181113")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 94
        echo "        </section>

    </section>
    <script>
        //Bricklayer
        ";
        // line 99
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 100
            echo "            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        ";
        }
        // line 102
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 102,  142 => 100,  140 => 99,  133 => 94,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  120 => 42,  115 => 40,  112 => 39,  109 => 38,  105 => 35,  102 => 34,  99 => 33,  95 => 28,  90 => 27,  87 => 26,  80 => 23,  77 => 22,  74 => 21,  69 => 1,  66 => 32,  63 => 18,  60 => 16,  58 => 15,  55 => 13,  52 => 11,  50 => 10,  47 => 8,  44 => 6,  42 => 5,  40 => 3,  38 => 2,  32 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

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
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_6fed311bedd4aff9c0c250e7ea583ba692bcca48227a2dd0a47d048032c12ff0___1634181113 extends \Twig\Template
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
        // line 46
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 88
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 46
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 46);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_item($context, array $blocks = [])
    {
        // line 48
        echo "
            ";
        // line 49
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 50
            echo "            <div class=\"bricklayer\">
                ";
        } else {
            // line 52
            echo "                <div>
                    ";
        }
        // line 54
        echo "
                    ";
        // line 56
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 57
            echo "                        ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 57)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 58
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                    ";
        // line 61
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 62
            echo "                        ";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "tag", [], "array"))) {
                // line 63
                echo "                            ";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 63)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                // line 64
                echo "                        ";
            }
            // line 65
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                </div>

                ";
        // line 69
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 70
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 71
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 71)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 72
            echo "                    </div>
                ";
        }
        // line 74
        echo "
                <div style=\"text-align:center;\">
                    ";
        // line 76
        echo " ";
        // line 77
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 78
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 78)->display($context);
            echo "</p>
                    ";
        }
        // line 80
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 81
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 81)->display($context);
            echo "</p>
                    ";
        }
        // line 83
        echo "                </div>

                ";
    }

    // line 89
    public function block_sidebar($context, array $blocks = [])
    {
        // line 90
        echo "                        ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 90)->display($context);
        // line 91
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 91,  460 => 90,  457 => 89,  451 => 83,  445 => 81,  442 => 80,  436 => 78,  433 => 77,  431 => 76,  427 => 74,  423 => 72,  421 => 71,  418 => 70,  416 => 69,  411 => 66,  397 => 65,  394 => 64,  391 => 63,  388 => 62,  370 => 61,  367 => 59,  353 => 58,  350 => 57,  332 => 56,  329 => 54,  325 => 52,  321 => 50,  319 => 49,  316 => 48,  313 => 47,  308 => 46,  305 => 88,  299 => 46,  146 => 102,  142 => 100,  140 => 99,  133 => 94,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  120 => 42,  115 => 40,  112 => 39,  109 => 38,  105 => 35,  102 => 34,  99 => 33,  95 => 28,  90 => 27,  87 => 26,  80 => 23,  77 => 22,  74 => 21,  69 => 1,  66 => 32,  63 => 18,  60 => 16,  58 => 15,  55 => 13,  52 => 11,  50 => 10,  47 => 8,  44 => 6,  42 => 5,  40 => 3,  38 => 2,  32 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

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
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/blog.html.twig");
    }
}
