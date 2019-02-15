let number = 5; // number of post will be displayed, min value of this letiable is 6
let currentTab = 1; // save the number of current tab if quantity of posts is more than 10
let listPost = [];

window.addEventListener('load', function () {
    // Set font size for menu
    document.getElementById('admin-submenu-post').style.fontSize = '20px';
    document.getElementById('admin-submenu-post').style.color = 'white';
    document.getElementById('admin-submenu-post-icon').style.fontSize = '25px';

    document.getElementById('admin-add-post').addEventListener('click', function () {
        visibleForm('show');
    })

    document.getElementById('admin-form-post-blur').addEventListener('click', function () {
        visibleForm('hide');
    })

    document.getElementById('form-cancel').addEventListener('click', function () {
        visibleForm('hide');
    })

    getAllPost();
})

function getAllPost() {
    axios.get('http://localhost/project2/api/post-api.php?type=getAllPost')
        .then(function (response) {
            // handle success
            listPost = response.data;
            displayPost();

            console.log(listPost);

            let subMenu = document.getElementById('admin-post-menu');

            let tab = 0;
            if (listPost.length % number == 0) tab = listPost.length / number;
            else tab = listPost.length / number + 1;

            if (tab >= 2) {
                subMenu.innerHTML += '<div class="grade-circle grade-circle-active" id="grade-circle-1">1</div>';

                for (let i = 2; i <= tab; ++i) {
                    subMenu.innerHTML += '<div class="grade-circle" id="grade-circle-' + i + '">' + i + '</div>';
                }
                setActionForTab(tab, 'sv');

                currentTab = 1;
            }
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });
}

function createNewLinePost(infoOfPost) {
    let newLineFrame = '' +
        '<div class="table-row" style="text-align: center" id="' + infoOfPost.idpost + '">\n' +
        '                <div class="cell-header table-title" id="' + infoOfPost.idpost + '_title">' + infoOfPost.title + '</div>\n' +
        '                <div class="cell-header table-content" id="' + infoOfPost.idpost + '_content">' + JSON.parse(infoOfPost.content).content + '</div>\n' +
        '                <div class="cell-header table-subject" id="' + infoOfPost.idpost + '_subject">' + infoOfPost.subject + '</div>\n' +
        '                <div class="cell-header table-category" id="' + infoOfPost.idpost + '_category">' + infoOfPost.category + '</div>\n' +
        '                <div class="cell-header table-class" id="' + infoOfPost.idpost + '_class">' + infoOfPost.class + '</div>\n' +
        '                <div class="cell-header table-action"><i class="far fa-edit icon-warning" id="' + infoOfPost.idpost + '_edit"></i><i class="far fa-trash-alt icon-notice" id="' + infoOfPost.idpost + '_delete"></i><i class="far fa-eye icon-success" id="' + infoOfPost.idpost + '_viewinfo"></i></div>\n' +
        '            </div>';

    document.getElementById('admin-post-table').innerHTML += newLineFrame;
}

/**
 * display post when click to tab
 * @param tab
 * @returns {string}
 */
function displayPost(tab) {
    console.log(tab, currentTab);
    if (tab === currentTab) return 'error';
    else if (tab !== undefined) {
        document.getElementById('grade-circle-' + tab).classList.add('grade-circle-active');
        document.getElementById('grade-circle-' + currentTab).classList.remove('grade-circle-active');
        currentTab = tab;
    }

    let news_content = document.getElementById('admin-post-table');
    let start, finish;

    // load post for the first time
    if (tab == undefined) {
        start = 0;
        finish = number - 1;
    } else if ((tab > ((listPost.length / number) + 1)) || ((listPost % number == 0) && (tab > listPost.length / number))) {
        return 'error';
    } else {
        start = number * (tab - 1);

        if ((tab * number - 1) > listPost.length) finish = listPost.length - 1
        else finish = tab * number - 1;

        news_content.innerHTML = '';
    }

    for (let i = start; i <= finish; ++i) {
        createNewLinePost(listPost[i]);
    }

    // Display content
    window.scrollTo(0, 200);
}

/**
 * Set action for tab when displaying list post of each category.
 * @param id { not contain # }
 * @param tab { number }
 * @param type { string }
 */
function setActionForTab(quantity, type) {
    for (let i = 1; i <= quantity; ++i) {
        document.getElementById('grade-circle-' + i).addEventListener('click', function () {
            if (type === 'sv') displayPost(i);
        })
    }
}

function visibleForm(type) {
    if(type === undefined) type = 'show';

    let blur = document.getElementById('admin-form-post-blur');
    let form = document.getElementById('admin-form-post');

    if(type === 'show') {
        blur.style.transform = 'translateY(0)';
        form.style.transform = 'translateY(0)';
    } else if (type === 'hide') {
        blur.style.transform = 'translateY(-100%)';
        form.style.transform = 'translateY(-200%)';
    }
}