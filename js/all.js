var sidebar = {
    current: 0
}

window.addEventListener('load', function(ev){
    var iconplus = document.getElementsByClassName('sidebar-icon-plus');

    for(var i = 0; i < iconplus.length; ++i){
        iconplus[i].onclick = function(){
            expandSideMenu(this.id);
        }
    }

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

function expandSideMenu(des){
    if(sidebar.current !== 0) {
        var current = document.getElementById(sidebar.current + '-sidebar-class-subject');
        current.style.height = 0;
        document.getElementById(sidebar.current).classList.remove('fa-minus-circle');
        document.getElementById(sidebar.current).classList.add('fa-plus-circle');
    }

    document.getElementById(des + '-sidebar-class-subject').style.height = ( document.getElementById(des + '-sidebar-class-subject').childElementCount * 37 - 2 ) + 'px';
    var desElement = document.getElementById(des);
    desElement.classList.remove('fa-plus-circle');
    desElement.classList.add('fa-minus-circle');

    desElement.addEventListener('click', function(){
        desElement.classList.remove('fa-minus-circle');
        desElement.classList.add('fa-plus-circle');
        document.getElementById(des + '-sidebar-class-subject').style.height = 0;
        sidebar.current = 0;
        document.getElementById(des).addEventListener('click', function(){
            expandSideMenu(des);
        });
    })

    sidebar.current = des;
}