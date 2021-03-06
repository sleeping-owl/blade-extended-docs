<!-- Статически добавить класс -->
<div bd-class="'post'">...</div>

<!-- или добавить класс, содержащийся в переменной -->
<div bd-class="$postClass">...</div>

<!-- Добавить класс, основываясь на условном выражении -->
<div class="post" bd-class="$post->active ? 'active' : 'inactive'">...</div>

<!-- Вы можете использовать короткий синтаксис -->
<div bd-class="$post->good ? 'good'">...</div>
<!-- если пост не хорош, результатом будет "<div>...", иначе "<div class="good">..." -->

<!-- Вы можете комбинировать эти способы и добавлять несколько классов, используя запятую в качестве разделителя -->
<span bd-class="'date', $spanClass, $isFuture ? 'future'">...</span>
