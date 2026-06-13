function checkEmail(){
    let email = document.getElementById("email").value;

    fetch("check_email.php?email=" + email)
    .then(res => res.text())
    .then(data => {
        console.log(data);
    });
}