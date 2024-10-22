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

/* partials/snipcart_product_item.html.twig */
class __TwigTemplate_c9efbecce3888b4e73e6e7f78dc1f7fdf5c8bc33cb3bc5a480ff0d69eea4e3bc extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/snipcart_product_item.html.twig"));

        // line 1
        $context["snipcart_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 2
        echo "
<div class=\"snipcart-item block\" >

    ";
        // line 5
        echo twig_trim_filter($this->getAttribute(($context["page"] ?? null), "order", []), ".");
        echo "

    <h3><a href=\"";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</a></h3>
    <div class=\"snipcart-thumb\">
        ";
        // line 9
        if (($context["snipcart_image"] ?? null)) {
            // line 10
            echo "            <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 200, 1 => 200], "method"), "html", [0 => "page.header.title", 1 => "snipcart-thumb-image"], "method");
            echo "</a>
        ";
        }
        // line 12
        echo "        <span class=\"snipcart-price\">
        \$";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "price", []);
        echo "
        </span>
    </div>
    <div class=\"snipcart-details\">
    <p>
        <a href=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\"
            class=\"button button-small\">
            <i class=\"fa fa-info-circle\"></i> Details
        </a>
        <a href=\"#\"
            class=\"button button-small snipcart-add-item\"
            data-item-id=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "product_id", []);
        echo "\"
            data-item-name=\"";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "\"
            data-item-price=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "price", []);
        echo "\"
            data-item-url=\"";
        // line 27
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\"
                ";
        // line 28
        ob_start();
        // line 29
        echo "                    ";
        if (($context["snipcart_image"] ?? null)) {
            // line 30
            echo "                        data-item-image=\"";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 50, 1 => 50], "method"), "url", []);
            echo "\"
                    ";
        }
        // line 32
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo "                
        >
            <i class=\"fa fa-shopping-cart\"></i> Add
        </a>
    </p>
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/snipcart_product_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  109 => 32,  103 => 30,  100 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  73 => 18,  65 => 13,  62 => 12,  54 => 10,  52 => 9,  45 => 7,  40 => 5,  35 => 2,  33 => 1,);
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

<div class=\"snipcart-item block\" >

    {{ page.order|trim('.') }}

    <h3><a href=\"{{ page.url }}\">{{ page.header.title }}</a></h3>
    <div class=\"snipcart-thumb\">
        {% if snipcart_image %}
            <a href=\"{{ page.url }}\">{{ snipcart_image.cropResize(200,200).html('page.header.title','snipcart-thumb-image')|raw }}</a>
        {% endif %}
        <span class=\"snipcart-price\">
        \${{ page.header.price }}
        </span>
    </div>
    <div class=\"snipcart-details\">
    <p>
        <a href=\"{{ page.url }}\"
            class=\"button button-small\">
            <i class=\"fa fa-info-circle\"></i> Details
        </a>
        <a href=\"#\"
            class=\"button button-small snipcart-add-item\"
            data-item-id=\"{{ page.header.product_id }}\"
            data-item-name=\"{{ page.header.title }}\"
            data-item-price=\"{{ page.header.price }}\"
            data-item-url=\"{{ page.url }}\"
                {% spaceless %}
                    {% if snipcart_image %}
                        data-item-image=\"{{ snipcart_image.cropResize(50,50).url|raw }}\"
                    {% endif %}
                {% endspaceless %}
                
        >
            <i class=\"fa fa-shopping-cart\"></i> Add
        </a>
    </p>
    </div>
</div>
", "partials/snipcart_product_item.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\snipcart\\templates\\partials\\snipcart_product_item.html.twig");
    }
}
