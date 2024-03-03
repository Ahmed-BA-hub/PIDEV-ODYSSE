<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'blogArticles' => [parent::class, 'blogArticles', null],
        "\0".parent::class."\0".'blogComments' => [parent::class, 'blogComments', null],
        "\0".parent::class."\0".'cin' => [parent::class, 'cin', null],
        "\0".parent::class."\0".'dateNaissance' => [parent::class, 'dateNaissance', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'mail' => [parent::class, 'mail', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'numTel' => [parent::class, 'numTel', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'reclamations' => [parent::class, 'reclamations', null],
        "\0".parent::class."\0".'reservationHotels' => [parent::class, 'reservationHotels', null],
        "\0".parent::class."\0".'reservationProgrammes' => [parent::class, 'reservationProgrammes', null],
        "\0".parent::class."\0".'reservationRestaurants' => [parent::class, 'reservationRestaurants', null],
        "\0".parent::class."\0".'resrvations' => [parent::class, 'resrvations', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'userName' => [parent::class, 'userName', null],
        'blogArticles' => [parent::class, 'blogArticles', null],
        'blogComments' => [parent::class, 'blogComments', null],
        'cin' => [parent::class, 'cin', null],
        'dateNaissance' => [parent::class, 'dateNaissance', null],
        'id' => [parent::class, 'id', null],
        'mail' => [parent::class, 'mail', null],
        'nom' => [parent::class, 'nom', null],
        'numTel' => [parent::class, 'numTel', null],
        'password' => [parent::class, 'password', null],
        'prenom' => [parent::class, 'prenom', null],
        'reclamations' => [parent::class, 'reclamations', null],
        'reservationHotels' => [parent::class, 'reservationHotels', null],
        'reservationProgrammes' => [parent::class, 'reservationProgrammes', null],
        'reservationRestaurants' => [parent::class, 'reservationRestaurants', null],
        'resrvations' => [parent::class, 'resrvations', null],
        'roles' => [parent::class, 'roles', null],
        'userName' => [parent::class, 'userName', null],
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
