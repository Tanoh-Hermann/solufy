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

/* embedlycard.html.twig */
class __TwigTemplate_7c1a9bc98428cc2b9b828d084b2ced8240fc479d9f08ba1b08e270f4c1ddd548 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "embedlycard.html.twig"));

        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 3
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_page_title", [], "any", true, true) &&  !(isset($context["displaypagetitle"]) || array_key_exists("displaypagetitle", $context)))) {
                // line 4
                $context["displaypagetitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_page_title", []);
            }
            // line 6
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_embedly_card_title", [], "any", true, true) &&  !(isset($context["displaycontenttitle"]) || array_key_exists("displaycontenttitle", $context)))) {
                // line 7
                $context["displaycontenttitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_embedly_card_title", []);
            }
            // line 9
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "display_page_title_link", [], "any", true, true) &&  !(isset($context["displaypagetitlelink"]) || array_key_exists("displaypagetitlelink", $context)))) {
                // line 10
                $context["displaypagetitlelink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "display_page_title_link", []);
            }
            // line 12
            $this->displayBlock('content', $context, $blocks);
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "<div class=\"embedly-card-wrapper\">
<p>
";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
        // line 16
        if ((isset($context["displaypagetitle"]) || array_key_exists("displaypagetitle", $context))) {
            // line 17
            if (($context["displaypagetitle"] ?? null)) {
                // line 18
                if (($context["displaypagetitlelink"] ?? null)) {
                    // line 19
                    echo "<a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_url", []);
                    echo "\">";
                    echo $this->getAttribute(($context["page"] ?? null), "title", []);
                    echo "</a><br>
";
                } else {
                    // line 21
                    echo "<strong>";
                    echo $this->getAttribute(($context["page"] ?? null), "title", []);
                    echo "</strong><br>
";
                }
            }
        }
        // line 25
        echo "<a class=\"embedly-card\" data-card-controls=\"0\" data-card-align=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_alignment", []);
        echo "\" href=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_url", []);
        echo "\" >";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "embedly_card_title", []);
        echo "</a>
<script async src=\"//cdn.embedly.com/widgets/platform.js\" charset=\"UTF-8\"></script>
</p>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "embedlycard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  86 => 21,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  68 => 15,  64 => 13,  51 => 12,  48 => 10,  46 => 9,  43 => 7,  41 => 6,  38 => 4,  36 => 3,  34 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# no tab indents for Page Inject Plugin compatibility - hibbittsdesign.org #}
{% if page.header.published %}
{% if page.header.display_page_title is defined and not (displaypagetitle is defined)%}
{% set displaypagetitle = page.header.display_page_title %}
{% endif %}
{% if page.header.display_embedly_card_title is defined and not (displaycontenttitle is defined)%}
{% set displaycontenttitle = page.header.display_embedly_card_title %}
{% endif %}
{% if page.header.display_page_title_link is defined and not (displaypagetitlelink is defined)%}
{% set displaypagetitlelink = page.header.display_page_title_link %}
{% endif %}
{% block content %}
<div class=\"embedly-card-wrapper\">
<p>
{{page.content|raw}}
{% if displaypagetitle is defined %}
{% if displaypagetitle %}
{% if displaypagetitlelink %}
<a href=\"{{ page.header.embedly_card_url}}\">{{ page.title }}</a><br>
{% else %}
<strong>{{ page.title }}</strong><br>
{% endif %}
{% endif %}
{% endif %}
<a class=\"embedly-card\" data-card-controls=\"0\" data-card-align=\"{{page.header.embedly_card_alignment}}\" href=\"{{ page.header.embedly_card_url}}\" >{{ page.header.embedly_card_title }}</a>
<script async src=\"//cdn.embedly.com/widgets/platform.js\" charset=\"UTF-8\"></script>
</p>
</div>
{% endblock %}
{% endif %}
", "embedlycard.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\embedlycard.html.twig");
    }
}
