<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


// fuction for nav
function my_nav($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a href=" ' . $key . '" class="current">' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a href=" ' . $key . '">' . $value . '</a></li>';
        } //else
    } //end foreach
    return $my_return;
} //end function

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT 261 Wevsite';
        $body = 'home';
        $headline = 'Welcome to our Home page of our IT 261 Website';
        $bgcolor = 'background-color:green';
        break;

    case 'about.php':
        $title = 'About page of our IT 261 Wevsite';
        $body = 'about inner';
        $headline = 'Welcome to our About page of our IT 261 Website';
        $bgcolor = 'background-color:blue';
        break;

    case 'daily.php':
        $title = 'Daily page of our IT 261 Wevsite';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily page where my Homework 3 Switch will display';
        $bgcolor = 'background-color:pink';

        break;

    case 'project.php':
        $title = 'Project page of our IT 261 Wevsite';
        $body = 'project inner';
        $headline = 'Welcome to our Project page of our IT 261 Website';

        break;

    case 'contact.php':
        $title = 'Contact page of our IT 261 Wevsite';
        $body = 'contact inner';
        $headline = 'Welcome to our Contact page of our IT 261 Website';

        break;

    case 'gallery.php':
        $title = 'Contact page of our IT 261 Wevsite';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery page of our IT 261 Website';

        break;
}
//emailable form php!