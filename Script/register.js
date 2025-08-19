let photoInput=document.getElementById('photo');
let Fname=document.getElementById('fName');
let Lname=document.getElementById('lName');
let email=document.getElementById('email');
let pass=document.querySelector('#pass');
let confirm=document.querySelector('#confirm');
let submit=document.querySelector('.btn');
let previewImg=document.querySelector('#previow');
let form = document.forms[0];
let err=document.getElementById('error');

photoInput.addEventListener('change', () => {
  const file = photoInput.files[0];
  console.log(file);
  if (file) {
    previewImg.src = URL.createObjectURL(file);
  }
});


form.onsubmit=function (e){
    if(photoInput.value ===''|| Fname.value==='' || Lname.value==='' ||email.value===''|| pass.value==="" || confirm.value===""){
            e.preventDefault(); 
        err.setAttribute('class', 'text-danger fw-bold');
        err.textContent='Please Enter Data';
    }else
    {
       if(! chickpass(pass.value,confirm.value,e))
       {
            e.preventDefault();
        err.setAttribute('class', 'text-danger fw-bold');
        err.textContent='the confirm is not equall password';

       }
    }

}

function chickpass(pass,confirm,e)
{
    if(pass===confirm)
    {
        return true;
    }else return false;
}