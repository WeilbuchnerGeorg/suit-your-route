<?php

echo $this->header;

?>



    <div id="main">

        <div class="row">
            <div class="col-sm-6">
                <h1>Die beliebtesten Bergtouren auf MYGUIDE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-inline">
                            <label for="">Suche nach Touren in deiner Nähe</label>
                            <select class="form-control center-block">
                                <option>Kufstein</option>
                                <option>Wörgl</option>
                                <option>Kitzbühel</option>
                                <option>Rofan</option>
                                <option>Zillertal</option>
                            </select>
                            <button type="submit" class="btn pull-right">Jetzt Touren suchen!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p>Du bist noch ratlos, wo es als nächstes hingehen könnte?<br />Kein Problem, wir haben die beliebtesten Wanderungen unserer User für dich zusammengestellt.</p>
                <button class="btn" data-toggle="modal" data-target="#editModal">Neue Tour anlegen</button>
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
                          <div class="col-md-8"><a href="detail?id=<?php echo $tour->id; ?>"><?php echo $tour->name; ?></a><br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
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

<?php

echo $this->footer;

?>