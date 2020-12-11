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

/* default/template/error/not_found.twig */
class __TwigTemplate_ec2420d8922725c0946b2576b8e1e27449c6220f2102ab4c227c6b32e316d8dd extends \Twig\Template
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
<div class=\"information-auxiliary-block block-layout-navigation\">
    <div class=\"information-auxiliary-block__wrapper\">
        <div class=\"information-auxiliary-block__title title-medium-second\" animation=\"fade-up\" animation-delay=\"0\">404</div>
        <div class=\"information-auxiliary-block__content\"  animation=\"fade-up\" animation-delay=\"0.2\">
            <p> <span>This page not found. Maybe you want to be inspired by our </span><a class=\"underline dark\" href=\"/\">homepage</a><span>?</span></p>
        </div>
        <div class=\"information-auxiliary-block__media\"  animation=\"fade-up\" animation-delay=\"0.4\"><img src=\"./catalog/view/theme/default/assets/images/404.png\"></div>
    </div>
</div>
";
        // line 11
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/error/not_found.twig", "");
    }
}
