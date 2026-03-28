<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/gallery', 'pages::gallery')->name('gallery');
Route::livewire('/blogs', 'pages::blogs')->name('blogs');
Route::livewire('/faqs', 'pages::faqs')->name('faqs');
Route::livewire('/contact-us', 'pages::contact-us')->name('contact');


