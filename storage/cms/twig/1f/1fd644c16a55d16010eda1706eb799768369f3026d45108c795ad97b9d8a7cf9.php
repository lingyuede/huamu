<?php

/* D:\www\huamu/themes/responsiv-clean/partials/site/scripts.htm */
class __TwigTemplate_3381fb159d97d973592840b3bfeeb4eff79ed82911b2a33b95c07f9f8b806ffb extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.min.js"));
        // line 3
        echo "\"></script>
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  22 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    'assets/js/jquery.min.js'
]|theme }}\"></script>
{% scripts %}", "D:\\www\\huamu/themes/responsiv-clean/partials/site/scripts.htm", "");
    }
}
