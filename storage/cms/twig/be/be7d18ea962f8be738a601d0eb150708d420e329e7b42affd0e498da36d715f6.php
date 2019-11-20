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
        <div class=\"col-xs-12 col-md-6 \">
            <div class=\"about-img\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></div>
        </div>
        <div class=\"col-xs-12 col-md-6\">
            <div class=\"about-text\">
            <h2>Our Restaurant</h2>
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
        <h2>Menu</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Breakfast & Starters</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$35 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Main Course</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$45 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Dinner</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$45 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$350 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Coffee & Drinks</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$35 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Portfolio Section -->
    <div id=\"portfolio\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Gallery</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"categories\">
            <ul class=\"cat\">
            <li>
                <ol class=\"type\">
                <li><a href=\"#\" data-filter=\"*\" class=\"active\">All</a></li>
                <li><a href=\"#\" data-filter=\".breakfast\">Breakfast</a></li>
                <li><a href=\"#\" data-filter=\".lunch\">Lunch</a></li>
                <li><a href=\"#\" data-filter=\".dinner\">Dinner</a></li>
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
        // line 169
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 205
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 232
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 dinner\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/09-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 245
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/09-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/10-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 254
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/10-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 lunch\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/11-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 263
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/11-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
            <div class=\"col-sm-6 col-md-4 col-lg-4 breakfast\">
            <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"";
        // line 268
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/12-large.jpg");
        echo "\" title=\"Dish Name\" data-lightbox-gallery=\"gallery1\">
                <div class=\"hover-text\">
                    <h4>Dish Name</h4>
                </div>
                <img src=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/12-small.jpg");
        echo "\" class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Team Section -->
    <div id=\"team\" class=\"text-center\">
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
        // line 291
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
        // line 300
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
        // line 309
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
    </div>
    <!-- Call Reservation Section -->
    <div id=\"call-reservation\" class=\"text-center\">
    <div class=\"container\">
        <h2>Nếu bạn muốn đặt hàng Hãy liên hệ <strong>0374-914-138</strong></h2>
    </div>
    </div>
    <!-- Contact Section -->
    <div id=\"contact\" class=\"text-center\">
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
    </div>
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
        return array (  428 => 309,  416 => 300,  404 => 291,  382 => 272,  375 => 268,  367 => 263,  360 => 259,  352 => 254,  345 => 250,  337 => 245,  330 => 241,  322 => 236,  315 => 232,  307 => 227,  300 => 223,  292 => 218,  285 => 214,  277 => 209,  270 => 205,  262 => 200,  255 => 196,  247 => 191,  240 => 187,  232 => 182,  225 => 178,  217 => 173,  210 => 169,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- About Section -->
<div id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-xs-12 col-md-6 \">
            <div class=\"about-img\"><img src=\"{{ 'assets/images/about.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></div>
        </div>
        <div class=\"col-xs-12 col-md-6\">
            <div class=\"about-text\">
            <h2>Our Restaurant</h2>
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
        <h2>Menu</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Breakfast & Starters</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$35 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Main Course</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$45 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Dinner</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$45 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$350 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"menu-section\">
            <h2 class=\"menu-section-title\">Coffee & Drinks</h2>
            <hr>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$35 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class=\"menu-item\">
                <div class=\"menu-item-name\"> Delicious Dish </div>
                <div class=\"menu-item-price\"> \$30 </div>
                <div class=\"menu-item-description\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Portfolio Section -->
    <div id=\"portfolio\">
    <div class=\"section-title text-center center\">
        <div class=\"overlay\">
        <h2>Gallery</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"categories\">
            <ul class=\"cat\">
            <li>
                <ol class=\"type\">
                <li><a href=\"#\" data-filter=\"*\" class=\"active\">All</a></li>
                <li><a href=\"#\" data-filter=\".breakfast\">Breakfast</a></li>
                <li><a href=\"#\" data-filter=\".lunch\">Lunch</a></li>
                <li><a href=\"#\" data-filter=\".dinner\">Dinner</a></li>
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
    <div id=\"team\" class=\"text-center\">
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
    </div>
    <!-- Call Reservation Section -->
    <div id=\"call-reservation\" class=\"text-center\">
    <div class=\"container\">
        <h2>Nếu bạn muốn đặt hàng Hãy liên hệ <strong>0374-914-138</strong></h2>
    </div>
    </div>
    <!-- Contact Section -->
    <div id=\"contact\" class=\"text-center\">
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
    </div>
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ThanhNha/themes/demo/pages/home.htm", "");
    }
}
