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

/* flex-objects/types/default/buttons/export.html.twig */
class __TwigTemplate_d5235135ff72e380f29bd8446aeaf591b3b3da9b5cb0557946b633ec302afb1b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/buttons/export.html.twig"));

        // line 1
        echo "<a class=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "", 1 => "export"], "method"), "html", null, true);
        echo "\">
    <i class=\"fa fa-download\"></i> ";
        // line 2
        ((($this->getAttribute(($context["export"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["export"] ?? null), "title", [])))) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["export"] ?? null), "title", []), "html", null, true))) : (print ((($this->getAttribute($this->getAttribute(($context["export"] ?? null), "formatter", []), "class", [])) ? ("Export") : ("CVS")))));
        echo "
</a>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"button\" href=\"{{ route.withGravParam('', 'export') }}\">
    <i class=\"fa fa-download\"></i> {{ export.title ?? (export.formatter.class ? 'Export' : 'CVS') }}
</a>
", "flex-objects/types/default/buttons/export.html.twig", "/home/tanoh/grav_labo/angahi-v5/user/plugins/flex-objects/admin/templates/flex-objects/types/default/buttons/export.html.twig");
    }
}
