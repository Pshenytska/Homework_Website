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
<?php
$first_name = '';
$last_name = '';
$budget = '';
$email = '';
$city = '';
$type = '';
$comments = '';
$agreement = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$budget_Err = '';
$email_Err = '';
$city_Err = '';
$type_Err = '';
$comments_Err = '';
$agreement_Err = '';
$phone_Err = '';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your First Name';
    } else {
        $first_name = $_POST['first_name'];
    }
    if (empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your Last Name';
    } else {
        $last_name = $_POST['last_name'];
    }
    if (empty($_POST['budget'])) {
        $budget_Err = 'Please fill out your budget amount';
    } else {
        $budget = $_POST['budget'];
    }
    if (empty($_POST['email'])) {
        $email_Err = 'Please fill out your email box';
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['city'])) {
        $city_Err = 'Please indicate what city you want to travel';
    } else {
        $city = $_POST['city'];
    }
    if ($_POST['type'] == NULL) {
        $type_Err = 'Please select your trip type';
    } else {
        $type = $_POST['type'];
    }

    if (empty($_POST['comments'])) {
        $comments_Err = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }
    if (empty($_POST['agreement'])) {
        $agreement_Err = 'Sorry, but you must check our agreement!';
    } else {
        $agreement = $_POST['agreement'];
    }

    if (empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_Err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        }
    }

    function travel_city()
    {
        $my_return = '';
        if (!empty($_POST['city'])) {
            $my_return = implode(',', $_POST['city']);
        }
        return $my_return;
    } //closes fuction

    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['budget'],
        $_POST['city'],
        $_POST['type'],
        $_POST['comments'],
        $_POST['phone']


    )) {

        $to = 'vpshenytska@gmail.com';
        $subject = 'Test Email, ' . date('m/d/y');
        $body = '
The first name is: ' . $first_name . ' ' . PHP_EOL . '
The last name is: ' . $last_name . ' ' . PHP_EOL . '
Budget: ' . $budget . ' ' . PHP_EOL . '
Email: ' . $email . ' ' . PHP_EOL . '
Phone: ' . $phone . ' ' . PHP_EOL . '
Type: ' . $type . ' ' . PHP_EOL . '
Comments: ' . $comments . ' ' . PHP_EOL . '
';

        $headers = array(
            'From' => 'vpshenytska@gmail.com',
            'Reply' => '' . $email . ''


        );
        mail($to, $subject, $body, $headers);
        header('Location:response.php');
    }
}

?>
