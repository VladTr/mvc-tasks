<h3>список задач</h3>
<table class="table">
    <tr>
        <th class="center"><a href="/task/showtask/username">имя</a></th>
        <th class="center"><a href="/task/showtask/email">email</a></th>
        <th class="center">текст</th>
        <th class="center">картинка</th>
        <th class="center"><a href="/task/showtask/status">статус</a></th>
        <th class="edit">редактировать</th>
    </tr>

    <?php
    for($i=$dataSet['start']; $i < $dataSet['finish']; $i++) {
        echo '<tr>';
            echo '<td>'.$dataSet['data'][$i]['username'].'</td>';
            echo '<td class="center">'.$dataSet['data'][$i]['email'].'</td>';
            echo '<td>'.$dataSet['data'][$i]['text'].'</td>';
            echo '<td>'.'<img  class = "my-image" src="/app/img/'.$dataSet['data'][$i]['image'].'" alt="">'.'</td>';
            echo '<td>'.$dataSet['data'][$i]['status'].'</td>';
            echo '<td class="edit center">'.'<a href="/task/editshow/'.$dataSet['data'][$i]['id'].'"><img src="/app/img/edit.jpg" alt="edit" class="ico"></a>'.'</td>';
        echo '</tr>';
    }
    ?>

</table>
<h5>страницы</h5>
<?php
for($i=1; $i<$dataSet['pages']+1; $i++){
    $param = $dataSet['param'];
    echo "<span><a href='/task/showtask/$param/$i'>$i</a></span>";
}
?>



