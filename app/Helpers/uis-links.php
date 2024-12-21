<?php
/* Put your Links in Functions Here */

function are_components()
{
    return Request::is(['buttons', 'cards', 'alerts', 'models']); //<!-- Step 6:  Adding a Component - Models::NavigationAdjusting by adding the newly created component into the array-->
}

function are_utilities()
{
    return Request::is(['borders', 'colors', 'animations', 'other']);
}

function are_pages()
{
    return Request::is(['signin', 'signup', 'forgot-password', '404', 'blank']);
}

function is_active($link)
{
    return Request::path() === $link;
}
