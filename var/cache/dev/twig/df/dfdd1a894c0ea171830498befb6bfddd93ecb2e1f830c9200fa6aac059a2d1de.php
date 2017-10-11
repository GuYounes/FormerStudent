<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e93616e79d5a608873615b785757ddc070851b27f91d9cf1056fb6cbbf8b866 extends Twig_Template
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
        $__internal_7c3ceb44e44b3fc98c79e1306813f87d8afb82708b35153ac7c6594dbd796be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3ceb44e44b3fc98c79e1306813f87d8afb82708b35153ac7c6594dbd796be0->enter($__internal_7c3ceb44e44b3fc98c79e1306813f87d8afb82708b35153ac7c6594dbd796be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6f6b741808d136e9cc2aafbe4a0649f110fbcb738f54b45b2ce05b041c2067c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6b741808d136e9cc2aafbe4a0649f110fbcb738f54b45b2ce05b041c2067c9->enter($__internal_6f6b741808d136e9cc2aafbe4a0649f110fbcb738f54b45b2ce05b041c2067c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7c3ceb44e44b3fc98c79e1306813f87d8afb82708b35153ac7c6594dbd796be0->leave($__internal_7c3ceb44e44b3fc98c79e1306813f87d8afb82708b35153ac7c6594dbd796be0_prof);

        
        $__internal_6f6b741808d136e9cc2aafbe4a0649f110fbcb738f54b45b2ce05b041c2067c9->leave($__internal_6f6b741808d136e9cc2aafbe4a0649f110fbcb738f54b45b2ce05b041c2067c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
