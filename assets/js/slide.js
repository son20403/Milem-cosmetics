var slideItem = document.querySelector('.slider_show').children;
var slideLength = slideItem.length;
var next = document.querySelector('#next');
var prev = document.querySelector('#prev');

var index = 0;

next.onclick = function () {
    chuyenTiep('next');
}
prev.onclick = function () {
    chuyenTiep('prev');
}

function chuyenTiep(chon) {
    if (chon == 'next') {
        index++;
        if (index == slideLength) {
            index = 0;
        }
       
    } else {
        index--;
        if (index < 0) {
            index = slideLength - 1;
        }
        
    }
    for (var i = 0; i < slideLength; i++) {
        slideItem[i].classList.remove('active');
    }
    slideItem[index].classList.add('active');
}
setInterval("chuyenTiep('next')", 4000);