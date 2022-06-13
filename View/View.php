<?php

namespace HW_2\View;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars = [])
{
    extract($vars);

    ob_start();
    include $this->templatesPath . '/' . $templateName;
    $buffer = ob_get_contents();
    ob_end_clean();

    $error = 'В шаблоне была ошибка!';

    if (empty($error)) {
        echo $buffer;
    } else {
        echo $error;
    }
}
}

?>