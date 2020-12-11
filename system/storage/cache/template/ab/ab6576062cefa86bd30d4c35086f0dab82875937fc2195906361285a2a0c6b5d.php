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

/* stories/stories_list.twig */
class __TwigTemplate_cc5653a7bb6959155dfa4056cc8ee8aeef9f0e7d912bef052bd1213fecfa5bda extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "







<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 12
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 34
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 36
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 39
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 49
        echo "</td>
                  <td class=\"text-right\">";
        // line 50
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            // line 51
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 54
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        if (($context["stories"] ?? null)) {
            // line 60
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
                // line 61
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 62
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["story"], "story_id", [], "any", false, false, false, 62), ($context["selected"] ?? null))) {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["story"], "story_id", [], "any", false, false, false, 63);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 65
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["story"], "story_id", [], "any", false, false, false, 65);
                    echo "\" />
                    ";
                }
                // line 66
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["story"], "sort_order", [], "any", false, false, false, 68);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["story"], "edit", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        } else {
            // line 73
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 74
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 77
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 82
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 83
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>














";
        // line 103
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "stories/stories_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 103,  253 => 83,  249 => 82,  242 => 77,  236 => 74,  233 => 73,  230 => 72,  219 => 69,  215 => 68,  211 => 67,  208 => 66,  202 => 65,  196 => 63,  194 => 62,  191 => 61,  186 => 60,  184 => 59,  177 => 55,  174 => 54,  166 => 53,  156 => 51,  154 => 50,  151 => 49,  143 => 48,  133 => 46,  131 => 45,  122 => 39,  116 => 36,  112 => 34,  104 => 30,  101 => 29,  93 => 25,  91 => 24,  85 => 20,  74 => 18,  70 => 17,  65 => 15,  58 => 13,  52 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "stories/stories_list.twig", "");
    }
}
