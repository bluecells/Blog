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

/* partials/presentation_iframe.html.twig */
class __TwigTemplate_e970903c83c4552c07f5a50131fe52523b9e362dd671172a1ab9d4ea5b788de2 extends \Twig\Template
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
        echo "<h4>
  <a class=\"newwindow external-link\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["presentation_base_url"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "title", []), "html", null, true);
        echo "</a>
</h4>

<div class=\"video-responsive video-responsive-4-3\">
  <iframe src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["presentation_base_url"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/presentation_iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h4>
  <a class=\"newwindow external-link\" href=\"{{ presentation_base_url }}/{{ src }}\">{{ page.find('/' ~ src ).title }}</a>
</h4>

<div class=\"video-responsive video-responsive-4-3\">
  <iframe src=\"{{ presentation_base_url }}/{{ src }}\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" class=\"{{ class }}\"></iframe>
</div>
", "partials/presentation_iframe.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/presentation_iframe.html.twig");
    }
}
