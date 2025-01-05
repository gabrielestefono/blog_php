<div class="container-choice">
    <label for="<?php echo $name; ?>"><?php echo $label; ?></label>
    <select
        id="<?php echo $name; ?>"
        <?php echo $multiple ? 'multiple' : ''; ?>
        name="<?php echo $name; ?>"
        class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?> background-red">
        <?php foreach ($options as $key => $option) : ?>
            <option value="<?php echo $key; ?>" <?php echo $key == $value ? 'selected' : ''; ?>><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select>
</div>
