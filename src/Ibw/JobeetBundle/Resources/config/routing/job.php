<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('ibw_job', new Route('/', array(
    '_controller' => 'IbwJobeetBundle:Job:index',
)));

$collection->add('ibw_job_show', new Route('/{id}/show', array(
    '_controller' => 'IbwJobeetBundle:Job:show',
)));

$collection->add('ibw_job_new', new Route('/new', array(
    '_controller' => 'IbwJobeetBundle:Job:new',
)));

$collection->add('ibw_job_create', new Route(
    '/create',
    array('_controller' => 'IbwJobeetBundle:Job:create'),
    array('_method' => 'post')
));

$collection->add('ibw_job_edit', new Route('/{id}/edit', array(
    '_controller' => 'IbwJobeetBundle:Job:edit',
)));

$collection->add('ibw_job_update', new Route(
    '/{id}/update',
    array('_controller' => 'IbwJobeetBundle:Job:update'),
    array('_method' => 'post|put')
));

$collection->add('ibw_job_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'IbwJobeetBundle:Job:delete'),
    array('_method' => 'post|delete')
));

return $collection;
