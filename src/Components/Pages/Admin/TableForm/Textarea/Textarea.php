<div class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?> min-h">
    <div class="form-group">
        <label for="<?php echo $column; ?>"><?php echo $label; ?></label>
        <textarea
            id="my-text-area"
            type="text"
            class="form-control"
            placeholder="<?php echo $placeholder; ?>"
            name="<?php echo $column; ?>"><?php echo $value ?? ''; ?></textarea>
    </div>
</div>
