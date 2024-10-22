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

/* partials/presentation_iframe.html.twig */
class __TwigTemplate_3cb1eb89721550d2c674f95b468a9bcb3df6de4c4109718e496511a1a940f963 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/presentation_iframe.html.twig"));

        // line 1
        echo "<p>
";
        // line 2
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "header", []), "hide_title", [])) {
            echo "<a class=\"newwindow external-link\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "/";
            echo ($context["src"] ?? null);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "title", []);
            echo "</a>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "header", []), "display_custom_links", [])) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "header", []), "custom_links", []));
                foreach ($context['_seq'] as $context["_key"] => $context["litem"]) {
                    echo " | <a class=\"newwindow external-link\" href=\"";
                    echo $this->getAttribute($context["litem"], "url", []);
                    echo "\">";
                    if ($this->getAttribute($context["litem"], "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($context["litem"], "icon", []);
                        echo "\"></i>";
                        echo $this->getAttribute($context["litem"], "text", []);
                    } else {
                        echo $this->getAttribute($context["litem"], "text", []);
                    }
                    echo "</a>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['litem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") != "none") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "header", []), "hide_git_sync_repo_link", []))) {
                $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/presentation_iframe.html.twig", 2)->display(twig_array_merge($context, ["presentationslides" => true, "presentationpagepath" => twig_replace_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["src"] ?? null))], "method"), "filepathclean", []), ["user/" => "/"])]));
            }
        }
        // line 3
        echo "<div class=\"embed-responsive embed-responsive-4by3\">
  <iframe src=\"";
        // line 4
        echo ($context["base_url"] ?? null);
        echo "/";
        echo ($context["src"] ?? null);
        echo "\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" class=\"";
        echo ($context["class"] ?? null);
        echo "\"></iframe>
</div>
</p>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/presentation_iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 4,  70 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>
{% if not page.find('/' ~ src ).header.hide_title %}<a class=\"newwindow external-link\" href=\"{{ base_url }}/{{ src }}\">{{ page.find('/' ~ src ).title }}</a>{% if page.find('/' ~ src ).header.display_custom_links %}{% for litem in page.find('/' ~ src ).header.custom_links %} | <a class=\"newwindow external-link\" href=\"{{ litem.url }}\">{% if litem.icon %}<i class=\"fa fa-{{ litem.icon }}\"></i>{{ litem.text }}{% else %}{{ litem.text }}{% endif %}</a>{% endfor %}{% endif %}{% if (theme_var('display_of_git_sync_repo_link') != 'none' and not page.find('/' ~ src ).header.hide_git_sync_repo_link) %}{% include 'partials/git_sync_repo_link.html.twig' with {presentationslides: true, presentationpagepath: page.find('/' ~ src ).filepathclean | replace({'user/': '/'})} %}{% endif %}{% endif %}
<div class=\"embed-responsive embed-responsive-4by3\">
  <iframe src=\"{{ base_url }}/{{ src }}\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" class=\"{{ class }}\"></iframe>
</div>
</p>
", "partials/presentation_iframe.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\partials\\presentation_iframe.html.twig");
    }
}
