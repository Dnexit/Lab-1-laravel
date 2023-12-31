@extends('layouts.default')
@section('title', 'тест по дисциплине')
@section('content')
    <main class="main">
        <form class="form">
            <div class="form__field">
                <label for="fullname">Введите ФИО</label>
                <input type="text" id="fullname" pattern="[А-Яа-яЁё]+\s[А-Яа-яЁё]+\s[А-Яа-яЁё]+" required placeholder="Фамилия Имя Отчество">
            </div>
            <div class="form__field">
                <label for="year_student">Группа:</label>
                <select name="year_student" id="year_student" required>
                    <option>ПИ/б-20-1-о 3 курс</option>
                    <option>ИС/б-21-1-о 2 курс</option>
                    <option>ПИ/б-21-1-о 2 курс</option>
                    <option>ПИ/б-22-1-о 1 курс</option>
                </select>
            </div>
            <div class="form__field">
                <fieldset class="fieldset fieldset_question">
                    <legend>В программировании конструкция языка программирования, результатом вычисления которой является «истина» или «ложь», называется ...</legend>
                    <input type="radio" name="boolean_question" value="expression" id="expression" checked>
                    <label for="expression">Логическое выражение</label><br>
                    <input type="radio" name="boolean_question" value="operation" id="operation">
                    <label for="operation">Логическая операция</label><br>
                    <input type="radio" name="boolean_question" value="operator" id="operator">
                    <label for="operator">Логический оператор</label><br>
                    <input type="radio" name="boolean_question" value="logic" id="logic">
                    <label for="logic">Логическая логика</label>
                </fieldset>
            </div>
            <div class="form__field">
                <label for="equality">бинарное отношение между элементами данного множества, свойства которого сходны со свойствами отношения равенства называется</label>
                <select id="equality" required>
                    <option value="and"> И </option>
                    <option value="condition"> Импликация </option>
                    <option value="equivalence"> Эквивалентность </option>
                    <option value="or"> Или </option>
                    <option value="exclusive_or"> Исключающее или </option>
                </select>
            </div>
            <div class="form__field">
                <label for="if_then">Бинарная логическая связка, по своему применению приближенная к союзам «если…, то…» - это ..:</label>
                <textarea name="if_then" id="if_then" rows="5" cols="33" pattern="([А-Яа-яЁё]+\s){34}[А-Яа-яЁё].*" required></textarea>
            </div>
            <div class="form__field">
                <label for="email">Почта:</label>
                <input type="email" name="email" id="email" required placeholder="email@email.com">
            </div>
            <div class="form__field">
                <input data-type="submit" type="submit" type="button" value="Отправить">
                <input data-type="reset" type="reset" value="Очистить">
            </div>
        </form>
    </main>
@endsection
