<?php

echo $this->header;
?>

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
        <h2>Rating</h2>
        <p>Lorem ipsum ...</p>
        <h2>Daten</h2>
        <p><strong>Aktivität: </strong> wandern</p>
        <p><strong>Dauer: </strong> 02:00</p>
        <p>... weiteres ....</p>
      </div>
    </div>
</div>

<?php
echo $this->footer;

?>
