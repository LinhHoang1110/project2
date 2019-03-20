let classInfo = {} // object will store id infos of rows
let countRow = 0;

window.addEventListener('load', function () {
    document.getElementById('admin-btn-addsubject').onclick = function () {
        countRow++;
        classInfo['row_' + countRow] = {id: countRow, count: 0, data: {}};
        createNewRow(countRow);
    }
})

function createNewRow(id) {
    document.getElementById('subject-table').innerHTML += '' +
        '                <div class="table-row" id="subject_' + id + '" style="text-align: center">\n' +
        '                    <div class="col-left table-subject-name" id="subject_' + id + '_name">' + document.getElementById('admin-input-class').value + '</div>\n' +
        '                    <div class="col-center table-subject-category" id="subject_category_' + id + '">\n' +
        '                        <div class="category-subject" id="newcate_' + id + '">\n' +
        '                            <input class="addclass-category" id="cate_input_' + id + '" placeholder="Nhập tên danh mục" style="outline: none; background-color: #c4e6c2">\n' +
        '                            <i id="cate_check_' + id + '" class="addclass-category-check fas fa-check" style="line-height: 40px;"></i>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <div class="col-right table-subject-action"><i id="subject_delete_' + id + '" class="far fa-trash-alt icon-notice"></i></div>\n' +
        '                </div>';

    setOnclickForNewCate(id);
}

function setOnclickForNewCate(id) {
    document.getElementById('cate_check_' + classInfo['row_' + id].id).onclick = function () {
        document.getElementById('newcate_' + classInfo['row_' + id].id).insertAdjacentHTML('beforebegin', '' +
            '                        <div class="category-subject">\n' +
            '                            <div class="addclass-category">Soan van</div>\n' +
            '                            <i class="addclass-category-delete fas fa-times" style="line-height: 40px;"></i>\n' +
            '                        </div>');
    }
}

function setOnclick(id) {
    document.getElementById('cate_check_' + id).addEventListener('click', function () {
        console.log('haha');
    })
}