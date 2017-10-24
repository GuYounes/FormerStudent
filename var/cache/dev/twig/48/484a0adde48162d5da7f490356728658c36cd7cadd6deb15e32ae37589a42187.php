<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_633a9c3ce80a9f65af4413aa533aa31104f396f3028c5e8011a4a06820e2d38d extends Twig_Template
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
        $__internal_b63fa10cb134860eb21f74b91e1c43b226620dae7e5a5bdc67a839770884e62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63fa10cb134860eb21f74b91e1c43b226620dae7e5a5bdc67a839770884e62b->enter($__internal_b63fa10cb134860eb21f74b91e1c43b226620dae7e5a5bdc67a839770884e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e0abc167928a6a610eb5592e22dfb7e31c113fd412e050d92d0c09a9e9ceb3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0abc167928a6a610eb5592e22dfb7e31c113fd412e050d92d0c09a9e9ceb3e6->enter($__internal_e0abc167928a6a610eb5592e22dfb7e31c113fd412e050d92d0c09a9e9ceb3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b63fa10cb134860eb21f74b91e1c43b226620dae7e5a5bdc67a839770884e62b->leave($__internal_b63fa10cb134860eb21f74b91e1c43b226620dae7e5a5bdc67a839770884e62b_prof);

        
        $__internal_e0abc167928a6a610eb5592e22dfb7e31c113fd412e050d92d0c09a9e9ceb3e6->leave($__internal_e0abc167928a6a610eb5592e22dfb7e31c113fd412e050d92d0c09a9e9ceb3e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
