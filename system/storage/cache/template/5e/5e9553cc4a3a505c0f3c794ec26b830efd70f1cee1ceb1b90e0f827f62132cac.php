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

/* default/template/common/cart.twig */
class __TwigTemplate_3ecacca2e3232db00704c9f1630e2b30d0813fc1698365f2fb1ef72e586d34db extends \Twig\Template
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
        // line 46
        echo "



<floating-cart class=\"floating-cart ";
        // line 50
        echo ($context["opened"] ?? null);
        echo "\" >
  <div class=\"floating-cart__cart-wrapper\">
      <div class=\"floating-cart__cart-products-wrapper\">
        <div class=\"floating-cart__cart-header\">
            <div class=\"floating-cart__title\">Your Cart (";
        // line 54
        echo ($context["count"] ?? null);
        echo ")</div>
            <img class=\"floating-cart__img\" src=\"./catalog/view/theme/default/assets/images/close.svg\" alt=\"\" role=\"presentation\">
        </div>
        ";
        // line 57
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 58
            echo "        <div class=\"floating-cart__products-wrapper\">
            
            
              ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "
                <div class=\"cart-product cart-card-";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
                echo "\">
                  <a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                echo "\" class=\"img-thumb\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 64);
                echo "\"></a>
                  <div class=\"cart-product__content\">
                      <a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\" class=\"cart-product__title dark\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "</a>
                      <div class=\"cart-product__counter\">
                        <div class=\"cart-product__counter-lablel\">Qty:</div>
                        <div class=\"cart-product__counter-minus\" data-cart-id=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 69);
                echo "\">
                          <img src=\"./catalog/view/theme/default/assets/images/counter-minus.svg\">
                        </div>
                        <div class=\"cart-product__counter-value\" data-cart-id=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 72);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 72);
                echo "</div>
                        <div class=\"cart-product__counter-plus\" data-cart-id=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 73);
                echo "\">
                          <img src=\"./catalog/view/theme/default/assets/images/counter-plus.svg\">
                        </div>
                      </div>
                      <div class=\"cart-product__remove\" onclick=\"cart.remove('";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 77);
                echo "');\">Remove</div>
                  </div>
                  <div class=\"cart-product__price\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 79);
                echo "</div>
                </div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
            




        </div>
        ";
        }
        // line 91
        echo "        ";
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 92
            echo "
        ";
        } else {
            // line 94
            echo "          <p class=\"\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 96
        echo "

        
      </div>

      ";
        // line 101
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 102
            echo "      <div class=\"floating-cart__cart-action\">
        <div class=\"floating-cart__subtotal\">
            <div>Subtotal</div>
            <div>\$";
            // line 105
            echo ($context["subtotal"] ?? null);
            echo "</div>
        </div>
        <a href=\"";
            // line 107
            echo ($context["checkoutLink"] ?? null);
            echo "\"><standart-button class=\"standart-button\">Proceed to checkout</standart-button></a>
      </div>
      ";
        }
        // line 110
        echo "

  </div>
</floating-cart>


";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 110,  165 => 107,  160 => 105,  155 => 102,  153 => 101,  146 => 96,  140 => 94,  136 => 92,  133 => 91,  123 => 83,  113 => 79,  108 => 77,  101 => 73,  95 => 72,  89 => 69,  81 => 66,  74 => 64,  70 => 63,  67 => 62,  63 => 61,  58 => 58,  56 => 57,  50 => 54,  43 => 50,  37 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}
