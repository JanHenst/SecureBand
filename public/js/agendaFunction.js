  function showUser(str) {
    if (str == "") {
        document.getElementById("resultAgenda").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resultAgenda").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../private/views/agendapage/body.php?q="+str, true);
        xmlhttp.send();
    }
}
