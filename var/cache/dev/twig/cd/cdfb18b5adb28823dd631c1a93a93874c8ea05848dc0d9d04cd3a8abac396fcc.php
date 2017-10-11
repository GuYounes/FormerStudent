<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d55125041504a9cd9772f82fbb9f22843ba4179824a217216b2a286a1ac81701 extends Twig_Template
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
        $__internal_33564dcfcd8d067c61b8eb6ff54a8c61f36e522091a93f7af95ce1b816c82d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33564dcfcd8d067c61b8eb6ff54a8c61f36e522091a93f7af95ce1b816c82d08->enter($__internal_33564dcfcd8d067c61b8eb6ff54a8c61f36e522091a93f7af95ce1b816c82d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fbaa3133cc84e36fe5644fd81d47a2cbfaf8925509ad1435614a79eba8dc512a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaa3133cc84e36fe5644fd81d47a2cbfaf8925509ad1435614a79eba8dc512a->enter($__internal_fbaa3133cc84e36fe5644fd81d47a2cbfaf8925509ad1435614a79eba8dc512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_33564dcfcd8d067c61b8eb6ff54a8c61f36e522091a93f7af95ce1b816c82d08->leave($__internal_33564dcfcd8d067c61b8eb6ff54a8c61f36e522091a93f7af95ce1b816c82d08_prof);

        
        $__internal_fbaa3133cc84e36fe5644fd81d47a2cbfaf8925509ad1435614a79eba8dc512a->leave($__internal_fbaa3133cc84e36fe5644fd81d47a2cbfaf8925509ad1435614a79eba8dc512a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
