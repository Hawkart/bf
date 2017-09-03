<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Главная', route('home'));
});

// Home > 
Breadcrumbs::register('calendar', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Экономический календарь', route('calendar'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('О школе', route('about'));
});

// Home > contacts
Breadcrumbs::register('contacts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Контакты', route('contacts'));
});

// Home > About > Teachers
Breadcrumbs::register('teachers', function($breadcrumbs)
{
    $breadcrumbs->parent('about');
    $breadcrumbs->push('Преподаватели', route('teachers'));
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

// Home > articles
Breadcrumbs::register('articles', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Статьи", route('articles'));
});

// Home > articles > article
Breadcrumbs::register('article', function($breadcrumbs, $article)
{
    $breadcrumbs->parent('articles');
    $breadcrumbs->push($article->title, route('article', $article->slug));
});

// Home > forecasts
Breadcrumbs::register('forecasts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Аналитика форекс", route('forecasts'));
});

// Home > forecasts > forecast
Breadcrumbs::register('forecast', function($breadcrumbs, $forecast)
{
    $breadcrumbs->parent('forecasts');
    $breadcrumbs->push($forecast->title, route('forecast', $forecast->slug));
});

// Home > strategies
Breadcrumbs::register('strategies', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push("Стратегии", route('strategies'));
});

// Home > strategies > strategy
Breadcrumbs::register('strategy', function($breadcrumbs, $strategy)
{
    $breadcrumbs->parent('strategies');
    $breadcrumbs->push($strategy->title, route('strategy', $strategy->slug));
});