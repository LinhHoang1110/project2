let number = 10; // number of post will be displayed, min value of this letiable is 6
let currentTab = 1; // save the number of current tab if quantity of posts is more than 10
let listPost = [];

window.addEventListener('load', function () {
    document.getElementById('expand-sv').addEventListener('click', function () {
        document.getElementById('preload-icon').style.opacity = 1;
        document.getElementById('preload-icon').style.width = '32px';

        // hide button read more
        this.style.display = 'none';

        setTimeout(function () {
            axios.get('http://localhost/project2/api/post-api.php?type=getAllPost')
                .then(function (response) {
                    // handle success
                    document.getElementById('preload-icon').style.opacity = 0;
                    document.getElementsByClassName('blur-content')[0].classList.remove('blur-content');
                    listPost = response.data;
                    displayPost();

                    if (document.getElementById('th')) {
                        document.getElementById('th').style.display = 'none';
                    }

                    let subMenu = document.getElementById('literatureMenu');

                    let tab = 0;
                    if (listPost.length % number == 0) tab = listPost.length / number;
                    else tab = listPost.length / number + 1;

                    if (tab >= 2) {
                        subMenu.innerHTML += '<div class="grade-circle grade-circle-active" id="grade-circle-1">1</div>';

                        for (let i = 2; i <= tab; ++i) {
                            subMenu.innerHTML += '<div class="grade-circle" id="grade-circle-' + i + '">' + i + '</div>';
                            // setActionForTab('grade-circle-' + i, i, 'sv');
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
        }, 2000)
    })
});

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

    let news_content = document.getElementById('sv-grade-news-content');
    let start, finish;

    // load post for the first time
    if (tab == undefined) {
        start = 6;
        finish = 9;
    } else if ((tab > ((listPost.length / number) + 1)) || ((listPost % number == 0) && (tab > listPost.length / number))) {
        return 'error';
    } else {
        start = number * (tab - 1);

        if ((tab * number - 1) > listPost.length) finish = listPost.length - 1
        else finish = tab * number - 1;

        news_content.innerHTML = '';
    }

    for (let i = start; i <= finish; ++i) {
        let content = JSON.parse(listPost[i].content);
        content.content = content.content.replace(/<p>/g, '');
        content.content = content.content.replace(/<h3>/g, '');
        content.content = content.content.replace(/<\/p>/g, '');
        content.content = content.content.replace(/<\/h3>/g, '');
        news_content.innerHTML += '<a href="http://localhost/project2/view/detail.php?idpost=' + listPost[i].idpost + '" class="grade-post grade-post-invisible">'
            + '<div class="post-title">' + listPost[i].title + '</div>'
            + '<div class="post-author">' + listPost[i].author + '</div>'
            + '<div class="post-statistic">'
            + '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>' + listPost[i].likes + '</div>'
            + '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>' + listPost[i].views + '</div>'
            + '</div>'
            + '<div class="post-content">' + content.content + '</div>'
        '</a>';
    }

    // Display content
    setTimeout(() => {
        displayPostInvisible();
        setTimeout(function () {
            if (tab !== undefined) window.scrollTo(0, 200);
        }, 500)
    }, 200);
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
 * display Posts are hidden
 */
function displayPostInvisible() {
    let post_invisible = document.getElementsByClassName('grade-post-invisible');

    for (let i = 0; i < post_invisible.length; ++i) {
        post_invisible[i].style.opacity = '1';
        post_invisible[i].style.transform = 'translateY(0px)';
    }
}