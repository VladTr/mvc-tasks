window.onload = function () {
    var enter =document.getElementById('enter');
    if (document.cookie.indexOf('admin') == 5) {
        enter.innerHTML='вы вошли как: admin'+'<br>'+'<a href="/login/logout">выйти</a>';
        var editItems = document.getElementsByClassName('edit');
        for (var i = 0; i < editItems.length; i++){
            editItems[i].style.visibility = 'visible';
        }
    }
}






