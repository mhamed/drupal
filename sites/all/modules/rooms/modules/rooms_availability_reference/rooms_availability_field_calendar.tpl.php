<div class="<?php print $variables['classes']; ?>">
<?php foreach ($rooms_availability_field_calendar['#calendar'] as $unit_calendar) { ?>
  <?php print render($unit_calendar); ?>
  <div id="calendar">
  </div>  
<?php } ?>
</div>