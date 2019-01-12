var sidebar = {
    current: 0
}

window.addEventListener('load', function(ev){
    setActionIconPlus();

    document.getElementById('icon-expand').onclick = function(){
        document.getElementById('sidebar').style.transform = 'translateX(0)';
        document.getElementById('sidebar-blur').style.transform = 'translateX(0)';
        document.getElementById('icon-close').onclick = function(){
            document.getElementById('sidebar').style.transform = 'translateX(-100%)';
            document.getElementById('sidebar-blur').style.transform = 'translateX(-100%)';
        }
    }

    // document.getElementById('header-input').style.width = 150px;
})
window.addEventListener('resize', function(){
    if(document.body.clientWidth > 732) {
        document.getElementById('sidebar').style.transform = 'translateX(-100%)';
        document.getElementById('sidebar-blur').style.transform = 'translateX(-100%)';
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