document.addEventListener("DOMContentLoaded", () => {
  window.addEventListener("scroll", () => {
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

  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(";").shift();
  }

  setTimeout(() => {
    showToast('Selamat Datang ' + getCookie("username"), 3000);
  }, 1000);
});
