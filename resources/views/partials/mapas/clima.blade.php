<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#clima">
        + CLIMA
      </a>
    </h4>
  </div>
  <div id="clima" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="item mapas">
        <?php
        use Cmfcmf\OpenWeatherMap;
        // Language of data (try your own language here!):
        $lang = 'es';
        // Units (can be 'metric' or 'imperial' [default]):
        $units = 'metric';
        // Get OpenWeatherMap object. Don't use caching (take a look into Example_Cache.php to see how it works).
        $owm = new OpenWeatherMap();
        function esp_day($day){
          if ($day == date('l')) {
            return 'Hoy';
          } else {
            switch ($day) {
              case 'Monday':
                return 'Lunes';
                break;
              
              case 'Tuesday':
                return 'Martes';
                break;
              
              case 'Wednesday':
                return 'Miércoles';
                break;
              
              case 'Thursday':
                return 'Jueves';
                break;
              
              case 'Friday':
                return 'Viernes';
                break;
              
              case 'Saturday':
                return 'Sábado';
                break;
              
              default:
                return 'Domingo';
                break;
            }
          }
        }
        $forecast = $owm->getWeatherForecast('Ensenada', $units, $lang, '', 1);?>
        <h3>Pronóstico del clima de la ciudad de <?php echo $forecast->city->name;?></h3><?php
        $cont = 0;
        $style ="";
        foreach ($forecast as $weather) { 
          $cont++;
          if ($cont > 3) {
            $style ="display:none";
          }?>
          <div class="w-item" style="<?php echo $style;?>">
            <div class="day-title">
              <?php echo esp_day($weather->time->day->format('l'));?> <br>
              <?php echo $weather->time->day->format('d-m-Y');?> <br>
            </div>
            <div class="desc">
              <span class="desc-w"><?php echo $weather->time->from->format('H:i')."hrs. a ".$weather->time->to->format('H:i') . "hrs.";?></span>
              <span class="temp"><?php echo $weather->temperature;?></span>
              <span class="desc-w"><?php echo $weather->weather;?></span>
              <figure class="icon"><img src='http://openweathermap.org/img/w/<?php echo $weather->weather->icon;?>.png' alt='<?php echo $weather->weather;?>'></figure>
            </div>
          </div><?php
        }?>
        <br><br>
        <?php
        $cont = 0;
        $style ="";
        $forecast = $owm->getWeatherForecast('Ensenada', $units, $lang, '', 10);
        foreach ($forecast as $weather) {
          $cont++;
          if ($cont > 3) {
            $style ="display:none";
          }?>
          <div class="w-item days" style="<?php echo $style;?>" >
            <div class="day-title"><?php echo esp_day($weather->time->day->format('l'));?></div>
            <div class="desc">
              <span class="temp"><?php echo $weather->temperature;?></span>
              <span class="desc-w"><?php echo $weather->weather;?></span>
              <figure class="icon"><img src='http://openweathermap.org/img/w/<?php echo $weather->weather->icon?>.png' alt='<?php echo $weather->weather?>'></figure>
            </div>
          </div><?php
        }?>
      </div>
    </div>
  </div>
</div>