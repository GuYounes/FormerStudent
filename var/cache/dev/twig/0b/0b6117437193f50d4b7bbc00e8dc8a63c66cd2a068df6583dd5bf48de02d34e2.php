<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d1025ab82269496848d7d8572213a29d364c898a177fe66a0eabd599b364439c extends Twig_Template
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
        $__internal_cb568befa10931446ee0e07277a7996af340634dd706716fcfb85943ed370381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb568befa10931446ee0e07277a7996af340634dd706716fcfb85943ed370381->enter($__internal_cb568befa10931446ee0e07277a7996af340634dd706716fcfb85943ed370381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b466c2cf24515efbe9a5ef46388af27590437b4e986f2bbc8f77bd642e66b865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b466c2cf24515efbe9a5ef46388af27590437b4e986f2bbc8f77bd642e66b865->enter($__internal_b466c2cf24515efbe9a5ef46388af27590437b4e986f2bbc8f77bd642e66b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cb568befa10931446ee0e07277a7996af340634dd706716fcfb85943ed370381->leave($__internal_cb568befa10931446ee0e07277a7996af340634dd706716fcfb85943ed370381_prof);

        
        $__internal_b466c2cf24515efbe9a5ef46388af27590437b4e986f2bbc8f77bd642e66b865->leave($__internal_b466c2cf24515efbe9a5ef46388af27590437b4e986f2bbc8f77bd642e66b865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
