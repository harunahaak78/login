const signup = document.getElementById('signUpButton');
const signin = document.getElementById('signinButton');
const signinForm = document.getElementById('signin');
const signupForm = document.getElementById('signup');


signup.addEventListener('click',function(){
    signinForm.style.display="none";
    signupForm.style.display="block";
})

signin.addEventListener('click',function(){
    signinForm.style.display="block";
    signupForm.style.display="none";
})