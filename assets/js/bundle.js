function toggleBasket() {
    const toggle = () => {
      document.querySelector("#mobilemenu").classList.toggle("mobilenav_open");
      document.querySelector("#body").classList.toggle("mobilenav__overflow");
      document.querySelector("#logo").classList.toggle("topbar__logo_main");
    }
    document.querySelector("#menuTrigger").addEventListener("click", () => toggle());
    document.querySelector("#menuClose").addEventListener("click", () => toggle());
  
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
  
  window.addEventListener("load", toggleBasket);
  
