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

/* partials/snipcart_category_item.html.twig */
class __TwigTemplate_1b4ab093a7f01a75b8859629a176a1c45e4e9079b469deaee5e1c564adbe62ff extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/snipcart_category_item.html.twig"));

        // line 1
        $context["snipcart_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 2
        echo "
<div class=\"snipcart-item block\">

    <h3><a href=\"";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "category", []);
        echo "</a></h3>
    <div class=\"snipcart-thumb\">
        ";
        // line 7
        if (($context["snipcart_image"] ?? null)) {
            // line 8
            echo "            <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 300, 1 => 300], "method"), "html", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "category", []), 1 => "snipcart-thumb-image"], "method");
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>


</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/snipcart_category_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 8,  47 => 7,  40 => 5,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set snipcart_image = page.media.images|first %}

<div class=\"snipcart-item block\">

    <h3><a href=\"{{ page.url }}\">{{ page.header.category }}</a></h3>
    <div class=\"snipcart-thumb\">
        {% if snipcart_image %}
            <a href=\"{{ page.url }}\">{{ snipcart_image.cropResize(300,300).html(page.header.category,'snipcart-thumb-image')|raw }}</a>
        {% endif %}
    </div>


</div>
", "partials/snipcart_category_item.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\snipcart\\templates\\partials\\snipcart_category_item.html.twig");
    }
}
