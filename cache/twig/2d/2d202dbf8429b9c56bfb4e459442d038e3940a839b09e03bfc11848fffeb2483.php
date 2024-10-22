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

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_38e4bea579716303eae8bb35d16eb495b7ecba462619764630edbe657646bed4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/markdown/markdown.html.twig"));

        // line 4
        $context["theme"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_theme", [])) : ("paper.css"));
        // line 5
        $context["font"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "admin", [], "any", false, true), "whitelabel", [], "any", false, true), "codemirror_md_font", [])) : ("sans"));
        // line 6
        $context["codemirrorOptions"] = twig_array_merge(["mode" => "gfm", "theme" => ($context["theme"] ?? null), "font" => ($context["font"] ?? null), "ignore" => []], (($this->getAttribute(($context["field"] ?? null), "codemirror", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", []), [])) : ([])));
        // line 9
        if ($this->getAttribute(($context["field"] ?? null), "showPreview", [])) {
            // line 10
            $context["codemirrorOptions"] = twig_array_merge(($context["codemirrorOptions"] ?? null), ["ignore" => []]);
        }
        // line 3
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/markdown/markdown.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 10,  43 => 9,  41 => 6,  39 => 5,  37 => 4,  28 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Deprecated field. Alias to editor/editor.html.twig #}

{% extends \"forms/fields/editor/editor.html.twig\" %}
{% set theme = config.plugins.admin.whitelabel.codemirror_theme ?? 'paper.css' %}
{% set font = config.plugins.admin.whitelabel.codemirror_md_font ?? 'sans' %}
{% set codemirrorOptions = {'mode': 'gfm', 'theme': theme, 'font': font, 'ignore': []}|merge(field.codemirror|default({})) %}

{# backward compatibility #}
{% if field.showPreview %}
    {% set codemirrorOptions = codemirrorOptions|merge({'ignore': []}) %}
{% endif %}
{# end backward compatibility #}
", "forms/fields/markdown/markdown.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\markdown\\markdown.html.twig");
    }
}
