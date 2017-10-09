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
        $__internal_f0b2a046f6279ff2f370bf2fc6c91111d25d9c82b39cc29656aa63137f256cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b2a046f6279ff2f370bf2fc6c91111d25d9c82b39cc29656aa63137f256cb6->enter($__internal_f0b2a046f6279ff2f370bf2fc6c91111d25d9c82b39cc29656aa63137f256cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1e7462bdcf8a3f5a48af85f7a532936f4f92fa7a7641c2752f61009d0fe79111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7462bdcf8a3f5a48af85f7a532936f4f92fa7a7641c2752f61009d0fe79111->enter($__internal_1e7462bdcf8a3f5a48af85f7a532936f4f92fa7a7641c2752f61009d0fe79111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f0b2a046f6279ff2f370bf2fc6c91111d25d9c82b39cc29656aa63137f256cb6->leave($__internal_f0b2a046f6279ff2f370bf2fc6c91111d25d9c82b39cc29656aa63137f256cb6_prof);

        
        $__internal_1e7462bdcf8a3f5a48af85f7a532936f4f92fa7a7641c2752f61009d0fe79111->leave($__internal_1e7462bdcf8a3f5a48af85f7a532936f4f92fa7a7641c2752f61009d0fe79111_prof);

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
