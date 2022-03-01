let select = document.querySelectorAll("#charac");

// function characChoice(){
//       
// }
select.forEach(image => {
    image.addEventListener("click", () => {
        let imgSelected = document.querySelector('#charac');
        console.log(imgSelected);
        image.style.backgroundColor = "green";
    })
    image.addEventListener("click", () => {
        console.log(image);
        image.style.backgroundColor = "green";
    })
});

// si a = image active (clicked)
// bg color = green
// si b = new image active (clicked)
// bg color = green and a bg color is back to origiin


// select.addEventListener('click', function(){
// });


//to do : onclick on the characters img 
//        i want to keep displaying the hoover css
//        then on submit on the button i want to display it in my carousel

