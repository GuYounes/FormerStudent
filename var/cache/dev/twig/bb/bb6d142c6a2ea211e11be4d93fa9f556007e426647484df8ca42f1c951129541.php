<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_39a323f7a6efce9f70a5280054154e7ee846ac31e7ead962ccb794135747a8c9 extends Twig_Template
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
        $__internal_f3689488f1f85d0088d88bae5c6a604433639503b7659fbb21c07a3030ea2813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3689488f1f85d0088d88bae5c6a604433639503b7659fbb21c07a3030ea2813->enter($__internal_f3689488f1f85d0088d88bae5c6a604433639503b7659fbb21c07a3030ea2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_07c9c299bc25bfa1113e04f3fecaaf36d05b14c1a8bbb2bf02849bea43b19529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c9c299bc25bfa1113e04f3fecaaf36d05b14c1a8bbb2bf02849bea43b19529->enter($__internal_07c9c299bc25bfa1113e04f3fecaaf36d05b14c1a8bbb2bf02849bea43b19529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f3689488f1f85d0088d88bae5c6a604433639503b7659fbb21c07a3030ea2813->leave($__internal_f3689488f1f85d0088d88bae5c6a604433639503b7659fbb21c07a3030ea2813_prof);

        
        $__internal_07c9c299bc25bfa1113e04f3fecaaf36d05b14c1a8bbb2bf02849bea43b19529->leave($__internal_07c9c299bc25bfa1113e04f3fecaaf36d05b14c1a8bbb2bf02849bea43b19529_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
