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

/* default/template/product/category.twig */
class __TwigTemplate_1942d045c0a832f6ecc48657b5c13fbee1738b4b2d126a6851b0c9e5a8b93cde extends \Twig\Template
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







      <product-catalog class=\"product-catalog standard-layout\">
        <div class=\"product-catalog__filter\">
          <catalogue-list class=\"catalogue-list\">
              ";
        // line 12
        $context["timeCategory"] = 0.050000000000000003;
        // line 13
        echo "              <div class=\"catalogue-list__wrapper\">
                <div class=\"catalogue-list__title\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 14
        echo ($context["timeCategory"] ?? null);
        echo "\">Category</div>
                <div class=\"catalogue-list__separator\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 15
        echo ($context["timeCategory"] ?? null);
        echo "\"></div>
                 ";
        // line 16
        $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
        // line 17
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "                    ";
            $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
            // line 19
            echo "                      <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 19);
            echo "\" data-disabled data-category=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 19);
            echo "\" 
                      class=\"catalogue-list__item ";
            // line 20
            if ((($context["active_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 20))) {
                echo " active ";
            }
            echo "\" 
                      style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
            // line 21
            echo ($context["timeCategory"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "              </div>


              <div class=\"catalogue-list__wrapper\">
                <div class=\"catalogue-list__title\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 27
        echo ($context["timeCategory"] ?? null);
        echo "\">Collection</div>
                <div class=\"catalogue-list__separator\"  style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 28
        echo ($context["timeCategory"] ?? null);
        echo "\"></div>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                  ";
            $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
            // line 31
            echo "                    <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 31);
            echo "\" data-disabled data-category=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 31);
            echo "\" 
                    style=\"opacity:0\" class=\"catalogue-list__item ";
            // line 32
            if ((($context["active_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 32))) {
                echo " active ";
            }
            echo "\" 
                    animation=\"fade\" animation-delay=\"";
            // line 33
            echo ($context["timeCategory"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
            echo "</div>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              
              </div>
              ";
        // line 37
        $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
        // line 38
        echo "              <div class=\"catalogue-list__wrapper\">
              
               <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=79\"  data-disabled data-category=\"79\" class=\"catalogue-list__title dark\" 
               style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 41
        echo ($context["timeCategory"] ?? null);
        echo "\">Shop All</a>
                
              </div>



          </catalogue-list>
        </div>
        <mobile-products-actions class=\"mobile-products-actions\">
          <div class=\"mobile-products-actions__back-action\">
              <img class=\"mobile-products-actions__back-icon\" src=\"./catalog/view/theme/default/assets/images/arrow-left-dark.svg\" alt=\"\" role=\"presentation\">
              ";
        // line 52
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 53
            echo "                <div class=\"mobile-products-actions__back-label\">Catalogue menu</div>
              ";
        } else {
            // line 55
            echo "                <div class=\"mobile-products-actions__back-label\">Back to catalogue menu</div>
              ";
        }
        // line 57
        echo "              

          </div>
          <div class=\"mobile-products-actions__title\">";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["active_category"] ?? null), "name", [], "any", false, false, false, 60);
        echo "</div>
        </mobile-products-actions>
      

          <span class=\"product-catalog__products-wrapper\" style=\"width: 100%\">
          
            
          
          
            ";
        // line 69
        $context["time"] = 0.14999999999999999;
        // line 70
        echo "            <products-wrapper class=\"products-wrapper products\">
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "              
              ";
            // line 73
            $context["time"] = (($context["time"] ?? null) + 0.14999999999999999);
            // line 74
            echo "              
                ";
            // line 76
            echo "                <product-card class=\"product-card\" data-link=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
            echo "\" style=\"opacity: 0\" >
                  ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 77) == "")) {
                // line 78
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                echo "\">
                  ";
            } else {
                // line 80
                echo "                  <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 80);
                echo "\"></video>
                  ";
            }
            // line 82
            echo "                  <div class=\"product-card__information\">
                    <a class=\"product-card__link-card\" href=\"";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
            echo "\"></a>
                    <div class=\"product-card__top-link\">
                      ";
            // line 85
            if ((($context["active_category_id"] ?? null) == 79)) {
                // line 86
                echo "                      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_link", [], "any", false, false, false, 86);
                echo "\"><div class=\"product-card__category\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_name", [], "any", false, false, false, 86);
                echo "</div></a>
                      ";
            }
            // line 88
            echo "                    </div>
                    <div class=\"product-card__top-link\">
                      <a href=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
            echo "\" class=\"product-card__title\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            echo "</a>
                      <div class=\"product-card__price\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
            echo "</div>
                      ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92) == 0)) {
                // line 93
                echo "                        <br>
                        <div>Out of the stock</div>
                      ";
            } else {
                // line 96
                echo "                        <div class=\"product-card__add-to-card underline\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 96);
                echo "');\">Add to cart</div>
                      ";
            }
            // line 98
            echo "                    </div>


                  </div>
                </product-card>
                
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo " 
          </products-wrapper>

          <div class=\"loading-wrapper\" style=\"opacity:0\">
            <div class=\"loading-wrapper__wrapper\">
            
            </div>
          </div>


        </span>
    </product-catalog>
";
        // line 144
        echo "


    <script>
      let page = 1;
      let isLoaded = false;
      var intViewportHeight = window.innerHeight;
      var halfViewportHeight = window.innerHeight / 2;
      var category_id = ";
        // line 152
        echo ($context["category_id"] ?? null);
        echo ";
      var isCategoryLoading = false;

      \$(window).scroll(function() {
          //console.log(`\${\$(window).scrollTop() + \$(window).height()} > \${\$(\".products\").offset().top + \$(\".products\").outerHeight()}`);
          
      });



  \$(\".catalogue-list__title\").on(\"click\", function(){
    category_id = \$(this).data(\"category\");
    console.log(category_id);
    ReloadCategory();
  });

  \$(\".catalogue-list__item\").on(\"click\", function(){
    category_id = \$(this).data(\"category\");
    console.log(category_id);
    ReloadCategory();

    //\$()
  })

  


  function ReloadCategory(){
    page = 1;
    
    if(isCategoryLoading == false){
      isCategoryLoading = true;

      \$.ajax({
        url: 'index.php?route=product/category/loadMore',
        type: 'get',
        data: `category_id=\${category_id}&page=\${page}`,
        dataType: 'json',
        success: function(json) {
          page++;
          
          if(Array.isArray(json[\"products\"])){
            
            let newProductsBuffer = \"\";
            json[\"products\"].forEach(product => {
                newProductsBuffer += `<product-card data-id=\"test\" data-load=\"reload\" class=\"product-card\" style=\"opacity:0\">
                    <img src=\"\${ product.thumb }\">
                    <div class=\"product-card__information\">
                      <div>
                        ";
        // line 201
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 202
            echo "                        <a href=\"\${ product.category_link }\"><div class=\"product-card__category\">\${ product.category_name }</div></a>
                        ";
        }
        // line 204
        echo "                      </div>
                      <div>
                        <a href=\"\${ product.href }\"><div class=\"product-card__title\">\${ product.name }</div></a>
                        <div class=\"product-card__price\">\${ product.price }</div>
                        <div class=\"product-card__add-to-card underline\" onclick=\"cart.add('\${ product.product_id }', '\${ product.minimum }');\">Add to cart</div>
                      </div>
                    </div>
                  </product-card>`;
              });
              
              let wrapper = document.querySelector('products-wrapper');
              wrapper.childrenLength = 0;
              \$(\".products\").html(newProductsBuffer);
              setTimeout(
                            ()=>{
                              window.locomotive.update();
                              window.updateTimeline();
                            }, 200);
              
              
          } else {
              \$(\".products\").html(\"<h1>Category is empty<h1>\");
          }
          //isLoaded = false;
          isCategoryLoading = false;
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });



    }
  }

      
  document.addEventListener(\"DOMContentLoaded\", ()=>{
    
    window.locomotive.on('scroll', obj => {
        let scrollTop = obj.scroll.y;


      //console.log(`\${scrollTop}  >  \${ \$(\".products\").outerHeight() - halfViewportHeight}`);


        //if(scrollTop + \$(window).height() >  \$(\".products\").offset().top + \$(\".products\").outerHeight()) {
        if(scrollTop >  \$(\".products\").outerHeight() - halfViewportHeight ) {
          
            if(isLoaded == false && isCategoryLoading == false){
              isLoaded = true;
              \$.ajax({
                url: 'index.php?route=product/category/loadMore',
                type: 'get',
                data: `category_id=\${category_id}&page=\${page}`,
                dataType: 'json',
                beforeSend: function() {
                  //\$('#cart > button').button('loading');
                },
                complete: function() {
                  //\$('#cart > button').button('reset');
                },
                success: function(json) {
                  
                  
                    page++;
                    if(Array.isArray(json[\"products\"])){
                     

                          let wrapper = document.querySelector('products-wrapper');
                          //wrapper.childrenLength = 0;
                          let productsBuffer = \"\";
                          json[\"products\"].forEach(product => {
                            productsBuffer += `<product-card data-id=\"test\" data-load=\"scroll\" class=\"product-card\" style=\"opacity:0\">
                                <img src=\"\${ product.thumb }\">
                                <div class=\"product-card__information\">
                                  <div>
                                    ";
        // line 281
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 282
            echo "                                    <a href=\"\${ product.category_link }\"><div class=\"product-card__category\">\${ product.category_name }</div></a>
                                    ";
        }
        // line 284
        echo "                                  </div>
                                  <div>
                                    <a href=\"\${ product.href }\"><div class=\"product-card__title\">\${ product.name }</div></a>
                                    <div class=\"product-card__price\">\${ product.price }</div>
                                    <div class=\"product-card__add-to-card underline\" onclick=\"cart.add('\${ product.product_id }', '\${ product.minimum }');\">Add to cart</div>
                                  </div>
                                </div>
                              </product-card>`;
                              
                          });
                          \$(\".products\").append(productsBuffer);
                          window.locomotive.update();
                          isLoaded = false;
                          setTimeout(
                            ()=>{
                              window.locomotive.update();
                              window.updateTimeline();
                            }, 200);

                         
                    }
                  
                  
                  


                  //let DOM = {main: document.querySelector('plm-smooth-scroll')};
        
                  //DOM.scrollable = DOM.main.querySelector('div[data-scroll]');
                  //document.body.style.height = `\${DOM.scrollable.scrollHeight}px`;

                  

                },
                error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
              });
            }
            
          }
    });
  });



      //style=\"opacity:0
      
    </script>
       
    
";
        // line 335
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 335,  457 => 284,  453 => 282,  451 => 281,  372 => 204,  368 => 202,  366 => 201,  314 => 152,  304 => 144,  290 => 105,  277 => 98,  269 => 96,  264 => 93,  262 => 92,  258 => 91,  252 => 90,  248 => 88,  240 => 86,  238 => 85,  233 => 83,  230 => 82,  224 => 80,  218 => 78,  216 => 77,  211 => 76,  208 => 74,  206 => 73,  203 => 72,  199 => 71,  196 => 70,  194 => 69,  182 => 60,  177 => 57,  173 => 55,  169 => 53,  167 => 52,  153 => 41,  148 => 38,  146 => 37,  142 => 35,  131 => 33,  125 => 32,  118 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  97 => 23,  87 => 21,  81 => 20,  74 => 19,  71 => 18,  66 => 17,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
