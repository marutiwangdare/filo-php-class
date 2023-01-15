<?php 
//Note that the PHP date() function will return the current date/time of the server!

/*
Get Your Time Zone
If the time you got back from the code is not correct, 
it's probably because your server is in another country or set up for a different timezone.

So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.

The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:

Example

*/

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>