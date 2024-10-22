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

/* modular/item.html.twig */
class __TwigTemplate_1c92d3075c04bcd8e29a5e8844055913ad06ed562403c421b00f47e90f0149b7 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/item.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 2
            echo "<div class=\"list-item-modular\">

    ";
            // line 4
            $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
            // line 5
            echo "    ";
            // line 6
            echo "    ";
            $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 1200);
            // line 7
            echo "    ";
            $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 400);
            // line 8
            echo "    ";
            $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
            // line 9
            echo "
    <div class=\"list-blog-header\">

      ";
            // line 12
            if (($context["big_header"] ?? null)) {
                // line 13
                echo "        ";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 1200, 1 => 600], "method"), "html", [0 => "", 1 => "blog-header-image"], "method");
                echo "
      ";
            } else {
                // line 15
                echo "        ";
                if (($context["header_image"] ?? null)) {
                    // line 16
                    echo "          ";
                    if (($context["header_image_file"] ?? null)) {
                        // line 17
                        echo "            ";
                        $context["image_parts"] = pathinfo(($context["header_image_file"] ?? null));
                        // line 18
                        echo "            ";
                        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", []);
                        // line 19
                        echo "            ";
                        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", []) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", [])], "method")));
                        // line 20
                        echo "            ";
                        $context["header_image_media"] = $this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", []), ($context["image_basename"] ?? null), [], "array");
                        // line 21
                        echo "            ";
                        if ( !($context["header_image_media"] ?? null)) {
                            // line 22
                            echo "              ";
                            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ($context["header_image_file"] ?? null)], "method"), "media", []), "images", []));
                            // line 23
                            echo "            ";
                        }
                        // line 24
                        echo "          ";
                    } else {
                        // line 25
                        echo "            ";
                        $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                        // line 26
                        echo "          ";
                    }
                    // line 27
                    echo "
          ";
                    // line 29
                    echo "          ";
                    if (($context["header_image_media"] ?? null)) {
                        // line 30
                        echo "            ";
                        $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_alt_text", []);
                        // line 31
                        echo "            ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", [])) {
                            // line 32
                            echo "              ";
                            $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", []);
                            // line 33
                            echo "              ";
                            $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_creditlink", []);
                            // line 34
                            echo "            ";
                        } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", [])) {
                            // line 35
                            echo "              ";
                            $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", []);
                            // line 36
                            echo "              ";
                            $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_creditlink", []);
                            // line 37
                            echo "              ";
                            $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_alt_text", []);
                            // line 38
                            echo "            ";
                        }
                        // line 39
                        echo "            ";
                        if (($context["image_credit"] ?? null)) {
                            // line 40
                            echo "              <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
                ";
                            // line 41
                            if (($context["image_creditlink"] ?? null)) {
                                // line 42
                                echo "                  Image: <a class=\"newwindow external-link\" href=\"";
                                echo ($context["image_creditlink"] ?? null);
                                echo "\">
                  ";
                                // line 43
                                echo ($context["image_credit"] ?? null);
                                echo "</a></span>
                  <img src=\"";
                                // line 44
                                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                                echo "\" alt=\"";
                                echo ($context["image_alt_text"] ?? null);
                                echo "\"/>
                ";
                            } else {
                                // line 46
                                echo "                  Image: ";
                                echo ($context["image_credit"] ?? null);
                                echo "</span>
                  <img src=\"";
                                // line 47
                                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                                echo "\" alt=\"";
                                echo ($context["image_alt_text"] ?? null);
                                echo "\"/>
                ";
                            }
                            // line 49
                            echo "              </div>
            ";
                        } else {
                            // line 51
                            echo "              <img src=\"";
                            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                            echo "\" alt=\"";
                            echo ($context["image_alt_text"] ?? null);
                            echo "\"/>
            ";
                        }
                        // line 53
                        echo "          ";
                    }
                    // line 54
                    echo "
        ";
                }
                // line 56
                echo "      ";
            }
            // line 57
            echo "
    </div>

    <div class=\"modularitem\">
      ";
            // line 62
            echo "      ";
            // line 63
            echo "      <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
    </div>
</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  198 => 62,  192 => 57,  189 => 56,  185 => 54,  182 => 53,  174 => 51,  170 => 49,  163 => 47,  158 => 46,  151 => 44,  147 => 43,  142 => 42,  140 => 41,  137 => 40,  134 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  59 => 13,  57 => 12,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  41 => 5,  39 => 4,  35 => 2,  33 => 1,);
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
<div class=\"list-item-modular\">

    {% set header_image = page.header.header_image|defined(true) %}
    {# changed default image width and height - hibbittsdesign.org #}
    {% set header_image_width  = page.header.header_image_width|defined(1200) %}
    {% set header_image_height = page.header.header_image_height|defined(400) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

      {% if big_header %}
        {{ page.media.images|first.cropResize(1200,600).html('','blog-header-image')|raw  }}
      {% else %}
        {% if header_image %}
          {% if header_image_file %}
            {% set image_parts = pathinfo(header_image_file) %}
            {% set image_basename = image_parts.basename %}
            {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
            {% set header_image_media = image_page.media[image_basename] %}
            {% if not header_image_media %}
              {% set header_image_media = page.find(header_image_file).media.images|first %}
            {% endif %}
          {% else %}
            {% set header_image_media = page.media.images|first %}
          {% endif %}

          {# support image credit tag with optional image meta file - hibbittsdesign.org #}
          {% if header_image_media %}
            {% set image_alt_text = page.header.header_image_alt_text %}
            {% if page.header.header_image_credit %}
              {% set image_credit = page.header.header_image_credit %}
              {% set image_creditlink = page.header.header_image_creditlink %}
            {% elseif header_image_media.meta.header_image_credit %}
              {% set image_credit = header_image_media.meta.header_image_credit %}
              {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
              {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
            {% endif %}
            {% if image_credit %}
              <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
                {% if image_creditlink %}
                  Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
                  {{ image_credit }}</a></span>
                  <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url|raw }}\" alt=\"{{ image_alt_text }}\"/>
                {% else %}
                  Image: {{ image_credit }}</span>
                  <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url|raw }}\" alt=\"{{ image_alt_text }}\"/>
                {% endif %}
              </div>
            {% else %}
              <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url|raw }}\" alt=\"{{ image_alt_text }}\"/>
            {% endif %}
          {% endif %}

        {% endif %}
      {% endif %}

    </div>

    <div class=\"modularitem\">
      {# diable regular post handling - hibbittsdesign.org #}
      {# <h3>{{ page.title }}</h3> #}
      <p>{{ page.content|raw }}</p>
    </div>
</div>
{% endif %}
", "modular/item.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\modular\\item.html.twig");
    }
}
