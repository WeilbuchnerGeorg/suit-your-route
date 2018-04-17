<?php

echo $this->header;
?>

    <div id="main">

        <div class="row">

            <div class="col-sm-4">

                <img class="img-responsive" src="https://dummyimage.com/500/ccc/000.jpg&text=myguide" />
            </div>

            <div class="col-sm-8">

                <h1>Profil-Detail ...</h1>
                <p>
                    <strong>Vorname Nachname</strong><br />
                    <strong>E-Mail Adresse:</strong> ...<br />
                    <strong>Geburtsdatum:</strong> ...
                </p>
                <button class="btn btn-default" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil"></i> Profil bearbeiten</button>
            </div>
        </div>

        <div class="row">

            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neue Tour anlegen</button>

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

        </div>
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button type="button" class="btn btn-primary"></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php
echo $this->footer;

?>