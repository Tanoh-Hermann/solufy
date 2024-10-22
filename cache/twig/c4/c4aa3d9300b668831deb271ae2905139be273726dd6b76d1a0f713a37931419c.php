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

/* blog.html.twig */
class __TwigTemplate_0e6f768aa7a200c0bfa9f886e354e9fe19e021e7bda81a8b42fe3fb6dd22db94 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 8
            echo "  ";
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 10
            echo "  ";
            $context["show_sidebar"] = true;
        }
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 13, "2071614410")->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
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
  {% set header_image_media = page.media.images|first %}
{% endif %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

    {% block content %}

      {# check content display flag - hibbittsdesign.org #}
      {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
        {# check for hero image - hibbittsdesign.org #}
        {% if header_image_media is not empty %}
          {% include 'partials/hero.html.twig' %}
        {% endif %}
      {% endif %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                      {# check content display flag - hibbittsdesign.org #}
                      {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                        <div class=\"col-md-8 blog-main\">
                      {% else %}
                        <div class=\"col-md-12 blog-main\">
                      {% endif %}

                        {% if not (page.header.hide_page_title) and not (grav.uri.param('hidepagetitle')) %}
                          <h1>{{page.title}}</h1>
                        {% else %}
                          <h1 class=\"hidden\">{{page.title}}</h1>
                        {% endif %}

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {# Added reminders and preparations blocks and content check - hibbittsdesign.org #}
                        {% if page.collection('modular_content') is not empty %}
                          {% for module in page.collection('modular_content') %}
                            {% if (module.content|striptags)|trim %}
                              <p>{{ module.content|raw }}</p>
                            {% endif %}
                          {% endfor %}
                          <hr>
                        {% endif %}

                        {# Added display of featured post - hibbittsdesign.org #}
                        {% for post in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                          {% if (post.header.hide_from_post_list != true) and (post.parent.slug == page.slug) %}
                            {% include 'partials/blog_item.html.twig' with {'page':post, 'truncate':true} %}
                          {% endif %}
                        {% endfor %}

                        {% for child in collection %}
                          {# Added check for hiding post in list - hibbittsdesign.org #}
                          {% if child.header.hide_from_post_list != true %}
                            {# Added check for not repeating feature post - hibbittsdesign.org #}
                            {% if \"featured\" not in child.taxonomy['tag'] %}
                              {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
                            {% endif %}
                          {% endif %}
                        {% endfor %}

                        {# Creative Commons License -  hibbittsdesign.org #}
                        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                          <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                        {% endif %}

                        {# Git repository edit link - hibbittsdesign.org #}
                        {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                          <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                        {% endif %}

                    </div>

                    {# Check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-4 blog-sidebar\">
                          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
                      </div>
                    {% endif %}

                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        <div class=\"container pagination-container\">
          <div class=\"row\">
              {# check content display flag - hibbittsdesign.org #}
              {% if (not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not (config.site.hidesidebaronblogpages.enabled)) and page.header.show_sidebar %}
                <div class=\"col-md-8\">
              {% else %}
                <div class=\"col-md-12\">
              {% endif %}
                  {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
              </div>
          </div>
        </div>
        {% endif %}
    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_0e6f768aa7a200c0bfa9f886e354e9fe19e021e7bda81a8b42fe3fb6dd22db94___2071614410 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 15
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 13
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
      ";
        // line 20
        echo "      ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            if ( !twig_test_empty(($context["header_image_media"] ?? null))) {
                // line 23
                echo "          ";
                $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 23)->display($context);
                // line 24
                echo "        ";
            }
            // line 25
            echo "      ";
        }
        // line 26
        echo "
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                      ";
        // line 31
        echo "                      ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 32
            echo "                        <div class=\"col-md-8 blog-main\">
                      ";
        } else {
            // line 34
            echo "                        <div class=\"col-md-12 blog-main\">
                      ";
        }
        // line 36
        echo "
                        ";
        // line 37
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 38
            echo "                          <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
                        ";
        } else {
            // line 40
            echo "                          <h1 class=\"hidden\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
                        ";
        }
        // line 42
        echo "
                        ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 44
            echo "                            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 44)->display($context);
            // line 45
            echo "                        ";
        }
        // line 46
        echo "
                        ";
        // line 48
        echo "                        ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"))) {
            // line 49
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 50
                echo "                            ";
                if (twig_trim_filter(strip_tags($this->getAttribute($context["module"], "content", [])))) {
                    // line 51
                    echo "                              <p>";
                    echo $this->getAttribute($context["module"], "content", []);
                    echo "</p>
                            ";
                }
                // line 53
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                          <hr>
                        ";
        }
        // line 56
        echo "
                        ";
        // line 58
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "                          ";
            if ((($this->getAttribute($this->getAttribute($context["post"], "header", []), "hide_from_post_list", []) != true) && ($this->getAttribute($this->getAttribute($context["post"], "parent", []), "slug", []) == $this->getAttribute(($context["page"] ?? null), "slug", [])))) {
                // line 60
                echo "                            ";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 60)->display(twig_array_merge($context, ["page" => $context["post"], "truncate" => true]));
                // line 61
                echo "                          ";
            }
            // line 62
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "                          ";
            // line 66
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["child"], "header", []), "hide_from_post_list", []) != true)) {
                // line 67
                echo "                            ";
                // line 68
                echo "                            ";
                if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "tag", [], "array"))) {
                    // line 69
                    echo "                              ";
                    $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 69)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true]));
                    // line 70
                    echo "                            ";
                }
                // line 71
                echo "                          ";
            }
            // line 72
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                        ";
        // line 75
        echo "                        ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])))) {
            // line 76
            echo "                          <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 76)->display($context);
            echo "</p>
                        ";
        }
        // line 78
        echo "
                        ";
        // line 80
        echo "                        ";
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "page")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
            // line 81
            echo "                          <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 81)->display($context);
            echo "</p>
                        ";
        }
        // line 83
        echo "
                    </div>

                    ";
        // line 87
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 88
            echo "                      <div class=\"col-md-4 blog-sidebar\">
                          ";
            // line 89
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 89)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
            // line 90
            echo "                      </div>
                    ";
        }
        // line 92
        echo "
                </div>
            </div>
        </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 98
    public function block_pagination($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        // line 99
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 100
            echo "        <div class=\"container pagination-container\">
          <div class=\"row\">
              ";
            // line 103
            echo "              ";
            if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "hidesidebaronblogpages", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []))) {
                // line 104
                echo "                <div class=\"col-md-8\">
              ";
            } else {
                // line 106
                echo "                <div class=\"col-md-12\">
              ";
            }
            // line 108
            echo "                  ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 108)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 109
            echo "              </div>
          </div>
        </div>
        ";
        }
        // line 113
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 113,  521 => 109,  518 => 108,  514 => 106,  510 => 104,  507 => 103,  503 => 100,  500 => 99,  494 => 98,  483 => 92,  479 => 90,  477 => 89,  474 => 88,  471 => 87,  466 => 83,  460 => 81,  457 => 80,  454 => 78,  448 => 76,  445 => 75,  442 => 73,  428 => 72,  425 => 71,  422 => 70,  419 => 69,  416 => 68,  414 => 67,  411 => 66,  409 => 65,  392 => 64,  389 => 63,  375 => 62,  372 => 61,  369 => 60,  366 => 59,  348 => 58,  345 => 56,  341 => 54,  335 => 53,  329 => 51,  326 => 50,  321 => 49,  318 => 48,  315 => 46,  312 => 45,  309 => 44,  307 => 43,  304 => 42,  298 => 40,  292 => 38,  290 => 37,  287 => 36,  283 => 34,  279 => 32,  276 => 31,  270 => 26,  267 => 25,  264 => 24,  261 => 23,  258 => 22,  256 => 21,  253 => 20,  250 => 18,  244 => 17,  236 => 13,  234 => 15,  59 => 13,  56 => 12,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
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
  {% set header_image_media = page.media.images|first %}
{% endif %}

{% if page.header.show_sidebar is defined %}
  {% set show_sidebar = page.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}

    {% block content %}

      {# check content display flag - hibbittsdesign.org #}
      {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
        {# check for hero image - hibbittsdesign.org #}
        {% if header_image_media is not empty %}
          {% include 'partials/hero.html.twig' %}
        {% endif %}
      {% endif %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                      {# check content display flag - hibbittsdesign.org #}
                      {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                        <div class=\"col-md-8 blog-main\">
                      {% else %}
                        <div class=\"col-md-12 blog-main\">
                      {% endif %}

                        {% if not (page.header.hide_page_title) and not (grav.uri.param('hidepagetitle')) %}
                          <h1>{{page.title}}</h1>
                        {% else %}
                          <h1 class=\"hidden\">{{page.title}}</h1>
                        {% endif %}

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {# Added reminders and preparations blocks and content check - hibbittsdesign.org #}
                        {% if page.collection('modular_content') is not empty %}
                          {% for module in page.collection('modular_content') %}
                            {% if (module.content|striptags)|trim %}
                              <p>{{ module.content|raw }}</p>
                            {% endif %}
                          {% endfor %}
                          <hr>
                        {% endif %}

                        {# Added display of featured post - hibbittsdesign.org #}
                        {% for post in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                          {% if (post.header.hide_from_post_list != true) and (post.parent.slug == page.slug) %}
                            {% include 'partials/blog_item.html.twig' with {'page':post, 'truncate':true} %}
                          {% endif %}
                        {% endfor %}

                        {% for child in collection %}
                          {# Added check for hiding post in list - hibbittsdesign.org #}
                          {% if child.header.hide_from_post_list != true %}
                            {# Added check for not repeating feature post - hibbittsdesign.org #}
                            {% if \"featured\" not in child.taxonomy['tag'] %}
                              {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
                            {% endif %}
                          {% endif %}
                        {% endfor %}

                        {# Creative Commons License -  hibbittsdesign.org #}
                        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                          <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                        {% endif %}

                        {# Git repository edit link - hibbittsdesign.org #}
                        {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                          <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                        {% endif %}

                    </div>

                    {# Check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-4 blog-sidebar\">
                          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
                      </div>
                    {% endif %}

                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        <div class=\"container pagination-container\">
          <div class=\"row\">
              {# check content display flag - hibbittsdesign.org #}
              {% if (not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not (config.site.hidesidebaronblogpages.enabled)) and page.header.show_sidebar %}
                <div class=\"col-md-8\">
              {% else %}
                <div class=\"col-md-12\">
              {% endif %}
                  {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
              </div>
          </div>
        </div>
        {% endif %}
    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\blog.html.twig");
    }
}
