var cmtFb = true;

function loadAPI() {
    var js = document.createElement('script');
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
    document.body.appendChild(js);
}

window.addEventListener('scroll', function () {
    if (cmtFb) {
        loadAPI();
        cmtFb = false;
    }
})

// var cmtFb = true;

// function loadAPI() {
//     var d = document;
//     var s = 'script';
//     var id = 'facebook-jssdk';
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) return;
//     js = d.createElement(s); js.id = id;
//     js.async = true;
//     js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
//     fjs.parentNode.insertBefore(js, fjs);
// }

// window.addEventListener('scroll', function () {
//     if (cmtFb) {
//         loadAPI();
//         cmtFb = false;
//     }
// })