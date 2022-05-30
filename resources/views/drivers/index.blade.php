<h1>Drivers list</h1>

<?php 
// dd(count($allDrivers))
foreach($allDrivers as $driver){ ?>

    <a href='/drivers/{{$driver->driverId}}'>{{$driver->givenName}} {{$driver->familyName}}</a><br>
   
<?php } ?>


