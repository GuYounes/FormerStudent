<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0fe80eacd02d7882ac251e4bc86d51a5b76ed021d036bf7cd8ccfcd6a668ddb1 extends Twig_Template
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
        $__internal_731ee10be51d6745d2f376625f38ef5ff1cbf2e641fa99e2d1907119ec27e2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731ee10be51d6745d2f376625f38ef5ff1cbf2e641fa99e2d1907119ec27e2fa->enter($__internal_731ee10be51d6745d2f376625f38ef5ff1cbf2e641fa99e2d1907119ec27e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cb146bfc91e2ba774e0ba5fc0e2a8fdf66eb492d7117bbbfa9fb7b374e630812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb146bfc91e2ba774e0ba5fc0e2a8fdf66eb492d7117bbbfa9fb7b374e630812->enter($__internal_cb146bfc91e2ba774e0ba5fc0e2a8fdf66eb492d7117bbbfa9fb7b374e630812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_731ee10be51d6745d2f376625f38ef5ff1cbf2e641fa99e2d1907119ec27e2fa->leave($__internal_731ee10be51d6745d2f376625f38ef5ff1cbf2e641fa99e2d1907119ec27e2fa_prof);

        
        $__internal_cb146bfc91e2ba774e0ba5fc0e2a8fdf66eb492d7117bbbfa9fb7b374e630812->leave($__internal_cb146bfc91e2ba774e0ba5fc0e2a8fdf66eb492d7117bbbfa9fb7b374e630812_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
