<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f46b4c39d68d16aa166ee4276074a698a3cf2f248d0511de813d7164e2e89b42 extends Twig_Template
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
        $__internal_e29a6b1b514b61a3a078b147293bc49241896fa76ce79aadf3f67baeb0f86b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29a6b1b514b61a3a078b147293bc49241896fa76ce79aadf3f67baeb0f86b12->enter($__internal_e29a6b1b514b61a3a078b147293bc49241896fa76ce79aadf3f67baeb0f86b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6a703153cce63cbf3592aa8ecd905ce5b5a0841b6a224b27c0690cf61f0c4917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a703153cce63cbf3592aa8ecd905ce5b5a0841b6a224b27c0690cf61f0c4917->enter($__internal_6a703153cce63cbf3592aa8ecd905ce5b5a0841b6a224b27c0690cf61f0c4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e29a6b1b514b61a3a078b147293bc49241896fa76ce79aadf3f67baeb0f86b12->leave($__internal_e29a6b1b514b61a3a078b147293bc49241896fa76ce79aadf3f67baeb0f86b12_prof);

        
        $__internal_6a703153cce63cbf3592aa8ecd905ce5b5a0841b6a224b27c0690cf61f0c4917->leave($__internal_6a703153cce63cbf3592aa8ecd905ce5b5a0841b6a224b27c0690cf61f0c4917_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
