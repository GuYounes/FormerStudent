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
        $__internal_c6b206e3e8a0c8134ffcce0ee19b8454688ce2dff4db5ae3d876b8cb4210e892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b206e3e8a0c8134ffcce0ee19b8454688ce2dff4db5ae3d876b8cb4210e892->enter($__internal_c6b206e3e8a0c8134ffcce0ee19b8454688ce2dff4db5ae3d876b8cb4210e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_64791ef365111d9ad28902d1e96293fe6771962b79c79adb9a4c8f29f443c85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64791ef365111d9ad28902d1e96293fe6771962b79c79adb9a4c8f29f443c85a->enter($__internal_64791ef365111d9ad28902d1e96293fe6771962b79c79adb9a4c8f29f443c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c6b206e3e8a0c8134ffcce0ee19b8454688ce2dff4db5ae3d876b8cb4210e892->leave($__internal_c6b206e3e8a0c8134ffcce0ee19b8454688ce2dff4db5ae3d876b8cb4210e892_prof);

        
        $__internal_64791ef365111d9ad28902d1e96293fe6771962b79c79adb9a4c8f29f443c85a->leave($__internal_64791ef365111d9ad28902d1e96293fe6771962b79c79adb9a4c8f29f443c85a_prof);

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
