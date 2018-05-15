<?php

/* SinettMLABBuilderBundle:App:list.html.twig */
class __TwigTemplate_02ca5f4e9cfb7b38f354e5c4af6b33cba99f980323893cb586948327006f3f20 extends Twig_Template
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
        // line 10
        echo "                <tr id=\"row_app_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  
                    <td class=\"builder_app_list_properties\" title=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.tooltip.properties", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "name", array()), "html", null, true);
        echo "\">
\t\t\t\t    \t<div class=\"builder_app_properties\" onmousedown=\"mlab_set_app_id(";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo ");\"></div>
\t\t\t\t    </td>
                    <td class=\"builder_app_list_icon\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_editor", array("id" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "page_num" => "last")), "html", null, true);
        echo "\"><img data-mlab-icon-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, ((((((isset($context["app_url"]) ? $context["app_url"] : null) . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path", array())) . "/") . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "active_version", array())) . "/") . (isset($context["app_icon"]) ? $context["app_icon"] : null)), "html", null, true);
        echo "\"></a></td>
                    <td class=\"builder_app_list_name mlab_max_width_medium\" title=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("app.builder.list.tooltip.name", array(), "messages");
        echo "\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_builder_editor", array("id" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "page_num" => "last")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "name", array()), "html", null, true);
        echo "</a>
\t\t\t\t    </td>
                    
\t\t\t\t    <td class=\"mlab_align_center\">
                        <select onchange=\"mlab_set_active_version(this, ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "active_version", array()), "html", null, true);
        echo ");\" data-mlab-dropdown-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\" >
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "versions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 23
            echo "                                <option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "version", array()), "html", null, true);
            echo "' ";
            echo ((($this->getAttribute($context["v"], "version", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "active_version", array()))) ? (" selected='selected' ") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "version", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
\t\t\t\t    </td>
                    
                    <td class=\"mlab_align_center\" title=\"";
        // line 28
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "\">
                        ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "updated", array())) {
            // line 30
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "updated", array()), "d.m.y"), "html", null, true);
            echo "
                        ";
        }
        // line 32
        echo "                    </td>
                    
\t\t\t    \t";
        // line 35
        echo "\t\t\t\t    <td class=\"mlab_align_center ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "published", array()) == 0)) {
            echo "builder_app_not_published";
        } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "published", array()) == 1)) {
            echo "builder_app_old_version_published";
        } else {
            echo "builder_app_current_version_published";
        }
        echo "\">
\t\t\t\t    </td>
\t\t\t\t</tr>";
    }

    public function getTemplateName()
    {
        return "SinettMLABBuilderBundle:App:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  101 => 32,  95 => 30,  93 => 29,  87 => 28,  82 => 25,  69 => 23,  65 => 22,  57 => 21,  48 => 17,  44 => 16,  36 => 15,  31 => 13,  25 => 12,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SinettMLABBuilderBundle:App:list.html.twig", "/var/www/html/mlab/src/Sinett/MLAB/BuilderBundle/Resources/views/App/list.html.twig");
    }
}
