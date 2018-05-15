<?php

/* SinettMLABBuilderBundle:App:builder.html.twig */
class __TwigTemplate_10c6465d1af596f05d1022e640332f78d1e1241da433b0bb2167e7a8367194dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("::base.html.twig", "SinettMLABBuilderBundle:App:builder.html.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.page.title.app.bulider.index", array(), "messages");
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ddslick-1.0.0.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.contextmenu-1.0.0.js"), "html", null, true);
        echo "'></script>
        
    <script>
\t\tvar url_new = \"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_new");
        echo "\";
\t\tvar url_edit = \"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_edit", array("id" => 0));
        echo "\";
        var mlab_current_app_id = 0;
\t\t
\t\t\$(document).ready(function() {

\t\t\t\$(\"#builder_dialog_new_app\").dialog( {
\t\t\t\t\ttitle: \"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.dialog.new.app.title", array(), "messages");
        echo "\",
\t\t\t\t\tautoOpen: false,
\t\t\t\t    show: { effect: \"blind\", duration: 500 },
\t\t\t\t    hide: { effect: \"blind\", duration: 500 },
                    close: function(event, ui) { \$(\"#builder_dialog_new_app\").html(\"\") },
\t\t\t\t    width: 800,
\t\t\t\t    height: 670,
\t\t\t\t    modal: true,
\t\t\t\t});
        
            \$('.builder_app_properties').contextPopup({
                title: '";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.title", array(), "messages");
        echo "',
                items: [
                  {label:'";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.edit.content", array(), "messages");
        echo "',            icon:'/img/menu_field_edit.png',    action:function() { mlab_edit_app_content(); } },
                  /*{label:'";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.edit.details", array(), "messages");
        echo "',            icon:'/img/properties.png',         action:function() { mlab_edit_app_properties(); } },*/
                  null, // divider
                  {label:'";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.download", array(), "messages");
        echo "',                icon:'/img/tools/down.png',         action:function() { mlab_download_app(); } },
                  {label:'";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.copy.link", array(), "messages");
        echo "',               icon:'/img/copy_page.png',          action:function() { mlab_copy_app_link() } },
                  null, // divider
                  {label:'";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.new.incremental", array(), "messages");
        echo "',         icon:'/img/newVersion.png',         action:function() { mlab_create_new_version(0.1); } },
                  {label:'";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.new.major", array(), "messages");
        echo "',               icon:'/img/newVersion.png',         action:function() { mlab_create_new_version(1); } },
                  {label:'";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.new.branch", array(), "messages");
        echo "',              icon:'/img/newVersion.png',         action:function() { mlab_create_new_branch(); } },
                  ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "                        null, // divider
                        {label:'";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.send.market", array(), "messages");
            echo "',       icon:'/img/tools/storage.png',      action:function() { mlab_send_app_to_market() } },
                        {label:'";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.hide.market", array(), "messages");
            echo "',       icon:'/img/not_checked.png',        action:function() { mlab_hide_app_from_market() } },
                        {label:'";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.withdraw.market", array(), "messages");
            echo "',   icon:'/img/notPublished.png',       action:function() { mlab_withdraw_app_from_market() } },
                        null, // divider
                        {label:'";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.popup.app.properties.label.delete", array(), "messages");
            echo "',            icon:'/img/delete2.png',            action:function() { mlab_delete_app() } },
                  ";
        }
        // line 57
        echo "                ]
              });
              
             \$('.builder_app_properties').on(\"click\", function() { \$(this).contextmenu() });

\t\t}); // end on ready
        
/**
 * Updates the global var which is used in functions called from the popup menu, this is the ID of the app in the database
 * @param {type} app_id
 * @returns {undefined} */
        function mlab_set_app_id(app_id) {
            mlab_current_app_id = app_id;
        }

\t\t/**
\t\t * Opens up the properties dialog and displays a blank form
\t\t*/
\t\tfunction mlab_app_new () {
\t\t\t\$(\"#builder_dialog_new_app\").load(url_new).dialog(\"open\");
\t\t};
\t\t
\t\t/**
\t\t * Opens up the properties dialog for a given app, uses the predefined URL and replaces the 0 placeholder
\t\t */
\t\tfunction mlab_edit_app_content () {
            var url = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_editor", array("id" => "APP_ID", "page_num" => "last")), "html", null, true);
        echo "\";
            location.href = url.replace(/APP_ID/ , mlab_current_app_id);
\t\t};

        /**
\t\t * Opens up the properties dialog for a given app, uses the predefined URL and replaces the 0 placeholder
\t\t */
\t\tfunction mlab_edit_app_properties () {
            var url_temp = url_edit.replace(/0/ , mlab_current_app_id);
\t\t\t\$(\"#builder_dialog_new_app\").load(url_temp).dialog(\"open\");
\t\t};
        
        function mlab_download_app() {
            alert(mlab_current_app_id);
        }
        
        function mlab_copy_app_link() {
            alert(mlab_current_app_id);
        }
        
        function mlab_create_new_version(increment) {
            if( !confirm(\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.create.new.version.confirm", array(), "messages");
        echo "\") ) {
                return;
            }
            
            var url = \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list_create_new_version", array("app_id" => "_APP_ID_", "increment" => "_INCREMENT_")), "html", null, true);
        echo "\";
            url = url.replace(\"_APP_ID_\", mlab_current_app_id);
            url = url.replace(\"_INCREMENT_\", increment);

            \$.get( url, function( data ) {
                
                if (data.result == \"success\") {
                    var sel = \$('select[data-mlab-dropdown-id=\"' + mlab_current_app_id + '\"]');
                    sel.find('option:selected').removeAttr(\"selected\");    
                    sel.append(\"<option value='\" + data.new_version + \"'selected='selected'>\" + data.new_version + \"</option>\");
                    
                } else {
                    alert(data.msg);
                }
            });
        
        }
        
        function mlab_create_new_branch() {
            if( !confirm(\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.create.new.branch.confirm", array(), "messages");
        echo "\") ) {
                return;
            }
            
            var url = \"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list_create_new_branch", array("app_id" => "_APP_ID_"));
        echo "\";
            url = url.replace(\"_APP_ID_\", mlab_current_app_id);

            \$.get( url, function( data ) {
                
                if (data.result == \"success\") {
                    \$(data.html).prependTo(\"#table_app\");
                    
                } else {
                    alert(data.msg);
                }
            });
        
        }
        
        
        function mlab_set_active_version(el, id) {
            var new_active_version = parseFloat(\$(el).val());
            
            if( !confirm(\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.create.active.version.confirm", array(), "messages");
        echo "\") ) {
                \$(el).find(\" option[selected]\").prop('selected', true);
                return;
            }
            
            var url = \"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list_set_active_version", array("app_id" => "_APP_ID_", "version" => "_VERSION_")), "html", null, true);
        echo "\";
            url = url.replace(\"_APP_ID_\", id);
            url = url.replace(\"_VERSION_\", new_active_version);

            \$.get( url, function( data ) {
                
                if (data.result == \"success\") {
                    \$(el).val(data.new_version);
                    var img = \$('img[data-mlab-icon-id=\"' + id + '\"]');
                    var img_src = img.attr(\"src\");
//change icon to reflect new, active app
//this is image path: /mlab_elements/apps/fba3bc5aX3aa8X4161Xa502X50a71809dd0f/1.1/icon.png
                    var icon_name = img_src.replace(/^.*[\\\\\\/]/, '');
                    var re = new RegExp(\"\\/\\\\d+(\\\\.\\\\d+)?\\/\" + icon_name + \"\$\", \"g\");
                    var new_img_src = img_src.replace(re, '/' + new_active_version + \"/\" + icon_name);
                    img.attr(\"src\", new_img_src);
                } else {
                    alert(data.msg);
                }
            });
            
        }
        
        function mlab_send_app_to_market() {
            alert(mlab_current_app_id);
        }
        
        function mlab_hide_app_from_market() {
            alert(mlab_current_app_id);
        }
        
        function mlab_withdraw_app_from_market() {
            alert(mlab_current_app_id);
        }
        
        function mlab_delete_app() {
            if  (confirm(\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.create.delete.confirm", array(), "messages");
        echo "\")) {
                var temp_app_id = mlab_current_app_id;
                var url = \"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_delete", array("id" => "_APP_ID_"));
        echo "\";
                url = url.replace(\"_APP_ID_\", mlab_current_app_id);

                \$.get( url, function( data ) {

                    if (data.result == \"success\") {
                        \$(\"#row_app_\" + temp_app_id).css(\"background-color\", \"red\");
                        alert(\"App was deleted\");
                        \$(\"#row_app_\" + temp_app_id).remove();
                    } else {
                        alert(data.message);
                    }
                });                
            }
        }
        
\t</script>
";
    }

    // line 213
    public function block_body($context, array $blocks = array())
    {
        // line 214
        echo "<h1>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.main.heading", array(), "messages");
        echo "</h1>
\t<p class=\"builder_welcome\">";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.welcome.info", array(), "messages");
        echo "</p>
\t<p><a class=\"mlab_button_new_app\" href=\"javascript: mlab_app_new();\">";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.new.app.button", array(), "messages");
        echo "</a></p>
    <table class=\"records_list app_list\" id=\"table_app\">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th colspan=\"2\">";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.heading.app", array(), "messages");
        echo "</th>
                <th>";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.heading.active_version", array(), "messages");
        echo "</th>
                <th>";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.heading.last.updated", array(), "messages");
        echo "</th>
                <th class=\"mlab_align_center\">";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.heading.published", array(), "messages");
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t        ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 229
            echo "\t\t        ";
            echo twig_include($this->env, $context, "SinettMLABBuilderBundle:App:list.html.twig", array("app" => $context["app"], "app_url" => (isset($context["app_url"]) ? $context["app_url"] : null), "app_icon" => (isset($context["app_icon"]) ? $context["app_icon"] : null)));
            echo "
\t        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "        </tbody>
    </table>
    <div id=\"builder_dialog_new_app\"></div>
";
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:App:builder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 231,  379 => 229,  362 => 228,  355 => 224,  351 => 223,  347 => 222,  343 => 221,  335 => 216,  331 => 215,  326 => 214,  323 => 213,  301 => 193,  296 => 191,  257 => 155,  249 => 150,  227 => 131,  220 => 127,  198 => 108,  191 => 104,  167 => 83,  139 => 57,  134 => 55,  129 => 53,  125 => 52,  121 => 51,  118 => 50,  116 => 49,  112 => 48,  108 => 47,  104 => 46,  99 => 44,  95 => 43,  90 => 41,  86 => 40,  81 => 38,  67 => 27,  58 => 21,  54 => 20,  48 => 17,  44 => 16,  39 => 15,  36 => 14,  30 => 12,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:App:builder.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/App/builder.html.twig");
    }
}
