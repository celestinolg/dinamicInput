const form = document.getElementById("form");
document.getElementById("add").onclick = () => {

    form.append(`<div class="input-box">
    <input type="text" name="name[]" placeholder="Put your name" minlength="2">
    <a class="btn-add" id="add">add</a>
</div>`);
}