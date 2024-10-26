document.getElementById("logout").addEventListener("submit", function(event){
    event.preventDefault();

    localStorage.removeItem("token");
    window.location.href = "../login-form.php";
});