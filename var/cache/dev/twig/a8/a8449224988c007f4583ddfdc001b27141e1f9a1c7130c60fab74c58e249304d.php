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
        $__internal_d67ddf085e0a7a637048cd98aef6fc66ea9512e5bf50cf766b4bd5a08bc0b218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67ddf085e0a7a637048cd98aef6fc66ea9512e5bf50cf766b4bd5a08bc0b218->enter($__internal_d67ddf085e0a7a637048cd98aef6fc66ea9512e5bf50cf766b4bd5a08bc0b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4b739005b854a5c4ded00150f53859541588793e197bbb680e581448ead6ba86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b739005b854a5c4ded00150f53859541588793e197bbb680e581448ead6ba86->enter($__internal_4b739005b854a5c4ded00150f53859541588793e197bbb680e581448ead6ba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d67ddf085e0a7a637048cd98aef6fc66ea9512e5bf50cf766b4bd5a08bc0b218->leave($__internal_d67ddf085e0a7a637048cd98aef6fc66ea9512e5bf50cf766b4bd5a08bc0b218_prof);

        
        $__internal_4b739005b854a5c4ded00150f53859541588793e197bbb680e581448ead6ba86->leave($__internal_4b739005b854a5c4ded00150f53859541588793e197bbb680e581448ead6ba86_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
