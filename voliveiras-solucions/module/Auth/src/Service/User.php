<?php


namespace Auth\Service;

use Laminas\Db\TableGateway\AbstractTableGateway;
use Laminas\Db\Adapter\AdapterAwareInterface;
use Laminas\Db\Adapter\Adapter;
use Laminas\Session\Container;
use User\Model\UserTable;

abstract class User extends AbstractTableGateway implements AdapterAwareInterface
{
    public $paginacao;
    protected $serviceLocator;
    protected $usuario;
    protected $sessionId;

    public function __construct() {
        $this->init();
    }

    protected function getModelUsuario() {
        return new UserTable();
    }



}