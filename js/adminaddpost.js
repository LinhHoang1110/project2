window.addEventListener('load', function () {
    if(idpost !== undefined) setContent(idpost);

    // set onclick event for button
    document.getElementById('form-add').onclick = function () {
        let newPost = {};

        // get content inputed by user
        let data = CKEDITOR.instances.divinputcontent.getData();

        newPost.title = document.getElementById('divinput-title').value;
        newPost.author = document.getElementById('divinput-author').value;
        newPost.content = data.replace(/\n/g, '');
        newPost.subject = document.getElementById('divinput-subject').value;
        newPost.category = document.getElementById('divinput-category').value;
        newPost.class = document.getElementById('divinput-class').value;

        console.log(newPost);
        savePost(newPost);
    }

    // set onclick event for update button
    document.getElementById('form-update').onclick =  function () {

    }
})

/**
 * Save Post to Database
 * @param newPost
 */
function savePost(newPost) {
    if (newPost.title != '' && newPost.author != '' && newPost.content != '' && newPost.subject != '' && newPost.category != '' && newPost.class != '') {
        axios.post('http://localhost/project2/api/post-api.php?type=createPost&title=' + newPost.title + '&author=' + newPost.author + '&content=' + newPost.content + '&subject=' + newPost.subject + '&category=' + newPost.category + '&class=' + newPost.class)
            .then(function (response) {
                if (response.data === 1) {
                    alert('Cập nhật thành công');

                } else alert('failed');
            })
            .catch(function (error) {
                console.log(error);
            });
    } else {
        alert('Điền đầy đủ thông tin vào tất cả các trường');
    }
}

function setContent(idPost) {
    axios.get('http://localhost/project2/api/post-api.php?type=getSinglePost&idpost=' + idPost)
        .then(function (response) {
            console.log(response.data);

            if(response.data.length == 0) alert('there is no data for this request');
            else {
                let content = JSON.parse(response.data[0].content);

                document.getElementById('divinput-title').value = response.data[0].title;
                document.getElementById('divinput-author').value = response.data[0].author;
                CKEDITOR.instances.divinputcontent.setData(content.content);
                document.getElementById('divinput-subject').value = response.data[0].subject;
                document.getElementById('divinput-category').value = response.data[0].category;
                document.getElementById('divinput-class').value = response.data[0].class;
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

/**
 * Set appearance of button on form
 * @param $action { 'addPost' || 'editPost' || 'viewPost' }
 */
function setDisplayForFormButtons($action) {
    if ($action === undefined) $action = 'addPost';

    if ($action === 'addPost') {
        document.getElementById('form-update').style.display = 'none';
        document.getElementById('form-edit').style.display = 'none';
        document.getElementById('form-delete').style.display = 'none';
        document.getElementById('form-add').style.display = 'block';
        document.getElementById('form-cancel').style.display = 'block';
    } else if ($action === 'editPost') {
        document.getElementById('form-update').style.display = 'block';
        document.getElementById('form-edit').style.display = 'none';
        document.getElementById('form-delete').style.display = 'block';
        document.getElementById('form-add').style.display = 'none';
        document.getElementById('form-cancel').style.display = 'block';
    } else if ($action === 'viewPost'){
        document.getElementById('form-update').style.display = 'none';
        document.getElementById('form-edit').style.display = 'block';
        document.getElementById('form-delete').style.display = 'block';
        document.getElementById('form-add').style.display = 'none';
        document.getElementById('form-cancel').style.display = 'block';
    }
}