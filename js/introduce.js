var ztxt = new Ztextify(".introduce_3d_img", {
    depth: "20px",
    layers: 30,
    fade: false,
    direction: "forwards",
    event: "pointer",
    eventRotation: "30deg"
});

const nextBtn = document.querySelector('.next_btn'),
introduce = document.querySelector('.introduce');

nextBtn.addEventListener('click', function(){
    introduce.classList.add('active');
});

console.log(
    "\n"+
    " 🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻\n"+
    "\n"+
    " [ Created by Uzcoin ]\n"+
    " [  ➡️ https://github.com/Uzcoin404 ]\n"+
    " [  ➡️ uzcointg@gmail.com ]\n"
)