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

/* default/template/information/contact.twig */
class __TwigTemplate_0bb1c8706fac2f2cbaa484a0cc4fe105c65ed68b9390b9a54f962916fc632c37 extends \Twig\Template
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

<block-layout class=\"block-layout-navigation standard-layout\">
   <contact-form class=\"contact-form\">
      <div class=\"contact-form__form-wrapper\">
         <div class=\"contact-form__title\" animation=\"fade-up\" animation-delay=\"0\">";
        // line 6
        echo ($context["contact_form_title"] ?? null);
        echo "</div>
         <div class=\"contact-form__subtitle\" animation=\"fade-up\" animation-delay=\"0.1\">";
        // line 7
        echo ($context["contact_form_subtitle"] ?? null);
        echo "</div>
         <div class=\"contact-form__form showed\">
            <input-contact-field class=\"input-contact-field\" animation=\"fade-up\" animation-delay=\"0.1\">
               <input class=\"input-contact-field__input\" type=\"text\" name=\"name\">
               <div class=\"input-contact-field__error\"></div>
               <div class=\"input-contact-field__placeholder\">Name</div>
            </input-contact-field>
            <input-contact-field class=\"input-contact-field\" validation=\"email\" animation=\"fade-up\" animation-delay=\"0.1\">
               <input class=\"input-contact-field__input\" type=\"text\" name=\"email\">
               <div class=\"input-contact-field__error\"></div>
               <div class=\"input-contact-field__placeholder\">Email</div>
            </input-contact-field>
            <input-contact-field class=\"input-contact-field\" animation=\"fade-up\" animation-delay=\"0.1\">
               <textarea class=\"input-contact-field__textarea\" type=\"text\" name=\"comment\" row=\"5\" col=\"5\"></textarea>
               <div class=\"input-contact-field__error\"></div>
               <div class=\"input-contact-field__placeholder\">Message</div>
            </input-contact-field>
         </div>
         <div class=\"contact-form__form-actions\" animation=\"fade-up\" animation-delay=\"0.1\">
            <circle-button class=\"circle-button dark\">
               Send
            </circle-button>
         </div>
        <div class=\"contact-form__form-confirm\">
           <div class=\"contact-form__form-confirm-title\">Thank you, we will contact you as soon as possible!</div>
           <div class=\"contact-form__form-confirm-back\">
              <img class=\"contact-form__back-icon\" src=\"./catalog/view/theme/default/assets/images/arrow-left-dark.svg\" alt=\"\" role=\"presentation\">
              <div class=\"contact-form__form-confirm-back-label\">Back</div>
           </div>
        </div>
      </div>
      <div class=\"contact-form__contact-image\" animation=\"fade-up\" animation-delay=\"0.1\"> 
        <span class=\"inner is-inview\" data-scroll=\"\" data-scroll-speed=\"-1\">
        \t<img src=\"/image/";
        // line 40
        echo ($context["contact_form_image"] ?? null);
        echo "\">
     \t</span>
     </div>
   </contact-form>
</block-layout>
  
<contact-infrmation class=\"contact-information block-layout standard-layout\">
   <div class=\"contact-information__image\"><img src=\"/image/";
        // line 47
        echo ($context["contact_information_image"] ?? null);
        echo "\"></div>
   <div class=\"contact-information__information\">
      <div class=\"title-small\">";
        // line 49
        echo ($context["contact_information_text"] ?? null);
        echo "</div>
      
      <a class=\"dark\" href=\"mailto:";
        // line 51
        echo ($context["contact_information_mail"] ?? null);
        echo "\">
         <div class=\"contact-information__email underline u-big\">";
        // line 52
        echo ($context["contact_information_mail"] ?? null);
        echo "</div>
      </a>
      <div class=\"contact-information__footer\">
         <div class=\"contact-information__time\">
            <div class=\"contact-information__footer-title\">";
        // line 56
        echo ($context["contact_information_time_title"] ?? null);
        echo "</div>
            <p>";
        // line 57
        echo ($context["contact_information_time_day"] ?? null);
        echo "</p>
            <p>";
        // line 58
        echo ($context["contact_information_time_hours"] ?? null);
        echo "</p>
         </div>
         <div class=\"contact-information__socials\">
            <div class=\"contact-information__footer-title\">";
        // line 61
        echo ($context["contact_information_socials_title"] ?? null);
        echo "</div>
            <a class=\"contact-information__social-item dark\" href=\"";
        // line 62
        echo ($context["contact_information_instagram"] ?? null);
        echo "\" target=\"_blank\">Instagram</a>
            <a class=\"contact-information__social-item dark\" href=\"";
        // line 63
        echo ($context["contact_information_facebook"] ?? null);
        echo "\" target=\"_blank\">Facebook</a>
            <a class=\"contact-information__social-item dark\" href=\"";
        // line 64
        echo ($context["contact_information_pinterest"] ?? null);
        echo "\" target=\"_blank\">Pinterest</a>
         </div>
      </div>
   </div>
</contact-infrmation>
";
        // line 69
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 69,  142 => 64,  138 => 63,  134 => 62,  130 => 61,  124 => 58,  120 => 57,  116 => 56,  109 => 52,  105 => 51,  100 => 49,  95 => 47,  85 => 40,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
