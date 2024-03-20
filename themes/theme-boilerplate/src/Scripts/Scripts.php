<?php

namespace ThemeBoilerplate\Scripts;

class Scripts
{
    protected $ManifestPath;
    protected $ManifestFile;

    public function __construct()
    {
        $this->ManifestFile = json_decode(file_get_contents(get_stylesheet_directory(). "/dist/manifest.json"), true);
        $this->ManifestPath = dirname(get_stylesheet_directory_uri(). "/dist/manifest.json");
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
    }

    /**
     *
     *
     * @return void
     */
    public function enqueueScripts()
    {
        wp_enqueue_style('main-css', $this->getHashedAssetFile('pb_public.css'));
        wp_enqueue_script('main-js', $this->getHashedAssetFile('pb_public.js'), array(), '1.0.0', true);
    }

    /**
     *
     *
     * @return string
     */
    public function getHashedAssetFile(string $asset)
    {
        $path = $this->ManifestPath;
        $file = substr($this->ManifestFile[$asset], 2);
        return $path ."/". $file;
    }

}
