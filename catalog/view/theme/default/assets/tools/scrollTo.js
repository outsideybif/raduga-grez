export function scrollTo(item, time, marginTop = 0) {
  
  const $target = $(item);
  if ($target.length > 0) {

    globals.isScrollingAnimation = true;

    const targetTop = $target.offset().top - marginTop;

    const distance = Math.abs($([document.documentElement, document.body]).scrollTop() - targetTop);

    let duration = time ? time : 1000 + Math.sqrt(distance * 10);

    $([document.documentElement, document.body]).stop().animate({
      scrollTop: targetTop
    }, {
      duration: duration,
      complete: function () {
        globals.isScrollingAnimation = false;
      }
    });
  }
}