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

/* extension/shipping/hitdhlexpress.twig */
class __TwigTemplate_dc2eb9fe5590492b153a0f8346a1deed129ad838f286d855567622472d5daa37 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "
    <form action=\"";
        // line 24
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-licence\" class=\"form-horizontal\" style=\"display:none;\">
      <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-key\"></i> ";
        // line 27
        echo ($context["text_info"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul>
          <li> <label class=\"\">";
        // line 31
        echo ($context["text_info1"] ?? null);
        echo "</label></li>
          <li> <label class=\"\">";
        // line 32
        echo ($context["text_info2"] ?? null);
        echo "</label></li>
          <li> <label class=\"\">";
        // line 33
        echo ($context["text_info3"] ?? null);
        echo "</label></li>
          <li> <label class=\"\">";
        // line 34
        echo ($context["text_info4"] ?? null);
        echo "</label></li>
         </ul>
        <div>
         ";
        // line 37
        if ((($context["shipping_hitdhlexpress_licence_status_licence"] ?? null) == "Activated")) {
            // line 38
            echo "          <ul>
          <li> <label style=\"color:Green;\">Your Site Licence Is Activated.</label></li>
          <li> <label style=\"color:red;\">Licence will Expires On ";
            // line 40
            echo ($context["shipping_hitdhlexpress_licence_expires"] ?? null);
            echo ".</label></li>
          <li> <a target=\"_blank\" href=\"https://hittechmarket.com/checkout/?edd_license_key=";
            // line 41
            echo ($context["shipping_hitdhlexpress_licence_licence"] ?? null);
            echo "&download_id=2288\"><label style=\"    cursor: pointer;\"> Renewal Link </label></a></li>
         </ul>
           
       
        ";
        } else {
            // line 46
            echo "        <label class=\"\">Licence Key</label> <input type=\"text\" name=\"shipping_hitdhlexpress_licence_licence\" class=\"form-control\" placeholder=\"Enter Licence key\"> <br/>
        <label class=\"\">Purchased Email Address</label> <input type=\"text\" name=\"shipping_hitdhlexpress_licence_email\" class=\"form-control\" placeholder=\"Enter Email Adress\">
        <br/>
        <button type=\"submit\" form=\"form-licence\" data-toggle=\"tooltip\" title=\"Activate\" class=\"btn btn-primary\" name=\"btn_licence_activation\"><i class=\"fa fa-key\" ></i> Activate Licence Key</button>
 
      ";
        }
        // line 52
        echo "        </div>
      </div>
    </div>
    </form>
    ";
        // line 56
        if ((($context["shipping_hitdhlexpress_renew_status_licence"] ?? null) == "Expired")) {
            // line 57
            echo "
         <form action=\"";
            // line 58
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-renew\" class=\"form-horizontal\">
      <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-key\"></i> Renew Licence Key</h3>
      </div>
      <div class=\"panel-body\">
        <ul>
          <li> <label class=\"\" style=\"color:red;\">Without Licence Activation, You will not get Updates email from HIT TECH</label></li>
          <li> <label class=\"\" style=\"color:red;\">Without Licence Activation, You will not get Support from HIT TECH</label></li>
         </ul>
        <div>
         
        <label class=\"\">Licence Key</label> <input type=\"text\" name=\"shipping_hitdhlexpress_renew_licence\" value =\"";
            // line 70
            echo ($context["shipping_hitdhlexpress_licence_licence"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"Enter Licence key\"> <br/>
        <label class=\"\">Purchased Email Address</label> <input type=\"text\" name=\"shipping_hitdhlexpress_renew_email\" value =\"";
            // line 71
            echo ($context["shipping_hitdhlexpress_licence_email"] ?? null);
            echo "\"  class=\"form-control\" placeholder=\"Enter Email Adress\">
        <br/>
        <button type=\"submit\" form=\"form-renew\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\"  name=\"btn_renew_activation\"><i class=\"fa fa-key\" ></i> Renew Licence Key</button>

        </div>
      </div>
    </div>
    </form>

         <a target=\"_blank\" href=\"https://hittechmarket.com/checkout/?edd_license_key=";
            // line 80
            echo ($context["shipping_hitdhlexpress_licence_licence"] ?? null);
            echo "&download_id=2288\"><label style=\"    cursor: pointer;margin-left:10px;\"> Renewal Link </label></a>
    ";
        }
        // line 82
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
     <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 85
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 89
        echo ($context["entry_test"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 92
        if (($context["shipping_hitdhlexpress_test"] ?? null)) {
            // line 93
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 94
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 96
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_test\" value=\"1\" />
                ";
            // line 97
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 99
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 101
        if ( !($context["shipping_hitdhlexpress_test"] ?? null)) {
            // line 102
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 103
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 105
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_test\" value=\"0\" />
                ";
            // line 106
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 108
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 112
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_key\" value=\"";
        // line 114
        echo ($context["shipping_hitdhlexpress_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 115
        if (($context["error_key"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
            <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 121
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_password\" value=\"";
        // line 123
        echo ($context["shipping_hitdhlexpress_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-account\" class=\"form-control\" />
             </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 128
        echo ($context["entry_account"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_account\" value=\"";
        // line 130
        echo ($context["shipping_hitdhlexpress_account"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_account"] ?? null);
        echo "\" id=\"input-account\" class=\"form-control\" />
              ";
        // line 131
        if (($context["error_account"] ?? null)) {
            // line 132
            echo "              <div class=\"text-danger\">";
            echo ($context["error_account"] ?? null);
            echo "</div>
              ";
        }
        // line 134
        echo "            </div>
          </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo ($context["entry_front_end_logs"] ?? null);
        echo "\">";
        echo ($context["entry_front_end_logs"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 140
        if (($context["shipping_hitdhlexpress_front_end_logs"] ?? null)) {
            // line 141
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_front_end_logs\" value=\"1\" checked=\"checked\" />
                ";
            // line 142
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 144
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_front_end_logs\" value=\"1\" />
                ";
            // line 145
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 147
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 149
        if ( !($context["shipping_hitdhlexpress_front_end_logs"] ?? null)) {
            // line 150
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_front_end_logs\" value=\"0\" checked=\"checked\" />
                ";
            // line 151
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 153
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_front_end_logs\" value=\"0\" />
                ";
            // line 154
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 156
        echo "              </label>
            </div>
          </div>
       <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 160
        echo ($context["help_display_time"] ?? null);
        echo "\">";
        echo ($context["entry_display_time"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 163
        if (($context["shipping_hitdhlexpress_display_time"] ?? null)) {
            // line 164
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_display_time\" value=\"1\" checked=\"checked\" />
                ";
            // line 165
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 167
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_display_time\" value=\"1\" />
                ";
            // line 168
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 170
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 172
        if ( !($context["shipping_hitdhlexpress_display_time"] ?? null)) {
            // line 173
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_display_time\" value=\"0\" checked=\"checked\" />
                ";
            // line 174
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 176
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_display_time\" value=\"0\" />
                ";
            // line 177
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 179
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 183
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 186
        if (($context["shipping_hitdhlexpress_status"] ?? null)) {
            // line 187
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 188
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 190
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 191
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 193
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 197
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_sort_order\" value=\"";
        // line 199
        echo ($context["shipping_hitdhlexpress_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 206
        echo ($context["text_shiiping_address"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-shipper_name\">";
        // line 210
        echo ($context["entry_shipper_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_shipper_name\" value=\"";
        // line 212
        echo ($context["shipping_hitdhlexpress_shipper_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_shipper_name"] ?? null);
        echo "\" id=\"input-shipper_name\" class=\"form-control\" />
              ";
        // line 213
        if (($context["error_shipper_name"] ?? null)) {
            // line 214
            echo "              <div class=\"text-danger\">";
            echo ($context["error_shipper_name"] ?? null);
            echo "</div>
              ";
        }
        // line 216
        echo "            </div>
          </div>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-company_name\">";
        // line 219
        echo ($context["entry_company_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_company_name\" value=\"";
        // line 221
        echo ($context["shipping_hitdhlexpress_company_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company_name"] ?? null);
        echo "\" id=\"input-company_name\" class=\"form-control\" />
              ";
        // line 222
        if (($context["error_company_name"] ?? null)) {
            // line 223
            echo "              <div class=\"text-danger\">";
            echo ($context["error_company_name"] ?? null);
            echo "</div>
              ";
        }
        // line 225
        echo "            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-phone_num\">";
        // line 228
        echo ($context["entry_phone_num"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_phone_num\" value=\"";
        // line 230
        echo ($context["shipping_hitdhlexpress_phone_num"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_phone_num"] ?? null);
        echo "\" id=\"input-phone_num\" class=\"form-control\" />
              ";
        // line 231
        if (($context["error_phone_num"] ?? null)) {
            // line 232
            echo "              <div class=\"text-danger\">";
            echo ($context["error_phone_num"] ?? null);
            echo "</div>
              ";
        }
        // line 234
        echo "            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email_addr\">";
        // line 237
        echo ($context["entry_email_addr"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_email_addr\" value=\"";
        // line 239
        echo ($context["shipping_hitdhlexpress_email_addr"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email_addr"] ?? null);
        echo "\" id=\"input-email_addr\" class=\"form-control\" />
              ";
        // line 240
        if (($context["error_email_addr"] ?? null)) {
            // line 241
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email_addr"] ?? null);
            echo "</div>
              ";
        }
        // line 243
        echo "            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-address1\">";
        // line 246
        echo ($context["entry_address1"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_address1\" value=\"";
        // line 248
        echo ($context["shipping_hitdhlexpress_address1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address1"] ?? null);
        echo "\" id=\"input-address1\" class=\"form-control\" />
              ";
        // line 249
        if (($context["error_address1"] ?? null)) {
            // line 250
            echo "              <div class=\"text-danger\">";
            echo ($context["error_address1"] ?? null);
            echo "</div>
              ";
        }
        // line 252
        echo "            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-address2\">";
        // line 255
        echo ($context["entry_address2"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_address2\" value=\"";
        // line 257
        echo ($context["shipping_hitdhlexpress_address2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address2"] ?? null);
        echo "\" id=\"input-address2\" class=\"form-control\" />
              ";
        // line 258
        if (($context["error_address2"] ?? null)) {
            // line 259
            echo "              <div class=\"text-danger\">";
            echo ($context["error_address2"] ?? null);
            echo "</div>
              ";
        }
        // line 261
        echo "            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 264
        echo ($context["entry_city"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_city\" value=\"";
        // line 266
        echo ($context["shipping_hitdhlexpress_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city\" class=\"form-control\" />
              ";
        // line 267
        if (($context["error_city"] ?? null)) {
            // line 268
            echo "              <div class=\"text-danger\">";
            echo ($context["error_city"] ?? null);
            echo "</div>
              ";
        }
        // line 270
        echo "            </div>
          </div>
      <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-state\">";
        // line 273
        echo ($context["entry_state"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_state\" value=\"";
        // line 275
        echo ($context["shipping_hitdhlexpress_state"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_state"] ?? null);
        echo "\" id=\"input-state\" class=\"form-control\" />
              ";
        // line 276
        if (($context["error_state"] ?? null)) {
            // line 277
            echo "              <div class=\"text-danger\">";
            echo ($context["error_state"] ?? null);
            echo "</div>
              ";
        }
        // line 279
        echo "            </div>
          </div>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-country_code\">";
        // line 282
        echo ($context["entry_country_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
        <select name=\"shipping_hitdhlexpress_country_code\" class=\"form-control control-label\">
        ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countrylist"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 286
            echo "        <option value=\"";
            echo $context["key"];
            echo "\" ";
            if (($context["key"] == ($context["shipping_hitdhlexpress_country_code"] ?? null))) {
                echo "selected=\"true\"";
            }
            echo ">";
            echo $context["value"];
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "        </select>
        
              ";
        // line 290
        if (($context["error_country_code"] ?? null)) {
            // line 291
            echo "              <div class=\"text-danger\">";
            echo ($context["error_country_code"] ?? null);
            echo "</div>
              ";
        }
        // line 293
        echo "            </div>
          </div>
        
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 297
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_postcode\" value=\"";
        // line 299
        echo ($context["shipping_hitdhlexpress_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
              ";
        // line 300
        if (($context["error_postcode"] ?? null)) {
            // line 301
            echo "              <div class=\"text-danger\">";
            echo ($context["error_postcode"] ?? null);
            echo "</div>
              ";
        }
        // line 303
        echo "            </div>
          </div>
          
    </div>
  </div>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 310
        echo ($context["text_rates"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 314
        echo ($context["entry_realtime_rates"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 317
        if (($context["shipping_hitdhlexpress_realtime_rates"] ?? null)) {
            // line 318
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_realtime_rates\" value=\"1\" checked=\"checked\" />
                ";
            // line 319
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 321
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_realtime_rates\" value=\"1\" />
                ";
            // line 322
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 324
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 326
        if ( !($context["shipping_hitdhlexpress_realtime_rates"] ?? null)) {
            // line 327
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_realtime_rates\" value=\"0\" checked=\"checked\" />
                ";
            // line 328
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 330
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_realtime_rates\" value=\"0\" />
                ";
            // line 331
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 333
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 337
        echo ($context["entry_show_etd"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 340
        if (($context["shipping_hitdhlexpress_show_etd"] ?? null)) {
            // line 341
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_show_etd\" value=\"1\" checked=\"checked\" />
                ";
            // line 342
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 344
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_show_etd\" value=\"1\" />
                ";
            // line 345
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 347
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 349
        if ( !($context["shipping_hitdhlexpress_show_etd"] ?? null)) {
            // line 350
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_show_etd\" value=\"0\" checked=\"checked\" />
                ";
            // line 351
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 353
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_show_etd\" value=\"0\" />
                ";
            // line 354
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 356
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 360
        echo ($context["entry_insurance"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 363
        if (($context["shipping_hitdhlexpress_insurance"] ?? null)) {
            // line 364
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_insurance\" value=\"1\" checked=\"checked\" />
                ";
            // line 365
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 367
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_insurance\" value=\"1\" />
                ";
            // line 368
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 370
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 372
        if ( !($context["shipping_hitdhlexpress_insurance"] ?? null)) {
            // line 373
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_insurance\" value=\"0\" checked=\"checked\" />
                ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 376
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_insurance\" value=\"0\" />
                ";
            // line 377
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 379
        echo "              </label>
            </div>
          </div>
     
       <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rate-type\">";
        // line 384
        echo ($context["entry_rate_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_rate_type\" id=\"input-rate-type\" class=\"form-control\">
                ";
        // line 387
        if ((($context["shipping_hitdhlexpress_rate_type"] ?? null) == "LIST")) {
            // line 388
            echo "                <option value=\"LIST\" selected=\"selected\">";
            echo ($context["text_list_rate"] ?? null);
            echo "</option>
                ";
        } else {
            // line 390
            echo "                <option value=\"LIST\">";
            echo ($context["text_list_rate"] ?? null);
            echo "</option>
                ";
        }
        // line 392
        echo "                ";
        if ((($context["shipping_hitdhlexpress_rate_type"] ?? null) == "ACCOUNT")) {
            // line 393
            echo "                <option value=\"ACCOUNT\" selected=\"selected\">";
            echo ($context["text_account_rate"] ?? null);
            echo "</option>
                ";
        } else {
            // line 395
            echo "                <option value=\"ACCOUNT\">";
            echo ($context["text_account_rate"] ?? null);
            echo "</option>
                ";
        }
        // line 397
        echo "              </select>
            </div>
          </div>
      
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 402
        echo ($context["entry_service"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 406
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 408
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 408), ($context["shipping_hitdhlexpress_service"] ?? null))) {
                // line 409
                echo "                    <input type=\"checkbox\" name=\"shipping_hitdhlexpress_service[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 409);
                echo "\" checked=\"checked\" />
                    ";
                // line 410
                echo twig_get_attribute($this->env, $this->source, $context["service"], "text", [], "any", false, false, false, 410);
                echo "
                    ";
            } else {
                // line 412
                echo "                    <input type=\"checkbox\" name=\"shipping_hitdhlexpress_service[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 412);
                echo "\" />
                    ";
                // line 413
                echo twig_get_attribute($this->env, $this->source, $context["service"], "text", [], "any", false, false, false, 413);
                echo "
                    ";
            }
            // line 415
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 419
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
      </div>
    </div>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 425
        echo ($context["text_packing"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
     <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 429
        echo ($context["_entry_weight"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 432
        if (($context["shipping_hitdhlexpress_weight"] ?? null)) {
            // line 433
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_weight\" value=\"1\" checked=\"checked\" />
                ";
            // line 434
            echo ($context["_entry_lbin"] ?? null);
            echo "
                ";
        } else {
            // line 436
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_weight\" value=\"1\" />
                ";
            // line 437
            echo ($context["_entry_lbin"] ?? null);
            echo "
                ";
        }
        // line 439
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 441
        if ( !($context["shipping_hitdhlexpress_weight"] ?? null)) {
            // line 442
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_weight\" value=\"0\" checked=\"checked\" />
                ";
            // line 443
            echo ($context["_entry_kgcm"] ?? null);
            echo "
                ";
        } else {
            // line 445
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_weight\" value=\"0\" />
                ";
            // line 446
            echo ($context["_entry_kgcm"] ?? null);
            echo "
                ";
        }
        // line 448
        echo "              </label>
            </div>
          </div>
       <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">";
        // line 452
        echo ($context["_entry_packing_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_packing_type\" id=\"input-packing-type\" class=\"form-control\">
                ";
        // line 455
        if ((($context["shipping_hitdhlexpress_packing_type"] ?? null) == "per_item")) {
            // line 456
            echo "                <option value=\"per_item\" selected=\"selected\">";
            echo ($context["text_per_item"] ?? null);
            echo "</option>
                ";
        } else {
            // line 458
            echo "                <option value=\"per_item\">";
            echo ($context["text_per_item"] ?? null);
            echo "</option>
                ";
        }
        // line 460
        echo "                ";
        if ((($context["shipping_hitdhlexpress_packing_type"] ?? null) == "weight_based")) {
            // line 461
            echo "                <option value=\"weight_based\" selected=\"selected\">";
            echo ($context["text_dhl_weight_based"] ?? null);
            echo "</option>
                ";
        } else {
            // line 463
            echo "                <option value=\"weight_based\">";
            echo ($context["text_dhl_weight_based"] ?? null);
            echo "</option>
                ";
        }
        // line 465
        echo "              </select>
            </div>
          </div>
         </div>
    </div>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 472
        echo ($context["text_peritem_head"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
    <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">";
        // line 476
        echo ($context["_entry_packing_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_per_item\" id=\"input-packing-type\" class=\"form-control\">
                ";
        // line 479
        if ((($context["shipping_hitdhlexpress_per_item"] ?? null) == "BOX")) {
            // line 480
            echo "                <option value=\"BOX\" selected=\"selected\">";
            echo ($context["text_box"] ?? null);
            echo "</option>
                ";
        } else {
            // line 482
            echo "                <option value=\"BOX\">";
            echo ($context["text_box"] ?? null);
            echo "</option>
                ";
        }
        // line 484
        echo "                ";
        if ((($context["shipping_hitdhlexpress_per_item"] ?? null) == "FLY")) {
            // line 485
            echo "                <option value=\"FLY\" selected=\"selected\">";
            echo ($context["text_fly"] ?? null);
            echo "</option>
                ";
        } else {
            // line 487
            echo "                <option value=\"FLY\">";
            echo ($context["text_fly"] ?? null);
            echo "</option>
                ";
        }
        // line 489
        echo "                ";
        if ((($context["shipping_hitdhlexpress_per_item"] ?? null) == "YP")) {
            // line 490
            echo "                <option value=\"YP\" selected=\"selected\">";
            echo ($context["text_dhl_yp"] ?? null);
            echo "</option>
                ";
        } else {
            // line 492
            echo "                <option value=\"YP\">";
            echo ($context["text_dhl_yp"] ?? null);
            echo "</option>
                ";
        }
        // line 494
        echo "              </select>
            </div>
          </div>
      </div>
    </div>
  
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 502
        echo ($context["text_weight_head"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 507
        echo ($context["text_head12"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_wight_b\" value=\"";
        // line 509
        echo ($context["shipping_hitdhlexpress_wight_b"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_head12"] ?? null);
        echo "\" id=\"input-wight_b\" class=\"form-control\" />
              ";
        // line 510
        if (($context["error_wight_b"] ?? null)) {
            // line 511
            echo "              <div class=\"text-danger\">";
            echo ($context["error_wight_b"] ?? null);
            echo "</div>
              ";
        }
        // line 513
        echo "            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">";
        // line 516
        echo ($context["_entry_packing_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_weight_c\" id=\"input-packing-type\" class=\"form-control\">
                ";
        // line 519
        if ((($context["shipping_hitdhlexpress_weight_c"] ?? null) == "pack_descending")) {
            // line 520
            echo "                <option value=\"pack_descending\" selected=\"selected\">";
            echo ($context["text_head13"] ?? null);
            echo "</option>
                ";
        } else {
            // line 522
            echo "                <option value=\"pack_descending\">";
            echo ($context["text_head13"] ?? null);
            echo "</option>
                ";
        }
        // line 524
        echo "                ";
        if ((($context["shipping_hitdhlexpress_weight_c"] ?? null) == "pack_ascending")) {
            // line 525
            echo "                <option value=\"pack_ascending\" selected=\"selected\">";
            echo ($context["text_head14"] ?? null);
            echo "</option>
                ";
        } else {
            // line 527
            echo "                <option value=\"pack_ascending\">";
            echo ($context["text_head14"] ?? null);
            echo "</option>
                ";
        }
        // line 529
        echo "                ";
        if ((($context["shipping_hitdhlexpress_weight_c"] ?? null) == "pack_simple")) {
            // line 530
            echo "                <option value=\"pack_simple\" selected=\"selected\">";
            echo ($context["text_head15"] ?? null);
            echo "</option>
                ";
        } else {
            // line 532
            echo "                <option value=\"pack_simple\">";
            echo ($context["text_head15"] ?? null);
            echo "</option>
                ";
        }
        // line 534
        echo "              </select>
            </div>
          </div>
     </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 541
        echo ($context["text_label"] ?? null);
        echo " </h3>
      </div>
      <div class=\"panel-body\">
    <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 545
        echo ($context["text_head16"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 548
        if (($context["shipping_hitdhlexpress_plt"] ?? null)) {
            // line 549
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_plt\" value=\"1\" checked=\"checked\" />
                ";
            // line 550
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        } else {
            // line 552
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_plt\" value=\"1\" />
                ";
            // line 553
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        }
        // line 555
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 557
        if ( !($context["shipping_hitdhlexpress_plt"] ?? null)) {
            // line 558
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_plt\" value=\"0\" checked=\"checked\" />
                ";
            // line 559
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        } else {
            // line 561
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_plt\" value=\"0\" />
                ";
            // line 562
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        }
        // line 564
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 568
        echo ($context["text_head17"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 571
        if (($context["shipping_hitdhlexpress_sat"] ?? null)) {
            // line 572
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_sat\" value=\"1\" checked=\"checked\" />
                ";
            // line 573
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        } else {
            // line 575
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_sat\" value=\"1\" />
                ";
            // line 576
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        }
        // line 578
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 580
        if ( !($context["shipping_hitdhlexpress_sat"] ?? null)) {
            // line 581
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_sat\" value=\"0\" checked=\"checked\" />
                ";
            // line 582
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        } else {
            // line 584
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_sat\" value=\"0\" />
                ";
            // line 585
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        }
        // line 587
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 591
        echo ($context["text_head18"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 594
        if (($context["shipping_hitdhlexpress_email_trach"] ?? null)) {
            // line 595
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_email_trach\" value=\"1\" checked=\"checked\" />
                ";
            // line 596
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        } else {
            // line 598
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_email_trach\" value=\"1\" />
                ";
            // line 599
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        }
        // line 601
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 603
        if ( !($context["shipping_hitdhlexpress_email_trach"] ?? null)) {
            // line 604
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_email_trach\" value=\"0\" checked=\"checked\" />
                ";
            // line 605
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        } else {
            // line 607
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_email_trach\" value=\"0\" />
                ";
            // line 608
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        }
        // line 610
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 614
        echo ($context["text_head19"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 617
        if (($context["shipping_hitdhlexpress_airway"] ?? null)) {
            // line 618
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_airway\" value=\"1\" checked=\"checked\" />
                ";
            // line 619
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        } else {
            // line 621
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_airway\" value=\"1\" />
                ";
            // line 622
            echo ($context["text_enable"] ?? null);
            echo "
                ";
        }
        // line 624
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 626
        if ( !($context["shipping_hitdhlexpress_airway"] ?? null)) {
            // line 627
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_airway\" value=\"0\" checked=\"checked\" />
                ";
            // line 628
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        } else {
            // line 630
            echo "                <input type=\"radio\" name=\"shipping_hitdhlexpress_airway\" value=\"0\" />
                ";
            // line 631
            echo ($context["text_disable"] ?? null);
            echo "
                ";
        }
        // line 633
        echo "              </label>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-dropoff-type\">";
        // line 637
        echo ($context["text_head20"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_dropoff_type\" id=\"input-dropoff-type\" class=\"form-control\">
                ";
        // line 640
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_A4_PDF")) {
            // line 641
            echo "                <option value=\"8X4_A4_PDF\" selected=\"selected\">";
            echo ($context["text_head21"] ?? null);
            echo "</option>
                ";
        } else {
            // line 643
            echo "                <option value=\"8X4_A4_PDF\">";
            echo ($context["text_head21"] ?? null);
            echo "</option>
                ";
        }
        // line 645
        echo "                ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_thermal")) {
            // line 646
            echo "                <option value=\"8X4_thermal\" selected=\"selected\">";
            echo ($context["text_head22"] ?? null);
            echo "</option>
                ";
        } else {
            // line 648
            echo "                <option value=\"8X4_thermal\">";
            echo ($context["text_head22"] ?? null);
            echo "</option>
                ";
        }
        // line 650
        echo "                ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_A4_TC_PDF")) {
            // line 651
            echo "                <option value=\"8X4_A4_TC_PDF\" selected=\"selected\">";
            echo ($context["text_head23"] ?? null);
            echo "</option>
                ";
        } else {
            // line 653
            echo "                <option value=\"8X4_A4_TC_PDF\">";
            echo ($context["text_head23"] ?? null);
            echo "</option>
                ";
        }
        // line 655
        echo "                ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_CI_PDF")) {
            // line 656
            echo "                <option value=\"8X4_CI_PDF\" selected=\"selected\">";
            echo ($context["text_head24"] ?? null);
            echo "</option>
                ";
        } else {
            // line 658
            echo "                <option value=\"8X4_CI_PDF\">";
            echo ($context["text_head24"] ?? null);
            echo "</option>
                ";
        }
        // line 660
        echo "                ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_CI_thermal")) {
            // line 661
            echo "                <option value=\"8X4_CI_thermal\" selected=\"selected\">";
            echo ($context["text_head25"] ?? null);
            echo "</option>
                ";
        } else {
            // line 663
            echo "                <option value=\"8X4_CI_thermal\">";
            echo ($context["text_head25"] ?? null);
            echo "</option>
                ";
        }
        // line 665
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_RU_A4_PDF")) {
            // line 666
            echo "                <option value=\"8X4_RU_A4_PDF\" selected=\"selected\">";
            echo ($context["text_head26"] ?? null);
            echo "</option>
                ";
        } else {
            // line 668
            echo "                <option value=\"8X4_RU_A4_PDF\">";
            echo ($context["text_head26"] ?? null);
            echo "</option>
                ";
        }
        // line 670
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_PDF")) {
            // line 671
            echo "                <option value=\"8X4_PDF\" selected=\"selected\">";
            echo ($context["text_head27"] ?? null);
            echo "</option>
                ";
        } else {
            // line 673
            echo "                <option value=\"8X4_PDF\">";
            echo ($context["text_head27"] ?? null);
            echo "</option>
                ";
        }
        // line 675
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_CustBarCode_PDF")) {
            // line 676
            echo "                <option value=\"8X4_CustBarCode_PDF\" selected=\"selected\">";
            echo ($context["text_head28"] ?? null);
            echo "</option>
                ";
        } else {
            // line 678
            echo "                <option value=\"8X4_CustBarCode_PDF\">";
            echo ($context["text_head28"] ?? null);
            echo "</option>
                ";
        }
        // line 680
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "8X4_CustBarCode_thermal")) {
            // line 681
            echo "                <option value=\"8X4_CustBarCode_thermal\" selected=\"selected\">";
            echo ($context["text_head29"] ?? null);
            echo "</option>
                ";
        } else {
            // line 683
            echo "                <option value=\"8X4_CustBarCode_thermal\">";
            echo ($context["text_head29"] ?? null);
            echo "</option>
                ";
        }
        // line 685
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "6X4_A4_PDF")) {
            // line 686
            echo "                <option value=\"6X4_A4_PDF\" selected=\"selected\">";
            echo ($context["text_head30"] ?? null);
            echo "</option>
                ";
        } else {
            // line 688
            echo "                <option value=\"6X4_A4_PDF\">";
            echo ($context["text_head30"] ?? null);
            echo "</option>
                ";
        }
        // line 690
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "6X4_thermal")) {
            // line 691
            echo "                <option value=\"6X4_thermal\" selected=\"selected\">";
            echo ($context["text_head31"] ?? null);
            echo "</option>
                ";
        } else {
            // line 693
            echo "                <option value=\"6X4_thermal\">";
            echo ($context["text_head31"] ?? null);
            echo "</option>
                ";
        }
        // line 695
        echo "        ";
        if ((($context["shipping_hitdhlexpress_dropoff_type"] ?? null) == "6X4_PDF")) {
            // line 696
            echo "                <option value=\"6X4_PDF\" selected=\"selected\">";
            echo ($context["text_head32"] ?? null);
            echo "</option>
                ";
        } else {
            // line 698
            echo "                <option value=\"6X4_PDF\">";
            echo ($context["text_head32"] ?? null);
            echo "</option>
                ";
        }
        // line 700
        echo "              </select>
            </div>
          </div>
      
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-dropoff-type\">";
        // line 705
        echo ($context["text_head33"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_output_type\" id=\"input-dropoff-type\" class=\"form-control\">
                ";
        // line 708
        if ((($context["shipping_hitdhlexpress_output_type"] ?? null) == "PDF")) {
            // line 709
            echo "                <option value=\"PDF\" selected=\"selected\">";
            echo ($context["text_head34"] ?? null);
            echo "</option>
                ";
        } else {
            // line 711
            echo "                <option value=\"PDF\">";
            echo ($context["text_head34"] ?? null);
            echo "</option>
                ";
        }
        // line 713
        echo "                ";
        if ((($context["shipping_hitdhlexpress_output_type"] ?? null) == "ZPL2")) {
            // line 714
            echo "                <option value=\"ZPL2\" selected=\"selected\">";
            echo ($context["text_head35"] ?? null);
            echo "</option>
                ";
        } else {
            // line 716
            echo "                <option value=\"ZPL2\">";
            echo ($context["text_head35"] ?? null);
            echo "</option>
                ";
        }
        // line 718
        echo "                ";
        if ((($context["shipping_hitdhlexpress_output_type"] ?? null) == "EPL2")) {
            // line 719
            echo "                <option value=\"EPL2\" selected=\"selected\">";
            echo ($context["text_head36"] ?? null);
            echo "</option>
                ";
        } else {
            // line 721
            echo "                <option value=\"EPL2\">";
            echo ($context["text_head36"] ?? null);
            echo "</option>
                ";
        }
        // line 723
        echo "              </select>
            </div>
          </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-dropoff-type\">";
        // line 727
        echo ($context["text_head41"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_duty_type\" id=\"input-dropoff-type\" class=\"form-control\">
                ";
        // line 730
        if ((($context["shipping_hitdhlexpress_duty_type"] ?? null) == "")) {
            // line 731
            echo "                <option value=\"\" selected=\"selected\">";
            echo ($context["text_head37"] ?? null);
            echo "</option>
                ";
        } else {
            // line 733
            echo "                <option value=\"\">";
            echo ($context["text_head37"] ?? null);
            echo "</option>
                ";
        }
        // line 735
        echo "                ";
        if ((($context["shipping_hitdhlexpress_duty_type"] ?? null) == "S")) {
            // line 736
            echo "                <option value=\"S\" selected=\"selected\">";
            echo ($context["text_head38"] ?? null);
            echo "</option>
                ";
        } else {
            // line 738
            echo "                <option value=\"S\">";
            echo ($context["text_head38"] ?? null);
            echo "</option>
                ";
        }
        // line 740
        echo "                ";
        if ((($context["shipping_hitdhlexpress_duty_type"] ?? null) == "R")) {
            // line 741
            echo "                <option value=\"R\" selected=\"selected\">";
            echo ($context["text_head39"] ?? null);
            echo "</option>
                ";
        } else {
            // line 743
            echo "                <option value=\"R\">";
            echo ($context["text_head39"] ?? null);
            echo "</option>
                ";
        }
        // line 745
        echo "        ";
        if ((($context["shipping_hitdhlexpress_duty_type"] ?? null) == "T")) {
            // line 746
            echo "                <option value=\"T\" selected=\"selected\">";
            echo ($context["text_head40"] ?? null);
            echo "</option>
                ";
        } else {
            // line 748
            echo "                <option value=\"T\">";
            echo ($context["text_head40"] ?? null);
            echo "</option>
                ";
        }
        // line 750
        echo "              </select>
            </div>
          </div>
      
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-shipment_content\">";
        // line 755
        echo ($context["text_head42"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_shipment_content\" value=\"";
        // line 757
        echo ($context["shipping_hitdhlexpress_shipment_content"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_head42"] ?? null);
        echo "\" id=\"input-shipment_content\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-shipment_content\">";
        // line 761
        echo ($context["text_head43"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_hitdhlexpress_logo\" value=\"";
        // line 763
        echo ($context["shipping_hitdhlexpress_logo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_head43"] ?? null);
        echo "\" id=\"input-logo\" class=\"form-control\" />
            </div>
          </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">Contact person Name (Pickup)</label>
        <div class=\"col-sm-10\">
         <input type=\"text\" name=\"shipping_hitdhlexpress_picper\" value=\"";
        // line 769
        echo ($context["shipping_hitdhlexpress_picper"] ?? null);
        echo "\" placeholder=\"Person Name\" id=\"input-account\" class=\"form-control\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">Contact Phone Number (Pickup)</label>
        <div class=\"col-sm-10\">
         <input type=\"text\" name=\"shipping_hitdhlexpress_piccon\" value=\"";
        // line 775
        echo ($context["shipping_hitdhlexpress_piccon"] ?? null);
        echo "\" placeholder=\"Person Mobile\" id=\"input-account\" class=\"form-control\" />
        </div>
      </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">Pickup Open Time</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_pickup_time\" id=\"input-packing-type\" class=\"form-control\">
            <option value=\"01:00\" ";
        // line 782
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "01:00")) {
            echo "selected=\"selected\"";
        }
        echo " >01:00</option>
            <option value=\"02:00\" ";
        // line 783
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "02:00")) {
            echo "selected=\"selected\"";
        }
        echo ">02:00</option>
            <option value=\"03:00\" ";
        // line 784
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "03:00")) {
            echo "selected=\"selected\"";
        }
        echo ">03:00</option>
            <option value=\"04:00\" ";
        // line 785
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "04:00")) {
            echo "selected=\"selected\"";
        }
        echo ">04:00</option>
            <option value=\"05:00\" ";
        // line 786
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "05:00")) {
            echo "selected=\"selected\"";
        }
        echo ">05:00</option>
            <option value=\"06:00\" ";
        // line 787
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "06:00")) {
            echo "selected=\"selected\"";
        }
        echo ">06:00</option>
            <option value=\"07:00\" ";
        // line 788
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "07:00")) {
            echo "selected=\"selected\"";
        }
        echo ">07:00</option>
            <option value=\"08:00\" ";
        // line 789
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "08:00")) {
            echo "selected=\"selected\"";
        }
        echo ">08:00</option>
            <option value=\"09:00\" ";
        // line 790
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "09:00")) {
            echo "selected=\"selected\"";
        }
        echo ">09:00</option>
            <option value=\"10:00\" ";
        // line 791
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "10:00")) {
            echo "selected=\"selected\"";
        }
        echo ">10:00</option>
            <option value=\"11:00\" ";
        // line 792
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "11:00")) {
            echo "selected=\"selected\"";
        }
        echo ">11:00</option>
            <option value=\"12:00\" ";
        // line 793
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "12:00")) {
            echo "selected=\"selected\"";
        }
        echo ">12:00</option>
            <option value=\"13:00\" ";
        // line 794
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "13:00")) {
            echo "selected=\"selected\"";
        }
        echo ">13:00</option>
            <option value=\"14:00\" ";
        // line 795
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "14:00")) {
            echo "selected=\"selected\"";
        }
        echo ">14:00</option>
            <option value=\"15:00\" ";
        // line 796
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "15:00")) {
            echo "selected=\"selected\"";
        }
        echo ">15:00</option>
            <option value=\"16:00\" ";
        // line 797
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "16:00")) {
            echo "selected=\"selected\"";
        }
        echo ">16:00</option>
            <option value=\"17:00\" ";
        // line 798
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "17:00")) {
            echo "selected=\"selected\"";
        }
        echo ">17:00</option>
            <option value=\"18:00\" ";
        // line 799
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "18:00")) {
            echo "selected=\"selected\"";
        }
        echo ">18:00</option>
            <option value=\"19:00\" ";
        // line 800
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "19:00")) {
            echo "selected=\"selected\"";
        }
        echo ">19:00</option>
            <option value=\"20:00\" ";
        // line 801
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "20:00")) {
            echo "selected=\"selected\"";
        }
        echo ">20:00</option>
            <option value=\"21:00\" ";
        // line 802
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "21:00")) {
            echo "selected=\"selected\"";
        }
        echo ">21:00</option>
            <option value=\"22:00\" ";
        // line 803
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "22:00")) {
            echo "selected=\"selected\"";
        }
        echo ">22:00</option>
            <option value=\"23:00\" ";
        // line 804
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "23:00")) {
            echo "selected=\"selected\"";
        }
        echo ">23:00</option>
            <option value=\"00:00\" ";
        // line 805
        if ((($context["shipping_hitdhlexpress_pickup_time"] ?? null) == "00:00")) {
            echo "selected=\"selected\"";
        }
        echo ">00:00</option>
          </select>
            </div>
          </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">Pickup Close Time</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_hitdhlexpress_close_time\" id=\"input-packing-type\" class=\"form-control\">
            <option value=\"01:00\" ";
        // line 813
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "01:00")) {
            echo "selected=\"selected\"";
        }
        echo " >01:00</option>
            <option value=\"02:00\" ";
        // line 814
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "02:00")) {
            echo "selected=\"selected\"";
        }
        echo ">02:00</option>
            <option value=\"03:00\" ";
        // line 815
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "03:00")) {
            echo "selected=\"selected\"";
        }
        echo ">03:00</option>
            <option value=\"04:00\" ";
        // line 816
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "04:00")) {
            echo "selected=\"selected\"";
        }
        echo ">04:00</option>
            <option value=\"05:00\" ";
        // line 817
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "05:00")) {
            echo "selected=\"selected\"";
        }
        echo ">05:00</option>
            <option value=\"06:00\" ";
        // line 818
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "06:00")) {
            echo "selected=\"selected\"";
        }
        echo ">06:00</option>
            <option value=\"07:00\" ";
        // line 819
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "07:00")) {
            echo "selected=\"selected\"";
        }
        echo ">07:00</option>
            <option value=\"08:00\" ";
        // line 820
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "08:00")) {
            echo "selected=\"selected\"";
        }
        echo ">08:00</option>
            <option value=\"09:00\" ";
        // line 821
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "09:00")) {
            echo "selected=\"selected\"";
        }
        echo ">09:00</option>
            <option value=\"10:00\" ";
        // line 822
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "10:00")) {
            echo "selected=\"selected\"";
        }
        echo ">10:00</option>
            <option value=\"11:00\" ";
        // line 823
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "11:00")) {
            echo "selected=\"selected\"";
        }
        echo ">11:00</option>
            <option value=\"12:00\" ";
        // line 824
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "12:00")) {
            echo "selected=\"selected\"";
        }
        echo ">12:00</option>
            <option value=\"13:00\" ";
        // line 825
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "13:00")) {
            echo "selected=\"selected\"";
        }
        echo ">13:00</option>
            <option value=\"14:00\" ";
        // line 826
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "14:00")) {
            echo "selected=\"selected\"";
        }
        echo ">14:00</option>
            <option value=\"15:00\" ";
        // line 827
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "15:00")) {
            echo "selected=\"selected\"";
        }
        echo ">15:00</option>
            <option value=\"16:00\" ";
        // line 828
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "16:00")) {
            echo "selected=\"selected\"";
        }
        echo ">16:00</option>
            <option value=\"17:00\" ";
        // line 829
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "17:00")) {
            echo "selected=\"selected\"";
        }
        echo ">17:00</option>
            <option value=\"18:00\" ";
        // line 830
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "18:00")) {
            echo "selected=\"selected\"";
        }
        echo ">18:00</option>
            <option value=\"19:00\" ";
        // line 831
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "19:00")) {
            echo "selected=\"selected\"";
        }
        echo ">19:00</option>
            <option value=\"20:00\" ";
        // line 832
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "20:00")) {
            echo "selected=\"selected\"";
        }
        echo ">20:00</option>
            <option value=\"21:00\" ";
        // line 833
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "21:00")) {
            echo "selected=\"selected\"";
        }
        echo ">21:00</option>
            <option value=\"22:00\" ";
        // line 834
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "22:00")) {
            echo "selected=\"selected\"";
        }
        echo ">22:00</option>
            <option value=\"23:00\" ";
        // line 835
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "23:00")) {
            echo "selected=\"selected\"";
        }
        echo ">23:00</option>
            <option value=\"00:00\" ";
        // line 836
        if ((($context["shipping_hitdhlexpress_close_time"] ?? null) == "00:00")) {
            echo "selected=\"selected\"";
        }
        echo ">00:00</option>
          </select>
            </div>
          </div>
    
        </form>
    <div>
      
    </div>
    
    <div class=\"pull-right\">
      <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 847
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 848
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
    </div>
      </div>
    </div>
    </div>
  
  </div>
</div>
";
        // line 856
        $this->displayBlock('javascripts', $context, $blocks);
        // line 937
        echo "
";
        // line 938
        echo ($context["footer"] ?? null);
        echo "
";
    }

    // line 856
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 857
        echo "<script type=\"text/javascript\">

  jQuery(window).load(function(){
    jQuery('#hit_dhl_shipping_add_trackingpin_shipmentid').change(function(){
      if(jQuery(hit_dhl_shipping_add_trackingpin_shipmentid).is(':checked')) {
        jQuery('#dhl_email_service').show();
      }else
      {
        jQuery('#dhl_email_service').hide();
      }
    }).change();

    jQuery('#hit_dhl_shipping_return_label_key').change(function(){
      if(jQuery('#hit_dhl_shipping_return_label_key').is(':checked')) {
        jQuery('#hit_return_label_acc_number').show();
      }else
      {
        jQuery('#hit_return_label_acc_number').hide();
      }
    }).change();

    jQuery('#hit_dhl_shipping_request_archive_airway_label').change(function(){
      if(jQuery('#hit_dhl_shipping_request_archive_airway_label').is(':checked')) {
        jQuery('#hit_no_of_archive_bills').show();
      }else
      {
        jQuery('#hit_no_of_archive_bills').hide();
      }
    }).change();
    jQuery('#hit_dhl_shipping_hitdhlexpress_email_notification_service').change(function(){
      if(jQuery('#hit_dhl_shipping_hitdhlexpress_email_notification_service').is(':checked')) {
        jQuery('#hit_dhl_email_notification_message').show();
      }else
      {
        jQuery('#hit_dhl_email_notification_message').hide();
      }
    }).change();
    jQuery('#hit_dhl_shipping_dutypayment_type').change(function(){
      if(jQuery(this).val() == 'T') {
        jQuery('#hit_t_acc_number').show();
      }else
      {
        jQuery('#hit_t_acc_number').hide();
      }
    }).change();



    var pack_type_options = '";
        // line 905
        echo ($context["option_string"] ?? null);
        echo "';
    jQuery('.dhl_boxes .insert').click( function() {
      var \$tbody = jQuery('.dhl_boxes').find('#rates');
      var size = \$tbody.find('tr').size();
      var code = '<tr class=\"new\">\\
  <td  style=\"padding:3px;\" class=\"check-column\"><input type=\"checkbox\" /></td>\\
  <input type=\"hidden\" size=\"1\" name=\"boxes_id[' + size + ']\" />\\
  <td style=\"padding:3px;\"><input type=\"text\" size=\"25\" name=\"boxes_name[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><input type=\"text\" style=\"width:100%;\" name=\"boxes_length[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><input type=\"text\" style=\"width:100%;\" name=\"boxes_width[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><input type=\"text\" style=\"width:100%;\" name=\"boxes_height[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><input type=\"text\" style=\"width:100%;\" name=\"boxes_box_weight[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><input type=\"text\" style=\"width:100%;\" name=\"boxes_max_weight[' + size + ']\" /></td>\\
  <td style=\"padding:3px;\"><center><input type=\"checkbox\" name=\"boxes_enabled[' + size + ']\" /></center></td>\\
  <td style=\"padding:3px;\"><select name=\"boxes_pack_type[' + size + ']\" >' + pack_type_options + '</select></td>\\
  </tr>';
      \$tbody.append( code );
      return false;
    });

    jQuery('.dhl_boxes .remove').click(function() {
      var \$tbody = jQuery('.dhl_boxes').find('#rates');
      \$tbody.find('.check-column input:checked').each(function() {
        jQuery(this).closest('tr').hide().find('input').val('');
      });

      return false;
    });
  });

</script>
";
    }

    public function getTemplateName()
    {
        return "extension/shipping/hitdhlexpress.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2255 => 905,  2205 => 857,  2201 => 856,  2195 => 938,  2192 => 937,  2190 => 856,  2177 => 848,  2173 => 847,  2157 => 836,  2151 => 835,  2145 => 834,  2139 => 833,  2133 => 832,  2127 => 831,  2121 => 830,  2115 => 829,  2109 => 828,  2103 => 827,  2097 => 826,  2091 => 825,  2085 => 824,  2079 => 823,  2073 => 822,  2067 => 821,  2061 => 820,  2055 => 819,  2049 => 818,  2043 => 817,  2037 => 816,  2031 => 815,  2025 => 814,  2019 => 813,  2006 => 805,  2000 => 804,  1994 => 803,  1988 => 802,  1982 => 801,  1976 => 800,  1970 => 799,  1964 => 798,  1958 => 797,  1952 => 796,  1946 => 795,  1940 => 794,  1934 => 793,  1928 => 792,  1922 => 791,  1916 => 790,  1910 => 789,  1904 => 788,  1898 => 787,  1892 => 786,  1886 => 785,  1880 => 784,  1874 => 783,  1868 => 782,  1858 => 775,  1849 => 769,  1838 => 763,  1833 => 761,  1824 => 757,  1819 => 755,  1812 => 750,  1806 => 748,  1800 => 746,  1797 => 745,  1791 => 743,  1785 => 741,  1782 => 740,  1776 => 738,  1770 => 736,  1767 => 735,  1761 => 733,  1755 => 731,  1753 => 730,  1747 => 727,  1741 => 723,  1735 => 721,  1729 => 719,  1726 => 718,  1720 => 716,  1714 => 714,  1711 => 713,  1705 => 711,  1699 => 709,  1697 => 708,  1691 => 705,  1684 => 700,  1678 => 698,  1672 => 696,  1669 => 695,  1663 => 693,  1657 => 691,  1654 => 690,  1648 => 688,  1642 => 686,  1639 => 685,  1633 => 683,  1627 => 681,  1624 => 680,  1618 => 678,  1612 => 676,  1609 => 675,  1603 => 673,  1597 => 671,  1594 => 670,  1588 => 668,  1582 => 666,  1579 => 665,  1573 => 663,  1567 => 661,  1564 => 660,  1558 => 658,  1552 => 656,  1549 => 655,  1543 => 653,  1537 => 651,  1534 => 650,  1528 => 648,  1522 => 646,  1519 => 645,  1513 => 643,  1507 => 641,  1505 => 640,  1499 => 637,  1493 => 633,  1488 => 631,  1485 => 630,  1480 => 628,  1477 => 627,  1475 => 626,  1471 => 624,  1466 => 622,  1463 => 621,  1458 => 619,  1455 => 618,  1453 => 617,  1447 => 614,  1441 => 610,  1436 => 608,  1433 => 607,  1428 => 605,  1425 => 604,  1423 => 603,  1419 => 601,  1414 => 599,  1411 => 598,  1406 => 596,  1403 => 595,  1401 => 594,  1395 => 591,  1389 => 587,  1384 => 585,  1381 => 584,  1376 => 582,  1373 => 581,  1371 => 580,  1367 => 578,  1362 => 576,  1359 => 575,  1354 => 573,  1351 => 572,  1349 => 571,  1343 => 568,  1337 => 564,  1332 => 562,  1329 => 561,  1324 => 559,  1321 => 558,  1319 => 557,  1315 => 555,  1310 => 553,  1307 => 552,  1302 => 550,  1299 => 549,  1297 => 548,  1291 => 545,  1284 => 541,  1275 => 534,  1269 => 532,  1263 => 530,  1260 => 529,  1254 => 527,  1248 => 525,  1245 => 524,  1239 => 522,  1233 => 520,  1231 => 519,  1225 => 516,  1220 => 513,  1214 => 511,  1212 => 510,  1206 => 509,  1201 => 507,  1193 => 502,  1183 => 494,  1177 => 492,  1171 => 490,  1168 => 489,  1162 => 487,  1156 => 485,  1153 => 484,  1147 => 482,  1141 => 480,  1139 => 479,  1133 => 476,  1126 => 472,  1117 => 465,  1111 => 463,  1105 => 461,  1102 => 460,  1096 => 458,  1090 => 456,  1088 => 455,  1082 => 452,  1076 => 448,  1071 => 446,  1068 => 445,  1063 => 443,  1060 => 442,  1058 => 441,  1054 => 439,  1049 => 437,  1046 => 436,  1041 => 434,  1038 => 433,  1036 => 432,  1030 => 429,  1023 => 425,  1012 => 419,  1009 => 418,  1001 => 415,  996 => 413,  991 => 412,  986 => 410,  981 => 409,  979 => 408,  975 => 406,  971 => 405,  965 => 402,  958 => 397,  952 => 395,  946 => 393,  943 => 392,  937 => 390,  931 => 388,  929 => 387,  923 => 384,  916 => 379,  911 => 377,  908 => 376,  903 => 374,  900 => 373,  898 => 372,  894 => 370,  889 => 368,  886 => 367,  881 => 365,  878 => 364,  876 => 363,  870 => 360,  864 => 356,  859 => 354,  856 => 353,  851 => 351,  848 => 350,  846 => 349,  842 => 347,  837 => 345,  834 => 344,  829 => 342,  826 => 341,  824 => 340,  818 => 337,  812 => 333,  807 => 331,  804 => 330,  799 => 328,  796 => 327,  794 => 326,  790 => 324,  785 => 322,  782 => 321,  777 => 319,  774 => 318,  772 => 317,  766 => 314,  759 => 310,  750 => 303,  744 => 301,  742 => 300,  736 => 299,  731 => 297,  725 => 293,  719 => 291,  717 => 290,  713 => 288,  698 => 286,  694 => 285,  688 => 282,  683 => 279,  677 => 277,  675 => 276,  669 => 275,  664 => 273,  659 => 270,  653 => 268,  651 => 267,  645 => 266,  640 => 264,  635 => 261,  629 => 259,  627 => 258,  621 => 257,  616 => 255,  611 => 252,  605 => 250,  603 => 249,  597 => 248,  592 => 246,  587 => 243,  581 => 241,  579 => 240,  573 => 239,  568 => 237,  563 => 234,  557 => 232,  555 => 231,  549 => 230,  544 => 228,  539 => 225,  533 => 223,  531 => 222,  525 => 221,  520 => 219,  515 => 216,  509 => 214,  507 => 213,  501 => 212,  496 => 210,  489 => 206,  477 => 199,  472 => 197,  466 => 193,  461 => 191,  456 => 190,  451 => 188,  446 => 187,  444 => 186,  438 => 183,  432 => 179,  427 => 177,  424 => 176,  419 => 174,  416 => 173,  414 => 172,  410 => 170,  405 => 168,  402 => 167,  397 => 165,  394 => 164,  392 => 163,  384 => 160,  378 => 156,  373 => 154,  370 => 153,  365 => 151,  362 => 150,  360 => 149,  356 => 147,  351 => 145,  348 => 144,  343 => 142,  340 => 141,  338 => 140,  330 => 137,  325 => 134,  319 => 132,  317 => 131,  311 => 130,  306 => 128,  296 => 123,  291 => 121,  286 => 118,  280 => 116,  278 => 115,  272 => 114,  267 => 112,  261 => 108,  256 => 106,  253 => 105,  248 => 103,  245 => 102,  243 => 101,  239 => 99,  234 => 97,  231 => 96,  226 => 94,  223 => 93,  221 => 92,  215 => 89,  208 => 85,  201 => 82,  196 => 80,  184 => 71,  180 => 70,  165 => 58,  162 => 57,  160 => 56,  154 => 52,  146 => 46,  138 => 41,  134 => 40,  130 => 38,  128 => 37,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  103 => 27,  97 => 24,  94 => 23,  86 => 19,  84 => 18,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/hitdhlexpress.twig", "");
    }
}
