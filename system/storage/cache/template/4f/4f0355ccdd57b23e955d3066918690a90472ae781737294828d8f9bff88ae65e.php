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

/* default/template/product/product.twig */
class __TwigTemplate_89a0a629e3caa6dc8384bf695993523205633e950f50070bb52f383b962bebd8 extends \Twig\Template
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




<product-header class=\"product-header\" id=\"scroll-container\">

  <div class=\"product-header__sticky is-inview\" data-scroll=\"\" data-scroll-sticky=\"\" data-scroll-target=\"#scroll-container\">
   <div class=\"product-header__information-mobile\">
      <div>
         <div class=\"product-header__mobile-cateogry\">";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["active_category"] ?? null), "name", [], "any", false, false, false, 11);
        echo "</div>
         <div class=\"product-header__mobile-name\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</div>
      </div>
      <div>
         <div class=\"product-header__mobile-price-title\">Price</div>
         <div class=\"product-header__mobile-price\">";
        // line 16
        echo ($context["price"] ?? null);
        echo "</div>
      </div>
   </div>
   
   
   

  <div class=\"product-header__media\">
    ";
        // line 24
        $context["imageIndex"] = 0;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 26
            echo "      
      ";
            // line 27
            if ((($context["imageIndex"] ?? null) == 0)) {
                // line 28
                echo "        <img class=\"product-header__media-item\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 28);
                echo "\" alt=\"\" role=\"presentation\" style=\"visibility: visible; opacity: 1; z-index: 1\">
      ";
            } else {
                // line 30
                echo "        <img class=\"product-header__media-item\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 30);
                echo "\" alt=\"\" role=\"presentation\" style=\"\">
      ";
            }
            // line 32
            echo "      ";
            $context["imageIndex"] = (($context["imageIndex"] ?? null) + 1);
            // line 33
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    ";
        // line 37
        echo "    
  </div>



   <div class=\"product-header__information\">
      <div class=\"product-header__categories\">
        ";
        // line 47
        echo "        <a href=\"";
        echo ($context["categoriesShop"] ?? null);
        echo "\" class=\"dark\"><div class=\"product-header__cateogry\">All</div></a>
        <a href=\"";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["active_category"] ?? null), "link", [], "any", false, false, false, 48);
        echo "\" class=\"dark\"><div class=\"product-header__cateogry\">";
        echo twig_get_attribute($this->env, $this->source, ($context["active_category"] ?? null), "name", [], "any", false, false, false, 48);
        echo "</div></a>
        
        
      </div>
      <div class=\"product-header__name-wrapper\">
         <h3>";
        // line 53
        echo ($context["heading_title"] ?? null);
        echo "</h3>
         <div class=\"product-header__share\">
            <div>Share</div>
            <img src=\"./catalog/view/theme/default/assets/images/plus.svg\">
            <div class=\"product-header__share-list\">
               <div class=\"product-header__share-list-item\" data-sharer=\"facebook\">Facebook</div>
               <div class=\"product-header__share-list-item\" data-sharer=\"twitter\">Twitter</div>
            </div>
         </div>
      </div>
      <div class=\"product-header__price\">";
        // line 63
        echo ($context["price"] ?? null);
        echo "</div>
      <div class=\"product-header__description\">";
        // line 64
        echo ($context["description"] ?? null);
        echo "</div>
      <div class=\"product-header__description-more\">Read more</div>

      
      ";
        // line 68
        if ((($context["quantity"] ?? null) == 0)) {
            // line 69
            echo "         <div class=\"product-header__actions-out\">
            <standart-button class=\"standart-button disabled\">Out of stock</standart-button>
            <div class=\"product-header__out-of-stock-title\">Email me when this item is back in stock!</div>
            <div class=\"product-header__out-of-stock-form\">
               <input-subscribe class=\"input-subscribe product\" validation=\"email\">
                  <input class=\"input-subscribe__input subscribe-product-input\" type=\"text\" name=\"email\" placeholder=\"email\">
                  <div class=\"input-subscribe__error\">Not error</div>
                  <div class=\"input-subscribe__arrow subscribe-product\" data-name=\"";
            // line 76
            echo ($context["heading_title"] ?? null);
            echo "\"><img src=\"./catalog/view/theme/default/assets/images/arrow-right-dark.svg\"></div>
               </input-subscribe>
            </div>
         </div>
      ";
        } else {
            // line 81
            echo "       
       
      <div class=\"product-header__actions\">
         <standart-button class=\"standart-button buy-button\">Add to cart</standart-button>
         <div class=\"product-header__counter\">
            <div class=\"product-header__counter-minus\">-</div>
            <div class=\"product-header__counter-value\">";
            // line 87
            echo ($context["minimum"] ?? null);
            echo "</div>
            <div class=\"product-header__counter-plus\">+</div>
         </div>
      </div>

      ";
        }
        // line 93
        echo "      <div class=\"product-header__mobile-share\">
         <div>Share</div>
         <img src=\"./catalog/view/theme/default/assets/images/plus.svg\">
         <div class=\"product-header__share-list mobile\">
            <div class=\"product-header__share-list-item\" data-sharer=\"facebook\">Facebook</div>
            <div class=\"product-header__share-list-item\" data-sharer=\"twitter\">Twitter</div>
         </div>
      </div>
   </div>
  </div>

</product-header>

";
        // line 110
        echo "

<script>

\$(\"body\").on(\"click\", \".buy-button\", ()=>{
  cart.add(";
        // line 115
        echo ($context["product_id"] ?? null);
        echo ", \$(\".product-header__counter-value\").html() );
  \$(\".product-header__counter-value\").html(1)
});
\$(\"body\").on(\"click\", \".product-header__counter-minus\", ()=>{
  let oldValue = parseInt( \$(\".product-header__counter-value\").html() );
  if(oldValue > 1){
    let newValue = oldValue - 1;
    \$(\".product-header__counter-value\").html(newValue)
  }
  
  
});
\$(\"body\").on(\"click\", \".product-header__counter-plus\", ()=>{
  let newValue = parseInt( \$(\".product-header__counter-value\").html() ) + 1;
  \$(\".product-header__counter-value\").html(newValue);
});

</script>






";
        // line 139
        if ((($context["isDetails"] ?? null) == true)) {
            // line 140
            echo "
<product-details class=\"product-details ind ind_standart\">
   <h3 class=\"product-details-title\" animation=\"fade-up\" animation-delay=\".15\" style=\"\">Product details</h3>
   <div class=\"product-details__infromations\" animation=\"fade-up\" animation-delay=\".25\" style=\"\">
      
      
      ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_details"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 147
                echo "         <p-collapsible class=\"p-collapsible\">
            <span>";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 148);
                echo "</span>
            <div class=\"toggle-button\">
               <div class=\"horizontal\"></div>
               <div class=\"vertical\"></div>
            </div>
         </p-collapsible>
         <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
               <p>";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 156);
                echo "</p>
            </div>
         </div>

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo " 


   </div>
</product-details>

 ";
        }
        // line 167
        echo "


<how-to-use class=\"how-to-use\">
   <div class=\"how-to-use__image\"><img src=\"";
        // line 171
        echo ($context["thumb_how_to_use"] ?? null);
        echo "\"></div>
   <div class=\"how-to-use__information\">
      <div class=\"information-title\" animation=\"fade-up\" animation-delay=\".15\" style=\"\">How to use?</div>
      <div class=\"how-to-use__description\">
         


          ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["howuse"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["how"]) {
            // line 179
            echo "         <p class=\"information-description\" animation=\"fade-up\" animation-delay=\".15\" style=\"\">";
            echo $context["how"];
            echo "</p>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['how'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo " 


      </div>
   </div>
</how-to-use>



<div class=\"product-details-and-other-toys\">
   <product-details class=\"product-details ind ind_standart\">
      <h3 class=\"product-details-title\" animation=\"fade-up\" animation-delay=\".15\" style=\"\">FAQ</h3>
      <div class=\"product-details__infromations\" animation=\"fade-up\" animation-delay=\".25\" style=\"\">
         <p-collapsible class=\"p-collapsible\">
            <span>Who, how and where makes the toys?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We make toys from the wood which grows in our region. Our carpenters are working in the third generation. They used to make matryoshka dolls before, and now they work with us. All materials for the toys we buy in Russia, except for the German paint. The cotton bags for toys packing are sewn by mothers of many children, who are on their maternity leave and work from home.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>Are the toys safe to play?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We use only solid wood and non-toxic water-based eco paint. The paint is approved for the age +0. We recommend children under three years old to play under parents supervision, as they may bite small particles of the wood.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>Do the toys have a smell?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>Our paint doesn’t smell at all. Linseed oil which we use for natural toys smells like linseed oil. The toys have a very delicate and pleasant natural smell of wood or oil.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>Why aren’t your toys smooth?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>Our toys are tactile. We never cover them with lacque, as it may contain harmful composition. After the surface is lacque, you can’t feel the texture of the wood. Our toys are velvety in touch, this helps to develop fine motor skills and to satisfy a child's tactile hunger. They are very comfortable and safe to play and leave no splinters on little hands.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>What is the toys’ duration period?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>If you take proper care of them, you will be able to present them to your grandchildren. As the toys are made of solid wood, keep them away from heating batteries or humidifiers. They are perfect for playing, but you should never use stackers or building sets as teething toys for your children. The toys are safe, but it is possible to bite small particles of the wood. Their solid parts (blocks, stacker rings etc.) are very durable, but the glued smaller details (a kettle lid, tomato tops etc.) are more fragile. Though we use the strongest of all non-toxic eco glues, we don’t recommend you to throw the toys. Their fragility is a good way to teach a child to be careful with toys, clothes and the world around.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>How to clean the toys?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>Wood is self-disinfecting and we cover the toys with paint or oil which protect them from dirt. You can use dry or wet cloth for cleaning, but do it gently, without rubbing and detergents.</p>
            </div>
          </div>
          <p-collapsible class=\"p-collapsible\">
            <span>How can wood manufacturing be eco-friendly, if trees are cut for it?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
          </p-collapsible>
          <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We buy wood from responsible suppliers. They grow forests for logging themselves, and after they cut trees they plant new ones. We don’t buy wood from private traders who damage forests. We are also against wood wasting. We use wood with its natural marks, because they are beautiful. Wood can’t be homogeneous like plastic. It has its marks and we never throw such wood away.</p>
            </div>
          </div>





      </div>
   </product-details>
   

   ";
        // line 286
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            // line 287
            echo "   <other-toys class=\"other-toys ind ind_standart\">
      <h3 class=\"other-toys-title\">Other fine toys</h3>
      <div class=\"other-toys__slider\">
         <div class=\"swiper-container swiper-container-other-products swiper-container-initialized swiper-container-horizontal\">
            <div class=\"swiper-wrapper swiper-wrapper-other-products\" style=\"transform: translate3d(-1475px, 0px, 0px); transition: all 0ms ease 0s;\">
               
               
               ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 295
                echo "               
                  <div class=\"swiper-slide swiper-slide-other-products\">
                     <product-card class=\"product-card full\" data-link=\"";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 297);
                echo "\">
                        <img src=\"";
                // line 298
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 298);
                echo "\">
                        <div class=\"product-card__information\">
                           
                           <a class=\"product-card__link-card\" href=\"";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 301);
                echo "\"></a>
                           <div class=\"product-card__top-link\">
                           
                                 <a href=\"";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_link", [], "any", false, false, false, 304);
                echo "\"><div class=\"product-card__category\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "category_name", [], "any", false, false, false, 304);
                echo "</div></a>
                                 
                           </div>
                           <div class=\"product-card__top-link\">
                               <a href=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 308);
                echo "\" class=\"product-card__title\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 308);
                echo "</a>
                              <div class=\"product-card__price\">";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 309);
                echo "</div>
                              <div class=\"product-card__add-to-card underline\" onclick=\"cart.add('";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 310);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 310);
                echo "');\">Add to cart</div>
                           </div>


                        </div>
                     </product-card>
                  </div>
               
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "
            </div>
            <div class=\"categories-slider-navigation\"></div>
         </div>
        
      </div>
       <div class=\"other-toys__navigation\">
        <div class=\"swiper-pagination-other-products\"></div>
            
         </div>
   </other-toys>
  ";
        }
        // line 331
        echo "

</div>






































";
        // line 725
        echo "




















<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 885
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 889
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

document.addEventListener(\"DOMContentLoaded\", () => {
  \$('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});


\$(document).ready(function() {

});
//--></script> 
";
        // line 932
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 932,  722 => 889,  715 => 885,  553 => 725,  510 => 331,  496 => 319,  479 => 310,  475 => 309,  469 => 308,  460 => 304,  454 => 301,  448 => 298,  444 => 297,  440 => 295,  436 => 294,  427 => 287,  425 => 286,  317 => 180,  308 => 179,  304 => 178,  294 => 171,  288 => 167,  279 => 160,  268 => 156,  257 => 148,  254 => 147,  250 => 146,  242 => 140,  240 => 139,  213 => 115,  206 => 110,  191 => 93,  182 => 87,  174 => 81,  166 => 76,  157 => 69,  155 => 68,  148 => 64,  144 => 63,  131 => 53,  121 => 48,  116 => 47,  107 => 37,  105 => 34,  99 => 33,  96 => 32,  90 => 30,  84 => 28,  82 => 27,  79 => 26,  74 => 25,  72 => 24,  61 => 16,  54 => 12,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
