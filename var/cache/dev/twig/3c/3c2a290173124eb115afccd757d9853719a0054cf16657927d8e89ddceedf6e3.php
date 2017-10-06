<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_31f3ba4f07c5d3421eabc91e44216edc47f62b5cc0b8b26ff465bc445891ae26 extends Twig_Template
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
        $__internal_d2a4383aefb111657bb29a395d681693327b19c203b1b9ba8b6c0b44a063a848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a4383aefb111657bb29a395d681693327b19c203b1b9ba8b6c0b44a063a848->enter($__internal_d2a4383aefb111657bb29a395d681693327b19c203b1b9ba8b6c0b44a063a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a6c8951fff00fe4621356ad00e71d52f4e69719dc7e88513e25c28db22d5dcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c8951fff00fe4621356ad00e71d52f4e69719dc7e88513e25c28db22d5dcbe->enter($__internal_a6c8951fff00fe4621356ad00e71d52f4e69719dc7e88513e25c28db22d5dcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d2a4383aefb111657bb29a395d681693327b19c203b1b9ba8b6c0b44a063a848->leave($__internal_d2a4383aefb111657bb29a395d681693327b19c203b1b9ba8b6c0b44a063a848_prof);

        
        $__internal_a6c8951fff00fe4621356ad00e71d52f4e69719dc7e88513e25c28db22d5dcbe->leave($__internal_a6c8951fff00fe4621356ad00e71d52f4e69719dc7e88513e25c28db22d5dcbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
