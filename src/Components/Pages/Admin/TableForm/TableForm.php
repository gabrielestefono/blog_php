<div class="card-body">
    <form action="/admin/post/store" method="post">
        <div class="form-group d-flex flex-wrap">
            <?php foreach ($form as $el): ?>
                <?php echo $el->render([]); ?>
            <?php endforeach; ?>
        </div>
    </form>
</div>
