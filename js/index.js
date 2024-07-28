function updateCurrentYear() {
  const yearSpan = document.getElementById("year")
  const currentYear = new Date().getFullYear()
  yearSpan.innerText = currentYear
}

updateCurrentYear()
