<?php
/**
 * Created by PhpStorm.
 * User: chenallen
 * Date: 2017/4/18
 * Time: 下午2:56
 */

namespace App\Markdown;


class Markdown
{
    protected $parser;

    /**
     * Markdown constructor.
     * @param $parser
     */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    public function markdown($text)
    {
        $html = $this->parser->makeHtml($text);
        return $html;
    }
}