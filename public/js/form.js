function send() {
setTimeout(function() {
  alert("Your message has been sent!");
  document.location.reload(true);
}, 200);

}

function reload() {
  document.location.reload(true);
}
