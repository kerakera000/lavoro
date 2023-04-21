//htmlが全部ロードされてから開始
document.addEventListener("DOMContentLoaded", function(){

    const NavButton = document.getElementById("NavButton");
    const NavList = document.getElementById("NavList");
    const HeaderTitle = document.getElementById("HeaderTitle")

    NavButton.addEventListener("click", function() {
        NavButton.classList.toggle("open");
        NavList.classList.toggle("open");
        HeaderTitle.classList.toggle("open");
    })
});
