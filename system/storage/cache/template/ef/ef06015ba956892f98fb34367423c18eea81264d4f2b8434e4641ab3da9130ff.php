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

/* default/template/information/faq.twig */
class __TwigTemplate_89ded9c8da6e849c13a7aad9ee5eb6b83c1d5d8bea77a05fed1e9051c269c645 extends \Twig\Template
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

<faq-details class=\"faq-details\">
    <div class=\"faq-details__image\">
      <span class=\"inner is-inview\" data-scroll=\"\" data-scroll-speed=\"-2\" style=\"transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -45.5, 0, 1);\"> 
      \t<img src=\"/image/";
        // line 6
        echo ($context["faq_image"] ?? null);
        echo "\">
      </span>
  \t</div>
    <div class=\"faq-details__content\">
        <h2 class=\"content-title\">";
        // line 10
        echo ($context["faq_title"] ?? null);
        echo "</h2>
        <p-collapsible class=\"p-collapsible\"> <span>Who, how and where makes the toys?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We make toys from the wood which grows in our region. Our carpenters are working in the third generation. They used to make matryoshka dolls before, and now they work with us. All materials for the toys we buy in Russia, except for the
                    German paint. The cotton bags for toys packing are sewn by mothers of many children, who are on their maternity leave and work from home.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>Are the toys safe to play?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We use only solid wood and non-toxic water-based eco paint. The paint is approved for the age +0. We recommend children under three years old to play under parents supervision, as they may bite small particles of the wood.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>Do the toys have a smell?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>Our paint doesn’t smell at all. Linseed oil which we use for natural toys smells like linseed oil. The toys have a very delicate and pleasant natural smell of wood or oil.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>Why aren’t your toys smooth?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\" style=\"\">
            <div class=\"collapsible-content-wrapper\">
                <p>Our toys are tactile. We never cover them with lacque, as it may contain harmful composition. After the surface is lacque, you can’t feel the texture of the wood. Our toys are velvety in touch, this helps to develop fine motor skills and
                    to satisfy a child's tactile hunger. They are very comfortable and safe to play and leave no splinters on little hands.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>What is the toys’ duration period?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>If you take proper care of them, you will be able to present them to your grandchildren. As the toys are made of solid wood, keep them away from heating batteries or humidifiers. They are perfect for playing, but you should never use stackers
                    or building sets as teething toys for your children. The toys are safe, but it is possible to bite small particles of the wood. Their solid parts (blocks, stacker rings etc.) are very durable, but the glued smaller details (a kettle
                    lid, tomato tops etc.) are more fragile. Though we use the strongest of all non-toxic eco glues, we don’t recommend you to throw the toys. Their fragility is a good way to teach a child to be careful with toys, clothes and the world
                    around.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>How to clean the toys?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>Wood is self-disinfecting and we cover the toys with paint or oil which protect them from dirt. You can use dry or wet cloth for cleaning, but do it gently, without rubbing and detergents.</p>
            </div>
        </div>
        <p-collapsible class=\"p-collapsible\"> <span>How can wood manufacturing be eco-friendly, if trees are cut for it?</span>
            <div class=\"toggle-button\">
                <div class=\"horizontal\"></div>
                <div class=\"vertical\"></div>
            </div>
        </p-collapsible>
        <div class=\"collapsible-content\">
            <div class=\"collapsible-content-wrapper\">
                <p>We buy wood from responsible suppliers. They grow forests for logging themselves, and after they cut trees they plant new ones. We don’t buy wood from private traders who damage forests. We are also against wood wasting. We use wood with
                    its natural marks, because they are beautiful. Wood can’t be homogeneous like plastic. It has its marks and we never throw such wood away.</p>
            </div>
        </div>
    </div>
    <div class=\"faq-details__decorative-image\">
      <img data-scroll=\"\" data-scroll-speed=\"0.8\" src=\"/image/";
        // line 96
        echo ($context["faq_decorative_image"] ?? null);
        echo "\" style=\"transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 51.4245, 0, 1);\" class=\"is-inview\">
  \t</div>
</faq-details>




    ";
        // line 103
        echo ($context["content_bottom"] ?? null);
        echo "
    ";
        // line 104
        echo ($context["column_right"] ?? null);
        echo "
";
        // line 105
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 105,  155 => 104,  151 => 103,  141 => 96,  52 => 10,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/faq.twig", "");
    }
}
