 var btn = document.getElementById('preview');
    btn.addEventListener('click', function () {
        var modal = document.getElementById('modal');
        modal.style.visibility = 'visible';
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var txt = document.getElementById('txt').value;
        document.getElementById('modal-username').innerHTML = username;
        document.getElementById('modal-email').innerHTML = email;
        document.getElementById('modal-txt').innerHTML = txt;
 });

 function closeModalWindow() {
     modal.style.visibility = 'hidden';
 }

