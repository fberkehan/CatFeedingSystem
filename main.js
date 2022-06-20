function bilgileriGoster() {
    var yanpanel = document.getElementById("yanpanel");
    var bilgilendirme = document.getElementById("detay");

    if (yanpanel.style.width == "60vw") {
        yanpanel.className = "yanpanel animate__animated animate__rubberBand";
        setTimeout(() => {
            yanpanel.style.width = "13vw";
            bilgilendirme.style.display = "none";
            yanpanel.style.padding = "0px";
        }, 350);


    } else {
        yanpanel.style.width = "60vw";
        yanpanel.style.padding = "60px";
        yanpanel.className = "yanpanel animate__animated animate__slideInLeft";

        bilgilendirme.style.display = "block";
    }




}