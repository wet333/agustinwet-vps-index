<?php

class HeadBuilder {

    // Properties
    private $pageTitle;
    private $cssFiles = [];
    private $jsFiles = [];

    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    public function addCssFile($cssFile) {
        $this->cssFiles[] = $cssFile;
        return $this;
    }

    public function addJsFile($jsFile) {
        $this->jsFiles[] = $jsFile;
        return $this;
    }

    public function build() {
        $headTag = '<head>';

        // Page title
        $headTag .= "<title>{$this->pageTitle}</title>";

        // CSS files
        foreach ($this->cssFiles as $cssFile) {
            $headTag .= "<link rel='stylesheet' href='$cssFile'>";
        }

        // JS files
        foreach ($this->jsFiles as $jsFile) {
            $headTag .= "<script src='$jsFile'></script>";
        }

        $headTag .= '<meta charset="UTF-8">';
        $headTag .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $headTag .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

        $headTag .= '</head>';

        return $headTag;
    }
}
