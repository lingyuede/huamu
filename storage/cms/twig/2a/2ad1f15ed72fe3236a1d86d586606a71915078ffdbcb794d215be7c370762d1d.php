<?php

/* D:\www\huamu/themes/responsiv-clean/partials/companymenu/default.htm */
class __TwigTemplate_b1896c2977122d59b080eb66a7de89bb90a3cd914d6b7cc88ec677d5feb17a47 extends Twig_Template
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
        if ((($context["parentNode"] ?? null) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentNode"] ?? null), "getChildCount", array()))) {
            // line 2
            echo "<div class=\"nav rosa-nav-a\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentNode"] ?? null), "getChildren", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 4
                echo "    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "enabled", array())) {
                    // line 5
                    echo "    <div  class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getListItemClasses", array(0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)), "method"), "html", null, true);
                    echo " newA\">
        <a href=\"";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getLinkHref", array()), "html", null, true);
                    echo "\" class=\"newAA\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "title", array()), "html", null, true);
                    echo "</a>
        ";
                    // line 7
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getChildCount", array()) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 8
                        echo "        <div class=\"pop-div\">
            <ul class=\"pop-ul\">
                ";
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getChildren", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["secondaryNav"]) {
                            // line 11
                            echo "                ";
                            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "enabled", array())) {
                                // line 12
                                echo "                <li><a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "getLinkHref", array()), "html", null, true);
                                echo "\"> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "title", array()), "html", null, true);
                                echo "</a></li>
                ";
                            }
                            // line 14
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondaryNav'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 15
                        echo "            </ul>
        </div>
        ";
                    }
                    // line 18
                    echo "    </div>
    ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/companymenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  78 => 20,  74 => 18,  69 => 15,  63 => 14,  55 => 12,  52 => 11,  48 => 10,  44 => 8,  42 => 7,  36 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if parentNode and parentNode.getChildCount %}
<div class=\"nav rosa-nav-a\">
    {% for primaryNav in parentNode.getChildren %}
    {% if primaryNav.enabled %}
    <div  class=\"{{ primaryNav.getListItemClasses(activeLeft, activeRight) }} newA\">
        <a href=\"{{ primaryNav.getLinkHref }}\" class=\"newAA\"> {{ primaryNav.title }}</a>
        {% if primaryNav.getChildCount and numberOfLevels > 1 %}
        <div class=\"pop-div\">
            <ul class=\"pop-ul\">
                {% for secondaryNav in primaryNav.getChildren %}
                {% if secondaryNav.enabled %}
                <li><a href=\"{{ secondaryNav.getLinkHref }}\"> {{ secondaryNav.title }}</a></li>
                {% endif %}
                {% endfor %}
            </ul>
        </div>
        {% endif %}
    </div>
    {% endif %}
    {% endfor %}
</div>
{% endif %}", "D:\\www\\huamu/themes/responsiv-clean/partials/companymenu/default.htm", "");
    }
}
