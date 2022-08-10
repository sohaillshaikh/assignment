let output = document.getElementById("output");
buttons = document.querySelectorAll("button");
let otval = "";
for (item of buttons) {
    item.addEventListener("click", (e) => {
        buttonText = e.target.innerText;
        console.log("this is ", buttonText)

        if (buttonText == "X") {
            buttonText = "*";
            otval += buttonText;
            output.value = otval;
        }
        else if (buttonText == "C") {
            otval = "";
            output.value = otval;
        }
        else if (buttonText == "=") {
            output.value = eval(otval);
        }
        else {
            otval += buttonText
            output.value = otval;
        }
    });
}