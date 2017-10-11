<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_935e157c55e7f9cad102e1e9e068528062a903d11b5867d06710bd1bc5941a6d extends Twig_Template
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
        $__internal_12cfa478f913ee8609f3a409feaf02a9d8bc366e94455693416e62ba5dd14e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cfa478f913ee8609f3a409feaf02a9d8bc366e94455693416e62ba5dd14e1e->enter($__internal_12cfa478f913ee8609f3a409feaf02a9d8bc366e94455693416e62ba5dd14e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_888a1d3abcdaca320bd1b07b4f32ee2cb6945b1a3ebffb34140f5207a0d84c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888a1d3abcdaca320bd1b07b4f32ee2cb6945b1a3ebffb34140f5207a0d84c2a->enter($__internal_888a1d3abcdaca320bd1b07b4f32ee2cb6945b1a3ebffb34140f5207a0d84c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_12cfa478f913ee8609f3a409feaf02a9d8bc366e94455693416e62ba5dd14e1e->leave($__internal_12cfa478f913ee8609f3a409feaf02a9d8bc366e94455693416e62ba5dd14e1e_prof);

        
        $__internal_888a1d3abcdaca320bd1b07b4f32ee2cb6945b1a3ebffb34140f5207a0d84c2a->leave($__internal_888a1d3abcdaca320bd1b07b4f32ee2cb6945b1a3ebffb34140f5207a0d84c2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
