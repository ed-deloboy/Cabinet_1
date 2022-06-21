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
let about_btn_top = document.getElementById("nav_about");
let marketing_btn_top = document.getElementById("nav_marketing");

// left menu btn
let partner_btn_left = document.getElementById("partner_page");
let business_btn_left = document.getElementById("business_page");
let faq_btn_left = document.getElementById("faq_page");

// profle 
let rofile_btn = document.getElementById("profile_page");

let partnerLink__link = document.getElementById('partnerLink__link');
let partnerLink__text = document.getElementById('partnerLink__text').textContent;
let copyBtn = document.getElementById("linkCopyBtn");


// notification func

copyBtn.addEventListener('click', e => {
  round_success_noti('Партнёрская ссылка скопирована');
  partnerLink__link.value = partnerLink__text;
  partnerLink__link.select();
  document.execCommand("copy");
})

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

      let prof_update_btn = document.getElementById('profile_update_btn');
      prof_update_btn.addEventListener('click', e => {
        round_success_noti('Ваш профиль обновлен');

      })
    },
  });
});




