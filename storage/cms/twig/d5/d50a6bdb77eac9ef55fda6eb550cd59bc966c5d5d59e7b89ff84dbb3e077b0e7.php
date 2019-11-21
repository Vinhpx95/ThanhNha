<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Users\Administrator\Documents\Git\ThanhNha/plugins/thanhnha/shop/components/inforfooter/default.htm */
class __TwigTemplate_9923edf070b9006d4415e89a39fd0f47a5a3c176a8ee04edae6c7bcf53b15fdc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-md-4\">
    <h3>Địa chỉ</h3>
    <div class=\"contact-item\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "address", [], "any", false, false, false, 4), "html", null, true);
        echo " </p>
    </div>
</div>
<div class=\"col-md-4\">
    <h3>Giờ mở cửa</h3>
    <div class=\"contact-item\">
    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "opening_hours", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    </div>
</div>
<div class=\"col-md-4\">
    <h3>Thông tin</h3>
    <div class=\"contact-item\">
    <p>Điện thoại: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "phone1", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
    <p>Điện thoại: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "phone2", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
    <p>Email: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "mail", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
    </div>
</div>
</div>
<div class=\"container-fluid text-center copyrights\">
<div class=\"col-md-8 col-md-offset-2\">
    <div class=\"social\">
    <ul>
        <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infor"] ?? null), "facebook", [], "any", false, false, false, 26), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a></li>
    </ul>
    </div>
    <p>&copy; 2019. Designed by <a href=\"http://www.thanhnhaorganic.com\" rel=\"nofollow\">Thanh Nha</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/plugins/thanhnha/shop/components/inforfooter/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  68 => 18,  64 => 17,  60 => 16,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4\">
    <h3>Địa chỉ</h3>
    <div class=\"contact-item\">
    <p>{{ infor.address }} </p>
    </div>
</div>
<div class=\"col-md-4\">
    <h3>Giờ mở cửa</h3>
    <div class=\"contact-item\">
    <p>{{ infor.opening_hours }}</p>
    </div>
</div>
<div class=\"col-md-4\">
    <h3>Thông tin</h3>
    <div class=\"contact-item\">
    <p>Điện thoại: {{ infor.phone1 }}</p>
    <p>Điện thoại: {{ infor.phone2 }}</p>
    <p>Email: {{ infor.mail }}</p>
    </div>
</div>
</div>
<div class=\"container-fluid text-center copyrights\">
<div class=\"col-md-8 col-md-offset-2\">
    <div class=\"social\">
    <ul>
        <li><a href=\"{{ infor.facebook }}\"><i class=\"fa fa-facebook\"></i></a></li>
    </ul>
    </div>
    <p>&copy; 2019. Designed by <a href=\"http://www.thanhnhaorganic.com\" rel=\"nofollow\">Thanh Nha</a></p>
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/plugins/thanhnha/shop/components/inforfooter/default.htm", "");
    }
}
