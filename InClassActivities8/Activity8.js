const btn = document.querySelector("img");
let click = 0;
let level = 1;
let timeLevel = 500;
let flag = false;

alert(`Game Level: ${level}`);

function overButton() {

    flag = true;

    setTimeout(function () {

        if (flag){
            flag = false;
            const value1 = Math.random() * 1024;
            const value2 = Math.random() * 700;

            btn.style.marginTop = `${value2}px`;
            btn.style.marginLeft = `${value1}px`;
        }

    }, timeLevel);
}

function clickBtn(){
    click++;

    if (click % 3 === 0){
        level++;
        timeLevel -= 100;
        alert(`Game Level: ${level}`);
    }
}