<?php
include('config.php');
include('includes/header.php'); ?>
<main>
    <section class="assignments">
        <div class="content-wrap">
            <h1> <?php echo $headline; ?>
                <div class="col-narrow">
                    <?php
                    echo '<br>';
                    if (isset($_GET['today'])) {
                        $today = $_GET['today'];
                    } else {
                        $today = date('l');
                    }

                    switch ($today) {
                        case 'Wednesday':
                            $history = '<h2>Wednesday, October 20 in 1955 Final Lord of the Rings Book Published</h2>';
                            $pic = 'book.jpg';
                            $alt = 'Book';
                            $content = 'J. R. R. Tolkien\'s final book "The Return of the King" is published from the 3 fantasy novels making up "The Lord of the Rings" book series which was written between 1937 and 1949. The books were set in Middle-earth and featured hobbits, wizards, elves, dwarves, orcs, men and the quest for the One Ring that rules the other Rings of Power. All three books were made into movies directed by Peter Jackson, with each movie released for Christmas and the final movie released on 17th December 2003 which won 11 Academy Awards including the Oscar for Best Picture.';
                            $bgcolor = 'background-color:blue';
                            break;

                        case 'Thursday':
                            $history = '<h2>Thursday, October 21 Magellan\'s discovery of gateway to circumnavigating the globe</h2>';
                            $pic = 'thursday.jpg';
                            $alt = 'Ferdinand Magellan';
                            $content = 'On this day in 1520, explorer Ferdinand Magellan and three Spanish ships entered the strait later named for him, sailing between the mainland tip of South America and the island of Tierra del Fuego toward the Pacific Ocean.';
                            $bgcolor = 'background-color:green';

                            break;

                        case 'Friday':
                            $history = '<h2>Friday, October 22 in 1962 Cuban missile crisis</h2>';
                            $pic = 'Cuba.jpg';
                            $alt = 'Cuba Crisis';
                            $content = 'On this day in 1962, President John F. Kennedy alerted Americans to the Cuban missile crisis, declaring a naval blockade to prevent further missile shipments to the island country 90 miles (145 km) off the coast of the U.S.';
                            $bgcolor = 'background-color:yellow';

                            break;

                        case 'Saturday':
                            $history = '<h2>Saturday, 23 Oct, 1974 U.S.A. Retirement Law </h2>';
                            $pic = 'retirement.jpg';
                            $alt = 'Retirement Day';
                            $content = 'October 23rd, 1974 : A 67 Year Old Professor Fights Against Mandatory Retirement Laws quoting documentation of the 14th Amendment to the Constitution to help fight for equal protection under the law. ';
                            $bgcolor = 'background-color:navy';

                            break;

                        case 'Sunday':
                            $history = '<h2>Sunday, October 24 George Washington Bridge </h2>';
                            $pic = 'bridge.jpg';
                            $alt = 'Washington Bridge';
                            $content = '1931 : The George Washington Bridge was opened to traffic, connecting the states of New York and New Jersey. ';
                            $bgcolor = 'background-color:white';

                            break;

                        case 'Monday':
                            $history = '<h2>Today, Monday, October 18 - U.S. takes possession of Alaska</h2>';
                            $pic = 'alaska_day.jpg';
                            $alt = 'Alaska Day';
                            $content = 'On October 18, 1867, the U.S. formally takes possession of Alaska after purchasing the territory from Russia for $7.2 million, or less than two cents an acre. Indigenous peoples settled the unforgiving territory thousands of years earlier. <br>The Alaska purchase comprised 586,412 square miles, about twice the size of Texas, and was championed by William Henry Seward, the enthusiastically expansionist secretary of state under President Andrew Johnson.';
                            $bgcolor = 'background-color:orange';

                            break;

                        case 'Tuesday':
                            $history = '<h2>Today, Tuesday, October 19, National Kentucky Day</h2>';
                            $pic = 'kentaki.png';
                            $alt = 'Mazagran Coffee';
                            $content = 'On October 19, National Kentucky Day recognizes the 15th state to be granted statehood. The Bluegrass State became the first to enter the union west of the Appalachian Mountains.';
                            $bgcolor = 'background-color:green';
                            break;
                    }

                    ?>
                </div>

                <aside style="<?php echo $bgcolor; ?>">
                    <?php
                    echo $history;
                    ?><img src="pictures/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
                    <p><?php echo $content; ?></p>
                    <h2>Check out calender for this week in history</h2>
                    <ul class="list" style="list-style-type: square;">
                        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                        <li><a href="daily.php?today=Thursday">Thursday</a></li>
                        <li><a href="daily.php?today=Friday">Friday</a></li>
                        <li><a href="daily.php?today=Saturday">Saturday</a></li>
                        <li><a href="daily.php?today=Sunday">Sunday</a></li>
                        <li><a href="daily.php?today=Monday">Monday</a></li>
                        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                    </ul>
                </aside>

    </section>
</main>

<?php include('includes/footer.php'); ?>