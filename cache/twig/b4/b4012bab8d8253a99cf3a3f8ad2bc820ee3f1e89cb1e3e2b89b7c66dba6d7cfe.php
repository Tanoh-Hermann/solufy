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

/* partials/edit-button.html.twig */
class __TwigTemplate_9a50f46cbad94548b2041307d7b13525592aafe1ae5e712dfab03b5e10ed70a7 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/edit-button.html.twig"));

        // line 1
        $context["_showIcon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute(($context["config"] ?? null), "showIcon", []), true);
        // line 2
        $context["_showLabel"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute(($context["config"] ?? null), "showLabel", []), true);
        // line 3
        echo "
";
        // line 4
        if (((($context["_showLabel"] ?? null) == false) && (($context["_showIcon"] ?? null) == false))) {
            // line 5
            echo "    ";
            $context["_showLabel"] = true;
        }
        // line 7
        echo "
<div id='frontend-edit-button' class='";
        // line 8
        echo ($context["vertical"] ?? null);
        echo " ";
        echo ($context["horizontal"] ?? null);
        echo "'>
    <div class='page-item' data-nav-id='/grav-cms";
        // line 9
        echo ($context["pageUrl"] ?? null);
        echo "'>
        <a class='page-edit frontend-edit-button' target='_blank' href='";
        // line 10
        echo ($context["editUrl"] ?? null);
        echo "'>
            ";
        // line 11
        if ((($context["_showIcon"] ?? null) == true)) {
            // line 12
            echo "                <i class='icon-feb-editor'></i>
            ";
        }
        // line 14
        echo "            ";
        if ((($context["_showLabel"] ?? null) == true)) {
            // line 15
            echo "                <span class=\"label\">
                    ";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_FRONTEND_EDIT_BUTTON.BUTTON_TEXT");
            echo "
                </span>
            ";
        }
        // line 19
        echo "        </a>
    </div>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/edit-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  75 => 16,  72 => 15,  69 => 14,  65 => 12,  63 => 11,  59 => 10,  55 => 9,  49 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set _showIcon = config.showIcon|defined(true) %}
{% set _showLabel = config.showLabel|defined(true) %}

{% if _showLabel == false and _showIcon == false %}
    {% set _showLabel = true %}
{% endif %}

<div id='frontend-edit-button' class='{{ vertical }} {{ horizontal }}'>
    <div class='page-item' data-nav-id='/grav-cms{{ pageUrl }}'>
        <a class='page-edit frontend-edit-button' target='_blank' href='{{ editUrl }}'>
            {% if _showIcon == true %}
                <i class='icon-feb-editor'></i>
            {% endif %}
            {% if _showLabel == true %}
                <span class=\"label\">
                    {{ 'PLUGIN_FRONTEND_EDIT_BUTTON.BUTTON_TEXT'|t }}
                </span>
            {% endif %}
        </a>
    </div>
</div>", "partials/edit-button.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\frontend-edit-button\\templates\\partials\\edit-button.html.twig");
    }
}
