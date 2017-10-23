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
        $__internal_47e2f98df7b32f365ffe7f369b66b565f4d16f036eef5f0bcb1d09a44433fec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e2f98df7b32f365ffe7f369b66b565f4d16f036eef5f0bcb1d09a44433fec6->enter($__internal_47e2f98df7b32f365ffe7f369b66b565f4d16f036eef5f0bcb1d09a44433fec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2fbda5a4e4d32e5d71a465b495fdccbb3c57adb6c1e0addc47e9662f5a92bcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbda5a4e4d32e5d71a465b495fdccbb3c57adb6c1e0addc47e9662f5a92bcd5->enter($__internal_2fbda5a4e4d32e5d71a465b495fdccbb3c57adb6c1e0addc47e9662f5a92bcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_47e2f98df7b32f365ffe7f369b66b565f4d16f036eef5f0bcb1d09a44433fec6->leave($__internal_47e2f98df7b32f365ffe7f369b66b565f4d16f036eef5f0bcb1d09a44433fec6_prof);

        
        $__internal_2fbda5a4e4d32e5d71a465b495fdccbb3c57adb6c1e0addc47e9662f5a92bcd5->leave($__internal_2fbda5a4e4d32e5d71a465b495fdccbb3c57adb6c1e0addc47e9662f5a92bcd5_prof);

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
