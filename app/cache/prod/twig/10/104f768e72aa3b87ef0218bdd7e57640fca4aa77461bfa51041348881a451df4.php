<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ba669529e3eca0623c28c1d3dc88564b1f69880174ecee7bc8977c49295c6569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<!-- 
@copyright Copyright (c) 2013-2016, Norwegian Defence Research Establishment (FFI) - All Rights Reserved
@license Proprietary and confidential
@author Cecilie Jackbo Gran/Sinett 3.0 programme (firstname.lastname@ffi.no)

Unauthorized copying of this file, via any medium is strictly prohibited 

For the full copyright and license information, please view the LICENSE_MLAB file that was distributed with this source code.
-->
    <head>
        <meta charset=\"UTF-8\" />

        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "                
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </head>
    <body class=\"mlab_layout\">

        <ul id=\"mlab_menu\">
            <li>
                <a target=\"_top\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
        echo "\"><div id='mlab_menu_dropdown'><img class=\"mlab_basic_menu_drop\" title='";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("layout.menu.tooltip.back.app.list", array(), "messages");
        echo "' src=\"/img/logo_menu.png\" alt=\"logo\" /></div></a>
            </li>  <!-- The Mlab log -->

            <li id=\"mlab_editor_menu_dropdown\">    
                <img class=\"basic_menu_icon\" title='";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("layout.menu.tooltip.editor.menu", array(), "messages");
        echo "' src=\"/img/menu_icon.png\" alt=\"logo\" > 
            </li>
            <li class=\"single menu_right\">
                <img class=\"mlab_help_icon\" src=\"/img/help.png\" title='";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("layout.menu.tooltip.help", array(), "messages");
        echo "' alt=\"logo\" >
            </li>

            <li id=\"mlab_user_menu_dropdown\" class=\"menu_right\">
                <img class=\"mlab_user_info_icon\" src=\"/img/user.png\" title='";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("layout.menu.tooltip.user.info", array(), "messages");
        echo "Bruker info' alt=\"logo\" >
            </li>
        </ul>

        <div class=\"mlab_align_menu_elements\">
            <div class=\"container\">

                ";
        // line 112
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 113
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</h1>

                <p>";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout.info", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</p>

                <a class=\"mlab_button_new_app\" href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>

            ";
        } else {
            // line 122
            echo "
                <h1>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login.headline", array(), "FOSUserBundle"), "html", null, true);
            echo "</h1>

                ";
            // line 125
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 127
            echo "
            ";
        }
        // line 129
        echo "
            </div>  
        </div>

        <div id=\"mlab_editor_menu_dropdown_content\" class=\"dropdown_editor_menu\"><!-- Editor menu container -->

            <div class=\"mlab_one_col\"> <!-- Navigate col -->
                <h3>";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.heading.links", array(), "messages");
        echo "</h3>

                ";
        // line 138
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        echo " <!-- Finds the page you are on -->

                ";
        // line 140
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                <p>";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                    <a target=\"_top\" href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                </p>

                ";
        } else {
            // line 145
            echo " <!-- If loged in -->
                    ";
            // line 146
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USER") || !twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null)))) {
                echo " <!-- If no liks to show - hide the links info -->
                <p>";
                // line 147
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.info", array(), "messages");
                echo ":</p>
                    ";
            }
            // line 148
            echo " 

                <!-- if path('app_builder_index') not in currentPath  %} If on app list page - don't show the link to this page  -->
                <a target=\"_top\" href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.app.builder", array(), "messages");
            echo "</a>


                    ";
            // line 154
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo " <!-- Show this links if not on the page and have the role ROLE_ADMIN or higher  -->
                        ";
                // line 155
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 156
                    echo "                <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.app", array(), "messages");
                    echo "</a>
                        ";
                }
                // line 157
                echo " 
                        ";
                // line 158
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 159
                    echo "                <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.users", array(), "messages");
                    echo "</a>
                        ";
                }
                // line 160
                echo " 
                    ";
            }
            // line 161
            echo " 

                    ";
            // line 163
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                echo " <!-- Show this link if not on the page and have the role ROLE_SUPER_ADMIN  -->
                        ";
                // line 164
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 165
                    echo "                <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.system", array(), "messages");
                    echo "</a>
                        ";
                }
                // line 167
                echo "                    ";
            }
            // line 168
            echo "
                    ";
            // line 169
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 170
                echo "                <br>
                    ";
            }
            // line 172
            echo "
                    ";
            // line 173
            if (twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                echo " <!-- If on app list page - show the info  -->
                <p>";
                // line 174
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.app.info", array(), "messages");
                echo "</p><br>
                    ";
            }
            // line 175
            echo " 
                ";
        }
        // line 177
        echo "            </div> <!-- End Navigate col -->

            <div class=\"mlab_three_col\"> <!-- Developed by col -->
                <h3></h3>
                <p>Developed by the Sinett project at FFI.no</p>
            </div> <!-- Developed by col -->

        </div><!-- End Editor menu container -->

        <div id=\"mlab_user_menu_dropdown_content\" class=\"dropdown_user_menu\"><!-- User menu container -->

            <div class=\"mlab_one_user_col\"> <!-- User col -->
                <h3>";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.user.info.heading", array(), "messages");
        echo "</h3>

                ";
        // line 191
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                <p>";
            // line 192
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                    <a target=\"_top\" href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                </p>
                ";
        } else {
            // line 195
            echo " <!-- If loged in -->
                <p>";
            // line 196
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.log.info", array(), "messages");
            echo ":<br>
                    <b>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</b><br><br>

                    <a target=\"_top\" href=\"";
            // line 199
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                ";
        }
        // line 201
        echo "            </div>

        </div><!-- End User menu container -->


        ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 207
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 208
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "
    </body>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "MLAB Login";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/reset.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery-qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />        
        ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.1.4.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ui-1.11.4.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.form.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.uploadfile-4.0.11.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.qtip-3.0.3.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bowser.js"), "html", null, true);
        echo "'></script>

            <script type=\"text/javascript\">

                \$(document).ready(function() {
                    if (bowser.gecko || bowser.chrome) {

                        //Checkes if the editor menu icon is cliked
                        \$(\"#mlab_editor_menu_dropdown\").on(\"click\", function(event) {
                            if (\$('#mlab_user_menu_dropdown_content').hasClass('mlab_show_user_dropdown')) {
                                //User menu is open and needs to be closed 
                                \$('#mlab_user_menu_dropdown_content').toggleClass('mlab_show_user_dropdown');
                                \$('#mlab_user_menu_dropdown').toggleClass('mlab_show_user_dropdown_tab_selected');
                            }
                            //Toggles the Editor menu on and off
                            \$('#mlab_editor_menu_dropdown_content').toggleClass('mlab_show_editor_dropdown');
                            \$('#mlab_editor_menu_dropdown').toggleClass('mlab_show_editor_dropdown_tab_selected');
                            event.stopPropagation();
                        });

                        //Checkes if the user menu icon is cliked
                        \$(\"#mlab_user_menu_dropdown\").on(\"click\", function(event) {
                            if (\$('#mlab_editor_menu_dropdown_content').hasClass('mlab_show_editor_dropdown')) {
                                //Editor menu is open and needs to be closed 
                                \$('#mlab_editor_menu_dropdown_content').toggleClass('mlab_show_editor_dropdown');
                                \$('#mlab_editor_menu_dropdown').toggleClass('mlab_show_editor_dropdown_tab_selected');
                            }
                            //Toggles the User menu on and off
                            \$('#mlab_user_menu_dropdown_content').toggleClass('mlab_show_user_dropdown');
                            \$('#mlab_user_menu_dropdown').toggleClass('mlab_show_user_dropdown_tab_selected');
                            event.stopPropagation();
                        });

                        //Listens for any click
                        \$(document).on('click', function(event) {
                            // Checks if editor menu is open
                            if (\$('#mlab_editor_menu_dropdown_content').hasClass('mlab_show_editor_dropdown')) {
                                //Editor menu is open - close it
                                \$('#mlab_editor_menu_dropdown_content').toggleClass('mlab_show_editor_dropdown');
                                \$('#mlab_editor_menu_dropdown').toggleClass('mlab_show_editor_dropdown_tab_selected');
                            }
                            // Checks if user menu is open
                            if (\$('#mlab_user_menu_dropdown_content').hasClass('mlab_show_user_dropdown')) {
                                //User menu is open - close it
                                \$('#mlab_user_menu_dropdown_content').toggleClass('mlab_show_user_dropdown');
                                \$('#mlab_user_menu_dropdown').toggleClass('mlab_show_user_dropdown_tab_selected');
                            }

                        });
                        \$(\"#fos_user_security_check\").show();
                    } else {
                        \$(\"#fos_user_security_check\").html(\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab_editor.init.js.alert.browser.support", array(), "messages");
        echo "\").show();
                                }

                            });
            </script>


        ";
    }

    // line 125
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 126
        echo "                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 126,  484 => 125,  472 => 81,  418 => 30,  414 => 29,  410 => 28,  406 => 27,  402 => 26,  397 => 25,  394 => 24,  388 => 21,  384 => 20,  380 => 19,  376 => 18,  371 => 17,  368 => 16,  362 => 15,  355 => 213,  349 => 212,  340 => 209,  335 => 208,  330 => 207,  326 => 206,  319 => 201,  312 => 199,  307 => 197,  303 => 196,  300 => 195,  292 => 193,  288 => 192,  284 => 191,  279 => 189,  265 => 177,  261 => 175,  256 => 174,  252 => 173,  249 => 172,  245 => 170,  243 => 169,  240 => 168,  237 => 167,  229 => 165,  227 => 164,  223 => 163,  219 => 161,  215 => 160,  207 => 159,  205 => 158,  202 => 157,  194 => 156,  192 => 155,  188 => 154,  180 => 151,  175 => 148,  170 => 147,  166 => 146,  163 => 145,  154 => 142,  150 => 141,  146 => 140,  141 => 138,  136 => 136,  127 => 129,  123 => 127,  121 => 125,  116 => 123,  113 => 122,  106 => 118,  102 => 117,  97 => 115,  91 => 113,  89 => 112,  79 => 105,  72 => 101,  66 => 98,  57 => 94,  50 => 89,  48 => 24,  45 => 23,  43 => 16,  39 => 15,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle::layout.html.twig", "/var/www/html/mlab/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
