const elemento = (s) => document.querySelector(s);
let count = 1;
elemento("#add").onclick = () => {

    let div = document.createElement("div");
    div.className = "input-box";
    div.id = `div${count}`;
    div.innerHTML = `<input type="text" name="name[]" placeholder="Put your name" minlength="2">
    <a class="btn-rem" id="rem${count}" title="remove">X</a>`;
    elemento("#form").append(div);
    count++;
};

