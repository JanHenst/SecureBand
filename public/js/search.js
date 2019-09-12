let text = document.getElementById('searchCountry');

text.addEventListener('keyup', function(){
  ajax(1);
});
ajax(1);

function ajax(nummer) {
  let str = text.value;
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      txtHint.innerHTML = this.responseText;
    }
  }
  xmlhttp.open("GET", "../private/views/homepage/home.php?q=" + str + "&n=" + nummer, true);
  xmlhttp.send();
};
