(function() {
  function decimalAdjust(type, value, exp) {
    if (typeof exp === 'undefined' || +exp === 0) {
      return window.Math[type](value);
    }

    value = +value;
    exp = +exp;

    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }

    value = value.toString().split('e');
    value = window.Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  if (!window.Math.round10) {
    window.Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }

  if (!window.Math.floor10) {
    window.Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  
  if (!window.Math.ceil10) {
    window.Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
})();