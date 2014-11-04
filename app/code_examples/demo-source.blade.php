<!-- if and foreach -->
<ul bd-if="$test">
  <li bd-foreach="$items as $item">
    <a href="#">{{{ $item->name }}}</a>
  </li>
</ul>

<!-- class -->
<div class="my-class" bd-class="$condition ? 'class'">
</div>

<!-- attribute -->
<span bd-attr-id="$test ? $id"></span>

<!-- yield -->
<div bd-yield="'content'"></div>

<!-- include and unwrap -->
<div bd-include="'en.lang'" bd-unwrap></div>

<!-- custom directive, see https://github.com/sleeping-owl/blade-extended-docs/blob/master/app/blade_extensions.php -->
<div bd-my="$var"></div>