<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7fdbeb39ab42f83cfddf90038030c6586a1d06dc1e976e3dce076d903a6ba5fc extends Twig_Template
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
        $__internal_a5c84a37a3affb4afdf1d5330f0dd488c00c0411fb17700711355f114f01068e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c84a37a3affb4afdf1d5330f0dd488c00c0411fb17700711355f114f01068e->enter($__internal_a5c84a37a3affb4afdf1d5330f0dd488c00c0411fb17700711355f114f01068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9afff5abc2bbb3f3a3d0a68fc5f1c361250dfcfdad4b0952e70182bc3309b006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afff5abc2bbb3f3a3d0a68fc5f1c361250dfcfdad4b0952e70182bc3309b006->enter($__internal_9afff5abc2bbb3f3a3d0a68fc5f1c361250dfcfdad4b0952e70182bc3309b006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a5c84a37a3affb4afdf1d5330f0dd488c00c0411fb17700711355f114f01068e->leave($__internal_a5c84a37a3affb4afdf1d5330f0dd488c00c0411fb17700711355f114f01068e_prof);

        
        $__internal_9afff5abc2bbb3f3a3d0a68fc5f1c361250dfcfdad4b0952e70182bc3309b006->leave($__internal_9afff5abc2bbb3f3a3d0a68fc5f1c361250dfcfdad4b0952e70182bc3309b006_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
