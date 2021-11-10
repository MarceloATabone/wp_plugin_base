
function mtabone_toggleDiv($divName) {
    var lDiv = document.getElementById($divName);
    if (lDiv.style.display === "none") {
      lDiv.style.display = "block";
    } else {
      lDiv.style.display = "none";
    }
  }