//Thanh menu trên mobile

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () =>{ // clik vào thanh menu bên phải là từ -300px của righ thành 0 troet về thành menu và ngược lại
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click', () =>{ // clik vào thanh menu bên phải là từ -300px của righ thành 0 troet về thành menu và ngược lại
        nav.classList.remove('active');
    })
}


