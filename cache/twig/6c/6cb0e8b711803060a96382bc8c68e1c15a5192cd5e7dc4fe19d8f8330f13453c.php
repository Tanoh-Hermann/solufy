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

/* modular/lightslider.html.twig */
class __TwigTemplate_1b7343659d971311a0fdd15a39b55e03c4bccdfe6f0ffbb0ba2df64d32f45773 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/lightslider.html.twig"));

        // line 1
        $context["settings"] = [];
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["header"] ?? null), "lightslider", [])) {
            // line 4
            echo "    ";
            $context["settings"] = $this->getAttribute(($context["header"] ?? null), "lightslider", []);
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightslider", [])) {
            // line 8
            echo "    ";
            $context["settings"] = twig_array_merge(($context["settings"] ?? null), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightslider", []));
        }
        // line 10
        echo "
";
        // line 11
        $context["settings"] = twig_array_merge($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.lightslider"], "method"), ($context["settings"] ?? null));
        // line 12
        if ($this->getAttribute(($context["settings"] ?? null), "unique_id", [])) {
            $context["unique_id"] = $this->getAttribute(($context["settings"] ?? null), "unique_id", []);
        } else {
            $context["unique_id"] = ("ls-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(10));
        }
        // line 13
        echo "
<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#";
        // line 16
        echo ($context["unique_id"] ?? null);
        echo "\").lightSlider({
        item: ";
        // line 17
        echo (($this->getAttribute(($context["settings"] ?? null), "item", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "item", []), 1)) : (1));
        echo ",
        slideMove: ";
        // line 18
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMove", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMove", []), 3)) : (3));
        echo ",
        slideMargin: ";
        // line 19
        echo (($this->getAttribute(($context["settings"] ?? null), "slideMargin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "slideMargin", []), 5)) : (5));
        echo ",
        mode: '";
        // line 20
        echo (($this->getAttribute(($context["settings"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "mode", []), "slide")) : ("slide"));
        echo "',
        cssEasing: '";
        // line 21
        echo (($this->getAttribute(($context["settings"] ?? null), "cssEasing", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "cssEasing", []), "ease")) : ("ease"));
        echo "',
        easing: '";
        // line 22
        echo (($this->getAttribute(($context["settings"] ?? null), "easing", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "easing", []), "")) : (""));
        echo "',
        speed: ";
        // line 23
        echo (($this->getAttribute(($context["settings"] ?? null), "speed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "speed", []), 1000)) : (1000));
        echo ",
        auto: ";
        // line 24
        echo (($this->getAttribute(($context["settings"] ?? null), "auto", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "auto", []), "false")) : ("false"));
        echo ",
        loop: ";
        // line 25
        echo (($this->getAttribute(($context["settings"] ?? null), "loop", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "loop", []), "false")) : ("false"));
        echo ",
        pause: ";
        // line 26
        echo (($this->getAttribute(($context["settings"] ?? null), "pause", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pause", []), 2000)) : (2000));
        echo ",
        pauseOnHover: ";
        // line 27
        echo (($this->getAttribute(($context["settings"] ?? null), "pauseOnHover", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pauseOnHover", []), false)) : (false));
        echo ",
        controls: ";
        // line 28
        echo (($this->getAttribute(($context["settings"] ?? null), "controls", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "controls", []), "true")) : ("true"));
        echo ",
        keyPress: ";
        // line 29
        echo (($this->getAttribute(($context["settings"] ?? null), "keyPress", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "keyPress", []), "true")) : ("true"));
        echo ",
        adaptiveHeight: ";
        // line 30
        echo (($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "adaptiveHeight", []), "true")) : ("true"));
        echo ",
        vertical: ";
        // line 31
        echo (($this->getAttribute(($context["settings"] ?? null), "vertical", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "vertical", []), "false")) : ("false"));
        echo ",
        verticalHeight: ";
        // line 32
        echo (($this->getAttribute(($context["settings"] ?? null), "verticalHeight", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "verticalHeight", []), 500)) : (500));
        echo ",
        pager: ";
        // line 33
        echo (($this->getAttribute(($context["settings"] ?? null), "pager", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "pager", []), "true")) : ("true"));
        echo ",
        gallery: ";
        // line 34
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery", []), "false")) : ("false"));
        echo ",
        galleryMargin: ";
        // line 35
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_margin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_margin", []), 5)) : (5));
        echo ",
        thumbMargin: ";
        // line 36
        echo (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_margin", []), 5)) : (5));
        echo ",
        enableTouch: ";
        // line 37
        echo (($this->getAttribute(($context["settings"] ?? null), "enableTouch", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableTouch", []), "true")) : ("true"));
        echo ",
        enableDrag: ";
        // line 38
        echo (($this->getAttribute(($context["settings"] ?? null), "enableDrag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "enableDrag", []), "true")) : ("true"));
        echo ",

    });
  });
</script>


<div id=\"";
        // line 45
        echo ($context["unique_id"] ?? null);
        echo "-wrapper\" class=\"grav-lightslider\">
    ";
        // line 46
        if (($this->getAttribute(($context["settings"] ?? null), "slider_type", []) == "text")) {
            // line 47
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\" style=\"";
            if ($this->getAttribute(($context["settings"] ?? null), "type_text_height", [])) {
                echo "height: ";
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_height", []);
                echo ";";
            }
            echo "\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "<hr />"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
                // line 49
                echo "            ";
                $context["panel_media"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), (("image-" . $this->getAttribute($context["loop"], "index", [])) . ".jpg"), [], "array");
                // line 50
                echo "            ";
                $context["panel_image"] = $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "brightness", [0 => (($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_brightness", []), "-100")) : ("-100"))], "method"), "url", []);
                // line 51
                echo "            ";
                if ((($context["panel_media"] ?? null) && $this->getAttribute(($context["settings"] ?? null), "gallery", []))) {
                    // line 52
                    echo "                ";
                    $context["panel_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute(($context["panel_media"] ?? null), "cropResize", [0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", []), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", []), 100)) : (100))], "method"), "url", [])) . "\"");
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            <li ";
                echo ($context["panel_data_thumb"] ?? null);
                echo ">
                <div class=\"panel-bg\" style=\"
                    ";
                // line 56
                if (($context["panel_image"] ?? null)) {
                    echo "background-image: url(";
                    echo ($context["panel_image"] ?? null);
                    echo ");";
                }
                // line 57
                echo "                    min-height: ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_min_height", []), "auto")) : ("auto"));
                echo ";
                    height: ";
                // line 58
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_height", []), "auto")) : ("auto"));
                echo ";
                    \">
                    <div class=\"panel-padding ";
                // line 60
                echo $this->getAttribute(($context["settings"] ?? null), "type_text_css_class", []);
                echo "\" style=\"
                        padding: ";
                // line 61
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_vertical_padding", []), 0)) : (0));
                echo " ";
                echo (($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "type_text_horizontal_padding", []), 0)) : (0));
                echo "
                        \">
                        ";
                // line 63
                echo $context["panel"];
                echo "
                    </div>
                </div>
            </li>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </ul>
    ";
        } else {
            // line 70
            echo "    <ul id=\"";
            echo ($context["unique_id"] ?? null);
            echo "\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 72
                echo "            ";
                if ($this->getAttribute(($context["settings"] ?? null), "gallery", [])) {
                    // line 73
                    echo "                ";
                    $context["image_data_thumb"] = (("data-thumb=\"" . $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_width", []), 100)) : (100)), 1 => (($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "gallery_thumb_height", []), 100)) : (100))], "method"), "url", [])) . "\"");
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "            <li ";
                echo ($context["image_data_thumb"] ?? null);
                echo ">
                <img src=\"";
                // line 76
                echo $this->getAttribute($context["image"], "url", []);
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </ul>
    ";
        }
        // line 81
        echo "</div>



";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/lightslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 81,  304 => 79,  295 => 76,  290 => 75,  287 => 74,  284 => 73,  281 => 72,  277 => 71,  272 => 70,  268 => 68,  249 => 63,  242 => 61,  238 => 60,  233 => 58,  228 => 57,  222 => 56,  216 => 54,  213 => 53,  210 => 52,  207 => 51,  204 => 50,  201 => 49,  184 => 48,  173 => 47,  171 => 46,  167 => 45,  157 => 38,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  64 => 13,  58 => 12,  56 => 11,  53 => 10,  49 => 8,  47 => 7,  44 => 6,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set settings = {} %}

{% if header.lightslider %}
    {% set settings =  header.lightslider %}
{% endif %}

{% if page.header.lightslider %}
    {% set settings = settings|merge(page.header.lightslider) %}
{%  endif %}

{% set settings = config.get('plugins.lightslider')|merge(settings) %}
{% if settings.unique_id %}{% set unique_id = settings.unique_id %}{% else %}{% set unique_id = 'ls-' ~ random_string(10) %}{% endif %}

<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#{{ unique_id }}\").lightSlider({
        item: {{ settings.item|default(1) }},
        slideMove: {{ settings.slideMove|default(3) }},
        slideMargin: {{ settings.slideMargin|default(5) }},
        mode: '{{ settings.mode|default('slide') }}',
        cssEasing: '{{ settings.cssEasing|default('ease') }}',
        easing: '{{ settings.easing|default('') }}',
        speed: {{ settings.speed|default(1000) }},
        auto: {{ settings.auto|default('false') }},
        loop: {{ settings.loop|default('false') }},
        pause: {{ settings.pause|default(2000) }},
        pauseOnHover: {{ settings.pauseOnHover|default(false) }},
        controls: {{ settings.controls|default('true') }},
        keyPress: {{ settings.keyPress|default('true') }},
        adaptiveHeight: {{ settings.adaptiveHeight|default('true') }},
        vertical: {{ settings.vertical|default('false') }},
        verticalHeight: {{ settings.verticalHeight|default(500) }},
        pager: {{ settings.pager|default('true') }},
        gallery: {{ settings.gallery|default('false') }},
        galleryMargin: {{ settings.gallery_margin|default(5) }},
        thumbMargin: {{ settings.gallery_thumb_margin|default(5) }},
        enableTouch: {{ settings.enableTouch|default('true') }},
        enableDrag: {{ settings.enableDrag|default('true') }},

    });
  });
</script>


<div id=\"{{ unique_id }}-wrapper\" class=\"grav-lightslider\">
    {% if settings.slider_type == 'text' %}
    <ul id=\"{{ unique_id }}\" style=\"{% if settings.type_text_height %}height: {{ settings.type_text_height }};{% endif %}\">
        {% for panel in page.content|split('<hr />') %}
            {% set panel_media = page.media['image-'~loop.index~'.jpg'] %}
            {% set panel_image = panel_media.brightness(settings.type_text_brightness|default('-100')).url %}
            {% if panel_media and settings.gallery %}
                {% set panel_data_thumb = 'data-thumb=\\\"'~panel_media.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ panel_data_thumb|raw }}>
                <div class=\"panel-bg\" style=\"
                    {% if panel_image %}background-image: url({{ panel_image }});{% endif %}
                    min-height: {{ settings.type_text_min_height|default('auto') }};
                    height: {{ settings.type_text_height|default('auto') }};
                    \">
                    <div class=\"panel-padding {{ settings.type_text_css_class }}\" style=\"
                        padding: {{ settings.type_text_vertical_padding|default(0) }} {{ settings.type_text_horizontal_padding|default(0) }}
                        \">
                        {{ panel|raw }}
                    </div>
                </div>
            </li>
        {% endfor %}
    </ul>
    {% else %}
    <ul id=\"{{ unique_id }}\">
        {% for image in page.media.images %}
            {% if settings.gallery %}
                {% set image_data_thumb = 'data-thumb=\\\"'~image.cropResize(settings.gallery_thumb_width|default(100),settings.gallery_thumb_height|default(100)).url~'\\\"' %}
            {% endif %}
            <li {{ image_data_thumb }}>
                <img src=\"{{ image.url }}\" />
            </li>
        {% endfor %}
    </ul>
    {% endif %}
</div>



", "modular/lightslider.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\lightslider\\templates\\modular\\lightslider.html.twig");
    }
}
