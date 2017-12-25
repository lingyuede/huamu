<?php

/* D:\www\huamu/themes/responsiv-clean/pages/news/index.htm */
class __TwigTemplate_f458e36b687482f9304f1ffe03989d424192f9e531a02d16a211c1af39254e2c extends Twig_Template
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
        echo "<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li style=\"display: block;margin-bottom: 30px;\">
                <div class=\"contact_us_active\">
                    <img src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/ico_center.png");
        echo "\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">新闻动态</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"news\">
                ";
        // line 18
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["newsPosts"] ?? null), "posts", array());
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "                ";
            $context["image"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "first", array());
            // line 21
            echo "                <div class=\"list\">
                    ";
            // line 22
            if (($context["image"] ?? null)) {
                // line 23
                echo "                    <div class=\"pic_img\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "html", null, true);
                echo "\" width=\"210\" height=\"118\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\"/></div>
                    ";
            }
            // line 25
            echo "                    <ul>
                        <li><h1><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h1></li>
                        <li><p>";
            // line 27
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p></li>
                        <li><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" class=\"red\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "\">查看详细&gt;&gt;</a></li>
                    </ul>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>

            <div class=\"page\" style=\"margin:50px auto;\">
                ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 36
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 37
                echo "                  <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\" class=\"pagination-prev\">上一页</a>
                    ";
            }
            // line 39
            echo "
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                echo "                        <a class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\" href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 45
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\" class=\"pagination-next\">下一页</a>
                    ";
            }
            // line 47
            echo "
                ";
        }
        // line 49
        echo "            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/news/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  144 => 47,  138 => 45,  136 => 44,  133 => 43,  120 => 41,  116 => 40,  113 => 39,  107 => 37,  104 => 36,  102 => 35,  97 => 32,  85 => 28,  81 => 27,  73 => 26,  70 => 25,  62 => 23,  60 => 22,  57 => 21,  54 => 20,  49 => 19,  47 => 18,  35 => 9,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/list.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}
<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li style=\"display: block;margin-bottom: 30px;\">
                <div class=\"contact_us_active\">
                    <img src=\"{{ 'assets/img/ico_center.png'|theme }}\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">新闻动态</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"news\">
                {% set posts = newsPosts.posts %}
                {% for post in posts %}
                {% set image = post.featured_images.first %}
                <div class=\"list\">
                    {% if image %}
                    <div class=\"pic_img\"><img src=\"{{ image.path }}\" width=\"210\" height=\"118\" alt=\"{{ post.title }}\"/></div>
                    {% endif %}
                    <ul>
                        <li><h1><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}</a></h1></li>
                        <li><p>{{ post.summary|raw }}</p></li>
                        <li><a href=\"{{ post.url }}\" class=\"red\" title=\"{{ post.title }}\">查看详细&gt;&gt;</a></li>
                    </ul>
                </div>
                {% endfor %}
            </div>

            <div class=\"page\" style=\"margin:50px auto;\">
                {% if posts.lastPage > 1 %}
                    {% if posts.currentPage > 1 %}
                  <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\" class=\"pagination-prev\">上一页</a>
                    {% endif %}

                    {% for page in 1..posts.lastPage %}
                        <a class=\"{{ posts.currentPage == page ? 'active' : null }}\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                    {% endfor %}

                    {% if posts.lastPage > posts.currentPage %}
                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\" class=\"pagination-next\">下一页</a>
                    {% endif %}

                {% endif %}
            </div>

        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/news/index.htm", "");
    }
}
