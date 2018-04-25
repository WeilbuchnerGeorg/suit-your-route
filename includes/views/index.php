<?php

echo $this->header;

?>


<div id="bg-index">
    <div id="main">

        <div class="row">
            <div class="col-sm-6">
                <h1 id="h1-index">Finde jetzt deine nächste Bergtour</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default such-panel">
                    <div class="panel-body">
                        <div class="form-inline">
                            <div class="pseudoTable">
                                <div class="pseudoCell">
                                    <label for="">Suche nach Touren in deiner Nähe</label>
                                    <select class="form-control center-block">
                                        <?php foreach($this->regions as $region): ?>
                                            <option value="<?php echo $region->id; ?>"><?php echo $region->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="pseudoCell">
                                    <button type="submit" class="btn pull-right">Jetzt Touren suchen!</button>
                                </div>
                            </div>

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

          <div class="row">
          <?php foreach ($this->tours as $tour): ?>
            <div class="col-md-6">
                <a class="tourTeaser" href="detail?id=<?php echo $tour->id; ?>">
                    <div class="image">
                        <?php if($tour->image): ?>
                            <img class="img-responsive" src="<?php echo URL_PATH."/img/tour/".$tour->image; ?>" />
                        <?php else: ?>
                            <img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=kein Bild" />
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <h4><?php echo $tour->name; ?></h4><br/><p>Bewertung: <?php for ($i=0; $i < $tour->ratingid; $i++): ?><span class="glyphicon glyphicon-star" aria-hidden="true"></span> <?php endfor; ?></p>
                    </div>
                </a>
            </div>
          <?php
          endforeach;
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