// LOGIN VALIDATION
document.getElementById("loginForm")?.addEventListener("submit", function(e){
    e.preventDefault();

    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if(email === "" || pass === ""){
        alert("All fields required!");
    } else {
        alert("Login Successful (Dummy)");
    }
});

// REGISTER VALIDATION
document.getElementById("registerForm")?.addEventListener("submit", function(e){
    e.preventDefault();

    let p1 = document.getElementById("pass1").value;
    let p2 = document.getElementById("pass2").value;

    if(p1 !== p2){
        alert("Passwords do not match!");
    } else {
        alert("Registered Successfully (Dummy)");
    }
});

// SHOW/HIDE PASSWORD
function togglePassword(){
    let pass = document.getElementById("password");

    if(pass.type === "password"){
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}