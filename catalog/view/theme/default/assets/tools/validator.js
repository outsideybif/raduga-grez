export const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export const phoneRegex = /^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/;

export const phoneDigitalLength = /^\D*(?:\d\D*){10,14}$/;

export const validator = {
  required: function(value) {
    const result = value.length > 0;
    const message = 'This field is required';
    return {
      result: result,
      message: result ? '' : message
    };
  },
  email: function(value) {
    if (value.length > 0) {
      const result = emailRegex.test(value);
      const message = 'Invalid email format';
      return {
        result: result,
        message: result ? '' : message
      };
    } else {
      return {
        result: true,
        message: ''
      };
    }
  },
  phone: function(value) {
    if (value.length > 0) {
      let result = phoneRegex.test(value);
      result = result && phoneDigitalLength.test(value);
      const message = 'Invalid phone number format';
      return {
        result: result,
        message: result ? '' : message
      };
    } else {
      return {
        result: true,
        message: ''
      };
    }
  }
}

export function validatorCheck(value, rule) {
  if (validator.hasOwnProperty(rule)) {
    return validator[rule](value);
  }
}

export function isValid(value, rulesString) {
  let isValid = true;
  const stack = [];

  if (rulesString) {
    const rules = rulesString.trim().split(',');

    rules.forEach(rule => {
      const validatorResult = validatorCheck(value, rule);
      isValid &= validatorResult.result;
      stack[stack.length] = validatorResult;
    });
  }

  return {
    result: isValid,
    stack: stack
  };
}