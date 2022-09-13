<?php 

$_page = 'flights';
$_css = 'style_app.css';
require_once __DIR__.'/comp_header.php'

?>

<main>
<h1>Welcome! Find a flexible flight for your next trip.</h1>

<div id="flights_wrapper">
<div id="flight-search">
        
    <form action="" onblur="" oninput="" method="POST">

    <div id="city-search">

        <div id="from-container">
                <input id="from_city" name="from_city" type="text" placeholder="From?" 
                onblur="hideFromResults()"
                 oninput="showFromResults()">

                <div id="from-results">
               
                </div>
        </div>

        <div id="shift-button">
            <button id="shift-cities" type="button" value="" onclick="shiftCities()">
            <img src="icon_shift.png" alt="shift cities"></button>
        </div>

        <div id="to-container">
                <input id="to-input" type="text" placeholder="To?" 
                onblur="hideToResults()"
                 oninput="showToResults()">

                <div id="to-results">
               
                </div>
        </div>
        
        </div>
        <div id="date-container">
            <div id="date-from">
        <input class="date-input" type="text" placeholder="Ons. 31.8" >
        <div class="change-date">
            <button class="arrow-left" type="button"><img src="icon_left-arrow.png" alt=""></button>
            <button class="arrow-right" type="button"><img src="icon_left-arrow.png" alt=""></button>
         </div>
         </div>
         <div id="date-to">
        <input class="date-input" type="text" placeholder="Tors. 6.8" >
        <div class="change-date">
            <button class="arrow-left" type="button"><img src="icon_left-arrow.png" alt=""></button>
            <button class="arrow-right" type="button"><img src="icon_left-arrow.png" alt=""></button>
         </div>
         </div>
        </div>
        </div>
       
    </div>
        
    </form>
    <!-- <button id="search-button" type="button">
            <img src="search.png" alt="search">
        </button> -->
</div>

    


</div>
</main>
<script src="_app.js"></script>

<?php 

require_once __DIR__.'/comp_footer.php'

?>