let role = localStorage.getItem("role");
const announce = document.getElementById("announce");
console.log(role);
if (role === "teacher") {
    announce.innerHTML = `
    <form method="POST" action="index.php">
        <p class="make-an">Make new appointment</p>
            Title:<input type="text" name="title">
            Description:<textarea rows="5" cols="33" name="text"></textarea>
            <input type="submit" value="Send">
        </form>
    `;
}