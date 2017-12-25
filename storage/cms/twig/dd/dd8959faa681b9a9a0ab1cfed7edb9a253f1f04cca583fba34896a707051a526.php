<?php

/* D:\www\huamu/themes/responsiv-clean/partials/site/meta.htm */
class __TwigTemplate_1ec3d628ad34fd97007173a99314d78b9eb75be3a592ca765509064f427ad748 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/october.png");
        echo "\">
<link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/head.css"));
        echo "\" rel=\"stylesheet\">
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 7,  37 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<title>{{ this.page.title }} - {{ this.theme.site_name }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/october.png'|theme }}\">
<link href=\"{{ ['assets/css/head.css']|theme }}\" rel=\"stylesheet\">
{% styles %}", "D:\\www\\huamu/themes/responsiv-clean/partials/site/meta.htm", "");
    }
}
