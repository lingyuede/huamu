<?php

/* D:\www\huamu/themes/responsiv-clean/partials/home/posts.htm */
class __TwigTemplate_b76b077d26bf08dcdcce032cf068875759232c1ee9156a52c8caf094116ec640 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <div class=\"home-post\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/home/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}
    <div class=\"home-post\">
        {% partial 'blog/post' post=post %}
    </div>
{% endfor %}", "D:\\www\\huamu/themes/responsiv-clean/partials/home/posts.htm", "");
    }
}
