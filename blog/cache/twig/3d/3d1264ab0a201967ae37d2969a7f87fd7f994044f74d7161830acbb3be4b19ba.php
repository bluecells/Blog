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
class __TwigTemplate_1c6c5e4208b9dbaba3af381b4a4d621e343c900616fceadd755c620c1b7a4743 extends \Twig\Template
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
        echo "<div class=\"summer-blog-menu\">      
    <div class=\"summer-mobile-menu show-for-small\">
        <a href=\"#\"><i class=\"fa fa-bars\"></i></a>
    </div>
    <ul class=\"summer-menu\">
        <li class=\"summer-mobile-close-btn show-for-small text-right\">
            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
        </li>
        <li><a href=\"";
        // line 9
        echo ($context["base_url_absolute"] ?? null);
        echo "\">Home</a></li>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 11
            echo "            ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                // line 12
                echo "                ";
                $context["domain"] = "";
                // line 13
                echo "                    ";
            } else {
                // line 14
                echo "                    ";
                $context["domain"] = ($context["base_url_absolute"] ?? null);
                // line 15
                echo "                    ";
            }
            // line 16
            echo "                    <li><a href=\"";
            echo ($context["domain"] ?? null);
            echo $this->getAttribute($context["link"], "url", []);
            echo "\" ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", []);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <li><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "/blog.rss\" title=\"Atom/RSS feed\"><i class=\"icon-rss\"></i> Feed</a></li>
    </ul>
</div>";
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
        return array (  79 => 18,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  44 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"summer-blog-menu\">      
    <div class=\"summer-mobile-menu show-for-small\">
        <a href=\"#\"><i class=\"fa fa-bars\"></i></a>
    </div>
    <ul class=\"summer-menu\">
        <li class=\"summer-mobile-close-btn show-for-small text-right\">
            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
        </li>
        <li><a href=\"{{ base_url_absolute }}\">Home</a></li>
        {% for link in site.links %}
            {% if link.url | contains('http') %}
                {% set domain = '' %}
                    {% else %}
                    {% set domain = base_url_absolute %}
                    {% endif %}
                    <li><a href=\"{{ domain }}{{ link.url }}\" {% if link.url | contains('http') %}target=\"_blank\"{% endif %}>{{ link.title }}</a></li>
        {% endfor %}
        <li><a href=\"{{ base_url }}/blog.rss\" title=\"Atom/RSS feed\"><i class=\"icon-rss\"></i> Feed</a></li>
    </ul>
</div>", "partials/navigation.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/notepad/templates/partials/navigation.html.twig");
    }
}
