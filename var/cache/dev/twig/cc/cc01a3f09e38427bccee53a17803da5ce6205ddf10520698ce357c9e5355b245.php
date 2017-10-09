<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13efe0c3c28f888259847f8b248d49e3287de2dc4db04dde9ef8faf062b38904 extends Twig_Template
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
        $__internal_4a703c122e75f7a2a2acf18e0c369211a322f058e09fb63f6dbfba2cacafe275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a703c122e75f7a2a2acf18e0c369211a322f058e09fb63f6dbfba2cacafe275->enter($__internal_4a703c122e75f7a2a2acf18e0c369211a322f058e09fb63f6dbfba2cacafe275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cf3f9dc1a42a8db9c729754c74c67f52728fd6a69918793289ca60ac1fe06c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3f9dc1a42a8db9c729754c74c67f52728fd6a69918793289ca60ac1fe06c98->enter($__internal_cf3f9dc1a42a8db9c729754c74c67f52728fd6a69918793289ca60ac1fe06c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_4a703c122e75f7a2a2acf18e0c369211a322f058e09fb63f6dbfba2cacafe275->leave($__internal_4a703c122e75f7a2a2acf18e0c369211a322f058e09fb63f6dbfba2cacafe275_prof);

        
        $__internal_cf3f9dc1a42a8db9c729754c74c67f52728fd6a69918793289ca60ac1fe06c98->leave($__internal_cf3f9dc1a42a8db9c729754c74c67f52728fd6a69918793289ca60ac1fe06c98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
