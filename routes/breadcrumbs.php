<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('TOP', route('home'));
});

Breadcrumbs::for('watch', function ($trail) {
    $trail->parent('home');
    $trail->push('中古Apple Watchの選び方', route('watch'));
});

Breadcrumbs::for('item', function ($trail, $id) {
    $trail->parent('home');
    $trail->push('中古Apple Watchの選び方', route('watch'));
    $trail->push('商品詳細', route('item', $id));
});