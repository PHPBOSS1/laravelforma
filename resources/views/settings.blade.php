@if (Session::has('info'))
    <div>
        {{ Session::get('info') }}
    </div>
@endif
<form action="/settings/store" method="POST">
    {{ csrf_field() }}
    <?php
    use Illuminate\Support\MessageBag;
    /** @var MessageBag $errors */
    ?>
    <div> <input type="text" name="age" placeholder="Укажите возраст" id="age"></div>
    <?  if($errors->first("age") != "") echo "<div class='alert'>".$errors->first("age")."</div>"; ?>
    <div><input type="text" name="fio" placeholder="Укажите ФИО"></div>
    <? if($errors->first("fio") != "") echo "<div class='alert'>".$errors->first("fio")."</div>"; ?>
    <div><textarea rows="10" cols="45" name="about" placeholder="описание"></textarea></div>
    <? if($errors->first("about") != "") echo "<div class='alert'>".$errors->first("about")."</div>"; ?>
    <input type="submit" value="Отправить">
</form>
