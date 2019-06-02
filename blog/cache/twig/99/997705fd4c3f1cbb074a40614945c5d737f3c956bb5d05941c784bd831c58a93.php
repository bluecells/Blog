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

/* plugins/jscomments/disqus.html.twig */
class __TwigTemplate_0c9404aae9d5682cbbba9a5f6fc1304ebe2b65bad6caafa2951e528d11d372c5 extends \Twig\Template
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
        // line 10
        echo "<div id=\"jscomments\">
  <div id=\"disqus_thread\"></div>

  ";
        // line 13
        if (( !($context["language"] ?? null) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "enabled", []))) {
            // line 14
            echo "    ";
            $context["language"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []);
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  <script type=\"text/javascript\">
    var disqus_config = function () {
        this.language        = '";
        // line 19
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (((isset($context["language"]) || array_key_exists("language", $context))) ? (_twig_default_filter(($context["language"] ?? null), "en")) : ("en")), "js"), "html", null, true);
        echo "';
        this.shortname       = '";
        // line 20
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["shortname"] ?? null), "js"), "html", null, true);
        echo "';
        this.page.title      = '";
        // line 21
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), $this->getAttribute(($context["page"] ?? null), "title", []))) : ($this->getAttribute(($context["page"] ?? null), "title", []))), "js"), "html", null, true);
        echo "';
        this.page.url        = '";
        // line 22
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (((isset($context["url"]) || array_key_exists("url", $context))) ? (_twig_default_filter(($context["url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"))) : ($this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"))), "js"), "html", null, true);
        echo "';
        this.page.identifier = '";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (((isset($context["id"]) || array_key_exists("id", $context))) ? (_twig_default_filter(($context["id"] ?? null), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute(($context["page"] ?? null), "rawRoute", [], "method")))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute(($context["page"] ?? null), "rawRoute", [], "method")))), "js"), "html", null, true);
        echo "';
    };

    (function() {
      var dsq = document.createElement('script');

      dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["shortname"] ?? null), "js"), "html", null, true);
        echo ".disqus.com/embed.js';
      dsq.setAttribute('data-timestamp', +new Date());

      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.NOSCRIPT");
        echo "</noscript>
  ";
        // line 37
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.COPYRIGHT");
        echo "

  ";
        // line 44
        echo "  ";
        if (($context["show_count"] ?? null)) {
            // line 45
            echo "    <script type=\"text/javascript\">
      (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//";
            // line 49
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["shortname"] ?? null), "js"), "html", null, true);
            echo ".disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
      }());
    </script>
  ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "plugins/jscomments/disqus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 54,  101 => 49,  95 => 45,  92 => 44,  87 => 37,  83 => 36,  74 => 30,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  43 => 16,  40 => 15,  37 => 14,  35 => 13,  30 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
   Disqus, pronounced \"discuss\", is a service and tool for web comments
   and discussions. Disqus makes commenting easier and more interactive,
   while  connecting websites and commenters across a thriving discussion
   community.

   @see https://help.disqus.com/customer/portal/articles/472097-universal-embed-code
   @see https://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables
 #}
<div id=\"jscomments\">
  <div id=\"disqus_thread\"></div>

  {% if not language and grav.language.enabled %}
    {% set language = grav.language.getLanguage %}
  {% endif %}

  <script type=\"text/javascript\">
    var disqus_config = function () {
        this.language        = '{{ language|default('en')|e('js') }}';
        this.shortname       = '{{ shortname|e('js') }}';
        this.page.title      = '{{ title|default(page.title)|e('js') }}';
        this.page.url        = '{{ url|default(page.url(true, true))|e('js') }}';
        this.page.identifier = '{{ id|default(page.rawRoute()|md5)|e('js') }}';
    };

    (function() {
      var dsq = document.createElement('script');

      dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//{{ shortname|e('js') }}.disqus.com/embed.js';
      dsq.setAttribute('data-timestamp', +new Date());

      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>{{ 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.NOSCRIPT'|t|raw }}</noscript>
  {{ 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.COPYRIGHT'|t|raw }}

  {#
     Adding Disqus comment count links to your home page.

     @see https://help.disqus.com/customer/en/portal/articles/565624-adding-comment-count-links-to-your-home-page
   #}
  {% if show_count %}
    <script type=\"text/javascript\">
      (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//{{ shortname|e('js') }}.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
      }());
    </script>
  {% endif %}
</div>
", "plugins/jscomments/disqus.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/plugins/jscomments/templates/plugins/jscomments/disqus.html.twig");
    }
}
