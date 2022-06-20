<p>По нажатию на кнопку в нижнем инпуте появится квадрат числа из верхнего инпута.</p>
<input type="text" value="" placeholder="Введите число!" id="text1"><br>
<input type="text" value="Здесь появится результат" id="text2" disabled><br>
<button onclick="func();">Нажми на меня!</button>

function func() {
var elem1 = document.getElementById('text1');
var elem2 = document.getElementById('text2');
var num = elem1.value;
elem2.value = Math.pow(num, 2);
}
