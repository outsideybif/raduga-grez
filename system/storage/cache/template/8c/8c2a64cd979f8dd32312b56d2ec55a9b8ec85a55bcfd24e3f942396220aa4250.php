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

/* default/template/extension/module/category.twig */
class __TwigTemplate_bfecf919ba4855cfbdc33fcde3e62630b011cfeb28dd70638caabc546771f1de extends \Twig\Template
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
        echo "<catalogue-list class=\"catalogue-list\">
              
    <div class=\"catalogue-list__wrapper\">
        
      <div class=\"catalogue-list__title\">Category</div>
      <div class=\"catalogue-list__separator\"></div>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "          <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
            echo "\"><div class=\"catalogue-list__item\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
            echo "</div></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

    </div>


    <div class=\"catalogue-list__wrapper\">
      <div class=\"catalogue-list__title\">Collection</div>
      <div class=\"catalogue-list__separator\"></div>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
            echo "\"><div class=\"catalogue-list__item\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
            echo "</div></a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "              
    </div>

    <div class=\"catalogue-list__wrapper\">
      <a href=\"";
        // line 25
        echo ($context["categoriesShop"] ?? null);
        echo "\"><div class=\"catalogue-list__title\">Shop All</div></a>
    </div>



</catalogue-list>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 21,  75 => 20,  71 => 19,  61 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category.twig", "");
    }
}
