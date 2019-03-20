let number = 5; // number of post will be displayed, min value of this letiable is 6
let currentTab = 1; // save the number of current tab if quantity of posts is more than 10
let listPost = [];
let stateOfForm = 'none'; // addPost/ editPost/ viewPost

window.addEventListener('load', function () {
    // Set font size for menu
    document.getElementById('admin-submenu-post-icon').style.fontSize = '25px';

    document.getElementById('admin-find-post').onclick = function () {
        axios.post('http://localhost/project2/api/post-api.php?type=updatePost')
            .then(function (response) {
                if (response.data === 1) {
                    alert('Cập nhật thành công');
                } else alert('failed');

                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    // Action for background blur ( when click to this div, form will be closed
    document.getElementById('admin-form-post-blur').addEventListener('click', function () {
        visibleForm('hide');
    })

    // Action for button cancel in form
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

            console.log(listPost);

            displayPost();

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
        '                <div class="cell-header table-action"><a href="http://localhost/project2/controller/admin/admin.php?type=adminpost&action=addpost&idpost=' + infoOfPost.idpost + '"><i class="far fa-edit icon-warning" id="' + infoOfPost.idpost + '_edit"></i></a><i class="far fa-trash-alt icon-notice" id="' + infoOfPost.idpost + '_delete"> </i><i class="far fa-eye icon-success" id="' + infoOfPost.idpost + '_viewinfo"> </i></div>\n' +
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
        finish = listPost.length - 1;
    } else if ((tab > ((listPost.length / number) + 1)) || ((listPost % number == 0) && (tab > listPost.length / number))) {
        return 'error';
    } else {
        start = number * (tab - 1);

        if ((tab * number - 1) > listPost.length) finish = listPost.length - 1
        else finish = tab * number - 1;

        news_content.innerHTML = '';
    }

    for (let i = start; i <= finish; ++i) {
        console.log(start, finish);
        createNewLinePost(listPost[i]);
    }

    setOnclickForViewIcon({start: start, finish: finish});
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

/**
 *Display or hide form
 * @param type {String} [show or hide];
 * @param action {String}
 */
function visibleForm(type, actionInfo) {
    if (type === undefined) type = 'show';

    let blur = document.getElementById('admin-form-post-blur');
    let form = document.getElementById('admin-form-post');

    if (type === 'show') {
        blur.style.transform = 'translateY(0)';
        form.style.transform = 'translateY(0)';
    } else if (type === 'hide') {
        blur.style.transform = 'translateY(-100%)';
        form.style.transform = 'translateY(-200%)';
    }

    document.getElementById('divinput-title').innerText = document.getElementById(actionInfo.id + '_title').innerText;
    document.getElementById('divinput-content').innerText = document.getElementById(actionInfo.id + '_content').innerText;
    document.getElementById('divinput-author').innerText = listPost[actionInfo.id - 1].author;
    document.getElementById('divinput-subject').innerText = document.getElementById(actionInfo.id + '_subject').innerText;
    document.getElementById('divinput-category').innerText = document.getElementById(actionInfo.id + '_category').innerText;
    document.getElementById('divinput-class').innerText = document.getElementById(actionInfo.id + '_class').innerText;

    let editButton = document.getElementById('form-edit');
    console.log(editButton.getAttribute('href'));
    editButton.setAttribute('href', editButton.getAttribute('href') + actionInfo.id);
}

/**
 * Set click event for view icon
 * @param id
 */
function setOnclickForViewIcon(id) {
    if (id.start !== undefined) {
        for (let i = id.start; i <= id.finish; ++i) {
            console.log(i);
            document.getElementById((i + 1) + '_viewinfo').onclick = function () {
                visibleForm('show', {action: 'viewinfo', id: i + 1});
                document.getElementById('form-header-title').innerText = "Thông tin bài viết";

            }
        }
    } else {
        document.getElementById(id + '_edit').onclick = function () {
            visibleForm('show', {id: id});
            document.getElementById('form-header-title').innerText = "Thông tin bài viết";
        }
    }
}
