<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2416eae7443eb6e34699f9258ae056d0d63bbc797f94b19e0a9ee85a977cb822 extends Twig_Template
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
        $__internal_65e29602962b194acd858e4b08b428065a9b1f0a384d13f0f715d07c1ffac59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e29602962b194acd858e4b08b428065a9b1f0a384d13f0f715d07c1ffac59b->enter($__internal_65e29602962b194acd858e4b08b428065a9b1f0a384d13f0f715d07c1ffac59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5eb3e215477a71a2cd9e63d48e133d18f7a157c31a547c6ff11b16eb089ea96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb3e215477a71a2cd9e63d48e133d18f7a157c31a547c6ff11b16eb089ea96e->enter($__internal_5eb3e215477a71a2cd9e63d48e133d18f7a157c31a547c6ff11b16eb089ea96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_65e29602962b194acd858e4b08b428065a9b1f0a384d13f0f715d07c1ffac59b->leave($__internal_65e29602962b194acd858e4b08b428065a9b1f0a384d13f0f715d07c1ffac59b_prof);

        
        $__internal_5eb3e215477a71a2cd9e63d48e133d18f7a157c31a547c6ff11b16eb089ea96e->leave($__internal_5eb3e215477a71a2cd9e63d48e133d18f7a157c31a547c6ff11b16eb089ea96e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
