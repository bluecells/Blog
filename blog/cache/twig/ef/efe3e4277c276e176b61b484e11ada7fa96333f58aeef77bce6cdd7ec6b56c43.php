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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_1f68cfd6678996bf6456aedfc2d7dcc2ac75f2c10e7c977330774ec3d0ad6a73 extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_from_post_list", []) != true)) {
            // line 2
            echo "  <div class=\"card\">
      ";
            // line 3
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
            // line 4
            echo "      ";
            if ((($context["image"] ?? null) && ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "header_image", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])))) {
                // line 5
                echo "      <div class=\"card-image\">

        ";
                // line 8
                echo "          ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", [])) {
                    // line 9
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", []);
                    // line 10
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_creditlink", []);
                    // line 11
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_alt_text", []);
                    // line 12
                    echo "          ";
                } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", [])) {
                    // line 13
                    echo "            ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", []);
                    // line 14
                    echo "            ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_creditlink", []);
                    // line 15
                    echo "            ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_alt_text", []);
                    // line 16
                    echo "          ";
                }
                // line 17
                echo "          ";
                if (($context["image_credit"] ?? null)) {
                    // line 18
                    echo "            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              ";
                    // line 19
                    if (($context["image_creditlink"] ?? null)) {
                        // line 20
                        echo "                Image: <a class=\"newwindow external-link\" href=\"";
                        echo twig_escape_filter($this->env, ($context["image_creditlink"] ?? null), "html", null, true);
                        echo "\">
                ";
                        // line 21
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</a></span>
                <a href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "html", []);
                        echo "</a>
              ";
                    } else {
                        // line 24
                        echo "                Image: ";
                        echo twig_escape_filter($this->env, ($context["image_credit"] ?? null), "html", null, true);
                        echo "</span>
                <a href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "html", []);
                        echo "</a>
              ";
                    }
                    // line 27
                    echo "            </div>
          ";
                } else {
                    // line 29
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 1400, 1 => 400], "method"), "html", []);
                    echo "</a>
          ";
                }
                // line 31
                echo "
      </div>
      ";
            }
            // line 34
            echo "      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              ";
            // line 36
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 36)->display($context);
            // line 37
            echo "      </div>
          <div class=\"card-title\">
          ";
            // line 39
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 39)->display(twig_array_merge($context, ["title_level" => "h5"]));
            // line 40
            echo "          </div>
      </div>
      <div class=\"card-body\">
          ";
            // line 43
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 44
                echo "              ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                echo "
              ";
                // line 45
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true)) {
                    // line 46
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                    echo "\" class=\"btn btn-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.CONTINUE_READING"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 48
                echo "          ";
            } else {
                // line 49
                echo "              ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
          ";
            }
            // line 51
            echo "      </div>
      <div class=\"card-footer\">
          ";
            // line 53
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 53)->display($context);
            // line 54
            echo "      </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  173 => 53,  169 => 51,  163 => 49,  160 => 48,  150 => 46,  148 => 45,  143 => 44,  141 => 43,  136 => 40,  134 => 39,  130 => 37,  128 => 36,  124 => 34,  119 => 31,  111 => 29,  107 => 27,  100 => 25,  95 => 24,  88 => 22,  84 => 21,  79 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hide_from_post_list != true %}
  <div class=\"card\">
      {% set image = page.media.images|first %}
      {% if image and ((page.header.header_image is not defined) or (page.header.header_image))  %}
      <div class=\"card-image\">

        {# support image credit tag with optional image meta file - hibbittsdesign.org #}
          {% if page.header.header_image_credit %}
            {% set image_credit = page.header.header_image_credit %}
            {% set image_creditlink = page.header.header_image_creditlink %}
            {% set image_alt_text = page.header.header_image_alt_text %}
          {% elseif header_image_media.meta.header_image_credit  %}
            {% set image_credit = header_image_media.meta.header_image_credit %}
            {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
            {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
          {% endif %}
          {% if image_credit %}
            <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
              {% if image_creditlink %}
                Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
                {{ image_credit }}</a></span>
                <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html|raw }}</a>
              {% else %}
                Image: {{ image_credit }}</span>
                <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html|raw }}</a>
              {% endif %}
            </div>
          {% else %}
            <a href=\"{{ page.url }}\">{{ image.cropZoom(1400,400).html|raw }}</a>
          {% endif %}

      </div>
      {% endif %}
      <div class=\"card-header\">
          <div class=\"card-subtitle text-gray\">
              {% include 'partials/blog/date.html.twig' %}
      </div>
          <div class=\"card-title\">
          {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
          </div>
      </div>
      <div class=\"card-body\">
          {% if page.summary != page.content %}
              {{ page.summary|raw }}
              {% if page.header.continue_link is same as(true) %}
                <a href=\"{{ page.url }}\" title=\"{{ page.title }}\" class=\"btn btn-primary\">{{ 'THEME_QUARK.BLOG.ITEM.CONTINUE_READING'|t }}</a>
              {% endif %}
          {% else %}
              {{ page.content|raw }}
          {% endif %}
      </div>
      <div class=\"card-footer\">
          {% include 'partials/blog/taxonomy.html.twig' %}
      </div>
  </div>
{% endif %}
", "partials/blog-list-item.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/themes/quark-open-publishing/templates/partials/blog-list-item.html.twig");
    }
}
