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

/* partials/modal-wizard.html.twig */
class __TwigTemplate_8a7eb00376954d66465ea952c915d440660705ff161dbfb5f99d53556ea108c2 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal-wizard.html.twig"));

        // line 1
        $context["settings"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array");
        // line 2
        $context["frontend_url"] = twig_trim_filter(($this->getAttribute(($context["uri"] ?? null), "base", []) . $this->getAttribute(($context["uri"] ?? null), "rootUrl", [])), "/");
        // line 3
        echo "
<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">

    <h1>Git Sync - Wizard</h1>
    ";
        // line 7
        if ($this->getAttribute(($context["git_sync"] ?? null), "git_installed", [])) {
            // line 8
            echo "    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will help you set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository. When done you will have a bi-directional synchronization link between your site and the <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        ";
            // line 21
            $context["selectedRepo"] = ((twig_in_filter("github.com", $this->getAttribute(($context["settings"] ?? null), "repository", []))) ? ("github") : (($context["selectedRepo"] ?? null)));
            // line 22
            echo "        ";
            $context["selectedRepo"] = ((twig_in_filter("bitbucket.com", $this->getAttribute(($context["settings"] ?? null), "repository", []))) ? ("bitbucket") : (($context["selectedRepo"] ?? null)));
            // line 23
            echo "        ";
            $context["selectedRepo"] = ((twig_in_filter("gitlab.com", $this->getAttribute(($context["settings"] ?? null), "repository", []))) ? ("gitlab") : (($context["selectedRepo"] ?? null)));
            // line 24
            echo "        ";
            $context["selectedRepo"] = ((( !twig_test_empty($this->getAttribute(($context["settings"] ?? null), "repository", [])) &&  !($context["selectedRepo"] ?? null))) ? ("allothers") : (($context["selectedRepo"] ?? null)));
            // line 25
            echo "
        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select the <i class=\"fa fa-fw fa-git\"></i> repository-hosting service that you will be using to remotely store your data. Once you picked one, insert the username and password or token to access the service. Passwords are saved securely.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" ";
            // line 34
            echo (((($context["selectedRepo"] ?? null) == "github")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/github.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" ";
            // line 39
            echo (((($context["selectedRepo"] ?? null) == "bitbucket")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/bitbucket.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" ";
            // line 44
            echo (((($context["selectedRepo"] ?? null) == "gitlab")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/gitlab.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                     <label>
                        <input type=\"radio\" value=\"allothers\" name=\"gitsync[repository]\" ";
            // line 49
            echo (((($context["selectedRepo"] ?? null) == "allothers")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/gitlogo.svg"), "html", null, true);
            echo "\" />
                         <small>(any Git service with webhooks)</small>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "user", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "user", []), "")) : ("")), "html", null, true);
            echo "\" />
                    </label>
                    <label>
                        Git Password or Token
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"\" />
                    </label>
                </div>
            </div>

            <div class=\"access-tokens wizard-padding\">
                <h3>Access Tokens and 2FA (Two-factor Authentication)</h3>
                <p>If you have never used Access Tokens or don't know what 2FA is, you most likely only need your <strong>regular password</strong> for the field above. You can then skip this step and press <strong>Next</strong> to continue.</p>

                <p><a href=\"#\" class=\"button\" data-access-tokens-details>More Details <i class=\"fa fa-fw fa-chevron-down\"></i></a></p>

                <div class=\"access-tokens-details\" style=\"display: none;\">
                    <p>With GitSync you have the option to use an Access Token instead of your password, however if you have <strong>2FA (Two-factor authentication)</strong> enabled for your git service, you can use Access Tokens.</p>

                    <p>Using a token is more secure than using your password, because you can limit what can be done using it and it can be revoked without worrying about changing the password. As we are just syncing, we only need to give it read-and-write access to repositories and webhooks.
                    </p>

                    <div class=\"hidden-step-github hidden\">
                        <h4>GitHub</h4>
                        <p>
                            With <a href=\"https://help.github.com/articles/creating-an-access-token-for-command-line-use/\" target=\"_blank\">GitHub's Personal Access Tokens</a>, select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>repo</code> (Full control of private repositories)</li>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>admin:repo_hook</code> (Full control of repository hooks)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-bitbucket hidden\">
                        <h4>Bitbucket</h4>
                        <p>
                            With <a href=\"https://confluence.atlassian.com/bitbucket/app-passwords-828781300.html\" target=\"_blank\">BitBucket's App Passwords</a>, select the following Permissions:
                        </p>

                        <ul>
                            <li>Repositories:
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read</code></li>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Write</code></li>
                                </ul>
                            </li>
                            <li>Webhooks
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read and write</code></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-gitlab hidden\">
                        <h4>GitLab</h4>
                        <p>
                            For <a href=\"https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html\" target=\"_blank\">GitLab's Personal Access Tokens</a> select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>API</code> (Access your API)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-allothers hidden\">
                        <h4>Other Git Repositories</h4>

                        <p>Usually under your profile settings is where you can generate a new Access Token. You want to ensure that you have enough read/write access for the repository as well as <code>webhook</code> access</p>
                    </div>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the Repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to use, you can skip this step. Otherwise, please follow these steps:
            </p>

            <div class=\"wizard-padding\">
                <ol>
                    <li>If you are creating a new repository (recommended), you must create an initial commit.
                        <ul>
                            <li>The service providers often ask you to do this when you made it.</li>
                            <li>Check the box that says Initialize repository with a README or .gitignore</li>
                            <li>This is required for GitSync to work.</li>
                        </ul>
                    </li>
                    <li>Once you have made your repository, copy the full HTTPS URL and paste it into the box below.
                        <ul>
                            <li>Most services offer both SSH and HTTPS addresses, <strong>but only HTTPS is supported at this time</strong>.</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    GitLab calls repositories \"Projects\". Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>
            <div class=\"hidden-step-allothers wizard-padding hidden\">
              <h4>Other Git Repositories</h4>

            </div>

            <p class=\"hidden-step-bitbucket hidden\">
                When you copy the HTTPS URL from Bitbucket, it also adds <code>your-user@</code> at the beginning of the URL which is not needed and should be removed. The URL be something like <code>https://bitbucket.org/your-user/your-repository.git</code>
            </p>

            <p>
                <label>
                    Git Repository (<strong>HTTPS only</strong>)

                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "repository", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "repository", []), "")) : ("")), "html", null, true);
            echo "\" />
                </label>
                <span>
                    GitSync will use the above repository to store the <strong>user/</strong> folder items selected in Step 4.
                </span>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"";
            // line 210
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "\">
            <p>
                A Webhook synchronizes the site when a change happens in the repository, and is set up at the service provider. This is a special URL to your site, that you add to your repository's settings. We've auto-generated one for you below, but you can change this to whatever you'd like.</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", []), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p>
                You can also use a secret token if your service provider supports it:</p>

            <p class=\"webhook-secret-wrapper\">
                <label for=\"gitsync-webhook-secret-input\">
                    <input id=\"gitsync-webhook-secret-input\" type=\"checkbox\" name=\"gitsync[webhook_enabled]\" ";
            // line 226
            echo (($this->getAttribute(($context["settings"] ?? null), "webhook_enabled", [])) ? ("checked") : (""));
            echo ">
                    Use Webhook Secret
                </label>
                <label class=\"";
            // line 229
            echo (( !$this->getAttribute(($context["settings"] ?? null), "webhook_enabled", [])) ? ("hidden") : (""));
            echo "\">
                    Webhook Secret
                    <input type=\"text\" name=\"gitsync[webhook_secret]\" placeholder=\"Your Web Hook Secret\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "webhook_secret", []), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p>
                Follow the steps below to add the Webhook to your service provider.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code>-button on the right</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>";
            // line 247
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", []), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <span class=\"gitsync-webhook-secret\">";
            // line 249
            echo ((($this->getAttribute(($context["settings"] ?? null), "webhook_enabled", []) && $this->getAttribute(($context["settings"] ?? null), "webhook_secret", []))) ? ((("<code>" . $this->getAttribute(($context["settings"] ?? null), "webhook_secret", [])) . "</code>")) : ("<em>leave empty</em>"));
            echo "</span></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code>-button at the top</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, eg. GitSync</em></li>
                            <li><strong>URL</strong>: <code>";
            // line 268
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", []), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code>-button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i> <strong>Settings</strong></code> dropdown-button from the page sidebar</li>
                    <li>Select <code>Integrations</code> (or <code>Webhooks</code> if < v8.16) from the list</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>";
            // line 284
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", []), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Secret Token</strong>: <span class=\"gitsync-webhook-secret\">";
            // line 285
            echo ((($this->getAttribute(($context["settings"] ?? null), "webhook_enabled", []) && $this->getAttribute(($context["settings"] ?? null), "webhook_secret", []))) ? ((("<code>" . $this->getAttribute(($context["settings"] ?? null), "webhook_secret", [])) . "</code>")) : ("<em>leave empty</em>"));
            echo "</span></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-allothers wizard-padding hidden\">
                <h4>Other git systems (Generic)</h4>
                <ol>
                 <li>
                  Locate the area where you add the webhook in the repository. This will likely be in the settings for the repository you are adding.
                  </li>
                  <li>
                  Please note this is an advanced option and dependent on the choice of git solution in use.
                  </li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>";
            // line 305
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", []), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Secret Token</strong>: <span class=\"gitsync-webhook-secret\">";
            // line 306
            echo ((($this->getAttribute(($context["settings"] ?? null), "webhook_enabled", []) && $this->getAttribute(($context["settings"] ?? null), "webhook_secret", []))) ? ((("<code>" . $this->getAttribute(($context["settings"] ?? null), "webhook_secret", [])) . "</code>")) : ("<em>leave empty</em>"));
            echo "</span></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-4\">
        <h1>Step 4 - Choose What to Synchronize</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select which <strong>user/</strong> folders you would like to independently synchronize (default: Pages).
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"checkbox\" value=\"pages\" name=\"gitsync[folders]\" ";
            // line 329
            echo ((( !$this->getAttribute(($context["settings"] ?? null), "folders", []) || twig_in_filter("pages", $this->getAttribute(($context["settings"] ?? null), "folders", [])))) ? ("checked") : (""));
            echo " />
                        <span>Pages</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"themes\" name=\"gitsync[folders]\" ";
            // line 334
            echo ((twig_in_filter("themes", $this->getAttribute(($context["settings"] ?? null), "folders", []))) ? ("checked") : (""));
            echo " />
                        <span>Themes</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"plugins\" name=\"gitsync[folders]\" ";
            // line 339
            echo ((twig_in_filter("plugins", $this->getAttribute(($context["settings"] ?? null), "folders", []))) ? ("checked") : (""));
            echo " />
                        <span>Plugins</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"config\" name=\"gitsync[folders]\" ";
            // line 344
            echo ((twig_in_filter("config", $this->getAttribute(($context["settings"] ?? null), "folders", []))) ? ("checked") : (""));
            echo " />
                        <span>Config</span>
                        <span class=\"hint--right\" data-hint=\"This folder might contain sensitive data\"><i class=\"fa fa-warning\"></i></span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"data\" name=\"gitsync[folders]\"";
            // line 350
            echo ((twig_in_filter("data", $this->getAttribute(($context["settings"] ?? null), "folders", []))) ? ("checked") : (""));
            echo " />
                        <span>Data</span>
                        <span class=\"hint--right\" data-hint=\"This folder might contain sensitive data\"><i class=\"fa fa-warning\"></i></span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    ";
            // line 355
            if (twig_in_filter("accounts", $this->getAttribute(($context["settings"] ?? null), "folders", []))) {
                // line 356
                echo "                        <label>
                            <input type=\"checkbox\" value=\"accounts\" name=\"gitsync[folders]\" ";
                // line 357
                echo ((twig_in_filter("accounts", $this->getAttribute(($context["settings"] ?? null), "folders", []))) ? ("checked") : (""));
                echo " />
                            <span>Accounts</span>
                            <span class=\"hint--right\" data-hint=\"This folder contains sensitive data\"><i class=\"fa fa-warning\"></i></span>
                            <i class=\"info-desc fa fa-info-circle\"></i>
                        </label>
                    ";
            }
            // line 363
            echo "
                    ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["settings"] ?? null), "folders", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                if (twig_in_filter("/", $context["folder"])) {
                    // line 365
                    echo "                        ";
                    if (($this->getAttribute($context["loop"], "index0", []) == 0)) {
                        echo "<hr />";
                    }
                    // line 366
                    echo "                        <label>
                            <input type=\"checkbox\" value=\"";
                    // line 367
                    echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                    echo "\" name=\"gitsync[folders]\" checked />
                            <span>";
                    // line 368
                    echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                    echo "</span>
                            <i class=\"info-desc fa fa-info-circle\"></i>
                        </label>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                </div>
                <div class=\"column\">
                    <div class=\"description\">
                        <p class=\"description-accounts hidden\">
                            This folder contains all the user accounts of the site.
                        </p>
                        <p class=\"description-config hidden\">
                            This folder contains all the site configurations.
                        </p>
                        <p class=\"description-data hidden\">
                            This folder contains all the stored data from plugins.
                        </p>
                        <p class=\"description-pages hidden\">
                            This folders contains all the pages of your site.
                        </p>
                        <p class=\"description-plugins hidden\">
                            This folders contains all the plugins installed in your site.
                        </p>
                        <p class=\"description-themes hidden\">
                            This folders contains all the themes installed in your site.
                        </p>

                        <p class=\"info warning description-accounts description-config description-data hidden\">Careful! This folder can contain sensitive data and synchronizing it will potentially expose the data publicly. Private repository recommended.</p>

                        <p class=\"info alert description-themes hidden\">Note that changes happening in this folder can't be detected automatically by GitSync, therefore a manual synchronization will be required.</p>

                        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["settings"] ?? null), "folders", []));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                if (twig_in_filter("/", $context["folder"])) {
                    // line 399
                    echo "                            <p class=\"description-";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["folder"], ["/" => "-"]), "html", null, true);
                    echo " hidden\">
                                This folders was manually added either by you in the settings or by your Skeleton.
                            </p>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            echo "                    </div>
                </div>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    ";
        } else {
            // line 420
            echo "        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> (Git) binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> (Git) is missing from your hosting provider, you should open a ticket with them and request it to be installed.
                </p>

                <p>You can also specify a custom path in the Advanced section down below at the <strong>Git Binary Path</strong> field. If you are using <strong>Windows</strong> (VM, Azure or a local setup), you might have to change the location accordingly (quotes do matter), for example: <br /> <code>\"D:\\Program Files\\Git\\bin\\git.exe\"</code>.</p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    ";
        }
        // line 436
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/modal-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 436,  610 => 420,  591 => 403,  579 => 399,  574 => 398,  546 => 372,  532 => 368,  528 => 367,  525 => 366,  520 => 365,  509 => 364,  506 => 363,  497 => 357,  494 => 356,  492 => 355,  484 => 350,  475 => 344,  467 => 339,  459 => 334,  451 => 329,  425 => 306,  419 => 305,  396 => 285,  390 => 284,  369 => 268,  347 => 249,  340 => 247,  321 => 231,  316 => 229,  310 => 226,  298 => 217,  288 => 210,  266 => 191,  129 => 57,  119 => 50,  115 => 49,  108 => 45,  104 => 44,  97 => 40,  93 => 39,  86 => 35,  82 => 34,  71 => 25,  68 => 24,  65 => 23,  62 => 22,  60 => 21,  45 => 8,  43 => 7,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set settings = config.plugins['git-sync'] %}
{% set frontend_url = (uri.base ~ uri.rootUrl)|trim('/') %}

<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">

    <h1>Git Sync - Wizard</h1>
    {% if git_sync.git_installed %}
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will help you set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository. When done you will have a bi-directional synchronization link between your site and the <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        {% set selectedRepo = 'github.com' in settings.repository ? 'github' : selectedRepo %}
        {% set selectedRepo = 'bitbucket.com' in settings.repository ? 'bitbucket' : selectedRepo %}
        {% set selectedRepo = 'gitlab.com' in settings.repository ? 'gitlab' : selectedRepo %}
        {% set selectedRepo = not (settings.repository is empty) and not selectedRepo ? 'allothers' : selectedRepo %}

        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select the <i class=\"fa fa-fw fa-git\"></i> repository-hosting service that you will be using to remotely store your data. Once you picked one, insert the username and password or token to access the service. Passwords are saved securely.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" {{ selectedRepo == 'github' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/github.svg') }}\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" {{ selectedRepo == 'bitbucket' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/bitbucket.svg') }}\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" {{ selectedRepo == 'gitlab' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/gitlab.svg') }}\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                     <label>
                        <input type=\"radio\" value=\"allothers\" name=\"gitsync[repository]\" {{ selectedRepo == 'allothers' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/gitlogo.svg') }}\" />
                         <small>(any Git service with webhooks)</small>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"{{ settings.user|default('') }}\" />
                    </label>
                    <label>
                        Git Password or Token
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"\" />
                    </label>
                </div>
            </div>

            <div class=\"access-tokens wizard-padding\">
                <h3>Access Tokens and 2FA (Two-factor Authentication)</h3>
                <p>If you have never used Access Tokens or don't know what 2FA is, you most likely only need your <strong>regular password</strong> for the field above. You can then skip this step and press <strong>Next</strong> to continue.</p>

                <p><a href=\"#\" class=\"button\" data-access-tokens-details>More Details <i class=\"fa fa-fw fa-chevron-down\"></i></a></p>

                <div class=\"access-tokens-details\" style=\"display: none;\">
                    <p>With GitSync you have the option to use an Access Token instead of your password, however if you have <strong>2FA (Two-factor authentication)</strong> enabled for your git service, you can use Access Tokens.</p>

                    <p>Using a token is more secure than using your password, because you can limit what can be done using it and it can be revoked without worrying about changing the password. As we are just syncing, we only need to give it read-and-write access to repositories and webhooks.
                    </p>

                    <div class=\"hidden-step-github hidden\">
                        <h4>GitHub</h4>
                        <p>
                            With <a href=\"https://help.github.com/articles/creating-an-access-token-for-command-line-use/\" target=\"_blank\">GitHub's Personal Access Tokens</a>, select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>repo</code> (Full control of private repositories)</li>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>admin:repo_hook</code> (Full control of repository hooks)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-bitbucket hidden\">
                        <h4>Bitbucket</h4>
                        <p>
                            With <a href=\"https://confluence.atlassian.com/bitbucket/app-passwords-828781300.html\" target=\"_blank\">BitBucket's App Passwords</a>, select the following Permissions:
                        </p>

                        <ul>
                            <li>Repositories:
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read</code></li>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Write</code></li>
                                </ul>
                            </li>
                            <li>Webhooks
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read and write</code></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-gitlab hidden\">
                        <h4>GitLab</h4>
                        <p>
                            For <a href=\"https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html\" target=\"_blank\">GitLab's Personal Access Tokens</a> select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>API</code> (Access your API)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-allothers hidden\">
                        <h4>Other Git Repositories</h4>

                        <p>Usually under your profile settings is where you can generate a new Access Token. You want to ensure that you have enough read/write access for the repository as well as <code>webhook</code> access</p>
                    </div>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the Repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to use, you can skip this step. Otherwise, please follow these steps:
            </p>

            <div class=\"wizard-padding\">
                <ol>
                    <li>If you are creating a new repository (recommended), you must create an initial commit.
                        <ul>
                            <li>The service providers often ask you to do this when you made it.</li>
                            <li>Check the box that says Initialize repository with a README or .gitignore</li>
                            <li>This is required for GitSync to work.</li>
                        </ul>
                    </li>
                    <li>Once you have made your repository, copy the full HTTPS URL and paste it into the box below.
                        <ul>
                            <li>Most services offer both SSH and HTTPS addresses, <strong>but only HTTPS is supported at this time</strong>.</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    GitLab calls repositories \"Projects\". Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>
            <div class=\"hidden-step-allothers wizard-padding hidden\">
              <h4>Other Git Repositories</h4>

            </div>

            <p class=\"hidden-step-bitbucket hidden\">
                When you copy the HTTPS URL from Bitbucket, it also adds <code>your-user@</code> at the beginning of the URL which is not needed and should be removed. The URL be something like <code>https://bitbucket.org/your-user/your-repository.git</code>
            </p>

            <p>
                <label>
                    Git Repository (<strong>HTTPS only</strong>)

                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"{{ settings.repository|default('') }}\" />
                </label>
                <span>
                    GitSync will use the above repository to store the <strong>user/</strong> folder items selected in Step 4.
                </span>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"{{ frontend_url }}\">
            <p>
                A Webhook synchronizes the site when a change happens in the repository, and is set up at the service provider. This is a special URL to your site, that you add to your repository's settings. We've auto-generated one for you below, but you can change this to whatever you'd like.</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"{{ settings.webhook|default('/_git-sync') }}\" />
                </label>
            </p>

            <p>
                You can also use a secret token if your service provider supports it:</p>

            <p class=\"webhook-secret-wrapper\">
                <label for=\"gitsync-webhook-secret-input\">
                    <input id=\"gitsync-webhook-secret-input\" type=\"checkbox\" name=\"gitsync[webhook_enabled]\" {{ settings.webhook_enabled ? 'checked' }}>
                    Use Webhook Secret
                </label>
                <label class=\"{{ not settings.webhook_enabled ? 'hidden' }}\">
                    Webhook Secret
                    <input type=\"text\" name=\"gitsync[webhook_secret]\" placeholder=\"Your Web Hook Secret\" value=\"{{ settings.webhook_secret }}\" />
                </label>
            </p>

            <p>
                Follow the steps below to add the Webhook to your service provider.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code>-button on the right</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <span class=\"gitsync-webhook-secret\">{{ (settings.webhook_enabled and settings.webhook_secret ? '<code>' ~ settings.webhook_secret ~ '</code>' : '<em>leave empty</em>')|raw }}</span></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code>-button at the top</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, eg. GitSync</em></li>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code>-button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i> <strong>Settings</strong></code> dropdown-button from the page sidebar</li>
                    <li>Select <code>Integrations</code> (or <code>Webhooks</code> if < v8.16) from the list</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Secret Token</strong>: <span class=\"gitsync-webhook-secret\">{{ (settings.webhook_enabled and settings.webhook_secret ? '<code>' ~ settings.webhook_secret ~ '</code>' : '<em>leave empty</em>')|raw }}</span></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-allothers wizard-padding hidden\">
                <h4>Other git systems (Generic)</h4>
                <ol>
                 <li>
                  Locate the area where you add the webhook in the repository. This will likely be in the settings for the repository you are adding.
                  </li>
                  <li>
                  Please note this is an advanced option and dependent on the choice of git solution in use.
                  </li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Secret Token</strong>: <span class=\"gitsync-webhook-secret\">{{ (settings.webhook_enabled and settings.webhook_secret ? '<code>' ~ settings.webhook_secret ~ '</code>' : '<em>leave empty</em>')|raw }}</span></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-4\">
        <h1>Step 4 - Choose What to Synchronize</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select which <strong>user/</strong> folders you would like to independently synchronize (default: Pages).
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"checkbox\" value=\"pages\" name=\"gitsync[folders]\" {{ not settings.folders or 'pages' in settings.folders ? 'checked' : '' }} />
                        <span>Pages</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"themes\" name=\"gitsync[folders]\" {{ 'themes' in settings.folders ? 'checked' : '' }} />
                        <span>Themes</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"plugins\" name=\"gitsync[folders]\" {{ 'plugins' in settings.folders ? 'checked' : '' }} />
                        <span>Plugins</span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"config\" name=\"gitsync[folders]\" {{ 'config' in settings.folders ? 'checked' : '' }} />
                        <span>Config</span>
                        <span class=\"hint--right\" data-hint=\"This folder might contain sensitive data\"><i class=\"fa fa-warning\"></i></span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"data\" name=\"gitsync[folders]\"{{ 'data' in settings.folders ? 'checked' : '' }} />
                        <span>Data</span>
                        <span class=\"hint--right\" data-hint=\"This folder might contain sensitive data\"><i class=\"fa fa-warning\"></i></span>
                        <i class=\"info-desc fa fa-info-circle\"></i>
                    </label>
                    {% if 'accounts' in settings.folders %}
                        <label>
                            <input type=\"checkbox\" value=\"accounts\" name=\"gitsync[folders]\" {{ 'accounts' in settings.folders ? 'checked' : '' }} />
                            <span>Accounts</span>
                            <span class=\"hint--right\" data-hint=\"This folder contains sensitive data\"><i class=\"fa fa-warning\"></i></span>
                            <i class=\"info-desc fa fa-info-circle\"></i>
                        </label>
                    {% endif %}

                    {% for folder in settings.folders if '/' in folder %}
                        {% if loop.index0 == 0%}<hr />{% endif %}
                        <label>
                            <input type=\"checkbox\" value=\"{{ folder }}\" name=\"gitsync[folders]\" checked />
                            <span>{{ folder }}</span>
                            <i class=\"info-desc fa fa-info-circle\"></i>
                        </label>
                    {% endfor %}
                </div>
                <div class=\"column\">
                    <div class=\"description\">
                        <p class=\"description-accounts hidden\">
                            This folder contains all the user accounts of the site.
                        </p>
                        <p class=\"description-config hidden\">
                            This folder contains all the site configurations.
                        </p>
                        <p class=\"description-data hidden\">
                            This folder contains all the stored data from plugins.
                        </p>
                        <p class=\"description-pages hidden\">
                            This folders contains all the pages of your site.
                        </p>
                        <p class=\"description-plugins hidden\">
                            This folders contains all the plugins installed in your site.
                        </p>
                        <p class=\"description-themes hidden\">
                            This folders contains all the themes installed in your site.
                        </p>

                        <p class=\"info warning description-accounts description-config description-data hidden\">Careful! This folder can contain sensitive data and synchronizing it will potentially expose the data publicly. Private repository recommended.</p>

                        <p class=\"info alert description-themes hidden\">Note that changes happening in this folder can't be detected automatically by GitSync, therefore a manual synchronization will be required.</p>

                        {% for folder in settings.folders if '/' in folder %}
                            <p class=\"description-{{ folder|replace({'/': '-'}) }} hidden\">
                                This folders was manually added either by you in the settings or by your Skeleton.
                            </p>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    {% else %}
        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> (Git) binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> (Git) is missing from your hosting provider, you should open a ticket with them and request it to be installed.
                </p>

                <p>You can also specify a custom path in the Advanced section down below at the <strong>Git Binary Path</strong> field. If you are using <strong>Windows</strong> (VM, Azure or a local setup), you might have to change the location accordingly (quotes do matter), for example: <br /> <code>\"D:\\Program Files\\Git\\bin\\git.exe\"</code>.</p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    {% endif %}
</div>
", "partials/modal-wizard.html.twig", "C:\\laragon\\www\\angahi\\user\\plugins\\git-sync\\templates\\partials\\modal-wizard.html.twig");
    }
}
