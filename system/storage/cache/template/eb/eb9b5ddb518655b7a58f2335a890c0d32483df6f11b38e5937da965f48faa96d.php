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

/* default/template/common/footer.twig */
class __TwigTemplate_836ac27dc828c55c9f6d2b18bd3a070dd69d90a84c0bed46711ed76bd115a1fe extends \Twig\Template
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
<contact-us class=\"contact-us\" data-scroll data-scroll-call=\"contactUsFunc\" data-scroll-repeat=\"true\">
   <img src=\"./catalog/view/theme/default/assets/images/1_1.png\" class=\"about-us-image\">
   <div class=\"contact-us__form\" animation=\"fade\" animation-delay=\"0.2\">
      <div class=\"contact-us__title\">
         <div>JOIN OUR</div>
         <div>NEWSLETTER</div>
      </div>
      <div class=\"contact-us__field\">
         <input-subscribe class=\"input-subscribe\" validation=\"email,required\">
            <input class=\"input-subscribe__input subscribe-email-input\" type=\"email\" name=\"email\" placeholder=\"email\">
            <div class=\"input-subscribe__error\">Not error</div>
            <div class=\"input-subscribe__tanks\">Thanks for subscribing!</div>
            <div class=\"input-subscribe__arrow subscribe-email\"><img src=\"./catalog/view/theme/default/assets/images/arrow-right.svg\"></div>
         </input-subscribe>
         
         

      </div>
   </div>
</contact-us>


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

      console.log(email);
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
      
      

     

      \$(\".contact-form__form\").removeClass(\"showed\");
      setTimeout(
         ()=>{
            \$(\".contact-form__form\").hide();
            \$(\".contact-form__form-actions\").hide();
            \$(\".contact-form__form-confirm\").show();
            \$(\".contact-form__form-confirm\").addClass(\"showed\");
         }, 200
      );

      

      setTimeout(()=>{
        OnBack();
      }, 50000);
      
   }

   function OnBack(){
      
      \$(\".input-contact-field__input\").val(\"\");
      \$(\".input-contact-field__textarea\").val(\"\");


      \$(\".input-contact-field\").removeClass(\"field_valid\");
      \$(\".input-contact-field\").removeClass(\"focused\");
      \$(\".contact-form__form-confirm\").removeClass(\"showed\");
      setTimeout(
         ()=>{
            \$(\".contact-form__form-confirm\").hide();
            \$(\".contact-form__form\").show();
            \$(\".contact-form__form-actions\").show();
            \$(\".contact-form__form\").addClass(\"showed\");
            
         }, 200
      );

      
      
   }


</script>



<footer-block class=\"footer-block standard-layout\">
   <div class=\"footer-block__navigation\">
      <div class=\"footer-block__email\" animation=\"fade-up\" animation-delay=\"0\">
         <div class=\"footer-block__menu-list-title\">Interested in a Raduga Grëz?</div>
         <a href=\"mailto:hello@raduga-grez.ru\" class=\"footer-block__email-text underline dark\">hello@raduga-grez.ru</a>
      </div>
      <div class=\"footer-block__menu\">
         <div class=\"footer-block__menu-block\">
            <div class=\"footer-block__menu-list\"  animation=\"fade-up\" animation-delay=\"0.1\">
               <div class=\"footer-block__menu-list-title\">About</div>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/about\">About us</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=stories/list\">Stories</a>
            </div>
            <div class=\"footer-block__menu-list\"  animation=\"fade-up\" animation-delay=\"0.2\">
               <div class=\"footer-block__menu-list-title\">Customer Service</div>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/information&information_id=17\">Shipping</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/information&information_id=11\">Wholesale</a>
               <a class=\"footer-block__menu-item dark\" href=\"\">Terms &amp; Conditions</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/information&information_id=18\">FAQ</a>
            </div>
         </div>
         <div class=\"footer-block__menu-block\">
            <div class=\"footer-block__menu-list\"   animation=\"fade-up\" animation-delay=\"0.3\">
               <div class=\"footer-block__menu-list-title\">Contact</div>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/contact\">Contact us</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://radugagrez.palemiya.com/index.php?route=information/information/stockist\">Stockist</a>
            </div>
            <div class=\"footer-block__menu-list\"   animation=\"fade-up\" animation-delay=\"0.4\">
               <div class=\"footer-block__menu-list-title\">Social media</div>
               <a class=\"footer-block__menu-item dark\" href=\"https://www.instagram.com/raduga_grez/\" target=\"_blank\">Instagram</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://www.facebook.com/raduga.grez\" target=\"_blank\">Facebook</a>
               <a class=\"footer-block__menu-item dark\" href=\"https://www.pinterest.com/radugagrez/\" target=\"_blank\">Pinterest</a>
            </div>
         </div>
      </div>
   </div>
   <div class=\"footer-block__back-to-top\"   animation=\"fade-up\" animation-delay=\"0.5\">Back to Top</div>
   <div class=\"footer-block__copyright\"   animation=\"fade-up\" animation-delay=\"0.6\">©2020 All rights reserved RADUGA GRËZ</div>
   <div>
\t\"Наш сайт пользуется расчетами <a href=\"http://www.postcalc.ru\">сайта Postcalc.RU</a>\" <br>
\t</div>
</footer-block>







          






























            </div>
         </div>
      </div>
    </div>
  </div>
</plm-smooth-scroll>

<script>
   var ViewportHeight = window.innerHeight;

   var IsAboutInViewport = false;

   var startTop = 0;



   document.addEventListener(\"DOMContentLoaded\", ()=>{
    //console.log(window.locomotive);

    //scroll.scrollTo(target);

    \$(\".footer-block__back-to-top\").on(\"click\", ()=>{
      window.locomotive.scrollTo(\"top\");
    });

  });

   document.addEventListener(\"DOMContentLoaded\", ()=>{
      RecalculateFooterScroll();
   });

    function RecalculateFooterScroll(){
      window.locomotive.on('scroll', obj => {

         let scrollTop = obj.scroll.y;
         if(IsAboutInViewport){
            let heightDifference =  (startTop - ( \$(\".contact-us\").offset().top + \$(\".contact-us\").outerHeight() )) / startTopPart;
            let scale = 1 + 0.004 * heightDifference;
            
            \$('.about-us-image').css('transform', 'scale(' + scale + ')');
         }
           
      });


      window.locomotive.on('call', func => {
         if(\$(\".contact-us\").hasClass(\"is-inview\")){
            IsAboutInViewport = true;
            startTop = \$(\".contact-us\").offset().top + \$(\".contact-us\").outerHeight();
            startTopPart = \$(\".contact-us\").offset().top / 100;

            //console.log(startTopPart);
         } else {
            IsAboutInViewport = false;
         }
         
      });
    }

    function contactUsFunc(){
       //console.log(\"contactUsFunc2\");
    }

</script>

";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 378
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "








<script>


   \$.expr[':'].internal = function (obj) {
      return (obj.hostname == location.hostname)
   }

   \$.expr[':'].external = function (obj) {
      return (obj.hostname != location.hostname)
   }


   window.onpopstate = function(event) {

       let link = document.location.href;

      if(link.charAt(0) == \"#\"){
         return true;
      }

     
      if(link != \"./\" && link != \"/\"){
         var url = new URL(link);
         if(url.searchParams.get(\"route\") == \"checkout/checkout\"){
            \$(\"navigation-block\").css(\"opacity\", 0);
            \$(\"navigation-block\").css(\"z-index\", -10);

            \$(\".floating-cart\").removeClass(\"opened\");
            \$(\".floating-cart\").removeClass(\"showed\");
         } else {
            \$(\"navigation-block\").css(\"opacity\", 1);
            \$(\"navigation-block\").css(\"z-index\", 9);

         }
      } else {
         \$(\"navigation-block\").css(\"opacity\", 1);
         \$(\"navigation-block\").css(\"z-index\", 9);
      }
      
      


      \$('#cover-plate').css(\"z-index\", \"999999999\");

      \$('#cover-plate').animate({\"opacity\":\"1\"}, 200, ()=>{
         \$.get(link, function (data) {
            // console.log(data)

            let headStart = data.indexOf('<head')
            headStart = data.indexOf('>', headStart) + 1
            let headEnd = data.indexOf('</head>', headStart)

            let bodyStart = data.indexOf('<body')
            bodyStart = data.indexOf('>', bodyStart) + 1
            let bodyEnd = data.indexOf('</body>', bodyStart)


            let head = data.slice(headStart, headEnd)
            let body = data.slice(bodyStart, bodyEnd)


            let countOfImages = 0;
            let countOfLoadedImages = 0;

            let countOfVideos = 0;
            let countOfLoadedVideos = 0;


            const root = \$(body).find('#root')
            \$('#root').html(root.html())



            var isCoverPlateShowed = false;
            \$(\"img\").on(\"load\", function() {
               countOfLoadedImages++;
               //console.log(\$(this));
               if(countOfImages  <= countOfLoadedImages && isCoverPlateShowed == false){
                  isCoverPlateShowed = true;
                  console.log(\"loaded media\");
                  setTimeout(() => {
                     \$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
                        \$('#cover-plate').css(\"z-index\", \"-2\");
                     });
                  }, 300)
               }
            });




            window.locomotive.destroy()
            window.locomotive.init()

            var url_string = link;
            

            \$(\"floating-cart\").removeClass(\"opened\");
            setTimeout(() => {
               \$(\"floating-cart\").removeClass(\"showed\");
            }, 200)









            

            //\$(\"video\").on(\"loadeddata\", function() {
            //   countOfLoadedVideos++;
            //   if(countOfImages == countOfLoadedImages && 
            //   countOfVideos == countOfLoadedVideos){
            //      setTimeout(() => {
            //         \$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
            //            \$('#cover-plate').css(\"z-index\", \"-2\");
            //         });
            //      }, 300)
            //   }
            //});








            
            setTimeout(() => {
               
               \$(\"floating-menu\").removeClass(\"opened\");


               
                


               window.locomotive.update()
               document.dispatchEvent(new CustomEvent('loadingscreendone'))
               window.document.dispatchEvent(new Event(\"DOMContentLoaded\", {
                  bubbles: true,
                  cancelable: true
               }));

               //\$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
               //   \$('#cover-plate').css(\"z-index\", \"-2\");
               //});




               \$(\".navigation-block\").addClass(\"opened\");
            }, 200)


           

         })
      });


   };


























   \$(document).on('click', 'a:internal', ajaxLinkHandler)


   function ajaxLinkHandler(e) {
      e.preventDefault()
      
      if(typeof \$(this).data('disabled') !== 'undefined'){
          return false;
      }

      let link = \$(this).attr(\"href\");
      

      if(\$(this).attr(\"href\").charAt(0) == \"#\"){
         return true;
      }



      
      
      \$('#cover-plate').css(\"z-index\", \"999999999\");

      \$('#cover-plate').animate({\"opacity\":\"1\"}, 200, ()=>{


         



         \$.get(\$(this).attr(\"href\"), function (data) {
            // console.log(data)
            let headStart = data.indexOf('<head')
            headStart = data.indexOf('>', headStart) + 1
            let headEnd = data.indexOf('</head>', headStart)

            let bodyStart = data.indexOf('<body')
            bodyStart = data.indexOf('>', bodyStart) + 1
            let bodyEnd = data.indexOf('</body>', bodyStart)


            let head = data.slice(headStart, headEnd)
            let body = data.slice(bodyStart, bodyEnd)


            let countOfImages = 0;
            let countOfLoadedImages = 0;

            let countOfVideos = 0;
            let countOfLoadedVideos = 0;

            




            const root = \$(body).find('#root')
            \$('#root').html(root.html())

            countOfImages = \$(\"#root img\").length - 3;
            countOfVideos = \$(\"video\").length;

            var isCoverPlateShowed = false;
            \$(\"img\").on(\"load\", function() {
               countOfLoadedImages++;
               //console.log(\$(this));
               if(countOfImages  <= countOfLoadedImages && isCoverPlateShowed == false){
                  isCoverPlateShowed = true;
                  console.log(\"loaded media\");
                  setTimeout(() => {
                     \$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
                        \$('#cover-plate').css(\"z-index\", \"-2\");
                     });
                  }, 300)
               }
            });

            window.locomotive.destroy()
            window.locomotive.init()
            var url_string = link;
            
            if(url_string == \"./\" || link == \"/\"){
               history.pushState({page: 1}, \"title 1\", \"\")
            } else {
               var url = new URL(url_string);
               history.pushState({page: 1}, \"title 1\", url.pathname + url.search)
            }
            
            \$(\"floating-cart\").removeClass(\"opened\");
            setTimeout(() => {
               \$(\"floating-cart\").removeClass(\"showed\");

               if(link != \"./\" && link != \"/\"){
                  var url = new URL(link);
                  if(url.searchParams.get(\"route\") == \"checkout/checkout\"){
                     \$(\"navigation-block\").css(\"opacity\", 0);
                     \$(\"navigation-block\").css(\"z-index\", -10);

                     \$(\".floating-cart\").removeClass(\"opened\");
                     \$(\".floating-cart\").removeClass(\"showed\");
                  } else {
                     \$(\"navigation-block\").css(\"opacity\", 1);
                     \$(\"navigation-block\").css(\"z-index\", 9);

                  }
               } else {
                  \$(\"navigation-block\").css(\"opacity\", 1);
                  \$(\"navigation-block\").css(\"z-index\", 9);
                  
               }


            }, 200)

         



           

            

            

            console.log( \$(\"#root img\"));
            //\$(\"video\").on(\"loadeddata\", function() {
            //   countOfLoadedVideos++;
            //   console.log(countOfLoadedImages);
            //   console.log(countOfLoadedVideos);
            //   if(countOfImages == countOfLoadedImages && 
            //   countOfVideos == countOfLoadedVideos){
            //      setTimeout(() => {
            //            console.log(\"loaded media\");
            //            \$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
            //               \$('#cover-plate').css(\"z-index\", \"-2\");
            //            });
            //      }, 300)
            //   }
            //});







            setTimeout(() => {
               //\$('#cover-plate').animate({\"opacity\":\"0\"}, 200);
               \$(\".navigation-block\").addClass(\"opened\");

               \$(\"floating-menu \").removeClass(\"opened\");

               
                //\$('#cover-plate').animate({\"opacity\":\"0\"}, 200, ()=>{
                //    \$('#cover-plate').css(\"z-index\", \"-2\");
                //});



               
               window.locomotive.update()
               document.dispatchEvent(new CustomEvent('loadingscreendone'))
               window.document.dispatchEvent(new Event(\"DOMContentLoaded\", {
                  bubbles: true,
                  cancelable: true
               }));
            }, 200)

            setTimeout(() => {
               window.locomotive.update()
            }, 1000)
            setTimeout(() => {
               window.locomotive.update()
            }, 2000)
         })
      });
      // \$('html').load(\$(this).attr('href'))
      
         


         return false
      }



</script>









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
        // line 791
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
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 791,  384 => 380,  375 => 378,  371 => 377,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
