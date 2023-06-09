//htmlが全部ロードされてから開始
document.addEventListener("DOMContentLoaded", function () {

    const NavButton = document.getElementById("NavButton");
    const NavList = document.getElementById("NavList");
    const HeaderTitle = document.getElementById("HeaderTitle");
    const HeaderM = document.getElementById("Header");

    NavButton.addEventListener("click", function () {
        NavButton.classList.toggle("open");
        NavList.classList.toggle("open");
        HeaderTitle.classList.toggle("open");
        HeaderM.classList.toggle("open");
    })

    const buttons = [
        document.getElementById("Wbutton0"),
        document.getElementById("Wbutton1"),
        document.getElementById("Wbutton2"),
        document.getElementById("Wbutton3"),
        document.getElementById("Wbutton4"),
    ];

    const pages = [
        document.getElementById("Wbutton0-page"),
        document.getElementById("Wbutton1-page"),
        document.getElementById("Wbutton2-page"),
        document.getElementById("Wbutton3-page"),
        document.getElementById("Wbutton4-page"),
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
    };

    // 各ボタンにクリックイベントを追加する
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            switchPage(i);
        });
    };
});

window.onload = function () {
    // ページ全体が読み込まれた後に実行されるコード
    const buttons2 = [
        document.getElementById("Bbutton1"),
        document.getElementById("Bbutton2"),
        document.getElementById("Bbutton3"),
        document.getElementById("Bbutton4"),
    ];

    const pages2 = [
        document.getElementById("Bbutton1-page"),
        document.getElementById("Bbutton2-page"),
        document.getElementById("Bbutton3-page"),
        document.getElementById("Bbutton4-page"),
    ];

    const pages3 = [
        document.getElementById("Bbutton1-page1"),
        document.getElementById("Bbutton2-page2"),
        document.getElementById("Bbutton3-page3"),
        document.getElementById("Bbutton4-page4"),
    ];

    function switchPage1(index) {
        for (let i = 0; i < pages2.length; i++) {
            if (i === index) {
                pages2[i].classList.add("openpage");
                buttons2[i].classList.add("open");
            } else {
                pages2[i].classList.remove("openpage");
                buttons2[i].classList.remove("open");
            }
        }
    };

    function switchPage2(index) {
        for (let i = 0; i < pages3.length; i++) {
            if (i === index) {
                pages3[i].classList.add("openpage");
                buttons2[i].classList.add("open");
            } else {
                pages3[i].classList.remove("openpage");
                buttons2[i].classList.remove("open");
            }
        }
    };

    // 各ボタンにクリックイベントを追加する
    for (let i = 0; i < buttons2.length; i++) {
        buttons2[i].addEventListener("click", function () {
            switchPage1(i);
            switchPage2(i);
        });
    };


    //値渡し
    const params = new URLSearchParams(window.location.search); // URLのパラメータを取得
    const id = params.get('target'); // パラメータからid名を取得

    if (id === 'goW1') {
        // id名がgoW1の場合の処理
        console.log('こいよ！');
        switchPage1(0);
        switchPage2(0);
    } else {
        // id名がgoW1以外の場合の処理
        console.log('こいよ2！');
    }

    if (id === 'goW2') {
        // id名がgoW1の場合の処理
        console.log('こいよ！');
        switchPage1(3);
        switchPage2(3);
    } else {
        // id名がgoW1以外の場合の処理
        console.log('こいよ2！');
    }

    if (id === 'goW3') {
        // id名がgoW1の場合の処理
        console.log('こいよ！');
        switchPage1(2);
        switchPage2(2);
    } else {
        // id名がgoW1以外の場合の処理
        console.log('こいよ2！');
    }

    if (id === 'goW4') {
        // id名がgoW1の場合の処理
        console.log('こいよ！');
        switchPage1(1);
        switchPage2(1);
    } else {
        // id名がgoW1以外の場合の処理
        console.log('こいよ2！');
    }
}
