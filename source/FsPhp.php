<?php


namespace Source;


class FsPhp
{
    public $db_name;
    public $server_name;
    public $lang_name;
    public $os_name;
    public $ide_name;
    public $markup_lang;

    public function __construct(
        $db_name,
        $server_name,
        $lang_name,
        $os_name,
        $ide_name,
        $markup_lang
    )
    {
        $this->db_name = $db_name;
        $this->server_name = $server_name;
        $this->lang_name = $lang_name;
        $this->os_name = $os_name;
        $this->ide_name = $ide_name;
        $this->markup_lang = $markup_lang;
    }

    public function showInfoFsphp()
    {
        echo "Db name: " . $this->db_name . "\n" . "Server name: " . $this->server_name . PHP_EOL;
    }

}