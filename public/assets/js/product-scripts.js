const menuProduct = [
    {
        id: "mb-invoice",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
    {
        id: "mb-expense",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
    {
        id: "mb-customer",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
    {
        id: "mb-inventory",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
    {
        id: "mb-automation",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
    {
        id: "mb-production",
        imgSrc: "https://res.cloudinary.com/glide/video/upload/w_1224/v1679490963/glideapps.com/homepage/2023/2.1%20Field%20Operations_med.mp4",
    },
];

const menuWrapper = document.querySelector(".menu-wrapper");
const allBtns = document.querySelectorAll(".btn");
const btnContainer = document.querySelector(".btn-container");
const allBtns_sm = document.querySelectorAll(".btn-sm");
const btnContainer_sm = document.querySelector(".btn-container-sm");

btnContainer.addEventListener('click', (e) => {
    const btnId = e.target.dataset.id;
    allBtns.forEach((btn) => {
        if (btnId) {
            btn.classList.remove("xl:px-8", "bg-white", "rounded-full");
            e.target.classList.add("xl:px-8", "bg-white", "rounded-full");
        }
    });
})

btnContainer_sm.addEventListener("click", (e) => {
    const btnId_sm = e.target.dataset.id;
    allBtns_sm.forEach((btnSm) => {
        if (btnId_sm) {
            btnSm.classList.remove("bg-white", "shadow-lg");
            e.target.classList.add("bg-white", "shadow-lg");
        }
    });
});

allBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const id = e.target.dataset.id;
        const filterPro = menuProduct.filter((item) => {
            return item.id == id;
        })
        if (id == "mb-invoice") {
            showingProduct(filterPro);
        } else {
            showingProduct(filterPro);
        }
    })
})

allBtns_sm.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const id = e.target.dataset.id;
        const filterPro = menuProduct.filter((item) => {
            return item.id == id;
        });
        if (id == "mb-invoice") {
            showingProduct(filterPro);
        } else {
            showingProduct(filterPro);
        }
    });
});

const showingProduct = (arrayProduct) => {
    const displayProduct = arrayProduct.map((p) => {
        return `<video autoplay playsinline loop
                    class="object-cover w-full max-h-[680px] rounded-3xl lg:rounded-none max-sm:hidden"
                    src="${p.imgSrc}"
                    style="opacity: 1;">
                </video>`;
    }).join("");
    menuWrapper.innerHTML = displayProduct;
}

const sofewareList = [
    {
        id: "1",
        imgSrc: "https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fconnect-your-data.jpg&w=1200&q=75",
    },
    {
        id: "2",
        imgSrc: "https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fdeploy-on-all-your-devices.jpg&w=2048&q=75",
    },
    {
        id: "3",
        imgSrc: "https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fautomate-your-workflows.jpg&w=2048&q=75",
    },
    {
        id: "4",
        imgSrc: "https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Fadaptive-software%2Fmaximize-your-budget.jpg&w=2048&q=75",
    },
];

const main = document.querySelector(".main-btn");
const all_Btns = document.querySelectorAll(".btn-sf");
const wrapper = document.querySelector(".img_wrapper");

main.addEventListener("click", (e) => {
    const btn_id = e.target.dataset.id;
    all_Btns.forEach((btn_sf) => {
        if (btn_id) {
            btn_sf.classList.remove("bg-gray-400");
            e.target.classList.add("bg-gray-400");
        }
    })
});

all_Btns.forEach((btn_sf) => {
    btn_sf.addEventListener("click", (e) => {
        const id = e.target.dataset.id;
        const filter_Pro = sofewareList.filter((item) => {
            return item.id == id;
        });
        if (id == "1") {
            showingSofeware(filter_Pro);
        } else {
            showingSofeware(filter_Pro);
        }
    });
});

const showingSofeware = (array_Product) => {
    const display_Product = array_Product
        .map((p) => {
            return `<img src="${p.imgSrc}" />`;
        })
        .join("");
    wrapper.innerHTML = display_Product;
};
