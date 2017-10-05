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

        elseif (0 === strpos($pathinfo, '/students')) {
            // students
            if ('/students' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_students;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::getStudentsAction',  '_format' => 'json',  '_route' => 'students',);
            }
            not_students:

            // student
            if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_student;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::getStudentAction',));
            }
            not_student:

            // add_student
            if ('/students' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_add_student;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::addStudentAction',  '_route' => 'add_student',);
            }
            not_add_student:

            // delete_student
            if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_student;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::deleteStudentAction',));
            }
            not_delete_student:

            // delete_students
            if ('/students' === $pathinfo) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_students;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::deleteStudentsAction',  '_route' => 'delete_students',);
            }
            not_delete_students:

            // edit_student
            if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_edit_student;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::editStudentAction',));
            }
            not_edit_student:

        }

        // self
        if ('/self' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_self;
            }

            return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::selfAction',  '_route' => 'self',);
        }
        not_self:

        // test
        if ('/test' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_test;
            }

            return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Student\\StudentController::testAction',  '_route' => 'test',);
        }
        not_test:

        // check_if_logged
        if ('/isLogged' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_check_if_logged;
            }

            return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Security\\LoginController::isLoggedAction',  '_route' => 'check_if_logged',);
        }
        not_check_if_logged:

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\Security\\LoginController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
