<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ReservationProgramme extends \App\Entity\ReservationProgramme implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'heure' => [parent::class, 'heure', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nbpersonne' => [parent::class, 'nbpersonne', null],
        "\0".parent::class."\0".'programme' => [parent::class, 'programme', null],
        "\0".parent::class."\0".'reclamations' => [parent::class, 'reclamations', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'date' => [parent::class, 'date', null],
        'heure' => [parent::class, 'heure', null],
        'id' => [parent::class, 'id', null],
        'nbpersonne' => [parent::class, 'nbpersonne', null],
        'programme' => [parent::class, 'programme', null],
        'reclamations' => [parent::class, 'reclamations', null],
        'user' => [parent::class, 'user', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
