function setObjective() {
  let goal = document.querySelector("#objectiveInput");
  console.log(goal.value);

  localStorage.setItem("userObjective", goal.value);
  location.reload();
}

document.addEventListener("DOMContentLoaded", function () {
  let savegoal = localStorage.getItem("userObjective");
  console.log(savegoal);
  if (savegoal === null) {
    savegoal = '--';
  }

  document.querySelector("#goalNumber").textContent = savegoal;

  let currentHours = 0;
  const dureeElem = document.querySelector(
    ".statCard:nth-child(2) .statNumber"
  );
  if (dureeElem) {
    currentHours = parseFloat(dureeElem.textContent.replace(",", ".")) || 0;
  }

  let objective = parseFloat(savegoal);
  if (isNaN(objective) || objective <= 0) {
    objective = 1;
  }
  let percent = Math.min(100, Math.round((currentHours / objective) * 100));
  if (isNaN(percent)) percent = 0;

  const fill = document.getElementById("progressFill");
  const percentText = document.getElementById("progressPercent");
  if (fill) fill.style.width = percent + "%";
  if (percentText) percentText.textContent = percent + "%";
});
