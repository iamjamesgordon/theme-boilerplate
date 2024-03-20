<?php

namespace ThemeBoilerplate\Theme;

class TemplatesConfig
{
    private $json = "templates-config.json";

    public function init(): void
    {
        $templates = json_decode(
            file_get_contents(get_stylesheet_directory() . "/". $this->json)
        );

        foreach($templates as $key => $template):
            add_filter($template, [$this, 'pathChanger']);
        endforeach;

        add_filter('template_directory', [$this, 'templatePartDirectoryChanger']);
    }

    public function pathChanger($templates): array
    {
        $new_templates = [];
        foreach($templates as $template):
            $new_templates[] = "templates/" . $template;
        endforeach;
        return $new_templates;
    }

    public function templatePartDirectoryChanger($directory): string
    {
        return $directory . "/templates";
    }

}
