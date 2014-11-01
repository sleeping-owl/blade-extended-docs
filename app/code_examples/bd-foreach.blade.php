<ul>
  <li bd-foreach="$items as $item">
    <a href="#">{{{ $item->name }}}</a>
  </li>
  <li bd-foreach="$items as $i => $item">
    {{{ $i }}}. {{{ $item }}}
  </li>
</ul>