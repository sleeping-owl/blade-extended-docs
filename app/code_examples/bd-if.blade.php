<div class="post">
  <ul bd-if="$post->hasSimilar">
    <li bd-foreach="$post->similar as $similarPost">...</li>
  </ul>
  <div class="edit-block" bd-if="$post->author === $activeUser">
    <!-- this block will be in result html only if condition is true -->
    ...
  </div>
</div>