<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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


        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/students')) {
                // students
                if ('/students' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_students;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getStudentsAction',  '_format' => 'json',  '_route' => 'students',);
                }
                not_students:

                // unvalidated_students
                if ('/students/unvalidated' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_unvalidated_students;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getUnvalidatedStudentsAction',  '_format' => 'json',  '_route' => 'unvalidated_students',);
                }
                not_unvalidated_students:

                // student
                if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_student;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getStudentAction',  '_format' => 'json',));
                }
                not_student:

                // add_student
                if ('/students' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_add_student;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addStudentAction',  '_format' => 'json',  '_route' => 'add_student',);
                }
                not_add_student:

                // add_students
                if ('/students/import' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_add_students;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addStudentsAction',  '_format' => 'json',  '_route' => 'add_students',);
                }
                not_add_students:

                // delete_student
                if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_delete_student;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::deleteStudentAction',));
                }
                not_delete_student:

                // delete_students
                if ('/students' === $pathinfo) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_delete_students;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::deleteStudentsAction',  '_route' => 'delete_students',);
                }
                not_delete_students:

                // edit_student
                if (preg_match('#^/students/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_edit_student;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::editStudentAction',  '_format' => 'json',));
                }
                not_edit_student:

                // add_formations_to_student
                if (preg_match('#^/students/(?P<id>\\d+)/formations$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_add_formations_to_student;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_formations_to_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addFormationsToStudentAction',));
                }
                not_add_formations_to_student:

                // remove_formations_from_student
                if (preg_match('#^/students/(?P<id>\\d+)/formations$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_remove_formations_from_student;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_formations_from_student')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::removeFormationsFromStudentAction',));
                }
                not_remove_formations_from_student:

                // validate_student
                if ('/students/validate' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_validate_student;
                    }

                    return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::validateAction',  '_format' => 'json',  '_route' => 'validate_student',);
                }
                not_validate_student:

            }

            // edit_student_formation
            if ('/studentFormations' === $pathinfo) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_edit_student_formation;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentFormationController::editAction',  '_format' => 'json',  '_route' => 'edit_student_formation',);
            }
            not_edit_student_formation:

            // self
            if ('/self' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_self;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::selfAction',  '_format' => 'json',  '_route' => 'self',);
            }
            not_self:

        }

        // test
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_test;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::testAction',));
        }
        not_test:

        // check_if_logged
        if ('/isLogged' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_check_if_logged;
            }

            return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\LoginController::isLoggedAction',  '_format' => 'json',  '_route' => 'check_if_logged',);
        }
        not_check_if_logged:

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
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

        if (0 === strpos($pathinfo, '/formations')) {
            // formations
            if ('/formations' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_formations;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::getFormationsAction',  '_format' => 'json',  '_route' => 'formations',);
            }
            not_formations:

            // formation
            if (preg_match('#^/formations/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_formation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::getFormationAction',));
            }
            not_formation:

            // add_formation
            if ('/formations' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_add_formation;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::addFormationAction',  '_route' => 'add_formation',);
            }
            not_add_formation:

            // delete_formation
            if (preg_match('#^/formations/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_formation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_formation')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::deleteFormationAction',));
            }
            not_delete_formation:

            // delete_formations
            if ('/formations' === $pathinfo) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_formations;
                }

                return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::deleteFormationsAction',  '_route' => 'delete_formations',);
            }
            not_delete_formations:

            // edit_formation
            if (preg_match('#^/formations/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_edit_formation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_formation')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::editFormationAction',));
            }
            not_edit_formation:

        }

        // edit_user
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>\\d+)/password$#s', $pathinfo, $matches)) {
            if ('PUT' !== $canonicalMethod) {
                $allow[] = 'PUT';
                goto not_edit_user;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_user')), array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\UserController::editPasswordAction',));
        }
        not_edit_user:

        // send_mails
        if ('/mail' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_send_mails;
            }

            return array (  '_controller' => 'FormerDUTStudentsBundle\\Controller\\MailController::sendMailAction',  '_route' => 'send_mails',);
        }
        not_send_mails:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
