<div class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?> min-h">
    <div class="form-group">
        <label for="<?php echo $name; ?>"><?php echo $label; ?></label>
        <textarea
            id="my-text-area"
            type="text"
            class="form-control"
            placeholder="<?php echo $placeholder; ?>"
            name="<?php echo $name; ?>"></textarea>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const easymde = new EasyMDE({
            element: document.getElementById('my-text-area'),
        });
    });
</script>
