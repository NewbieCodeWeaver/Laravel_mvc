
function showHide() 

{

    var div = document.getElementById("responsive-menu");

    if (div.classList.contains("hidden"))

        {
            div.classList.remove("hidden");

        } else {

            div.classList.add("hidden");
            
        }

}