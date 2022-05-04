let countDownDate = new Date("May 21, 2022 12:10:10").getTime();

const x = setInterval(function() {
  const now = new Date().getTime();
  const distance = countDownDate - now;
  let day = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("price").innerHTML = day + " д " + hours + " ч "
  + minutes + " м " + seconds + " с ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price").innerHTML = "";
  }
  document.getElementById("price_2").innerHTML = day + " д " + hours + " ч "
  + minutes + " м " + seconds + " с ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_2").innerHTML = "";
  }
  document.getElementById("price_3").innerHTML = day + " д " + hours + " ч "
  + minutes + " м " + seconds + " с ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_3").innerHTML = "";
  }
  document.getElementById("price_4").innerHTML = day + " д " + hours + " ч "
  + minutes + " м " + seconds + " с ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_4").innerHTML = "";
  }
}, 1000);
