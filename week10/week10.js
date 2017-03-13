function loadFile(elementId, filepath) {
    if (filepath.includes("json")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            var studentData = JSON.parse(this.responseText);
            var text = "";
            for (i = 0; i < studentData.students.length; i++) {
                text += studentData.students[i].first + ' ';
                text += studentData.students[i].last + '<br/>';
                text += studentData.students[i].major + '<br/>';
                text += studentData.students[i].gpa + '<br/>';
                if (i != studentData.students.length - 1) {
                    text += '<br/>';
                }
            }
            document.getElementById(elementId).innerHTML = text;
        };
        xhttp.open("GET", filepath, true);
        xhttp.send();
    } else {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            document.getElementById(elementId).innerHTML = this.responseText.replace(/\n/g, "<br>");;
        };
        xhttp.open("GET", filepath, true);
        xhttp.send();
    }
}
