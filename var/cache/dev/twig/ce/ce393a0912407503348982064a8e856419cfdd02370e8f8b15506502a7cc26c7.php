<?php

/* FormerDUTStudentsBundle:Emails:welcome.html.twig */
class __TwigTemplate_6970094be538d18fe906aa4c1d7e4e867b522adae22c46506f0cdee6da9dbb5a extends Twig_Template
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
        $__internal_6546b2fee00209cac71a1d0505908555ad13695e2ee418202bdbeda924e2c819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6546b2fee00209cac71a1d0505908555ad13695e2ee418202bdbeda924e2c819->enter($__internal_6546b2fee00209cac71a1d0505908555ad13695e2ee418202bdbeda924e2c819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormerDUTStudentsBundle:Emails:welcome.html.twig"));

        $__internal_aa2808bdb43b629892a8fd22635c9bc70e5ae2ad2870a49a8e74f2e0fa4c0ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2808bdb43b629892a8fd22635c9bc70e5ae2ad2870a49a8e74f2e0fa4c0ad7->enter($__internal_aa2808bdb43b629892a8fd22635c9bc70e5ae2ad2870a49a8e74f2e0fa4c0ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormerDUTStudentsBundle:Emails:welcome.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tMot de passe : ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new Twig_Error_Runtime('Variable "password" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo " </p>

\t\t\t\t\t\t\t\t<p>Vous pouvez dès à présent vous connectez à votre compte en cliquant <a href=";
        // line 44
        echo twig_escape_filter($this->env, (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 44, $this->getSourceContext()); })()) . "?id=") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 44, $this->getSourceContext()); })())), "html", null, true);
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
        
        $__internal_6546b2fee00209cac71a1d0505908555ad13695e2ee418202bdbeda924e2c819->leave($__internal_6546b2fee00209cac71a1d0505908555ad13695e2ee418202bdbeda924e2c819_prof);

        
        $__internal_aa2808bdb43b629892a8fd22635c9bc70e5ae2ad2870a49a8e74f2e0fa4c0ad7->leave($__internal_aa2808bdb43b629892a8fd22635c9bc70e5ae2ad2870a49a8e74f2e0fa4c0ad7_prof);

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
        return array (  76 => 44,  71 => 42,  66 => 40,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
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

\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 5%\">Login : {{ username }}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tMot de passe : {{ password }} </p>

\t\t\t\t\t\t\t\t<p>Vous pouvez dès à présent vous connectez à votre compte en cliquant <a href={{ page ~ '?id=' ~ id }}>ici</a> pour modifier vos informations personnelles.</p>\t\t\t\t\t\t



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
</html>", "FormerDUTStudentsBundle:Emails:welcome.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\src\\FormerDUTStudentsBundle/Resources/views/Emails/welcome.html.twig");
    }
}
