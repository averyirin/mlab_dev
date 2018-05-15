<?php

/* SinettMLABBuilderBundle:App:properties.html.twig */
class __TwigTemplate_d37219a124f0c479ae5806d967dc1cd343a36bc3d08bd07e2346629ac76f0822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("::ajax.html.twig", "SinettMLABBuilderBundle:App:properties.html.twig", 11);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<div id=\"build_app_properties\">
    <ul>
        ";
        // line 17
        if (((isset($context["mode"]) ? $context["mode"] : null) == "create")) {
            // line 18
            echo "            <li><a href=\"#builder_app_property_tabs-1\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.basedon.tab", array(), "messages");
            echo "</a></li>
            <li><a href=\"#builder_app_property_tabs-2\">";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.select_base.tab", array(), "messages");
            echo "</a></li>
        ";
        }
        // line 21
        echo "        <li><a href=\"#builder_app_property_tabs-3\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.tab", array(), "messages");
        echo "</a></li>
        <li><a href=\"#builder_app_property_tabs-4\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.classification.tab", array(), "messages");
        echo "</a></li>
        <li><a href=\"#builder_app_property_tabs-5\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.tab", array(), "messages");
        echo "</a></li>
      </ul>

    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 27
        if (((isset($context["mode"]) ? $context["mode"] : null) == "create")) {
            // line 28
            echo "            ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template", array()), array(0 => "SinettMLABBuilderBundle:Form:ddslick_template.html.twig"));
            // line 29
            echo "            ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "copyApp", array()), array(0 => "SinettMLABBuilderBundle:Form:ddslick_copyApp.html.twig"));
            // line 30
            echo "<!-- output list of templates and apps -->

            <div class=\"mlab_form_tab\" id=\"builder_app_property_tabs-1\">
                <p>";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.select_base.description", array(), "messages");
            echo "</p>
                <label for=\"select_base_template\">";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.select_base.template", array(), "messages");
            echo "</label>
                <input type=\"radio\" name=\"select_base\" id=\"select_base_template\" value=\"template\">
                <label for=\"select_base_existing_app\">";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.select_base.existing_app", array(), "messages");
            echo "</label>
                <input type=\"radio\" name=\"select_base\" id=\"select_base_existing_app\" value=\"existing_app\">
<!--                <label for=\"select_base_office_file\">";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.select_base.office_file", array(), "messages");
            echo "</label>
                <input type=\"radio\" name=\"select_base\" id=\"select_base_office_file\" value=\"office_file\"> -->
            </div>

            <div class=\"mlab_form_tab\" id=\"builder_app_property_tabs-2\">

                <p>";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.basedon.description", array(), "messages");
            echo "</p>

                <div id=\"div_base_existing_app\" class=\"mlab_div_base\">
                    ";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "copyApp", array()), 'row', array("url_apps" => (isset($context["url_apps"]) ? $context["url_apps"] : null), "app_icon_path" => (isset($context["app_icon_path"]) ? $context["app_icon_path"] : null), "apps" => (isset($context["apps"]) ? $context["apps"] : null)));
            echo "
                </div>

                <div id=\"div_base_template\" class=\"mlab_div_base\">
                    ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template", array()), 'row', array("url_templates" => (isset($context["url_templates"]) ? $context["url_templates"] : null), "templates" => (isset($context["templates"]) ? $context["templates"] : null)));
            echo "
                </div>

                <div id=\"div_base_office_file\" class=\"mlab_div_base\">
                    ";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "importFile", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("properties.build.app.import.ppt.doc")));
            echo "
                    ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "importFile", array()), 'errors');
            echo "
                    ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "importFile", array()), 'widget');
            echo "
                </div>

            </div>
        ";
        }
        // line 62
        echo "
<!-- name etc -->
        <div class=\"mlab_form_tab\" id=\"builder_app_property_tabs-3\">

            <p>";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.description", array(), "messages");
        echo "</p>

            <div class=\"new_line\">
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("builder.new.app.name.name")));
        echo "
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
            </div>

            <div class=\"new_line\">
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "active_version", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("builder.new.app.active_version.number")));
        echo "
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "active_version", array()), 'errors');
        echo "
                ";
        // line 77
        if (((isset($context["mode"]) ? $context["mode"] : null) == "create")) {
            // line 78
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "active_version", array()), 'widget', array("disabled" => "disabled"));
            echo "
                ";
        } else {
            // line 80
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "active_version", array()), 'widget');
            echo "
                ";
        }
        // line 82
        echo "            </div>


            <div class=\"new_line hidden\">
                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "splashFile", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("builder.new.app.name.splashFile")));
        echo "
                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "splashFile", array()), 'errors');
        echo "
                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "splashFile", array()), 'widget');
        echo "
            </div>


            <fieldset id=\"mlab_make_icon\" class=\"new_line\">
                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "iconFile", array()), 'widget');
        echo "
                <legend>";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.design.icon.legend", array(), "messages");
        echo ":</legend>
                <canvas id=\"app_icon_designer\" height=\"256\" width=\"256\">
                </canvas>
                <div class=\"left mlab_icon_design_input\">
                    <label for=\"mlab_select_background\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.selectBackground", array(), "messages");
        echo "</label>
                    <select id=\"mlab_select_background\" name=\"mlab_select_background\" >
                        <option value=\"\"></option>
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backgrounds"]) ? $context["backgrounds"] : null));
        foreach ($context['_seq'] as $context["icon"] => $context["path"]) {
            // line 102
            echo "                            <option data-imagesrc=\"";
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['icon'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </select>

                    <label for=\"mlab_select_background\">";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.selectForground", array(), "messages");
        echo "</label>
                    <select id=\"mlab_select_foreground\" name=\"mlab_select_foreground\" >
                        <option value=\"\"></option>
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foregrounds"]) ? $context["foregrounds"] : null));
        foreach ($context['_seq'] as $context["icon"] => $context["path"]) {
            // line 110
            echo "                            <option data-imagesrc=\"";
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['icon'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                    </select>


                    <label for=\"mlab_local_iconfile\">";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.iconFile", array(), "messages");
        echo "</label>
                    <input id=\"mlab_local_iconfile\" name=\"mlab_local_iconfile\" type=\"file\">

                    <label class=\"hidden\" for=\"mlab_icon_text \">";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.iconText", array(), "messages");
        echo "</label>
                    <input class=\"hidden\" id=\"mlab_icon_text\" name=\"mlab_icon_text\" maxlength=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["icon_text_maxlength"]) ? $context["icon_text_maxlength"] : null), "html", null, true);
        echo "\">
                    <button class=\"hidden button_wizard mlab_button_new_icon\" onclick=\"createIcon.buildIcon();\">";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.name.addIconText", array(), "messages");
        echo "</button>
                </div>
            </fieldset>


        </div>

<!-- classification etc -->
        <div class=\"mlab_form_tab\" id=\"builder_app_property_tabs-4\">

            <p>";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.classification.description", array(), "messages");
        echo "</p>

            <div>
                ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("builder.new.app.name.descriptionLab")));
        echo "
                ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
                ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
            </div>

            <div>
                ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'label', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("builder.new.app.classification.keywords")));
        echo "
                ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'errors');
        echo "
                ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "keywords", array()), 'widget');
        echo "
            </div>

            <!-- Hidden Always General mtag -->
            <input type=\"hidden\" id=\"mlab_tag_1\" name=\"mlab_tag_1\" value=\"General\" >

            <!-- Remove For Loop -->
            ";
        // line 160
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'widget');
        echo "

        </div>

<!-- summary -->
        <div class=\"mlab_form_tab\" id=\"builder_app_property_tabs-5\">
            ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            <div id=\"mlab_app_new_summary\"></div>
        </div>
        ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    ";
        // line 170
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => false));
        echo "
</div>

<button class=\"hidden button_wizard\" id=\"mlab_app_new_previous\" onclick=\"mlab_app_new_move(-1);\">";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.wizard.button.previous", array(), "messages");
        echo "</button>
<button class=\"button_wizard\" id=\"mlab_app_new_next\" onclick=\"mlab_app_new_move(1);\">";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.wizard.button.next", array(), "messages");
        echo "</button>

<script type=\"text/javascript\">
    var icon_created = false;
    var mlab_app_tags = JSON.parse('";
        // line 178
        echo (isset($context["tags"]) ? $context["tags"] : null);
        echo "');

//run various jQuery plugins which enhances the user interaction when dialog box is filled in
    \$(document).ready(function () {

//store mode as indicated by PHP variables. if in edit mode we do not display (or check for)
//what they want to base the app on
        mlab_edit_mode = \"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\";

//this variable stores the icon functionality
        createIcon = new iconFunctions();

//create tabs and make sure they can only move between them using the next/previous buttons
        \$( \"#build_app_properties\" ).tabs();
        \$( \"#build_app_properties ul\" ).css(\"pointer-events\", \"none\");


        \$('#form_copyApp').ddslick({
            width: 300,
            imagePosition: \"left\",
            selectText: \"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.app.to.copy", array(), "messages");
        echo "\"
        });

        \$('#form_template').ddslick({
            width: 300,
            height: 110,
            imagePosition: \"left\",
            selectText: \"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.template", array(), "messages");
        echo "\"
        });

        \$('#mlab_select_background').ddslick({
            width: 90,
            height: 200,
            imagePosition: \"left\",
            selectText: \"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.icon.background", array(), "messages");
        echo "\",
            onSelected: function (data) {
                if (data.selectedIndex > 0) {
                    createIcon.buildIcon();
                }
            }
        });

        \$('#mlab_select_foreground').ddslick({
            width: 90,
            height: 200,
            imagePosition: \"left\",
            selectText: \"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.icon.foreground", array(), "messages");
        echo "\",
            onSelected: function (data) {
                if (data.selectedIndex > 0) {
                    \$(\"#mlab_local_iconfile\").val(\"\");
                    createIcon.buildIcon();
                }
            }
        });

        \$(\"#mlab_local_iconfile\").on(\"change\", function () {
            \$('#mlab_select_foreground').ddslick('select', {index: 0 });
            createIcon.buildIcon();
        });

    }); //end onready

//functions to build an icon
    function iconFunctions() {
        var funcs = new Object();

/**
 * This function is called whenever the background, foreground or text is changed
 *
 * @param {type} direction
 * @returns {undefined|Boolean}
 */
        function buildIcon() {
            icon_created = true;
            var canvas = document.getElementById(\"app_icon_designer\");
            var ctx = canvas.getContext(\"2d\");
            ctx.clearRect(0, 0, canvas.width, canvas.height);

//first we draw background, regardless of what has been changed
            drawImage(getBackgroundFromServerFile(), false);

//next we draw foreground, if it i
            if (typeof document.getElementById('mlab_local_iconfile').files != \"undefined\" && document.getElementById('mlab_local_iconfile').files.length > 0) {
                if (!getForegroundFromFile()) {
                    if (\$(\"#mlab_icon_text\").val() != \"\") {
                        outputText();
                    }
                }

            } else if (\$('#mlab_select_foreground').data('ddslick').selectedData.value != \"\") {
                drawImage(getForegroundFromServerFile(), true);
                if (\$(\"#mlab_icon_text\").val() != \"\") {
                    outputText();
                }

            }
        }

        function getForegroundFromFile() {
            var input, file, fr;

            if (typeof window.FileReader !== 'function') {
                alert(\"";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.design.icon.foreground.img.error.1", array(), "messages");
        echo "\");
                return false;
            }

            input = document.getElementById('mlab_local_iconfile');
            if (!input.files) {
                alert(\"";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.design.icon.foreground.img.error.2", array(), "messages");
        echo "\");
                return false;
            } else if (!input.files[0]) {
                return false;
            } else {
                var local_img = new Image;
                local_img.onload = function() {
                    drawImage(local_img, true);
                    outputText();
                    URL.revokeObjectURL(local_img.src);
                }
                local_img.src = URL.createObjectURL(input.files[0]);
                return true;
            }
        }

//loads background icon into canvas
        function drawImage(img, isForeground) {
            var canvas = document.getElementById(\"app_icon_designer\");
            var ctx = canvas.getContext(\"2d\");
            if (isForeground) {
                if (img.naturalWidth >= (canvas.width * .8) || img.naturalHeight >= (canvas.height * .8)) {
                    var l = canvas.width * .25;
                    var t = canvas.height * .25;
                    var w = canvas.width * .5;
                    var h = canvas.height * .5;
                } else {
                    var l = (canvas.width - img.naturalWidth) / 2;
                    var t = (canvas.height - img.naturalHeight) / 2;
//image is smaller than what we want, so no need to indicate size parameters
                    ctx.drawImage(img, l, t);
                    return;
                }
            } else {
                var l = 0;
                var t = 0;
                var w = canvas.width;
                var h = canvas.height;
            }

            ctx.drawImage(img, l, t, w, h);
        }

        function drawText() {
            var canvas = document.getElementById(\"app_icon_designer\");
            var ctx = canvas.getContext(\"2d\");

            var x = canvas.width / 2;
            var y = canvas.height;

            ctx.font = '30pt MlabIconFont';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';
            ctx.fillStyle = 'black';
            ctx.fillText(\$(\"#mlab_icon_text\").val(), x, y);
        }

//using a trick from here to load font first time: http://stackoverflow.com/questions/2635814/javascript-capturing-load-event-on-link/5371426#5371426
//if it is already loaded, then we skip loading it and draw text as normal
        function outputText() {
            if (!\$(\"#mlab_icon_font_style\").length) {
                \$('head').append(\"<style id='mlab_icon_font_style' type='text/css'>@font-face { font-family: 'MlabIconFont'; font-style: normal; font-weight: 700; src: url('";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["icon_font_url"]) ? $context["icon_font_url"] : null), "html", null, true);
        echo "') format('truetype'); }</style>\");

//original trick from http://stackoverflow.com/questions/2635814/
                var image = new Image;
                image.src = \"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["icon_font_url"]) ? $context["icon_font_url"] : null), "html", null, true);
        echo "\";
                image.onerror = function() { drawText(); };

            } else {
                drawText();

            }
        }

        function getBackgroundFromServerFile() {
            var background = new Image();
            background.src = \$('#mlab_select_background').data('ddslick').selectedData.value;
            return background;
        }

        function getForegroundFromServerFile() {
            var foreground = new Image();
            foreground.src = \$('#mlab_select_foreground').data('ddslick').selectedData.value;
            return foreground;
        }

        funcs.buildIcon = buildIcon;

        return funcs;
    } //end buildIcon

//utility function to add child entries to categories level 2 or 3
    function addOptions(tags, level) {
        for (i in tags) {
            \$(\"#mlab_tag_\" + level).append(\"<option value='\" + tags[i].text + \"'>\" + tags[i].text + \"</option>\");
        }
    }

//function to load sub categories when a higher level category is selected
    function loadTags(el, level) {
        if (level == 3) {
            return;
        }

        var sel_val = \$(el).val();
//if they select the empty one we clear out the select boxes below this level
        if ( parseInt(sel_val) == 0 || isNaN(parseInt(sel_val)) )  {
            if (level == 1 ) {
                \$(\"#mlab_tag_2\").html(\"\");
                \$(\"#mlab_tag_3\").html(\"\");
            } else if (level == 2 ) {
                \$(\"#mlab_tag_3\").html(\"\");
            }
            return;
        }

//we get the correct children to populate with by using the index of each select element
//for the first one the user may belong to multiple groups, so we need to determine which of the top level elements it belongs to
        \$(\"#mlab_tag_\" + (level + 1)).html(\"<option></option>\");
        var top_index = \$(\"#mlab_tag_1\").prop('selectedIndex');
        var start_index = 0;
        for (tagSets in mlab_app_tags) {
            if (top_index <= start_index + mlab_app_tags[tagSets].length) {
                var tags = mlab_app_tags[tagSets][\$(\"#mlab_tag_1\").prop('selectedIndex') - (start_index + 1)].children;
                if (level == 1) {
                    addOptions(tags, level + 1);
                } else {
                    addOptions(tags[\$(\"#mlab_tag_2\").prop('selectedIndex') - 1].children, level + 1);
                }
            } else {
                start_index = start_index + mlab_app_tags[tagSets].length;
            }
        }

    }

//function to move back and forth in new app/properties wizard
//this first checks if relevant selections/input is done, then displays next or previous tab
    function mlab_app_new_move(direction) {
        var caption_next = \"";
        // line 425
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.wizard.button.next", array(), "messages");
        echo "\";
        var caption_finished = \"";
        // line 426
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.wizard.button.finished", array(), "messages");
        echo "\";
        var curr_tab = eval_tab = \$('#build_app_properties').tabs('option', 'active');
        var tot_tabs = \$('#build_app_properties >ul >li').size();

//if in update mode we hide first two tabs, hence these numbers are a bit different
        if (mlab_edit_mode == 'update') {
            eval_tab = eval_tab + 2;
        }


//going forward: verify data, if ok: display previous button, change title of next button if on last page
        if (direction > 0) {
            var msg = '';

            switch(eval_tab) {
                case 0:
                    var sel_val = \"\";
                    var selected = \$(\"input[type='radio'][name='select_base']:checked\");

                    if (selected.length > 0) {
                        sel_val = selected.val();
                        \$('.mlab_div_base').addClass(\"hidden\");
                        \$('#div_base_' + sel_val).removeClass(\"hidden\");

//if they want to import data then we also need to have a template, otherwise the app will never work
                        if (sel_val == \"office_file\") {
                            \$('#div_base_template').removeClass(\"hidden\");
                        }
                    } else {
                        msg = msg + \"";
        // line 455
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.base.on", array(), "messages");
        echo "\\n\";
                    }
                    break;

                case 1:
                    var action = \$(\"input[type='radio'][name='select_base']:checked\").val();
                    switch(action) {
                        case \"office_file\":
                            if (\$(\"#form_importFile\").val() == \"\") {
                                msg = msg + \"";
        // line 464
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.doc.convert", array(), "messages");
        echo "\\n\";
                            } else {
                                var file_name = \$(\"#form_importFile\").val();
                                var file_type = file_name.substr(file_name.lastIndexOf('.') + 1).toLowerCase();
                                var regex = /ppt|pptx|doc|docx/g;
                                if (!regex.test(file_type)) {
                                    msg = msg + \"";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.doc.convert.format", array(), "messages");
        echo "\\n\";
                                }
                            }

                        case \"template\":
                            if (\$('#form_template').data('ddslick').selectedIndex == 0) {
                                msg = msg + \"";
        // line 476
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.template", array(), "messages");
        echo "\\n\";
                            }
                            break;

                        case \"existing_app\":
                            if (\$('#form_copyApp').data('ddslick').selectedIndex == 0) {
                                msg = msg + \"";
        // line 482
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.app.copy", array(), "messages");
        echo "\\n\";
                            } else {
                                \$(\"#form_copy_app\").val(\$('#form_copyApp').data('ddslick').selectedData.value);
                            }
                            break;

                    } //end switch what they want to base app on
                    break;

                case 2:
                    if (\$('#form_name').val().trim() == \"\") {
                        msg = msg + \"";
        // line 493
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.name", array(), "messages");
        echo "\\n\";
                    }

                    if (mlab_edit_mode == 'update') {
                        if (\$('#form_active_version').val().trim() == \"\" || isNaN(parseFloat(\$('#form_active_version').val())) || parseFloat(\$('#form_active_version').val()) < 1 ) {
                            msg = msg + \"";
        // line 498
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.version", array(), "messages");
        echo "\\n\";
                        }
                    }

                    if (icon_created) {
                        \$(\"#form_iconFile\").val(document.getElementById(\"app_icon_designer\").toDataURL());
                    } else {
                        \$(\"#form_iconFile\").val(\"\");
                    }

                    var file_name = \$(\"#form_splashFile\").val().trim();
                    if (file_name != \"\") {
                        var file_type = file_name.substr(file_name.lastIndexOf('.') + 1).toLowerCase();
                        var regex = /png|jpg|jpeg/g;
                        if (!regex.test(file_type)) {
                            msg = msg + \"";
        // line 513
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.splash.format", array(), "messages");
        echo "\\n\";
                        }
                    }
                    break;

                case 3:
                    if (\$('#form_description').val().trim() == \"\") {
                        msg = msg + \"";
        // line 520
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.description", array(), "messages");
        echo "\\n\";
                    }


                    if (\$('#form_keywords').val().trim() == \"\") {
                        msg = msg + \"";
        // line 525
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.keywords", array(), "messages");
        echo "\\n\";
                    }
                    //added message
                    //msg = msg + \$('#mlab_tag_1').val();
                    if (\$('#mlab_tag_1').val() == null || \$('#mlab_tag_1').val().trim() == \"\") {
\t\t\t                   msg = msg + \"";
        // line 530
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.fill.main.category", array(), "messages");
        echo "\\n\";
                    }

//moving to last page, display all info so they can check before committing
                    if (msg == '') {
                        \$('#form_tags').val(JSON.stringify([\$('#mlab_tag_1').val(), \$('#mlab_tag_2').val(), \$('#mlab_tag_3').val()]))
                        var action = \$(\"input[type='radio'][name='select_base']:checked\").val();
                        var based_on = \"\";
                        switch(action) {
                            case \"template\":
                                based_on = \"";
        // line 540
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.1", array(), "messages");
        echo " \" + \$('#form_template').data('ddslick').selectedData.text + \" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.2", array(), "messages");
        echo "\";
                                break;
                            case \"existing_app\":
                                based_on = \"";
        // line 543
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.3", array(), "messages");
        echo " \" + \$('#form_copyApp').data('ddslick').selectedData.text + \" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.4", array(), "messages");
        echo "\";
                                break;
                            case \"office_file\":
                                based_on = \"";
        // line 546
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.5", array(), "messages");
        echo " \" + \$(\"#form_importFile\").val() + \" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.6", array(), "messages");
        echo " \" + \$('#form_template').data('ddslick').selectedData.text + \" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.summery.7", array(), "messages");
        echo "\";
                                break;
                        } //end switch what they want to base app on
                        var summary =
                                      \"<fieldset>\" +
                                      \"<legend>";
        // line 551
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.name", array(), "messages");
        echo ":</span> \" + \$('#form_name').val() + \"</legend>\" +
                                      \"<span class='mlab_app_new_summary'>\" + based_on + \"</span>\" +
                                      \"<div class='mlab_icon_summary'><img src='\" + (icon_created ? document.getElementById(\"app_icon_designer\").toDataURL() : \"";
        // line 553
        echo twig_escape_filter($this->env, (isset($context["icon_default"]) ? $context["icon_default"] : null), "html", null, true);
        echo "\") + \"' width='128' height='128'>\" +

                                      \"<br><span class='mlab_app_new_summary'>";
        // line 555
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.descriptionLab", array(), "messages");
        echo ":</span> \" + \$('#form_description').val() +
                                      \"<br><span class='mlab_app_new_summary'>";
        // line 556
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.keywords", array(), "messages");
        echo ":</span> \" + \$('#form_keywords').val() +
                                    /* Remove category summary, defaults to General 
                                     \"<br><span class='mlab_app_new_summary'>";
        // line 558
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.category", array(), "messages");
        echo ":</span> \" +
                                      \$('#mlab_tag_1 option:selected').html() + \" - \" +
                                      \$('#mlab_tag_2 option:selected').html() + \" - \" +
                                      \$('#mlab_tag_3 option:selected').html() +
                                      */
                                      \"</div>\" +
                                      \"<div class='hidden mlab_splash'><img id='mlab_splash_preview' width='128' height='128'><span class='hidden mlab_app_new_summary'>";
        // line 564
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.splashScreen", array(), "messages");
        echo "</span></div>\" +
                                      \"</fieldset>\" +
                                      \"<p>";
        // line 566
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("builder.new.app.submit.description", array(), "messages");
        echo "</p>\";


                        \$(\"#mlab_app_new_summary\").html(summary);

//load local image for preview
                        if (\$(\"#form_splashFile\").val().trim() != \"\") {
                            var fr = new FileReader();
                            fr.readAsDataURL(document.getElementById(\"form_splashFile\").files[0]);

                            fr.onload = function(oFREvent) {
                                document.getElementById(\"mlab_splash_preview\").src = oFREvent.target.result;
                            };
                        }

                    }
                    break;

                case 4:

//reset the template select box so it returns value properly
                    \$('#form_template').ddslick('destroy');
                    \$('#form_copyApp').ddslick('destroy');
//here we submit the data via AJAX, call function that must be in page that this dialog is called up in!
                    mlab_app_submit_properties(\$(\"#mlab_form_app\"));
                    break;

            } //end switch for tabs

//if the error message is filled in then we display it and bail
            if (msg != '') {
                alert(msg);
                return false;
            }

//if no error message we move to next or previous tab and update caption on the buttons
            \$(\"#mlab_app_new_previous\").removeClass(\"hidden\");

//opening final tab
            if (curr_tab == (tot_tabs - 2)) {
                \$(\"#mlab_app_new_next\").text(caption_finished);
            }

//going backward: hide previous button if first page, rename next button
        } else {
            if (curr_tab == 1) {
                \$(\"#mlab_app_new_previous\").addClass(\"hidden\");
            }
            \$(\"#mlab_app_new_next\").text(caption_next);
        }

//select relevant tab
        \$('#build_app_properties').tabs('option', 'active', curr_tab + direction);

    }

    /**
        * submits data for new app from the dialog box where we collect details of the new app
        */
    function mlab_app_submit_properties(form) {
        formData = new FormData(document.getElementById('mlab_form_app'))

        \$.ajax({
            url: form.attr( \"action\" ),  //Server script to process data, should be createAction in app controller
            type: 'POST',
            // Form data
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function( data ) {
                if (data.result == 'FAILURE') {
                    alert(data.message);
                    \$('#form_copyApp').ddslick({
                        width: 300,
                        imagePosition: \"left\",
                        selectText: \"";
        // line 642
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.app.to.copy", array(), "messages");
        echo "\"
                    });

                    \$('#form_template').ddslick({
                        width: 300,
                        height: 110,
                        imagePosition: \"left\",
                        selectText: \"";
        // line 649
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.template", array(), "messages");
        echo "\"
                    });


                } else {
//here we update the list of apps with the new app details
                    \$(\"#builder_dialog_new_app\").dialog(\"close\");
                    \$(data.html).prependTo(\"#table_app\");
                    location.href = location.origin + \$(data.html).find(\"a\").first().attr(\"href\");
                }
            },

            error: function(e) {
                alert('";
        // line 662
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("properties.build.app.error", array(), "messages");
        echo "');
                console.log(e);
                \$('#form_copyApp').ddslick({
                    width: 300,
                    imagePosition: \"left\",
                    selectText: \"";
        // line 667
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.app.to.copy", array(), "messages");
        echo "\"
                });

                \$('#form_template').ddslick({
                    width: 300,
                    height: 110,
                    imagePosition: \"left\",
                    selectText: \"";
        // line 674
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.select.template", array(), "messages");
        echo "\"
                });

            }
        });
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:App:properties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 674,  983 => 667,  975 => 662,  959 => 649,  949 => 642,  870 => 566,  865 => 564,  856 => 558,  851 => 556,  847 => 555,  842 => 553,  837 => 551,  825 => 546,  817 => 543,  809 => 540,  796 => 530,  788 => 525,  780 => 520,  770 => 513,  752 => 498,  744 => 493,  730 => 482,  721 => 476,  712 => 470,  703 => 464,  691 => 455,  659 => 426,  655 => 425,  578 => 351,  571 => 347,  507 => 286,  498 => 280,  439 => 224,  424 => 212,  414 => 205,  404 => 198,  388 => 185,  378 => 178,  371 => 174,  367 => 173,  361 => 170,  357 => 169,  351 => 166,  341 => 160,  331 => 141,  327 => 140,  323 => 139,  316 => 135,  312 => 134,  308 => 133,  302 => 130,  289 => 120,  285 => 119,  281 => 118,  275 => 115,  270 => 112,  257 => 110,  253 => 109,  247 => 106,  243 => 104,  230 => 102,  226 => 101,  220 => 98,  213 => 94,  209 => 93,  201 => 88,  197 => 87,  193 => 86,  187 => 82,  181 => 80,  175 => 78,  173 => 77,  169 => 76,  165 => 75,  158 => 71,  154 => 70,  150 => 69,  144 => 66,  138 => 62,  130 => 57,  126 => 56,  122 => 55,  115 => 51,  108 => 47,  102 => 44,  93 => 38,  88 => 36,  83 => 34,  79 => 33,  74 => 30,  71 => 29,  68 => 28,  66 => 27,  62 => 26,  56 => 23,  52 => 22,  47 => 21,  42 => 19,  37 => 18,  35 => 17,  31 => 15,  28 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:App:properties.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/App/properties.html.twig");
    }
}
