<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1fcec588c8a619c350e6ff211ecece7d4f65092e8817835b5c1116904a634031 extends Twig_Template
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
        $__internal_0a48973bb0d4ec86baa43d3ee690b535371cc3913fa61b3349f607eac2c3d750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a48973bb0d4ec86baa43d3ee690b535371cc3913fa61b3349f607eac2c3d750->enter($__internal_0a48973bb0d4ec86baa43d3ee690b535371cc3913fa61b3349f607eac2c3d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_68b659f6d4d18906e43df4f02ae4fbc1cdc37fc4c6232f1d2274b9da11d7ca3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b659f6d4d18906e43df4f02ae4fbc1cdc37fc4c6232f1d2274b9da11d7ca3f->enter($__internal_68b659f6d4d18906e43df4f02ae4fbc1cdc37fc4c6232f1d2274b9da11d7ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0a48973bb0d4ec86baa43d3ee690b535371cc3913fa61b3349f607eac2c3d750->leave($__internal_0a48973bb0d4ec86baa43d3ee690b535371cc3913fa61b3349f607eac2c3d750_prof);

        
        $__internal_68b659f6d4d18906e43df4f02ae4fbc1cdc37fc4c6232f1d2274b9da11d7ca3f->leave($__internal_68b659f6d4d18906e43df4f02ae4fbc1cdc37fc4c6232f1d2274b9da11d7ca3f_prof);

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
