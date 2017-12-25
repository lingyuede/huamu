<?php

/* D:\www\huamu/themes/responsiv-clean/pages/project/index.htm */
class __TwigTemplate_9ab57ac613149226c57e9313a5661c7279106894b32d4a5f4ca6f079bc5b4005 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/examp.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 5
        echo "<script type=\"text/javascript\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.roundabout-1.0.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.easing.1.3.js");
        echo "\"></script>
<script type=\"text/javascript\">var j = jQuery.noConflict();
j(document).ready(function () {
    j('.myroundabout').roundabout({
        easing: 'easeOutInCirc',
        duration: 600,
        autoplay: true,
        autoplayDuration: 3000,
        autoplayPauseOnHover: true
    });
});</script>
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 18
        echo "<div class=\"container\">
    <div class=\"example_title\" style=\"text-align: center;padding-bottom: 20px;\">
        <span style=\"text-align: center;color: #fff;padding-bottom: 26px; border-bottom: 2px solid #000;font-size: 24px;\">案例名称案例名称案例名称案例名称案例名称</span>
    </div>
    <div class=\"show\">
        <div class=\"featured-area\">
            <ul class=\"roundabout roundabout-holder myroundabout\">
                <li class=\"roundabout-moveable-item\">
                    <img src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/大首页左侧轮播图二.png");
        echo "\" alt=\"\">
                    <div class=\"c_name\">何斯路村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">移沿山村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/大首页左侧轮播图二.png");
        echo "\" alt=\"\">
                    <div class=\"c_name\">岭根村</div>

                </li>
                <li class=\"roundabout-moveable-item roundabout-in-focus\">
                    <img src=\"./img/大首页左侧轮播图三.png\" alt=\"\">
                    <div class=\"c_name\">三溪村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/大首页左侧轮播图二.png");
        echo "\" alt=\"\">
                    <div class=\"c_name\">大峡谷村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">斯宅村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/大首页左侧轮播图二.png");
        echo "\" alt=\"\">
                    <div class=\"c_name\">西坑村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图四.png\" alt=\"\">
                    <div class=\"c_name\">苍坡村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">
                        横坑村
                    </div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/大首页左侧轮播图二.png");
        echo "\" alt=\"\">
                    <div class=\"c_name\">
                        马鸣村
                    </div>
                </li>
            </ul>
        </div>
        <!--<img src=\"./“浙江十大最美乡村”评选活动_files/shadow.png\" class=\"shadow\" alt=\"\">-->
    </div>
    <div class=\"example_title\" style=\"text-align: center;padding-bottom: 20px;\">
        <span style=\"text-align: center;color: #fff;padding-bottom: 26px; border-bottom: 2px solid #000;font-size: 24px;\">案例名称案例名称案例名称案例名称案例名称</span>
    </div>
    <div class=\"show\">
        <div class=\"featured-area\">
            <ul class=\"roundabout roundabout-holder myroundabout\">
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">何斯路村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">移沿山村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">岭根村</div>

                </li>
                <li class=\"roundabout-moveable-item roundabout-in-focus\">
                    <img src=\"./img/大首页左侧轮播图三.png\" alt=\"\">
                    <div class=\"c_name\">三溪村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">大峡谷村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">斯宅村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">西坑村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图四.png\" alt=\"\">
                    <div class=\"c_name\">苍坡村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">
                        横坑村
                    </div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">
                        马鸣村
                    </div>
                </li>
            </ul>
        </div>
        <!--<img src=\"./“浙江十大最美乡村”评选活动_files/shadow.png\" class=\"shadow\" alt=\"\">-->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\huamu/themes/responsiv-clean/pages/project/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  95 => 51,  84 => 43,  72 => 34,  61 => 26,  51 => 18,  49 => 4,  35 => 6,  30 => 5,  28 => 4,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
<link href=\"{{ 'assets/css/examp.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}
{% put scripts %}
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.roundabout-1.0.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.easing.1.3.js'|theme }}\"></script>
<script type=\"text/javascript\">var j = jQuery.noConflict();
j(document).ready(function () {
    j('.myroundabout').roundabout({
        easing: 'easeOutInCirc',
        duration: 600,
        autoplay: true,
        autoplayDuration: 3000,
        autoplayPauseOnHover: true
    });
});</script>
{% endput %}
<div class=\"container\">
    <div class=\"example_title\" style=\"text-align: center;padding-bottom: 20px;\">
        <span style=\"text-align: center;color: #fff;padding-bottom: 26px; border-bottom: 2px solid #000;font-size: 24px;\">案例名称案例名称案例名称案例名称案例名称</span>
    </div>
    <div class=\"show\">
        <div class=\"featured-area\">
            <ul class=\"roundabout roundabout-holder myroundabout\">
                <li class=\"roundabout-moveable-item\">
                    <img src=\"{{ 'assets/img/大首页左侧轮播图二.png'|theme }}\" alt=\"\">
                    <div class=\"c_name\">何斯路村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">移沿山村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"{{ 'assets/img/大首页左侧轮播图二.png'|theme }}\" alt=\"\">
                    <div class=\"c_name\">岭根村</div>

                </li>
                <li class=\"roundabout-moveable-item roundabout-in-focus\">
                    <img src=\"./img/大首页左侧轮播图三.png\" alt=\"\">
                    <div class=\"c_name\">三溪村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"{{ 'assets/img/大首页左侧轮播图二.png'|theme }}\" alt=\"\">
                    <div class=\"c_name\">大峡谷村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">斯宅村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"{{ 'assets/img/大首页左侧轮播图二.png'|theme }}\" alt=\"\">
                    <div class=\"c_name\">西坑村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图四.png\" alt=\"\">
                    <div class=\"c_name\">苍坡村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">
                        横坑村
                    </div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"{{ 'assets/img/大首页左侧轮播图二.png'|theme }}\" alt=\"\">
                    <div class=\"c_name\">
                        马鸣村
                    </div>
                </li>
            </ul>
        </div>
        <!--<img src=\"./“浙江十大最美乡村”评选活动_files/shadow.png\" class=\"shadow\" alt=\"\">-->
    </div>
    <div class=\"example_title\" style=\"text-align: center;padding-bottom: 20px;\">
        <span style=\"text-align: center;color: #fff;padding-bottom: 26px; border-bottom: 2px solid #000;font-size: 24px;\">案例名称案例名称案例名称案例名称案例名称</span>
    </div>
    <div class=\"show\">
        <div class=\"featured-area\">
            <ul class=\"roundabout roundabout-holder myroundabout\">
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">何斯路村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">移沿山村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">岭根村</div>

                </li>
                <li class=\"roundabout-moveable-item roundabout-in-focus\">
                    <img src=\"./img/大首页左侧轮播图三.png\" alt=\"\">
                    <div class=\"c_name\">三溪村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">大峡谷村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">斯宅村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">西坑村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图四.png\" alt=\"\">
                    <div class=\"c_name\">苍坡村</div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图一.png\" alt=\"\">
                    <div class=\"c_name\">
                        横坑村
                    </div>
                </li>
                <li class=\"roundabout-moveable-item\">
                    <img src=\"./img/大首页左侧轮播图二.png\" alt=\"\">
                    <div class=\"c_name\">
                        马鸣村
                    </div>
                </li>
            </ul>
        </div>
        <!--<img src=\"./“浙江十大最美乡村”评选活动_files/shadow.png\" class=\"shadow\" alt=\"\">-->
    </div>
</div>", "D:\\www\\huamu/themes/responsiv-clean/pages/project/index.htm", "");
    }
}
