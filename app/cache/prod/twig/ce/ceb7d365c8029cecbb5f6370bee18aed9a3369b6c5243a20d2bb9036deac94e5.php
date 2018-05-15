<?php

/* SinettMLABBuilderBundle:App:options.html.twig */
class __TwigTemplate_38593d085a5305944265bd04e63cb3a9cc6ba46dc2c075a1637acb647733cca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        echo "    <option>&nbsp;</option>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["url"] => $context["file"]) {
            // line 14
            echo "        <option data-imagesrc=\"";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['url'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:App:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 14,  22 => 13,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:App:options.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/App/options.html.twig");
    }
}
