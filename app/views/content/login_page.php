<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" action="/login/check" method="post">
            <div class="form-group">
                <label  for="login">логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="admin" required>
            </div>
            <div class="form-group">
                <label for="password">пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="123" required>
            </div>
            <button type="submit" class="btn btn-default">войти</button>
        </form>
    </div>
</div>
