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

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_169bc7fb1b3b83010e5601442eea609f3b08135a472e130f6ad3c7492e621383 extends \Twig\Template
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
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 3
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])) {
                // line 4
                echo "        ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 5
                echo "        ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 6
                    echo "            ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 7
                        echo "                ";
                        $context["git_repo_link_icon"] = "github";
                        // line 8
                        echo "            ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 9
                        echo "                ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 10
                        echo "            ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 11
                        echo "                ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["git_repo_link_icon"] = "git";
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "        ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 19
                    echo "            ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 20
                        echo "                ";
                        $context["git_repo_link_text"] = "View Content Repository";
                        // line 21
                        echo "            ";
                    } else {
                        // line 22
                        echo "                ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 23
                        echo "            ";
                    }
                    // line 24
                    echo "            <a class=\"newwindow external-link\" href=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 26
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 27
                        echo "                ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 28
                        echo "            ";
                    } else {
                        // line 29
                        echo "                ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 30
                        echo "            ";
                    }
                    // line 31
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", [])) {
                        // line 32
                        echo "                ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 33
                        echo "            ";
                    }
                    // line 34
                    echo "            ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 35
                        echo "                ";
                        $context["git_repo_link_text"] = "Edit this Page";
                        // line 36
                        echo "            ";
                    } else {
                        // line 37
                        echo "                ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 38
                        echo "            ";
                    }
                    // line 39
                    echo "            <a class=\"newwindow external-link\" href=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "</a>
        ";
                }
                // line 41
                echo "    ";
            }
        } else {
            // line 43
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", [])))) {
                // line 44
                echo "        ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 45
                echo "        <a class=\"newwindow external-link\" href=\"";
                echo twig_escape_filter($this->env, ($context["admin_panel_appearance_url"] ?? null), "html", null, true);
                echo "\" title=\"Setup Git Sync\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    ";
            } else {
                // line 47
                echo "        ";
                if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])) {
                    // line 48
                    echo "            ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 49
                    echo "            ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 50
                    echo "            ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 51
                        echo "                ";
                        $context["git_repo_link_icon"] = "github";
                        // line 52
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 53
                        echo "            ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 54
                        echo "                ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 55
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 56
                        echo "            ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 57
                        echo "                ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 58
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "src/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 59
                        echo "            ";
                    } else {
                        // line 60
                        echo "                ";
                        $context["git_repo_link_icon"] = "git";
                        // line 61
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 62
                        echo "            ";
                    }
                    // line 63
                    echo "            ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                        // line 64
                        echo "                ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                        // line 65
                        echo "            ";
                    }
                    // line 66
                    echo "            ";
                    if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                        // line 67
                        echo "                ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                            // line 68
                            echo "                    ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 69
                            echo "                ";
                        } else {
                            // line 70
                            echo "                    ";
                            $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                            // line 71
                            echo "                ";
                        }
                        // line 72
                        echo "                <a class=\"newwindow external-link\" href=\"";
                        echo twig_escape_filter($this->env, ($context["git_sync_repo_link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 74
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", [])) {
                            // line 75
                            echo "                    ";
                            $context["git_repo_edit_link_url"] = twig_replace_filter(($context["git_repo_edit_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 76
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 78
                            echo "                ";
                        }
                        // line 79
                        echo "                ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 80
                            echo "                    ";
                            $context["git_repo_link_text"] = "Edit this Page";
                            // line 81
                            echo "                ";
                        } else {
                            // line 82
                            echo "                    ";
                            $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                            // line 83
                            echo "                ";
                        }
                        // line 84
                        echo "                <a class=\"newwindow external-link\" href=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_edit_link_url"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 86
                    echo "        ";
                }
                // line 87
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 87,  298 => 86,  286 => 84,  283 => 83,  280 => 82,  277 => 81,  274 => 80,  271 => 79,  268 => 78,  266 => 76,  264 => 75,  261 => 74,  249 => 72,  246 => 71,  243 => 70,  240 => 69,  237 => 68,  234 => 67,  231 => 66,  228 => 65,  225 => 64,  222 => 63,  219 => 62,  216 => 61,  213 => 60,  210 => 59,  207 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  177 => 48,  174 => 47,  168 => 45,  165 => 44,  162 => 43,  158 => 41,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# new twig template file - hibbittsdesign.org #}
{% if theme_var('git_sync_repo_link') %}
    {% if not page.header.hide_git_sync_repo_link %}
        {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
        {% if theme_var('custom_git_sync_repo_link_icon')is empty %}
            {% if 'github' in git_repo_link_url %}
                {% set git_repo_link_icon = \"github\" %}
            {% elseif 'gitlab' in git_repo_link_url %}
                {% set git_repo_link_icon = \"gitlab\" %}
            {% elseif 'bitbucket' in git_repo_link_url %}
                {% set git_repo_link_icon = \"bitbucket\" %}
            {% else %}
                {% set git_repo_link_icon = \"git\" %}
            {% endif %}
        {% else %}
            {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
        {% endif %}
        {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                {% set git_repo_link_text = 'View Content Repository' %}
            {% else %}
                {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
            <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% else %}
            {% if page.header.git_sync_repo_link %}
                {% set git_repo_link_url = page.header.git_sync_repo_link %}
            {% else %}
                {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
            {% endif %}
            {% if page.children.count %}
                {% set git_repo_link_url = (git_repo_link_url | replace({('/' ~ page.template ~ '.md'): '/'})) %}
            {% endif %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
                {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
            <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% endif %}
    {% endif %}
{% else %}
    {% if config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty %}
        {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
        <a class=\"newwindow external-link\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    {% else %}
        {% if not page.header.hide_git_sync_repo_link %}
            {% set git_sync_repo = config.plugins['git-sync'].repository %}
            {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
            {% if 'github' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"github\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% elseif 'gitlab' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"gitlab\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% elseif 'bitbucket' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"bitbucket\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% else %}
                {% set git_repo_link_icon = \"git\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% endif %}
            {% if theme_var('custom_git_sync_repo_link_icon')is not empty %}
                {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
            {% endif %}
            {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
                {% if theme_var('git_sync_repo_link_text')is empty %}
                    {% set git_repo_link_text = 'View Content Repository' %}
                {% else %}
                    {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
                {% endif %}
                <a class=\"newwindow external-link\" href=\"{{ git_sync_repo_link }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
            {% else %}
                {% if page.children.count %}
                    {% set git_repo_edit_link_url = (git_repo_edit_link_url | replace({
                        ('/' ~ page.template ~ '.md'): '/'
                    })) %}
                {% endif %}
                {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                    {% set git_repo_link_text = 'Edit this Page' %}
                {% else %}
                    {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
                {% endif %}
                <a class=\"newwindow external-link\" href=\"{{ git_repo_edit_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
            {% endif %}
        {% endif %}
    {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/git_sync_repo_link.html.twig");
    }
}
