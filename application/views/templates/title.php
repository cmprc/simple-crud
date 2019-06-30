<!-- WELCOME-->
<section class="welcome2 p-b-55">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="welcome2-inner m-t-60">
                    <div class="welcome2-greeting">
                        <h1 class="title-6"><?= $title ?></h1>
                        <p><?= $subtitle ?></p>
                    </div>
                    <?= (isset($link)) ? '<a href="'.site_url($link).'"><button type="button" class="btn btn-secondary">Adicionar</button></a>' : '' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->