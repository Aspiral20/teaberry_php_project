$(document).ready(() => {

    let choose = $('.choose');
    let teaAssortsTables = $('.tea-assorts-tables');

    choose.on('click',(e) => {
        let currentElement = $(e.target);

        teaAssortsTables.css('display','none');
        console.log(currentElement);

        let idTeaAssorts = currentElement.data('id');     //<--
        $('#' + idTeaAssorts).css('display','flex');
    });

});