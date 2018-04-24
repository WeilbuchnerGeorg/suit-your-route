<?php

echo $this->header;
?>

<div id="bg-detail">

    <div id="main">
        <div class="row">

          <div class="col-sm-4">

            <img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" />
          </div>

          <div class="col-sm-8">

            <h1><?php echo $this->tour->name; ?></h1>

          </div>


        </div>

        <div class="row">
          <div class="col-sm-12">
            <h2>Bewertung</h2>
            <p><?php for ($i=0; $i < $this->tour->ratingid; $i++) {echo "<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> ";} ?></p>
            <h2>Daten</h2>
            <p><strong>Region: </strong><?php echo $this->region->name; ?></p>
            <p><strong>Startpunkt: </strong> <?php echo $this->tour->startlocation; ?></p>
            <p><strong>Aktivität: </strong><?php echo $this->activity->name; ?></p>
            <p><strong>Schwierigkeit: </strong><?php echo $this->difficulty->name; ?></p>
            <p><strong>Dauer: </strong> <?php echo $this->tour->duration; ?></p>
            <h2>Beschreibung</h2>
            <p><?php echo $this->tour->description; ?></p>
          </div>
        </div>
    </div>
</div>

<?php
echo $this->footer;

?>
