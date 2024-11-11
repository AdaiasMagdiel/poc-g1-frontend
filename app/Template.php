<?php

namespace App;

class Template
{
    protected array $data = [];
    protected string $templatePath;

    public function __construct($templatePath = 'templates')
    {
        $this->templatePath = rtrim($templatePath, '/') . '/';
    }

    public function render(string $templateFile, array $data = []): string
    {
        $this->data = $data;
        $templateFilePath = $this->templatePath . $templateFile . '.php';

        if (!file_exists($templateFilePath)) {
            throw new \Exception("Template file {$templateFile} not found.");
        }

        // Inicia o buffer de saída
        ob_start();

        // Extrai as variáveis para usar no template
        extract($this->data);

        // Inclui o arquivo do template no buffer
        include $templateFilePath;

        // Retorna o conteúdo capturado e limpa o buffer
        return ob_get_clean();
    }
}
