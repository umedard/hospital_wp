function toggleBasket() {
    document.querySelector("#menuTrigger").addEventListener("click", () => {
      document.querySelector("#mobilemenu").classList.toggle("mobilenav_open");
      document.querySelector("#body").classList.toggle("mobilenav__overflow");
      console.log(document.querySelector("#mobilemenu"))
    });

    document.querySelector("#menuClose").addEventListener("click", () => {
        document.querySelector("#mobilemenu").classList.toggle("mobilenav_open");
        document.querySelector("#body").classList.toggle("mobilenav__overflow");
        console.log(document.querySelector("#mobilemenu"))
      });
  
    // document.addEventListener("click", ({ target }) => {
    //   if (!target.closest(".main")) {
    //     document.querySelector("#mobilemenu").classList.remove("mobilenav_open");
    //     console.log("close outside")
    //   }
    // });
  
    document.querySelector("#mobilemenu2").addEventListener("click", (e) => {
      e.stopPropagation();
    });
   
  }
  
  window.addEventListener("load", toggleBasket);
  
