<?php

/* FormerDUTStudentsBundle:Default:formulaire.html.twig */
class __TwigTemplate_c3139c96b62335741c951fd3f7de8fdc340f7528868f8c18ac2781b10230db3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<body>
\t\t<form action=\"http://127.0.0.1/FormerDUTStudents/web/app_dev.php/login_check\" method=\"post\">
\t    <label for=\"username\">Login :</label>
\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />

\t    <label for=\"password\">Mot de passe :</label>
\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t    <br />
\t    <input type=\"submit\" value=\"Connexion\" />
\t  </form>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FormerDUTStudentsBundle:Default:formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormerDUTStudentsBundle:Default:formulaire.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\src\\FormerDUTStudentsBundle/Resources/views/Default/formulaire.html.twig");
    }
}
