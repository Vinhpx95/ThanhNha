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

/* C:\Users\Administrator\Documents\Git\ThanhNha/themes/demo/pages/home.htm */
class __TwigTemplate_2a024d0c18eaf091ede482794df21b1676a1e6395e2f0125286406f492c711ce extends \Twig\Template
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
        echo "<!-- About Section -->

<div id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-xs-12 col-md-6\" style=\"text-align: center;\">
            <div class=\"about-img\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" class=\"img-responsive\" alt=\"\"></div>
        </div>
        <div class=\"col-xs-12 col-md-6\">
            <div class=\"about-text\">
            <h2>Thanh Nhã</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
            <h3>Awarded Chefs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id=\"restaurant-menu\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Sản phẩm</h2>
        <hr>
        <p class=\"font-arial\">Điều Bình Phước</p>
        </div>
    </div>
    <div class=\"container\">
        Thông tin về Điều Bình Phước
    </div>
    </div>
    <!-- Portfolio Section -->
    <div id=\"portfolio\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Bộ sưu tập</h2>
        <hr>
        <p class=\"font-arial\">Hình ảnh về sản phẩm Điều Bình Phước</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"categories\">
            <ul class=\"cat\">
            <li>
                <ol class=\"type\">
                <li><a href=\"#\" data-filter=\"*\" class=\"active\">Tất cả</a></li>
                <li><a href=\"#\" data-filter=\".breakfast\">Thành phẩm</a></li>
                <li><a href=\"#\" data-filter=\".lunch\">Cơ sở sản xuất</a></li>
                <li><a href=\"#\" data-filter=\".dinner\">Vườn canh tác</a></li>
                </ol>
            </li>
            </ul>
            <div class=\"clearfix\"></div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"portfolio-items\">
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/09-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/09-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/10-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/10-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/11-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/11-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/12-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/12-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Team Section -->
    <!-- <div id=\"team\" class=\"text-center\">
    <div class=\"overlay\">
        <div class=\"container\">
        <div class=\"col-md-10 col-md-offset-1 section-title\">
            <h2>Meet Our Chefs</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
        </div>
        <div id=\"row\">
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/01.jpg");
        echo "\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Mike Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/02.jpg");
        echo "\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Chris Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/03.jpg");
        echo "\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Ethan Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> -->
    <!-- Call Reservation Section -->
    <div id=\"call-reservation\" class=\"text-center\">
    <div class=\"container\">
        <h2>Nếu bạn muốn đặt hàng Hãy liên hệ <strong>0374-914-138</strong></h2>
    </div>
    </div>
    <!-- Contact Section -->
    <!-- <div id=\"contact\" class=\"text-center\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
        <h2>Liên hệ</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
        <div class=\"col-md-10 col-md-offset-1\">
        <form name=\"sentMessage\" id=\"contactForm\" novalidate>
            <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Tên\" required=\"required\">
                <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"required\">
                <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            </div>
            <div class=\"form-group\">
            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"4\" placeholder=\"Nội dung\" required></textarea>
            <p class=\"help-block text-danger\"></p>
            </div>
            <div id=\"success\"></div>
            <button type=\"submit\" class=\"btn btn-custom btn-lg\">Gửi thư</button>
        </form>
        </div>
    </div> -->

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 203,  310 => 194,  298 => 185,  276 => 166,  269 => 162,  261 => 157,  254 => 153,  246 => 148,  239 => 144,  231 => 139,  224 => 135,  216 => 130,  209 => 126,  201 => 121,  194 => 117,  186 => 112,  179 => 108,  171 => 103,  164 => 99,  156 => 94,  149 => 90,  141 => 85,  134 => 81,  126 => 76,  119 => 72,  111 => 67,  104 => 63,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- About Section -->

<div id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-xs-12 col-md-6\" style=\"text-align: center;\">
            <div class=\"about-img\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" class=\"img-responsive\" alt=\"\"></div>
        </div>
        <div class=\"col-xs-12 col-md-6\">
            <div class=\"about-text\">
            <h2>Thanh Nhã</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
            <h3>Awarded Chefs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id=\"restaurant-menu\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Sản phẩm</h2>
        <hr>
        <p class=\"font-arial\">Điều Bình Phước</p>
        </div>
    </div>
    <div class=\"container\">
        Thông tin về Điều Bình Phước
    </div>
    </div>
    <!-- Portfolio Section -->
    <div id=\"portfolio\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Bộ sưu tập</h2>
        <hr>
        <p class=\"font-arial\">Hình ảnh về sản phẩm Điều Bình Phước</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"categories\">
            <ul class=\"cat\">
            <li>
                <ol class=\"type\">
                <li><a href=\"#\" data-filter=\"*\" class=\"active\">Tất cả</a></li>
                <li><a href=\"#\" data-filter=\".breakfast\">Thành phẩm</a></li>
                <li><a href=\"#\" data-filter=\".lunch\">Cơ sở sản xuất</a></li>
                <li><a href=\"#\" data-filter=\".dinner\">Vườn canh tác</a></li>
                </ol>
            </li>
            </ul>
            <div class=\"clearfix\"></div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"portfolio-items\">
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/01-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/01-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/02-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/02-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/03-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/03-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/04-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/04-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/05-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/05-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/06-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/06-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/07-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/07-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/08-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/08-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/09-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/09-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/10-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/10-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/11-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/11-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"{{ 'assets/images/portfolio/12-large.jpg'|theme }}\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"{{ 'assets/images/portfolio/12-small.jpg'|theme }}\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Team Section -->
    <!-- <div id=\"team\" class=\"text-center\">
    <div class=\"overlay\">
        <div class=\"container\">
        <div class=\"col-md-10 col-md-offset-1 section-title\">
            <h2>Meet Our Chefs</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
        </div>
        <div id=\"row\">
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"{{ 'assets/images/team/01.jpg'|theme }}\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Mike Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"{{ 'assets/images/team/02.jpg'|theme }}\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Chris Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
            <div class=\"col-md-4 team\">
            <div class=\"thumbnail\">
                <div class=\"team-img\"><img src=\"{{ 'assets/images/team/03.jpg'|theme }}\" alt=\"...\"></div>
                <div class=\"caption\">
                <h3>Ethan Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> -->
    <!-- Call Reservation Section -->
    <div id=\"call-reservation\" class=\"text-center\">
    <div class=\"container\">
        <h2>Nếu bạn muốn đặt hàng Hãy liên hệ <strong>0374-914-138</strong></h2>
    </div>
    </div>
    <!-- Contact Section -->
    <!-- <div id=\"contact\" class=\"text-center\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
        <h2>Liên hệ</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
        <div class=\"col-md-10 col-md-offset-1\">
        <form name=\"sentMessage\" id=\"contactForm\" novalidate>
            <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Tên\" required=\"required\">
                <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"required\">
                <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            </div>
            <div class=\"form-group\">
            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"4\" placeholder=\"Nội dung\" required></textarea>
            <p class=\"help-block text-danger\"></p>
            </div>
            <div id=\"success\"></div>
            <button type=\"submit\" class=\"btn btn-custom btn-lg\">Gửi thư</button>
        </form>
        </div>
    </div> -->

</div>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/pages/home.htm", "");
    }
}
