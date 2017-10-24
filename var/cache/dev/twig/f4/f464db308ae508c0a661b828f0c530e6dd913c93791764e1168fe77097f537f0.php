<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c5f4626b26e8cfbff55299222a4c2cd5573b32eef991a29eebae16b566fc08aa extends Twig_Template
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
        $__internal_d5f1aa31f611bdfd5ed72621942b88d59f4205e2c740a1bcb06d5c77199b169d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f1aa31f611bdfd5ed72621942b88d59f4205e2c740a1bcb06d5c77199b169d->enter($__internal_d5f1aa31f611bdfd5ed72621942b88d59f4205e2c740a1bcb06d5c77199b169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_500f13375e5727ba3efef5aa549c4fd422c58e343a73452f9f83af44b516338a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500f13375e5727ba3efef5aa549c4fd422c58e343a73452f9f83af44b516338a->enter($__internal_500f13375e5727ba3efef5aa549c4fd422c58e343a73452f9f83af44b516338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d5f1aa31f611bdfd5ed72621942b88d59f4205e2c740a1bcb06d5c77199b169d->leave($__internal_d5f1aa31f611bdfd5ed72621942b88d59f4205e2c740a1bcb06d5c77199b169d_prof);

        
        $__internal_500f13375e5727ba3efef5aa549c4fd422c58e343a73452f9f83af44b516338a->leave($__internal_500f13375e5727ba3efef5aa549c4fd422c58e343a73452f9f83af44b516338a_prof);

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
