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

/* C:\Users\Administrator\Documents\Git\ThanhNha/themes/demo/partials/site/footer.htm */
class __TwigTemplate_949b260346c5c31cc1a7983edc75f3412514723c263d16cb1305e373ffe1604e extends \Twig\Template
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
        echo "<div class=\"container text-center\">
    <div class=\"col-md-4\">
        <h3>Address</h3>
        <div class=\"contact-item\">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <h3>Opening Hours</h3>
        <div class=\"contact-item\">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <h3>Contact Info</h3>
        <div class=\"contact-item\">
        <p>Phone: +1 123 456 1234</p>
        <p>Email: info@company.com</p>
        </div>
    </div>
    </div>
    <div class=\"container-fluid text-center copyrights\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"social\">
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        </ul>
        </div>
        <p>&copy; 2016 Touché. All rights reserved. Designed by <a href=\"http://www.templatewire.com\" rel=\"nofollow\">TemplateWire</a></p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container text-center\">
    <div class=\"col-md-4\">
        <h3>Address</h3>
        <div class=\"contact-item\">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <h3>Opening Hours</h3>
        <div class=\"contact-item\">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <h3>Contact Info</h3>
        <div class=\"contact-item\">
        <p>Phone: +1 123 456 1234</p>
        <p>Email: info@company.com</p>
        </div>
    </div>
    </div>
    <div class=\"container-fluid text-center copyrights\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"social\">
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        </ul>
        </div>
        <p>&copy; 2016 Touché. All rights reserved. Designed by <a href=\"http://www.templatewire.com\" rel=\"nofollow\">TemplateWire</a></p>
    </div>
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/partials/site/footer.htm", "");
    }
}
