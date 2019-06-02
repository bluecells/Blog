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

/* partials/layout.html.twig */
class __TwigTemplate_545a628352c3d42a92dc52eb5d3ce80de218f8e7bbe1d4102862387a01134a9c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
";
        // line 5
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 6
            echo "    ";
            $context["item_col"] = "col-12";
            // line 7
            echo "    ";
            $context["sidebar_col"] = "col-12";
        }
        // line 9
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 11
        echo twig_escape_filter($this->env, ($context["item_col"] ?? null), "html", null, true);
        echo " extra-spacing\">
        ";
        // line 12
        $this->displayBlock('item', $context, $blocks);
        // line 13
        echo "    </div>
    ";
        // line 15
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 16
            echo "        ";
            if (($context["show_sidebar"] ?? null)) {
                // line 17
                echo "            <div id=\"sidebar\" class=\"column ";
                echo twig_escape_filter($this->env, ($context["sidebar_col"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 18
                $this->displayBlock('sidebar', $context, $blocks);
                // line 20
                echo "            </div>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "</div>
";
    }

    // line 12
    public function block_item($context, array $blocks = [])
    {
    }

    // line 18
    public function block_sidebar($context, array $blocks = [])
    {
        // line 19
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  91 => 18,  86 => 12,  81 => 23,  78 => 22,  74 => 20,  72 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 13,  56 => 12,  52 => 11,  48 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

{# check content display flag - hibbittsdesign.org #}
{% if grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled') %}
    {% set item_col = 'col-12' %}
    {% set sidebar_col = 'col-12' %}
{% endif %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {# check content display flag - hibbittsdesign.org #}
    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
        {% if show_sidebar %}
            <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
                {% block sidebar %}
                {% endblock %}
            </div>
        {% endif %}
    {% endif %}
</div>
", "partials/layout.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/layout.html.twig");
    }
}
