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

/* forms/fields/enc-password/enc-password.html.twig */
class __TwigTemplate_67cc8c09f59dd68d101c84fcadc84f99a12ffa318a6dc153482a510c897e60be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/enc-password/enc-password.html.twig"));

        // line 3
        $context["passwordStored"] = ((($context["value"] ?? null)) ? (1) : (0));
        // line 4
        $context["isEncrypted"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->startsWithFilter(($context["value"] ?? null), "gitsync-");
        // line 5
        $context["value"] = "";
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/enc-password/enc-password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 8
        echo "    type=\"password\"
    class=\"input\"
    placeholder=\"";
        // line 10
        ((($context["passwordStored"] ?? null)) ? (print (((($context["isEncrypted"] ?? null)) ? ("Your password is securely stored.") : ("Your password is stored but not encrypted.")))) : (print (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true))));
        echo "\"
    ";
        // line 11
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/enc-password/enc-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 8,  52 => 7,  44 => 1,  42 => 5,  40 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set passwordStored = value ? 1 : 0 %}
{% set isEncrypted = value|starts_with('gitsync-') %}
{% set value = '' %}

{% block input_attributes %}
    type=\"password\"
    class=\"input\"
    placeholder=\"{{ passwordStored ? (isEncrypted ? 'Your password is securely stored.' : 'Your password is stored but not encrypted.') : field.placeholder }}\"
    {{ parent() }}
{% endblock %}
", "forms/fields/enc-password/enc-password.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\git-sync\\templates\\forms\\fields\\enc-password\\enc-password.html.twig");
    }
}
