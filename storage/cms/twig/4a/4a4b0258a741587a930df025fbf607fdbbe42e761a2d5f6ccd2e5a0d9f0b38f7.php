<?php

/* D:\www\huamu/themes/responsiv-clean/partials/site/header.htm */
class __TwigTemplate_b43207091289a70e3a529862c12984265e263309143ce64b0c571c1e1b7a3998 extends Twig_Template
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
        echo "<div class=\"head\">
    <div class=\"head_content\" style=\"background-color: rgba(30, 30, 30, 0.8);\">
        <div class=\"head_top\">
            <div class=\"logo\">
                <a href=\"\" class=\"logo_left\"><img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\"></a>
            </div>
            ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("othermenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"head\">
    <div class=\"head_content\" style=\"background-color: rgba(30, 30, 30, 0.8);\">
        <div class=\"head_top\">
            <div class=\"logo\">
                <a href=\"\" class=\"logo_left\"><img src=\"{{ 'assets/img/logo.png'|theme }}\"></a>
            </div>
            {% component 'othermenu' %}
        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/partials/site/header.htm", "");
    }
}
