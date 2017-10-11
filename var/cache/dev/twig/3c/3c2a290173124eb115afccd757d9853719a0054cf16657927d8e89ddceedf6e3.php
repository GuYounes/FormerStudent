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
        $__internal_978bdb12675e3c39ad32e2f3db25752ad120cc05428cf372bc2c27f83c26b67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978bdb12675e3c39ad32e2f3db25752ad120cc05428cf372bc2c27f83c26b67f->enter($__internal_978bdb12675e3c39ad32e2f3db25752ad120cc05428cf372bc2c27f83c26b67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9bc96c0d509994d145271713f690fe38dbaad8ca41f482a6d5e8abd9b0133c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc96c0d509994d145271713f690fe38dbaad8ca41f482a6d5e8abd9b0133c8b->enter($__internal_9bc96c0d509994d145271713f690fe38dbaad8ca41f482a6d5e8abd9b0133c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_978bdb12675e3c39ad32e2f3db25752ad120cc05428cf372bc2c27f83c26b67f->leave($__internal_978bdb12675e3c39ad32e2f3db25752ad120cc05428cf372bc2c27f83c26b67f_prof);

        
        $__internal_9bc96c0d509994d145271713f690fe38dbaad8ca41f482a6d5e8abd9b0133c8b->leave($__internal_9bc96c0d509994d145271713f690fe38dbaad8ca41f482a6d5e8abd9b0133c8b_prof);

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
