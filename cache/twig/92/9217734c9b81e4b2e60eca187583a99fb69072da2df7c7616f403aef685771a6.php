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

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_1d248d8b25b48d7d5e5e4797d4e04750b6bb386f28bcefb4029d35250f2fea46 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/git_sync_repo_link.html.twig"));

        // line 1
        if (($context["linkinmenu"] ?? null)) {
            // line 2
            echo "  ";
            $context["link_classes"] = "newwindow external-link nav-link";
        } else {
            // line 4
            echo "  ";
            $context["link_classes"] = "newwindow external-link";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 8
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                // line 9
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 10
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 11
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 12
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 13
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 14
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 15
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 16
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 17
                        echo "      ";
                    } else {
                        // line 18
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 19
                        echo "      ";
                    }
                    // line 20
                    echo "    ";
                } else {
                    // line 21
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 22
                    echo "    ";
                }
                // line 23
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 24
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 25
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 26
                        echo "      ";
                    } else {
                        // line 27
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 28
                            echo "          ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 29
                            echo "        ";
                        } else {
                            // line 30
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 31
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 32
                                echo "          ";
                            } else {
                                // line 33
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 34
                                echo "          ";
                            }
                            // line 35
                            echo "        ";
                        }
                        // line 36
                        echo "      ";
                    }
                    // line 37
                    echo "      ";
                    if ( !($context["presentationslides"] ?? null)) {
                        // line 38
                        echo "        <a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\">
          <i class=\"fa fa-";
                        // line 39
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>
      ";
                    }
                    // line 41
                    echo "    ";
                } else {
                    // line 42
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 43
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 44
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 45
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 46
                        echo "      ";
                    } else {
                        // line 47
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 48
                        echo "      ";
                    }
                    // line 49
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                        // line 50
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                        // line 51
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 53
                        echo "      ";
                    }
                    // line 54
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 55
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 56
                        echo "      ";
                    } else {
                        // line 57
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 58
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                                // line 59
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit this Page";
                                // line 60
                                echo "          ";
                            } else {
                                // line 61
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 62
                                echo "          ";
                            }
                            // line 63
                            echo "        ";
                        } else {
                            // line 64
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text"))) {
                                // line 65
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit these Slides";
                                // line 66
                                echo "          ";
                            } else {
                                // line 67
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 68
                                echo "          ";
                            }
                            // line 69
                            echo "        ";
                        }
                        // line 70
                        echo "      ";
                    }
                    // line 71
                    echo "      ";
                    if (($context["presentationslides"] ?? null)) {
                        echo "(";
                    }
                    echo "<a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "</a>";
                    if (($context["presentationslides"] ?? null)) {
                        echo ")";
                    }
                    // line 72
                    echo "    ";
                }
                // line 73
                echo "  ";
            }
        } else {
            // line 75
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []))))) {
                // line 76
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 77
                echo "    ";
                if ( !($context["presentationslides"] ?? null)) {
                    // line 78
                    echo "      <a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    ";
                }
                // line 81
                echo "  ";
            } else {
                // line 82
                echo "    ";
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                    // line 83
                    echo "      ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 84
                    echo "      ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 85
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 86
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 87
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 88
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 89
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 90
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 91
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 92
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 93
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("src/master", ["user/" => "/"]));
                        // line 94
                        echo "      ";
                    } else {
                        // line 95
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 96
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 97
                        echo "      ";
                    }
                    // line 98
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 99
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 100
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 101
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 102
                        echo "      ";
                    } else {
                        // line 103
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 104
                        echo "      ";
                    }
                    // line 105
                    echo "      ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                        // line 106
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                        // line 107
                        echo "      ";
                    }
                    // line 108
                    echo "      ";
                    if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                        // line 109
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 110
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 111
                            echo "        ";
                        } else {
                            // line 112
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                                // line 113
                                echo "            ";
                                $context["git_repo_link_text"] = "View Content Repository";
                                // line 114
                                echo "          ";
                            } else {
                                // line 115
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 116
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 117
                                    echo "            ";
                                } else {
                                    // line 118
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 119
                                    echo "            ";
                                }
                                // line 120
                                echo "          ";
                            }
                            // line 121
                            echo "        ";
                        }
                        // line 122
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 123
                            echo "          <a class=\"";
                            echo ($context["link_classes"] ?? null);
                            echo "\" href=\"";
                            echo ($context["git_sync_repo_link"] ?? null);
                            echo "\" title=\"";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "\" target=\"_blank\">
            <i class=\"fa fa-";
                            // line 124
                            echo ($context["git_repo_link_icon"] ?? null);
                            echo "\" aria-hidden=\"true\"></i>";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "</a>
        ";
                        }
                        // line 126
                        echo "      ";
                    } else {
                        // line 127
                        echo "        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                            // line 128
                            echo "          ";
                            $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 129
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 131
                            echo "        ";
                        }
                        // line 132
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 133
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 134
                            echo "        ";
                        } else {
                            // line 135
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 136
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                                    // line 137
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit this Page";
                                    // line 138
                                    echo "            ";
                                } else {
                                    // line 139
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 140
                                    echo "            ";
                                }
                                // line 141
                                echo "          ";
                            } else {
                                // line 142
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text"))) {
                                    // line 143
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit these Slides";
                                    // line 144
                                    echo "            ";
                                } else {
                                    // line 145
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 146
                                    echo "            ";
                                }
                                // line 147
                                echo "          ";
                            }
                            // line 148
                            echo "        ";
                        }
                        // line 149
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 150
                        echo "      ";
                    }
                    // line 151
                    echo "    ";
                }
                // line 152
                echo "  ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 152,  511 => 151,  508 => 150,  489 => 149,  486 => 148,  483 => 147,  480 => 146,  477 => 145,  474 => 144,  471 => 143,  468 => 142,  465 => 141,  462 => 140,  459 => 139,  456 => 138,  453 => 137,  450 => 136,  447 => 135,  444 => 134,  441 => 133,  438 => 132,  435 => 131,  433 => 129,  431 => 128,  428 => 127,  425 => 126,  418 => 124,  409 => 123,  406 => 122,  403 => 121,  400 => 120,  397 => 119,  394 => 118,  391 => 117,  388 => 116,  385 => 115,  382 => 114,  379 => 113,  376 => 112,  373 => 111,  370 => 110,  367 => 109,  364 => 108,  361 => 107,  358 => 106,  355 => 105,  352 => 104,  349 => 103,  346 => 102,  343 => 101,  340 => 100,  337 => 99,  334 => 98,  331 => 97,  328 => 96,  325 => 95,  322 => 94,  319 => 93,  316 => 92,  313 => 91,  310 => 90,  307 => 89,  304 => 88,  301 => 87,  298 => 86,  295 => 85,  292 => 84,  289 => 83,  286 => 82,  283 => 81,  274 => 78,  271 => 77,  268 => 76,  265 => 75,  261 => 73,  258 => 72,  239 => 71,  236 => 70,  233 => 69,  230 => 68,  227 => 67,  224 => 66,  221 => 65,  218 => 64,  215 => 63,  212 => 62,  209 => 61,  206 => 60,  203 => 59,  200 => 58,  197 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  183 => 51,  181 => 50,  178 => 49,  175 => 48,  172 => 47,  169 => 46,  166 => 45,  163 => 44,  160 => 43,  157 => 42,  154 => 41,  147 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if linkinmenu %}
  {% set link_classes = \"newwindow external-link nav-link\" %}
{% else %}
  {% set link_classes = \"newwindow external-link\" %}
{% endif %}

{% if theme_var('git_sync_repo_link') %}
  {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon')is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text')is empty %}
          {% set git_repo_link_text = 'View Content Repository' %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if not presentationslides %}
        <a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
          <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
      {% endif %}
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if (page.children.count) and (not presentationslides) %}
        {% set git_repo_link_url = (git_repo_link_url | replace({
          ('/' ~ page.template ~ '.md'): '/'
        })) %}
      {% endif %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if not presentationslides %}
          {% if theme_var('custom_git_sync_repo_link_text')is empty %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% endif %}
        {% else %}
          {% if theme_var('custom_git_sync_repo_presentation_link_text')is empty %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
    {% endif %}
  {% endif %}
{% else %}
  {% if not (config.plugins['git-sync'].enabled) or (config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty) %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    {% if not presentationslides %}
      <a class=\"{{ link_classes }}\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    {% endif %}
  {% else %}
    {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
      {% set git_sync_repo = config.plugins['git-sync'].repository %}
      {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
      {% if 'github' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"github\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'gitlab' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"gitlab\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'bitbucket' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"bitbucket\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' | replace({'user/': '/'}) %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% endif %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_icon')is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
      {% endif %}
      {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if theme_var('git_sync_repo_link_text')is empty %}
            {% set git_repo_link_text = 'View Content Repository' %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if not presentationslides %}
          <a class=\"{{ link_classes }}\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
            <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% endif %}
      {% else %}
        {% if (page.children.count) and (not presentationslides) %}
          {% set git_repo_link_url = (git_repo_link_url | replace({
            ('/' ~ page.template ~ '.md'): '/'
          })) %}
        {% endif %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if not presentationslides %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
              {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
          {% else %}
            {% if theme_var('custom_git_sync_repo_presentation_link_text')is empty %}
              {% set git_repo_link_text = 'Edit these Slides' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "C:\\laragon\\www\\angahi\\user\\themes\\bootstrap4-open-matter\\templates\\partials\\git_sync_repo_link.html.twig");
    }
}
