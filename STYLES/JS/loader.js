var  loader;
    function loadNow(opacity) {
        if(opacity <= 0){
            displayBanner();
        }
        else {
            loader.style.opacity = opacity;
            window.setTimeout(function() {
                loadNow(opacity - 0.05);
            }, 50);
        }
    }

    function displayBanner(){
        loader.style.display = "none";
        document.getElementById("Banner").style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function(){
        loader = document.getElementById("loader");
        loadNow(4);
    })