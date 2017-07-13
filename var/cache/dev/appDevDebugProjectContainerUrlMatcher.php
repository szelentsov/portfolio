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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // app_home_home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_home_home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::home',  '_route' => 'app_home_home',);
        }

        // mess
        if ('/mess' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\MessController::mess',  '_route' => 'mess',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/posts')) {
                    // admin_app_posts_list
                    if ('/admin/app/posts/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_list',  '_route' => 'admin_app_posts_list',);
                    }

                    // admin_app_posts_create
                    if ('/admin/app/posts/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_create',  '_route' => 'admin_app_posts_create',);
                    }

                    // admin_app_posts_batch
                    if ('/admin/app/posts/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_batch',  '_route' => 'admin_app_posts_batch',);
                    }

                    // admin_app_posts_edit
                    if (preg_match('#^/admin/app/posts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_posts_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_edit',));
                    }

                    // admin_app_posts_delete
                    if (preg_match('#^/admin/app/posts/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_posts_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_delete',));
                    }

                    // admin_app_posts_show
                    if (preg_match('#^/admin/app/posts/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_posts_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_show',));
                    }

                    // admin_app_posts_export
                    if ('/admin/app/posts/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.posts',  '_sonata_name' => 'admin_app_posts_export',  '_route' => 'admin_app_posts_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/form')) {
                    // admin_app_form_list
                    if ('/admin/app/form/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_list',  '_route' => 'admin_app_form_list',);
                    }

                    // admin_app_form_create
                    if ('/admin/app/form/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_create',  '_route' => 'admin_app_form_create',);
                    }

                    // admin_app_form_batch
                    if ('/admin/app/form/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_batch',  '_route' => 'admin_app_form_batch',);
                    }

                    // admin_app_form_edit
                    if (preg_match('#^/admin/app/form/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_form_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_edit',));
                    }

                    // admin_app_form_delete
                    if (preg_match('#^/admin/app/form/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_form_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_delete',));
                    }

                    // admin_app_form_show
                    if (preg_match('#^/admin/app/form/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_form_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_show',));
                    }

                    // admin_app_form_export
                    if ('/admin/app/form/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.form',  '_sonata_name' => 'admin_app_form_export',  '_route' => 'admin_app_form_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/config')) {
                    // admin_app_config_list
                    if ('/admin/app/config/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_list',  '_route' => 'admin_app_config_list',);
                    }

                    // admin_app_config_create
                    if ('/admin/app/config/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_create',  '_route' => 'admin_app_config_create',);
                    }

                    // admin_app_config_batch
                    if ('/admin/app/config/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_batch',  '_route' => 'admin_app_config_batch',);
                    }

                    // admin_app_config_edit
                    if (preg_match('#^/admin/app/config/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_config_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_edit',));
                    }

                    // admin_app_config_delete
                    if (preg_match('#^/admin/app/config/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_config_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_delete',));
                    }

                    // admin_app_config_show
                    if (preg_match('#^/admin/app/config/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_config_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_show',));
                    }

                    // admin_app_config_export
                    if ('/admin/app/config/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.config',  '_sonata_name' => 'admin_app_config_export',  '_route' => 'admin_app_config_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
