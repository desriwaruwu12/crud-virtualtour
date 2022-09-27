<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

// work
Breadcrumbs::for('work1',function($trail){
    $trail->push('work',route('work.index'));
});

Breadcrumbs::for('work.create',function($trail){
    $trail->parent('work1');
    $trail->push('create',route('work.create'));
});

Breadcrumbs::for('work.update',function($trail){
    $trail->parent('work1');
    $trail->push('edit',route('work.update'));
});
//selesai work

//about
Breadcrumbs::for('about',function($trail){
    $trail->push('About',route('about.index'));
});

Breadcrumbs::for('about.add',function($trail){
    $trail->parent('about');
    $trail->push('create',route('about.add'));
});

Breadcrumbs::for('about.add1',function($trail){
    $trail->parent('about');
    $trail->push('edit',route('about.add'));
});
//selesai about

//keunggulan
Breadcrumbs::for('keunggulan',function($trail){
    $trail->push('keunggulan',route('keunggulan.index'));
});

Breadcrumbs::for('keunggulan.create',function($trail){
    $trail->parent('keunggulan');
    $trail->push('create',route('keunggulan.create'));
});

Breadcrumbs::for('keunggulan.create2',function($trail){
    $trail->parent('keunggulan');
    $trail->push('edit',route('keunggulan.create'));
});
//selesai keunggulan

//destinasi
Breadcrumbs::for('destinasi',function($trail){
    $trail->push('destinasi',route('destinasi.index'));
});

Breadcrumbs::for('destinasi.create',function($trail){
    $trail->parent('destinasi');
    $trail->push('create',route('destinasi.create'));
});

Breadcrumbs::for('destinasi.create1',function($trail){
    $trail->parent('destinasi');
    $trail->push('edit',route('destinasi.create'));
});
//selesai destinasi

//berita
Breadcrumbs::for('berita',function($trail){
    $trail->push('berita',route('berita.index'));
});

Breadcrumbs::for('berita.create',function($trail){
    $trail->parent('berita');
    $trail->push('create',route('berita.create'));
});

Breadcrumbs::for('berita.update',function($trail){
    $trail->parent('berita');
    $trail->push('edit',route('berita.update'));
});
//selesai berita

//dashboard
Breadcrumbs::for('dashboard',function($trail){
    $trail->push('dashboard',route('dashboard'));
});

//testimoni
Breadcrumbs::for('testimoni',function($trail){
    $trail->push('testimoni',route('testimoni.index'));
});

Breadcrumbs::for('testimoni.create',function($trail){
    $trail->parent('testimoni');
    $trail->push('create',route('testimoni.create'));
});

Breadcrumbs::for('testimoni.create1',function($trail){
    $trail->parent('testimoni');
    $trail->push('edit',route('testimoni.create'));
});
//selesai testimoni

//galeri
Breadcrumbs::for('posts',function($trail){
    $trail->push('galeri',route('posts.index'));
});

Breadcrumbs::for('posts.create',function($trail){
    $trail->parent('posts');
    $trail->push('create',route('posts.create'));
});

Breadcrumbs::for('posts.create2',function($trail){
    $trail->parent('posts');
    $trail->push('edit',route('posts.create'));
});
//selesai galeri

//headline
Breadcrumbs::for('headline',function($trail){
    $trail->push('headline',route('headline.index'));
});

Breadcrumbs::for('headline.create',function($trail){
    $trail->parent('headline');
    $trail->push('create',route('headline.create'));
});

Breadcrumbs::for('headline.create1',function($trail){
    $trail->parent('headline');
    $trail->push('edit',route('headline.create'));
});
//selesai headline
//staff
Breadcrumbs::for('staff',function($trail){
    $trail->push('staff',route('staff.index'));
});

Breadcrumbs::for('staff.create',function($trail){
    $trail->parent('staff');
    $trail->push('create',route('staff.create'));
});

Breadcrumbs::for('staff.create1',function($trail){
    $trail->parent('staff');
    $trail->push('edit',route('staff.create')); 
});