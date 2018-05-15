<?php

/* SinettMLABBuilderBundle:Default:index.html.twig */
class __TwigTemplate_9c3312f2035c7985c5e448efa13d4d7bf49d4be2b91c07d6049cc55434a2b615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("::base.html.twig", "SinettMLABBuilderBundle:Default:index.html.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mlab.page.title.index", array(), "messages");
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"mlab_frontpage\">
        <p class=\"frontpage_info\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.text", array(), "messages");
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.link.text.before", array(), "messages");
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.link.app.list", array(), "messages");
        echo "</a> ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.link.text.after", array(), "messages");
        echo "</p>
        <div class=\"help_guide\">
            <br>
            <div class=\"help_guide_top\">
                <div class=\"help_guide_back\" onclick=\"help_guide_back();\"></div>
                <p class=\"help_guide_heading\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.help.guide.heading", array(), "messages");
        echo "</p>
                <div class=\"help_guide_next\" onclick=\"help_guide_next();\"></div>
            </div>
            <p class=\"help_guide_text\">1. ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.index.page.help.guide.text1", array(), "messages");
        echo "</p> 
            <div class=\"help_guide_img\"></div>
        </div>
    </div>
    <script type=\"text/javascript\">
        
        var step = 1;
        help_text = [];
        
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "            help_text[";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "] = '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("app.builder.index.page.help.guide.text" . $context["i"])), "html", null, true);
            echo "';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            
            function help_guide_next() {
                
                if (step >= 5){
                    step = 1;
                } else {
                    step++;
                };
                \$('.help_guide_img').css('background-image', 'url(\"/img/frontpage_step' + step + '.png\")');
                \$('.help_guide_text').text(step + \". \" + help_text[step]);
            };
            
            function help_guide_back() {
               if (step <= 1){
                   step = 5;
               } else {
                   step--;
               }
              \$('.help_guide_img').css('background-image', 'url(\"/img/frontpage_step' + step + '.png\")');
              \$('.help_guide_text').text(step + \". \" + help_text[step]);
            };
    
    </script>
";
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  79 => 35,  75 => 34,  63 => 25,  57 => 22,  41 => 17,  38 => 16,  35 => 13,  29 => 12,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:Default:index.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/Default/index.html.twig");
    }
}
