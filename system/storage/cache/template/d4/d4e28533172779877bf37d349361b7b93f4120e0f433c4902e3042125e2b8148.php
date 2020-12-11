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

/* default/template/checkout/login.twig */
class __TwigTemplate_d0d3f790bd5602bab543754f3fb77c4b3790888f26c7b03c42fdba11e0442746 extends \Twig\Template
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
        echo "<script>
\$(document).ready(function(){
setTimeout(function(){
\$('#button-account').trigger('click');
},400);
});
</script>
<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 10
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 11
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"radio\">
      <label> ";
        // line 13
        if ((($context["account"] ?? null) == "register")) {
            // line 14
            echo "        <input type=\"radio\" name=\"account\" value=\"register\"  />
        ";
        } else {
            // line 16
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 18
        echo "        ";
        echo ($context["text_register"] ?? null);
        echo "</label>
    </div>
    ";
        // line 20
        if (($context["checkout_guest"] ?? null)) {
            // line 21
            echo "    <div class=\"radio\">
      <label> ";
            // line 22
            if ((($context["account"] ?? null) == "guest")) {
                // line 23
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 25
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\"/>
        ";
            }
            // line 27
            echo "        ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
    </div>
    ";
        }
        // line 30
        echo "    <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 31
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 34
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 35
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 41
        echo ($context["entry_password"] ?? null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 42
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 43
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 44
        echo ($context["button_login"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  135 => 43,  131 => 42,  127 => 41,  121 => 38,  117 => 37,  112 => 35,  108 => 34,  100 => 31,  95 => 30,  88 => 27,  84 => 25,  80 => 23,  78 => 22,  75 => 21,  73 => 20,  67 => 18,  63 => 16,  59 => 14,  57 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/login.twig", "");
    }
}
