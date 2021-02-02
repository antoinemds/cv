function form() {
    var form = document.forms["contact"]["message"].value;

    alert(form)
}



function good(){
    var form = document.forms["contact"]["message"].value;

        if (form == null || form == ""){
            alert("Vous n'avez pas remplit le champ message");
        }

}