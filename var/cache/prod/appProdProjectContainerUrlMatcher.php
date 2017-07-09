<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // RytisNewsLettersBundle_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'RytisNewsLettersBundle_homepage');
            }

            return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::indexAction',  '_route' => 'RytisNewsLettersBundle_homepage',);
        }

        // RytisNewsLettersBundle_create
        if ('/create' === $pathinfo) {
            return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::createAction',  '_route' => 'RytisNewsLettersBundle_create',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // RytisNewsLettersBundle_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::adminAction',  '_route' => 'RytisNewsLettersBundle_admin',);
            }

            // RytisNewsLettersBundle_AdminLoad
            if ('/admin/load' === $pathinfo) {
                return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::loadAction',  '_route' => 'RytisNewsLettersBundle_AdminLoad',);
            }

            // RytisNewsLettersBundle_AdminDelete
            if ('/admin/delete' === $pathinfo) {
                return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::deleteAction',  '_route' => 'RytisNewsLettersBundle_AdminDelete',);
            }

            // RytisNewsLettersBundle_AdminUpdate
            if ('/admin/update' === $pathinfo) {
                return array (  '_controller' => 'Rytis\\NewsLettersBundle\\Controller\\MainController::updateAction',  '_route' => 'RytisNewsLettersBundle_AdminUpdate',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
