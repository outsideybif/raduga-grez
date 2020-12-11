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

/* default/template/information/stockist.twig */
class __TwigTemplate_433444842d69bc362d4f2f77aace34e944221570c79abb4610812106336c542a extends \Twig\Template
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

<stokiest-details class=\"stokiest-details block-layout-navigation standard-layout\">
    <div class=\"stokiest-details__header\">
        <div class=\"title-medium\">Stockist</div>
        <p class=\"stokiest-details__information-description\">You don’t need to wait for the delivery from Russia, you can buy our toys in the shops of your own country. We regularly update this list, so check and look through it from time to time. If you’re interested in wholesale, you can find the information here.</p>
    </div>
    <div class=\"stokiest-details__body\">
        <div class=\"stokiest-details__title\">
            <div class=\"stokiest-details__stokiests-title\">Select your region</div>
            <div class=\"stokiest-details__stokiests\">

                ";
        // line 13
        $context["index"] = 0;
        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 15
            echo "                    
                    <div class=\"stokiest-details__stokiest-item  ";
            // line 16
            if ((($context["index"] ?? null) == 0)) {
                echo " active  ";
            }
            echo "\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"0\" data-name=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name_id", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 16);
            echo "</div>
                    ";
            // line 17
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 18
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
            </div>
       
        </div>
        <div class=\"stokiest-details__infromations\">
            <div class=\"stokiest-details__infromations-back\"> 
                <img class=\"stokiest-details__back-icon\" src=\"./assets/images/arrow-left-dark.svg\" alt=\"\" role=\"presentation\">
                <span>Back to regions</span>
            </div>
            
            
            
            ";
        // line 30
        $context["index"] = 0;
        // line 31
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "            ";
            $context["anumationIndex"] = 0;
            // line 33
            echo "                <div class=\"stokiest-details__store-items-wrapper ";
            if ((($context["index"] ?? null) == 0)) {
                echo " active ";
            }
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "name_id", [], "any", false, false, false, 33);
            echo "-items\">
                ";
            // line 34
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["wrapper"]) {
                // line 36
                echo "                        <div class=\"stokiest-details__store-items\" animation=\"fade\" >
                            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["wrapper"]);
                foreach ($context['_seq'] as $context["_key"] => $context["itemInfo"]) {
                    // line 38
                    echo "                                ";
                    $context["anumationIndex"] = (($context["anumationIndex"] ?? null) + 1);
                    // line 39
                    echo "                                <a class=\"stokiest-details__store-item dark\" style=\"opacity:0\" animation=\"fade\" animation-delay=\"";
                    echo (($context["anumationIndex"] ?? null) / 25);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["itemInfo"], "link", [], "any", false, false, false, 39);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["itemInfo"], "name", [], "any", false, false, false, 39);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemInfo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo " 
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wrapper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo " 

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " 
            

            
        </div>
    </div>
</stokiest-details>


<script>



";
        // line 67
        echo "
</script>
    
";
        // line 70
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/stockist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 70,  174 => 67,  159 => 45,  150 => 42,  142 => 40,  129 => 39,  126 => 38,  122 => 37,  119 => 36,  114 => 35,  112 => 34,  103 => 33,  100 => 32,  95 => 31,  93 => 30,  74 => 18,  72 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/stockist.twig", "");
    }
}
