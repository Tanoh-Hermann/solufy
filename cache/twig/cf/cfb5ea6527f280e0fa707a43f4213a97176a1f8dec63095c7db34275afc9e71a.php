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

/* partials/base.html.twig */
class __TwigTemplate_a85abb92223f4d732a279b312c61cf7909c8799a41a9f28178a3ffb90e3453a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/base.html.twig"));

        // line 1
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 2
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 3
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 4
        echo "
";
        // line 6
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 7
            echo "  ";
            if (($context["firstfolderofpath"] ?? null)) {
                // line 8
                echo "    ";
                $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
                // line 9
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "title", []);
                // line 10
                echo "  ";
            } else {
                // line 11
                echo "    ";
                $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
                // line 12
                echo "  ";
            }
            // line 13
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 14
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 15
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 16
                echo "  ";
            }
        } elseif ((($this->getAttribute($this->getAttribute(        // line 17
($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 18
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
            // line 19
            echo "  ";
            if (twig_test_empty(($context["favicon"] ?? null))) {
                // line 20
                echo "    ";
                $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
                // line 21
                echo "  ";
            }
            // line 22
            echo "  ";
            $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "course_site_title", []);
            // line 23
            echo "  ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 24
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "subsite_site_title", []);
                // line 25
                echo "  ";
            }
            // line 26
            echo "  ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 27
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "title", []);
                // line 28
                echo "  ";
            }
            // line 29
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 30
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 31
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 32
                echo "  ";
            }
        } else {
            // line 34
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/favicon"], "method"), "media", []), "images", []));
            // line 35
            echo "  ";
            $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            // line 36
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        }
        // line 38
        echo "
";
        // line 39
        if ((($context["favicon"] ?? null) == ($context["empty"] ?? null))) {
            // line 40
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/favicon"], "method"), "media", []), "images", []));
            // line 41
            echo "    ";
            if ((($context["favicon"] ?? null) == ($context["empty"] ?? null))) {
                // line 42
                echo "      ";
                $context["favicon_url"] = "theme://images/favicon.png";
                // line 43
                echo "    ";
            } else {
                // line 44
                echo "      ";
                $context["favicon_url"] = $this->getAttribute(($context["favicon"] ?? null), "url", []);
                // line 45
                echo "    ";
            }
        } else {
            // line 47
            echo "  ";
            $context["favicon_url"] = $this->getAttribute(($context["favicon"] ?? null), "url", []);
        }
        // line 49
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 51
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 53
        $this->displayBlock('head', $context, $blocks);
        // line 99
        echo "    </head>

    <body class=\"";
        // line 101
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

        ";
        // line 104
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 105
            echo "
          ";
            // line 106
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
                // line 107
                echo "              ";
                $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 107)->display($context);
                // line 108
                echo "          ";
            }
            // line 109
            echo "
          ";
            // line 110
            $this->displayBlock('header_navigation', $context, $blocks);
            // line 113
            echo "        ";
        }
        // line 114
        echo "
        ";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 119
            echo "          <div class=\"footer\">
              <div class=\"container\">
                ";
            // line 121
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "header", []), "footer_scroll", [])) {
                // line 122
                echo "                  ";
                // line 123
                echo "                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                ";
            }
            // line 129
            echo "                ";
            // line 130
            echo "                <div class=\"text-muted\">
                  ";
            // line 131
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "footer")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "footer") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
                // line 132
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 132)->display($context);
                echo "</p>
                  ";
            }
            // line 134
            echo "                  ";
            if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_edit_theme_link_location") == "footer")) {
                // line 135
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_theme_link.html.twig", "partials/base.html.twig", 135)->display($context);
                echo "</p>
                  ";
            }
            // line 137
            echo "                  ";
            if (($context["footer_content"] ?? null)) {
                // line 138
                echo "                    ";
                echo ($context["footer_content"] ?? null);
                echo "
                  ";
            }
            // line 140
            echo "                  </div>
              </div>
          </div>
        ";
        }
        // line 144
        echo "
        ";
        // line 145
        $this->displayBlock('bottom', $context, $blocks);
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 150)->display($context);
        // line 151
        echo "
    </body>
</html>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 53
    public function block_head($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 54
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        ";
        // line 58
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "
        <title>";
        // line 60
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo ($context["site_title"] ?? null);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 61
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["favicon_url"] ?? null), true);
        echo "\" />

        ";
        // line 63
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('assets', $context, $blocks);
        // line 97
        echo "
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 63
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 64
        echo "            ";
        // line 65
        echo "            ";
        if (($this->getAttribute(($context["theme"] ?? null), "theme_stylesheet", [], "any", true, true) &&  !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("theme_stylesheet")))) {
            // line 66
            echo "              ";
            if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("theme_stylesheet") != "default")) {
                // line 67
                echo "                ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/bootswatch/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("theme_stylesheet")) . "/bootstrap.min.css"), 1 => 100], "method");
                // line 68
                echo "              ";
            } else {
                // line 69
                echo "                ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap/bootstrap.min.css"], "method");
                // line 70
                echo "              ";
            }
            // line 71
            echo "            ";
        } else {
            // line 72
            echo "              ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap/bootstrap.min.css"], "method");
            // line 73
            echo "            ";
        }
        // line 74
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 75
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css"], "method");
        // line 76
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/theme.css"], "method");
        // line 77
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 78
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 82
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr-custom.js", 1 => 100], "method");
        // line 83
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 84
        echo "            ";
        // line 85
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/my.js", 1 => 99], "method");
        // line 86
        echo "
            ";
        // line 87
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 88
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 89
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 90
            echo "            ";
        }
        // line 91
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 93
    public function block_assets_deferred($context, array $blocks = array())
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "assets"));

        // line 94
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 95
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 101
    public function block_body_classes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_classes"));

        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            echo " chromeless";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 110
    public function block_header_navigation($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navigation"));

        // line 111
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 111)->display($context);
        // line 112
        echo "          ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 115
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 116
    public function block_pagination($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 145
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 146
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 146,  523 => 145,  512 => 116,  501 => 115,  494 => 112,  491 => 111,  485 => 110,  470 => 101,  460 => 95,  455 => 94,  449 => 93,  437 => 91,  434 => 90,  431 => 89,  428 => 88,  426 => 87,  423 => 86,  420 => 85,  418 => 84,  415 => 83,  412 => 82,  409 => 81,  403 => 80,  396 => 78,  393 => 77,  390 => 76,  387 => 75,  384 => 74,  381 => 73,  378 => 72,  375 => 71,  372 => 70,  369 => 69,  366 => 68,  363 => 67,  360 => 66,  357 => 65,  355 => 64,  349 => 63,  341 => 97,  339 => 93,  336 => 92,  334 => 80,  331 => 79,  329 => 63,  324 => 61,  316 => 60,  313 => 59,  311 => 58,  305 => 54,  299 => 53,  288 => 151,  285 => 150,  282 => 148,  280 => 145,  277 => 144,  271 => 140,  265 => 138,  262 => 137,  256 => 135,  253 => 134,  247 => 132,  245 => 131,  242 => 130,  240 => 129,  232 => 123,  230 => 122,  228 => 121,  224 => 119,  222 => 118,  219 => 117,  216 => 116,  214 => 115,  211 => 114,  208 => 113,  206 => 110,  203 => 109,  200 => 108,  197 => 107,  195 => 106,  192 => 105,  189 => 104,  184 => 101,  180 => 99,  178 => 53,  173 => 51,  169 => 49,  165 => 47,  161 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  146 => 40,  144 => 39,  141 => 38,  137 => 36,  134 => 35,  131 => 34,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set arrayofpath = uri.path|split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{# MultiCourse hub compatibility - hibbittsdesign.org #}
{% if page.find('/' ~ firstfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath).template == 'subsite' %}
  {% if firstfolderofpath %}
    {% set favicon = page.find('/' ~ firstfolderofpath ~ '/favicon' ).media.images|first %}
    {% set site_title = page.find('/' ~ firstfolderofpath ).title %}
  {% else %}
    {% set site_title = site.title|e('html') %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% elseif page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'course' or  page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'subsite' %}
  {% set favicon = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/favicon' ).media.images|first %}
  {% if favicon is empty %}
    {% set favicon = page.find('/' ~ firstfolderofpath ~ '/favicon' ).media.images|first %}
  {% endif %}
  {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.course_site_title %}
  {% if site_title is empty %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.subsite_site_title %}
  {% endif %}
  {% if site_title is empty %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).title %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% else %}
  {% set favicon = page.find('/favicon' ).media.images|first %}
  {% set site_title = site.title|e('html') %}
  {% set footer_content = page.find('/footer').content %}
{% endif %}

{% if favicon == empty %}
  {% set favicon = page.find('/favicon' ).media.images|first %}
    {% if favicon == empty %}
      {% set favicon_url = 'theme://images/favicon.png' %}
    {% else %}
      {% set favicon_url = favicon.url %}
    {% endif %}
{% else %}
  {% set favicon_url = favicon.url %}
{% endif %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        {% include 'partials/metadata.html.twig' %}

        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site_title }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url(favicon_url,true) }}\" />

        {% block stylesheets %}
            {# load theme.css and custom.css files - hibbittsdesign.org #}
            {% if theme.theme_stylesheet is defined and theme_var('theme_stylesheet') is not empty %}
              {% if theme_var('theme_stylesheet') != 'default' %}
                {% do assets.addCss(\"theme://css/bootswatch/#{ theme_var('theme_stylesheet') }/bootstrap.min.css\", 100) %}
              {% else %}
                {% do assets.addCss('theme://css/bootstrap/bootstrap.min.css') %}
              {% endif %}
            {% else %}
              {% do assets.addCss('theme://css/bootstrap/bootstrap.min.css') %}
            {% endif %}
            {% do assets.add('theme://css/font-awesome.min.css') %}
            {% do assets.add('theme://css-compiled/theme.css') %}
            {% do assets.addCss('theme://css/theme.css') %}
            {% do assets.addCss('theme://css/custom.css') %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery', 101) %}
            {% do assets.add('theme://js/modernizr-custom.js', 100) %}
            {% do assets.add('theme://js/site.js', {group:'bottom'}) %}
            {# load custom js - hibbittsdesign.org #}
            {% do assets.addJs('theme://js/my.js', 99) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% if (grav.uri.param('chromeless') or grav.uri.param('embedded')) or (theme_var('chromeless.enabled')) %} chromeless{% endif %}{% endblock %}\">

        {# check content display flag - hibbittsdesign.org #}
        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}

          {% if config.plugins.langswitcher.enabled %}
              {% include 'partials/langswitcher.html.twig' %}
          {% endif %}

          {% block header_navigation %}
              {% include 'partials/navigation.html.twig' %}
          {% endblock %}
        {% endif %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
          <div class=\"footer\">
              <div class=\"container\">
                {% if page.find('/footer').header.footer_scroll %}
                  {# added top of page navigation element - hibbittsdesign.org #}
                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                {% endif %}
                {# use footer folder page for content - hibbittsdesign.org #}
                <div class=\"text-muted\">
                  {% if (page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'footer' ) or (( theme_var('display_of_git_sync_repo_link') == 'footer' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                    <p>{% include 'partials/git_sync_repo_link.html.twig' %}</p>
                  {% endif %}
                  {% if theme_var('git_sync_edit_theme_link_location') == 'footer' %}
                    <p>{% include 'partials/git_sync_theme_link.html.twig' %}</p>
                  {% endif %}
                  {% if footer_content %}
                    {{ footer_content|raw }}
                  {% endif %}
                  </div>
              </div>
          </div>
        {% endif %}

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}

        {# added global scripts - hibbittsdesign.org #}
        {% include 'partials/scripts.html.twig' %}

    </body>
</html>
", "partials/base.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\partials\\base.html.twig");
    }
}
