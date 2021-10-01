// This JS is not Important

var text = ["Login", "Recover","Sign Up"];
var cls = ["lgin", "rcvr", "sup"]
var c = 0;
var textel = document.querySelectorAll(".changeText");
setInterval(change, 3500);


function change() {
    var inpx = document.querySelector(".mCont");
    switch (c) {
        case 0:
            inpx.classList.add('lgin');
            inpx.classList.remove('rcvr');
            inpx.classList.remove('sup');
            break;
        case 1:
            inpx.classList.add('rcvr');
            inpx.classList.remove('lgin');
            inpx.classList.remove('sup');
            
            break;
        case 2:
            inpx.classList.add('sup');
            inpx.classList.remove('lgin');
            inpx.classList.remove('rcvr');            
        default:
            break;
    }

    textel.forEach(e => {
        e.innerHTML = text[c];
        });
           
        c++;
        if (c >= text.length) {
            c = 0;
        }
    
}