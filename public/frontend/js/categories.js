
const modalEl = document.getElementById("welcomeModal");

if (modalEl) {
  const myModal = new bootstrap.Modal(modalEl);
  myModal.show();

  setTimeout(() => {
    myModal.hide();
  }, 4000);
}

var categoriesSwiper = new Swiper(".category-swiper__inner", {
  autoplay: true,
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".category-swiper__inner-pagination",
    clickable: true,
  },
});

// toggle contacts list
const contactBTn = document.querySelectorAll(
  ".categories__items__list__item__info__footer__btn"
);

contactBTn.forEach((item) => {
  item.addEventListener("click", () => {
    const contactListItems = Array.from(item.parentElement.children).find(
      (item) =>
        item.classList.contains(
          "categories__items__list__item__info__footer__contacts"
        )
    );
    contactListItems.classList.toggle("active");
  });
});



// toogle filter sidebar
const filterBtn = document.querySelector(
  ".categories__orders__toggle-filter-btn"
);

const categoriesFilterBtn = document.querySelector(
  ".categories__filters__toggle-btn"
);

function toggleFilter() {
  // move the content
  const categoriesItems = document.querySelector(".cateogires__items");

  const categoriesFilter = document.querySelector(".cateogries__filters");

  categoriesItems.classList.toggle("active-sidebar");

  categoriesFilter.classList.toggle("active-sidebar");
}

if (filterBtn) {
  filterBtn.addEventListener("click", toggleFilter);
  categoriesFilterBtn.addEventListener("click", toggleFilter);
}

// change layout
const layoutBtns = document.querySelectorAll(".categories__orders__layout-btn");

if (layoutBtns) {
  layoutBtns.forEach((item) => {
    item.addEventListener("click", () => {
      document.querySelector(
        ".categories__items__list"
      ).style.gridTemplateColumns = `repeat(${item.dataset.layout}, 1fr)`;
    });
  });
}

// handle registaeration filter

function handleRegisterationFilter() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const query = urlParams.get("char");
  
  console.log(query);

  // get pagination items
  const letters = document.querySelectorAll(".categories__letters a");

  if (letters && query) {
    letters.forEach((item) => {
      item.classList.remove("active");
      if (item.dataset.query === query) {
        item.classList.add("active");
      }
    });
  }
}

handleRegisterationFilter();

// when change selectOrderBy
const selectOrderByEl = document.getElementById("selectOrderBy");

// check -> because this file using in other pages and may the page not contain on this element
if (selectOrderByEl) {
  selectOrderByEl.addEventListener("change", (e) => {
    console.log(e.target.value);
    getUserLocation();
  });
}

// handle like button click
const thumbButtonEl = document.querySelectorAll(".thumb--btn");

if (thumbButtonEl.length) {
  thumbButtonEl.forEach((item) => {
    item.addEventListener("click", () => {
      item.classList.toggle("active");
    });
  });
}

// handle share btn
const shareButtonEl = document.querySelectorAll(".share--btn");

if (shareButtonEl.length) {
  shareButtonEl.forEach((item) => {
    item.addEventListener("click", () => {
      console.log(item.lastElementChild);
      item.lastElementChild.classList.toggle("active");
    });
  });
}
