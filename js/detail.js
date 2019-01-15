var cmtFb = true;

function loadAPI() {
    var js = document.createElement('script');
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
    document.body.appendChild(js);
}

window.addEventListener('scroll', function () {
    if (cmtFb) {
        loadAPI;
        cmtFb = false;
    }
})