<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a244fdd90134ffa89616500c74860b108c19428cf44a2839cf72de95dbf505b6 extends Twig_Template
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
        $__internal_f9e91b57c3e0b188be99da143567e676d770681e1c0f6d4547916e2edffe89ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e91b57c3e0b188be99da143567e676d770681e1c0f6d4547916e2edffe89ec->enter($__internal_f9e91b57c3e0b188be99da143567e676d770681e1c0f6d4547916e2edffe89ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4a6b99646cec7ffbb1681cea5bd209ead8b8b67be506555213d10e9a40c72bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6b99646cec7ffbb1681cea5bd209ead8b8b67be506555213d10e9a40c72bc9->enter($__internal_4a6b99646cec7ffbb1681cea5bd209ead8b8b67be506555213d10e9a40c72bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f9e91b57c3e0b188be99da143567e676d770681e1c0f6d4547916e2edffe89ec->leave($__internal_f9e91b57c3e0b188be99da143567e676d770681e1c0f6d4547916e2edffe89ec_prof);

        
        $__internal_4a6b99646cec7ffbb1681cea5bd209ead8b8b67be506555213d10e9a40c72bc9->leave($__internal_4a6b99646cec7ffbb1681cea5bd209ead8b8b67be506555213d10e9a40c72bc9_prof);

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
