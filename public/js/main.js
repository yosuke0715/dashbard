new Vue({
    el: '#tabs',
    data: {
        activeTab: 'tabs-1',
    },
});

for (let i = 1; i < 11; i++) {
    for (j = 1; j < i; j++) {

        $("#targetId").append("*");
    }
    $("#targetId").append("<br>");

}

function submitData() {
    $('#form_progress').submit();
}

function toDoCheck() {
    let content = document.todo_form.content.value;
    if (content == "") {
        window.alert('ToDoを入力してください');
        return false;
    }
}

$('#del_btn').click(function() {
    let is_confirm = window.confirm('削除しますか？');
    if (!is_confirm) {
        return false;
    }
})



$('.nav-item').on('click', function() {
    $('.nav-item').removeClass('active');
    $(this).addClass('active');
});