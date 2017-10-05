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
        $__internal_7006faf3d20133f4fb50886c5cd2ecddda6170875ede96bb2d55f1f43131de84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7006faf3d20133f4fb50886c5cd2ecddda6170875ede96bb2d55f1f43131de84->enter($__internal_7006faf3d20133f4fb50886c5cd2ecddda6170875ede96bb2d55f1f43131de84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_209dc9a19ae1fdd0268a316e4f6bb15611b134af57c1ee36c0c9637f5f9efcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209dc9a19ae1fdd0268a316e4f6bb15611b134af57c1ee36c0c9637f5f9efcd1->enter($__internal_209dc9a19ae1fdd0268a316e4f6bb15611b134af57c1ee36c0c9637f5f9efcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7006faf3d20133f4fb50886c5cd2ecddda6170875ede96bb2d55f1f43131de84->leave($__internal_7006faf3d20133f4fb50886c5cd2ecddda6170875ede96bb2d55f1f43131de84_prof);

        
        $__internal_209dc9a19ae1fdd0268a316e4f6bb15611b134af57c1ee36c0c9637f5f9efcd1->leave($__internal_209dc9a19ae1fdd0268a316e4f6bb15611b134af57c1ee36c0c9637f5f9efcd1_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
