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
        $__internal_803527ecdfd3cab4d36e3e9e1ec3ee4f25b3ce87f495c390a45c3c1814c5a0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803527ecdfd3cab4d36e3e9e1ec3ee4f25b3ce87f495c390a45c3c1814c5a0e0->enter($__internal_803527ecdfd3cab4d36e3e9e1ec3ee4f25b3ce87f495c390a45c3c1814c5a0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7a1eee5ef7740bbaee797f50575d7fd6d737388dd264a13a37e0a978a4f8a34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1eee5ef7740bbaee797f50575d7fd6d737388dd264a13a37e0a978a4f8a34c->enter($__internal_7a1eee5ef7740bbaee797f50575d7fd6d737388dd264a13a37e0a978a4f8a34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_803527ecdfd3cab4d36e3e9e1ec3ee4f25b3ce87f495c390a45c3c1814c5a0e0->leave($__internal_803527ecdfd3cab4d36e3e9e1ec3ee4f25b3ce87f495c390a45c3c1814c5a0e0_prof);

        
        $__internal_7a1eee5ef7740bbaee797f50575d7fd6d737388dd264a13a37e0a978a4f8a34c->leave($__internal_7a1eee5ef7740bbaee797f50575d7fd6d737388dd264a13a37e0a978a4f8a34c_prof);

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
