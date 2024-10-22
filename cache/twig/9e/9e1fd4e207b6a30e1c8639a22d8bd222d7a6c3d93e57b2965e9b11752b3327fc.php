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

/* partials/messages.html.twig */
class __TwigTemplate_c5f2a6610568e2320341b386831fd4d4159edf4c8362d3c2e2b58499be9231d5 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/messages.html.twig"));

        // line 1
        $context["status_mapping"] = ["info" => "green", "error" => "red", "warning" => "yellow"];
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 4
            echo "    <div id=\"messages\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "fetch", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "
            ";
                // line 7
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", []));
                // line 8
                echo "            ";
                $context["color"] = $this->getAttribute(($context["status_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 9
                echo "
            <div class=\"notices ";
                // line 10
                echo ($context["scope"] ?? null);
                echo " ";
                echo ($context["color"] ?? null);
                echo "\"><p>";
                echo $this->getAttribute($context["message"], "message", []);
                echo "</p></div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set status_mapping = {'info':'green', 'error': 'red', 'warning': 'yellow'} %}

{% if grav.messages.all %}
    <div id=\"messages\">
        {% for message in grav.messages.fetch %}

            {% set scope = message.scope|e %}
            {% set color = status_mapping[scope] %}

            <div class=\"notices {{ scope }} {{ color }}\"><p>{{ message.message|raw }}</p></div>

        {% endfor %}
    </div>
{% endif %}
", "partials/messages.html.twig", "C:\\laragon\\www\\angahi\\system\\templates\\partials\\messages.html.twig");
    }
}
