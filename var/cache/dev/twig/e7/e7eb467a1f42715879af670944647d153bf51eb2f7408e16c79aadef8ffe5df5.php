<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_da7d8a44184c9af4626411fab207dcf04488ae971c360f9cd38e4489907835b3 extends Twig_Template
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
        $__internal_d96f25f379b54584183518306c2d7ff3c2a91a16cfb9981143290aa76b59fa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96f25f379b54584183518306c2d7ff3c2a91a16cfb9981143290aa76b59fa31->enter($__internal_d96f25f379b54584183518306c2d7ff3c2a91a16cfb9981143290aa76b59fa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2d61c263e9d0a96b604a292f546eed1f423281bd819a19662b5990c7a03ef289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d61c263e9d0a96b604a292f546eed1f423281bd819a19662b5990c7a03ef289->enter($__internal_2d61c263e9d0a96b604a292f546eed1f423281bd819a19662b5990c7a03ef289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d96f25f379b54584183518306c2d7ff3c2a91a16cfb9981143290aa76b59fa31->leave($__internal_d96f25f379b54584183518306c2d7ff3c2a91a16cfb9981143290aa76b59fa31_prof);

        
        $__internal_2d61c263e9d0a96b604a292f546eed1f423281bd819a19662b5990c7a03ef289->leave($__internal_2d61c263e9d0a96b604a292f546eed1f423281bd819a19662b5990c7a03ef289_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
