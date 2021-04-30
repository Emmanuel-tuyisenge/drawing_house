window.onload = () => {
const colorBtn = document.querySelector('.colorBtn')
const content = document.querySelectorAll('.facade')
const contentTop = document.querySelectorAll('.roof')


colorBtn.addEventListener('click', event => {
        for (let index = 0; index < content.length; index++) {
            const element = content[index];
            element.style.background = "red";
            
        }
        for (let index = 0; index < contentTop.length; index++) {
            const elementRoof = contentTop[index];
            elementRoof.style.borderColor = "transparent transparent red";
            
        }

    });


}