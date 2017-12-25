<?php

/* D:\www\huamu/themes/responsiv-clean/pages/blog/category.htm */
class __TwigTemplate_16e8e8301c50322560215a1f463d8a6adcc4924ba4c49f4aab6469ed134e203d extends Twig_Template
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
        echo "<div class=\"category-title\">
    <h1>Category: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
</div>

<div class=\"blog-posts\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"category-title\">
    <h1>Category: {{ category.name }}</h1>
</div>

<div class=\"blog-posts\">
    {% partial 'blog/posts' %}
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/blog/category.htm", "");
    }
}
