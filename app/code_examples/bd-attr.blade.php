<div bd-attr-id="'post'">...</div>
    <!-- will be --> <div id="post">...</div>

<div bd-attr-data-property="$name ? 'my-name'">...</div>
    <!-- if $name is true will be --> <div data-property="my-name">...</div>
    <!-- if $name is false will be --> <div>...</div>

<div bd-attr-id="'my-id'" id="my">...</div>
    <!-- this will throw an exception -->