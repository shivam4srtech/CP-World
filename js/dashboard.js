//Active Btn on dashboard sidebar
const buttons = document.querySelectorAll('.active-button');
       buttons.forEach(button => {
         button.addEventListener('click', () => {
           if (button.classList.contains('active')) {
             button.classList.remove('active');
           } else {
             button.classList.add('active');
           }
         });
       });

//Click to copy tootltip for username      
const textElement = document.getElementById("text");
const copyButton = document.getElementById("copy");

const copyText = (e) => {
window.getSelection().selectAllChildren(textElement);
document.execCommand("copy");
e.target.setAttribute("tooltip", "Copied! ✅");
};

const resetTooltip = (e) => {
e.target.setAttribute("tooltip", "Click to Copy");
};

copyButton.addEventListener("click", (e) => copyText(e));
copyButton.addEventListener("mouseover", (e) => resetTooltip(e));

//Click to copy tootltip for password  
const passElement = document.getElementById("passText");
const copyPassButton = document.getElementById("copyPass");

const copyPass = (e) => {
window.getSelection().selectAllChildren(passElement);
document.execCommand("copy");
e.target.setAttribute("tooltip", "Copied! ✅");
};

const resetTooltipPass = (e) => {
e.target.setAttribute("tooltip", "Click to Copy");
};

copyPassButton.addEventListener("click", (e) => copyPass(e));
copyPassButton.addEventListener("mouseover", (e) => resetTooltip(e));