<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('トップ', route('home'));
});

Breadcrumbs::for('watch', function ($trail) {
    $trail->parent('home');
    $trail->push('Apple Watch', route('watch'));
});

Breadcrumbs::for('item', function ($trail, $id) {
    $trail->parent('home');
    $trail->push('Apple Watch', route('watch'));
    $trail->push('商品詳細', route('item', $id));
});