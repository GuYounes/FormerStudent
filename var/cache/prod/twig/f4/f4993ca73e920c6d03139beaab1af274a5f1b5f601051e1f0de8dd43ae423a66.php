<?php

/* FormerDUTStudentsBundle:Emails:welcome.html.twig */
class __TwigTemplate_5e146efea2a425d6f047ed98221ab1c3706dfd145629ea03d43cdf3126dc92cb extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<!-- If you delete this tag, the sky will fall on your head -->
\t<meta name=\"viewport\" content=\"width=device-width\" />

\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheets/email.css\" />

</head>

<body bgcolor=\"#FFFFFF\">

\t<!-- HEADER -->
\t<table class=\"head-wrap\" bgcolor=\"#999999\">

\t</table><!-- /HEADER -->

\t


\t<!-- BODY -->
\t<table class=\"body-wrap\">
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td class=\"container\" bgcolor=\"#FFFFFF\">

\t\t\t\t<div class=\"content\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<p><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcR-reQU9_FTsLDvHNQN6bEcNmcB2JHZFaw7Tv455i6WPM3oLy\" style=\"display: block; margin: auto; margin-bottom: 5%;\" /></p>

\t\t\t\t\t\t\t\t<h4 style=\"text-align: center; margin-bottom: 10%\">Bienvenue sur l'annuaire des anciens !</h4>
\t\t\t\t\t\t\t\t<p>Félicitation ! Votre inscription au sein de l'annuaire des anciens du départment informatique de l'IUT de Metz a bien été validée.</p>
\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 5%\">Les informations pour se connecter à votre compte personnel se trouvent ci dessous </p>

\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 5%\">Login : ";
        // line 40
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tMot de passe : ";
        // line 42
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo " </p>

\t\t\t\t\t\t\t\t<p>Vous pouvez dès à présent vous connectez à votre compte en cliquant <a href=";
        // line 44
        echo twig_escape_filter($this->env, ((($context["page"] ?? null) . "?id=") . ($context["id"] ?? null)), "html", null, true);
        echo ">ici</a> pour modifier vos informations personnelles.</p>\t\t\t\t\t\t



\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</td>
\t\t\t<td></td>
\t\t</tr>
\t</table><!-- /BODY -->

\t<!-- FOOTER -->
\t<table class=\"footer-wrap\">
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td class=\"container\">

\t\t\t\t<!-- content -->
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tYounes GUARSSIFI |
\t\t\t\t\t\t\t\t\tEtudiant LP WCE \t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div><!-- /content -->

\t\t\t</td>
\t\t\t<td></td>
\t\t</tr>
\t</table><!-- /FOOTER -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FormerDUTStudentsBundle:Emails:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 44,  65 => 42,  60 => 40,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormerDUTStudentsBundle:Emails:welcome.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\src\\FormerDUTStudentsBundle/Resources/views/Emails/welcome.html.twig");
    }
}
