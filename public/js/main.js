const inputTitle = document.querySelector('.input-title');
const title = document.querySelector('.title');
const defaultTitle = document.querySelector('.title').innerHTML;

inputTitle.addEventListener("input", showNameOnTitle);

function showNameOnTitle() {

    if (inputTitle && title) {
        if (inputTitle.value.length <= 0) {
            title.innerHTML = defaultTitle;
        } else {
            title.innerHTML = inputTitle.value;
        }
    }

}



function showHideMenu() {

    var div = document.getElementById("responsive-menu");

    if (div.classList.contains("opacity-0")) {
        div.classList.remove("opacity-0");
        div.classList.add("opacity-100");

    } else {

        div.classList.remove("opacity-100");
        div.classList.add("opacity-0");

    }

}

function previewFile() {
    const preview = document.querySelector(".preview-img");
    const file = document.querySelector("input[type=file]").files[0];
    const reader = new FileReader();

    reader.addEventListener(
        "load",
        function () {
            preview.src = reader.result;
            preview.classList.add("rounded-full");
        },
        false,
    );

    if (file) {
        reader.readAsDataURL(file);
    }
}
