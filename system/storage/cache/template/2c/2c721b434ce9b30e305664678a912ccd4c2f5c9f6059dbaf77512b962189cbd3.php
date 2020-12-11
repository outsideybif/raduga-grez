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

/* default/template/checkout/shipping_method.twig */
class __TwigTemplate_b30a85f8278cc581ce51410cb53480610c9456f4c98f63d860bd88ae466ed40a extends \Twig\Template
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






";
        // line 52
        if (($context["error_warning"] ?? null)) {
            // line 53
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 55
        if (($context["shipping_methods"] ?? null)) {
            // line 56
            echo "<div class=\"checkout-form__title\">Shipping methods</div>
";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 58
                echo "
";
                // line 59
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 59)) {
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 60));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 61
                        echo "<div class=\"radio shipping_radiobutton\">
  <label> ";
                        // line 62
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 62) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 63
                            echo "    ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 63);
                            // line 64
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 64);
                            echo "\" checked=\"checked\" />
    ";
                        } else {
                            // line 66
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 66);
                            echo "\" />
    ";
                        }
                        // line 68
                        echo "
    <div class=\"shipping_label\"><span>";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 69);
                        echo "</span> <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 69);
                        echo "</span></div>
    
    </label>
</div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 75
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 75);
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 79
        echo "
<textarea name=\"comment\" rows=\"8\" style=\"display: none\">";
        // line 80
        echo ($context["comment"] ?? null);
        echo "</textarea>


<div class=\"checkout-form__actions\">
    <div class=\"checkout-form__action-wrapper back-to-informations\">
      <div class=\"\">Back</div>
    </div>
    <div class=\"checkout-form__action-wrapper\">
      <standart-button class=\"standart-button continue-payment-button mobile_full disabled\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 88
        echo ($context["text_loading"] ?? null);
        echo "\">
          <span id=\"button-information-wrapper\">Continue to Payment<span>
          <div style=\"display: none\"  id=\"button-loading-wrapper\" class=\"dot-flashing\"></div>
      </standart-button>
    </div>
</div>

 


";
        // line 103
        echo "

<script>



\$(\".shipping_radiobutton input\").on(\"change\", ()=>{
  console.log(\"chnage\");
  \$(\"#button-shipping-method\").removeClass(\"disabled\");
})




setTimeout(()=>{
window.locomotive.update();
console.log(\"update shipping\");
},3000);


</script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 103,  134 => 88,  123 => 80,  120 => 79,  109 => 75,  95 => 69,  92 => 68,  86 => 66,  80 => 64,  77 => 63,  75 => 62,  72 => 61,  68 => 60,  66 => 59,  63 => 58,  59 => 57,  56 => 56,  54 => 55,  48 => 53,  46 => 52,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/shipping_method.twig", "");
    }
}
