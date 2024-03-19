<?php

namespace ThemeBoilerplate\Scripts;

class Scripts
{
    public function init(): void
    {
        add_action('init', [$this, 'register']);
    }

    public function register(): void
    {
        echo "<h1>ThemeBoilerplate\Scripts\Scripts loaded</h1>";
    }
}