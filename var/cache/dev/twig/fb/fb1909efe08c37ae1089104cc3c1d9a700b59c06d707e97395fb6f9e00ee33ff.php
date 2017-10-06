<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bd65b39c99b56e1de337f9a51137690df4c3462b79e954cb301a18d64e20b71a extends Twig_Template
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
        $__internal_55c2c58d84501c67d6544e6b92fe1550abc786a3acccc6324b4151479b5999ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c2c58d84501c67d6544e6b92fe1550abc786a3acccc6324b4151479b5999ad->enter($__internal_55c2c58d84501c67d6544e6b92fe1550abc786a3acccc6324b4151479b5999ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6abe9ea2be148b5839122d4310e28a77f4c64d5f3074f500e43962994e58499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abe9ea2be148b5839122d4310e28a77f4c64d5f3074f500e43962994e58499f->enter($__internal_6abe9ea2be148b5839122d4310e28a77f4c64d5f3074f500e43962994e58499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_55c2c58d84501c67d6544e6b92fe1550abc786a3acccc6324b4151479b5999ad->leave($__internal_55c2c58d84501c67d6544e6b92fe1550abc786a3acccc6324b4151479b5999ad_prof);

        
        $__internal_6abe9ea2be148b5839122d4310e28a77f4c64d5f3074f500e43962994e58499f->leave($__internal_6abe9ea2be148b5839122d4310e28a77f4c64d5f3074f500e43962994e58499f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
