<?php 
$chosen_tab = 'account';
include('inc/header.php') 
?>
<link rel="stylesheet" href="css/accountbroch.css" type="text/css" media="screen" />
<script src="js/touch.modernizr.custom.js"></script>
<!--<link rel="stylesheet" href="css/accountgallery.css" type="text/css" media="screen" />-->

<div class="clr spacer"></div>

<h3 class="title">My Account
<div class="steps_block">
    <a href="organise.php" class="action_button action_button_small">Organise</a>
    <a href="create.php" class="action_button action_button_small">Create</a>
    <a href="publish.php" class="action_button action_button_small">Publish</a>
</div>
</h3>

<div class="clr spacer"></div>

<ul class="grid cs-style-5">
    <li>
        <figure>
            <img src="images/dummy/new/2.jpg" alt="img04">
            <figcaption>
                <h3>Launch Jan 2013</h3>
                <span>One Line Info</span>
                <section>
                    <a href="create.php?pid=1">Edit</a>
                    <a href="#">Delete</a>
                </section>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <img src="images/dummy/new/3.jpg" alt="img05">
            <figcaption>
                <h3>Collections Jan 2013</h3>
                <span>One Line Info</span>
                <section>
                    <a href="create.php?pid=2">Edit</a>
                    <a href="#">Delete</a>
                </section>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <img src="images/dummy/new/4.jpg" alt="img05">
            <figcaption>
                <h3>Launch Feb 2013</h3>
                <span>One Line Info</span>
                <section>
                    <a href="create.php?pid=3">Edit</a>
                    <a href="#">Delete</a>
                </section>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <img src="images/dummy/new/5.jpg" alt="img05">
            <figcaption>
                <h3>Collections Feb 2013</h3>
                <span>One Line Info</span>
                <section>
                    <a href="create.php?pid=4">Edit</a>
                    <a href="#">Delete</a>
                </section>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <img src="images/dummy/new/6.jpg" alt="img05">
            <figcaption>
                <h3>Collections March 2013</h3>
                <span>One Line Info</span>
                <section>
                    <a href="create.php?pid=5">Edit</a>
                    <a href="#">Delete</a>
                </section>
            </figcaption>
        </figure>
    </li>
</ul>

<div class="clr spacer"></div>

<script src="js/toucheffects.js"></script>

<?php include('inc/footer.php') ?>