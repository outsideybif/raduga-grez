export function changeHash(hash) {
  if (history.pushState) {
    history.pushState(null, null, `#${hash}`);
  } else {
    location.hash = hash;
  }
}