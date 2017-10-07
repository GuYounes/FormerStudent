<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_483b30f23b5c874e922906102e9c49d39bf8d17ebc9c47194732de1d28df11ca extends Twig_Template
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
        $__internal_e6add5b42b7a3eb7c94dc5810bc886972f23ce4598223a29c4e6730c89bdc7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6add5b42b7a3eb7c94dc5810bc886972f23ce4598223a29c4e6730c89bdc7d7->enter($__internal_e6add5b42b7a3eb7c94dc5810bc886972f23ce4598223a29c4e6730c89bdc7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_01b60e4577b4de23bcfee1ad8f940d672ea1f6ff439a24fae7e2e76c36dd067d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b60e4577b4de23bcfee1ad8f940d672ea1f6ff439a24fae7e2e76c36dd067d->enter($__internal_01b60e4577b4de23bcfee1ad8f940d672ea1f6ff439a24fae7e2e76c36dd067d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e6add5b42b7a3eb7c94dc5810bc886972f23ce4598223a29c4e6730c89bdc7d7->leave($__internal_e6add5b42b7a3eb7c94dc5810bc886972f23ce4598223a29c4e6730c89bdc7d7_prof);

        
        $__internal_01b60e4577b4de23bcfee1ad8f940d672ea1f6ff439a24fae7e2e76c36dd067d->leave($__internal_01b60e4577b4de23bcfee1ad8f940d672ea1f6ff439a24fae7e2e76c36dd067d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
