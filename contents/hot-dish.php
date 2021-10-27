<section>
    <div class="contener">

    <?php foreach ($products as $item): ?>
        <div style="margin: 1em 0;">
            id: <?= $item['id']?> <br>
            Наименование: <?= $item['name']?> <br>
            Категория: <?= $item['id_category']?> <br>
        </div>
    <?php endforeach;?>

    </div>
</section>