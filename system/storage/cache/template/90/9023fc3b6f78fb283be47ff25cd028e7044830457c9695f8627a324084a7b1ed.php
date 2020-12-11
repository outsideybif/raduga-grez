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

/* default/template/information/about.twig */
class __TwigTemplate_f0cc31297aa6bc37e7c200119ada5daa261dd64fb95c9e870f6a298d6292d035 extends \Twig\Template
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

         

<about-pattern-first class=\"about-pattern-first standard-layout block-layout-navigation\">
  <div class=\"about-pattern-first__decoratives\">
    <div class=\"about-pattern-first__decorative-first\">
      <img data-scroll=\"\" data-scroll-speed=\"0.7\" src=\"/image/";
        // line 8
        echo ($context["about_first_block_image"] ?? null);
        echo "\">
    </div>
    <div class=\"about-pattern-first__decorative-second\">
      <span class=\"inner is-inview\" data-scroll=\"\" data-scroll-speed=\"-1\">
      \t<img src=\"/image/";
        // line 12
        echo ($context["about_first_block_big_image"] ?? null);
        echo "\">
      </span>
    </div>
  </div>
  <div class=\"about-pattern-first__content\">
    <div class=\"about-pattern-first__title title-large\">
  \t\t";
        // line 18
        echo ($context["about_first_block_title"] ?? null);
        echo "
  \t</div>
  \t<p class=\"about-pattern-first__text\">";
        // line 20
        echo ($context["about_first_block_text"] ?? null);
        echo "</p>
  </div>
</about-pattern-first>



<about-pattern-second class=\"about-pattern-second standard-layout block-layout\">
    <div class=\"about-pattern-second__decoratives\">
        <div class=\"about-pattern-second__decorative-first\">
           <span class=\"inner is-inview\" data-scroll=\"\" data-scroll-speed=\"-1\">
          \t\t<img src=\"/image/";
        // line 30
        echo ($context["about_second_block_big_image"] ?? null);
        echo "\">
            </span>
        </div>
      <div class=\"about-pattern-second__decorative-second\">
        
          \t\t<img data-scroll=\"\" data-scroll-speed=\"-0.5\" src=\"/image/";
        // line 35
        echo ($context["about_second_block_image"] ?? null);
        echo "\">
        
      </div>
    </div>
    <div class=\"about-pattern-second__content\">
        <div class=\"about-pattern-second__title title-large\">";
        // line 40
        echo ($context["about_second_block_title"] ?? null);
        echo "</div>
        <p class=\"about-pattern-second__text\">";
        // line 41
        echo ($context["about_second_block_text"] ?? null);
        echo "</p>
    </div>
</about-pattern-second>

<about-pattern-third class=\"about-pattern-third standard-layout block-layout\">
    <div class=\"about-pattern-third__decoratives\">
        <div class=\"about-pattern-third__decorative-first\">
          <img data-scroll=\"\" data-scroll-speed=\"-1\" src=\"/image/";
        // line 48
        echo ($context["about_second_block_decorative_image"] ?? null);
        echo "\">
        </div>
          
        <div class=\"about-pattern-third__decorative-second\">
          <img data-scroll=\"\" data-scroll-speed=\"0.5\" src=\"/image/";
        // line 52
        echo ($context["about_thrid_block_decorative_image"] ?? null);
        echo "\">
        </div>
      </div>
    <div class=\"about-pattern-third__content\">
        <div class=\"about-pattern-third__title title-large\">";
        // line 56
        echo ($context["about_thrid_block_title"] ?? null);
        echo "</div>
        <div class=\"about-pattern-third__textes\">
            <p class=\"about-pattern-third__text\">";
        // line 58
        echo ($context["about_thrid_block_left_text"] ?? null);
        echo "</p>
            <p class=\"about-pattern-third__text\">";
        // line 59
        echo ($context["about_thrid_block_right_text"] ?? null);
        echo "</p>
        </div>
    </div>
</about-pattern-third>




    ";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "
    ";
        // line 68
        echo ($context["column_right"] ?? null);
        echo "
";
        // line 69
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 69,  149 => 68,  145 => 67,  134 => 59,  130 => 58,  125 => 56,  118 => 52,  111 => 48,  101 => 41,  97 => 40,  89 => 35,  81 => 30,  68 => 20,  63 => 18,  54 => 12,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
