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

/* forms/fields/password/password.html.twig */
class __TwigTemplate_a62216d8661aa58ad13500e8842238f4646a7021452cbf1e6a91b87220312939 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/password/password.html.twig"));

        // line 1
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 2
        echo "
<div class=\"form-field\">
    <label class=\"control-label col-sm-2\">
        ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 6
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            echo "</span>
        ";
        } else {
            // line 8
            echo "            ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            echo "
            ";
            // line 9
            echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
            echo "
        ";
        }
        // line 11
        echo "    </label>
    <div class=\"col-sm-10\">
        <input  type=\"password\"
                class=\"form-control\"
                name=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                value=\"";
        // line 16
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\"
                ";
        // line 17
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->getAttribute(($context["field"] ?? null), "placeholder", []);
            echo "\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 19
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 20
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 21
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []);
            echo "\"";
        }
        // line 23
        echo "        />
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/password/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  102 => 22,  97 => 21,  90 => 20,  85 => 19,  80 => 18,  74 => 17,  70 => 16,  66 => 15,  60 => 11,  55 => 9,  50 => 8,  42 => 6,  40 => 5,  35 => 2,  33 => 1,);
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
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        {% endif %}
    </label>
    <div class=\"col-sm-10\">
        <input  type=\"password\"
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
", "forms/fields/password/password.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4\\templates\\forms\\fields\\password\\password.html.twig");
    }
}
