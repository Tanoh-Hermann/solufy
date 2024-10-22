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

/* modular/alert.html.twig */
class __TwigTemplate_fed5a2f6a43e41acaf1415f5958c5506628bf732929abc5e1d70f2a386f35171 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/alert.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 2
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "alert_style", [], "any", true, true)) {
                // line 3
                echo "  ";
                $context["alert_style"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "alert_style", []);
            } else {
                // line 5
                echo "  ";
                $context["alert_style"] = "alert-primary";
            }
            // line 7
            echo "
<div class=\"list-item\">
  <div class=\"list-blog-header\">
    <div class=\"list-blog-padding\">
      <div class=\"listbullet alert ";
            // line 11
            echo ($context["alert_style"] ?? null);
            echo "\">
        ";
            // line 12
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  51 => 11,  45 => 7,  41 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.published %}
{% if page.header.alert_style is defined %}
  {% set alert_style = page.header.alert_style %}
{% else %}
  {% set alert_style = 'alert-primary' %}
{% endif %}

<div class=\"list-item\">
  <div class=\"list-blog-header\">
    <div class=\"list-blog-padding\">
      <div class=\"listbullet alert {{ alert_style }}\">
        {{ page.content|raw }}
      </div>
    </div>
  </div>
</div>
{% endif %}
", "modular/alert.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\modular\\alert.html.twig");
    }
}
