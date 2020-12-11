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

/* default/template/checkout/guest.twig */
class __TwigTemplate_8ffe0c4c6287f0e8c148c721275233c79f64bd06979eb3449c7d1c8954d9ddc8 extends \Twig\Template
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
        // line 334
        echo "






<form class=\"form-horizontal\">
 <input type=\"hidden\" name=\"lastname\" value=\"&nbsp\" placeholder=\"";
        // line 342
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
<input type=\"hidden\" name=\"telephone\" value=\"1111111111\" placeholder=\"";
        // line 343
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />

<input type=\"hidden\" value=\"1\" placeholder=\"";
        // line 345
        echo ($context["entry_telephone"] ?? null);
        echo "\" name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\" />
<input type=\"hidden\" name=\"address_1\" value=\"&nbsp&nbsp&nbsp\" placeholder=\"";
        // line 346
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
<input type=\"hidden\" name=\"company\" value=\"&nbsp\" placeholder=\"";
        // line 347
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />

";
        // line 350
        echo "


<input-field class=\"input-field input-field-information\" validation=\"email\">
    <input name=\"email\" value=\"";
        // line 354
        echo ($context["email"] ?? null);
        echo "\" class=\"input-field__input\" type=\"text\" name=\"email\" id=\"input-payment-email\">
    <div class=\"input-field__error\"></div>
    <div class=\"input-field__placeholder\">Email*</div>
</input-field>
<label class=\"container\">Keep me up to date on news and exclusive offers<input type=\"checkbox\"><span class=\"checkmark\"> </span></label>


<div class=\"checkout-form__title\">Shipping address</div>
<input-field class=\"input-field input-field-information\" validation=\"required\">
    <input class=\"input-field__input\" type=\"text\" name=\"firstname\" value=\"";
        // line 363
        echo ($context["firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\">
    <div class=\"input-field__error\"></div>
    <div class=\"input-field__placeholder\">Full name*</div>
</input-field>


<input-field class=\"input-field input-field-information\" validation=\"required\">
    <input class=\"input-field__input\" type=\"text\" name=\"address_2\" value=\"";
        // line 370
        echo ($context["address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\">
    <div class=\"input-field__error\"></div>
    <div class=\"input-field__placeholder\">Address*</div>
</input-field>
<input-field class=\"input-field\">
    <input class=\"input-field__input field_valid\" type=\"text\" name=\"\">
    <div class=\"input-field__error\"></div>
    <div class=\"input-field__placeholder\">Appartament, suit, etc. (optional)</div>
</input-field>
<input-field class=\"input-field input-field-information\" validation=\"required\">
    <input class=\"input-field__input\" type=\"text\" name=\"city\" value=\"";
        // line 380
        echo ($context["city"] ?? null);
        echo "\" id=\"input-payment-city\">
    <div class=\"input-field__error\"></div>
     <div class=\"input-field__placeholder\">City*</div>
</input-field>
<div class=\"checkout-form__country-zip\">


    <div class=\"custom-select\">
      <div class=\"checkout-form__placeholder\">Country/Region</div>
      <select name=\"country_id\" id=\"input-payment-country\" >
        <option value=\"\">";
        // line 390
        echo ($context["text_select"] ?? null);
        echo "</option>
        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 392
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 392) == ($context["country_id"] ?? null))) {
                // line 393
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 393);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 393);
                echo "</option>
          ";
            } else {
                // line 395
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 395);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 395);
                echo "</option>
          ";
            }
            // line 397
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "      </select>
    </div>

    


    <div class=\"checkout-form__zip-input\">
      <input-field class=\"input-field input-field-information\" validation=\"required,number\">
          <input class=\"input-field__input\" type=\"text\" name=\"postcode\" pattern=\"[0-9]{5}\" value=\"";
        // line 406
        echo ($context["postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\">
          <div class=\"input-field__error\"></div>
           <div class=\"input-field__placeholder\">Zip*</div>
      </input-field>
    </div>

    ";
        // line 413
        echo "

    


    
</div>
</form>



<script>

  

  let isEmpty = false;
  \$( \".input-field-information\" ).each(function( index ) {
    
      \$( this ).find('.input-field__input').blur();


      if( \$( this ).hasClass(\"field_valid\") == false ){
          isEmpty = true;
      }
      \$( this ).removeClass(\"field_error\");
  });
  if(isEmpty){
      \$(\".continue-payment-button\").addClass(\"disabled\");
  } else {
      \$(\".continue-payment-button\").removeClass(\"disabled\");
  }


</script>























<script>


var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class \"custom-select\":*/
x = document.getElementsByClassName(\"custom-select\");
console.log(x);
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName(\"select\")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement(\"DIV\");
  a.setAttribute(\"class\", \"select-selected\");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement(\"DIV\");
  b.setAttribute(\"class\", \"select-items select-hide\");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement(\"DIV\");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener(\"click\", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName(\"select\")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName(\"same-as-selected\");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute(\"class\");
            }
            this.setAttribute(\"class\", \"same-as-selected\");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener(\"click\", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle(\"select-hide\");
      this.classList.toggle(\"select-arrow-active\");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName(\"select-items\");
  y = document.getElementsByClassName(\"select-selected\");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove(\"select-arrow-active\");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add(\"select-hide\");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener(\"click\", closeAllSelect);

</script>






<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 681
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 686
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 691
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 714
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 720
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 727
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');

window.locomotive.update();






//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 727,  496 => 720,  487 => 714,  461 => 691,  453 => 686,  445 => 681,  175 => 413,  166 => 406,  156 => 398,  150 => 397,  142 => 395,  134 => 393,  131 => 392,  127 => 391,  123 => 390,  110 => 380,  97 => 370,  87 => 363,  75 => 354,  69 => 350,  64 => 347,  60 => 346,  56 => 345,  51 => 343,  47 => 342,  37 => 334,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/guest.twig", "");
    }
}
