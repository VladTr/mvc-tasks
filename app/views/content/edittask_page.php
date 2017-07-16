<form method="post" action="/task/editsave">
    <div class="form-group">
        <label for="txt">текст</label>
        <textarea class="form-control" rows="3" name="txt" id="txt"><?=$dataSet['text'];?></textarea>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="check">выполнено
        </label>
    </div>
    <input type="hidden" name="id" value=<?=$dataSet['id']?>>
    <button type="submit" class="btn btn-default">сохранить</button>
</form>
