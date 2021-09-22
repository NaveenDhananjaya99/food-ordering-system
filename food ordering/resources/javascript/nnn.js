function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["pwd"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }

    if (y == "") {
        alert("password must be filled out");
        return false;
    }

    var t = document.getElementById("pp").value;
    if (t.length < 5) {
        alert("password length is short")
        return false;
    }
}

function validateFormlogin() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["pwd"].value;
    var w = document.forms["myForm"]["Number"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }

    if (y == "") {
        alert("password must be filled out");
        return false;
    }

    var t = document.getElementById("pp").value;
    if (t.length < 5) {
        alert("password length is short")
        return false;
    }
    if (w == "") {

        alert("number must be filled out");
        return false;

    }

    if (w.length < 10) {
        alert("Number length is short");
        return false;
    }
}

function validateorder() {
    var name = document.forms["myform"]["name"].value;

    if (name == "") {

        alert("add name");
        return false;

    }



}



function order() {
    var e = document.getElementById("ssstot");
    document.write(e);
    document.write("work");
}