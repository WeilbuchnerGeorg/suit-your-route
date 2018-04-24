<?php

echo $this->header;

?>


<div id="bg-index">
    <div id="main">

        <div class="row">
            <div class="col-sm-6">
                <h1>Finde jetzt deine nächste Bergtour</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default such-panel">
                    <div class="panel-body">
                        <div class="form-inline">
                            <label for="">Suche nach Touren in deiner Nähe</label>
                            <select class="form-control center-block">
                                <?php foreach($this->regions as $region): ?>
                                    <option value="<?php echo $region->id; ?>"><?php echo $region->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" class="btn pull-right">Jetzt Touren suchen!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2>Die beliebtesten Bergtouren auf MYGUIDE</h2>
                <p>Du bist noch ratlos, wo es als nächstes hingehen könnte?<br />Kein Problem, wir haben die beliebtesten Wanderungen unserer User für dich zusammengestellt.</p>
                <button class="btn-intext" data-toggle="modal" data-target="#editModal">Neue Tour anlegen</button>
            </div>
        </div>

        
        <?php if($this->tours): ?>
          <?php
            $numOfCols = 2; // wanted number of bootstrap grid columns (1,2,3,4,6,12)
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols; // calculate grid number
          ?>
          <div class="row">
          <?php foreach ($this->tours as $tour){ ?>
            <div class="col-md-<?php echo $bootstrapColWidth; ?>">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-md-4"><a href="detail?id=<?php echo $tour->id; ?>"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></a></div>
                          <div class="col-md-8"><h3><a href="detail?id=<?php echo $tour->id; ?>"><?php echo $tour->name; ?></a></h3><br/><p>Bewertung: <?php for ($i=0; $i < $tour->ratingid; $i++) {echo "<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span> ";} ?></p></div>
                      </div>
                  </div>
              </div>
            </div>

          <?php
              $rowCount++;
              if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
          }
          ?>
          </div>

        <?php else: ?>
          <p>&nbsp;</p>
          <div class="alert alert-info">Noch keine Touren vorhanden - Sie können über den Button <strong>Neue Tour anlegen</strong> eine neue Tour in Ihr Toursammlung hinzufügen.</div>
        <?php endif; ?>
</div>
<?php

echo $this->footer;

?>