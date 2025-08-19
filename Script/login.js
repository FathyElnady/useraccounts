let email=document.querySelector('#email');
let pass=document.querySelector('#password');
let form =document.forms[0];
let error=document.querySelector('.error')

form.onsubmit=function (e){
    if(email.value===""||pass.value===""){
        e.preventDefault();
        error.setAttribute('class','text-danger fw-bold');
        error.textContent='Please Enter Email And Password';
    }
}