<?php

namespace PokeBundle\FileNamer;

use Vich\UploaderBundle\Naming\DirectoryNamerInterface;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use PokeBundle\Entity\Shiny;

class FileNamer implements DirectoryNamerInterface 
{
    /**
     * Returns the name of a directory where files will be uploaded
     * 
     * Directory name is formed based on user ID and media type 
     *
     * @param Media $media
     * @param PropertyMapping $mapping 
     *
     * @return string 
     */
     public function directoryName($shiny, PropertyMapping $mapping)
     {
          return $directory = $shiny->getPokemon()->getName();
     }
}