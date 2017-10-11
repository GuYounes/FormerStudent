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
        $__internal_766614208ea906fa826625da07221efbd8d7ae81f53fb3151baec09b031d8086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766614208ea906fa826625da07221efbd8d7ae81f53fb3151baec09b031d8086->enter($__internal_766614208ea906fa826625da07221efbd8d7ae81f53fb3151baec09b031d8086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_529304ad8c8e20f8fa929bd042a11038811df4780c1b44ddcb658e0d29564ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529304ad8c8e20f8fa929bd042a11038811df4780c1b44ddcb658e0d29564ac2->enter($__internal_529304ad8c8e20f8fa929bd042a11038811df4780c1b44ddcb658e0d29564ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_766614208ea906fa826625da07221efbd8d7ae81f53fb3151baec09b031d8086->leave($__internal_766614208ea906fa826625da07221efbd8d7ae81f53fb3151baec09b031d8086_prof);

        
        $__internal_529304ad8c8e20f8fa929bd042a11038811df4780c1b44ddcb658e0d29564ac2->leave($__internal_529304ad8c8e20f8fa929bd042a11038811df4780c1b44ddcb658e0d29564ac2_prof);

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
