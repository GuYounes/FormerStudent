<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'students' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getStudentsAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'unvalidated_students' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getUnvalidatedStudentsAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students/unvalidated',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::getStudentAction',    '_format' => 'json',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_student' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addStudentAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_students' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addStudentsAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_student' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::deleteStudentAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_students' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::deleteStudentsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_student' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::editStudentAction',    '_format' => 'json',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_formations_to_student' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::addFormationsToStudentAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formations',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_formations_from_student' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::removeFormationsFromStudentAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formations',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/students',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'self' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::selfAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/self',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validate_student' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::validateAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/students/validate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'check_if_logged' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\LoginController::isLoggedAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/isLogged',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::getFormationsAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::getFormationAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_formation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::addFormationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_formation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::deleteFormationAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_formations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::deleteFormationsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_formation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\FormationController::editFormationAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\UserController::editPasswordAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'send_mails' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\MailController::sendMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_student_formation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FormerDUTStudentsBundle\\Controller\\StudentFormationController::editAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/studentFormations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
