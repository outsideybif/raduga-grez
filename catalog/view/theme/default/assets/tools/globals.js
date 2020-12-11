if (typeof wordpress === 'undefined') {
  var wordpress = {
    ajax: 'https://vellnes.palemiya.com/wp-admin/admin-ajax.php',
    thankYouPageUrl: 'https://vellnes.palemiya.com/thank-you'
  }
}

// let isScrollingAnimation = false;

// module.exports = {
//   isScrollingAnimation: isScrollingAnimation
// }

module.exports = {
  wordpress: wordpress,
  isScrollingAnimation: false
}