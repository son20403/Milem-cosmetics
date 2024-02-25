window.onscroll = function () { scrollFunction() };
function scrollFunction() {

    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        document.getElementById("logo_none").style.display = "block";
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            document.getElementById("products_detail-fixed").style.display = "block";
        } else {
            document.getElementById("products_detail-fixed").style.display = "none";
        }
    } else {
        document.getElementById("logo_none").style.display = "none";
    }
    
};

