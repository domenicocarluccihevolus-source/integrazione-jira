const bottone = document.getElementById("contta");
const numero = document.getElementById("numero");
let conteggio = 0;

bottone.addEventListener("click", () => {
  conteggio += 1;
  numero.textContent = conteggio;
});
