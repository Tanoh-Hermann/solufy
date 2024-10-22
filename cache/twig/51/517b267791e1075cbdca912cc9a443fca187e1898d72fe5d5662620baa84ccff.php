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

/* latestcustompagetype.html.twig */
class __TwigTemplate_167f868691e6f287268fd4f46e398147a4c65b84cf7757d0f7c0b1dd7f6bbe48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "latestcustompagetype.html.twig"));

        // line 2
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 3
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 4
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 9
            $context["p"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []))], "method"), "children", []), "order", [0 => "{page.parent.header.content.order.by}", 1 => "desc"], "method"), "visible", []));
            // line 10
            if (twig_test_empty(($context["p"] ?? null))) {
                // line 11
                $context["p"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []))], "method"), "children", []), "order", [0 => "{page.parent.header.content.order.by}", 1 => "desc"], "method"), "visible", []));
            }
        } elseif ((($this->getAttribute($this->getAttribute(        // line 13
($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 14
            $context["p"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []))], "method"), "children", []), "order", [0 => "{page.parent.header.content.order.by}", 1 => "desc"], "method"), "visible", []));
            // line 15
            if (twig_test_empty(($context["p"] ?? null))) {
                // line 16
                $context["p"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []))], "method"), "children", []), "order", [0 => "{page.parent.header.content.order.by}", 1 => "desc"], "method"), "visible", []));
            }
        } else {
            // line 19
            $context["p"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []))], "method"), "children", []), "order", [0 => "{page.parent.header.content.order.by}", 1 => "desc"], "method"), "visible", []));
        }
        // line 21
        $context["templatename"] = ($this->getAttribute(($context["p"] ?? null), "template", []) . ".html.twig");
        // line 22
        $this->loadTemplate(($context["templatename"] ?? null), "latestcustompagetype.html.twig", 22)->display(twig_array_merge($context, ["page" =>         // line 23
($context["p"] ?? null)]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "latestcustompagetype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  79 => 22,  77 => 21,  74 => 19,  70 => 16,  68 => 15,  66 => 14,  64 => 13,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  43 => 6,  40 => 5,  38 => 4,  36 => 3,  34 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# no tab indents for Page Inject Plugin compatibility - hibbittsdesign.org #}
{% set arrayofpath = uri.path | split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{% block content %}
{# MultiCourse hub compatibility - hibbittsdesign.org #}
{% if page.find('/' ~ firstfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath).template == 'subsite' %}
{% set p = (page.find('/' ~ firstfolderofpath ~ '/' ~ page.parent.slug).children.order('{page.parent.header.content.order.by}', 'desc').visible | first) %}
{% if p is empty %}
{% set p = (page.find('/' ~ page.parent.slug).children.order('{page.parent.header.content.order.by}', 'desc').visible | first) %}
{% endif %}
{% elseif page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'subsite' %}
{% set p = (page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/' ~ page.parent.slug).children.order('{page.parent.header.content.order.by}', 'desc').visible | first) %}
{% if p is empty %}
{% set p = (page.find('/' ~ page.parent.slug).children.order('{page.parent.header.content.order.by}', 'desc').visible | first) %}
{% endif %}
{% else %}
{% set p = (page.find('/' ~ page.parent.slug).children.order('{page.parent.header.content.order.by}', 'desc').visible | first) %}
{% endif %}
{% set templatename = p.template ~ '.html.twig' %}
{% include templatename with {
'page' : p
} %}
{% endblock %}
", "latestcustompagetype.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\latestcustompagetype.html.twig");
    }
}
