<?php

/* D:\www\huamu/themes/responsiv-clean/layouts/defult.htm */
class __TwigTemplate_bf49b07e7f777f2e64845f593fe37b520d17de10c1aa2eabe0587cc1c0b7103c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        <div class=\"wrap\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "
        </div>
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "        <!-- Scripts -->
        ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/layouts/defult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  53 => 15,  50 => 14,  46 => 13,  42 => 11,  40 => 10,  37 => 9,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>
        <div class=\"wrap\">
        {% partial 'site/header' %}

        {% page %}

        </div>
        {% partial 'site/footer' %}
        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "D:\\www\\huamu/themes/responsiv-clean/layouts/defult.htm", "");
    }
}
