<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f96ec3b282c28522fc691c5435ca7700f41bb1de3dc3287e22ecbac36b5ebca2 extends Twig_Template
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
        $__internal_4f88f734ed7a65cfc0bc29bf30f1478288ed805ff1fddd44ddbf2a3c80a77119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f88f734ed7a65cfc0bc29bf30f1478288ed805ff1fddd44ddbf2a3c80a77119->enter($__internal_4f88f734ed7a65cfc0bc29bf30f1478288ed805ff1fddd44ddbf2a3c80a77119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_85f632c39c7009a3b8e1d4557075ebdf6ee9d7e8be5321cdb41323cb25eceb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f632c39c7009a3b8e1d4557075ebdf6ee9d7e8be5321cdb41323cb25eceb48->enter($__internal_85f632c39c7009a3b8e1d4557075ebdf6ee9d7e8be5321cdb41323cb25eceb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4f88f734ed7a65cfc0bc29bf30f1478288ed805ff1fddd44ddbf2a3c80a77119->leave($__internal_4f88f734ed7a65cfc0bc29bf30f1478288ed805ff1fddd44ddbf2a3c80a77119_prof);

        
        $__internal_85f632c39c7009a3b8e1d4557075ebdf6ee9d7e8be5321cdb41323cb25eceb48->leave($__internal_85f632c39c7009a3b8e1d4557075ebdf6ee9d7e8be5321cdb41323cb25eceb48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
