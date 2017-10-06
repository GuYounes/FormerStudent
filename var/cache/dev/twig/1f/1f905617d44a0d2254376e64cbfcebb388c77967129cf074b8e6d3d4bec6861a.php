<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a386b551e864242522815e531d03a5a2a29ae0a6135118647efeba606ec51b4e extends Twig_Template
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
        $__internal_f2a78db430c8d9513a544e3fde6bd27572f9f4fddf98a4850984e6b42afa1ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a78db430c8d9513a544e3fde6bd27572f9f4fddf98a4850984e6b42afa1ae5->enter($__internal_f2a78db430c8d9513a544e3fde6bd27572f9f4fddf98a4850984e6b42afa1ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a69abc2492eb8ac6962a411875d61c748d735ee3cf9764e087a9af84a4783c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69abc2492eb8ac6962a411875d61c748d735ee3cf9764e087a9af84a4783c3b->enter($__internal_a69abc2492eb8ac6962a411875d61c748d735ee3cf9764e087a9af84a4783c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f2a78db430c8d9513a544e3fde6bd27572f9f4fddf98a4850984e6b42afa1ae5->leave($__internal_f2a78db430c8d9513a544e3fde6bd27572f9f4fddf98a4850984e6b42afa1ae5_prof);

        
        $__internal_a69abc2492eb8ac6962a411875d61c748d735ee3cf9764e087a9af84a4783c3b->leave($__internal_a69abc2492eb8ac6962a411875d61c748d735ee3cf9764e087a9af84a4783c3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
