<?php namespace EscapeWork\Manager\Medias\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use EscapeWork\Manager\Medias\Exceptions\MediableException;
use EscapeWork\Manager\Medias\Exceptions\MediaSettingsException;
use EscapeWork\Manager\Medias\Collections\UploadCollection;

class UploadCommand extends Command implements SelfHandling {

    public $dir;
    private $files;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($files, $dir)
    {
        $this->files = $files;
        $this->dir   = $dir;
    }


    public function files(UploadCollection $files = null)
    {
        if (is_null($files)) {
            return $this->files;
        }

        $this->files = $files;
    }

    /**
     * Handle the command.
     *
     * @return void
     */
    public function handle()
    {
        return $this->files;
    }
}

