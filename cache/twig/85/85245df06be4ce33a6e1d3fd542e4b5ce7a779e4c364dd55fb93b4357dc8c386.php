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

/* partials/ui-accordion.html.twig */
class __TwigTemplate_83110dca26784ef7e7c29af077a43d4202eda0e22cdc0b0179e97576cc788109 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/ui-accordion.html.twig"));

        // line 1
        echo "<div class=\"accordion-wrapper\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accordion_items"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 3
            echo "        ";
            $context["checked"] = (((($context["open"] ?? null) != "none") && ($this->getAttribute($context["loop"], "index0", []) == ($context["open"] ?? null))) || ((($context["type"] ?? null) == "checkbox") && (($context["open"] ?? null) == "all")));
            // line 4
            echo "        <div>
            <input id=\"";
            // line 5
            echo (($context["hash"] ?? null) . $context["key"]);
            echo "\" name=\"";
            echo ($context["hash"] ?? null);
            echo "\" type=\"";
            echo ($context["type"] ?? null);
            echo "\" ";
            echo ((($context["checked"] ?? null)) ? ("checked=\"checked\"") : (""));
            echo " />
            <label for=\"";
            // line 6
            echo (($context["hash"] ?? null) . $context["key"]);
            echo "\">";
            echo $this->getAttribute($context["item"], "getParameter", [0 => "title"], "method");
            echo "</label>
            <article>";
            // line 7
            echo $this->getAttribute($context["item"], "getContent", [], "method");
            echo "</article>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/ui-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 10,  75 => 7,  69 => 6,  59 => 5,  56 => 4,  53 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion-wrapper\">
    {% for key,item in accordion_items %}
        {% set checked = (open != 'none' and loop.index0 == open or (type == 'checkbox' and open == 'all')) %}
        <div>
            <input id=\"{{ hash ~ key }}\" name=\"{{ hash }}\" type=\"{{ type }}\" {{ checked  ? 'checked=\"checked\"' : ''}} />
            <label for=\"{{ hash ~ key }}\">{{ item.getParameter('title') }}</label>
            <article>{{ item.getContent()|raw }}</article>
        </div>
    {% endfor %}
</div>", "partials/ui-accordion.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\shortcode-ui\\templates\\partials\\ui-accordion.html.twig");
    }
}
