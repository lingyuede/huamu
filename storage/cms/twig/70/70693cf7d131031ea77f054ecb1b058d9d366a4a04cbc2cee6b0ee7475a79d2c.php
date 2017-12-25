<?php

/* D:\www\huamu/themes/responsiv-clean/pages/news/post.htm */
class __TwigTemplate_b0e855d76b4bd1a77d0ee2ceb037228f2e12d44341aecc2e6a7c6226d950d102 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/list.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "first", array());
        // line 5
        echo "<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li>
                <div class=\"contact_us_active\">
                    <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/ico_center.png");
        echo "\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">新闻动态</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"about_explain_content\">
                ";
        // line 22
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
                ";
        // line 23
        if (($context["image"] ?? null)) {
            // line 24
            echo "                <img style=\"max-width: 1000px\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" />
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/news/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  61 => 24,  59 => 23,  55 => 22,  49 => 19,  37 => 10,  30 => 5,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/list.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}
{% set image = post.featured_images.first %}
<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li>
                <div class=\"contact_us_active\">
                    <img src=\"{{ 'assets/img/ico_center.png'|theme }}\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">新闻动态</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">{{ post.title }}</span>
            </div>
            <div class=\"about_explain_content\">
                {{ post.content_html|raw }}
                {% if image %}
                <img style=\"max-width: 1000px\" src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
                {% endif %}
            </div>
        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/news/post.htm", "");
    }
}
