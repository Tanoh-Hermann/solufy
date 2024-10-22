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

/* partials/login-status.html.twig */
class __TwigTemplate_d4e1a89dfcd8e5c894b98ad1ed14bc79346c395e1ee331afcc30457e11b20d2a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/login-status.html.twig"));

        // line 1
        echo "<span class=\"login-status\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", [])) {
            // line 3
            echo "        <strong>";
            echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", [])));
            echo "</strong>, <a class=\"logout\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((twig_trim_filter($this->getAttribute(($context["uri"] ?? null), "path", []), "/") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"], "method")));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGOUT");
            echo "</a>
    ";
        }
        // line 5
        echo "</span>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/login-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  38 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"login-status\">
    {% if grav.user.authenticated %}
        <strong>{{ grav.user.fullname ?: grav.user.username }}</strong>, <a class=\"logout\" href=\"{{ url(uri.addNonce((uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce'))|e }}\">{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a>
    {% endif %}
</span>
", "partials/login-status.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\login\\templates\\partials\\login-status.html.twig");
    }
}
