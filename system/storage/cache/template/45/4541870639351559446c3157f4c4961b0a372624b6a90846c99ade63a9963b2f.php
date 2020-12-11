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

/* default/template/common/footer_script.twig */
class __TwigTemplate_04126a58109b5596d5c060863d9a9788231ddc239d80e94928b7a9f4785568f4 extends \Twig\Template
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
        // line 45
        echo "


<script>

const emailRegex = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;


   console.log( \$(\".subscribe-product\") );

   \$(\".subscribe-product\").on(\"click\", ()=>{
      let name = \$(\".subscribe-product\").data(\"name\");
      let email = \$(\".subscribe-product-input\").val();
      
      const result = emailRegex.test(email);
      if(result){
         \$.ajax({
            url: `index.php?route=subscribe/subscribe/outstock&email=\${email}&name=\${name}`,
            type: 'get',
            dataType: 'json',
            beforeSend: function() {
               \$('#button-cart').button('loading');
            },
            complete: function() {
               \$('#button-cart').button('reset');
            },
            success: function(json) {
            console.log(\"sended\");
               \$(\".subscribe-product-input\").val(\"\")
            },
            error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
         });
      }
   });



   \$(\".subscribe-email\").on(\"click\", ()=>{

      

      let email = \$(\".subscribe-email-input\").val()
      const result = emailRegex.test(email);
      if(result){
         
         \$(\".subscribe-email-input\").val(\"\");
         \$(\".input-subscribe\").addClass(\"field_tanks\");
         setTimeout(
            ()=>{
               \$(\".input-subscribe\").removeClass(\"field_tanks\");
            }, 2000
         );

         \$.ajax({
            url: `index.php?route=subscribe/subscribe&email=\${email}`,
            type: 'get',
            dataType: 'json',
            beforeSend: function() {
               \$('#button-cart').button('loading');
            },
            complete: function() {
               \$('#button-cart').button('reset');
            },
            success: function(json) {
            console.log(\"sended\");
            },
            error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
         });
      }
   });

   \$(\".contact-form__form-actions\").on(\"click\", \"circle-button\", ()=>{

      let name = \$(\".input-contact-field__input[name='name']\").val()
      let email = \$(\".input-contact-field__input[name='email']\").val()
      let message = \$(\".input-contact-field__textarea[name='comment']\").val()
      const result = emailRegex.test(email);

      console.log(name, email, message);
      if(result && name!=\"\" && message!=\"\"){
         \$.ajax({
            url: `index.php?route=subscribe/subscribe/contact&email=\${email}&name=\${name}&message=\${message}`,
            type: 'get',
            dataType: 'json',
            beforeSend: function() {
               \$('#button-cart').button('loading');
            },
            complete: function() {
               \$('#button-cart').button('reset');
            },
            success: function(json) {
               console.log(\"sended\");

              OnSended();
               
            },
            error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
         });
      }

   });


   \$(\".contact-form__form-confirm-back\").on(\"click\", ()=>{
      OnBack();
   });
   
   function OnSended(){
      
      \$(\".contact-form__form\").hide();
      \$(\".contact-form__form-actions\").hide();

      \$(\".contact-form__form-confirm\").show();
      \$(\".contact-form__form-confirm\").addClass(\"showed\");

      \$(\".contact-form__form-confirm\").addClass(\"showed\");

      setTimeout(()=>{
        OnBack();
      }, 50000);
      
   }

   function OnBack(){
      
      \$(\".input-contact-field__input\").val(\"\");
      \$(\".input-contact-field__textarea\").val(\"\");

      \$(\".input-contact-field\").removeClass(\"field_valid\");
      \$(\".input-contact-field\").removeClass(\"focused\");

       

      \$(\".contact-form__form-confirm\").hide();
      \$(\".contact-form__form\").show();
      \$(\".contact-form__form-actions\").show();
      \$(\".contact-form__form\").addClass(\"showed\");
      \$(\".contact-form__form-confirm\").removeClass(\"showed\");
      
   }


</script>









            </div>
         </div>
      </div>
    </div>
  </div>
</plm-smooth-scroll>

<script>

   document.addEventListener(\"DOMContentLoaded\", ()=>{
    //console.log(window.locomotive);

    //scroll.scrollTo(target);

    \$(\".footer-block__back-to-top\").on(\"click\", ()=>{
      window.locomotive.scrollTo(\"top\");
    });

  });

   document.addEventListener(\"DOMContentLoaded\", ()=>{
      window.locomotive.on('scroll', obj => {

         let scrollTop = obj.scroll.y;
         //console.log(1 + (scrollTop / (\$(window).height() / 10) - 70) / 40);
         //console.log((scrollTop / (\$(window).height() / 10) - 70) / 40);
         //console.log(\$(window).height(), scrollTop, \$(\".contact-us\").offset().top);
         
            // console.log(\"scroll\");
            // ((\$(window).height() - \$(\".contact-us\").offset().top)/\$(window).height() / 2)
            let scale = 1 + (scrollTop / (\$(window).height() / 10) - 70) / 40;
            if(scale < 1){
               scale = 1;
            }
            \$('.about-us-image').css('transform', 'scale(' + scale + ')');
         
         //console.log( scrollTop, \$(\".contact-us\").offset().top,  );
      });


      window.locomotive.on('call', func => {
         
         // Using modularJS
         //this.call(...func);
         // Using jQuery events
         //\$(document).trigger(func);
         // Or do it your own way 😎
         console.log(\"func:\");
         console.log(func);
         
      });



    });

    function contactUsFunc(){
       console.log(\"contactUsFunc2\");
    }

</script>

";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 266
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "







<script>const modernBrowser = (
  'IntersectionObserver' in window
  &&
  'customElements' in window
);

if ( !modernBrowser ) {
  const scriptElement = document.createElement('script');

  scriptElement.async = false;
  scriptElement.src = './dist/polyfills.bundle.js';
  document.body.appendChild(scriptElement);
}
</script>
<script src=\"./catalog/view/dist/index.bundle.js?ver=";
        // line 290
        echo ($context["version"] ?? null);
        echo "\"></script>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer_script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 290,  272 => 268,  263 => 266,  259 => 265,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer_script.twig", "");
    }
}
