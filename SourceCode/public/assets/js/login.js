$(document).ready(function(){
    console.log("lorem");
    document.addEventListener("click", () => {
        let strId = event.target.dataset['id'];

        switch (strId) {
            case "showPass":
                manipulationPassField("password", "show");
                break;
            case "hidePass":
                manipulationPassField("password", "hide");
                break;
            case "showConfPass":
                manipulationPassField("conf", "show");
                break;
            case "hideConfPass":
                manipulationPassField("conf", "hide");
                break;
            default:
                break;
        }
    });


    function manipulationPassField(type, action){
        let elm, btn, btnHide;

        if (type == "password"){
            elm = document.getElementById("pass");
            btn = document.getElementById("showPass");
            btnHide = document.getElementById("hidePass");
        } else {
            elm = document.getElementById("confPass");
            btn = document.getElementById("showConfPass");
            btnHide = document.getElementById("hideConfPass");
        }

        if (action == "show"){
            btn.classList.remove('d-block');
            btn.classList.add('d-none');

            btnHide.classList.remove("d-none");
            btnHide.classList.add("d-block");
            elm.type = "text";
        } else if(action == "hide"){
            btn.classList.remove('d-none');
            btn.classList.add('d-block');

            btnHide.classList.remove("d-block");
            btnHide.classList.add("d-none");
            elm.type = "password";
        }
    }
})
