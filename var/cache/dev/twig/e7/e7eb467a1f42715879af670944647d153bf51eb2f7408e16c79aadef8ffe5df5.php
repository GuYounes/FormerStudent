<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_da7d8a44184c9af4626411fab207dcf04488ae971c360f9cd38e4489907835b3 extends Twig_Template
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
        $__internal_efd67166e38f8ad26222fc683e6827564efb7d08c868850cf3789bece89324b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd67166e38f8ad26222fc683e6827564efb7d08c868850cf3789bece89324b7->enter($__internal_efd67166e38f8ad26222fc683e6827564efb7d08c868850cf3789bece89324b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_94e32fbb696986ce9369a83f61a295635bf7eda37263dbef8e21d8584b4aa6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e32fbb696986ce9369a83f61a295635bf7eda37263dbef8e21d8584b4aa6b4->enter($__internal_94e32fbb696986ce9369a83f61a295635bf7eda37263dbef8e21d8584b4aa6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_efd67166e38f8ad26222fc683e6827564efb7d08c868850cf3789bece89324b7->leave($__internal_efd67166e38f8ad26222fc683e6827564efb7d08c868850cf3789bece89324b7_prof);

        
        $__internal_94e32fbb696986ce9369a83f61a295635bf7eda37263dbef8e21d8584b4aa6b4->leave($__internal_94e32fbb696986ce9369a83f61a295635bf7eda37263dbef8e21d8584b4aa6b4_prof);

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
