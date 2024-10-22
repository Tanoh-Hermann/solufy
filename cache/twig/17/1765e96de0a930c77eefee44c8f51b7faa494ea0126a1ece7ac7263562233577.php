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

/* rename-modal.twig.html */
class __TwigTemplate_6e95aad16310f9a1e9d06a897642ced0d9114ed0b1806ebbcb057894ee8ec96f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rename-modal.twig.html"));

        // line 1
        echo "<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            echo "      ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 5
                echo "        ";
                $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 6
                echo "        <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                echo "\">
          ";
                // line 7
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "rename-modal.twig.html", 7)->display($context);
                // line 8
                echo "        </div>
      ";
            }
            // line 10
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <div class=\"block page-media-info hidden\">
      <div class=\"form-field grid\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN_ADDON_MEDIA_RENAME.PAGE_MEDIA_INFO"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"block non-page-media-info hidden\">
      <div class=\"form-field grid\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NON_PAGE_MEDIA_INFO"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"button-bar\">
      <div class=\"loading\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAMING"), "html", null, true);
        echo "... <i class=\"fa fa-spinner fa-spin\"></i>
      </div>

      <button class=\"button primary\" style=\"visibility: hidden\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>
  </form>
</div>

<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename-alert\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAME_FAILED"), "html", null, true);
        echo "</h1>
    <p class=\"bigger\"></p>
    <div class=\"button-bar\">
        <button data-remodal-action=\"confirm\" class=\"button primary\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>
  </form>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "rename-modal.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  120 => 32,  110 => 25,  104 => 22,  96 => 17,  89 => 13,  85 => 11,  71 => 10,  67 => 8,  65 => 7,  60 => 6,  57 => 5,  54 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    {% for field in fields %}
      {% if field.type %}
        {% set value = data.value(field.name) %}
        <div class=\"block block-{{field.type}}\">
          {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
        </div>
      {% endif %}
    {% endfor %}

    <div class=\"block page-media-info hidden\">
      <div class=\"form-field grid\">{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.PAGE_MEDIA_INFO\"|t }}</div>
    </div>

    <div class=\"block non-page-media-info hidden\">
      <div class=\"form-field grid\">{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NON_PAGE_MEDIA_INFO\"|t }}</div>
    </div>

    <div class=\"button-bar\">
      <div class=\"loading\">
        {{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAMING\"|t }}... <i class=\"fa fa-spinner fa-spin\"></i>
      </div>

      <button class=\"button primary\" style=\"visibility: hidden\">{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
    </div>
  </form>
</div>

<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename-alert\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    <h1>{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAME_FAILED\"|t }}</h1>
    <p class=\"bigger\"></p>
    <div class=\"button-bar\">
        <button data-remodal-action=\"confirm\" class=\"button primary\">{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
    </div>
  </form>
</div>", "rename-modal.twig.html", "/home/tanoh/grav_labo/angahi-v5/user/plugins/admin-addon-media-rename/templates/rename-modal.twig.html");
    }
}
