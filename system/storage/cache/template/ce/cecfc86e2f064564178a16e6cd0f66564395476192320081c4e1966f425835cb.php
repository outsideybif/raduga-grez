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

/* default/template/stories/story.twig */
class __TwigTemplate_9096d6b1f9279ebe71f1cc7dc94c143a12db60e3c7fd55bf331f4c6da108abf8 extends \Twig\Template
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

<stories-header class=\"stories-header\">
  <div class=\"stories-header__text-wrapper\">
    <div class=\"stories-header__date\" style=\"color:";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title_color", [], "any", false, false, false, 5);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "added_date", [], "any", false, false, false, 5);
        echo "</div>
    <div class=\"stories-header__title\" style=\"color:";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title_color", [], "any", false, false, false, 6);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "title", [], "any", false, false, false, 6);
        echo "</div>
  </div>
  <div class=\"stories-header__decorative-image\">

    

      ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "video", [], "any", false, false, false, 12) != "")) {
            // line 13
            echo "      <video data-scroll=\"\" data-scroll-speed=\"-1\" autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\"><source src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "video", [], "any", false, false, false, 13);
            echo "\"></video>
      ";
        } else {
            // line 15
            echo "      <img data-scroll=\"\" data-scroll-speed=\"-1\" src=\"./image/";
            echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "image", [], "any", false, false, false, 15);
            echo "\" class=\"is-inview\" >
      ";
        }
        // line 17
        echo "

  </div>
</stories-header>


";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 24
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["ct"], "content", [], "any", false, false, false, 24);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

<stories-footer class=\"stories-footer\">
  <div class=\"stories-footer__author-wrappers\">
    <div class=\"stories-footer__author-wrapper\">
      <div class=\"stories-footer__author-label\">Photo:</div>
      <div class=\"stories-footer__author-value\">";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "author_photo", [], "any", false, false, false, 32);
        echo "</div>
    </div>
    <div class=\"stories-footer__author-wrapper\">
      <div class=\"stories-footer__author-label\">Style:</div>
      <div class=\"stories-footer__author-value\">";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "author_style", [], "any", false, false, false, 36);
        echo "</div>
    </div>
    <div class=\"stories-footer__author-wrapper\">
      <div class=\"stories-footer__author-label\">Video:</div>
      <div class=\"stories-footer__author-value\">";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["story"] ?? null), "author_video", [], "any", false, false, false, 40);
        echo "</div>
    </div>
  </div>
</stories-footer>




<stories-next class=\"stories-next\">
   <div class=\"stories-next__story-next-information\">
      <div class=\"stories-next__next-label\">Next story:</div>
      <div class=\"stories-next__next-title\">";
        // line 51
        echo twig_get_attribute($this->env, $this->source, ($context["nextStory"] ?? null), "title", [], "any", false, false, false, 51);
        echo "</div>
   </div>
   <div class=\"stories-next__story-next-image-wrapper\">
      <div class=\"stories-next__story-next-image\"><img src=\"";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["nextStory"] ?? null), "thumb", [], "any", false, false, false, 54);
        echo "\"></div>
      <a class=\"stories-next__action\" href=\"";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["nextStory"] ?? null), "href", [], "any", false, false, false, 55);
        echo "\">
         <circle-button class=\"circle-button white\">
            View more
         </circle-button>
      </a>
   </div>
</stories-next>


";
        // line 64
        echo ($context["footer"] ?? null);
        echo " 







";
    }

    public function getTemplateName()
    {
        return "default/template/stories/story.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 64,  142 => 55,  138 => 54,  132 => 51,  118 => 40,  111 => 36,  104 => 32,  96 => 26,  87 => 24,  83 => 23,  75 => 17,  69 => 15,  63 => 13,  61 => 12,  50 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/stories/story.twig", "");
    }
}
