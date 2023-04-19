//htmlが全部ロードされてから開始
document.addEventListener("DOMContentLoaded", function(){

    const headerabout = document.getElementById("header-about");
    const headerbuisiness = document.getElementById("header-buisiness");
    const headerworks = document.getElementById("header-works");

    headerabout.addEventListener("click", function() {
        headerabout.classList.toggle("open");
    });
    headerbuisiness.addEventListener("click", function() {
        headerbuisiness.classList.toggle("open");
    });
    headerworks.addEventListener("click", function() {
        headerworks.classList.toggle("open");
    });
});
