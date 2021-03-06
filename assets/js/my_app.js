// custom functions

// top menu
let top_nav_list = document.getElementById("menu_top");
let top_nav_link = top_nav_list.querySelectorAll("a");

// body container
let body_container = document.querySelector(".page-content");
let loader = document.querySelector(".card-body");

// top nav btn
let general_btn_top = document.getElementById("nav_general");
let vebinar_btn_top = document.getElementById("nav_vebinars");
let marketing_btn_top = document.getElementById("nav_marketing");
let about_btn_top = document.getElementById("nav_about");
let promo_btn_top = document.getElementById("nav_promo");
let finance_btn_top = document.getElementById("finance_page");

// left menu btn

let partner_btn_left = document.getElementById("partner_page");
let business_btn_left = document.getElementById("business_page");
let contest_btn_left = document.getElementById("contest_page");
let faq_btn_left = document.getElementById("faq_page");

// profle
let rofile_btn = document.getElementById("profile_page");

let partnerLink__link = document.getElementById("partnerLink__link");
let partnerLink__text =
  document.getElementById("partnerLink__text").textContent;
let copyBtn = document.getElementById("linkCopyBtn");
let editPasswordForm = document.getElementById("editPasswordForm");

// notification func

copyBtn.addEventListener("click", (e) => {
  round_success_noti("Партнёрская ссылка скопирована");
  partnerLink__link.value = partnerLink__text;
  partnerLink__link.select();
  document.execCommand("copy");
});

top_nav_link.forEach((e) => {
  e.addEventListener("click", (e) => {
    top_nav_link.forEach((element) => {
      element.classList.remove("active");
    });
    e.target.classList.add("active");
  });
});

// left menu
let left_nav_list = document.getElementById("menu_left");
let left_nav_link = left_nav_list.querySelectorAll("a");
let top_nav_links = document.querySelectorAll(".nav-link");

// обработка нажатия кнопок меню
top_nav_links.forEach((element) => {
  element.addEventListener("click", (e) => {
    left_nav_link.forEach((element) => {
      element.classList.remove("nav_left_active");
    });
  });
});

left_nav_link.forEach((b) => {
  // устанавливаем обработчики на кнопки
  b.addEventListener("click", (e) => {
    // console.log(e);

    left_nav_link.forEach((element) => {
      element.classList.remove("nav_left_active");
    });

    top_nav_links.forEach((element) => {
      element.classList.remove("active");
    });

    if (e.srcElement.classList[0] == "menu-title") {
      e.path[1].classList.add("nav_left_active");
      console.log(e.path[1].classList);
    } else {
      e.target.classList.add("nav_left_active");
    }
  });
});

// Главная страница, загрузка

$.ajax({
  type: "GET",
  url: "pages/general.php",
  dataType: "html",
  success: function (response) {
    body_container.innerHTML = response;
  },
});

// Прослушка главной страницы по нажатию
general_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/general.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка вебинар
vebinar_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/vebinars.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;

      // запуск слайдера
      let vebinarsPageSlider = new Swiper(".vebinars-slider-container", {
        spaceBetween: 10,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2.3,
            spaceBetween: 10,
          }
        },
      });
    },
  });
});

// прослушка о нас
about_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/about.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка о promo
promo_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/promo.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка финансы
finance_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/finance.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;

      // валидация даты карты
      let cardDateInput = document.querySelectorAll("#impordCardDate");
      let cardDateMask = new Inputmask("99/99");
      cardDateMask.mask(cardDateInput);

      // валидация суммы перевода

      let card_number = document.querySelectorAll(".card_number");
      let card_number_mask = new Inputmask("9999_9999_9999_9999");
      card_number_mask.mask(card_number);
    },
  });
});

// прослушка маркетинг
marketing_btn_top.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/marketing.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка партнёры
partner_btn_left.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/partners.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка бизнес
business_btn_left.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/business.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка конкурс
contest_btn_left.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/contest.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка бизнес
faq_btn_left.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/faq.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;
    },
  });
});

// прослушка профайл
rofile_btn.addEventListener("click", (e) => {
  body_container.classList.add("d-none");
  loader.classList.remove("d-none");
  $.ajax({
    type: "GET",
    url: "pages/profile.php",
    dataType: "html",
    success: function (response) {
      loader.classList.add("d-none");
      body_container.classList.remove("d-none");
      body_container.innerHTML = response;

      let prof_update_btn = document.getElementById("profile_update_btn");
      prof_update_btn.addEventListener("click", (e) => {
        round_success_noti("Ваш профиль обновлен");
      });
    },
  });
});

// edit password
editPasswordForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let data = $("#editPasswordForm").serializeArray();
  console.log(data);

  $.ajax({
    type: "POST",
    url: "config/edit_password.php",
    data: data,
    success: function (response) {
      console.log(response);
      if (response == 234) {
        round_warning_noti("Все поля пустые");
      }

      if (response == 34) {
        round_warning_noti("Поля ввода нового пароля пустые");
      }

      if (response == 1) {
        round_warning_noti("Новые пароли не совпадают, попробуйте еще раз");
      }

      if (response == 2) {
        round_warning_noti("Поле старого пароля пустое");
      }

      if (response == 3) {
        round_warning_noti("Поле нового пароля пустое");
      }

      if (response == 4) {
        round_warning_noti("Поле ввода повторного нового пароля пустое");
      }
      if (response == 7) {
        round_success_noti(
          "Запрос на изменение пароля подтвержден, проверьте EMAIL"
        );
      }
    },
  });
});
