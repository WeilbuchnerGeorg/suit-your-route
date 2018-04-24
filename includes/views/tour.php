<div class="row">
    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/tour/" class="col-xs-12">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $this->name; ?>">
        </div>
        <div class="form-group">
            <label for="date">Datum:</label>
            <input type="date" class="form-control" name="date" id="date" value="<?php echo $this->date; ?>">
        </div>
        <div class="form-group">
            <label for="duration">Bewertung:</label>
            <select class="form-control center-block">
                <?php foreach($this->ratings as $rating): ?>
                    <option value="<?php echo $rating->id; ?>"><?php echo $rating->value; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Region:</label>
            <select class="form-control center-block">
                <?php foreach($this->regions as $region): ?>
                    <option value="<?php echo $region->id; ?>"><?php echo $region->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="startlocation">Startort:</label>
            <input type="text" name="startlocation" class="form-control" id="startlocation" value="<?php echo $this->startlocation; ?>">
        </div>
        <div class="form-group">
            <label for="duration">Aktivität:</label>
            <select class="form-control center-block">
                <?php foreach($this->activities as $activity): ?>
                    <option value="<?php echo $activity->id; ?>"><?php echo $activity->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Schwierigkeit:</label>
            <select class="form-control center-block">
                <?php foreach($this->difficulties as $difficulty): ?>
                    <option value="<?php echo $difficulty->id; ?>"><?php echo $difficulty->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Dauer:</label>
            <input type="time" name="duration" class="form-control" id="duration" value="<?php echo $this->duration; ?>">
        </div>
        <div class="form-group">
            <label for="description">Beschreibung:</label>
            <input type="text" name="description" class="form-control" id="description" value="<?php echo $this->lastname; ?>">
        </div>
        <?php if($this->id): ?>
            <input type="hidden" name="id" value="<?php echo $this->id; ?>">
        <?php endif; ?>
    </form>
</div>
<script type="text/javascript">

    var editModal = $('#editModal');

    editModal.find('form').unbind('submit');

    editModal.find('form').bind('submit', function(e, that) {

        e.preventDefault();

        editModal.find('.btn-primary').prop('disabled', true);

        hasError = false;

        if(typeof that === 'undefined') {
            that = editModal.find('.btn-primary').get(0);
        }

        var requiredFields = ['#name', '#description', '#date', '#duration', '#startlocation'];

        for(var i = 0; i < requiredFields.length; i++) {
            if($(requiredFields[i]).val() == '') {
                hasError = true;
                $(requiredFields[i]).closest('.form-group').addClass('has-error');
            }
        }

        if(!hasError)
        {
            $.ajax({
                'url': $(this).attr('action'),
                'method': $(this).attr('method'),
                'data': $(this).serialize(),
                'dataType': "json",
                'success': function (receivedData) {

                    if(receivedData.result)
                    {
                        window.setTimeout(function() {
                            location.reload();
                        }, 500);

                    }
                    else
                    {
                        editModal.find('.form-group').removeClass('has-error');

                        $.each(receivedData.data.errorFields, function(key, value) {
                            $('#'+key).closest('.form-group').addClass('has-error');
                        });
                    }

                    editModal.find('.btn-primary').prop('disabled', false);
                }
            });
        }
        else
        {
            editModal.find('.btn-primary').prop('disabled', false);
        }

    });

</script>