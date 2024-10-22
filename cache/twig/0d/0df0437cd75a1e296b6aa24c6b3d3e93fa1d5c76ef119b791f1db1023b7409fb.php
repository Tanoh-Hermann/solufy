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

/* modular/text.html.twig */
class __TwigTemplate_dcd8b4fdbd02210d41a1b8664988a91e597a807aea8229158547ef8211c0a46b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/text.html.twig"));

        // line 1
        echo "<div class=\"modular-row callout\">
    <div class=\"container\">
        ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "        ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", [0 => 400, 1 => 400], "method"), "html", [0 => "", 1 => "", 2 => ("d-block rounded float-md-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_align", []))], "method");
            echo "
        ";
        }
        // line 7
        echo "
        ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row callout\">
    <div class=\"container\">
        {% set image = page.media.images|first %}
        {% if image %}
            {{ image.cropResize(400, 400).html('', '', 'd-block rounded float-md-' ~ page.header.image_align)|raw }}
        {% endif %}

        {{ page.content|raw }}
    </div>
</div>
", "modular/text.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4\\templates\\modular\\text.html.twig");
    }
}
