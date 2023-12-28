AOS.init();

const welcomeModal = document.getElementById("welcomeModal");
if (welcomeModal) {
  const myModal = bootstrap.Modal.getInstance(welcomeModal);
  myModal.show();

  setTimeout(() => {
    myModal.hide();
  }, 4000);
}

// swipers
var landingSwiper = new Swiper(".landing__swiper", {
  autoplay: true,
    loop: true,
  navigation: {
    nextEl: ".landing__swiper__button__swiper-button-next",
    prevEl: ".landing__swiper__button__swiper-button-prev",
  },
});

var category_swiper = new Swiper(".category-swiper__inner", {
    autoplay: {
        delay: 5000, // Set the delay in milliseconds (e.g., 3000ms or 3 seconds)
        disableOnInteraction: false, // Set to false if you want autoplay to continue even when user interacts with the swiper
    },
    loop: true,
    slidesPerView: 1,

});

var hotelsSwiper = new Swiper(".hotels__items__swiper", {
  // autoplay: true,
  slidesPerView: 1,
  spaceBetween: 25,
  pagination: {
    el: ".hotels__items__swiper__swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".hotels__items__swiper__swiper-button-next",
    prevEl: ".hotels__items__swiper__swiper-button-prev",
  },
  breakpoints: {
    400: {
      slidesPerView: 1.1,
    },
    767: {
      slidesPerView: 1.3,
    },
    991: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    },
  },
});

const swiperGrid = {
  grid: {
    rows: 2,
  },
};

var exploreSwiper = new Swiper(".explore__items__swiper", {
  ...swiperGrid,
  slidesPerView: 1,
  // autoplay: true,
  spaceBetween: 25,
  pagination: {
    el: ".explore__items__swiper__pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".explore__items__swiper__button-prev",
    prevEl: ".explore__items__swiper__button-next",
  },
  breakpoints: {
    400: {
      slidesPerView: 1.1,
      ...swiperGrid,
    },
    767: {
      slidesPerView: 1.3,
      ...swiperGrid,
    },
    991: {
      slidesPerView: 2,
      ...swiperGrid,
    },
    1200: {
      slidesPerView: 3,
      ...swiperGrid,
    },
  },
});

var blogsSwiper = new Swiper(".blogs__item__swiper", {
  slidesPerView: 3,
  autoplay: true,
  spaceBetween: 25,
  direction: "vertical",
  breakpoints: {
    767: {
      slidesPerView: 4,
    },
  },
});

// change radius of landing__search-form__inner when select box is open
const landingSearchFormInnerElement = document.querySelector(
  ".landing__search-form__inner"
);
const landingSelectBox = document.querySelector(
  ".landing__search-form__inner .form-select"
);
let selectBoxIsOpen = false;

function changeRadius() {
  selectBoxIsOpen = !selectBoxIsOpen;
  if (selectBoxIsOpen) {
    landingSearchFormInnerElement.style.borderBottomRightRadius = "5px";
  } else {
    landingSearchFormInnerElement.style.borderBottomRightRadius = "100px";
  }
}

if (landingSelectBox) {
  landingSelectBox.addEventListener("click", () => {
    changeRadius();
  });
  landingSelectBox.addEventListener("blur", () => {
    if (selectBoxIsOpen) {
      changeRadius();
    }
  });
}
