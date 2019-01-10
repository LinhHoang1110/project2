var sv = ''
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>'
+ '<div class="grade-post">'
+ '<div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>'
+ '<div class="post-author">Nguyễn Công Hoan</div>'
+ '<div class="post-statistic">'
+ '    <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>96</div>'
+ '    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342</div>'
+ '</div>'
+ '<div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm</div>'
+ '</div>';

window.addEventListener('load', function(){
    document.getElementById('expand-sv').addEventListener('click', function(){
        var news_content = document.getElementById('sv-grade-news-content');
        news_content.style.height = news_content.style.height;
        news_content.innerHTML += sv;
        news_content.style.height = 'auto';
        document.getElementById('th').style.display = 'none';

        this.style.display = 'none';

        var grade_circle = document.getElementsByClassName('grade-circle');
        for(var i = 0; i < grade_circle.length; ++i){
            grade_circle[i].style.display = 'block';
        }
    })
});