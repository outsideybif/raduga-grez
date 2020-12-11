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
class __TwigTemplate_78915c36df4d422d9218a17151fb89d5f41120379b94bc8ad5df091a6aca838d extends \Twig\Template
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
        // line 15
        echo ($context["timeCategory"] ?? null);
        echo "\">Category</div>
                <div class=\"catalogue-list__separator\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 16
        echo ($context["timeCategory"] ?? null);
        echo "\"></div>
                 ";
        // line 17
        $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
        // line 18
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "                    ";
            $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
            // line 20
            echo "                    
                      <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 21);
            echo "\" data-disabled data-category=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 21);
            echo "\" 
                      class=\"catalogue-list__item ";
            // line 22
            if ((($context["active_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 22))) {
                echo " active ";
            }
            echo "\" 
                      style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
            // line 23
            echo ($context["timeCategory"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
            echo "</a>
                    

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

              </div>


              <div class=\"catalogue-list__wrapper\">
                <div class=\"catalogue-list__title\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 33
        echo ($context["timeCategory"] ?? null);
        echo "\">Collection</div>
                <div class=\"catalogue-list__separator\"  style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 34
        echo ($context["timeCategory"] ?? null);
        echo "\"></div>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                  ";
            $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
            // line 37
            echo "                    <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 37);
            echo "\" data-disabled data-category=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 37);
            echo "\" 
                    style=\"opacity:0\" class=\"catalogue-list__item ";
            // line 38
            if ((($context["active_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 38))) {
                echo " active ";
            }
            echo "\" 
                    animation=\"fade\" animation-delay=\"";
            // line 39
            echo ($context["timeCategory"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
            echo "</diфv>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              
              </div>
              ";
        // line 43
        $context["timeCategory"] = (($context["timeCategory"] ?? null) + 0.050000000000000003);
        // line 44
        echo "              <div class=\"catalogue-list__wrapper\">
              
               <a href=\"https://radugagrez.palemiya.com/index.php?route=product/category&path=79\"  data-disabled data-category=\"79\" class=\"catalogue-list__title dark\" 
               style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
        // line 47
        echo ($context["timeCategory"] ?? null);
        echo "\">Shop All</a>
                
              </div>



          </catalogue-list>
        </div>
        <mobile-products-actions class=\"mobile-products-actions\">
          <div class=\"mobile-products-actions__back-action\">
              <img class=\"mobile-products-actions__back-icon\" src=\"./catalog/view/theme/default/assets/images/arrow-left-dark.svg\" alt=\"\" role=\"presentation\">
              ";
        // line 58
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 59
            echo "                <div class=\"mobile-products-actions__back-label\">Catalogue menu</div>
              ";
        } else {
            // line 61
            echo "                <div class=\"mobile-products-actions__back-label\">Back to catalogue menu</div>
              ";
        }
        // line 63
        echo "              

          </div>
          <div class=\"mobile-products-actions__title\">";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["active_category"] ?? null), "name", [], "any", false, false, false, 66);
        echo "</div>
        </mobile-products-actions>
      

          <span class=\"product-catalog__products-wrapper\" style=\"width: 100%\">
          
            
          
          
            ";
        // line 75
        $context["time"] = 0.14999999999999999;
        // line 76
        echo "            <products-wrapper class=\"products-wrapper products\">
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 78
            echo "              
              ";
            // line 79
            $context["time"] = (($context["time"] ?? null) + 0.14999999999999999);
            // line 80
            echo "              
                ";
            // line 82
            echo "                <product-card class=\"product-card\" data-link=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
            echo "\" style=\"opacity: 0\" >
                  ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 83) == "")) {
                // line 84
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 84);
                echo "\">
                  ";
            } else {
                // line 86
                echo "                  <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "video", [], "any", false, false, false, 86);
                echo "\"></video>
                  ";
            }
            // line 88
            echo "                  <div class=\"product-card__information\">
                    <a class=\"product-card__link-card\" href=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 89);
            echo "\"></a>
                    <div class=\"product-card__top-link\">
                      ";
            // line 91
            if ((($context["active_category_id"] ?? null) == 79)) {
                // line 92
                echo "                      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_link", [], "any", false, false, false, 92);
                echo "\"><div class=\"product-card__category\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_name", [], "any", false, false, false, 92);
                echo "</div></a>
                      ";
            }
            // line 94
            echo "                    </div>
                    <div class=\"product-card__top-link\">
                      <a href=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
            echo "\" class=\"product-card__title\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
            echo "</a>
                      <div class=\"product-card__price\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
            echo "</div>
                      ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 98) == 0)) {
                // line 99
                echo "                        <br>
                        <div>Out of the stock</div>
                      ";
            } else {
                // line 102
                echo "                        <div class=\"product-card__add-to-card underline\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 102);
                echo "');\">Add to cart</div>
                      ";
            }
            // line 104
            echo "                    </div>


                  </div>
                </product-card>
                
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo " 
          </products-wrapper>

          <div class=\"loading-wrapper\" style=\"opacity:0\">
            <div class=\"loading-wrapper__wrapper\">
            
            </div>
          </div>


        </span>
    </product-catalog>
";
        // line 150
        echo "


    <script>
      let page = 1;
      let isLoaded = false;
      var intViewportHeight = window.innerHeight;
      var halfViewportHeight = window.innerHeight / 2;
      var category_id = ";
        // line 158
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
        // line 207
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 208
            echo "                        <a href=\"\${ product.category_link }\"><div class=\"product-card__category\">\${ product.category_name }</div></a>
                        ";
        }
        // line 210
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
        // line 287
        if ((($context["active_category_id"] ?? null) == 79)) {
            // line 288
            echo "                                    <a href=\"\${ product.category_link }\"><div class=\"product-card__category\">\${ product.category_name }</div></a>
                                    ";
        }
        // line 290
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
        // line 341
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
        return array (  517 => 341,  464 => 290,  460 => 288,  458 => 287,  379 => 210,  375 => 208,  373 => 207,  321 => 158,  311 => 150,  297 => 111,  284 => 104,  276 => 102,  271 => 99,  269 => 98,  265 => 97,  259 => 96,  255 => 94,  247 => 92,  245 => 91,  240 => 89,  237 => 88,  231 => 86,  225 => 84,  223 => 83,  218 => 82,  215 => 80,  213 => 79,  210 => 78,  206 => 77,  203 => 76,  201 => 75,  189 => 66,  184 => 63,  180 => 61,  176 => 59,  174 => 58,  160 => 47,  155 => 44,  153 => 43,  149 => 41,  138 => 39,  132 => 38,  125 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  102 => 27,  90 => 23,  84 => 22,  78 => 21,  75 => 20,  72 => 19,  67 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
