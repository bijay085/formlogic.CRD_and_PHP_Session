let form = document.register,
    fname = form.fullname,
    email = form.email,
    phone = form.phone,
    bio = form.bio;

let emptyEleArr = [fname, email, bio];
// console.log(emptyEleArr)
form.addEventListener("submit", function(e) {
    emptyEleArr.forEach(ele => {
        if(ele.value == '') {
            ele.nextElementSibling.innerText = "This field is required.";
            e.preventDefault();
        }
    });
});

//Example of regular expression pattern string validation
let emailRegex = /[A-Za-z]+(@)[A-Za-z]+(.com)/g;
email.addEventListener("keyup", function() {
    if(emailRegex.test(this.value) == false) {
        this.nextElementSibling.innerText = "Email is not valid.";
    } else {
        this.nextElementSibling.innerText = "";
    }
});
