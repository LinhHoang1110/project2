var sidebar = {
    current: 0
}

var scroll_top = false;
var sidebar, sidebar_blur;

window.addEventListener('load', function(ev){
    setActionIconPlus();

    sidebar = document.getElementById('sidebar');
    sidebar_blur = document.getElementById('sidebar-blur');

    document.getElementById('icon-expand').onclick = function(){
        sidebar.style.transform = 'translateX(0)';
        sidebar_blur.style.transform = 'translateX(0)';
        document.getElementsByTagName('body')[0].style.overflow = 'hidden';
        document.getElementById('icon-close').onclick = function(){
            sidebar.style.transform = 'translateX(-100%)';
            sidebar_blur.style.transform = 'translateX(-100%)';
            document.getElementsByTagName('body')[0].style.overflow = 'unset';
        }
    }

    // document.getElementById('header-input').style.width = 150px;
    document.getElementsByClassName('scroll-top')[0].addEventListener('click',function(){
        // document.body.scrollTop = 0;
        // document.documentElement.scrollTop = 0;
        scrollToTop(500);
    })

    sidebar_blur.addEventListener('click', function(){
        sidebar.style.transform = 'translateX(-100%)';
        sidebar_blur.style.transform = 'translateX(-100%)';
        document.getElementsByTagName('body')[0].style.overflow = 'unset';
    })
})
window.addEventListener('resize', function(){
    if(document.body.clientWidth > 732) {
        document.getElementById('sidebar').style.transform = 'translateX(-100%)';
        document.getElementById('sidebar-blur').style.transform = 'translateX(-100%)';
        document.getElementsByTagName('body')[0].style.overflow = 'unset';
    }
})

window.addEventListener('scroll', function(){
    if(window.pageYOffset != 0) {
        if(!scroll_top) {
            document.getElementsByClassName('scroll-top')[0].style.opacity = 0.3;
            scroll_top = true;
        }
    } else {
        document.getElementsByClassName('scroll-top')[0].style.opacity = 0;
        scroll_top = false;
    }
})

function expandSideMenu(des){
    if(sidebar.current !== 0) {
        document.getElementById(sidebar.current).classList.remove('fa-minus-circle');
        document.getElementById(sidebar.current).classList.add('fa-plus-circle');
        document.getElementById(sidebar.current + '-sidebar-class-subject').style.height = 0;
        setActionIconPlus();
    }

    document.getElementById(des).classList.remove('fa-plus-circle');
    document.getElementById(des).classList.add('fa-minus-circle');
    document.getElementById(des + '-sidebar-class-subject').style.height = ( document.getElementById(des + '-sidebar-class-subject').childElementCount * 37 - 2 ) + 'px';
    document.getElementById(des).onclick = function(){
        document.getElementById(des + '-sidebar-class-subject').style.height = 0;
        document.getElementById(des).classList.remove('fa-minus-circle');
        document.getElementById(des).classList.add('fa-plus-circle');
        setActionIconPlus();
    }

    sidebar.current = des;
}

function setActionIconPlus(){
    var iconplus = document.getElementsByClassName('sidebar-icon-plus');

    for(var i = 0; i < iconplus.length; ++i){
        iconplus[i].onclick = function(){
            expandSideMenu(this.id);
        }
    }
}

/**
 * function to scroll top
 * @param {ms} scrollDuration 
 */
function scrollToTop(scrollDuration) {
    var scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(function(){
        if ( window.scrollY != 0 ) {
            window.scrollBy( 0, scrollStep );
        }
        else clearInterval(scrollInterval); 
    },15);
}