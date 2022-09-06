function signin() {
    var email = document.getElementById("e").value;
    var pass = document.getElementById("p").value;
    var check = document.getElementById("c").checked;
    var remember;
    //alert(email);
    // alert(pass);
    // alert(check);

    var f = new FormData();
    f.append("email", email);
    f.append("pass", pass);
    f.append("check", check);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
        };
    };

    r.open("POST", "signin.php", true);
    r.send(f);
}