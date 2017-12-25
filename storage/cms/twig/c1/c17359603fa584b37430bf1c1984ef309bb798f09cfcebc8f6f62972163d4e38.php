<?php

/* D:\www\huamu/themes/responsiv-clean/pages/business/index.htm */
class __TwigTemplate_ca2011971b7cd475319752f94259caa8d91aefe8dc9a84f02a2cf015b5445587 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/list.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "
<div class=\"middle\" id=\"middle\">
    ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("businessmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"about_explain_content\">
                ";
        // line 13
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/business/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 10,  36 => 7,  32 => 6,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/list.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}

<div class=\"middle\" id=\"middle\">
    {% component 'businessmenu' %}
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">{{ post.title }}</span>
            </div>
            <div class=\"about_explain_content\">
                {{ post.content_html|raw }}
            </div>
        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/business/index.htm", "");
    }
}
