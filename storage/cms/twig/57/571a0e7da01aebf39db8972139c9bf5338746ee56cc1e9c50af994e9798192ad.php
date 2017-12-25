<?php

/* D:\www\huamu/themes/responsiv-clean/partials/businessmenu/default.htm */
class __TwigTemplate_4075a89135f489497ceb45ae959cb31b1a8e869e5ba98d8204a02e2f7bdba255 extends Twig_Template
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
            echo "<div class=\"middle_left\">
    <ul>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentNode"] ?? null), "getChildren", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "enabled", array())) {
                    // line 6
                    echo "        <li style=\"display: block;margin-bottom: 30px;\">
            <div class=\"contact_us_active\">
                <img src=\"";
                    // line 8
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/ico_center.png");
                    echo "\" class=\"middle_left_img\">
                <span class=\"middle_left_tittle\"><a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getLinkHref", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "title", array()), "html", null, true);
                    echo "</a> </span>
            </div>
            ";
                    // line 11
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getChildCount", array()) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 12
                        echo "            <div class=\"subNav\" style=\"display: block;border:none\">
                ";
                        // line 13
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["primaryNav"], "getChildren", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["secondaryNav"]) {
                            // line 14
                            echo "                ";
                            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "enabled", array())) {
                                // line 15
                                echo "                <a  href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "getLinkHref", array()), "html", null, true);
                                echo "\" class=\"\" style=\" font-size: 14px;margin-left: 20px;border-bottom: 1px solid #49494d;margin-top:10px;padding-left: 10px;\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["secondaryNav"], "title", array()), "html", null, true);
                                echo "</a>
                ";
                            }
                            // line 17
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondaryNav'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "            </div>
            ";
                    }
                    // line 20
                    echo "        </li>
        ";
                }
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/partials/businessmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 22,  77 => 20,  73 => 18,  67 => 17,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  40 => 9,  36 => 8,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if parentNode and parentNode.getChildCount %}
<div class=\"middle_left\">
    <ul>
        {% for primaryNav in parentNode.getChildren %}
        {% if primaryNav.enabled %}
        <li style=\"display: block;margin-bottom: 30px;\">
            <div class=\"contact_us_active\">
                <img src=\"{{ 'assets/img/ico_center.png'|theme }}\" class=\"middle_left_img\">
                <span class=\"middle_left_tittle\"><a href=\"{{ primaryNav.getLinkHref }}\">{{ primaryNav.title }}</a> </span>
            </div>
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
            <div class=\"subNav\" style=\"display: block;border:none\">
                {% for secondaryNav in primaryNav.getChildren %}
                {% if secondaryNav.enabled %}
                <a  href=\"{{ secondaryNav.getLinkHref }}\" class=\"\" style=\" font-size: 14px;margin-left: 20px;border-bottom: 1px solid #49494d;margin-top:10px;padding-left: 10px;\">{{ secondaryNav.title }}</a>
                {% endif %}
                {% endfor %}
            </div>
            {% endif %}
        </li>
        {% endif %}
        {% endfor %}
    </ul>
</div>
{% endif %}", "D:\\www\\huamu/themes/responsiv-clean/partials/businessmenu/default.htm", "");
    }
}
