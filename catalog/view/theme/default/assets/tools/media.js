export const media = {
  mobile:         767,
  tablet:         960,
  desktop:        1280,
  'desktop-wide': 1440,
  large:          1441
};

export function getMediaWidth() {
  if (window.matchMedia("(max-width: 767px)").matches) {
    return media.mobile;
  } else if (window.matchMedia("(max-width: 960px)").matches) {
    return media.tablet;
  } else if (window.matchMedia("(max-width: 1280px)").matches) {
    return media.desktop;
  } else if (window.matchMedia("(max-width: 1440px)").matches) {
    return media['desktop-wide'];
  } else {
    return media.large;
  }
}