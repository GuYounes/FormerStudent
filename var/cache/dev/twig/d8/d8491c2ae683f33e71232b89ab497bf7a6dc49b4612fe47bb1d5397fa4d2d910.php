<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_483b30f23b5c874e922906102e9c49d39bf8d17ebc9c47194732de1d28df11ca extends Twig_Template
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
        $__internal_3ecdb302effb6333b15ad0554b1fe1308dda104e33e4f19c4d44c9e35c4cc0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecdb302effb6333b15ad0554b1fe1308dda104e33e4f19c4d44c9e35c4cc0b7->enter($__internal_3ecdb302effb6333b15ad0554b1fe1308dda104e33e4f19c4d44c9e35c4cc0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_36a2c1b40c5187332b33dcbba989513868a870b6d5fb2207fa3dfc2aa5763bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a2c1b40c5187332b33dcbba989513868a870b6d5fb2207fa3dfc2aa5763bad->enter($__internal_36a2c1b40c5187332b33dcbba989513868a870b6d5fb2207fa3dfc2aa5763bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3ecdb302effb6333b15ad0554b1fe1308dda104e33e4f19c4d44c9e35c4cc0b7->leave($__internal_3ecdb302effb6333b15ad0554b1fe1308dda104e33e4f19c4d44c9e35c4cc0b7_prof);

        
        $__internal_36a2c1b40c5187332b33dcbba989513868a870b6d5fb2207fa3dfc2aa5763bad->leave($__internal_36a2c1b40c5187332b33dcbba989513868a870b6d5fb2207fa3dfc2aa5763bad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
