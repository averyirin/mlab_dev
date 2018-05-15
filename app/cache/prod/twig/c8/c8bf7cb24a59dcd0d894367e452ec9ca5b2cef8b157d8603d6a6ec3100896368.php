<?php

/* SinettMLABBuilderBundle:Form:ddslick_template.html.twig */
class __TwigTemplate_1e6803b802caa6d3c2594626366963dab30c2e9cb8c74c9b6a7a12b1777c2ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SinettMLABBuilderBundle:Form:ddslick_template.html.twig", 11);
        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        if ((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null))) {
            // line 16
            echo "            ";
            $context["required"] = false;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 19
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) {
            // line 20
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 22
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 23
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 24
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 25
            if (((twig_length_filter($this->env, (isset($context["templates"]) ? $context["templates"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 26
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 28
            echo "            ";
        }
        // line 29
        echo "            ";
        $context["options"] = (isset($context["templates"]) ? $context["templates"] : null);
        // line 30
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 31
            echo "                <option data-imagesrc=\"";
            echo twig_escape_filter($this->env, (((isset($context["url_templates"]) ? $context["url_templates"] : null) . $this->getAttribute($context["choice"], "path", array())) . "/thumbnail.jpg"), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "description", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "description", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:Form:ddslick_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  93 => 31,  88 => 30,  85 => 29,  82 => 28,  76 => 26,  74 => 25,  69 => 24,  66 => 23,  63 => 22,  53 => 20,  51 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  28 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:Form:ddslick_template.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/Form/ddslick_template.html.twig");
    }
}
