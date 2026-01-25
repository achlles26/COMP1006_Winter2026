<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
*/

$items = ["Home", "About", "Contact"];

include "header.php";

include "footer.php";
/*
    One thing I learned from this lab is to have cleaner more maintainable code. Something I iwsh to apply in the Assignment phase 1.
*/
?>