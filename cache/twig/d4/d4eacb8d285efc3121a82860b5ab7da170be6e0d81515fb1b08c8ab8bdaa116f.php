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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_60daac460097aa8ba1592c7d9d266cbb43ad5592667404d0e5646662cac3f0a2 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/breadcrumbs.html.twig"));

        // line 1
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", []))) {
            // line 6
            echo "<div id=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
    ";
            // line 7
            if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", [])) {
                // line 8
                echo "    <i class=\"";
                echo $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", []);
                echo "\"></i>
    ";
            }
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 11
                echo "    <span itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
        ";
                // line 12
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 13
                    echo "            ";
                    if ($this->getAttribute($context["crumb"], "routable", [])) {
                        // line 14
                        echo "                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\" itemid=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\">
                    <span itemprop=\"name\">";
                        // line 15
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                </a>
            ";
                    } else {
                        // line 18
                        echo "                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\">
                    <span itemprop=\"name\">";
                        // line 19
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                </span>
            ";
                    }
                    // line 22
                    echo "            <i class=\"";
                    echo ($context["divider"] ?? null);
                    echo "\"></i>
        ";
                } else {
                    // line 24
                    echo "            ";
                    if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "link_trailing", [])) {
                        // line 25
                        echo "                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\" itemid=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\">
                    <span itemprop=\"name\">";
                        // line 26
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                </a>
            ";
                    } else {
                        // line 29
                        echo "                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\">
                    <span itemprop=\"name\">";
                        // line 30
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                </span>
            ";
                    }
                    // line 33
                    echo "        ";
                }
                // line 34
                echo "        <meta itemprop=\"position\" content=\"";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" />
    </span>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 37,  141 => 34,  138 => 33,  132 => 30,  127 => 29,  121 => 26,  114 => 25,  111 => 24,  105 => 22,  99 => 19,  94 => 18,  88 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  55 => 10,  49 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<div id=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
    {% if breadcrumbs_config.icon_home %}
    <i class=\"{{ breadcrumbs_config.icon_home }}\"></i>
    {% endif %}
    {% for crumb in crumbs %}
    <span itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
        {% if not loop.last %}
            {% if crumb.routable %}
                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"{{ crumb.url }}\" itemid=\"{{ crumb.url }}\">
                    <span itemprop=\"name\">{{ crumb.menu }}</span>
                </a>
            {% else  %}
                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"{{ crumb.url }}\">
                    <span itemprop=\"name\">{{ crumb.menu }}</span>
                </span>
            {% endif %}
            <i class=\"{{ divider }}\"></i>
        {% else %}
            {% if breadcrumbs_config.link_trailing %}
                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"{{ crumb.url }}\" itemid=\"{{ crumb.url }}\">
                    <span itemprop=\"name\">{{ crumb.menu }}</span>
                </a>
            {% else %}
                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"{{ crumb.url }}\">
                    <span itemprop=\"name\">{{ crumb.menu }}</span>
                </span>
            {% endif %}
        {% endif %}
        <meta itemprop=\"position\" content=\"{{ loop.index }}\" />
    </span>
    {% endfor %}
</div>
{% endif %}
", "partials/breadcrumbs.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\mytheme\\templates\\partials\\breadcrumbs.html.twig");
    }
}
