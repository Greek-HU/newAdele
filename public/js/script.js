const $s = s => document.querySelector(s);
const $sAll = sa => document.querySelectorAll(sa);
const $ce = el => document.createElement(el);

var pictpl = p => `<img src="${p}" class="big_img" alt="">`;
$sAll('.services_box').forEach(bn => {
    bn.querySelector('.Permanent').onclick = function () {
        $s('.services_box').style.fontFamily = 'permanent,cursive';
    }
    bn.querySelector('.Poppins').onclick = function () {
        $s('.services_box').style.fontFamily = 'Poppins,sans-serif';
    }
    bn.querySelector('.Playfair').onclick = function () {
        $s('.services_box').style.fontFamily = 'Playfair Display,serif';
    }
    bn.querySelector('.Lobster').onclick = function () {
        $s('.services_box').style.fontFamily = 'Lobster,cursive';
    }
});

function mobil_navbar(){
    var nav_a = $s(".nav_links");
    if(nav_a.style.display === "block"){
        nav_a.style.display = "none";
    }else{
        nav_a.style.display = "block"
    }
    
}
 
function inputPrice(){
    console.log('Körte');
}