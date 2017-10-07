<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_59ec4706824ffe5c596cd9f663934ea6f8b29e0bf0ee3a4e15a78255ec323ca0 extends Twig_Template
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
        $__internal_046a3a56e57c0d65aa978be2e09f773691902c8c274b3e1f4d6d56b0846b7dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046a3a56e57c0d65aa978be2e09f773691902c8c274b3e1f4d6d56b0846b7dfd->enter($__internal_046a3a56e57c0d65aa978be2e09f773691902c8c274b3e1f4d6d56b0846b7dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8c60eaaab9a0ae3620a3eb49d9f70c5a7ca0f3e3da07a118e57b3d884c1096ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c60eaaab9a0ae3620a3eb49d9f70c5a7ca0f3e3da07a118e57b3d884c1096ab->enter($__internal_8c60eaaab9a0ae3620a3eb49d9f70c5a7ca0f3e3da07a118e57b3d884c1096ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_046a3a56e57c0d65aa978be2e09f773691902c8c274b3e1f4d6d56b0846b7dfd->leave($__internal_046a3a56e57c0d65aa978be2e09f773691902c8c274b3e1f4d6d56b0846b7dfd_prof);

        
        $__internal_8c60eaaab9a0ae3620a3eb49d9f70c5a7ca0f3e3da07a118e57b3d884c1096ab->leave($__internal_8c60eaaab9a0ae3620a3eb49d9f70c5a7ca0f3e3da07a118e57b3d884c1096ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
