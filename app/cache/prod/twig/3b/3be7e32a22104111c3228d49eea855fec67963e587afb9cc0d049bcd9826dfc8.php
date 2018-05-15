<?php

/* ::base.html.twig */
class __TwigTemplate_719da79e833af43d7a7bff425d039d9e31e2fb0bff59b35b2561fcbc3fbd192d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
";
        // line 13
        echo "
";
        // line 17
        echo "        <meta charset=\"UTF-8\" />
        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "                
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "  
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
    </head>
    
    <body class=\"mlab_base\">
    \t<div class=\"mlab_min_page_width\">     
            <ul id=\"mlab_menu\">
                <li>
                    <a target=\"_top\" href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
        echo "\"><div id='mlab_menu_dropdown'><img class=\"mlab_basic_menu_drop\" title='";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.mlab.logo.tooltip", array(), "messages");
        echo "' src=\"/img/logo_menu.png\" alt=\"logo\" /></div></a>
                </li>  <!-- The Mlab log -->

                <li id=\"mlab_editor_menu_dropdown\">    
                        <img class=\"basic_menu_icon\" title='";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.mlab.menu.tooltip", array(), "messages");
        echo "' src=\"/img/menu_icon.png\" alt=\"logo\" > 
                </li>
                <div id=\"mlab_editor_menu_dropdown_content\" class=\"dropdown_editor_menu\"><!-- Editor menu container -->
                    <div class=\"mlab_one_col\"> <!-- Navigate col -->
                        <h3>";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.heading.links", array(), "messages");
        echo "</h3>

                        ";
        // line 130
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        echo " <!-- Finds the page you are on -->

                        ";
        // line 132
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                            <p>";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                                <a target=\"_top\" href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            </p>

                        ";
        } else {
            // line 137
            echo " <!-- If loged in -->
                            ";
            // line 138
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USER") || !twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null)))) {
                echo " <!-- If no liks to show - hide the links info -->
                                <p>";
                // line 139
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.info", array(), "messages");
                echo ":</p>
                            ";
            }
            // line 140
            echo " 

                            <!-- if path('app_builder_index') not in currentPath  %} If on app list page - don't show the link to this page  -->
                            <a target=\"_top\" href=\"";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.app.builder", array(), "messages");
            echo "</a>

                            ";
            // line 145
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo " <!-- Show this links if not on the page and have the role ROLE_ADMIN or higher  -->
                                ";
                // line 146
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 147
                    echo "                                    <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.app", array(), "messages");
                    echo "</a>
                                ";
                }
                // line 148
                echo " 
                                ";
                // line 149
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 150
                    echo "                                    <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.users", array(), "messages");
                    echo "</a>
                                ";
                }
                // line 151
                echo " 
                            ";
            }
            // line 152
            echo " 

                            ";
            // line 154
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                echo " <!-- Show this link if not on the page and have the role ROLE_SUPER_ADMIN  -->
                                ";
                // line 155
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 156
                    echo "                                        <a target=\"_top\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system");
                    echo "\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.system", array(), "messages");
                    echo "</a>
                                ";
                }
                // line 158
                echo "                            ";
            }
            // line 159
            echo "
                            ";
            // line 160
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 161
                echo "                                        <br>
                            ";
            }
            // line 163
            echo "
                            ";
            // line 164
            if (twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                echo " <!-- If on app list page - show the info  -->
                                        <p>";
                // line 165
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.app.info", array(), "messages");
                echo "</p><br>
                            ";
            }
            // line 166
            echo " 
                        ";
        }
        // line 168
        echo "                    </div> <!-- End Navigate col -->

                    <div class=\"mlab_three_col\"> <!-- Developed by col -->
                        <h3></h3>
                        <p>Developed by the Sinett project at FFI.no</p>
                        <p class=\"left\">Some icons made by </p><a class=\"left\" href=\"http://www.freepik.com\" title=\"Freepik\"><p class=\"left\">Freepik</p></a> <p class=\"left\"> from </p><a class=\"left\" href=\"http://www.flaticon.com\" title=\"Flaticon\"><p class=\"left\"> www.flaticon.com</p></a><p class=\"left\"> is licensed by </p><a href=\"http://creativecommons.org/licenses/by/3.0/\" title=\"Creative Commons BY 3.0\" target=\"_blank\"><p class=\"left\">CC 3.0 BY</p></a></p>
                      </div> <!-- Developed by col -->
  
                  </div><!-- End Editor menu container -->
        
                <li class=\"single menu_right\">
                    <img class=\"mlab_help_icon\" src=\"/img/help.png\" title='";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.help.menu.tooltip", array(), "messages");
        echo "' alt=\"logo\" onclick=\"page_help(event);\">
                </li>

                <li id=\"mlab_user_menu_dropdown\" class=\"menu_right\">
                    <img class=\"mlab_user_info_icon\" src=\"/img/user.png\" title='";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.user.info.main.tooltip", array(), "messages");
        echo "' alt=\"logo\" >
                </li>
                <div id=\"mlab_user_menu_dropdown_content\" class=\"dropdown_user_menu\"><!-- User menu container -->
                    <div class=\"mlab_one_user_col\"> <!-- User col -->
                        <h3>";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.user.info.heading", array(), "messages");
        echo "</h3>

                        ";
        // line 189
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                            <p>";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                                <a target=\"_top\" href=\"";
            // line 191
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            </p>
                        ";
        } else {
            // line 193
            echo " <!-- If loged in -->
                            <p>";
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.log.info", array(), "messages");
            echo ":<br>
                                <b>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</b><br><br>

                            <a target=\"_top\" href=\"";
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                        ";
        }
        // line 199
        echo "                    </div>
                </div><!-- End User menu container -->
            </ul>
            <div class=\"mlab_align_menu_elements\">
                <div class=\"container\">
                    ";
        // line 204
        $this->displayBlock('body', $context, $blocks);
        // line 205
        echo "                </div>
            </div>    
        </div>
      
    </body>
</html>
";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo "MLAB";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "            <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/reset.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery-qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.uploadfile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.contextmenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />        
        ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.1.4.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ui-1.11.4.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.form.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.uploadfile-4.0.11.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.qtip-3.0.3.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bowser.js"), "html", null, true);
        echo "'></script>

            <script type=\"text/javascript\">
                \$(document).ready(function() {

                    //Checkes if the editor menu icon is clicked
                    \$(\"#mlab_editor_menu_dropdown\").on(\"click\",function(event) {   
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

                    //Checkes if the user menu icon is clicked
                    \$(\"#mlab_user_menu_dropdown\").on(\"click\",function(event) { 
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
                     \$(document).on('click', function (event) {
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
               });

               function page_help(event) {
                   var qTipClasses = 'qtip-light mlab_dt_box_style mlab_zindex_top_tooltip mlab_page_help_qTip mlab_dt_wide_qtip_box';
                   var title = \"Help\";
                   var owner = event.currentTarget;
                   var url = \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_getHtml", array("route" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))), "html", null, true);
        echo "\";
                   \$.getJSON(url, function(data) {
                       if (data.result == \"SUCCESS\") {
                            \$(owner).qtip({
                                solo: false,
                                content:    {
                                            text: data.html,
                                            title: title,
                                            button: true
                                            },
                                position:   { my: 'topRight', at: 'bottomMiddle', adjust: { screen: true }, effect: false },
                                show:       { ready: true, modal: { on: false } },
                                hide:       false,
                                style:      { classes: qTipClasses },
                                events:     {   hide: function(event, api) { api.destroy(); } }
                            });
                       } else {
                           alert(\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.mlab.menu.help.notfound", array(), "messages");
        echo "\");
                       }

                   });
               }
            </script>

        ";
    }

    // line 204
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 204,  428 => 105,  408 => 88,  352 => 35,  348 => 34,  344 => 33,  340 => 32,  336 => 31,  331 => 30,  328 => 29,  322 => 26,  318 => 25,  314 => 24,  310 => 23,  306 => 22,  302 => 21,  297 => 20,  294 => 19,  288 => 18,  278 => 205,  276 => 204,  269 => 199,  262 => 197,  257 => 195,  253 => 194,  250 => 193,  242 => 191,  238 => 190,  234 => 189,  229 => 187,  222 => 183,  215 => 179,  202 => 168,  198 => 166,  193 => 165,  189 => 164,  186 => 163,  182 => 161,  180 => 160,  177 => 159,  174 => 158,  166 => 156,  164 => 155,  160 => 154,  156 => 152,  152 => 151,  144 => 150,  142 => 149,  139 => 148,  131 => 147,  129 => 146,  125 => 145,  118 => 143,  113 => 140,  108 => 139,  104 => 138,  101 => 137,  92 => 134,  88 => 133,  84 => 132,  79 => 130,  74 => 128,  67 => 124,  58 => 120,  48 => 113,  45 => 112,  43 => 29,  40 => 28,  38 => 19,  34 => 18,  31 => 17,  28 => 13,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/var/www/html/mlab/app/Resources/views/base.html.twig");
    }
}
