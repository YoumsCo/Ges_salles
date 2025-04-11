/*
*****************************************************************************************
    Gestion de la session flash
*****************************************************************************************
*/

let i_class = document.querySelectorAll('i');
i_class.forEach(i => {
    if (i.className.match(/fa-close/)) {
        document.querySelector('.fa-close').addEventListener('click', function() {
            document.querySelector('#session').classList.add('element-hidden');
        });
    }
});
document.querySelectorAll('div').forEach(div => {
    if (div.getAttribute('id') === 'session') {
        setTimeout(function() {
            document.querySelector('#session').classList.add('element-hidden');
        },1000 * 10);
    }
});
