<?php
// redirect page 
function redirect($page)
{
  header('location: ' . URLROOT . $page);
}
