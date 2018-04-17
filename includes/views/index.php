<?php

echo $this->header;

?>



    <div id="main">
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
                            <button type="submit" class="btn btn-default pull-right">Jetzt Touren suchen!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2>Die beliebtesten Bergtouren auf MYGUIDE</h2>
                <p>Du bist noch ratlos, wo es als nächstes hingehen könnte?<br />Kein Problem, wir haben die beliebtesten Wanderungen unserer User für dich zusammengestellt.</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neue Tour anlegen</button>
            </div>
        </div>

        <div class="row">

            <?php if($this->tours): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Datum</th>
                        <th>Bearbeiten</th>
                        <th>Löschen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->tours as $tours): ?>
                        <tr>
                            <td><?php echo $tours->id; ?></td>
                            <td><?php echo $tours->name; ?></td>
                            <td><?php echo $tours->date; ?></td>
                            <td><button class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="<?php echo $tours->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Bearbeiten</button></td>
                            <td><a class="btn btn-danger triggerDelete" href="api/address/" data-id="<?php echo $tours->id; ?>"><i class="glyphicon glyphicon-trash"></i> Löschen</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>&nbsp;</p>
                <div class="alert alert-info">Noch keine Touren vorhanden - Sie können über den Button <strong>Neue Tour anlegen</strong> eine neue Tour in Ihr Toursammlung hinzufügen.</div>
            <?php endif; ?>

            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" /></div>
                            <div class="col-md-8">Musterort<br /><strong>Musterberg</strong><p>Bewertung: * * * * *</p></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


<?php

echo $this->footer;

?>