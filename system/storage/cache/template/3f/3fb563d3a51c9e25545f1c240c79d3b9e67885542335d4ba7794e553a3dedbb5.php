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

/* default/template/extension/module/featured.twig */
class __TwigTemplate_1ddfa50b0725c17fae92139bff11df8f12ee1681e31c65ab5d3793a7cade7600 extends \Twig\Template
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
        echo "

<main-toy-to-spend class=\"main-toy-to-spend standard-layout block-layout\">
   <h3 class=\"main-toy-to-spend__title\">";
        // line 4
        echo ($context["spend_title"] ?? null);
        echo "</h3>
   
   <div class=\"main-toy-to-spend__products\">
      
      
      <product-card class=\"product-card big\" data-link=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "href", [], "any", false, false, false, 9);
        echo "\">
         
          ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "video", [], "any", false, false, false, 11) == "")) {
            // line 12
            echo "            <img src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "thumb", [], "any", false, false, false, 12);
            echo "\">
          
          ";
        } else {
            // line 15
            echo "
          <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "video", [], "any", false, false, false, 16);
            echo "\"></video>

          ";
        }
        // line 19
        echo "                  

         <div class=\"product-card__information\">
            <a class=\"product-card__link-card\" href=\"";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "href", [], "any", false, false, false, 22);
        echo "\"></a>
            
            <div class=\"product-card__top-link\">
              <a href=\"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "category_link", [], "any", false, false, false, 25);
        echo "\"><div class=\"product-card__category\">";
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "category_name", [], "any", false, false, false, 25);
        echo "</div></a>
            </div>

            <div class=\"product-card__top-link\">
                <a href=\"";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "href", [], "any", false, false, false, 29);
        echo "\" class=\"product-card__title\">";
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "name", [], "any", false, false, false, 29);
        echo "</a>
               <div class=\"product-card__price\">";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "price", [], "any", false, false, false, 30);
        echo "</div>
               <div class=\"product-card__add-to-card white underline\" onclick=\"cart.add('";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "product_id", [], "any", false, false, false, 31);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "minimum", [], "any", false, false, false, 31);
        echo "');\">Add to cart</div>
            </div>

         </div>
      </product-card>


      <div class=\"main-toy-to-spend__product-grid\">
         <div>

            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsTop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 42
            echo "            
              <product-card class=\"product-card home\" data-link=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
            echo "\">
                
                ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 45) == "")) {
                // line 46
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46);
                echo "\">
                
                ";
            } else {
                // line 49
                echo "
                <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 50);
                echo "\"></video>

                ";
            }
            // line 53
            echo "                  




                <div class=\"product-card__information\">
                  <a class=\"product-card__link-card\" href=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "href", [], "any", false, false, false, 59);
            echo "\"></a>
                  <div class=\"product-card__top-link\">
                      <a href=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "category_link", [], "any", false, false, false, 61);
            echo "\"><div class=\"product-card__category\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "category_name", [], "any", false, false, false, 61);
            echo "</div></a>
                  </div>
                  <div class=\"product-card__top-link\">
                      <a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
            echo "\" class=\"product-card__title\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
            echo "</a>
                    <div class=\"product-card__price\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
            echo "</div>
                    <div class=\"product-card__add-to-card white underline\" onclick=\"cart.add('";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 66);
            echo "');\">Add to cart</div>
                  </div>
                </div>
              </product-card>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            
         </div>
         <div>

            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsBottom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            echo "            
              <product-card class=\"product-card home\" data-link=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
            echo "\">
                
                ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 79) == "")) {
                // line 80
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                echo "\">
                
                ";
            } else {
                // line 83
                echo "
                <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 84);
                echo "\"></video>

                ";
            }
            // line 87
            echo "                





                <div class=\"product-card__information\">
                  <a class=\"product-card__link-card\" href=\"";
            // line 94
            echo twig_get_attribute($this->env, $this->source, ($context["firstProduct"] ?? null), "href", [], "any", false, false, false, 94);
            echo "\"></a>
                  <div class=\"product-card__top-link\">
                    <a href=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "category_link", [], "any", false, false, false, 96);
            echo "\"><div class=\"product-card__category\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "category_name", [], "any", false, false, false, 96);
            echo "</div></a>
                  </div>
                  <div class=\"product-card__top-link\">
                      <a href=\"";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
            echo "\" class=\"product-card__title\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
            echo "</a>
                    <div class=\"product-card__price\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
            echo "</div>
                    <div class=\"product-card__add-to-card white underline\" onclick=\"cart.add('";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 101);
            echo "');\">Add to cart</div>
                  </div>
                </div>
              </product-card>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            
         </div>
      </div>
   </div>
</main-toy-to-spend>

  




";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 106,  260 => 101,  256 => 100,  250 => 99,  242 => 96,  237 => 94,  228 => 87,  222 => 84,  219 => 83,  212 => 80,  210 => 79,  205 => 77,  202 => 76,  198 => 75,  192 => 71,  179 => 66,  175 => 65,  169 => 64,  161 => 61,  156 => 59,  148 => 53,  142 => 50,  139 => 49,  132 => 46,  130 => 45,  125 => 43,  122 => 42,  118 => 41,  103 => 31,  99 => 30,  93 => 29,  84 => 25,  78 => 22,  73 => 19,  67 => 16,  64 => 15,  57 => 12,  55 => 11,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}
