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

/* home_page/index.html.twig */
class __TwigTemplate_3185359daa07c163eb57bf0c1faff24a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- ======================= Start Banner ===================== -->
<div class=\"main-banner\" style=\"background-image:url(assets/img/banner-1.jpg);\">
    <div class=\"container\">
        <div class=\"col-md-12\">
        
            <div class=\"caption text-center cl-white\">
                <h2>Discover Your Next Adventure</h2>
                <p>Expolore top rated tours, hotels and restaurants around the world</p>
            </div>
            
            <form>
                <fieldset class=\"home-form-1\">
                
                    <div class=\"col-md-3 col-sm-3 padd-0\">
                        <input type=\"text\" class=\"form-control br-1\" placeholder=\"City, Country\">
                    </div>
                    
                    <div class=\"col-md-3 col-sm-3 padd-0\">
                        <input type=\"text\" name=\"book-date\" class=\"form-control br-1\" value=\"When...\">
                    </div>
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <div class=\"sl-box\">
                            <select class=\"wide form-control br-1\">
                                <option data-display=\"Adults\">Adults</option>
                                <option value=\"1\">01</option>
                                <option value=\"2\">02</option>
                                <option value=\"3\">03</option>
                                <option value=\"4\">04</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <div class=\"sl-box\">
                            <select class=\"wide form-control br-1\">
                                <option data-display=\"Children\">Children</option>
                                <option value=\"1\">01</option>
                                <option value=\"2\">02</option>
                                <option value=\"3\">03</option>
                                <option value=\"4\">04</option>
                            </select>
                        </div>
                    </div>
                    
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <button type=\"submit\" class=\"btn theme-btn cl-white seub-btn\">FIND JOB</button>
                    </div>
                        
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- ======================= End Banner ===================== -->
<div class=\"clearfix\"></div>

<!-- ====================== How It Work ================= -->
<section class=\"how-it-works\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Working Process</span>
                    <h1>How It Works?</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
        
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-1.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">01</span>
                    </div>
                    <h4>Choose a Destination & Guide</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-2.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">02</span>
                    </div>
                    <h4>Choose your guide & Customize</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-3.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">03</span>
                    </div>
                    <h4>Book Your Guide Online</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
        </div>

    </div>
</section>
<!-- ====================== How It Work ================= -->
<div class=\"clearfix\"></div>


<!-- ====================== Popular Tour ================= -->
<section class=\"gray-dot gray-bg\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Select Tour</span>
                    <h1>Popular Tour</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            
            <div class=\"list-slider\">
            
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <!-- Single Tour -->
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-1.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>25h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Istanbul, Turkey</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-1.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>25</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Netherlands</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$187</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-2.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>2 days</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Kuala Lumpur, Malaysia</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-2.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>26</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Austrailia</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$130</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-3.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>21h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Singapore. platongkoh</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-3.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>17</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">United States</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$215</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-4.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>22h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">New York, Sean Pavone</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-4.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>18</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">New York</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$240</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-5.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>17h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Dubai, United Arab Emirates</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-5.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>15</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Saudi Arabia</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$117</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
            </div>
        </div>

    </div>
</section>
<!-- ====================== Popular Tour ================= -->
<div class=\"clearfix\"></div>


<!-- ====================== Popular Guide ================= -->
<section class=\"tour-guide\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Popular Guide</span>
                    <h1>Dedicated Guide</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
        
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-1.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Suryansh Vighul</h4>
                            <h5 class=\"theme-cl font-bold\">\$40/Hour</h5>
                        </div>
                    </div>
                    <a href=\"";
        // line 482
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guidedetails");
        echo "\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-2.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Ruchitha Riya</h4>
                            <h5 class=\"theme-cl font-bold\">\$52/Hour</h5>
                        </div>
                    </div>
                    <a href=\"";
        // line 500
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guidedetails");
        echo "\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-3.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Dev Singhania</h4>
                            <h5 class=\"theme-cl font-bold\">\$50/Hour</h5>
                        </div>
                    </div>
                    <a href=\"";
        // line 518
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guidedetails");
        echo "\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
        </div>

    </div>
</section>
<!-- ====================== Popular Guide ================= -->\t\t
<div class=\"clearfix\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  591 => 518,  570 => 500,  549 => 482,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<!-- ======================= Start Banner ===================== -->
<div class=\"main-banner\" style=\"background-image:url(assets/img/banner-1.jpg);\">
    <div class=\"container\">
        <div class=\"col-md-12\">
        
            <div class=\"caption text-center cl-white\">
                <h2>Discover Your Next Adventure</h2>
                <p>Expolore top rated tours, hotels and restaurants around the world</p>
            </div>
            
            <form>
                <fieldset class=\"home-form-1\">
                
                    <div class=\"col-md-3 col-sm-3 padd-0\">
                        <input type=\"text\" class=\"form-control br-1\" placeholder=\"City, Country\">
                    </div>
                    
                    <div class=\"col-md-3 col-sm-3 padd-0\">
                        <input type=\"text\" name=\"book-date\" class=\"form-control br-1\" value=\"When...\">
                    </div>
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <div class=\"sl-box\">
                            <select class=\"wide form-control br-1\">
                                <option data-display=\"Adults\">Adults</option>
                                <option value=\"1\">01</option>
                                <option value=\"2\">02</option>
                                <option value=\"3\">03</option>
                                <option value=\"4\">04</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <div class=\"sl-box\">
                            <select class=\"wide form-control br-1\">
                                <option data-display=\"Children\">Children</option>
                                <option value=\"1\">01</option>
                                <option value=\"2\">02</option>
                                <option value=\"3\">03</option>
                                <option value=\"4\">04</option>
                            </select>
                        </div>
                    </div>
                    
                        
                    <div class=\"col-md-2 col-sm-2 padd-0\">
                        <button type=\"submit\" class=\"btn theme-btn cl-white seub-btn\">FIND JOB</button>
                    </div>
                        
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- ======================= End Banner ===================== -->
<div class=\"clearfix\"></div>

<!-- ====================== How It Work ================= -->
<section class=\"how-it-works\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Working Process</span>
                    <h1>How It Works?</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
        
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-1.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">01</span>
                    </div>
                    <h4>Choose a Destination & Guide</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-2.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">02</span>
                    </div>
                    <h4>Choose your guide & Customize</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"work-process\">
                    <div class=\"process-img\">
                        <img src=\"assets/img/tour-3.png\" class=\"img-responsive\" alt=\"\" />
                        <span class=\"process-num\">03</span>
                    </div>
                    <h4>Book Your Guide Online</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
        </div>

    </div>
</section>
<!-- ====================== How It Work ================= -->
<div class=\"clearfix\"></div>


<!-- ====================== Popular Tour ================= -->
<section class=\"gray-dot gray-bg\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Select Tour</span>
                    <h1>Popular Tour</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            
            <div class=\"list-slider\">
            
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <!-- Single Tour -->
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-1.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>25h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Istanbul, Turkey</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-1.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>25</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Netherlands</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$187</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-2.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>2 days</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Kuala Lumpur, Malaysia</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-2.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>26</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Austrailia</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$130</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-3.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>21h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Singapore. platongkoh</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-3.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>17</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">United States</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$215</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-4.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>22h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">New York, Sean Pavone</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-4.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>18</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">New York</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$240</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
                <!-- Single Tour -->
                <div class=\"list-slide-box\">
                    <article class=\"tour-box style-1\">
                    
                        <div class=\"tour-box-image\">
                            <figure>
                                <a href=\"tour-detail.html\">
                                    <img src=\"assets/img/tour/tour-5.jpg\" class=\"img-responsive listing-box-img\" alt=\"\" />
                                    <div class=\"list-overlay\"></div>
                                </a>
                                <div class=\"entry-bookmark\">                                   
                                    <a href=\"#\"><i class=\"ti-bookmark\"></i></a>
                                </div>
                                <div class=\"tour-time\">
                                    <i class=\"ti ti-car\"></i><span>17h</span>
                                </div>
                                <h4 class=\"tour-place\">
                                    <a href=\"tour-detail.html\">Dubai, United Arab Emirates</a>
                                </h4>
                                <span class=\"featured-tour\"><i class=\"fa fa-star\"></i></span>
                                <a href=\"#\" class=\"list-like left\"><i class=\"ti-heart\"></i></a>
                            </figure>
                        </div>
                        
                        <div class=\"entry-meta\">
                            <div class=\"meta-item meta-author\">
                                <div class=\"coauthors\">
                                    <span class=\"vcard author\">
                                        <span class=\"fn\">
                                            <a href=\"#\"><img alt=\"\" src=\"assets/img/user-5.jpg\" class=\"avatar avatar-24\" height=\"24\" width=\"24\">Lisa Scholfield</a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class=\"meta-item meta-comment fl-right\">
                                <i class=\"ti-comment-alt\"></i><span>15</span>
                            </div>
                            <div class=\"meta-item meta-rating fl-right\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half\"></i>
                            </div>
                        </div>

                        <div class=\"inner-box\">
                            <div class=\"box-inner-ellipsis\">
                                <h4 class=\"entry-title\">
                                    <a href=\"tour-detail.html\">Saudi Arabia</a>
                                </h4>
                                <div class=\"price-box\">
                                    <div class=\"tour-price fl-right\">
                                        <i class=\"ti ti-user\"></i><span class=\"theme-cl f-bold\">\$117</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </article>
                </div>
                
            </div>
        </div>

    </div>
</section>
<!-- ====================== Popular Tour ================= -->
<div class=\"clearfix\"></div>


<!-- ====================== Popular Guide ================= -->
<section class=\"tour-guide\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading\">
                    <span class=\"theme-cl\">Popular Guide</span>
                    <h1>Dedicated Guide</h1>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
        
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-1.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Suryansh Vighul</h4>
                            <h5 class=\"theme-cl font-bold\">\$40/Hour</h5>
                        </div>
                    </div>
                    <a href=\"{{path('app_guidedetails')}}\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-2.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Ruchitha Riya</h4>
                            <h5 class=\"theme-cl font-bold\">\$52/Hour</h5>
                        </div>
                    </div>
                    <a href=\"{{path('app_guidedetails')}}\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
            <!-- Single Guide -->
            <div class=\"col-md-4\">
                <div class=\"guides-container\">
                
                    <div class=\"guides-box\">
                        <div class=\"guides-img-box\">
                            <img src=\"assets/img/user-3.jpg\" class=\"img-responsive\" alt=\"\" />
                        </div>
                        <div class=\"guider-detail\">
                            <h4>Dev Singhania</h4>
                            <h5 class=\"theme-cl font-bold\">\$50/Hour</h5>
                        </div>
                    </div>
                    <a href=\"{{path('app_guidedetails')}}\" class=\"btn theme-btn full-width\">Book Now</a>
                
                </div>
            </div>
            
        </div>

    </div>
</section>
<!-- ====================== Popular Guide ================= -->\t\t
<div class=\"clearfix\"></div>
{% endblock %}
", "home_page/index.html.twig", "C:\\Users\\Racha\\Documents\\GitHub\\PIDev-Reservation\\templates\\home_page\\index.html.twig");
    }
}
