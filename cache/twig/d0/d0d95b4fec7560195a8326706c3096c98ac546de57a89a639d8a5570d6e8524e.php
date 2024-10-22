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

/* partials/snipcart_detail_item.html.twig */
class __TwigTemplate_802f2f3a165d82c5d16bf494de61e9b200d409c68bfec8a923a6a32916aef461 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/snipcart_detail_item.html.twig"));

        // line 1
        $context["snipcart_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 2
        echo "
<div id=\"snipcart-detail\" class=\"block-group\">

    ";
        // line 5
        echo twig_trim_filter($this->getAttribute(($context["page"] ?? null), "order", []), ".");
        echo "

    <div class=\"snipcart-info block\">
        <div class=\"snipcart-thumb\">
            ";
        // line 9
        if (($context["snipcart_image"] ?? null)) {
            // line 10
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 400, 1 => 400], "method"), "html", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), 1 => "snipcart-thumb-image"], "method");
            echo "
            ";
        }
        // line 12
        echo "            <span class=\"snipcart-price\">
            \$";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "price", []);
        echo "
            </span>
        </div>
        <p>
            <a href=\"#\"
                class=\"button snipcart-add-item\"
                data-item-id=\"";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "product_id", []);
        echo "\"
                data-item-name=\"";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "\"
                data-item-price=\"";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "price", []);
        echo "\"
                data-item-url=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\"
                ";
        // line 23
        ob_start();
        // line 24
        echo "                ";
        if (($context["snipcart_image"] ?? null)) {
            // line 25
            echo "                    data-item-image=\"";
            echo $this->getAttribute($this->getAttribute(($context["snipcart_image"] ?? null), "cropResize", [0 => 50, 1 => 50], "method"), "url", []);
            echo "\"
                ";
        }
        // line 27
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 28
        echo "                
            >
                <i class=\"fa fa-shopping-cart\"></i> Add to Cart
            </a>
        </p>
    </div>
    <div class=\"snipcart-details block\">
        <h1>";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>

        <p>";
        // line 37
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>

    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/snipcart_detail_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  106 => 35,  97 => 28,  94 => 27,  88 => 25,  85 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  40 => 5,  35 => 2,  33 => 1,);
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

<div id=\"snipcart-detail\" class=\"block-group\">

    {{ page.order|trim('.') }}

    <div class=\"snipcart-info block\">
        <div class=\"snipcart-thumb\">
            {% if snipcart_image %}
                {{ snipcart_image.cropResize(400,400).html(page.header.title,'snipcart-thumb-image')|raw }}
            {% endif %}
            <span class=\"snipcart-price\">
            \${{ page.header.price }}
            </span>
        </div>
        <p>
            <a href=\"#\"
                class=\"button snipcart-add-item\"
                data-item-id=\"{{ page.header.product_id }}\"
                data-item-name=\"{{ page.header.title }}\"
                data-item-price=\"{{ page.header.price }}\"
                data-item-url=\"{{ page.url }}\"
                {% spaceless %}
                {% if snipcart_image %}
                    data-item-image=\"{{ snipcart_image.cropResize(50,50).url }}\"
                {% endif %}
                {% endspaceless %}
                
            >
                <i class=\"fa fa-shopping-cart\"></i> Add to Cart
            </a>
        </p>
    </div>
    <div class=\"snipcart-details block\">
        <h1>{{ page.header.title }}</h1>

        <p>{{ page.content|raw }}</p>

    </div>
</div>
", "partials/snipcart_detail_item.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\snipcart\\templates\\partials\\snipcart_detail_item.html.twig");
    }
}
