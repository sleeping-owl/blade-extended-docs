<ul bd-inner-foreach="$items as $i => $item">
  <li>{{{ $i }}}</li>
  <li>{{{ $item }}}</li>
</ul>

<div class="posts" bd-inner-foreach="$posts as $post">
  <div class="post">
    <div class="title">{{{ $post->title }}}</div>
    <div class="published_at">{{{ $post->published_at }}}</div>
    <div class="content">{{ $post->content }}</div>
  </div>
  <div class="similar_posts">
    <ul>
      ...
    </ul>
  </div>
</div>