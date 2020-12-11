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

/* extension/shipping/russian_post.twig */
class __TwigTemplate_4e84e3e495ae87eeb4ea9ed7fe0062292d533af82050c4d6ba5e798a6943b1de extends \Twig\Template
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
\t    <button onclick=\"\$('#content #apply').attr('value', '1'); \$('#' + \$('#content form').attr('id')).submit();\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
        <button type=\"submit\" form=\"form-ups\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "\t";
        if (($context["error_success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-russian-post\" class=\"form-horizontal\">
\t\t  <input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t  <ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab-shipping\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_shipping"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-setting\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_setting"] ?? null);
        echo "</a></li>
\t\t  </ul>
\t\t  <div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab-shipping\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t  <ul class=\"nav nav-pills nav-stacked\" id=\"russian-post\">
\t\t\t\t\t";
        // line 44
        $context["module_row"] = 0;
        // line 45
        echo "\t\t\t\t\t";
        if (($context["shipping_russian_post"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_russian_post"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 47
                echo "\t\t\t\t\t<li class=\"row-";
                echo ($context["module_row"] ?? null);
                if ((($context["module_row"] ?? null) == 0)) {
                    echo " active ";
                }
                echo "\"><a class=\"item\" href=\"#tab-";
                echo ($context["module_row"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["module"], "type", [], "any", false, false, false, 47)] ?? null) : null);
                echo " <i class=\"pull-right fa fa-trash-o\" onclick=\"showAlert(); \$('.row-";
                echo ($context["module_row"] ?? null);
                echo "').remove(); \$('#russian-post a:first').tab('show');\"></i></a></li>
\t\t\t\t\t";
                // line 48
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 49
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t<li id=\"add-module\">
\t\t\t\t\t  <div class=\"input-group\">
                        <select name=\"select_shipping\" class=\"form-control\">
\t\t\t\t\t\t  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "\t\t\t\t\t\t  <option value=\"";
            echo $context["i"];
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null);
            echo "</option>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t\t</select>
                        <span class=\"input-group-btn\">
                          <span onclick=\"addModule();\" data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></span>
\t                    </span>
                      </div>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t  <div class=\"tab-content\">
\t\t\t\t\t";
        // line 67
        $context["module_row"] = 0;
        // line 68
        echo "\t\t\t\t\t";
        if (($context["shipping_russian_post"] ?? null)) {
            // line 69
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_russian_post"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 70
                echo "\t\t\t\t\t<div class=\"row-";
                echo ($context["module_row"] ?? null);
                echo " tab-pane";
                if ((($context["module_row"] ?? null) == 0)) {
                    echo " active ";
                }
                echo "\" id=\"tab-";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t\t  <input value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["module"], "type", [], "any", false, false, false, 71);
                echo "\" type=\"hidden\" name=\"shipping_russian_post[";
                echo ($context["module_row"] ?? null);
                echo "][type]\" />
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-free-";
                // line 73
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_free"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 75
                echo ($context["module_row"] ?? null);
                echo "][free]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "free", [], "any", false, false, false, 75);
                echo "\" id=\"input-free-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_free"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-min-limit-";
                // line 79
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_limit"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 83
                echo ($context["module_row"] ?? null);
                echo "][min_limit]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "min_limit", [], "any", false, false, false, 83);
                echo "\" id=\"input-min-limit-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_min_limit"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 86
                echo ($context["module_row"] ?? null);
                echo "][max_limit]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "max_limit", [], "any", false, false, false, 86);
                echo "\" id=\"input-max-limit-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_max_limit"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-cost-";
                // line 92
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_cost"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 96
                echo ($context["module_row"] ?? null);
                echo "][cost]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "cost", [], "any", false, false, false, 96);
                echo "\"  id=\"input-cost-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_cost"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t  <select name=\"shipping_russian_post[";
                // line 99
                echo ($context["module_row"] ?? null);
                echo "][cost_prefix]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["module"], "cost_prefix", [], "any", false, false, false, 100) == "+")) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"+\">+</option>
\t\t\t\t\t\t\t\t<option value=\"%\">%</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t<option value=\"+\">+</option>
\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"%\">%</option>
\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-max-shipping-time-";
                // line 113
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_max_shipping_time"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 115
                echo ($context["module_row"] ?? null);
                echo "][max_shipping_time]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "max_shipping_time", [], "any", false, false, false, 115);
                echo "\" id=\"input-max-shipping-time-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_max_shipping_time"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label class=\"col-sm-4 control-label\" for=\"input-split-";
                // line 119
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_split"] ?? null);
                echo "</label>
\t\t\t\t\t    <div class=\"col-sm-8\">
\t\t\t\t\t\t  <select name=\"shipping_russian_post[";
                // line 121
                echo ($context["module_row"] ?? null);
                echo "][split]\" id=\"input-split\" class=\"form-control\">
\t\t\t\t\t\t    ";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["module"], "split", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "\t\t\t\t\t\t    <option value=\"1\" selected=\"selected\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t    <option value=\"0\">";
                    // line 124
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 126
                    echo "\t\t\t\t\t\t    <option value=\"1\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t    <option value=\"0\" selected=\"selected\">";
                    // line 127
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t    ";
                }
                // line 129
                echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-max-split-";
                // line 133
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_max_split"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 135
                echo ($context["module_row"] ?? null);
                echo "][max_split]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "max_split", [], "any", false, false, false, 135);
                echo "\" id=\"input-max-split-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_max_split"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                // line 139
                echo ($context["entry_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <a href=\"\" id=\"thumb-image";
                // line 141
                echo ($context["module_row"] ?? null);
                echo "\" data-toggle=\"image\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "thumb", [], "any", false, false, false, 141);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" /></a><input type=\"hidden\" name=\"shipping_russian_post[";
                echo ($context["module_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "image", [], "any", false, false, false, 141);
                echo "\" id=\"input-image";
                echo ($context["module_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-tax-class-";
                // line 145
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_tax_class"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <select name=\"shipping_russian_post[";
                // line 147
                echo ($context["module_row"] ?? null);
                echo "][tax_class_id]\" id=\"input-tax-class-";
                echo ($context["module_row"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 148
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 150) == twig_get_attribute($this->env, $this->source, $context["module"], "tax_class_id", [], "any", false, false, false, 150))) {
                        // line 151
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 151);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 151);
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 153
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 153);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 153);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-geo-zone-";
                // line 160
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_geo_zone"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <select name=\"shipping_russian_post[";
                // line 162
                echo ($context["module_row"] ?? null);
                echo "][geo_zone_id]\" id=\"input-geo-zone-";
                echo ($context["module_row"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 163
                echo ($context["text_all_zones"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
                    // line 165
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 165) == twig_get_attribute($this->env, $this->source, $context["module"], "geo_zone_id", [], "any", false, false, false, 165))) {
                        // line 166
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 166);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 166);
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 168
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 168);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 168);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-status-";
                // line 175
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_status"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <select name=\"shipping_russian_post[";
                // line 177
                echo ($context["module_row"] ?? null);
                echo "][status]\" id=\"input-status-";
                echo ($context["module_row"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t";
                // line 178
                if (twig_get_attribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 178)) {
                    // line 179
                    echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
                    // line 180
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 182
                    echo "\t\t\t\t\t\t\t<option value=\"1\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 183
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-sort-order-";
                // line 189
                echo ($context["module_row"] ?? null);
                echo "\">";
                echo ($context["entry_sort_order"] ?? null);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t  <input type=\"text\" name=\"shipping_russian_post[";
                // line 191
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["module"], "sort_order", [], "any", false, false, false, 191);
                echo "\" id=\"input-sort-order-";
                echo ($context["module_row"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_sort_order"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 195
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 196
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t\t\t\t\t";
        } else {
            // line 198
            echo "\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_no_shipping"] ?? null);
            echo " 
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t\t<div id=\"new-tab\"></div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-setting\">
\t\t\t  <fieldset>
                <legend>";
        // line 208
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-ststus\">";
        // line 210
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_status\" id=\"input-ststus\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 213
        if (($context["shipping_russian_post_status"] ?? null)) {
            // line 214
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 215
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 217
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 218
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 220
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 224
        echo ($context["entry_key"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_key\" value=\"";
        // line 226
        echo ($context["shipping_russian_post_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" id=\"input-key\" class=\"form-control\" />
\t\t\t\t\t";
        // line 227
        if (($context["error_key"] ?? null)) {
            // line 228
            echo "\t\t\t\t    <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
\t\t\t\t    ";
        }
        // line 230
        echo "\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-type-query\">";
        // line 233
        echo ($context["entry_type_query"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_type_query\" id=\"input-type-query\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 236
        if (($context["shipping_russian_post_type_query"] ?? null)) {
            // line 237
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_api"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 238
            echo ($context["text_light"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 240
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_api"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 241
            echo ($context["text_light"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 243
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-server\">";
        // line 247
        echo ($context["entry_server"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_server\" id=\"input-server\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 250
        if ((($context["shipping_russian_post_server"] ?? null) == "test.postcalc.ru")) {
            // line 251
            echo "\t\t\t\t\t  <option value=\"api.postcalc.ru\">";
            echo ($context["text_api_postcalc"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"test.postcalc.ru\" selected=\"selected\">";
            // line 252
            echo ($context["text_test_postcalc"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 254
            echo "\t\t\t\t\t  <option value=\"api.postcalc.ru\" selected=\"selected\">";
            echo ($context["text_api_postcalc"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"test.postcalc.ru\">";
            // line 255
            echo ($context["text_test_postcalc"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 257
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 261
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_sort_order\" value=\"";
        // line 263
        echo ($context["shipping_russian_post_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-show-image\">";
        // line 267
        echo ($context["entry_show_image"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_show_image\" id=\"input-show-image\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 270
        if (($context["shipping_russian_post_show_image"] ?? null)) {
            // line 271
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 272
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 274
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 275
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 277
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-image-width\"><span data-toggle=\"tooltip\" title=\"";
        // line 281
        echo ($context["help_image_size"] ?? null);
        echo "\">";
        echo ($context["entry_image_size"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <div class=\"row\">
\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_image_width\" value=\"";
        // line 285
        echo ($context["shipping_russian_post_image_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-width\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_image_height\" value=\"";
        // line 288
        echo ($context["shipping_russian_post_image_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-debug\">";
        // line 294
        echo ($context["entry_debug"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_debug\" id=\"input-debug\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 297
        if (($context["shipping_russian_post_debug"] ?? null)) {
            // line 298
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 299
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 301
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 302
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 304
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </fieldset>
\t\t\t  <fieldset>
                <legend>";
        // line 309
        echo ($context["text_cart"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 311
        echo ($context["help_weight_class"] ?? null);
        echo "\">";
        echo ($context["entry_weight_class"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 315
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 315) == ($context["shipping_russian_post_weight_class_id"] ?? null))) {
                // line 316
                echo "\t\t\t\t\t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 316);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 316);
                echo "</option>
\t\t\t\t\t  ";
            } else {
                // line 318
                echo "\t\t\t\t\t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 318);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 318);
                echo "</option>
\t\t\t\t\t  ";
            }
            // line 320
            echo "\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 325
        echo ($context["entry_weight"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_weight\" value=\"";
        // line 327
        echo ($context["shipping_russian_post_weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-package\">";
        // line 331
        echo ($context["entry_package"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <div class=\"row\">
\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_package[weight]\" value=\"";
        // line 335
        echo twig_get_attribute($this->env, $this->source, ($context["shipping_russian_post_package"] ?? null), "weight", [], "any", false, false, false, 335);
        echo "\" id=\"input-package\" placeholder=\"";
        echo ($context["entry_package"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t    <select name=\"shipping_russian_post_package[prefix]\" class=\"form-control\">
\t\t\t\t\t\t  ";
        // line 339
        if ((twig_get_attribute($this->env, $this->source, ($context["shipping_russian_post_package"] ?? null), "prefix", [], "any", false, false, false, 339) == "+")) {
            // line 340
            echo "\t\t\t\t\t\t  <option selected=\"selected\" value=\"+\">+</option>
\t\t\t\t\t\t  <option value=\"%\">%</option>
\t\t\t\t\t\t  ";
        } else {
            // line 343
            echo "\t\t\t\t\t\t  <option value=\"+\">+</option>
\t\t\t\t\t\t  <option selected=\"selected\" value=\"%\">%</option>
\t\t\t\t\t\t  ";
        }
        // line 346
        echo "\t\t\t\t\t    </select>
\t\t\t\t\t  </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-declare\">";
        // line 352
        echo ($context["entry_declare"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_declare\" id=\"input-declare\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 355
        if (($context["shipping_russian_post_declare"] ?? null)) {
            // line 356
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 357
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 359
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 360
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 362
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </fieldset>
\t\t\t  <fieldset>
                <legend>";
        // line 367
        echo ($context["text_shipping"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-postcode-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 369
        echo ($context["help_postcode_default"] ?? null);
        echo "\">";
        echo ($context["entry_postcode_default"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_postcode_default\" value=\"";
        // line 371
        echo ($context["shipping_russian_post_postcode_default"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode_default"] ?? null);
        echo "\" id=\"input-postcode-default\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group required\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 375
        echo ($context["entry_city"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_city\" value=\"";
        // line 377
        echo ($context["shipping_russian_post_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city\" class=\"form-control\" />
\t\t\t\t    ";
        // line 378
        if (($context["error_city"] ?? null)) {
            // line 379
            echo "\t\t\t\t    <div class=\"text-danger\">";
            echo ($context["error_city"] ?? null);
            echo "</div>
\t\t\t\t    ";
        }
        // line 381
        echo "\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group required\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 384
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <input type=\"text\" name=\"shipping_russian_post_postcode\" value=\"";
        // line 386
        echo ($context["shipping_russian_post_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
\t\t\t\t    ";
        // line 387
        if (($context["error_postcode"] ?? null)) {
            // line 388
            echo "\t\t\t\t    <div class=\"text-danger\">";
            echo ($context["error_postcode"] ?? null);
            echo "</div>
\t\t\t\t    ";
        }
        // line 390
        echo "\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-show-shipping-time\">";
        // line 393
        echo ($context["entry_show_shipping_time"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_show_shipping_time\" id=\"input-show-shipping-time\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 396
        if (($context["shipping_russian_post_show_shipping_time"] ?? null)) {
            // line 397
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 398
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 400
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 401
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 403
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-split\">";
        // line 407
        echo ($context["entry_split"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_split\" id=\"input-split\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 410
        if (($context["shipping_russian_post_split"] ?? null)) {
            // line 411
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 412
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 414
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 415
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 417
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-hide\">";
        // line 421
        echo ($context["entry_hide"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t    <select name=\"shipping_russian_post_hide\" id=\"input-hide\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 424
        if (($context["shipping_russian_post_hide"] ?? null)) {
            // line 425
            echo "\t\t\t\t\t  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\">";
            // line 426
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        } else {
            // line 428
            echo "\t\t\t\t\t  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            // line 429
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t  ";
        }
        // line 431
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </fieldset>
\t\t\t</div>
\t\t  </div>
\t\t</form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
function showAlert() {
\tif (\$('#russian-post li').length == 2) {
\t\t\$('#new-tab').before('<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 445
        echo ($context["text_no_shipping"] ?? null);
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');\t
\t}
}

var module_row = ";
        // line 449
        echo ($context["module_row"] ?? null);
        echo ";

function addModule() {
\t\$('.alert-info').remove();
\t
\tvar type_val = \$('select[name=\\'select_shipping\\']').val();
\tvar type_text = \$('select[name=\\'select_shipping\\'] option:selected').text();
\t
\thtml   = '<div class=\"row-' + module_row + ' tab-pane\" id=\"tab-' + module_row + '\">';
\t
\thtml  += '<input value=\"' + type_val + '\" type=\"hidden\" name=\"shipping_russian_post[' + module_row + '][type]\" />';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-free-' + module_row + '\">";
        // line 461
        echo ($context["entry_free"] ?? null);
        echo "</label><div class=\"col-sm-8\"><input type=\"text\" name=\"shipping_russian_post[' + module_row + '][free]\" value=\"\" id=\"input-free-' + module_row + '\" placeholder=\"";
        echo ($context["entry_free"] ?? null);
        echo "\" class=\"form-control\" /></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-min-limit-' + module_row + '\">";
        // line 463
        echo ($context["entry_limit"] ?? null);
        echo "</label><div class=\"col-sm-8\"><div class=\"row\"><div class=\"col-sm-6\"><input type=\"text\" name=\"russian_post[' + module_row + '][min_limit]\" value=\"\" id=\"input-min-limit-' + module_row + '\" placeholder=\"";
        echo ($context["entry_min_limit"] ?? null);
        echo "\" class=\"form-control\" /></div><div class=\"col-sm-6\"><input type=\"text\" name=\"russian_post[' + module_row + '][max_limit]\" value=\"\" id=\"input-max-limit-' + module_row + '\" placeholder=\"";
        echo ($context["entry_max_limit"] ?? null);
        echo "\" class=\"form-control\" /></div></div></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-cost-' + module_row + '\">";
        // line 465
        echo ($context["entry_cost"] ?? null);
        echo "</label><div class=\"col-sm-8\"><div class=\"row\"><div class=\"col-sm-6\"><input type=\"text\" name=\"shipping_russian_post[' + module_row + '][cost]\" value=\"\" id=\"input-cost-' + module_row + '\" placeholder=\"";
        echo ($context["entry_cost"] ?? null);
        echo "\" class=\"form-control\" /></div><div class=\"col-sm-6\"><select name=\"shipping_russian_post[' + module_row + '][cost_prefix]\" class=\"form-control\"><option value=\"+\">+</option><option value=\"%\">%</option></select></div></div></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-max-shipping-time-' + module_row + '\">";
        // line 467
        echo ($context["entry_max_shipping_time"] ?? null);
        echo "</label><div class=\"col-sm-8\"><input type=\"text\" name=\"shipping_russian_post[' + module_row + '][max_shipping_time]\" value=\"\" id=\"input-max-shipping-time-' + module_row + '\" placeholder=\"";
        echo ($context["entry_max_shipping_time"] ?? null);
        echo "\" class=\"form-control\" /></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-split-' + module_row + '\">";
        // line 469
        echo ($context["entry_split"] ?? null);
        echo "</label><div class=\"col-sm-8\"><select name=\"russian_post[' + module_row + '][split]\" id=\"input-split\" placeholder=\"";
        echo ($context["entry_split"] ?? null);
        echo "\"  class=\"form-control\"><option value=\"1\">";
        echo ($context["text_enabled"] ?? null);
        echo "</option><option value=\"0\" selected=\"selected\">";
        echo ($context["text_disabled"] ?? null);
        echo "</option></select></div></div>';
\t\t\t\t\t  
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-max-split-' + module_row + '\">";
        // line 471
        echo ($context["entry_max_split"] ?? null);
        echo "</label><div class=\"col-sm-8\"><input type=\"text\" name=\"russian_post[' + module_row + '][max_split]\" value=\"\" id=\"input-max-split-' + module_row + '\" placeholder=\"";
        echo ($context["entry_max_split"] ?? null);
        echo "\" class=\"form-control\" /></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\">";
        // line 473
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-8\"><a href=\"\" id=\"thumb-image' + module_row + '\" data-toggle=\"image\"><img src=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"shipping_russian_post[' + module_row + '][image]\" value=\"\" id=\"input-image' + module_row + '\" /></div></div>';
\t
\thtml  += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-tax-class-' + module_row + '\">";
        // line 475
        echo ($context["entry_tax_class"] ?? null);
        echo "</label><div class=\"col-sm-8\"><select name=\"shipping_russian_post[' + module_row + '][tax_class_id]\" id=\"input-tax-class-' + module_row + '\" class=\"form-control\"><option value=\"0\">";
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t
\t";
        // line 477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 478
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 478);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 478);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "\t
\thtml += '</select></div></div>';
\t
\thtml += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-geo-zone-' + module_row + '\">";
        // line 483
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label><div class=\"col-sm-8\"><select name=\"shipping_russian_post[' + module_row + '][geo_zone_id]\" id=\"input-geo-zone-' + module_row + '\" class=\"form-control\"><option value=\"0\">";
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';
    
\t";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 486
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 486);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 486);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "\t
\thtml += '</select></div></div>';
\t
\thtml += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-status-' + module_row + '\">";
        // line 491
        echo ($context["entry_status"] ?? null);
        echo "</label><div class=\"col-sm-8\"><select name=\"shipping_russian_post[' + module_row + '][status]\" id=\"input-status-' + module_row + '\" class=\"form-control\"><option selected=\"selected\" value=\"1\">";
        echo ($context["text_enabled"] ?? null);
        echo "</option><option value=\"0\">";
        echo ($context["text_disabled"] ?? null);
        echo "</option></select></select></div></div>';
\t
\thtml += '<div class=\"form-group\"><label class=\"col-sm-4 control-label\" for=\"input-sort-order-' + module_row + '\">";
        // line 493
        echo ($context["entry_sort_order"] ?? null);
        echo "</label><div class=\"col-sm-8\"><input type=\"text\" name=\"shipping_russian_post[' + module_row + '][sort_order]\" value=\"\" id=\"input-sort-order-' + module_row + '\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></div></div></div>';\t\t\t\t

\t\$('#new-tab').before(html);
\t
\thtml2 = '<li class=\"row-' + module_row + '\"><a href=\"#tab-' + module_row + '\" data-toggle=\"tab\">' + type_text + ' <i class=\"pull-right fa fa-trash-o\" onclick=\"showAlert(); \$(\\'.row-' + module_row + '\\').remove(); \$(\\'#russian-post a:first\\').tab(\\'show\\')\"></i></a></li>';
\t
\t\$('#add-module').before(html2);
\t
\t\$('#russian-post a:last').tab('show');

\tmodule_row++;
}
//--></script>
";
        // line 506
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/russian_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1345 => 506,  1327 => 493,  1318 => 491,  1313 => 488,  1302 => 486,  1298 => 485,  1291 => 483,  1286 => 480,  1275 => 478,  1271 => 477,  1264 => 475,  1255 => 473,  1248 => 471,  1237 => 469,  1230 => 467,  1223 => 465,  1214 => 463,  1207 => 461,  1192 => 449,  1185 => 445,  1169 => 431,  1164 => 429,  1159 => 428,  1154 => 426,  1149 => 425,  1147 => 424,  1141 => 421,  1135 => 417,  1130 => 415,  1125 => 414,  1120 => 412,  1115 => 411,  1113 => 410,  1107 => 407,  1101 => 403,  1096 => 401,  1091 => 400,  1086 => 398,  1081 => 397,  1079 => 396,  1073 => 393,  1068 => 390,  1062 => 388,  1060 => 387,  1054 => 386,  1049 => 384,  1044 => 381,  1038 => 379,  1036 => 378,  1030 => 377,  1025 => 375,  1016 => 371,  1009 => 369,  1004 => 367,  997 => 362,  992 => 360,  987 => 359,  982 => 357,  977 => 356,  975 => 355,  969 => 352,  961 => 346,  956 => 343,  951 => 340,  949 => 339,  940 => 335,  933 => 331,  924 => 327,  919 => 325,  913 => 321,  907 => 320,  899 => 318,  891 => 316,  888 => 315,  884 => 314,  876 => 311,  871 => 309,  864 => 304,  859 => 302,  854 => 301,  849 => 299,  844 => 298,  842 => 297,  836 => 294,  825 => 288,  817 => 285,  808 => 281,  802 => 277,  797 => 275,  792 => 274,  787 => 272,  782 => 271,  780 => 270,  774 => 267,  765 => 263,  760 => 261,  754 => 257,  749 => 255,  744 => 254,  739 => 252,  734 => 251,  732 => 250,  726 => 247,  720 => 243,  715 => 241,  710 => 240,  705 => 238,  700 => 237,  698 => 236,  692 => 233,  687 => 230,  681 => 228,  679 => 227,  673 => 226,  668 => 224,  662 => 220,  657 => 218,  652 => 217,  647 => 215,  642 => 214,  640 => 213,  634 => 210,  629 => 208,  620 => 201,  613 => 198,  610 => 197,  604 => 196,  602 => 195,  589 => 191,  582 => 189,  576 => 185,  571 => 183,  566 => 182,  561 => 180,  556 => 179,  554 => 178,  548 => 177,  541 => 175,  535 => 171,  529 => 170,  521 => 168,  513 => 166,  510 => 165,  506 => 164,  502 => 163,  496 => 162,  489 => 160,  483 => 156,  477 => 155,  469 => 153,  461 => 151,  458 => 150,  454 => 149,  450 => 148,  444 => 147,  437 => 145,  420 => 141,  415 => 139,  402 => 135,  395 => 133,  389 => 129,  384 => 127,  379 => 126,  374 => 124,  369 => 123,  367 => 122,  363 => 121,  356 => 119,  343 => 115,  336 => 113,  328 => 107,  323 => 104,  318 => 101,  316 => 100,  312 => 99,  300 => 96,  291 => 92,  276 => 86,  264 => 83,  255 => 79,  242 => 75,  235 => 73,  228 => 71,  217 => 70,  212 => 69,  209 => 68,  207 => 67,  196 => 59,  192 => 57,  181 => 55,  177 => 54,  172 => 51,  169 => 50,  163 => 49,  161 => 48,  147 => 47,  142 => 46,  139 => 45,  137 => 44,  127 => 37,  123 => 36,  117 => 33,  111 => 30,  107 => 28,  99 => 24,  96 => 23,  88 => 19,  86 => 18,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/russian_post.twig", "");
    }
}
