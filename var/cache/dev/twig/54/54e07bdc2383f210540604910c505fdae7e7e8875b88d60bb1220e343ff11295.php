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
        $__internal_a05d6ed568d3c3937b14ce3ecdd3f3b54c2b87c27975a7d8bba5edf12e7da863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05d6ed568d3c3937b14ce3ecdd3f3b54c2b87c27975a7d8bba5edf12e7da863->enter($__internal_a05d6ed568d3c3937b14ce3ecdd3f3b54c2b87c27975a7d8bba5edf12e7da863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6a813113bd37e14721646e543b05b3404037698459a67e3b681b9f6617f9f0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a813113bd37e14721646e543b05b3404037698459a67e3b681b9f6617f9f0a5->enter($__internal_6a813113bd37e14721646e543b05b3404037698459a67e3b681b9f6617f9f0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a05d6ed568d3c3937b14ce3ecdd3f3b54c2b87c27975a7d8bba5edf12e7da863->leave($__internal_a05d6ed568d3c3937b14ce3ecdd3f3b54c2b87c27975a7d8bba5edf12e7da863_prof);

        
        $__internal_6a813113bd37e14721646e543b05b3404037698459a67e3b681b9f6617f9f0a5->leave($__internal_6a813113bd37e14721646e543b05b3404037698459a67e3b681b9f6617f9f0a5_prof);

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
