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

    const buttons = [
        document.getElementById("Wbutton0"),
        document.getElementById("Wbutton1"),
        document.getElementById("Wbutton2"),
        document.getElementById("Wbutton3"),
        document.getElementById("Wbutton4"),
        document.getElementById("Wbutton5")
    ];

    const pages = [
        document.getElementById("Wbutton0-page"),
        document.getElementById("Wbutton1-page"),
        document.getElementById("Wbutton2-page"),
        document.getElementById("Wbutton3-page"),
        document.getElementById("Wbutton4-page"),
        document.getElementById("Wbutton5-page")
    ];

    function switchPage(index) {
        for (let i = 0; i < pages.length; i++) {
            if (i === index) {
                pages[i].classList.add("openpage");
                buttons[i].classList.add("open");
            } else {
                pages[i].classList.remove("openpage");
                buttons[i].classList.remove("open");
            }
        }
    }

    // 各ボタンにクリックイベントを追加する
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            switchPage(i);
        });
    }

    const pageContent = document.querySelector('.page-content');

    const observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (mutation.attributeName === 'class' && mutation.target.classList.contains('openpage')) {
                location.reload();
            }
        });
    });

    observer.observe(pageContent, { attributes: true });
});