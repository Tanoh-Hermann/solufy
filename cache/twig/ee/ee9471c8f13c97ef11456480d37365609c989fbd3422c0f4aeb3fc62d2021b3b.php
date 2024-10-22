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

/* partials/pagination.html.twig */
class __TwigTemplate_48f6c7210bf3e99ee59113dc86ab7d62130ea5f6a6afe6b65377ff68dc8931d0 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/pagination.html.twig"));

        // line 1
        $context["pagination"] = (((isset($context["pagination"]) || array_key_exists("pagination", $context))) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", [])));
        // line 2
        $context["base_url"] = (((isset($context["base_url"]) || array_key_exists("base_url", $context))) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
<ul class=\"pagination\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 10
                echo ($context["url"] ?? null);
                echo "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
    ";
            } else {
                // line 16
                echo "        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
            <span class=\"sr-only\">Previous</span>
        </li>
    ";
            }
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 23
                echo "
        ";
                // line 24
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 25
                    echo "            <li class=\"page-item active\">
                <span class=\"page-link\">";
                    // line 26
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</span>
                <span class=\"sr-only\">(current)</span>
            </li>
        ";
                } elseif ($this->getAttribute(                // line 29
$context["paginate"], "isInDelta", [])) {
                    // line 30
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 31
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 32
                    echo ($context["url"] ?? null);
                    echo "\">
                    <span class=\"sr-only\">Goes to Page</span>";
                    // line 33
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "
                </a>
            </li>
        ";
                } elseif ($this->getAttribute(                // line 36
$context["paginate"], "isDeltaBorder", [])) {
                    // line 37
                    echo "            <li class=\"page-item gap\">
                <span class=\"page-link\">&hellip;</span>
            </li>
        ";
                }
                // line 41
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 44
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 45
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"";
                // line 46
                echo ($context["url"] ?? null);
                echo "\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    ";
            } else {
                // line 52
                echo "        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
            <span class=\"sr-only\">Next</span>
        </li>
    ";
            }
            // line 57
            echo "</ul>

";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 57,  142 => 52,  133 => 46,  130 => 45,  127 => 44,  124 => 43,  117 => 41,  111 => 37,  109 => 36,  103 => 33,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  85 => 26,  82 => 25,  80 => 24,  77 => 23,  73 => 22,  70 => 21,  63 => 16,  54 => 10,  51 => 9,  48 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}

<ul class=\"pagination\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"{{ url }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
    {% else %}
        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
            <span class=\"sr-only\">Previous</span>
        </li>
    {% endif %}

    {% for paginate in pagination %}

        {% if paginate.isCurrent %}
            <li class=\"page-item active\">
                <span class=\"page-link\">{{ paginate.number }}</span>
                <span class=\"sr-only\">(current)</span>
            </li>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ url }}\">
                    <span class=\"sr-only\">Goes to Page</span>{{ paginate.number }}
                </a>
            </li>
        {% elseif paginate.isDeltaBorder %}
            <li class=\"page-item gap\">
                <span class=\"page-link\">&hellip;</span>
            </li>
        {% endif %}

    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"{{ url }}\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    {% else %}
        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
            <span class=\"sr-only\">Next</span>
        </li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\partials\\pagination.html.twig");
    }
}
