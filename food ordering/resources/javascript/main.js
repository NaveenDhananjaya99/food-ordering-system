const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
const cookieButton_deny = document.querySelector(".cookie-btn_deny");


cookieButton.addEventListener("click", () => {                 // this is for the acept button 
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true"); // this is for the save  cookies 
});

cookieButton_deny.addEventListener("click", () => {
    cookieContainer.classList.remove("active");       // this is for the deny button 
    
  });

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {   // idf the user is not ans the 2S system wiil acept cookies auto but not save
    cookieContainer.classList.add("active");
  }
}, 2000);