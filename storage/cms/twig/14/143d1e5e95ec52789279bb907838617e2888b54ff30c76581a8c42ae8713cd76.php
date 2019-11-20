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

/* C:\Users\Administrator\Documents\Git\ThanhNha/themes/demo/layouts/default.htm */
class __TwigTemplate_9413626680d97cf329219d08b0a901f15fbc3f1c52bd630991116bb1141c5605 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Thanh Nhã - Nơi thiên nhiên và trí tuệ hòa quyện</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <!-- Favicons
            ================================================== -->
        <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-72x72.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-114x114.png");
        echo "\">

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/font-awesome/css/font-awesome.css");
        echo "\">

        <!-- Stylesheet
            ================================================== -->
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nivo-lightbox/nivo-lightbox.css");
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nivo-lightbox/default.css");
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Dancing+Script:400,700\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "    </head>
    <body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
        <!-- Navigation
        ==========================================-->
        <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Thanh Nhã</a> </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#about\" class=\"page-scroll\">Giới thiệu</a></li>
                <li><a href=\"#restaurant-menu\" class=\"page-scroll\">Menu</a></li>
                <li><a href=\"#portfolio\" class=\"page-scroll\">Bộ sưu tập</a></li>
                <li><a href=\"#team\" class=\"page-scroll\">Chefs</a></li>
                <li><a href=\"#call-reservation\" class=\"page-scroll\">Liên hệ</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse --> 
            </div>
        </nav>
        <!-- Header -->
        <header id=\"header\">
            ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "        </header>

        <!-- Content -->
        ";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 71
        echo "
        <!-- Footer -->
        <div id=\"footer\">
            ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "        </div>

        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.1.11.1.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/SmoothScroll.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/nivo-lightbox.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.isotope.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jqBootstrapValidation.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/contact_me.js");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/main.js");
        echo "\"></script>
        ";
        // line 86
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 87
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 88
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 88,  215 => 87,  204 => 86,  200 => 85,  196 => 84,  192 => 83,  188 => 82,  184 => 81,  180 => 80,  176 => 79,  172 => 78,  167 => 75,  163 => 74,  158 => 71,  156 => 70,  151 => 67,  147 => 66,  119 => 40,  116 => 39,  102 => 28,  98 => 27,  94 => 26,  87 => 22,  83 => 21,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  59 => 12,  55 => 11,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Thanh Nhã - Nơi thiên nhiên và trí tuệ hòa quyện</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <!-- Favicons
            ================================================== -->
        <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\" type=\"image/x-icon\">
        <link rel=\"apple-touch-icon\" href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ 'assets/images/apple-touch-icon-72x72.png'|theme }}\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ 'assets/images/apple-touch-icon-114x114.png'|theme }}\">

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ 'assets/css/bootstrap.css'|theme }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/fonts/font-awesome/css/font-awesome.css'|theme }}\">

        <!-- Stylesheet
            ================================================== -->
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ 'assets/css/style.css'|theme }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/nivo-lightbox/nivo-lightbox.css'|theme }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/nivo-lightbox/default.css'|theme }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Dancing+Script:400,700\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        {% styles %}
    </head>
    <body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
        <!-- Navigation
        ==========================================-->
        <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Thanh Nhã</a> </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#about\" class=\"page-scroll\">Giới thiệu</a></li>
                <li><a href=\"#restaurant-menu\" class=\"page-scroll\">Menu</a></li>
                <li><a href=\"#portfolio\" class=\"page-scroll\">Bộ sưu tập</a></li>
                <li><a href=\"#team\" class=\"page-scroll\">Chefs</a></li>
                <li><a href=\"#call-reservation\" class=\"page-scroll\">Liên hệ</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse --> 
            </div>
        </nav>
        <!-- Header -->
        <header id=\"header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        {% page %}

        <!-- Footer -->
        <div id=\"footer\">
            {% partial 'site/footer' %}
        </div>

        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/jquery.1.11.1.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/bootstrap.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/SmoothScroll.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/nivo-lightbox.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/jquery.isotope.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/jqBootstrapValidation.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/contact_me.js'|theme }}\"></script> 
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/main.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/layouts/default.htm", "");
    }
}
