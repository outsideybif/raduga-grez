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

/* default/template/common/header_checkout.twig */
class __TwigTemplate_b2fe89da30401787d5fed5a581cf3741ed128b9a8e94995bd1d55c68cfdfdda9 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">


<link href=\"./catalog/view/dist/index.min.css?ver=";
        // line 28
        echo ($context["version"] ?? null);
        echo "\" rel=\"stylesheet\">

<link href=\"./catalog/view/theme/default/assets/css/three-dots.css?ver=";
        // line 30
        echo ($context["version"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 33);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 33);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 33);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<script src=\"catalog/view/javascript/common.js?ver=";
        echo ($context["version"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</head>
<body>
";
        // line 87
        echo "







";
        // line 95
        echo ($context["menu"] ?? null);
        echo "


<promocode-modal class=\"promocode-modal\">
    <div class=\"promocode-modal__smoke-wrapper\">
        <div class=\"promocode-modal__form-wrapper\">
            <div class=\"promocode-modal__close-wrapper\">
                <img class=\"promocode-modal__img promocode-close\" src=\"./catalog/view/theme/default/assets/images/close.svg\" alt=\"\" role=\"presentation\">
            </div>
            <div class=\"promocode-modal__modal-title\">Apply a promocode</div>
            <div class=\"promocode-modal__promocode-field\"> 
                <input type=\"text\" placeholder=\"Promocode\" id=\"input-coupon-modal\">
                <div class=\"promocode-modal__promocode-field-error\" >Error</div>
              </div>
            <standart-button class=\"standart-button\" id=\"button-coupon-modal\">Apply</standart-button>
        </div>
    </div>
</promocode-modal>

<script>

\$('#button-coupon-modal').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('#input-coupon-modal').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {

     
      if(json[\"error\"]){
        \$(\".promocode-modal__promocode-field-error\").html(json[\"error\"]);
        \$(\".promocode-modal__promocode-field-error\").addClass(\"showed\");
      } else {
         \$(\".promocode-modal\").removeClass(\"showed\");
        console.log(json);
        \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);

        \$(\"#coupon-wrapper\").show();
        \$(\"#coupon-label\").html(json[\"coupon_label\"]);
        \$(\"#coupon-value\").html(json[\"coupon_value\"]);

        \$(\"#coupon-wrapper-mobile\").show();
        \$(\"#coupon-label-mobile\").html(json[\"coupon_label\"]);
        \$(\"#coupon-value-mobile\").html(json[\"coupon_value\"]);

         
      }
      

\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
</script>




<plm-smooth-scroll class=\"plm-smooth-scroll\">
   <div class=\"plm-smooth-scroll__scroll\" data-scroll-container=\"\">
      <div class=\"plm-smooth-scroll__section\" data-scroll-section=\"\" data-scroll-section-inview=\"\" style=\"transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1; pointer-events: all;\">
         <div class=\"plm-smooth-scroll__inner is-inview\" data-scroll=\"\">
            <div class=\"content\" id=\"root\">
               <div class=\"item\">
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 95,  175 => 87,  171 => 45,  163 => 43,  159 => 42,  148 => 40,  144 => 39,  139 => 38,  130 => 36,  126 => 35,  113 => 33,  109 => 32,  104 => 30,  99 => 28,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header_checkout.twig", "");
    }
}
