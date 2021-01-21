<?php

namespace App\Console\Commands;
use Illuminate\Console\GeneratorCommand;


class AbstractMakeCommand extends GeneratorCommand
{
    protected $name = 'make:abstract';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new abstract';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:abstract {name : Abstract name you want to use.}';


    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Abstract';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return app_path('Console/Stubs/abstract.stub');
    }


    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Abstracts';
    }
}
