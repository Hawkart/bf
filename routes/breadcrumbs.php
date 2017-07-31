<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Главная', route('home'));
});

// Home > Page
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($page->title, route('page', $page->slug));
});

// Home > Books
Breadcrumbs::register('books', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Книги по Форекс", route('books'));
});

// Home > Books
Breadcrumbs::register('book', function($breadcrumbs, $book)
{
    $breadcrumbs->parent('books');
    $breadcrumbs->push($book->title, route('book', $book->slug));
});

// Home > Videos
Breadcrumbs::register('videos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Видео по Форекс", route('videos'));
});