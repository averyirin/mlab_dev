<?php

/* SinettMLABBuilderBundle:App:build_app.html.twig */
class __TwigTemplate_8fd2a1af1a9402b8216b02f22ce5678fb0a65fb6b36607bc76670ff2decb380d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8' />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "            
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "            
            
            
        <link rel='icon' type='image/x-icon' href='";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "' />
    </head>
    

    <body id='mlab_editor'>
    \t<div class='mlab_min_page_width'>
    \t\t<div class='mlab_align_menu_elements'>
                <div class='mlab_permanent_top_menu mlab_gradient'>
                    <ul id='mlab_menu'>
                        <li>
                            <a target='_top' href='";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
        echo "'>
                                <div id='mlab_menu_dropdown'>
                                    <img class='mlab_basic_menu_drop' title='";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.menu.tooltip.back.app.list", array(), "messages");
        echo "' src='/img/logo_menu.png' alt='logo' />
                                </div>
                            </a>
                        </li>  <!-- The Mlab log -->
    
                        <li id='mlab_editor_menu_dropdown'>    
                            <img class='basic_menu_icon' title='";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.tooltip", array(), "messages");
        echo "' src='/img/menu_icon.png' alt='logo' > 
                        </li>
                         <div id='mlab_editor_menu_dropdown_content' class='dropdown_editor_menu'><!-- Editor menu container -->
                            <div class='mlab_one_col'> <!-- Navigate col -->
                                <h3>";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.heading.links", array(), "messages");
        echo "</h3>

                                ";
        // line 114
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        echo " <!-- Finds the page you are on -->

                                ";
        // line 116
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                                    <p>";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                                        <a target='_top' href='";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    </p>

                                ";
        } else {
            // line 121
            echo " <!-- If loged in -->
                                    ";
            // line 122
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()), 0, array(), "array") != "ROLE_USER") || !twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null)))) {
                echo " <!-- If no liks to show - hide the links info -->
                                        <p>";
                // line 123
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.info", array(), "messages");
                echo ":</p>
                                    ";
            }
            // line 124
            echo " 

                                    <!-- if path('app_builder_index') not in currentPath  %} If on app list page - don't show the link to this page  -->
                                    <a target='_top' href='";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
            echo "'>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.app.builder", array(), "messages");
            echo "</a>


                                    ";
            // line 130
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo " <!-- Show this links if not on the page and have the role ROLE_ADMIN or higher  -->
                                        ";
                // line 131
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 132
                    echo "                                            <a target='_top' href='";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_apps");
                    echo "'>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.app", array(), "messages");
                    echo "</a>
                                        ";
                }
                // line 133
                echo " 
                                        ";
                // line 134
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 135
                    echo "                                            <a target='_top' href='";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                    echo "'>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.admin.users", array(), "messages");
                    echo "</a>
                                        ";
                }
                // line 136
                echo " 
                                    ";
            }
            // line 137
            echo " 

                                    ";
            // line 139
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                echo " <!-- Show this link if not on the page and have the role ROLE_SUPER_ADMIN  -->
                                        ";
                // line 140
                if (!twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                    // line 141
                    echo "                                                <a target='_top' href='";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("system");
                    echo "'>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.link.system", array(), "messages");
                    echo "</a>
                                        ";
                }
                // line 143
                echo "                                    ";
            }
            // line 144
            echo "
                                    ";
            // line 145
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 146
                echo "                                                <br>
                                    ";
            }
            // line 148
            echo "
                                    ";
            // line 149
            if (twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index"), (isset($context["currentPath"]) ? $context["currentPath"] : null))) {
                echo " <!-- If on app list page - show the info  -->
                                                <p>";
                // line 150
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.links.app.info", array(), "messages");
                echo "</p><br>
                                    ";
            }
            // line 151
            echo " 
                                ";
        }
        // line 153
        echo "                                                
                                 <h3>";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.heading.save", array(), "messages");
        echo "</h3>   
                                 <p>";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.save.info", array(), "messages");
        echo "</p>
                                 <a id='mlab_page_save_all'>
                                    <div class='mlab_save_icon' title='";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.save.tooltip", array(), "messages");
        echo "'></div>
                                </a>  
                            </div> <!-- End Navigate & Save col -->
                            

                            <div class='mlab_one_col'> <!-- Testing col -->
                                <div class='mlab_end_appbuilder'>
                                    <h3>";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.test.app", array(), "messages");
        echo "</h3>
                                    <h4>";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.test.app.web", array(), "messages");
        echo "</h4>
                                    <p>";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.test.app.web.info", array(), "messages");
        echo "</p>
                                            <a href='javascript: mlab.dt.management.page_preview();'>
                                                <div id='mlab_preview_icon' title='";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.menu.tooltip.test.app.web", array(), "messages");
        echo "'></div>
                                            </a> 
                                    </br>
                                    <h4>";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.test.app.mob", array(), "messages");
        echo "</h4>
                                    <p>";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.test.app.mob.info", array(), "messages");
        echo "</p>
                                    <div id='mlab_download_qr2'><p class='qr_wait_text'>";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.test.app.mob.qr.wait.text", array(), "messages");
        echo "</p>
                                    </div>

                ";
        // line 180
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["mlab_variables"]) ? $context["mlab_variables"] : null), "compiler_service", array()), "supported_platforms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 181
            echo "                                        <a href='javascript: mlab.dt.management.compiler.get_app(\"";
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "\");'>
                                            <div id='mlab_download_";
            // line 182
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "_icon' class='mlab_compile_button mlab_download_";
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "_icon' title='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.builder.edit.menu.test.app.mob.tooltip", array("%platform%" => $context["platform"])), "html", null, true);
            echo "'>
                                                <img class='mlab_hidden' src='/img/spinner.gif'>
                                            </div> 
                                        </a> 
                                        <div data-mlab-download-link-info='";
            // line 186
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "'>
                                            <div id='mlab_download_qr_link_";
            // line 187
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "' class='mlab_download_qr_link'>&nbsp;</div>
                                            <div id='mlab_download_link_";
            // line 188
            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
            echo "'class='mlab_download_link'>&nbsp;</div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                             
                                </div>
                            </div> <!-- End Testing col -->
                            

                              <div class='mlab_one_col'> <!-- Feature col -->
                                <div class='mlab_sub_menu'>
                                    <h3>";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.download.source", array(), "messages");
        echo "</h3>
                                    <p> ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.download.source.info", array(), "messages");
        echo "</p>
                                    <a href='javascript: mlab.dt.management.compiler.get_app_source();'>
                                        <div class='mlab_source_code_icon' title='";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.download.source", array(), "messages");
        echo "'></div>
                                    </a>
                                    
                                    <br><br>
                                    <h3>";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.delete.locks", array(), "messages");
        echo "</h3>
                                    <p> ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.delete.locks.info", array(), "messages");
        echo "</p>
                                    <a href='javascript: mlab.dt.management.app_remove_locks();'>
                                        <div class='mlab_unlock_icon' title='";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.heading.delete.locks", array(), "messages");
        echo "'></div>
                                    </a>
                                </div>
                            </div> <!-- End Feature col -->
                            
                            
                            <div class='mlab_three_col'> <!-- Developed by col -->
                                <h3></h3>
                                <p class=\"left\">Developed by the Sinett project at FFI.no</p> <p id=\"mlab_credit_icons\" class=\"right mlab_credit_icons\">Credit for icones downloaded from flaticon.com</p>
                            </div> <!-- End Developed by col -->
                        </div><!-- End Editor menu container -->
                        
                        <li class='single'><div class='mlab_statusbar_permanent_label'>";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.statusbar.info.permanent.label", array(), "messages");
        echo ":</div></li>
                        <li class='single'><div id='mlab_statusbar_permanent' title='";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.edit.menu.tooltip.app.name", array(), "messages");
        echo "'>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.statusbar.info.permanent", array(), "messages");
        echo "</div></li>
                        <li class='single'><div id='mlab_statusbar_progress_spin'>&nbsp;</div></li>
                        <li class='single'><div id='mlab_statusbar_temporary'>&nbsp;</div></li>
                        <li class='single'><div id='mlab_statusbar_compiler'>&nbsp;</div></li>
                        <li class='single'><div id='mlab_statusbar_progressbar'><progress id='mlab_progressbar' class='mlab_progressbar' value='10' max='100'></progress></div></li>
                        <li class='single menu_right'><img id='mlab_page_help' class='mlab_help_icon' src='/img/help.png' title='";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.help.menu.tooltip", array(), "messages");
        echo "' alt='logo'></li>
                        
                        <li id='mlab_user_menu_dropdown' class='menu_right'>
                            <img class='mlab_user_info_icon' src='/img/user.png' title='";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.user.info.main.tooltip", array(), "messages");
        echo "' alt='logo' >
                        </li>
                        <div id='mlab_user_menu_dropdown_content' class='dropdown_user_menu'><!-- User menu container -->
                            <div class='mlab_one_user_col'> <!-- User col -->
                                <h3>";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.user.info.heading", array(), "messages");
        echo "</h3>
                                ";
        // line 233
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            echo " <!-- If not loged in -->
                                    <p>";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.login.info", array(), "messages");
            echo ":<br>
                                        <a target='_top' href='";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    </p>
                                ";
        } else {
            // line 237
            echo " <!-- If logged in -->
                                    <p>";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.menu.log.info", array(), "messages");
            echo ":<br>
                                        <b>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</b><br><br>
                                    <a target='_top' href='";
            // line 240
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                                ";
        }
        // line 242
        echo "                            </div>
                        </div><!-- End User menu container -->                       
                    </ul>
                    
                     <div id='mlab_page_control'>
                            <div class='mlab_page_control_label'>";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.heading", array(), "messages");
        echo ":</div>
                            <h3 id='mlab_page_control_title' title='";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.page.name", array(), "messages");
        echo "'></h3>
                            <div id='mlab_page_control_title_actions' class='mlab_hidden'>
                                <button id='mlab_page_control_save_title' class='mlab_dt_button_ok_left' title='";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.save", array(), "messages");
        echo "'>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.save", array(), "messages");
        echo "</button>
                                <button id='mlab_page_control_cancel_title' class='mlab_dt_button_cancel_left' title='";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.cancel", array(), "messages");
        echo "'>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.cancel", array(), "messages");
        echo "</button>
                            </div>
                            <img id='mlab_page_control_pagelist' src='/img/tools/dropdown.png' title='";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.pagelist", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='redo' class='mlab_tools mlab_button_redo' src='/img/tools/redo.png' title='";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.page.tooltip.redo", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='undo' class='mlab_tools mlab_tools_space mlab_button_undo' src='/img/tools/undo.png' title='";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.page.tooltip.undo", array(), "messages");
        echo "'> 
                            <img id='mlab_page_control_new' src='/img/menu_new_icon.png' title='";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.new", array(), "messages");
        echo "'>
                            <img id='mlab_page_control_import' src='/img/menu_copy_icon.png' title='";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.import", array(), "messages");
        echo "' >
                            
                    </div>
                 </div>

                    <div id='mlab_page_management'>
                        <div id='mlab_existing_pages'></div>
                        <div id='mlab_page_management_info'>
                            ";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.menu.delete.info", array(), "messages");
        echo ":
                            <img id='mlab_page_control_delete' src='/img/delete_page.png' title='";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.menu.delete", array(), "messages");
        echo "'>
                        </div>
                    </div>
                </div>
                
                    <div class='container'>
                         <!-- This is the actual content of the page, very little is required as it is loaded from external files -->
                        <div id='mlab_template_warning'></div>

                        <div id='mlab_toolbar_components'></div>

                        <div id='mlab_editor_chrome'>
                        <div id='mlab_editable_area_placeholder'></div>
                        <p />
                        </div>

                        <div id='mlab_toolbar_for_components' class='mlab_toolbar_for_components mlab_buttons_item_manipulation_list single mlab_hidden' style='display: none'>
                            <div id='mlab_component_toolbar_heading'    class='mlab_component_toolbar_heading'>Tools</div>
                            <img data-mlab-comp-tool='move_up'          class='mlab_tools_all' src='/img/tools/up.png'         title='";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.move.up", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='move_down'        class='mlab_tools_all' src='/img/tools/down.png'       title='";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.move.down", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='delete'           class='mlab_tools_all' src='/img/tools/delete.png'     title='";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.delete", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='help'             class='mlab_tools_all' src='/img/tools/help.png'       title='";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.help", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='cut'              class='mlab_tools_all' src='/img/tools/cut.png'   title='";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.cut", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='copy'             class='mlab_tools_all' src='/img/tools/copy.png'  title='";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.copy", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='paste'            class='mlab_tools_all' src='/img/tools/paste.png' title='";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.paste", array(), "messages");
        echo "'>
                            <hr  class='mlab_tools_line' >
                            <img data-mlab-comp-tool='comp_size'        class='mlab_tools mlab_hidden'                  src='/img/tools/resize.png'      title='";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.resize", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='comp_aspect'      class='mlab_tools mlab_hidden'                  src='/img/tools/aspect.png'      title='";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.aspect.ratio", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='storage_plugin'   class='mlab_tools mlab_tools_space mlab_hidden' src='/img/tools/storage.png'     title='";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.storage", array(), "messages");
        echo "'>
                            <img data-mlab-comp-tool='credentials'      class='mlab_tools mlab_tools_space mlab_hidden' src='/img/tools/credentials.png' title='";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.tooltip.credentials", array(), "messages");
        echo "'>
                            
                            <div data-mlab-get-info='storage_plugins'   class='mlab_hidden'></div>
                            <div data-mlab-get-info='credentials'       class='mlab_hidden'></div>
                            <div class='mlab_component_context_menu'></div>
                            <div class='mlab_newline'>&nbsp;</div>
                        </div>

<!--SPSP                        <div id='mlab_storage_plugin_list' style='display: none;'></div> -->

                        <div id='mlab_component_size_list' data-mlab-get-info='comp_sizes' style='display: none;'>
                            <ul>
                                <li data-mlab-comp-size='small'>";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.size.small", array(), "messages");
        echo "</li>
                                <li data-mlab-comp-size='medium'>";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.size.medium", array(), "messages");
        echo "</li>
                                <li data-mlab-comp-size='large'>";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.size.large", array(), "messages");
        echo "</li>
                            </ul>
                        </div>

                        <div id='mlab_component_aspect_list' data-mlab-get-info='comp_aspects' style='display: none;'>
                            <ul>
                                <li data-mlab-comp-aspect='4:3'>";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.aspect.4.3", array(), "messages");
        echo "</li>
                                <li data-mlab-comp-aspect='16:9'>";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.aspect.16.9", array(), "messages");
        echo "</li>
                                <li data-mlab-comp-aspect='1:1'>";
        // line 317
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.components.toolbar.component.aspect.1.1", array(), "messages");
        echo "</li>
                            </ul>
                        </div>

                        <div id='mlab_dialog_confirm' class=\"mlab_hidden\" title='";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.tooltip.not.saved", array(), "messages");
        echo "'>
                            <p><span class='ui-icon ui-icon-alert mlab_dialog_confirm_text'>";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.not.saved", array(), "messages");
        echo "</span></p>
                        </div>

                        <div id='mlab_dialog_delete' class=\"mlab_hidden\" title='";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.dialog.delete.title", array(), "messages");
        echo "'>
                            <p><span class='ui-icon ui-icon-alert'></span>";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.dialog.delete.text", array(), "messages");
        echo "</p>
                        </div>

                        <div id='mlab_dialog_import' class=\"mlab_hidden\" title='";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.import", array(), "messages");
        echo "'>
                            <form id=\"mlab_form_import_file\" name=\"mlab_form_import_file\">
                                <input type=\"file\" id=\"mlabImportFile\" name=\"mlabImportFile\">
                                <input type=\"hidden\" id=\"mlabImportAppId\" name=\"app_id\">
                                <button class='mlab_dt_button_ok_left' title='";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.page.tooltip.import", array(), "messages");
        echo "' onclick=\"\$('#mlabImportAppId').val(mlab.dt.app.id); mlab.dt.management.file_import(); return false;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.dt.api.js.uploadMedia.qtip.content.5", array(), "messages");
        echo "</button>
                            </form>
                        </div>

                        <div id='mlab_overlay'><div class='mlab_modal'>";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.overlay.info", array(), "messages");
        echo "</div></div>
                        <div style='clear: both;'>&nbsp;</div>
                    </div>
               
\t        </div>
        </div>
        <div class='mlab_editor_footer'>
             <img id='mlab_button_help' class='mlab_editor_footer_help_icon mlab_button_help' src='/img/helpIcon.png' title='";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.footer.tooltip.help", array(), "messages");
        echo "'>
             <div class='mlab_editor_footer_help'>";
        // line 345
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("build_app.footer.help", array(), "messages");
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.page.title.app.bulider.editor", array(), "messages");
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/reset.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_reset_editor.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery-ui.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.qtip.nightly.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.uploadfile-4.0.11.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <!-- <link href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.uploadfile.css"), "html", null, true);
        echo "' rel='stylesheet' /> -->
            <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_all.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_menu.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_editor.css"), "html", null, true);
        echo "' rel='stylesheet' />
            <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/mlab_component_config.css"), "html", null, true);
        echo "' rel='stylesheet' />
        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.1.4.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.mobile-1.4.5.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ui-1.11.4.js"), "html", null, true);
        echo "'></script>
            <!-- <script src='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.uploadfile-4.0.11.js"), "html", null, true);
        echo "'></script> -->
            <script src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.form.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.uploadfile-4.0.11.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.qtip.nightly.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ddslick-1.0.0.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.qrcode-0.12.0.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.contextmenu-1.0.0.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/spin.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.spin.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bowser.js"), "html", null, true);
        echo "'></script>

            <script type='text/javascript'>
                //these vars are generated from backend and are required for the initialisation of the mlab object later
                document.mlab_temp_vars = {locale: '";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "', app_id: ";
        echo twig_escape_filter($this->env, (isset($context["mlab_app_id"]) ? $context["mlab_app_id"] : null), "html", null, true);
        echo ", page_num: '";
        echo twig_escape_filter($this->env, (isset($context["mlab_app_page_num"]) ? $context["mlab_app_page_num"] : null), "html", null, true);
        echo "', appbuilder_root_url: '";
        echo twig_escape_filter($this->env, (isset($context["mlab_appbuilder_root_url"]) ? $context["mlab_appbuilder_root_url"] : null), "html", null, true);
        echo "' };
                _tr = ";
        // line 48
        echo (isset($context["mlab_translations"]) ? $context["mlab_translations"] : null);
        echo ";
                
                //opens page help from a url and displays it in a qtip
                function page_help(event) {
                    var qTipClasses = 'qtip-light mlab_dt_box_style mlab_zindex_top_tooltip mlab_page_help_qTip mlab_dt_wide_qtip_box';
                    var title = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.dt.design.js.qtip.help.title", array(), "messages");
        echo "\";
                    var owner = event.currentTarget;
                    var url = \"";
        // line 55
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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.dt.design.js.alert.help.notfound", array(), "messages");
        echo "\");
                        }
                    });
                }
            </script>
            ";
        // line 77
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 78
            echo "                ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "e74f770_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e74f770_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e74f770_part_1.js");
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\"></script>
                ";
            } else {
                // asset "e74f770"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e74f770") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e74f770.js");
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\"></script>
                ";
            }
            unset($context["asset_url"]);
            // line 81
            echo "            ";
        } else {
            // line 82
            echo "                ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "0524179_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0524179_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/0524179_part_1.js");
                // line 83
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\"></script>
                ";
            } else {
                // asset "0524179"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0524179") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/0524179.js");
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                echo "\"></script>
                ";
            }
            unset($context["asset_url"]);
            // line 85
            echo "            ";
        }
        // line 86
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:App:build_app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  851 => 86,  848 => 85,  834 => 83,  829 => 82,  826 => 81,  812 => 79,  807 => 78,  805 => 77,  797 => 72,  777 => 55,  772 => 53,  764 => 48,  754 => 47,  747 => 43,  743 => 42,  739 => 41,  735 => 40,  731 => 39,  727 => 38,  723 => 37,  719 => 36,  715 => 35,  711 => 34,  707 => 33,  703 => 32,  698 => 31,  695 => 30,  689 => 27,  685 => 26,  681 => 25,  677 => 24,  673 => 23,  669 => 22,  665 => 21,  661 => 20,  657 => 19,  652 => 18,  649 => 17,  643 => 5,  634 => 345,  630 => 344,  620 => 337,  611 => 333,  604 => 329,  598 => 326,  594 => 325,  588 => 322,  584 => 321,  577 => 317,  573 => 316,  569 => 315,  560 => 309,  556 => 308,  552 => 307,  537 => 295,  533 => 294,  529 => 293,  525 => 292,  520 => 290,  516 => 289,  512 => 288,  508 => 287,  504 => 286,  500 => 285,  496 => 284,  475 => 266,  471 => 265,  460 => 257,  456 => 256,  452 => 255,  448 => 254,  444 => 253,  437 => 251,  431 => 250,  426 => 248,  422 => 247,  415 => 242,  408 => 240,  404 => 239,  400 => 238,  397 => 237,  389 => 235,  385 => 234,  381 => 233,  377 => 232,  370 => 228,  364 => 225,  354 => 220,  350 => 219,  335 => 207,  330 => 205,  326 => 204,  319 => 200,  314 => 198,  310 => 197,  301 => 190,  292 => 188,  288 => 187,  284 => 186,  273 => 182,  268 => 181,  263 => 180,  257 => 173,  253 => 172,  249 => 171,  243 => 168,  238 => 166,  234 => 165,  230 => 164,  220 => 157,  215 => 155,  211 => 154,  208 => 153,  204 => 151,  199 => 150,  195 => 149,  192 => 148,  188 => 146,  186 => 145,  183 => 144,  180 => 143,  172 => 141,  170 => 140,  166 => 139,  162 => 137,  158 => 136,  150 => 135,  148 => 134,  145 => 133,  137 => 132,  135 => 131,  131 => 130,  123 => 127,  118 => 124,  113 => 123,  109 => 122,  106 => 121,  97 => 118,  93 => 117,  89 => 116,  84 => 114,  79 => 112,  72 => 108,  63 => 102,  58 => 100,  45 => 90,  40 => 87,  38 => 30,  35 => 29,  32 => 17,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:App:build_app.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/App/build_app.html.twig");
    }
}
