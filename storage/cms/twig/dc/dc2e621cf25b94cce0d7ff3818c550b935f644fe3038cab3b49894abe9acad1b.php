<?php

/* D:\www\huamu/themes/responsiv-clean/layouts/fallback.htm */
class __TwigTemplate_2265bad0b2da0c78ac067c45ab1922bf22fa67fb647d5f7b4f6076b4493fabdd extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\www\\huamu/themes/responsiv-clean/layouts/fallback.htm", "");
    }
}
