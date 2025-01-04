<div class="container-choice">
    <label for="<?php echo $name; ?>"><?php echo $label; ?></label>
    <select
        id="<?php echo $name; ?>"
        <?php echo $multiple ? 'multiple' : ''; ?>
        name="<?php echo $name; ?>"
        class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?> background-red"
        >
        <?php foreach ($options as $option => $value) : ?>
            <option value="<?php echo $option; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
</div>

