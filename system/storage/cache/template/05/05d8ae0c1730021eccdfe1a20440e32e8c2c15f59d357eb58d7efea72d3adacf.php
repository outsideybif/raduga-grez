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

/* default/template/checkout/checkout.twig */
class __TwigTemplate_719b6ff62ead58a3096bb97ef17f8fc8fd5a1469ee0b5155da746a37d5d1eb65 extends \Twig\Template
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
";
        // line 89
        echo "

<script src=\"https://kassa.yandex.ru/checkout-ui/v2.js\"></script>

<checkout-wrapper class=\"checkout-wrapper\">
   <div class=\"checkout-wrapper__checkout-form-wrapper\">
      <checkout-form class=\"checkout-form\">

         <a href=\"/\">
            <div class=\"checkout-form__logo\"><img src=\"./catalog/view/theme/default/assets/images/logo-dark.svg\"></div>
        </a>

         <div class=\"checkout-form__mobile-cart-action\">
            <div class=\"checkout-form__mobile-cart-action-text\">Show order summary</div>
            <div class=\"checkout-form__mobile-cart-action-value\">";
        // line 103
        echo ($context["totalPrice"] ?? null);
        echo "</div>
         </div>
         <div class=\"checkout-form__mobile-cart\">
            <div class=\"checkout-form__mobile-cart-wrapper\">
               <checkout-cart class=\"checkout-cart\">
                  <div class=\"checkout-cart__title\">Your Cart (";
        // line 108
        echo ($context["count"] ?? null);
        echo ")</div>
                  


                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 113
            echo "                        <checkout-product-card class=\"checkout-product-card\">
                            <div class=\"checkout-product-card__image-wrapper\">
                                <a href=\"";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 115);
            echo "\" class=\"\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 115);
            echo "\"></a>
                                <div class=\"checkout-product-card__count-badge\">
                                    <span class=\"checkout-product-card__count-badge-value\">";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 117);
            echo "</span>
                                </div>
                            </div>
                            <div class=\"checkout-product-card__content\">
                                <a href=\"";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
            echo "\" class=\"checkout-product-card__title dark\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121);
            echo "</a>
                            </div>
                            <div class=\"checkout-product-card__price\">";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 123);
            echo "</div>
                        </checkout-product-card>
                        <custom-separator class=\"custom-separator small\"></custom-separator>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "

                    <div class=\"checkout-cart__apply-promocode\">
                        <div class=\"checkout-cart__apply-promocode-text\">Apply promocode</div>
                        <div class=\"checkout-cart__apply-promocode-icon\">+</div>
                    </div>


                     <custom-separator class=\"custom-separator small\"></custom-separator>





                    <div class=\"checkout-cart__subtotal\" id=\"coupon-wrapper-mobile\"  ";
        // line 141
        if ((($context["coupon"] ?? null) == "")) {
            echo " style=\"display: none\" ";
        }
        echo ">
                        <div class=\"checkout-cart__subtotal-text\" id=\"coupon-label-mobile\">
                            ";
        // line 143
        if ((($context["coupon"] ?? null) != "")) {
            // line 144
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "name", [], "any", false, false, false, 144);
            echo "
                            ";
        }
        // line 146
        echo "                        </div>

                        <div class=\"checkout-cart__subtotal-value\">
                            <span id=\"coupon-value-mobile\">
                                ";
        // line 150
        if ((($context["coupon"] ?? null) != "")) {
            // line 151
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "type", [], "any", false, false, false, 151) == "F")) {
                // line 152
                echo "                                        -\$";
                echo twig_round(twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "discount", [], "any", false, false, false, 152), 1, "ceil");
                echo "
                                    ";
            }
            // line 154
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "type", [], "any", false, false, false, 154) == "P")) {
                // line 155
                echo "                                        -";
                echo twig_round(twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "discount", [], "any", false, false, false, 155), 1, "ceil");
                echo "%
                                    ";
            }
            // line 157
            echo "                                ";
        }
        // line 158
        echo "                            </span>
                        
                            <img id=\"remove-coupon-mobile\" class=\"checkout-cart__remove\" src=\"./catalog/view/theme/default/assets/images/close.svg\">
                            
                        </div>
                    </div>






                    <div class=\"checkout-cart__subtotal\">
                        <div class=\"checkout-cart__subtotal-text\">Subtotal</div>
                        <div class=\"checkout-cart__subtotal-value\">";
        // line 172
        echo ($context["subtotal"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"checkout-cart__shipping\">
                        <div class=\"checkout-cart__shipping-text\">Shipping</div>
                        <div class=\"checkout-cart__shipping-value\">Calculated at next step</div>
                    </div>

                     <custom-separator class=\"custom-separator small\"></custom-separator>
                  
                  
                    <div class=\"checkout-cart__total\">
                        <div class=\"checkout-cart__total-text\">Total</div>
                        <div class=\"checkout-cart__total-value\">";
        // line 184
        echo ($context["totalPrice"] ?? null);
        echo "</div>
                    </div>
               </checkout-cart>
            </div>
         </div>
         <plm-breadcrumbs class=\"plm-breadcrumbs mobile-breadcrumbs\">
            <div class=\"plm-breadcrumbs__breadcrumb active\" id=\"breadcrumbs-information\">Information</div>
            <div class=\"plm-breadcrumbs__breadcrumb\"        id=\"breadcrumbs-payment\"     >Payment</div>
         </plm-breadcrumbs>
         
         
         <div class=\"checkout-form__checkout-form-information showed\">
            <div class=\"checkout-form__title\">Contact information</div>
            
            
            <div class=\"panel-collapse\" id=\"collapse-payment-address\">
                <div class=\"panel-body\" style=\"padding:0\"></div>
            </div>
            
            
            
            <div class=\"checkout-form__actions\">
               <div class=\"back-to-information checkout-form__action-wrapper\">
                  <div class=\"\"></div>
               </div>
               <div class=\"checkout-form__action-wrapper\">
                  <standart-button class=\"standart-button continue-payment-button disabled mobile_full\" id=\"button-guest\" data-loading-text=\"";
        // line 210
        echo ($context["text_loading"] ?? null);
        echo "\">
                    <div id=\"button-information-wrapper\" class=\"standart-button-label\">Continue to shipping</div>
                    <div id=\"button-loading-wrapper\" class=\"dot-flashing\"></div>
                  </standart-button>
               </div>
            </div>
         </div>

        <div class=\"checkout-form__checkout-form-shipping\">
            <div class=\"panel-collapse\" id=\"collapse-shipping-method\">
                <div class=\"panel-body\" style=\"padding:0\"></div>
            </div>

           
        </div>

         <div class=\"checkout-form__checkout-form-payment\">
            <div class=\"panel-collapse\" id=\"collapse-checkout-confirm\">
                <div class=\"panel-body\" style=\"padding:0\"></div>
            </div>
           
            <div class=\"checkout-form__title\">Remember me</div>
            <label class=\"container\">Save this information for next time<input type=\"checkbox\"><span class=\"checkmark\"> </span></label>




            <div class=\"checkout-form__actions\">
               <div class=\"checkout-form__action-wrapper\">
                  
                  <div class=\"back-to-shipping\">Back</div>
               </div>
               <div class=\"checkout-form__action-wrapper\">
                  ";
        // line 244
        echo "               </div>
            </div>
         </div>


         <div class=\"checkout-form__bottom-information\"><a href=\"#\">Shipping</a><a href=\"#\">Terms &amp; Conditions</a></div>
      </checkout-form>
   </div>
   <div class=\"checkout-wrapper__checkout-cart-wrapper\">
      <checkout-cart class=\"checkout-cart\">
         <div class=\"checkout-cart__title\">Your Cart (";
        // line 254
        echo ($context["count"] ?? null);
        echo ")</div>
         
         
        <div class=\"checkout-cart__products-wrapper\">
            ";
        // line 258
        $context["productIndex"] = 0;
        // line 259
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 260
            echo "                ";
            $context["productIndex"] = (($context["productIndex"] ?? null) + 1);
            // line 261
            echo "                <checkout-product-card class=\"checkout-product-card\">
                    <div class=\"checkout-product-card__image-wrapper\">
                        <a href=\"";
            // line 263
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 263);
            echo "\" class=\"\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 263);
            echo "\"></a>
                        <div class=\"checkout-product-card__count-badge\">
                            <span class=\"checkout-product-card__count-badge-value\">";
            // line 265
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 265);
            echo "</span>
                        </div>
                    </div>
                
                    <div class=\"checkout-product-card__content\">
                    <a href=\"";
            // line 270
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 270);
            echo "\"  class=\"checkout-product-card__title dark\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 270);
            echo "</a>
                    </div>
                    <div class=\"checkout-product-card__price\">";
            // line 272
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 272);
            echo "</div>
                </checkout-product-card>
                
                ";
            // line 275
            if ((($context["productIndex"] ?? null) != twig_length_filter($this->env, ($context["products"] ?? null)))) {
                // line 276
                echo "                    <custom-separator class=\"custom-separator small\"></custom-separator>
                 ";
            }
            // line 278
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "        </div>

         
         <div class=\"checkout-cart__apply-promocode\">
            <div class=\"checkout-cart__apply-promocode-text\">Apply promocode</div>
            <div class=\"checkout-cart__apply-promocode-icon\">+</div>
         </div>

         
         <custom-separator class=\"custom-separator small\"></custom-separator>
        
         
         
         <div class=\"checkout-cart__subtotal\" id=\"coupon-wrapper\"  ";
        // line 292
        if ((($context["coupon"] ?? null) == "")) {
            echo " style=\"display: none\" ";
        }
        echo ">
            <div class=\"checkout-cart__subtotal-text\" id=\"coupon-label\">
                ";
        // line 294
        if ((($context["coupon"] ?? null) != "")) {
            // line 295
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "name", [], "any", false, false, false, 295);
            echo "
                ";
        }
        // line 297
        echo "            </div>

            <div class=\"checkout-cart__subtotal-value\">
                <span id=\"coupon-value\">
                    ";
        // line 301
        if ((($context["coupon"] ?? null) != "")) {
            // line 302
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "type", [], "any", false, false, false, 302) == "F")) {
                // line 303
                echo "                            -\$";
                echo twig_round(twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "discount", [], "any", false, false, false, 303), 1, "ceil");
                echo "
                        ";
            }
            // line 305
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "type", [], "any", false, false, false, 305) == "P")) {
                // line 306
                echo "                            -";
                echo twig_round(twig_get_attribute($this->env, $this->source, ($context["coupon_info"] ?? null), "discount", [], "any", false, false, false, 306), 1, "ceil");
                echo "%
                        ";
            }
            // line 308
            echo "                    ";
        }
        // line 309
        echo "                </span>
               
                <img id=\"remove-coupon\" class=\"checkout-cart__remove\" src=\"./catalog/view/theme/default/assets/images/close.svg\">
                
             </div>
         </div>

         


         <div class=\"checkout-cart__subtotal\">
            <div class=\"checkout-cart__subtotal-text\">Subtotal</div>
            <div class=\"checkout-cart__subtotal-value\">";
        // line 321
        echo ($context["subtotal"] ?? null);
        echo "</div>
         </div>
         <div class=\"checkout-cart__shipping\">
            <div class=\"checkout-cart__shipping-text\">Shipping</div>
            <div class=\"checkout-cart__shipping-value\">Calculated at next step</div>
         </div>


        <custom-separator class=\"custom-separator small\"></custom-separator>

         <div class=\"checkout-cart__total\">
            <div class=\"checkout-cart__total-text\">Total</div>
            <div class=\"checkout-cart__total-value\">";
        // line 333
        echo ($context["totalPrice"] ?? null);
        echo "</div>
         </div>
      </checkout-cart>
   </div>
</checkout-wrapper>










<script>



//\$(\".checkout-cart__total-value\").html(\"";
        // line 352
        echo ($context["subtotal"] ?? null);
        echo "\");



            


\$(\"#remove-coupon-mobile\").on(\"click\", ()=>{
    \$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/unsetcoupon',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
            \$(\"#coupon-wrapper-mobile\").hide();
            \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(\"#remove-coupon\").on(\"click\", ()=>{
    \$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/unsetcoupon',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
            \$(\"#coupon-wrapper\").hide();
            \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});


\$(\".checkout-cart__apply-promocode\").on(\"click\", ()=>{
    \$(\".promocode-modal\").addClass(\"showed\");
});

\$(\".promocode-modal__close-wrapper\").on(\"click\", ()=>{
    \$(\".promocode-modal\").removeClass(\"showed\");
});











\$(\"body\").on(\"keypress\", \".input-field__input\", ()=>{
    CheckValidationButton(this);
})

\$('body').on('blur', \".input-field__input\", function() {
    CheckValidationButton(this);
}); 

\$('body').on('chnage', \".input-field__input\", function() {
    CheckValidationButton(this);
});


function CheckValidationButton(input){
    setTimeout(
        ()=>{
            let isEmpty = false;

            \$inputField = \$(input);

            //\$inputField.trigger(\"blur\");
            
            \$( \".input-field-information\" ).each(function( index ) {
                if( \$( this ).hasClass(\"field_valid\") == false ){
                    isEmpty = true;
                    
                }
            });
            
            

            if(isEmpty){
                \$(\".continue-payment-button\").addClass(\"disabled\");
            } else {
                \$(\".continue-payment-button\").removeClass(\"disabled\");
            }
        }, 100
    );
    
}

</script>





";
        // line 498
        echo "








{
<div id=\"checkout-checkout\" >
  
  
    <div id=\"content\" class=\"";
        // line 511
        echo ($context["class"] ?? null);
        echo "\"  style=\"min-height: 0px; position: absolute;\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\" style=\"display: none;visibility: hidden; position: absolute; right: -200%;\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 515
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        
        ";
        // line 522
        if (($context["shipping_required"] ?? null)) {
            // line 523
            echo "        <div class=\"panel panel-default\" style=\"display: none;visibility: hidden; position: absolute; right: -200%;\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 525
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\" style=\"display: none;visibility: hidden; position: absolute; right: -200%;\" >
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 533
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 540
        echo "        <div class=\"panel panel-default\"  style=\"display: none;visibility: hidden; position: absolute; right: -200%;\" >
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 542
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        
      </div>
</div>
</div>   





































<script type=\"text/javascript\"><!--



setTimeout(()=>{
window.locomotive.update();
console.log(\"update shipping\");
},8000);




\$(\".continue-payment-button\").on(\"click\", 
    ()=>{
        if(\$(\"#button-guest\").hasClass(\"disabled\")){
            return;
        }


        //\$(this).addClass(\"loading\");

        
        \$(\"#breadcrumbs-information\").removeClass(\"active\");
        \$(\"#breadcrumbs-payment\").addClass(\"active\");

        //\$(\"#button-information-wrapper\").show();
        //\$(\"#button-loading-wrapper\").hide();
        
        setTimeout(()=>{
            window.locomotive.update();
        },100);
});


\$(\"body\").on(\"click\", \".back-to-informations\", 
    ()=>{
        \$(\".checkout-form__checkout-form-information\").addClass(\"showed\");
        \$(\".checkout-form__checkout-form-payment\").removeClass(\"showed\");
        \$(\".checkout-form__checkout-form-shipping\").removeClass(\"showed\");

        \$(\"#breadcrumbs-information\").addClass(\"active\");
        \$(\"#breadcrumbs-payment\").removeClass(\"active\");
        setTimeout(()=>{
            window.locomotive.update();
        },100);
});
\$(\"body\").on(\"click\", \".back-to-shipping\",
    ()=>{
        \$(\".checkout-form__checkout-form-information\").removeClass(\"showed\");
        \$(\".checkout-form__checkout-form-payment\").removeClass(\"showed\");
        \$(\".checkout-form__checkout-form-shipping\").addClass(\"showed\");

        \$(\"#breadcrumbs-information\").addClass(\"active\");
        \$(\"#breadcrumbs-payment\").removeClass(\"active\");
        setTimeout(()=>{
            window.locomotive.update();
        },100);
});


\$(\".checkout-form__mobile-cart-action\").on(\"click\", function() {
    this.classList.toggle(\"active\");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
        content.style.maxHeight = null;
    } else {
        
        content.style.maxHeight = content.scrollHeight + \"px\";
    } 
});









\$(document).on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 671
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 673
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 677
        echo ($context["text_checkout_account"] ?? null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 679
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
\t\t}
\t}
});










";
        // line 693
        if ( !($context["logged"] ?? null)) {
            // line 694
            echo "


\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 704
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

            \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
            \$('#button-account').trigger('click');

            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});




";
        } else {
            // line 721
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 728
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t//\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 738
        echo "








// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-account').button('reset');
        },
        success: function(html) {
            

            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 767
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 769
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
            
            //\$('#button-guest').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').button('loading');
\t\t},
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-register').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 851
        if (($context["shipping_required"] ?? null)) {
            // line 852
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 866
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 875
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 879
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 880
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 881
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 894
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 898
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 899
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 900
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 908
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 914
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 918
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 925
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 935
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-payment-address').button('reset');
        },
        success: function(json) {
            
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                ";
        // line 987
        if (($context["shipping_required"] ?? null)) {
            // line 988
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 994
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 998
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 999
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1000
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
                ";
        } else {
            // line 1018
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1025
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1029
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});
                ";
        }
        // line 1047
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                //location = json['redirect'];
                
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1101
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1105
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1106
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {

    
    if(\$(\"#button-guest\").hasClass(\"disabled\") || \$(\"#button-guest\").hasClass(\"loading\")){
        
        return;
    }
    
    if(\$(\"#news-radio\").prop(\"checked\")){
        var emailName = \$(\"#input-payment-firstname\").val() + \$(\"#input-payment-lastname\").val();
        var emailMail = \$(\"#input-payment-email\").val();
        
        \$.ajax({
          url: 'index.php?route=mail/newsletter&email=' + emailMail + '&name=' + emailName,
          type: 'get',
          dataType: 'json',
          success: function(json) {
              
          }
        });
    }


    //
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').addClass('loading');
               
        },
        complete: function() {
\t\t\t//\$('#button-guest').button('reset');
           
        },
        success: function(json) {
            console.log(json);
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                
                //location = json['redirect'];
            } else if (json['error']) {
                //\$('#button-guest').button('reset');

                //\$('#button-guest')

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 1210
        if (($context["shipping_required"] ?? null)) {
            // line 1211
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            //\$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1228
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1237
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1241
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1242
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            

                            setTimeout(()=>{
                                \$('#button-shipping-method').trigger('click');
                                
                            }, 400);
                            
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            //\$('#button-guest').button('reset');
                        },
                        success: function(html) {


                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1267
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 1271
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1272
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1273
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');


                            setTimeout(()=>{
                                \$('#button-guest-shipping').trigger('click');
                                
                            }, 400);

                            console.log(\"nedd\");

                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 1290
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        //\$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1300
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1304
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        
                        \$('#button-payment-method').trigger('click');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 1313
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {

            console.log(\"button-guest-shipping\");

            


            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                
                //location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        

                        \$(\".checkout-form__checkout-form-information\").removeClass(\"showed\");
                        \$(\".checkout-form__checkout-form-payment\").removeClass(\"showed\");
                        \$(\".checkout-form__checkout-form-shipping\").addClass(\"showed\");


                        \$(\"#button-guest\").removeClass(\"loading\");


                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1383
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1387
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1388
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {



     if(\$(\"#button-shipping-method\").hasClass(\"disabled\") || \$(\"#button-shipping-method\").hasClass(\"loading\")){
        
        return;
    }


    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();


            console.log(json);
            \$(\".checkout-cart__shipping-value\").html(json[\"shippingTotal\"]);
            \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);

            if (json['redirect']) {
                
                //location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1448
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1452
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        
                        \$('#button-payment-method').trigger('click');




                        




                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
             
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                
                //location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    beforeSend: function() {
                        
                    },
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        console.log(html);
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1525
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');

                        //\$('.zoid-component-frame').trigger('mousedown');

                        //\$('#button-guest').hide();

                        \$(\".checkout-form__checkout-form-information\").removeClass(\"showed\");
                        \$(\".checkout-form__checkout-form-shipping\").removeClass(\"showed\");
                        \$(\".checkout-form__checkout-form-payment\").addClass(\"showed\");
                        
                        
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 1551
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1796 => 1551,  1767 => 1525,  1691 => 1452,  1684 => 1448,  1621 => 1388,  1617 => 1387,  1610 => 1383,  1538 => 1313,  1526 => 1304,  1519 => 1300,  1507 => 1290,  1487 => 1273,  1483 => 1272,  1479 => 1271,  1472 => 1267,  1444 => 1242,  1440 => 1241,  1433 => 1237,  1421 => 1228,  1402 => 1211,  1400 => 1210,  1293 => 1106,  1289 => 1105,  1282 => 1101,  1226 => 1047,  1205 => 1029,  1198 => 1025,  1189 => 1018,  1168 => 1000,  1164 => 999,  1160 => 998,  1153 => 994,  1145 => 988,  1143 => 987,  1088 => 935,  1076 => 925,  1066 => 918,  1059 => 914,  1051 => 908,  1040 => 900,  1036 => 899,  1032 => 898,  1025 => 894,  1009 => 881,  1005 => 880,  1001 => 879,  994 => 875,  982 => 866,  966 => 852,  964 => 851,  879 => 769,  874 => 767,  843 => 738,  830 => 728,  821 => 721,  801 => 704,  789 => 694,  787 => 693,  770 => 679,  765 => 677,  758 => 673,  753 => 671,  621 => 542,  617 => 540,  607 => 533,  596 => 525,  592 => 523,  590 => 522,  580 => 515,  571 => 511,  556 => 498,  450 => 352,  428 => 333,  413 => 321,  399 => 309,  396 => 308,  390 => 306,  387 => 305,  381 => 303,  378 => 302,  376 => 301,  370 => 297,  364 => 295,  362 => 294,  355 => 292,  340 => 279,  334 => 278,  330 => 276,  328 => 275,  322 => 272,  315 => 270,  307 => 265,  300 => 263,  296 => 261,  293 => 260,  288 => 259,  286 => 258,  279 => 254,  267 => 244,  231 => 210,  202 => 184,  187 => 172,  171 => 158,  168 => 157,  162 => 155,  159 => 154,  153 => 152,  150 => 151,  148 => 150,  142 => 146,  136 => 144,  134 => 143,  127 => 141,  111 => 127,  101 => 123,  94 => 121,  87 => 117,  80 => 115,  76 => 113,  72 => 112,  65 => 108,  57 => 103,  41 => 89,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout.twig", "");
    }
}
