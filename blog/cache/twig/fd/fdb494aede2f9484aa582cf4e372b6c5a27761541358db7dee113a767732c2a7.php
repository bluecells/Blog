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

/* partials/navigation.html.twig */
class __TwigTemplate_67bd38c07165a692c6b7a1fd507e9be0de9b8b31e2cb8e16884bc0032edc35fc extends \Twig\Template
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
        $context["hide_home_menu_link"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("hidehomemenulink");
        // line 2
        echo "
";
        // line 33
        echo "
<ul ";
        // line 34
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 35
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null), 1 => ($context["hide_home_menu_link"] ?? null), 2 => ($context["home_alias"] ?? null)], "method");
        echo "
    ";
        // line 37
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 39
                echo "            <li>
                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "target", []), "html", null, true);
                echo "\">
                    ";
                // line 41
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 42
                    echo "                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>
                    ";
                }
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 51
            echo "        <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 51)->display($context);
            echo "</li>
    ";
        }
        // line 53
        echo "</ul>
";
    }

    // line 3
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "        ";
                // line 6
                echo "        ";
                if ( !(($context["hide_home_menu_link"] ?? null) && $this->getAttribute($context["p"], "home", []))) {
                    // line 7
                    echo "            ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 8
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0))) {
                        // line 9
                        echo "                <li>
                    <a href=\"";
                        // line 10
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                        echo "\" class=\"";
                        echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                        echo "\">
                        ";
                        // line 11
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            // line 12
                            echo "                            <i class=\"fa fa-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                            echo "\"></i>
                        ";
                        }
                        // line 14
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                        echo "
                    </a>
                    <ul>
                        ";
                        // line 17
                        echo $this->getAttribute($this, "nav_loop", [0 => $context["p"]], "method");
                        echo "
                    </ul>
                </li>
            ";
                    } else {
                        // line 21
                        echo "                <li>
                    <a href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                        echo "\" class=\"";
                        echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                        echo "\">
                        ";
                        // line 23
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            // line 24
                            echo "                            <i class=\"fa fa-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                            echo "\"></i>
                        ";
                        }
                        // line 26
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                        echo "
                    </a>
                </li>
            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 31,  187 => 30,  179 => 26,  173 => 24,  171 => 23,  165 => 22,  162 => 21,  155 => 17,  148 => 14,  142 => 12,  140 => 11,  134 => 10,  131 => 9,  128 => 8,  125 => 7,  122 => 6,  120 => 5,  115 => 4,  101 => 3,  96 => 53,  90 => 51,  87 => 50,  85 => 49,  82 => 48,  71 => 44,  65 => 42,  63 => 41,  57 => 40,  54 => 39,  49 => 38,  46 => 37,  42 => 35,  38 => 34,  35 => 33,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set hide_home_menu_link = theme_var('hidehomemenulink') %}

{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% for p in page.children.visible %}
        {# Supress home menu link - hibbittsdesign.org #}
        {% if not((hide_home_menu_link) and p.home) %}
            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
            {% if theme_var('dropdown.enabled') and p.children.visible.count > 0 %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                    <ul>
                        {{ _self.nav_loop(p) }}
                    </ul>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                </li>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
        {% for mitem in theme_var('menu') %}
            <li>
                <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                    {% if mitem.icon %}
                        <i class=\"fa fa-{{ mitem.icon }}\"></i>
                    {% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
        <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/navigation.html.twig");
    }
}
