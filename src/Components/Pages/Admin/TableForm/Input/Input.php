<div class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?>">
    <div class="form-group">
        <label for="<?php echo $column; ?>"><?php echo $label; ?></label>
        <input type="text" class="form-control" placeholder="<?php echo $placeholder; ?>" name="<?php echo $column; ?>" value="<?php echo !empty($database) ? $database->{$column} : $value ?? ''; ?>">
    </div>
</div>
