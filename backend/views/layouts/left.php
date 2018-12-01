<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidbar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Behavioral', 'icon' => 'file-code-o', 'url' => ['/behavioral']],
                    ['label' => 'User behavioral', 'icon' => 'file-code-o', 'url' => ['/user-behavioral']],
                    ['label' => 'Behavioral feedback', 'icon' => 'file-code-o', 'url' => ['/behavioral-feedback']],
                    ['label' => 'Goals', 'icon' => 'file-code-o', 'url' => ['/goals']],
                    ['label' => 'Goals feedback', 'icon' => 'file-code-o', 'url' => ['/goals-feedback']],
                    ['label' => 'Users', 'icon' => 'file-code-o', 'url' => ['/user']],

                ],
            ]
        ) ?>

    </section>

</aside>
