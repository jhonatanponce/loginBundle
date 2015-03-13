<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // test_login_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test_login_homepage');
            }

            return array (  '_controller' => 'Test\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'test_login_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/role')) {
                // admin_role
                if (rtrim($pathinfo, '/') === '/admin/role') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_role');
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role',);
                }
                not_admin_role:

                // admin_role_create
                if ($pathinfo === '/admin/role/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_role_create;
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::createAction',  '_route' => 'admin_role_create',);
                }
                not_admin_role_create:

                // admin_role_new
                if ($pathinfo === '/admin/role/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role_new;
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
                }
                not_admin_role_new:

                // admin_role_show
                if (preg_match('#^/admin/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_show')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::showAction',));
                }
                not_admin_role_show:

                // admin_role_edit
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_edit')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::editAction',));
                }
                not_admin_role_edit:

                // admin_role_update
                if (preg_match('#^/admin/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_role_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_update')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::updateAction',));
                }
                not_admin_role_update:

                // admin_role_delete
                if (preg_match('#^/admin/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_delete')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\RoleController::deleteAction',));
                }
                not_admin_role_delete:

            }

            if (0 === strpos($pathinfo, '/admin/login')) {
                // login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_check',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user');
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }
                not_admin_user:

                // admin_user_create
                if ($pathinfo === '/admin/user/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_create;
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                }
                not_admin_user_create:

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_new;
                    }

                    return array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }
                not_admin_user_new:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::editAction',));
                }
                not_admin_user_edit:

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::updateAction',));
                }
                not_admin_user_update:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Test\\LoginBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_user_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
