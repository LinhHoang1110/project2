var count = 0;

window.addEventListener('load', function () {
    // axios.get('http://localhost/project2/api/class-api.php?type=getSubject?class=13')
    //     .then(function (response) {
    //         console.log(response.data.length);
    //     })
    //     .catch(function (error) {
    //         console.log(error);
    //     });
    //
    // createNewRow(1);

    document.getElementById('admin-add-post').onclick = function(){
        // alert('abc');
        axios.get('http://localhost/project2/controller/admin/admin.php?type=adminclass&action=addclass')
            .then(function (response) {

            })
            .catch(function (error) {
                console.log(error);
            });
    }

    getAllTheClassesInfo();
})

function createNewRow(className) {
    document.getElementById('admin-post-table').innerHTML += '' +
        '<div class="table-row" style="text-align: center">\n' +
        '                <div class="table-class-stt">' + (++count) + '</div>\n' +
        '                <div class="table-class-class">' + className + '</div>\n' +
        '                <div class="table-class-subject" id="' + className + '_subject">\n' +
        '                </div>\n' +
        '                <div class="table-class-action"><i class="fas fa-file-invoice icon-success"></i><i class="far fa-edit icon-warning"></i></div>\n' +
        '            </div>';

    getSubject(className);
}

function getSubject(className) {
    axios.get('http://localhost/project2/api/class-api.php?type=getSubject&class=' + className)
        .then(function (response) {
            let subjectHtml = '';
            for (let i = 0; i < response.data.length; ++i) {
                subjectHtml += '<div class="list-subject">' + response.data[i].subject + '</div>';
            }
            document.getElementById(className + "_subject").innerHTML += subjectHtml;
        })
        .catch(function (error) {
            console.log(error);
        });
}

function getAllTheClassesInfo() {
    axios.get('http://localhost/project2/api/class-api.php?type=getAllClass')
        .then(function (response) {
            console.log(response.data);

            if (response.data.length == 0) document.getElementById('admin-post-table').innerHTML += '<h1>There is no data for this request</h1>';
            else {
                for (let i = 0; i < response.data.length; ++i) {
                    createNewRow(response.data[i].classname);
                }
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}