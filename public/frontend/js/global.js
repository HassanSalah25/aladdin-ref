// toggle menu

// get navbar element
const navbar = document.querySelector(".header__navbar");

// get inner overlay element
const overlay = document.querySelector(".header__navbar__menu-bg");

// get toggle button
const toggleButton = document.querySelector(".header__toggle-menu");
const main = window.location.origin;
toggleButton.addEventListener("click", () => {
    navbar.classList.toggle("active");
});

overlay.addEventListener("click", () => {
    navbar.classList.remove("active");
});

// toggle language
const toggleBtn = document.querySelector(".header__lang");

// // get lang from localstorage
const lang = document.querySelector(".header__toggle-menu").getAttribute('data-value');

// document.documentElement.lang = lang;

// toggleBtn.classList.add(lang);

// if (lang === "ar") {
//   // set rtl html element
//   document.documentElement.dir = "rtl";
//   toggleBtn.lastElementChild.src = '/assets/images/lang-en.png';
//   toggleBtn.firstElementChild.textContent = "En";
// } else {
//   document.documentElement.dir = "ltr";
//   toggleBtn.lastElementChild.src = '/assets/images/lang-ar.png';
//   toggleBtn.firstElementChild.textContent = "Eg";
// }

toggleBtn.addEventListener("click", () => {

    if (lang === "ar") {
        localStorage.setItem("lang", "en");
        window.location.href = toggleBtn.getAttribute('data-url');
    } else {
        localStorage.setItem("lang", "ar");
        window.location.href = toggleBtn.getAttribute('data-url');
    }
//   //window.location.reload();
});

// pagination arrows handler
const paginationNextElement = document.querySelector(
    ".pagination .page-item:last-child"
);

const paginationPrevElement = document.querySelector(
    ".pagination .page-item:first-child"
);

if (paginationNextElement && lang === "en") {
    paginationNextElement.querySelector(".las").classList.remove("la-angle-left");
    paginationNextElement.querySelector(".las").classList.add("la-angle-right");

    paginationPrevElement
        .querySelector(".las")
        .classList.remove("la-angle-right");
    paginationPrevElement.querySelector(".las").classList.add("la-angle-left");
}

// handle pagination
function handlePagination() {
    const queryString = window.location?.search;
    if (queryString) {
        const urlParams = new URLSearchParams(queryString);
        const page = urlParams.get("page");

        // get pagination items
        const paginationItems = document.querySelectorAll(".pagination .page-item");

        if (paginationItems && page) {
            paginationItems.forEach((item) => {
                item.classList.remove("active");
                if (item.dataset.page === page) {
                    item.classList.add("active");
                }
            });
        }
    }
}

handlePagination();

// location of client
function getUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
        console.log("Geolocation is not supported by this browser.");
    }

    function successCallback(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        console.log("Latitude: " + latitude);
        console.log("Longitude: " + longitude);
    }

    function errorCallback(error) {
        console.log("Error getting location: " + error.message);
    }
}

getUserLocation();

export {getUserLocation};

function sliceContent(el, len) {
    const element = document.querySelectorAll(el);
    element.forEach(el => {
        const spread = el.textContent.length > len ? "..." : ""
        el.textContent = el.textContent.substring(0, len) + spread
    })
}

sliceContent(".hotels__items__item h4 a", 30);

sliceContent(".activites__item h6", 17);

sliceContent(".recent_categories__item", 80);

sliceContent(".explore__items__item__info__title a", 30);

sliceContent(".categories__items__list__item__info h6");

// handle header scroll bar in home page
const getHeader = document.querySelector(".header");

if (getHeader) {
    window.addEventListener("scroll", () => {
        let scrollY = window.scrollY;
        if (scrollY > 0) {
            getHeader.classList.add("active-header");
        } else {
            getHeader.classList.remove("active-header");
        }
    })
}


$(document).ready(function () {
    $('.search-what').blur(function (event) {
        var check = 0;
        var parentDiv = $('.search-whatautocomplete-list');

        $('body').on('click', function (event) {
            if (!$(event.target).is(parentDiv)) {
                parentDiv.empty();
            }

        })
    })
    $('.search-what').on('input', function () {
        var search_what = $(this);
        var query = $(this).val();

        var resultsContainer = $('.search-whatautocomplete-list');
        var category_id = $(this).parent().parent().find('.search_category').val();
        var sub_category_id = $(this).parent().parent().find('.search_category_2').val();
        if (query == '') {
            resultsContainer.empty();
        } else if ($(this).val() != '') {
            $.ajax({
                url: "/searchajax",
                type: "GET",
                data: {query: query, category_id: category_id, sub_category_id: sub_category_id},
                success: function (response) {
                    var resultsContainer = search_what.parent().find('.search-whatautocomplete-list');
                    resultsContainer.empty();
                    // if (response['cats'].length > 0) {
                    //     resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                    //     $.each(response['cats'], function (index, result) {
                    //
                    //         resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/category/' + result['category_slug'] + '">' + result['category_name'] + '</a>');
                    //     });
                    // }
                    // /* else {
                    //     resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                    //     resultsContainer.append('<p>No results found.</p>');
                    // }*/
                    if (response['items'].length > 0) {
                        resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                        $.each(response['items'], function (index, result) {
                            var category = null;
                            if (result['category']['parent'])
                                category = result['category']['parent']['category_slug'];
                            else
                                category = result['category']['category_slug'];
                            resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/listing/'
                                + category +
                                '/'
                                + result['category']['category_slug'] +
                                '/' + result['state']['state_slug'] +
                                '/' + result['item_slug'] +
                                '">'
                                + result['item_title'] +
                                '<br><span class="text-dark">'
                                + result['item_address'] +
                                '</span>'
                                +
                                '</a>');
                        });
                    } else {
                        resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                        resultsContainer.append('<p>No results found.</p>');
                    }
                }
            });
        }
    });

    $(document).on('click', function (e) {
        var selectSearchList = $('.select-searchautocomplete-list').find('div');
        var select_search = $('.select-search');

        // Check if the click target is not inside select-searchautocomplete-list

        if (selectSearchList.is(e.target))
        {
            $('.select-search').attr('name', $(event.target).attr('name'));
            $('.select-search').val($(event.target).text());
            selectSearchList.parent().empty();
        }
        else if (select_search.is(e.target))
        {
            var selectSearchList2 = $('.select-searchautocomplete-list');
            selectSearchList2.empty();
            selectSearchList2.append('<div class="city" style="display:block;padding: 10px;color: black" > بالقرب مني</div>');
            $(this).attr('name', 'filter_sort_by');
        }
        else {
            // Clear the content of select-searchautocomplete-list
                selectSearchList.parent().empty();
        }

    });


    $('.select-search').on('input', function () {
        var select_search = $(this);
        var self = this;

        if ($(this).val() === '') {
            var resultsContainer = select_search.parent().find('.select-searchautocomplete-list');
            resultsContainer.empty();
            resultsContainer.append('<div class="city" style="display:block;padding: 10px;color: black" > بالقرب مني</div>');
            $(this).attr('name', 'filter_sort_by');

        } else {
            var query = $(this).val();
            $.ajax({
                url: "/get-cities",
                type: "GET",
                data: {query: query},
                success: function (response) {
                    var resultsContainer = select_search.parent().find('.select-searchautocomplete-list');
                    resultsContainer.empty();
                    if (response['states'].length > 0) {
                        resultsContainer.append('<div style="display:block;padding: 10px;color:  gray">المحافظات</div>');
                        $.each(response['states'], function (index, result) {
                            resultsContainer.append('<div name="search_state" style="display:block;cursor: pointer;padding: 10px;color: black" href="/category/' + result['id'] + '/البحث">' + result['state_name'] + '</div>');
                        });
                    }
                    if (response['cities'].length > 0) {
                        resultsContainer.append('<div style="display:block;padding: 10px;color:  gray">الاحياء</div>');
                        $.each(response['cities'], function (index, result) {
                            resultsContainer.append('<div name="search_city" style="display:block;cursor: pointer;padding: 10px;color: black" href="/category/' + result['id'] + '/البحث">' + result['city_name'] + '</div>');
                        });
                    } else {
                        resultsContainer.append('<p>No results found.</p>');
                    }
                }
            });
            setTimeout(function () {
                if (select_search.val() == '') {
                    var resultsContainer = $('.select-searchautocomplete-list');
                    resultsContainer.empty();
                    resultsContainer.append('<div class="city" style="display:block;padding: 10px;color: black" > بالقرب مني</div>');
                    $(self).attr('name', 'filter_sort_by'); // Use 'self' instead of 'this'
                }
            }, 1000);
        }
    });
});
