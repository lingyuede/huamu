<?php

/* D:\www\huamu/themes/responsiv-clean/pages/video/post.htm */
class __TwigTemplate_cd0999091b3b36391f01ca4878216ebb0a7c66e3241ce9051a79db442864d244 extends Twig_Template
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
        echo "
<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li>
                <div class=\"contact_us_active\">
                    <img src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/ico_center.png");
        echo "\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">视频中心</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"about_explain_content\">
                ";
        // line 23
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
                ";
        // line 24
        if (($context["image"] ?? null)) {
            // line 25
            echo "                <img style=\"max-width: 1000px\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" />
                ";
        }
        // line 27
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/video/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  62 => 25,  60 => 24,  56 => 23,  50 => 20,  38 => 11,  30 => 5,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
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
                    <span class=\"middle_left_tittle\">视频中心</span>
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
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/video/post.htm", "");
    }
}
