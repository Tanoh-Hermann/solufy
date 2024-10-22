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

/* forms/fields/text/text.html.twig */
class __TwigTemplate_0197e0453ff23f9f418c540a4092d120942b42ca2890212a28836919fa3a9d27 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/text/text.html.twig"));

        // line 1
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 2
        echo "
<div class=\"form-field\">

        <label class=\"control-label col-sm-2\">
            ";
        // line 6
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 7
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            echo "</span>
            ";
        } else {
            // line 9
            echo "            ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            echo "
            ";
        }
        // line 11
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
        <div class=\"col-sm-10\">
            <input  type=\"text\"
                    class=\"form-control\"
                    name=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                    value=\"";
        // line 17
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\"
                    ";
        // line 18
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->getAttribute(($context["field"] ?? null), "placeholder", []);
            echo "\"";
        }
        // line 19
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 20
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 21
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 22
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 23
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []);
            echo "\"";
        }
        // line 24
        echo "            />
        </div>

</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/text/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  102 => 23,  97 => 22,  90 => 21,  85 => 20,  80 => 19,  74 => 18,  70 => 17,  66 => 16,  57 => 11,  51 => 9,  43 => 7,  41 => 6,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set value = (value is null ? field.default : value) %}

<div class=\"form-field\">

        <label class=\"control-label col-sm-2\">
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
            {% else %}
            {{ field.label|default(field.name|capitalize)|t }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
        <div class=\"col-sm-10\">
            <input  type=\"text\"
                    class=\"form-control\"
                    name=\"{{ (scope ~ field.name)|fieldName }}\"
                    value=\"{{ value|join(', ') }}\"
                    {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
            />
        </div>

</div>
", "forms/fields/text/text.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4\\templates\\forms\\fields\\text\\text.html.twig");
    }
}
