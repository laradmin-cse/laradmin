<?php
/* Put your Links in Functions Here */

function are_components()
{
    return Request::is(['buttons', 'cards', 'alerts', 'models']);
}

function are_utilities()
{
    return Request::is(['borders', 'colors', 'animations', 'other']);
}

function are_pages()
{
    return Request::is(['signin', 'signup', 'forgot-password', '404', 'blank', 'profile']); //<!-- Step 5:  Adding a Page - Profile::NavigationAdjustment-->
}

function is_active($link)
{
    return Request::path() === $link;
}
