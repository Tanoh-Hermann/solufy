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

/* accordion.html.twig */
class __TwigTemplate_f5b9acdbe465c47b35269e3a48cdbab05b810a58429f5abbf704de7a8e0368b3 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accordion.html.twig"));

        // line 1
        $this->loadTemplate("accordion.html.twig", "accordion.html.twig", 1, "375308636")->display($context);
        // line 88
        echo "
<script>

\$(document).ready(function(){

});

</script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 88,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% block content %}
  <div class=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        {# check content display flag - hibbittsdesign.org #}
        {% if show_sidebar and not (grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
          <div class=\"col-md-8 blog-main\">
        {% else %}
          <div class=\"col-md-12 blog-main\">
        {% endif %}

        {% if not (page.header.hide_page_title) and not (grav.uri.param('hidepagetitle')) %}
          <h1>{{page.title}}</h1>
        {% else %}
          <h1 class=\"hidden\">{{page.title}}</h1>
        {% endif %}
        {{ page.content|raw }}
        <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

          <div class=\"card\">

              {% set collection = page.collection() %}
              {% set index = 1 %}
              {% for page in page.collection() %}

                {% if page.children %}

                  <h2 class=\"card-header\" role=\"tab\" id=\"heading{{index}}\">
                      <a class=\"collapsed d-block\" data-toggle=\"collapse\" href=\"#collapse{{index}}\" aria-expanded=\"true\" aria-controls=\"#collapse{{index}}\" id=\"heading{{index}}\">
                          <i class=\"fa fa-chevron-left pull-right\"></i> {{ page.title }}
                      </a>
                  </h2>

                  <div id=\"collapse{{index}}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading{{index}}\">
                    <div class=\"card-body\">

                      {% for child in page.children %}
                        {{ child.content|raw }}
                      {% endfor %}

                    </div>
                  </div>

                {% endif %}

                {% set index = index + 1 %}

              {% endfor %}
            </div>

            {# Creative Commons License -  hibbittsdesign.org #}
            {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
              <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
            {% endif %}

            {# Git repository edit link - hibbittsdesign.org #}
            {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
              <br>
              <hr>
              <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
            {% endif %}

      </div>
    </div>

      {# check content display flag - hibbittsdesign.org #}
      {% if show_sidebar and not (grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
        <div class=\"col-md-4 blog-sidebar\">
          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
      {% endif %}

      </div>
    </div>
  </div>

  {% endblock %}

{% endembed %}

<script>

\$(document).ready(function(){

});

</script>
", "accordion.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\accordion.html.twig");
    }
}


/* accordion.html.twig */
class __TwigTemplate_f5b9acdbe465c47b35269e3a48cdbab05b810a58429f5abbf704de7a8e0368b3___375308636 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accordion.html.twig"));

        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 4
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 6
            $context["show_sidebar"] = true;
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "accordion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "  <div class=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 14
        echo "        ";
        if ((($context["show_sidebar"] ?? null) &&  !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")))) {
            // line 15
            echo "          <div class=\"col-md-8 blog-main\">
        ";
        } else {
            // line 17
            echo "          <div class=\"col-md-12 blog-main\">
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 21
            echo "          <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
        ";
        } else {
            // line 23
            echo "          <h1 class=\"hidden\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
        ";
        }
        // line 25
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

          <div class=\"card\">

              ";
        // line 30
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 31
        echo "              ";
        $context["index"] = 1;
        // line 32
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            echo "
                ";
            // line 34
            if ($this->getAttribute($context["page"], "children", [])) {
                // line 35
                echo "
                  <h2 class=\"card-header\" role=\"tab\" id=\"heading";
                // line 36
                echo ($context["index"] ?? null);
                echo "\">
                      <a class=\"collapsed d-block\" data-toggle=\"collapse\" href=\"#collapse";
                // line 37
                echo ($context["index"] ?? null);
                echo "\" aria-expanded=\"true\" aria-controls=\"#collapse";
                echo ($context["index"] ?? null);
                echo "\" id=\"heading";
                echo ($context["index"] ?? null);
                echo "\">
                          <i class=\"fa fa-chevron-left pull-right\"></i> ";
                // line 38
                echo $this->getAttribute($context["page"], "title", []);
                echo "
                      </a>
                  </h2>

                  <div id=\"collapse";
                // line 42
                echo ($context["index"] ?? null);
                echo "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo ($context["index"] ?? null);
                echo "\">
                    <div class=\"card-body\">

                      ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 46
                    echo "                        ";
                    echo $this->getAttribute($context["child"], "content", []);
                    echo "
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
                    </div>
                  </div>

                ";
            }
            // line 53
            echo "
                ";
            // line 54
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 55
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div>

            ";
        // line 60
        echo "            ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])))) {
            // line 61
            echo "              <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "accordion.html.twig", 61)->display($context);
            echo "</p>
            ";
        }
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "page")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
            // line 66
            echo "              <br>
              <hr>
              <p>";
            // line 68
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "accordion.html.twig", 68)->display($context);
            echo "</p>
            ";
        }
        // line 70
        echo "
      </div>
    </div>

      ";
        // line 75
        echo "      ";
        if ((($context["show_sidebar"] ?? null) &&  !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")))) {
            // line 76
            echo "        <div class=\"col-md-4 blog-sidebar\">
          ";
            // line 77
            $this->loadTemplate("partials/sidebar.html.twig", "accordion.html.twig", 77)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
            // line 78
            echo "        </div>
      ";
        }
        // line 80
        echo "
      </div>
    </div>
  </div>

  ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 80,  381 => 78,  379 => 77,  376 => 76,  373 => 75,  367 => 70,  362 => 68,  358 => 66,  355 => 65,  352 => 63,  346 => 61,  343 => 60,  339 => 57,  332 => 55,  330 => 54,  327 => 53,  320 => 48,  311 => 46,  307 => 45,  299 => 42,  292 => 38,  284 => 37,  280 => 36,  277 => 35,  275 => 34,  272 => 33,  267 => 32,  264 => 31,  262 => 30,  253 => 25,  247 => 23,  241 => 21,  239 => 20,  236 => 19,  232 => 17,  228 => 15,  225 => 14,  220 => 10,  214 => 9,  206 => 1,  203 => 6,  200 => 4,  198 => 3,  189 => 1,  35 => 88,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% block content %}
  <div class=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        {# check content display flag - hibbittsdesign.org #}
        {% if show_sidebar and not (grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
          <div class=\"col-md-8 blog-main\">
        {% else %}
          <div class=\"col-md-12 blog-main\">
        {% endif %}

        {% if not (page.header.hide_page_title) and not (grav.uri.param('hidepagetitle')) %}
          <h1>{{page.title}}</h1>
        {% else %}
          <h1 class=\"hidden\">{{page.title}}</h1>
        {% endif %}
        {{ page.content|raw }}
        <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

          <div class=\"card\">

              {% set collection = page.collection() %}
              {% set index = 1 %}
              {% for page in page.collection() %}

                {% if page.children %}

                  <h2 class=\"card-header\" role=\"tab\" id=\"heading{{index}}\">
                      <a class=\"collapsed d-block\" data-toggle=\"collapse\" href=\"#collapse{{index}}\" aria-expanded=\"true\" aria-controls=\"#collapse{{index}}\" id=\"heading{{index}}\">
                          <i class=\"fa fa-chevron-left pull-right\"></i> {{ page.title }}
                      </a>
                  </h2>

                  <div id=\"collapse{{index}}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading{{index}}\">
                    <div class=\"card-body\">

                      {% for child in page.children %}
                        {{ child.content|raw }}
                      {% endfor %}

                    </div>
                  </div>

                {% endif %}

                {% set index = index + 1 %}

              {% endfor %}
            </div>

            {# Creative Commons License -  hibbittsdesign.org #}
            {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
              <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
            {% endif %}

            {# Git repository edit link - hibbittsdesign.org #}
            {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
              <br>
              <hr>
              <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
            {% endif %}

      </div>
    </div>

      {# check content display flag - hibbittsdesign.org #}
      {% if show_sidebar and not (grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
        <div class=\"col-md-4 blog-sidebar\">
          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
      {% endif %}

      </div>
    </div>
  </div>

  {% endblock %}

{% endembed %}

<script>

\$(document).ready(function(){

});

</script>
", "accordion.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\accordion.html.twig");
    }
}
