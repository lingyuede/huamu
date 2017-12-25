<?php

/* D:\www\huamu/themes/responsiv-clean/partials/blog/posts.htm */
class __TwigTemplate_68ae332bc5e470093c1c306138e45dbdce76d61a150089a9098fb7ed5c79a155 extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>

<div class=\"post-pagination\">
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 11
            echo "        <ul class=\"pagination\">
                <li><a href=\"";
            // line 12
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
            echo "\" class=\"pagination-prev\">&larr; Prev</a></li>
            ";
            // line 13
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 14
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\" class=\"pagination-prev\">&larr; Prev</a></li>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 19
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 24
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\" class=\"pagination-next\">Next &rarr;</a></li>
            ";
            }
            // line 26
            echo "        </ul>
    ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  97 => 26,  91 => 24,  89 => 23,  86 => 22,  75 => 19,  70 => 18,  66 => 17,  63 => 16,  57 => 14,  55 => 13,  51 => 12,  48 => 11,  46 => 10,  41 => 7,  35 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}

<div class=\"post-list\">
    {% for post in posts %}
        {% partial 'blog/post' post=post %}
    {% endfor %}
</div>

<div class=\"post-pagination\">
    {% if posts.lastPage > 1 %}
        <ul class=\"pagination\">
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" class=\"pagination-prev\">&larr; Prev</a></li>
            {% if posts.currentPage > 1 %}
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" class=\"pagination-prev\">&larr; Prev</a></li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
                <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\" class=\"pagination-next\">Next &rarr;</a></li>
            {% endif %}
        </ul>
    {% endif %}
</div>", "D:\\www\\huamu/themes/responsiv-clean/partials/blog/posts.htm", "");
    }
}
