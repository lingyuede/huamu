<?php

/* D:\www\huamu/themes/responsiv-clean/pages/negotiate/index.htm */
class __TwigTemplate_da26c029b7662e9200c8461ca2f4ee984871b1231fc2325078c222c17c4ce7a4 extends Twig_Template
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
                    <span class=\"middle_left_tittle\">商务洽谈</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">商务洽谈</span>
            </div>
            <div class=\"about_explain_content\">
                <div class=\"about\" style=\"padding-top:200px 0px\">
                    <div style=\"width:50%; float:left\">
                        <br><br>
                        <p>地址：江苏省如皋市花城大道399号</p><br>
                        <p>联系人：徐女士、李先生</p><br>
                        <p>座机：0513-88550388   </p><br>
                        <p>传真：0513-87192888</p>
                    </div>
                    <div style=\"width:50%; float:left; text-align:center\">
                        <img width=\"250px\" src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/二维码.jpg");
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/negotiate/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  36 => 10,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/list.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}

<div class=\"middle\" id=\"middle\">
    <div class=\"middle_left\">
        <ul>
            <li>
                <div class=\"contact_us_active\">
                    <img src=\"{{ 'assets/img/ico_center.png'|theme }}\" class=\"middle_left_img\">
                    <span class=\"middle_left_tittle\">商务洽谈</span>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"middle_right\">
        <div class=\"middle_right_content1 middle_right_content\">
            <div class=\"contact_experience_text text\">
                <span class=\"text_p2\">商务洽谈</span>
            </div>
            <div class=\"about_explain_content\">
                <div class=\"about\" style=\"padding-top:200px 0px\">
                    <div style=\"width:50%; float:left\">
                        <br><br>
                        <p>地址：江苏省如皋市花城大道399号</p><br>
                        <p>联系人：徐女士、李先生</p><br>
                        <p>座机：0513-88550388   </p><br>
                        <p>传真：0513-87192888</p>
                    </div>
                    <div style=\"width:50%; float:left; text-align:center\">
                        <img width=\"250px\" src=\"{{ 'assets/img/二维码.jpg'|theme }}\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/negotiate/index.htm", "");
    }
}
