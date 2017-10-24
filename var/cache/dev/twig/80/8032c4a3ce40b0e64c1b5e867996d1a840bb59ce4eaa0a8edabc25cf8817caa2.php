<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_c0df7ae8d7a3fcaddcdfe33467a4974026ed7c0a63d9e72d31911988f7fdae6b extends Twig_Template
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
        $__internal_74762b99d9d2cfc0d4d3a2da2c0b7df9de3269915fb7e7b33e19e305ecdcfce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74762b99d9d2cfc0d4d3a2da2c0b7df9de3269915fb7e7b33e19e305ecdcfce7->enter($__internal_74762b99d9d2cfc0d4d3a2da2c0b7df9de3269915fb7e7b33e19e305ecdcfce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_845f991b457731f818e6d8a295561b4a14f8a785b24819cc3e053648526d31d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845f991b457731f818e6d8a295561b4a14f8a785b24819cc3e053648526d31d3->enter($__internal_845f991b457731f818e6d8a295561b4a14f8a785b24819cc3e053648526d31d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_74762b99d9d2cfc0d4d3a2da2c0b7df9de3269915fb7e7b33e19e305ecdcfce7->leave($__internal_74762b99d9d2cfc0d4d3a2da2c0b7df9de3269915fb7e7b33e19e305ecdcfce7_prof);

        
        $__internal_845f991b457731f818e6d8a295561b4a14f8a785b24819cc3e053648526d31d3->leave($__internal_845f991b457731f818e6d8a295561b4a14f8a785b24819cc3e053648526d31d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
