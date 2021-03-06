<?php

namespace App\Providers;

use Storage;
use League\Flysystem\Filesystem;
use Dropbox\Client as DropboxClient;
use League\Flysystem\Dropbox\DropboxAdapter;
use Illuminate\Support\ServiceProvider;

class DropboxFilesystemServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient($config['DROPBOX_TOKEN'], $config['DROPBOX_SECRET']);
            return new Filesystem(new DropboxAdapter($client));
        });
    }

    public function register()
    {
        //
    }
}