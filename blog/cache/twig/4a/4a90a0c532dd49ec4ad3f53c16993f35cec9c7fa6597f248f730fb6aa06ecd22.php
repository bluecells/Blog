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

/* partials/youtube.html.twig */
class __TwigTemplate_df7d8cd500a757c10f71ea576c73fc73eb272551bc5d7f25cdeec8567374dfbd extends \Twig\Template
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
        echo "<div class=\"grav-youtube\">
    <iframe src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->embedUrl(($context["video_id"] ?? null), ($context["player_parameters"] ?? null), ($context["privacy_enhanced_mode"] ?? null)), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grav-youtube\">
    <iframe src=\"{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}\" frameborder=\"0\" allowfullscreen></iframe>
</div>
", "partials/youtube.html.twig", "/home/boje2508/public_html/yoursafety.training/blog/user/plugins/youtube/templates/partials/youtube.html.twig");
    }
}
