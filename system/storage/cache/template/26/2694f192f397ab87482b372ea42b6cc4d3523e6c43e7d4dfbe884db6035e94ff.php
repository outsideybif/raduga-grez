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

/* default/template/stories/list.twig */
class __TwigTemplate_79def084315a7d95d71538cd502971aed53310daf1fc3ed5e22e23d1453f1e66 extends \Twig\Template
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

<centered-title class=\"centered-title\">
   <div class=\"centered-title__content\">STORIES</div>
</centered-title>

<stories-grid class=\"stories-grid\">
   ";
        // line 8
        $context["time"] = 0;
        // line 9
        echo "   ";
        $context["index"] = 0;
        // line 10
        echo "   ";
        $context["time"] = (($context["time"] ?? null) + 0.14999999999999999);
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 12
            echo "    
        <div class=\"story\" style=\"opacity:0\" animation=\"fade-up\" animation-delay=\"";
            // line 13
            echo ($context["time"] ?? null);
            echo "\">
            <a class=\"story__inner\" href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["story"], "href", [], "any", false, false, false, 14);
            echo "\">
               <span class=\"inner\">
                    <span class=\"inner__image\" data-scroll=\"data-scroll\" data-scroll-speed=\"-0.3\">
                        
                         ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["story"], "video", [], "any", false, false, false, 18) != "")) {
                // line 19
                echo "                        <video class=\"media\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["story"], "video", [], "any", false, false, false, 19);
                echo "\"></video>
                        ";
            } else {
                // line 21
                echo "                        <img class=\"media\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["story"], "thumb", [], "any", false, false, false, 21);
                echo "\">
                        ";
            }
            // line 23
            echo "                    </span>
                </span>

                <span class=\"story__date\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["story"], "date", [], "any", false, false, false, 26);
            echo "</span>
                <span class=\"story__title\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 27);
            echo "</span>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
</stories-grid>



<stories-pagination class=\"stories-pagination\">
 ";
        // line 37
        if ((($context["isFirst"] ?? null) == false)) {
            // line 38
            echo "   <a href=\"";
            echo ($context["prevLink"] ?? null);
            echo "\" class=\"stories-pagination__prev\">Prev</a>
   ";
        }
        // line 40
        echo "   <div class=\"stories-pagination__pages\">
   
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 43
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "link", [], "any", false, false, false, 43);
            echo "\" class=\"stories-pagination__page ";
            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "active", [], "any", false, false, false, 43)) {
                echo " active ";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "page", [], "any", false, false, false, 43);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "   
   </div>
   ";
        // line 46
        if ((($context["isLast"] ?? null) == false)) {
            // line 47
            echo "    <a href=\"";
            echo ($context["nextLink"] ?? null);
            echo "\" class=\"stories-pagination__next\">Next</a>
    ";
        }
        // line 49
        echo "</stories-pagination>


";
        // line 52
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/stories/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 52,  158 => 49,  152 => 47,  150 => 46,  146 => 44,  131 => 43,  127 => 42,  123 => 40,  117 => 38,  115 => 37,  107 => 31,  97 => 27,  93 => 26,  88 => 23,  82 => 21,  76 => 19,  74 => 18,  67 => 14,  63 => 13,  60 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/stories/list.twig", "");
    }
}
