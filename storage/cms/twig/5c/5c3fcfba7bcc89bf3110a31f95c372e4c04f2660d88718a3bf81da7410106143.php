<?php

/* D:\www\huamu/themes/responsiv-clean/partials/othermenu/default.htm */
class __TwigTemplate_50fb49bb39baa80e6f032bf77935321d98870e50dbd6013739261b167dc8315d extends Twig_Template
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
        echo "<style>
    .head_right li:last-child span{display: none}
</style>
";
        // line 4
        if ((($context["parentNode"] ?? null) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentNode"] ?? null), "getChildCount", array()))) {
            // line 5
            echo "<ul class=\"head_right\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentNode"] ?? null), "getChildren", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 7
                echo "    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "enabled", array())) {
                    // line 8
                    echo "    <li><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getLinkHref", array()), "html", null, true);
                    echo "\" class=\"tittle_a ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getListItemClasses", array(0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "title", array()), "html", null, true);
                    echo "</a><span class=\"head_right_division\">|</span></li>
    ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/othermenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 10,  36 => 8,  33 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .head_right li:last-child span{display: none}
</style>
{% if parentNode and parentNode.getChildCount %}
<ul class=\"head_right\">
    {% for primaryNav in parentNode.getChildren %}
    {% if primaryNav.enabled %}
    <li><a href=\"{{ primaryNav.getLinkHref }}\" class=\"tittle_a {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">{{ primaryNav.title }}</a><span class=\"head_right_division\">|</span></li>
    {% endif %}
    {% endfor %}
</ul>
{% endif %}", "D:\\www\\huamu/themes/responsiv-clean/partials/othermenu/default.htm", "");
    }
}
