document.addEventListener("DOMContentLoaded", () => {
  window.addEventListener("scroll", () => {
    console.log("adsadad");
    if (window.scrollY > 0) {
      document.querySelector("header").style.backgroundColor = "white";
      document.querySelector("header").style.backdropFilter = "blur(10px)";
    } else {
      document.querySelector("header").style.backgroundColor = "transparent";
      document.querySelector("header").style.backdropFilter = "none";
    }
  });

  function showToast(message, duration = 3000) {
    const toast = document.getElementById("toast");
    toast.textContent = message;

    toast.classList.add("show");
    toast.classList.remove("hidden");

    setTimeout(() => {
      toast.classList.add("hidden");
      toast.classList.remove("show");
    }, duration);
  }

  setTimeout(() => {
    showToast("Selamat Datang di Furnyetur!", 3000);
  }, 1000);
});
