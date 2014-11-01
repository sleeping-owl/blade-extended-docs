<ul>
  <li bd-foreach="$items as $item" bd-if="$item->name !== \'_dev\'">
    <a href="#">{{{ $item->name }}}</a>
  </li>
</ul>