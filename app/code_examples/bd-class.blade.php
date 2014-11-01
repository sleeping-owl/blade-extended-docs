<!-- Add static class -->
<div bd-class="'post'">...</div>

<!-- or add static class from variable -->
<div bd-class="$postClass">...</div>

<!-- Add dynamic class based on condition -->
<div class="post" bd-class="$post->active ? 'active' : 'inactive'">...</div>

<!-- You can use short syntax -->
<div bd-class="$post->good ? 'good'">...</div>
<!-- if post isnt good result will be "<div>...", otherwise result will be "<div class="good">..." -->

<!-- You can combine all together and add several classes using comma delimiter -->
<span bd-class="'date', $spanClass, $isFuture ? 'future'">...</span>
