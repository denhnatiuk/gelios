<?php
  $menuLocations = get_nav_menu_locations();
  // $menuID = $menuLocations[`'`.($menuName||`test`).`'`];
  $menuID = $menuLocations['landing_nav'];
  $navMenu = wp_get_nav_menu_items($menuID);
?>

<ul class="list-unstyled text-muted mb-0">
<?php
  foreach ($navMenu as $navitem)
  {
    echo `
      <li class="mb-3`.$unstyled_nav_classes.`">
        <a href="`.$navItem->url.`" class="text-reset">
          `.$navItem->title.`
        </a>
      </li>
    `;
  }
?>
</ul>
