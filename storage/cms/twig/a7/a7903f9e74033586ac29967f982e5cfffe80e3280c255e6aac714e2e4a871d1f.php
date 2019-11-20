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

/* C:\Users\Administrator\Documents\Git\ThanhNha/themes/demo/partials/site/header.htm */
class __TwigTemplate_805b653a06de6bd479201229c9e39042b8ba11f8b5ddf7c9268f916a2d59e445 extends \Twig\Template
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
        echo "<div class=\"intro\">
    <div class=\"overlay\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"intro-text\">
            <h1>Thanh Nhã</h1>
            <p>Nơi thiên nhiên và trí tuệ hòa quyện</p>
            <a href=\"#about\" class=\"btn btn-custom btn-lg page-scroll\">Discover Story</a> </div>
        </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"intro\">
    <div class=\"overlay\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"intro-text\">
            <h1>Thanh Nhã</h1>
            <p>Nơi thiên nhiên và trí tuệ hòa quyện</p>
            <a href=\"#about\" class=\"btn btn-custom btn-lg page-scroll\">Discover Story</a> </div>
        </div>
        </div>
    </div>
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/partials/site/header.htm", "");
    }
}
