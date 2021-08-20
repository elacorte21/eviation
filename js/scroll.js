var cover = document.getElementById('cover');
var windowHeight = window.innerHeight;
//var windowWidth = window.innerWidth;
//var scrollArea = 1000 - windowHeight;

// update position of square 1 and square 2 when scroll event fires.
window.addEventListener('scroll', function() {
  //var scrollTop = window.pageYOffset || window.scrollTop;
  //var scrollPercent = scrollTop/scrollArea || 0;
  var scrollTop = window.pageYOffset;
  //cover.style.backgroundSize = 120 + scrollTop*0.02 + '%';
  cover.style.backgroundSize = 110 + scrollTop*0.02 + '%';
});