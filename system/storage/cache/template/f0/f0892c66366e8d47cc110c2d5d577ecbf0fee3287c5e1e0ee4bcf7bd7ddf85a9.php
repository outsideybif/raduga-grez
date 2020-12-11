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

/* default/template/common/home.twig */
class __TwigTemplate_732e0c3b7ee690c1b5fc477aad486f4014a465c0602c7956af581a940655b6c3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "




<main-header class=\"main-header\">
   <div class=\"main-header__background\"><img class=\"background rellax\" data-scroll=\"\" data-scroll-speed=\"-2\" src=\"./catalog/view/theme/default/assets/images/main-background.png\"></div>
   <div class=\"toys toys_as_art\">
      <h1 class=\"main_title header\">";
        // line 9
        echo ($context["main_title"] ?? null);
        echo "</h1>
      <video autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
        // line 10
        echo ($context["main_video"] ?? null);
        echo "\"></video>
     <a class=\"toys__action\" href=\"";
        // line 11
        echo ($context["main_button_link"] ?? null);
        echo "\">
         <circle-button class=\"circle-button white\">
            ";
        // line 13
        echo ($context["main_button_text"] ?? null);
        echo "
         </circle-button>
      </a>
   </div>
</main-header>




<main-about-us class=\"main-about-us block-layout\">
   <div class=\"main-about-us__title\">";
        // line 23
        echo ($context["about_small_title"] ?? null);
        echo "</div>
   <div class=\"main-about-us__content\">
      <div class=\"main-about-us__left-side\">
         <h2 class=\"main-about-us__subtitle first__title\" data-scroll=\"\" data-scroll-speed=\"1.5\" data-mobile-disable=\"false\">";
        // line 26
        echo ($context["about_title"] ?? null);
        echo "</h2>
         <div class=\"main-about-us__text about-text-first\" data-scroll=\"\" data-scroll-speed=\"1.5\" data-mobile-disable=\"false\">";
        // line 27
        echo ($context["about_first_text"] ?? null);
        echo "</div>
         <img data-scroll=\"\" data-scroll-speed=\"1.2\" class=\"rellax\" src=\"/image/";
        // line 28
        echo ($context["about_left_image"] ?? null);
        echo "\" data-mobile-disable=\"false\">
      </div>
      <div class=\"main-about-us__center\"><img src=\"/image/";
        // line 30
        echo ($context["about_center_image"] ?? null);
        echo "\"></div>
      <div class=\"main-about-us__right-side\">
         <img data-scroll=\"\" data-scroll-speed=\"1.5\" src=\"/image/";
        // line 32
        echo ($context["about_right_image"] ?? null);
        echo "\" data-mobile-disable=\"false\">
         <div class=\"main-about-us__text about-text-second\" data-scroll=\"\" data-scroll-speed=\"1.5\" data-mobile-disable=\"false\">";
        // line 33
        echo ($context["about_second_text"] ?? null);
        echo "</div>
         <a href=\"";
        // line 34
        echo ($context["about_button_link"] ?? null);
        echo "\" class=\"dark\">
           \t<circle-button class=\"circle-button\" data-scroll=\"\" data-scroll-speed=\"1.5\" data-mobile-disable=\"false\">
            \t";
        // line 36
        echo ($context["about_button_text"] ?? null);
        echo "
         \t</circle-button>
        </a>
           
      </div>
   </div>
</main-about-us>







";
        // line 50
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 51
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 52
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 53
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 54
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 55
            echo "    ";
        } else {
            // line 56
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        echo ($context["content_top"] ?? null);
        echo "









<main-categories class=\"main-categories standard-layout block-layout\">
   <div class=\"main-categories__wrapper\">
      <div class=\"main-categories__slider\">
         <div class=\"swiper-container swiper-container-categories swiper-container-fade swiper-container-initialized swiper-container-horizontal\">
            <div class=\"swiper-wrapper swiper-wrapper-categories\" style=\"transition: all 0ms ease 0s;\">
               



               ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 78
            echo "
                  <div class=\"swiper-slide swiper-slide-categories\"> 
                     <img src=\"";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 80);
            echo "\">
                  </div>


               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "               
               


            </div>
         </div>
         <div class=\"categories-slider-navigation\">
            <div class=\"swiper-button-prev swiper-categories-button-prev\">
               <svg class=\"icon icon_stroke icon_arrow\">
                  <use xlink:href=\"./catalog/view/theme/default/assets/images/icons.svg#left-arrow\"></use>
               </svg>
            </div>
            <div class=\"swiper-pagination-categories\"><span>6</span><span style=\"margin: 0 .35em;\">·</span><span style=\"color: #838383;\">6</span></div>
            <div class=\"swiper-button-next swiper-categories-button-next\">
               <svg class=\"icon icon_stroke icon_arrow\">
                  <use xlink:href=\"./catalog/view/theme/default/assets/images/icons.svg#right-arrow\"></use>
               </svg>
            </div>
         </div>
      </div>
      <div class=\"main-categories__text\">
         <div class=\"main-categories__slides\" data-slides>
            
            
            
            ";
        // line 120
        echo "
            ";
        // line 121
        $context["index"] = 0;
        // line 122
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 123
            echo "
               ";
            // line 124
            if ((($context["index"] ?? null) == 1)) {
                // line 125
                echo "               <div class=\"main-categories__slide\" data-slide=\"\" data-slide-active>
               ";
            } else {
                // line 127
                echo "               <div class=\"main-categories__slide\" data-slide=\"\">
               ";
            }
            // line 129
            echo "
               ";
            // line 130
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 131
            echo "
                  <div class=\"main-categories__subtitle\" data-item=\"\" style=\"\">Categories</div>
                  <h3 class=\"main-categories__title\" data-item=\"\" style=\"\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 133);
            echo "</h3>
                  <div class=\"main-categories__description\" data-item=\"\" style=\"\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 134);
            echo "</div>
                  <a class=\"main-categories__link\" href=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 135);
            echo "\">
                     <circle-button class=\"circle-button shop-button dark\" data-item=\"\" style=\"\">
                        Shop
                     </circle-button>
                  </a>
               </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            
            


         </div>
      </div>
   </div>
</main-categories>















<main-reviews class=\"main-reviews standard-layout\">
   <div class=\"reviews-wrapper\">
      <h2 class=\"reviews-wrapper__title\">";
        // line 168
        echo ($context["review_title"] ?? null);
        echo "</h2>
      <div class=\"reviews-wrapper__reviews-list\">
         
         
         ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 173
            echo "            
            <div class=\"review-block\" animation=\"fade-up\" animation-delay=\".15\">
               <div class=\"review-block__content\">";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 175);
            echo "</div>
               <div class=\"review-block__author\">
                  <div class=\"review-block__avatar\"><img src=\"";
            // line 177
            echo twig_get_attribute($this->env, $this->source, $context["review"], "avatar", [], "any", false, false, false, 177);
            echo "\"></div>
                  <div>
                     <div class=\"review-block__name\">";
            // line 179
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 179);
            echo "</div>
                     <div class=\"review-block__country\">";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["review"], "country", [], "any", false, false, false, 180);
            echo "</div>
                  </div>
               </div>
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "

      </div>
   </div>
   <div class=\"reviews-decoration\">
      <img class=\"first-reviews-decoration\" data-scroll data-scroll-speed=\"1.4\" src=\"./catalog/view/theme/default/assets/images/main-review1.png\">
      <img class=\"second-reviews-decoration\" data-scroll data-scroll-speed=\"1.5\" src=\"./catalog/view/theme/default/assets/images/main-review2.png\">
      <img class=\"third-reviews-decoration\" data-scroll data-scroll-speed=\"1.3\" src=\"./catalog/view/theme/default/assets/images/main-review3.png\">
   </div>
</main-reviews>







<main-stories class=\"main-stories\">
   <div class=\"dasha-and-una\">
      <div class=\"dasha-and-una__subtitle\">Stories</div>
      <h3 class=\"dasha-and-una-title\">";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title", [], "any", false, false, false, 205);
        echo "</h3>

      
      
      ";
        // line 209
        if ((twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "thumb_video", [], "any", false, false, false, 209) != "")) {
            // line 210
            echo "      <video autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "thumb_video", [], "any", false, false, false, 210);
            echo "\"></video>
      ";
        } else {
            // line 212
            echo "      <img src=\"./";
            echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "thumb", [], "any", false, false, false, 212);
            echo "\">
      ";
        }
        // line 214
        echo "
      <div class=\"dasha-and-una__content\">";
        // line 215
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "description", [], "any", false, false, false, 215);
        echo "</div>
      <a href=\"";
        // line 216
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "href", [], "any", false, false, false, 216);
        echo "\">
         <circle-button class=\"circle-button white\">
            View more
         </circle-button>
      </a>

   </div>
</main-stories>












    ";
        // line 236
        echo ($context["content_bottom"] ?? null);
        echo "
    ";
        // line 237
        echo ($context["column_right"] ?? null);
        echo "
";
        // line 238
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 238,  419 => 237,  415 => 236,  392 => 216,  388 => 215,  385 => 214,  379 => 212,  373 => 210,  371 => 209,  364 => 205,  342 => 185,  331 => 180,  327 => 179,  322 => 177,  317 => 175,  313 => 173,  309 => 172,  302 => 168,  275 => 143,  261 => 135,  257 => 134,  253 => 133,  249 => 131,  247 => 130,  244 => 129,  240 => 127,  236 => 125,  234 => 124,  231 => 123,  226 => 122,  224 => 121,  221 => 120,  194 => 85,  183 => 80,  179 => 78,  175 => 77,  152 => 58,  149 => 57,  146 => 56,  143 => 55,  140 => 54,  137 => 53,  134 => 52,  132 => 51,  128 => 50,  111 => 36,  106 => 34,  102 => 33,  98 => 32,  93 => 30,  88 => 28,  84 => 27,  80 => 26,  74 => 23,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
