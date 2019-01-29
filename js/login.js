let loginForm, createForm;

window.addEventListener('load',function(){
    loginForm = document.getElementsByClassName('content')[0];
    createForm = document.getElementsByClassName('createAccFrame')[0];
    document.getElementById('text-createAcc').addEventListener('click', function () {
        loginForm.style.opacity = '0';
        loginForm.style.transform = 'translateY(-500px)';
        createForm.style.opacity = '1';
        createForm.style.transform = 'translateY(0px)';
    })

    document.getElementById('text-login').addEventListener('click', function () {
        loginForm.style.opacity = '1';
        loginForm.style.transform = 'translateY(0px)';
        createForm.style.opacity = '0';
        createForm.style.transform = 'translateY(500px)';
    })
})