<?php

/* D:\www\huamu/themes/responsiv-clean/pages/video/index.htm */
class __TwigTemplate_28d5340b43eea716461b87f9b5e93e9071f41cbc2a8f8c378e34d4bdfdd49c6b extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/video.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "
<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li>
                <div class=\"contact_us_active\">
                    <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/ico_center.png");
        echo "\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">视频中心</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"jd-box\">
                <ul class=\"fix\">

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["videoPosts"] ?? null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "                    ";
            $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "first", array());
            // line 23
            echo "                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <p>
                                ";
            // line 26
            if (($context["image"] ?? null)) {
                // line 27
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
                echo "\" width=\"358\" height=\"220\" alt=\"\">
                                ";
            }
            // line 29
            echo "                                <em></em>
                            </p>
                            <h5>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</h5>
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/video/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  77 => 31,  73 => 29,  67 => 27,  65 => 26,  60 => 24,  57 => 23,  54 => 22,  50 => 21,  36 => 10,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/video.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}

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
            <div class=\"jd-box\">
                <ul class=\"fix\">

                    {% for post in videoPosts.posts %}
                    {% set image = post.featured_images.first %}
                    <li>
                        <a href=\"{{ post.url }}\" target=\"_blank\">
                            <p>
                                {% if image %}
                                <img src=\"{{ image.path }}\" width=\"358\" height=\"220\" alt=\"\">
                                {% endif %}
                                <em></em>
                            </p>
                            <h5>{{ post.title }}</h5>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/video/index.htm", "");
    }
}
