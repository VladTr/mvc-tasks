<h3>новая задача</h3>
<form method="post" action="/task/savetask" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">имя</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="имя">
    </div>
    <div class="form-group">
        <label for="email">электронный адрес</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="txt">текст</label>
        <textarea class="form-control" rows="3" name="txt" id="txt"></textarea>
    </div>
    <div class="form-group">
        <label for="file">картинка</label>
        <input type="file" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">сохранить</button>
    <button type="button" class="btn btn-success" id="preview">предварительный просмотр</button>
</form>
<div id="modal">
    <div id="modal-table">
        <span class="close" onclick="closeModalWindow()">закрыть</span>
        <table class="table">
            <tr>
                <th>имя пользователя</th>
                <th>email</th>
                <th>текст</th>
            </tr>
            <tr>
                <td id="modal-username"></td>
                <td id="modal-email"></td>
                <td id="modal-txt"></td>
            </tr>
        </table>
    </div>

</div>
<script src="../../app/js/preview.js"></script>