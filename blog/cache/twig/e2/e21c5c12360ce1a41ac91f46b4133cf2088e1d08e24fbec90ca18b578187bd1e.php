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

/* partials/blog/title.html.twig */
class __TwigTemplate_33a0672b24a0a49142b71feff15a642b1e3eb311f2eec70f057e89d500c31d08 extends \Twig\Template
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
        $context["title_level"] = ((($context["title_level"] ?? null)) ? (($context["title_level"] ?? null)) : ("h2"));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 3
            echo "    <";
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo " class=\"p-name mt-1\">
    ";
            // line 4
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    ";
            }
            // line 7
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\" class=\"u-url\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
        </";
            // line 8
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo ">
    ";
        } else {
            // line 10
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_icon", [])) {
                // line 11
                echo "            ";
                $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_icon", []);
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("post_icon")) {
                    // line 14
                    echo "                ";
                    $context["titleicon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("post_icon");
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", [])) {
                    // line 17
                    echo "                ";
                    $context["titleicon"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", []);
                    // line 18
                    echo "            ";
                }
                // line 19
                echo "        ";
            }
            // line 20
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method")) {
                // line 21
                echo "            ";
                if (($context["titleicon"] ?? null)) {
                    // line 22
                    echo "                <";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" class=\"u-url\">
                <i class=\"fa fa-";
                    // line 23
                    echo twig_escape_filter($this->env, ($context["titleicon"] ?? null), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "
        </a>
        </";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 27
                    echo "            <";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" class=\"u-url\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "</a></";
                    echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
                    echo ">
        ";
                }
                // line 29
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/blog/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 29,  114 => 27,  109 => 25,  102 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  54 => 8,  47 => 7,  41 => 5,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set title_level = title_level ?: 'h2' %}
{% if page.header.link %}
    <{{ title_level }} class=\"p-name mt-1\">
    {% if page.header.continue_link is same as(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    {% endif %}
    <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
        </{{ title_level }}>
    {% else %}
        {% if page.header.post_icon %}
            {% set titleicon = page.header.post_icon %}
        {% else %}
            {% if theme_var('post_icon') %}
                {% set titleicon = theme_var('post_icon') %}
            {% endif %}
            {% if page.parent.header.post_icon %}
                {% set titleicon = page.parent.header.post_icon %}
            {% endif %}
        {% endif %}
        {% if not (grav.uri.param('hidepagetitle')) %}
            {% if titleicon %}
                <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">
                <i class=\"fa fa-{{ titleicon }}\" aria-hidden=\"true\"></i> {{ page.title }}
        </a>
        </{{ title_level }}>
        {% else %}
            <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></{{ title_level }}>
        {% endif %}
    {% endif %}
{% endif %}
", "partials/blog/title.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/blog/title.html.twig");
    }
}
