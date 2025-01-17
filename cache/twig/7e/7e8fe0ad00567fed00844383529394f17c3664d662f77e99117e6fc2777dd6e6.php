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

/* forms/fields/git-wizard/git-wizard.html.twig */
class __TwigTemplate_642649bb41ce27c08f8d3f56a09e4ba1822f399c10bdd9c7df8500d453456fbd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/git-wizard/git-wizard.html.twig"));

        $this->parent = $this->loadTemplate("forms/default/field.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 6
        echo "    <script type=\"text/javascript\">
        GitSync = {
            'first_time': ";
        // line 8
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "first_time", []));
        echo ",
            'git_installed': ";
        // line 9
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "git_installed", []));
        echo "
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    ";
        // line 15
        $this->loadTemplate("partials/modal-wizard.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("partials/modal-reset.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 16)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/git-wizard/git-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  80 => 15,  71 => 9,  67 => 8,  63 => 6,  57 => 5,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/default/field.html.twig\" %}

{% block label %}{% endblock %}

{% block input %}
    <script type=\"text/javascript\">
        GitSync = {
            'first_time': {{ git_sync.first_time|json_encode|raw }},
            'git_installed': {{ git_sync.git_installed|json_encode|raw }}
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    {% include 'partials/modal-wizard.html.twig' %}
    {% include 'partials/modal-reset.html.twig' %}
{% endblock %}
", "forms/fields/git-wizard/git-wizard.html.twig", "/home/tanoh/grav_labo/angahi-v5/user/plugins/git-sync/templates/forms/fields/git-wizard/git-wizard.html.twig");
    }
}
