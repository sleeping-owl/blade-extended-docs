<div bd-attr-id="'post'">...</div>
    <!-- будет --> <div id="post">...</div>

<div bd-attr-data-property="$name ? 'my-name'">...</div>
    <!-- если $name == true будет --> <div data-property="my-name">...</div>
    <!-- если $name == false будет --> <div>...</div>

<div bd-attr-id="'my-id'" id="my">...</div>
    <!-- вызовет exception -->