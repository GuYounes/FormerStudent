<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f69657e3d276c16edee093717c05dcc3221cb80df4accd26030275aa702df7b extends Twig_Template
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
        $__internal_3756e499dd7de044e429f8722bd4cc149b9efc90493159e886d59ec48bd4f7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3756e499dd7de044e429f8722bd4cc149b9efc90493159e886d59ec48bd4f7a6->enter($__internal_3756e499dd7de044e429f8722bd4cc149b9efc90493159e886d59ec48bd4f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0e98b46411a77d7e84d9aba994ce5b6e968bcbe446d2336067ed3eb8e2c211d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e98b46411a77d7e84d9aba994ce5b6e968bcbe446d2336067ed3eb8e2c211d6->enter($__internal_0e98b46411a77d7e84d9aba994ce5b6e968bcbe446d2336067ed3eb8e2c211d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3756e499dd7de044e429f8722bd4cc149b9efc90493159e886d59ec48bd4f7a6->leave($__internal_3756e499dd7de044e429f8722bd4cc149b9efc90493159e886d59ec48bd4f7a6_prof);

        
        $__internal_0e98b46411a77d7e84d9aba994ce5b6e968bcbe446d2336067ed3eb8e2c211d6->leave($__internal_0e98b46411a77d7e84d9aba994ce5b6e968bcbe446d2336067ed3eb8e2c211d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
