function toggleBasket() {
  const toggleMenu = () => {
    document.querySelector("#mobilemenu").classList.toggle("mobilenav_open");
    document.querySelector("#body").classList.toggle("mobilenav__overflow");
    document.querySelector("#logo").classList.toggle("topbar__logo_main");
  };
  document
    .querySelector("#menuTrigger")
    .addEventListener("click", () => toggleMenu());
  document
    .querySelector("#menuClose")
    .addEventListener("click", () => toggleMenu());

  // document.addEventListener("click", ({ target }) => {
  //   if (!target.closest(".main")) {
  //     document.querySelector("#mobilemenu").classList.remove("mobilenav_open");
  //     console.log("close outside")
  //   }
  // });

  // document.querySelector("#mobilemenu2").addEventListener("click", (e) => {
  //   e.stopPropagation();
  // });
}

function toggleSearch() {
  const toggleMenu = () => {
    document.querySelector("#searchForm").classList.toggle("searchbar_open");
    document.querySelector("#searchform").focus();
  };
  document
    .querySelector("#searchTrigger")
    .addEventListener("click", () => toggleMenu());
}

window.addEventListener("load", toggleBasket);
window.addEventListener("load", toggleSearch);
