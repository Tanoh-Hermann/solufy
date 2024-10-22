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

/* subsitelist.html.twig */
class __TwigTemplate_ae9c3d07aa09e9ee104f6c75be9e778119e26c9a1913a96fcb47253d2dda3143 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subsitelist.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) {
            // line 2
            echo "  ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array");
        } else {
            // line 4
            echo "  ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "card_width", [], "any", true, true)) {
            // line 8
            echo "  ";
            $context["card_width"] = $this->getAttribute(($context["header"] ?? null), "card_width", []);
        } else {
            // line 10
            echo "  ";
            $context["card_width"] = 3;
        }
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 14
            echo "  ";
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 16
            echo "  ";
            $context["show_sidebar"] = true;
        }
        // line 18
        echo "
";
        // line 19
        $this->loadTemplate("subsitelist.html.twig", "subsitelist.html.twig", 19, "247362107")->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "subsitelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  65 => 16,  61 => 14,  59 => 13,  56 => 12,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hero_image %}
  {% set header_image_media = page.media.images[page.header.hero_image] %}
{% else %}
  {% set header_image_media = page.media.images | first %}
{% endif %}

{% if header.card_width is defined %}
  {% set card_width = header.card_width %}
{% else %}
  {% set card_width = 3 %}
{% endif %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) %}
      {# check for hero image - hibbittsdesign.org #}
      {% if header_image_media is not empty %}
        {% include 'partials/hero.html.twig' %}
      {% endif %}
    {% endif %}

    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">
          {# check content display flag - hibbittsdesign.org #}
          {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
            <div class=\"col-md-8 blog-main\">
            {% else %}
              <div class=\"col-md-12 blog-main\">
              {% endif %}

              {% if not(page.header.hide_page_title)and not(grav.uri.param('hidepagetitle')) %}
                <h1>{{page.title}}</h1>
              {% else %}
                <h1 class=\"hidden\">{{page.title}}</h1>
              {% endif %}

              {{ page.content|raw }}

              <div class=\"card-deck\">

                {% set siblings = page.collection({items: '@self.siblings','order': {'by': page.header.content.order.by, 'dir': page.header.content.order.dir}}) %}
                {% for page in siblings %}
                  {# Added check for hiding post in list - hibbittsdesign.org #}
                  {% if page.header.hide_from_subsite_list != true and(page.template == 'subsite') %}
                    {% if page.header.subsite_home is defined %}
                      {% set subsite_home = page.header.subsite_home %}
                    {% else %}
                      {% set subsite_home = config.system.home.alias|trim('/') %}
                    {% endif %}
                    <div class=\"card col-lg-{{ card_width }}\">
                      <div class=\"card-body\">
                        {% set subsite_image = page.find('/' ~ page.slug ~ '/headerimage').media.images | first %}
                        {% if subsite_image is empty %}
                          {% set subsite_image = page.find('/' ~ page.slug ~ '/' ~ subsite_home).media.images | first %}
                        {% endif %}
                        {% if subsite_image is not empty %}
                          <a href=\"{{ page.url ~ '/' ~ subsite_home }}\"><img class=\"card-img-top\" src=\"{{subsite_image.url}}\" alt=\"Card image cap\"></a>
                        {% endif %}
                        {% if page.header.subsite_list_title %}
                          {% set subsite_title = page.header.subsite_list_title %}
                        {% else %}
                          {% set subsite_title = page.title %}
                        {% endif %}
                        <h2 class=\"card-title\">
                          <a href=\"{{ page.url ~ '/' ~ subsite_home }}\">{{ subsite_title }}</a>
                        </h2>
                        {% if page.header.subsite_list_description %}
                          <p class=\"card-text\">{{ page.header.subsite_list_description }}</p>
                        {% endif %}
                        {{ page.find('/' ~ page.slug).content|raw}}
                      </div>
                    </div>
                  {% elseif page.header.hide_from_subsite_list != true and(page.template == 'subsitegroup') %}
                    <div class=\"col-lg-{{ 12 }}\">
                      <h2> {{ page.header.title}} </h2>
                    </div>
                    {% set subsite_folder = page.slug %}
                    {% set children = page.collection({'items': {'@page.children': page.route}}) %}
                    {% for p in children %}
                      {% if p.header.hide_from_subsite_list != true and (p.template == 'subsite') %}
                        {% if p.header.subsite_home is defined %}
                          {% set subsite_home = p.header.subsite_home %}
                        {% else %}
                          {% set subsite_home = 'home' %}
                        {% endif %}
                        <div class=\"card col-lg-{{ card_width }}\">
                          <div class=\"card-body\">
                            {% set subsite_image = page.find('/' ~ subsite_folder ~ '/' ~ p.slug ~ '/headerimage').media.images | first %}
                            {% if subsite_image is empty %}
                              {% set subsite_image = page.find('/' ~ subsite_folder ~ '/' ~ p.slug ~ '/' ~ subsite_home).media.images | first %}
                            {% endif %}
                            {% if subsite_image is not empty %}
                              <a href=\"{{ p.url ~ '/' ~ subsite_home }}\"><img class=\"card-img-top\" src=\"{{subsite_image.url}}\" alt=\"Card image cap\"></a>
                            {% endif %}
                            {% if p.header.subsite_site_title %}
                              {% set subsite_title = p.header.subsite_site_title %}
                            {% else %}
                              {% set subsite_title = p.title %}
                            {% endif %}
                            <h2 class=\"card-title\">
                              <a href=\"{{ p.url ~ '/' ~ subsite_home }}\">{{ subsite_title }}</a>
                            </h2>
                            {% if p.header.subsite_list_description %}
                              <p class=\"card-text\">{{ p.header.subsite_list_description }}</p>
                            {% endif %}
                            {{ page.find('/' ~ subsite_folder ~ '/' ~ p.slug).content|raw}}
                          </div>
                        </div>
                        {% endif %}
                      {% endfor %}
                    {% endif %}
                {% endfor %}

              </div>

              {# Creative Commons License -  hibbittsdesign.org #}
              {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
              {% endif %}
              {# Git repository edit link -  hibbittsdesign.org #}
              {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                  <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
              {% endif %}

            </div>

            {# Check content display flag - hibbittsdesign.org #}
            {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
              <div class=\"col-md-4 blog-sidebar\">
                {% include 'partials/sidebar.html.twig' with {
                  'blog' : page
                } %}
              </div>
            {% endif %}

          </div>
        </div>
      </div>
    {% endblock %}

  {% endembed %}
", "subsitelist.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\subsitelist.html.twig");
    }
}


/* subsitelist.html.twig */
class __TwigTemplate_ae9c3d07aa09e9ee104f6c75be9e778119e26c9a1913a96fcb47253d2dda3143___247362107 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subsitelist.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "subsitelist.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 25
            echo "      ";
            // line 26
            echo "      ";
            if ( !twig_test_empty(($context["header_image_media"] ?? null))) {
                // line 27
                echo "        ";
                $this->loadTemplate("partials/hero.html.twig", "subsitelist.html.twig", 27)->display($context);
                // line 28
                echo "      ";
            }
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">
          ";
        // line 35
        echo "          ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 36
            echo "            <div class=\"col-md-8 blog-main\">
            ";
        } else {
            // line 38
            echo "              <div class=\"col-md-12 blog-main\">
              ";
        }
        // line 40
        echo "
              ";
        // line 41
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 42
            echo "                <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
              ";
        } else {
            // line 44
            echo "                <h1 class=\"hidden\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
              ";
        }
        // line 46
        echo "
              ";
        // line 47
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

              <div class=\"card-deck\">

                ";
        // line 51
        $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => "@self.siblings", "order" => ["by" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), "dir" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "dir", [])]]], "method");
        // line 52
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "                  ";
            // line 54
            echo "                  ";
            if ((($this->getAttribute($this->getAttribute($context["page"], "header", []), "hide_from_subsite_list", []) != true) && ($this->getAttribute($context["page"], "template", []) == "subsite"))) {
                // line 55
                echo "                    ";
                if ($this->getAttribute($this->getAttribute($context["page"], "header", [], "any", false, true), "subsite_home", [], "any", true, true)) {
                    // line 56
                    echo "                      ";
                    $context["subsite_home"] = $this->getAttribute($this->getAttribute($context["page"], "header", []), "subsite_home", []);
                    // line 57
                    echo "                    ";
                } else {
                    // line 58
                    echo "                      ";
                    $context["subsite_home"] = twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "home", []), "alias", []), "/");
                    // line 59
                    echo "                    ";
                }
                // line 60
                echo "                    <div class=\"card col-lg-";
                echo ($context["card_width"] ?? null);
                echo "\">
                      <div class=\"card-body\">
                        ";
                // line 62
                $context["subsite_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "find", [0 => (("/" . $this->getAttribute($context["page"], "slug", [])) . "/headerimage")], "method"), "media", []), "images", []));
                // line 63
                echo "                        ";
                if (twig_test_empty(($context["subsite_image"] ?? null))) {
                    // line 64
                    echo "                          ";
                    $context["subsite_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ((("/" . $this->getAttribute($context["page"], "slug", [])) . "/") . ($context["subsite_home"] ?? null))], "method"), "media", []), "images", []));
                    // line 65
                    echo "                        ";
                }
                // line 66
                echo "                        ";
                if ( !twig_test_empty(($context["subsite_image"] ?? null))) {
                    // line 67
                    echo "                          <a href=\"";
                    echo (($this->getAttribute($context["page"], "url", []) . "/") . ($context["subsite_home"] ?? null));
                    echo "\"><img class=\"card-img-top\" src=\"";
                    echo $this->getAttribute(($context["subsite_image"] ?? null), "url", []);
                    echo "\" alt=\"Card image cap\"></a>
                        ";
                }
                // line 69
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "subsite_list_title", [])) {
                    // line 70
                    echo "                          ";
                    $context["subsite_title"] = $this->getAttribute($this->getAttribute($context["page"], "header", []), "subsite_list_title", []);
                    // line 71
                    echo "                        ";
                } else {
                    // line 72
                    echo "                          ";
                    $context["subsite_title"] = $this->getAttribute($context["page"], "title", []);
                    // line 73
                    echo "                        ";
                }
                // line 74
                echo "                        <h2 class=\"card-title\">
                          <a href=\"";
                // line 75
                echo (($this->getAttribute($context["page"], "url", []) . "/") . ($context["subsite_home"] ?? null));
                echo "\">";
                echo ($context["subsite_title"] ?? null);
                echo "</a>
                        </h2>
                        ";
                // line 77
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "subsite_list_description", [])) {
                    // line 78
                    echo "                          <p class=\"card-text\">";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "subsite_list_description", []);
                    echo "</p>
                        ";
                }
                // line 80
                echo "                        ";
                echo $this->getAttribute($this->getAttribute($context["page"], "find", [0 => ("/" . $this->getAttribute($context["page"], "slug", []))], "method"), "content", []);
                echo "
                      </div>
                    </div>
                  ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 83
$context["page"], "header", []), "hide_from_subsite_list", []) != true) && ($this->getAttribute($context["page"], "template", []) == "subsitegroup"))) {
                // line 84
                echo "                    <div class=\"col-lg-";
                echo 12;
                echo "\">
                      <h2> ";
                // line 85
                echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "title", []);
                echo " </h2>
                    </div>
                    ";
                // line 87
                $context["subsite_folder"] = $this->getAttribute($context["page"], "slug", []);
                // line 88
                echo "                    ";
                $context["children"] = $this->getAttribute($context["page"], "collection", [0 => ["items" => ["@page.children" => $this->getAttribute($context["page"], "route", [])]]], "method");
                // line 89
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 90
                    echo "                      ";
                    if ((($this->getAttribute($this->getAttribute($context["p"], "header", []), "hide_from_subsite_list", []) != true) && ($this->getAttribute($context["p"], "template", []) == "subsite"))) {
                        // line 91
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", [], "any", false, true), "subsite_home", [], "any", true, true)) {
                            // line 92
                            echo "                          ";
                            $context["subsite_home"] = $this->getAttribute($this->getAttribute($context["p"], "header", []), "subsite_home", []);
                            // line 93
                            echo "                        ";
                        } else {
                            // line 94
                            echo "                          ";
                            $context["subsite_home"] = "home";
                            // line 95
                            echo "                        ";
                        }
                        // line 96
                        echo "                        <div class=\"card col-lg-";
                        echo ($context["card_width"] ?? null);
                        echo "\">
                          <div class=\"card-body\">
                            ";
                        // line 98
                        $context["subsite_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "find", [0 => (((("/" . ($context["subsite_folder"] ?? null)) . "/") . $this->getAttribute($context["p"], "slug", [])) . "/headerimage")], "method"), "media", []), "images", []));
                        // line 99
                        echo "                            ";
                        if (twig_test_empty(($context["subsite_image"] ?? null))) {
                            // line 100
                            echo "                              ";
                            $context["subsite_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ((((("/" . ($context["subsite_folder"] ?? null)) . "/") . $this->getAttribute($context["p"], "slug", [])) . "/") . ($context["subsite_home"] ?? null))], "method"), "media", []), "images", []));
                            // line 101
                            echo "                            ";
                        }
                        // line 102
                        echo "                            ";
                        if ( !twig_test_empty(($context["subsite_image"] ?? null))) {
                            // line 103
                            echo "                              <a href=\"";
                            echo (($this->getAttribute($context["p"], "url", []) . "/") . ($context["subsite_home"] ?? null));
                            echo "\"><img class=\"card-img-top\" src=\"";
                            echo $this->getAttribute(($context["subsite_image"] ?? null), "url", []);
                            echo "\" alt=\"Card image cap\"></a>
                            ";
                        }
                        // line 105
                        echo "                            ";
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "subsite_site_title", [])) {
                            // line 106
                            echo "                              ";
                            $context["subsite_title"] = $this->getAttribute($this->getAttribute($context["p"], "header", []), "subsite_site_title", []);
                            // line 107
                            echo "                            ";
                        } else {
                            // line 108
                            echo "                              ";
                            $context["subsite_title"] = $this->getAttribute($context["p"], "title", []);
                            // line 109
                            echo "                            ";
                        }
                        // line 110
                        echo "                            <h2 class=\"card-title\">
                              <a href=\"";
                        // line 111
                        echo (($this->getAttribute($context["p"], "url", []) . "/") . ($context["subsite_home"] ?? null));
                        echo "\">";
                        echo ($context["subsite_title"] ?? null);
                        echo "</a>
                            </h2>
                            ";
                        // line 113
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "subsite_list_description", [])) {
                            // line 114
                            echo "                              <p class=\"card-text\">";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "subsite_list_description", []);
                            echo "</p>
                            ";
                        }
                        // line 116
                        echo "                            ";
                        echo $this->getAttribute($this->getAttribute($context["page"], "find", [0 => ((("/" . ($context["subsite_folder"] ?? null)) . "/") . $this->getAttribute($context["p"], "slug", []))], "method"), "content", []);
                        echo "
                          </div>
                        </div>
                        ";
                    }
                    // line 120
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                    ";
            }
            // line 122
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
              </div>

              ";
        // line 127
        echo "              ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])))) {
            // line 128
            echo "                <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "subsitelist.html.twig", 128)->display($context);
            echo "</p>
              ";
        }
        // line 130
        echo "              ";
        // line 131
        echo "              ";
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "page")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
            // line 132
            echo "                  <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "subsitelist.html.twig", 132)->display($context);
            echo "</p>
              ";
        }
        // line 134
        echo "
            </div>

            ";
        // line 138
        echo "            ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 139
            echo "              <div class=\"col-md-4 blog-sidebar\">
                ";
            // line 140
            $this->loadTemplate("partials/sidebar.html.twig", "subsitelist.html.twig", 140)->display(twig_array_merge($context, ["blog" =>             // line 141
($context["page"] ?? null)]));
            // line 143
            echo "              </div>
            ";
        }
        // line 145
        echo "
          </div>
        </div>
      </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "subsitelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 145,  617 => 143,  615 => 141,  614 => 140,  611 => 139,  608 => 138,  603 => 134,  597 => 132,  594 => 131,  592 => 130,  586 => 128,  583 => 127,  578 => 123,  572 => 122,  569 => 121,  563 => 120,  555 => 116,  549 => 114,  547 => 113,  540 => 111,  537 => 110,  534 => 109,  531 => 108,  528 => 107,  525 => 106,  522 => 105,  514 => 103,  511 => 102,  508 => 101,  505 => 100,  502 => 99,  500 => 98,  494 => 96,  491 => 95,  488 => 94,  485 => 93,  482 => 92,  479 => 91,  476 => 90,  471 => 89,  468 => 88,  466 => 87,  461 => 85,  456 => 84,  454 => 83,  447 => 80,  441 => 78,  439 => 77,  432 => 75,  429 => 74,  426 => 73,  423 => 72,  420 => 71,  417 => 70,  414 => 69,  406 => 67,  403 => 66,  400 => 65,  397 => 64,  394 => 63,  392 => 62,  386 => 60,  383 => 59,  380 => 58,  377 => 57,  374 => 56,  371 => 55,  368 => 54,  366 => 53,  361 => 52,  359 => 51,  352 => 47,  349 => 46,  343 => 44,  337 => 42,  335 => 41,  332 => 40,  328 => 38,  324 => 36,  321 => 35,  315 => 30,  312 => 29,  309 => 28,  306 => 27,  303 => 26,  301 => 25,  298 => 24,  295 => 22,  289 => 21,  72 => 19,  69 => 18,  65 => 16,  61 => 14,  59 => 13,  56 => 12,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hero_image %}
  {% set header_image_media = page.media.images[page.header.hero_image] %}
{% else %}
  {% set header_image_media = page.media.images | first %}
{% endif %}

{% if header.card_width is defined %}
  {% set card_width = header.card_width %}
{% else %}
  {% set card_width = 3 %}
{% endif %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) %}
      {# check for hero image - hibbittsdesign.org #}
      {% if header_image_media is not empty %}
        {% include 'partials/hero.html.twig' %}
      {% endif %}
    {% endif %}

    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">
          {# check content display flag - hibbittsdesign.org #}
          {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
            <div class=\"col-md-8 blog-main\">
            {% else %}
              <div class=\"col-md-12 blog-main\">
              {% endif %}

              {% if not(page.header.hide_page_title)and not(grav.uri.param('hidepagetitle')) %}
                <h1>{{page.title}}</h1>
              {% else %}
                <h1 class=\"hidden\">{{page.title}}</h1>
              {% endif %}

              {{ page.content|raw }}

              <div class=\"card-deck\">

                {% set siblings = page.collection({items: '@self.siblings','order': {'by': page.header.content.order.by, 'dir': page.header.content.order.dir}}) %}
                {% for page in siblings %}
                  {# Added check for hiding post in list - hibbittsdesign.org #}
                  {% if page.header.hide_from_subsite_list != true and(page.template == 'subsite') %}
                    {% if page.header.subsite_home is defined %}
                      {% set subsite_home = page.header.subsite_home %}
                    {% else %}
                      {% set subsite_home = config.system.home.alias|trim('/') %}
                    {% endif %}
                    <div class=\"card col-lg-{{ card_width }}\">
                      <div class=\"card-body\">
                        {% set subsite_image = page.find('/' ~ page.slug ~ '/headerimage').media.images | first %}
                        {% if subsite_image is empty %}
                          {% set subsite_image = page.find('/' ~ page.slug ~ '/' ~ subsite_home).media.images | first %}
                        {% endif %}
                        {% if subsite_image is not empty %}
                          <a href=\"{{ page.url ~ '/' ~ subsite_home }}\"><img class=\"card-img-top\" src=\"{{subsite_image.url}}\" alt=\"Card image cap\"></a>
                        {% endif %}
                        {% if page.header.subsite_list_title %}
                          {% set subsite_title = page.header.subsite_list_title %}
                        {% else %}
                          {% set subsite_title = page.title %}
                        {% endif %}
                        <h2 class=\"card-title\">
                          <a href=\"{{ page.url ~ '/' ~ subsite_home }}\">{{ subsite_title }}</a>
                        </h2>
                        {% if page.header.subsite_list_description %}
                          <p class=\"card-text\">{{ page.header.subsite_list_description }}</p>
                        {% endif %}
                        {{ page.find('/' ~ page.slug).content|raw}}
                      </div>
                    </div>
                  {% elseif page.header.hide_from_subsite_list != true and(page.template == 'subsitegroup') %}
                    <div class=\"col-lg-{{ 12 }}\">
                      <h2> {{ page.header.title}} </h2>
                    </div>
                    {% set subsite_folder = page.slug %}
                    {% set children = page.collection({'items': {'@page.children': page.route}}) %}
                    {% for p in children %}
                      {% if p.header.hide_from_subsite_list != true and (p.template == 'subsite') %}
                        {% if p.header.subsite_home is defined %}
                          {% set subsite_home = p.header.subsite_home %}
                        {% else %}
                          {% set subsite_home = 'home' %}
                        {% endif %}
                        <div class=\"card col-lg-{{ card_width }}\">
                          <div class=\"card-body\">
                            {% set subsite_image = page.find('/' ~ subsite_folder ~ '/' ~ p.slug ~ '/headerimage').media.images | first %}
                            {% if subsite_image is empty %}
                              {% set subsite_image = page.find('/' ~ subsite_folder ~ '/' ~ p.slug ~ '/' ~ subsite_home).media.images | first %}
                            {% endif %}
                            {% if subsite_image is not empty %}
                              <a href=\"{{ p.url ~ '/' ~ subsite_home }}\"><img class=\"card-img-top\" src=\"{{subsite_image.url}}\" alt=\"Card image cap\"></a>
                            {% endif %}
                            {% if p.header.subsite_site_title %}
                              {% set subsite_title = p.header.subsite_site_title %}
                            {% else %}
                              {% set subsite_title = p.title %}
                            {% endif %}
                            <h2 class=\"card-title\">
                              <a href=\"{{ p.url ~ '/' ~ subsite_home }}\">{{ subsite_title }}</a>
                            </h2>
                            {% if p.header.subsite_list_description %}
                              <p class=\"card-text\">{{ p.header.subsite_list_description }}</p>
                            {% endif %}
                            {{ page.find('/' ~ subsite_folder ~ '/' ~ p.slug).content|raw}}
                          </div>
                        </div>
                        {% endif %}
                      {% endfor %}
                    {% endif %}
                {% endfor %}

              </div>

              {# Creative Commons License -  hibbittsdesign.org #}
              {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
              {% endif %}
              {# Git repository edit link -  hibbittsdesign.org #}
              {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                  <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
              {% endif %}

            </div>

            {# Check content display flag - hibbittsdesign.org #}
            {% if not(grav.uri.param('chromeless')or grav.uri.param('embedded'))and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
              <div class=\"col-md-4 blog-sidebar\">
                {% include 'partials/sidebar.html.twig' with {
                  'blog' : page
                } %}
              </div>
            {% endif %}

          </div>
        </div>
      </div>
    {% endblock %}

  {% endembed %}
", "subsitelist.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\subsitelist.html.twig");
    }
}
