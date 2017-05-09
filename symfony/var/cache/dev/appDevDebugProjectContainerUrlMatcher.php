<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // catalogue_index
        if (rtrim($pathinfo, '/') === '/catalogue') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_catalogue_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'catalogue_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\BodyController::indexAction',  '_route' => 'catalogue_index',);
        }
        not_catalogue_index:

        // bodyjson
        if (0 === strpos($pathinfo, '/admin/catalogue/body.json') && preg_match('#^/admin/catalogue/body\\.json/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bodyjson')), array (  '_controller' => 'AppBundle\\Controller\\BodyController::listejson',));
        }

        // app_body_datajsonapi
        if ($pathinfo === '/catalogue/data.json') {
            return array (  '_controller' => 'AppBundle\\Controller\\BodyController::dataJsonAPI',  '_route' => 'app_body_datajsonapi',);
        }

        if (0 === strpos($pathinfo, '/admin/catalogue')) {
            // calculSeff
            if (0 === strpos($pathinfo, '/admin/catalogue/body.json/seff') && preg_match('#^/admin/catalogue/body\\.json/seff/(?P<host>[^/]++)/(?P<typeID>[^/]++)/(?P<axis>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_calculSeff;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calculSeff')), array (  '_controller' => 'AppBundle\\Controller\\BodyController::calculSeff',));
            }
            not_calculSeff:

            // catalogue_new
            if ($pathinfo === '/admin/catalogue/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_catalogue_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BodyController::newAction',  '_route' => 'catalogue_new',);
            }
            not_catalogue_new:

            // app_body_new
            if (rtrim($pathinfo, '/') === '/admin/catalogue') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_app_body_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_body_new');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BodyController::newAction',  '_route' => 'app_body_new',);
            }
            not_app_body_new:

        }

        // catalogue_show
        if (0 === strpos($pathinfo, '/catalogue') && preg_match('#^/catalogue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_catalogue_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_show')), array (  '_controller' => 'AppBundle\\Controller\\BodyController::showAction',));
        }
        not_catalogue_show:

        if (0 === strpos($pathinfo, '/admin/catalogue')) {
            // catalogue_edit
            if (preg_match('#^/admin/catalogue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_catalogue_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_edit')), array (  '_controller' => 'AppBundle\\Controller\\BodyController::editAction',));
            }
            not_catalogue_edit:

            // catalogue_delete
            if (preg_match('#^/admin/catalogue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_catalogue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_delete')), array (  '_controller' => 'AppBundle\\Controller\\BodyController::deleteAction',));
            }
            not_catalogue_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // visu
        if ($pathinfo === '/visu') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::visualisationAction',  '_route' => 'visu',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/publicity')) {
                // publicity_index
                if (rtrim($pathinfo, '/') === '/admin/publicity') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicity_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publicity_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PublicityController::indexAction',  '_route' => 'publicity_index',);
                }
                not_publicity_index:

                // publicity_new
                if ($pathinfo === '/admin/publicity/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_publicity_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PublicityController::newAction',  '_route' => 'publicity_new',);
                }
                not_publicity_new:

                // publicity_show
                if (preg_match('#^/admin/publicity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicity_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicity_show')), array (  '_controller' => 'AppBundle\\Controller\\PublicityController::showAction',));
                }
                not_publicity_show:

                // publicity_edit
                if (preg_match('#^/admin/publicity/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_publicity_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicity_edit')), array (  '_controller' => 'AppBundle\\Controller\\PublicityController::editAction',));
                }
                not_publicity_edit:

                // publicity_delete
                if (preg_match('#^/admin/publicity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publicity_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicity_delete')), array (  '_controller' => 'AppBundle\\Controller\\PublicityController::deleteAction',));
                }
                not_publicity_delete:

            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::adminAction',  '_route' => 'admin',);
            }
            not_admin:

        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/admin/type')) {
            // type_index
            if (rtrim($pathinfo, '/') === '/admin/type') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_type_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'type_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeController::indexAction',  '_route' => 'type_index',);
            }
            not_type_index:

            // type_new
            if ($pathinfo === '/admin/type/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_type_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeController::newAction',  '_route' => 'type_new',);
            }
            not_type_new:

            // type_show
            if (preg_match('#^/admin/type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_type_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::showAction',));
            }
            not_type_show:

            // type_edit
            if (preg_match('#^/admin/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_type_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::editAction',));
            }
            not_type_edit:

            // type_delete
            if (preg_match('#^/admin/type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_type_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::deleteAction',));
            }
            not_type_delete:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
