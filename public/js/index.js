const nextBtn = document.getElementById("next-btn");

nextBtn.addEventListener("click", function (e) {
  e.preventDefault();

  document.getElementById("step-1").classList.add("hidden");
  document.getElementById("step-1").classList.remove("block");
  document.getElementById("step-2").classList.remove("hidden");
  document.getElementById("step-2").classList.add("block");
});
