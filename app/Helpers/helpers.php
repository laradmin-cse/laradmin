<?php
/* Put your Helper Functions Here */

use App\Models\User;

function users_count()
{
  return User::count();
}

function message1()
{
  return "Hi there! I am wondering if you can help me with a problem I've been having.";
}

function message2()
{
  return "I have the photos that you ordered last month, how would you like them sent to you?";
}

function message3()
{
  return "Last month's report looks great, I am very happy with the progress so far, keep up the good work!";
}

function message4()
{
  return "Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...";
}

function lorem_ipsum_long()
{ //Step 5:  Adding a Component - Models::Adding text helper
  return "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
}
