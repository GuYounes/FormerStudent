<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_552d20937730b5644bf8c22529f726dd4fab3b5ef059cf90213cbdd58f8bae64 extends Twig_Template
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
        $__internal_cac90e4259e9dea17db4f8786cf4a751bcbebfd74e2b7163fbe537dfbdced43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac90e4259e9dea17db4f8786cf4a751bcbebfd74e2b7163fbe537dfbdced43d->enter($__internal_cac90e4259e9dea17db4f8786cf4a751bcbebfd74e2b7163fbe537dfbdced43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_24a45d2651cb7331b9bf4975559c4b34984332b9e6820f6bf67945e651eb9614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a45d2651cb7331b9bf4975559c4b34984332b9e6820f6bf67945e651eb9614->enter($__internal_24a45d2651cb7331b9bf4975559c4b34984332b9e6820f6bf67945e651eb9614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_cac90e4259e9dea17db4f8786cf4a751bcbebfd74e2b7163fbe537dfbdced43d->leave($__internal_cac90e4259e9dea17db4f8786cf4a751bcbebfd74e2b7163fbe537dfbdced43d_prof);

        
        $__internal_24a45d2651cb7331b9bf4975559c4b34984332b9e6820f6bf67945e651eb9614->leave($__internal_24a45d2651cb7331b9bf4975559c4b34984332b9e6820f6bf67945e651eb9614_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
