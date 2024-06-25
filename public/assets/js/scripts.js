
window.addEventListener("load", () => {
    const load = document.querySelector(".container");
    load.classList.add("container-hidden");
});
new WOW().init();

window.addEventListener("scroll", () => {
    const header = document.querySelector("#header");
    const title = document.querySelector("#title");
    const text_li_1 = document.querySelector("#text-li-1");
    const text_li_2 = document.querySelector("#text-li-2");
    const text_li_3 = document.querySelector("#text-li-3");
    const text_li_4 = document.querySelector("#text-li-4");
    const text_li_5 = document.querySelector("#text-li-5");
    const menu = document.querySelector("#menu");
    const text_kh = document.querySelector("#text-kh");
    const text_en = document.querySelector("#text-en");

    if (window.scrollY > 40) {
        header.classList.add(
            "bg-white/30",
            "backdrop-blur-[50px]",
            "shadow-lg"
        );
        title.classList.add("text-black");
        text_li_1.classList.add("text-black");
        text_li_2.classList.add("text-black");
        text_li_3.classList.add("text-black");
        text_li_4.classList.add("text-black");
        text_li_5.classList.add("text-black");

        menu.classList.add("text-gray-900");
        text_kh.classList.add("text-black");
        text_en.classList.add("text-black");
    } else {
        header.classList.remove(
            "bg-white/30",
            "backdrop-blur-[50px]",
            "shadow-lg",
            "lg:bg-black"
        );
        title.classList.remove("text-black", "lg:text-white");
        text_li_1.classList.remove("text-black");
        text_li_2.classList.remove("text-black");
        text_li_3.classList.remove("text-black");
        text_li_4.classList.remove("text-black");
        text_li_5.classList.remove("text-black");

        menu.classList.remove("text-gray-900");
        text_kh.classList.remove("text-black");
        text_en.classList.remove("text-black");
    }
});

function onClickLangKh() {
    localStorage.setItem("localLangKh", false);
    localStorage.removeItem("localLangEn", false);
}

function onClickLangEn() {
    localStorage.removeItem("localLangKh", false);
    localStorage.setItem("localLangEn", false);
}

function onLoad() {
    var localLangKh;
    var localLangEn;
    if (localStorage.getItem("localLangKh") == false) {
        localLangKh = true;
    } else {
        localLangKh = localStorage.getItem("localLangKh");
    }

    if (localLangKh) {
        document.getElementById("dropdownKh").classList.remove("hidden");
        document.getElementById("dropdownKh").classList.add("inline-flex");
        document.getElementById("dropdownEn").classList.remove("inline-flex");
        document.getElementById("dropdownEn").classList.add("hidden");
    } else {
        document.getElementById("dropdownKh").remove();
    }

    if (localStorage.getItem("localLangEn") == false) {
        localLangEn = true;
    } else {
        localLangEn = localStorage.getItem("localLangEn");
    }

    if (localLangEn) {
        document.getElementById("dropdownEn").classList.remove("hidden");
        document.getElementById("dropdownEn").classList.add("inline-flex");
        document
            .getElementById("dropdownKh")
            .classList.remove("inline-flex");
        document.getElementById("dropdownKh").classList.add("hidden");
    } else {
        document.getElementById("dropdownEn").remove();
    }
}

