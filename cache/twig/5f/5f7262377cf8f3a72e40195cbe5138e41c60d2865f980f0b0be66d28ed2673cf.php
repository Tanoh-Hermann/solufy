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

/* partials/blog_item.html.twig */
class __TwigTemplate_08693aeffd1215450e7d797141ad9040c1bd5de0b1af38b5e955d154f9dfd5ab extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blog_item.html.twig"));

        // line 1
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 1200);
        // line 6
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 400);
        // line 7
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 8
        echo "
    <div class=\"list-blog-header\">

        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 12
            echo "            <h2>
              ";
            // line 13
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 14
                echo "                  <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i>";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "</a>
              ";
            }
            // line 16
            echo "            </h2>
        ";
        } else {
            // line 18
            echo "        ";
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icon", [])) {
                // line 20
                echo "          ";
                $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "icon", []);
                // line 21
                echo "        ";
            } else {
                // line 22
                echo "          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "icon", []), "post", [])) {
                    // line 23
                    echo "            ";
                    $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "post_icon", []);
                    // line 24
                    echo "          ";
                }
                // line 25
                echo "          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", [])) {
                    // line 26
                    echo "            ";
                    $context["titleicon"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "post_icon", []);
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "          ";
            }
            // line 29
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method")) {
                // line 30
                echo "            <h1>
            ";
                // line 31
                if (($context["titleicon"] ?? null)) {
                    // line 32
                    echo "              <class=\"p-name\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\" class=\"u-url\"><i class=\"fa fa-";
                    echo ($context["titleicon"] ?? null);
                    echo "\"></i>";
                    echo $this->getAttribute(($context["page"] ?? null), "title", []);
                    echo "</a>
            ";
                } else {
                    // line 34
                    echo "              <class=\"p-name\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\" class=\"u-url\">";
                    echo $this->getAttribute(($context["page"] ?? null), "title", []);
                    echo "</a>
            ";
                }
                // line 36
                echo "          </h1>
          ";
            } else {
                // line 38
                echo "            <h1 class=\"hidden\">";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "</h1>
          ";
            }
            // line 40
            echo "        ";
        }
        // line 41
        echo "
        <div class=\"list-blog-meta my-3\">
            ";
        // line 43
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "hide_post_date", [])) {
            // line 44
            echo "                <span class=\"list-blog-date\">
                <i class=\"fa fa-calendar\"></i> <span>";
            // line 45
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
            echo "</span>
              </span>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "hide_post_taxonomy", [])) {
            // line 50
            echo "              ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                // line 51
                echo "              <span class=\"list-blog-tags float-right\">
                  ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 53
                    echo "                      <a class=\"badge badge-primary\" href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                    echo $context["tag"];
                    echo "\">";
                    echo $context["tag"];
                    echo "</a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "              </span>
              ";
            }
            // line 57
            echo "            ";
        }
        // line 58
        echo "
        </div>

        ";
        // line 61
        if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hideheaderimage"], "method")) {
            // line 62
            echo "
        ";
            // line 63
            if (($context["big_header"] ?? null)) {
                // line 64
                echo "            ";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 1200, 1 => 600], "method"), "html", [0 => "", 1 => "blog-header-image"], "method");
                echo "
            ";
            } else {
                // line 66
                echo "              ";
                if (($context["header_image"] ?? null)) {
                    // line 67
                    echo "              ";
                    if (($context["header_image_file"] ?? null)) {
                        // line 68
                        echo "                ";
                        $context["image_parts"] = pathinfo(($context["header_image_file"] ?? null));
                        // line 69
                        echo "                ";
                        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", []);
                        // line 70
                        echo "                ";
                        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", []) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", [])], "method")));
                        // line 71
                        echo "                ";
                        $context["header_image_media"] = $this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", []), ($context["image_basename"] ?? null), [], "array");
                        // line 72
                        echo "              ";
                    } else {
                        // line 73
                        echo "                ";
                        $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                        // line 74
                        echo "              ";
                    }
                    // line 75
                    echo "
              ";
                    // line 77
                    echo "              ";
                    if (($context["header_image_media"] ?? null)) {
                        // line 78
                        echo "                ";
                        $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_alt_text", []);
                        // line 79
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", [])) {
                            // line 80
                            echo "                  ";
                            $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_credit", []);
                            // line 81
                            echo "                  ";
                            $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_creditlink", []);
                            // line 82
                            echo "                ";
                        } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", [])) {
                            // line 83
                            echo "                  ";
                            $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_credit", []);
                            // line 84
                            echo "                  ";
                            $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_creditlink", []);
                            // line 85
                            echo "                  ";
                            $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", []), "header_image_alt_text", []);
                            // line 86
                            echo "                ";
                        }
                        // line 87
                        echo "                ";
                        if (($context["image_credit"] ?? null)) {
                            // line 88
                            echo "                  <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
                    ";
                            // line 89
                            if (($context["image_creditlink"] ?? null)) {
                                // line 90
                                echo "                      Image: <a class=\"newwindow external-link\" href=\"";
                                echo ($context["image_creditlink"] ?? null);
                                echo "\">
                      ";
                                // line 91
                                echo ($context["image_credit"] ?? null);
                                echo "</a></span>
                      <img src=\"";
                                // line 92
                                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                                echo "\" alt=\"";
                                echo ($context["image_alt_text"] ?? null);
                                echo "\"/>
                    ";
                            } else {
                                // line 94
                                echo "                      Image: ";
                                echo ($context["image_credit"] ?? null);
                                echo "</span>
                      <img src=\"";
                                // line 95
                                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                                echo "\" alt=\"";
                                echo ($context["image_alt_text"] ?? null);
                                echo "\"/>
                    ";
                            }
                            // line 97
                            echo "                  </div>
                ";
                        } else {
                            // line 99
                            echo "                  <img src=\"";
                            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "url", []);
                            echo "\" alt=\"";
                            echo ($context["image_alt_text"] ?? null);
                            echo "\"/>
                ";
                        }
                        // line 101
                        echo "              ";
                    }
                    // line 102
                    echo "
              ";
                }
                // line 104
                echo "            ";
            }
            // line 105
            echo "
          ";
        }
        // line 107
        echo "          </div>

    <div class=\"list-blog-padding\">

      ";
        // line 111
        if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 112
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
              ";
            // line 113
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 114
                echo "                <p>
                ";
                // line 115
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "continue_link_as_button", [])) {
                    // line 116
                    echo "                  <a class=\"btn btn-primary\" href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                    echo "
                ";
                } else {
                    // line 118
                    echo "                  <a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                    echo "
                ";
                }
                // line 120
                echo "                ";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
              </a>
              </p>
            ";
            }
            // line 124
            echo "            <hr>
        ";
        } elseif (        // line 125
($context["truncate"] ?? null)) {
            // line 126
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 127
                echo "                <p>";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "</p>
            ";
            } else {
                // line 129
                echo "                <p>";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</p>
            ";
            }
            // line 131
            echo "            ";
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 132
                echo "              <p>
               ";
                // line 133
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "continue_link_as_button", [])) {
                    // line 134
                    echo "                 <a class=\"btn btn-primary\" href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                    echo "
               ";
                } else {
                    // line 136
                    echo "                 <a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                    echo "
               ";
                }
                // line 138
                echo "               ";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
              </p>
            ";
            }
            // line 141
            echo "            <hr>
        ";
        } else {
            // line 143
            echo "            ";
            // line 144
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "hide_post_summary", [])) {
                // line 145
                echo "              ";
                $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", [])));
                // line 146
                echo "            ";
            } else {
                // line 147
                echo "              ";
                $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", []);
                // line 148
                echo "            ";
            }
            // line 149
            echo "
            ";
            // line 151
            echo "            ";
            if ( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method"))) {
                // line 152
                echo "              ";
                if ( !twig_test_empty(($context["content"] ?? null))) {
                    // line 153
                    echo "                    <p>";
                    echo ($context["content"] ?? null);
                    echo "</p>
              ";
                } else {
                    // line 155
                    echo "                  <p>";
                    echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                    echo "</p>
              ";
                }
                // line 157
                echo "
              ";
                // line 159
                echo "              ";
                if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])) &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method"))))) {
                    // line 160
                    echo "                <p>";
                    $this->loadTemplate("partials/creative_commons_license.html.twig", "partials/blog_item.html.twig", 160)->display($context);
                    echo "</p>
              ";
                }
                // line 162
                echo "
              ";
                // line 164
                echo "              ";
                if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "page")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
                    // line 165
                    echo "                <br>
                <hr>
                <p>";
                    // line 167
                    $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "partials/blog_item.html.twig", 167)->display($context);
                    echo "</p>
              ";
                }
                // line 169
                echo "
              ";
                // line 170
                $context["show_prev_next"] = true;
                // line 171
                echo "
            ";
            } else {
                // line 173
                echo "
              ";
                // line 174
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                    // line 175
                    echo "                <p>";
                    echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                    echo "</p>
                <p>
                ";
                    // line 177
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "continue_link_as_button", [])) {
                        // line 178
                        echo "                  <a class=\"btn btn-primary topwindow external-link\" href=\"";
                        echo ($this->getAttribute(($context["page"] ?? null), "url", []) . "/chromeless:true");
                        echo "\">";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                        echo "
                ";
                    } else {
                        // line 180
                        echo "                  <a class=\"topwindow external-link\" href=\"";
                        echo ($this->getAttribute(($context["page"] ?? null), "url", []) . "/chromeless:true");
                        echo "\">";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.VIEW_ALL_OF");
                        echo "
                ";
                    }
                    // line 182
                    echo "                ";
                    echo $this->getAttribute(($context["page"] ?? null), "title", []);
                    echo "
                <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
              </p>
              ";
                }
                // line 186
                echo "
          ";
            }
            // line 188
            echo "
        ";
        }
        // line 190
        echo "
        ";
        // line 192
        echo "        ";
        if ((($context["show_prev_next"] ?? null) &&  !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")))) {
            // line 193
            echo "            <p class=\"text-center mt-4\">
                ";
            // line 194
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 195
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.PREV_POST");
                echo "</a>
                ";
            }
            // line 197
            echo "
                ";
            // line 198
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 199
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BLOG.ITEM.NEXT_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
                ";
            }
            // line 201
            echo "
            </p>
        ";
        }
        // line 204
        echo "
    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 204,  586 => 201,  578 => 199,  576 => 198,  573 => 197,  565 => 195,  563 => 194,  560 => 193,  557 => 192,  554 => 190,  550 => 188,  546 => 186,  538 => 182,  530 => 180,  522 => 178,  520 => 177,  514 => 175,  512 => 174,  509 => 173,  505 => 171,  503 => 170,  500 => 169,  495 => 167,  491 => 165,  488 => 164,  485 => 162,  479 => 160,  476 => 159,  473 => 157,  467 => 155,  461 => 153,  458 => 152,  455 => 151,  452 => 149,  449 => 148,  446 => 147,  443 => 146,  440 => 145,  437 => 144,  435 => 143,  431 => 141,  424 => 138,  416 => 136,  408 => 134,  406 => 133,  403 => 132,  400 => 131,  394 => 129,  388 => 127,  385 => 126,  383 => 125,  380 => 124,  372 => 120,  364 => 118,  356 => 116,  354 => 115,  351 => 114,  349 => 113,  344 => 112,  342 => 111,  336 => 107,  332 => 105,  329 => 104,  325 => 102,  322 => 101,  314 => 99,  310 => 97,  303 => 95,  298 => 94,  291 => 92,  287 => 91,  282 => 90,  280 => 89,  277 => 88,  274 => 87,  271 => 86,  268 => 85,  265 => 84,  262 => 83,  259 => 82,  256 => 81,  253 => 80,  250 => 79,  247 => 78,  244 => 77,  241 => 75,  238 => 74,  235 => 73,  232 => 72,  229 => 71,  226 => 70,  223 => 69,  220 => 68,  217 => 67,  214 => 66,  208 => 64,  206 => 63,  203 => 62,  201 => 61,  196 => 58,  193 => 57,  189 => 55,  175 => 53,  171 => 52,  168 => 51,  165 => 50,  163 => 49,  160 => 48,  154 => 45,  151 => 44,  149 => 43,  145 => 41,  142 => 40,  136 => 38,  132 => 36,  124 => 34,  114 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  70 => 16,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {# changed default image width and height - hibbittsdesign.org #}
    {% set header_image_width  = page.header.header_image_width|defined(1200) %}
    {% set header_image_height = page.header.header_image_height|defined(400) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

        {% if page.header.link %}
            <h2>
              {% if page.header.continue_link is not same as(false) %}
                  <a href=\"{{ page.header.link }}\"><i class=\"fa fa-angle-double-right\"></i>{{ page.title }}</a>
              {% endif %}
            </h2>
        {% else %}
        {# added page title icon - hibbittsdesign.org #}
        {% if page.header.icon %}
          {% set titleicon = page.header.icon %}
        {% else %}
          {% if config.site.icon.post %}
            {% set titleicon = page.parent.post_icon %}
          {% endif %}
          {% if page.parent.header.post_icon %}
            {% set titleicon = page.parent.header.post_icon %}
            {% endif %}
          {% endif %}
          {% if not (grav.uri.param('hidepagetitle')) %}
            <h1>
            {% if titleicon %}
              <class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\"><i class=\"fa fa-{{ titleicon }}\"></i>{{ page.title }}</a>
            {% else %}
              <class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a>
            {% endif %}
          </h1>
          {% else %}
            <h1 class=\"hidden\">{{page.title}}</h1>
          {% endif %}
        {% endif %}

        <div class=\"list-blog-meta my-3\">
            {% if not (page.parent.header.hide_post_date) %}
                <span class=\"list-blog-date\">
                <i class=\"fa fa-calendar\"></i> <span>{{ page.date|date(system.pages.dateformat.short) }}</span>
              </span>
            {% endif %}

            {% if not (page.parent.header.hide_post_taxonomy) %}
              {% if page.taxonomy.tag %}
              <span class=\"list-blog-tags float-right\">
                  {% for tag in page.taxonomy.tag %}
                      <a class=\"badge badge-primary\" href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
                  {% endfor %}
              </span>
              {% endif %}
            {% endif %}

        </div>

        {% if not (grav.uri.param('hideheaderimage')) %}

        {% if big_header %}
            {{ page.media.images|first.cropResize(1200,600).html('','blog-header-image') }}
            {% else %}
              {% if header_image %}
              {% if header_image_file %}
                {% set image_parts = pathinfo(header_image_file) %}
                {% set image_basename = image_parts.basename %}
                {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
                {% set header_image_media = image_page.media[image_basename] %}
              {% else %}
                {% set header_image_media = page.media.images|first %}
              {% endif %}

              {# support image credit tag with optional image meta file - hibbittsdesign.org #}
              {% if header_image_media %}
                {% set image_alt_text = page.header.header_image_alt_text %}
                {% if page.header.header_image_credit %}
                  {% set image_credit = page.header.header_image_credit %}
                  {% set image_creditlink = page.header.header_image_creditlink %}
                {% elseif header_image_media.meta.header_image_credit  %}
                  {% set image_credit = header_image_media.meta.header_image_credit %}
                  {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
                  {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
                {% endif %}
                {% if image_credit %}
                  <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
                    {% if image_creditlink %}
                      Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
                      {{ image_credit }}</a></span>
                      <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
                    {% else %}
                      Image: {{ image_credit }}</span>
                      <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
                    {% endif %}
                  </div>
                {% else %}
                  <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
                {% endif %}
              {% endif %}

              {% endif %}
            {% endif %}

          {% endif %}
          </div>

    <div class=\"list-blog-padding\">

      {% if truncate and page.summary != page.content %}
            <p>{{ page.summary|raw }}</p>
              {% if page.header.continue_link is not same as(false) %}
                <p>
                {% if page.parent.header.continue_link_as_button %}
                  <a class=\"btn btn-primary\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
                {% else %}
                  <a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
                {% endif %}
                {{ page.title }}<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
              </a>
              </p>
            {% endif %}
            <hr>
        {% elseif truncate %}
            {% if page.summary != page.content %}
                <p>{{ page.content|truncate(550) }}</p>
            {% else %}
                <p>{{ page.content|raw }}</p>
            {% endif %}
            {% if page.header.continue_link is not same as(false) %}
              <p>
               {% if page.parent.header.continue_link_as_button %}
                 <a class=\"btn btn-primary\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
               {% else %}
                 <a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
               {% endif %}
               {{ page.title }}<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
              </p>
            {% endif %}
            <hr>
        {% else %}
            {# check to hide post summary on page - hibbittsdesign.org #}
            {% if page.parent.header.hide_post_summary %}
              {% set content = page.content | slice(page.summary | length) %}
            {% else %}
              {% set content = page.content %}
            {% endif %}

            {# check summary only flag - hibbittsdesign.org #}
            {% if not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
              {% if content is not empty  %}
                    <p>{{ content|raw }}</p>
              {% else %}
                  <p>{{ page.summary|raw }}</p>
              {% endif %}

              {# Creative Commons License -  hibbittsdesign.org #}
              {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary') or grav.uri.param('summaryonly'))) %}
                <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
              {% endif %}

              {# Git repository edit link - hibbittsdesign.org #}
              {% if ( page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page' ) or (( theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                <br>
                <hr>
                <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
              {% endif %}

              {% set show_prev_next = true %}

            {% else %}

              {% if page.header.continue_link is not same as(false) %}
                <p>{{ page.summary|raw }}</p>
                <p>
                {% if page.parent.header.continue_link_as_button %}
                  <a class=\"btn btn-primary topwindow external-link\" href=\"{{ page.url ~ '/chromeless:true' }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
                {% else %}
                  <a class=\"topwindow external-link\" href=\"{{ page.url ~ '/chromeless:true' }}\">{{ 'BLOG.ITEM.VIEW_ALL_OF'|t }}
                {% endif %}
                {{ page.title }}
                <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>
              </p>
              {% endif %}

          {% endif %}

        {% endif %}

        {# added check for content display flag - hibbittsdesign.org #}
        {% if show_prev_next and not (grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
            <p class=\"text-center mt-4\">
                {% if not page.isLast %}
                    <a class=\"btn btn-primary\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
                {% endif %}

                {% if not page.isFirst %}
                    <a class=\"btn btn-primary\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
                {% endif %}

            </p>
        {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\partials\\blog_item.html.twig");
    }
}
