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

/* rcf/faq.twig */
class __TwigTemplate_c142c95dc8ec08745130bf3529862a7c0504251e962757211af5e496a8a4d19d extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>

  <form action=\"";
        // line 20
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\" class=\"form-horizontal\"></form>
  <form id=\"deleteForm\" action=\"/post/dispatch/delete\" method=\"post\"></form>



  <div class=\"container-fluid\">";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
       
          <ul class=\"nav nav-tabs\">

            
            ";
        // line 39
        $context["blockIndex"] = 0;
        // line 40
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockItem"]) {
            // line 41
            echo "                <li class=\"";
            if ((($context["blockIndex"] ?? null) == 0)) {
                echo "active";
            }
            echo "\"><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "custom_block_id", [], "any", false, false, false, 41);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "name", [], "any", false, false, false, 41);
            echo "</a></li>
                ";
            // line 42
            $context["blockIndex"] = (($context["blockIndex"] ?? null) + 1);
            // line 43
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            

          </ul>
          <div class=\"tab-content\">
           

            ";
        // line 50
        $context["blockIndex"] = 0;
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockItem"]) {
            // line 52
            echo "                <div class=\"tab-pane ";
            if ((($context["blockIndex"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "custom_block_id", [], "any", false, false, false, 52);
            echo "\">
                    <h1>";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "name", [], "any", false, false, false, 53);
            echo "</h1>


                    
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blockItem"], "fields", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 58
                echo "                        <div class=\"form-group row\">
                            <div class=\"col-sm-2\">
                                <label class=\"control-label\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 60);
                echo "</label>
                            </div>
                            <div class=\"col-sm-10\">
                                ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type_id", [], "any", false, false, false, 63) == 1)) {
                    // line 64
                    echo "                                    <input type=\"text\" name=\"block[";
                    echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "custom_block_id", [], "any", false, false, false, 64);
                    echo "]['fields'][";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "custom_page_field_id", [], "any", false, false, false, 64);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 64);
                    echo "\" placeholder=\"Link\" id=\"input-link\" class=\"form-control\" form=\"form-information\"/>
                                ";
                }
                // line 66
                echo "
                                ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type_id", [], "any", false, false, false, 67) == 2)) {
                    // line 68
                    echo "                                    <input type=\"text\" name=\"block[";
                    echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "custom_block_id", [], "any", false, false, false, 68);
                    echo "]['fields'][";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "custom_page_field_id", [], "any", false, false, false, 68);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 68);
                    echo "\" placeholder=\"Link\" id=\"input-link\" class=\"form-control\" form=\"form-information\"/>
                                ";
                }
                // line 70
                echo "

                                ";
                // line 72
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type_id", [], "any", false, false, false, 72) == 3)) {
                    // line 73
                    echo "
                                    <div>
                                        <a href=\"\" id=\"thumb-image";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "custom_page_field_id", [], "any", false, false, false, 75);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                                            <img src=\"../image/";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 76);
                    echo "\" alt=\"\" title=\"\" style=\"width:200px\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" />
                                        </a>
                                        <input type=\"hidden\" name=\"block[";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["blockItem"], "custom_block_id", [], "any", false, false, false, 78);
                    echo "]['fields'][";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "custom_page_field_id", [], "any", false, false, false, 78);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 78);
                    echo "\" id=\"input-image";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "custom_page_field_id", [], "any", false, false, false, 78);
                    echo "\" form=\"form-information\"/>
                                    </div>

                                ";
                }
                // line 82
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type_id", [], "any", false, false, false, 82) == 13)) {
                    // line 83
                    echo "
                                    ";
                    // line 147
                    echo "


                                ";
                }
                // line 151
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "

                </div>

                ";
            // line 158
            $context["blockIndex"] = (($context["blockIndex"] ?? null) + 1);
            // line 159
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
            
          </div>
       
      </div>
    </div>
  </div>



    <script>
    
    var attribute_row = ";
        // line 172
        echo ($context["attribute_row"] ?? null);
        echo ";

    function addAttribute() {
        html = '<tr id=\"attribute-row' + attribute_row + '\">';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 176
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
        html += '  <td class=\"text-left\">';
        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 179
            echo "        html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 179);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 179);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 179);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 179);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "        html += '  </td>';
        html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 182
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#attribute tbody').append(html);

        attributeautocomplete(attribute_row);

        attribute_row++;
    }
    
    </script>



  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div> 
";
        // line 208
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "rcf/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 208,  333 => 182,  330 => 181,  313 => 179,  309 => 178,  304 => 176,  297 => 172,  283 => 160,  277 => 159,  275 => 158,  269 => 154,  261 => 151,  255 => 147,  252 => 83,  249 => 82,  236 => 78,  229 => 76,  225 => 75,  221 => 73,  219 => 72,  215 => 70,  205 => 68,  203 => 67,  200 => 66,  190 => 64,  188 => 63,  182 => 60,  178 => 58,  174 => 57,  167 => 53,  158 => 52,  153 => 51,  151 => 50,  143 => 44,  137 => 43,  135 => 42,  124 => 41,  119 => 40,  117 => 39,  107 => 32,  103 => 30,  95 => 26,  93 => 25,  85 => 20,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  53 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "rcf/faq.twig", "");
    }
}
