<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1d57ba635aa2a2e57b97b562cb569545d932a894e76258087680c2757b23d307 extends Twig_Template
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
        $__internal_4549b1b5576d711302fce4a67d79580424118c4081c86bb62472ec89b23ff2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4549b1b5576d711302fce4a67d79580424118c4081c86bb62472ec89b23ff2db->enter($__internal_4549b1b5576d711302fce4a67d79580424118c4081c86bb62472ec89b23ff2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_72971131354bc1134ce88ffbfa4309a769cc90b6704aa3c6b141ae5fee914991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72971131354bc1134ce88ffbfa4309a769cc90b6704aa3c6b141ae5fee914991->enter($__internal_72971131354bc1134ce88ffbfa4309a769cc90b6704aa3c6b141ae5fee914991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4549b1b5576d711302fce4a67d79580424118c4081c86bb62472ec89b23ff2db->leave($__internal_4549b1b5576d711302fce4a67d79580424118c4081c86bb62472ec89b23ff2db_prof);

        
        $__internal_72971131354bc1134ce88ffbfa4309a769cc90b6704aa3c6b141ae5fee914991->leave($__internal_72971131354bc1134ce88ffbfa4309a769cc90b6704aa3c6b141ae5fee914991_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
