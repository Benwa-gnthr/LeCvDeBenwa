var cursor = document.getElementById("cursor");
document.body.addEventListener("mousemove", function(e) {
  cursor.style.left = e.clientX + "px",
  cursor.style.top = e.clientY + "px";
});

var DottedCursor = document.getElementById("cursor2");
document.body.addEventListener("mousemove", function(e) {
  DottedCursor.style.left = e.clientX + "px",
  DottedCursor.style.top = e.clientY + "px";
});