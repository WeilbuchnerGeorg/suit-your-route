<?php

echo $this->header;
?>

    <div id="main">
        <div class="row">
            <div class="col-sm-12">
              <h1><?php echo $this->tour->name; ?></h1>
        </div>
        </div>
        <div class="row">
              <div class="col-sm-4">
                  <?php if($this->tour->image): ?>
                      <img class="img-responsive" src="<?php echo URL_PATH."/img/tour/".$this->tour->image; ?>" />
                  <?php else: ?>
                      <img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=kein Bild" />
                  <?php endif; ?>
              </div>
              <div class="col-sm-8">
                  <h2>Bewertung</h2>
                  <p><?php for ($i=0; $i < $this->tour->ratingid; $i++) {echo "<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> ";} ?></p>
                  <h2>Daten</h2>
                  <p><strong>Region: </strong><?php echo $this->region->name; ?></p>
                  <p><strong>Startpunkt: </strong> <?php echo $this->tour->startlocation; ?></p>
                  <p><strong>Aktivität: </strong><?php echo $this->activity->name; ?></p>
                  <p><strong>Schwierigkeit: </strong><?php echo $this->difficulty->name; ?></p>
                  <p><strong>Dauer: </strong> <?php echo $this->tour->duration; ?></p>

              </div>

        </div>

        <div class="row">
          <div class="col-sm-12">
            <h2>Beschreibung</h2>
            <p><?php echo $this->tour->description; ?></p>
          </div>
        </div>
    </div>


<?php
echo $this->footer;

?>
