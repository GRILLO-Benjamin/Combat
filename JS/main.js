//to do : onclick on the characters img 
//        i want to change the bg color only on the selected img

let select = document.querySelectorAll("#charac");
let image = document.getElementsByClassName("character_img");

for (let i = 0; i < image.length; i++) {
    let currentImage = image[i];
    currentImage.onclick = function () {
        select.forEach(function(el){
            el.classList.remove('selected_img')
        });
        this.classList.add('selected_img')
    }
}

//        then on submit on the button i want to display it in my carousel

// to do : onsubmit -> get the selected img and display it in the carousel div

let addCharac = document.querySelector('.selected_img')

addCharac.addEventListener('click', () => {

    console.log(addCharac);
});

