<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_4ef3e3e0bf5eb3bd557397757336c9247c92241898f13fe6f1c04080e8ee10d3 extends Twig_Template
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
        $__internal_791d35bbcf20a5a3b26f74dd1658b1a6a3f4ae239ef51b397f5d184efbccd762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791d35bbcf20a5a3b26f74dd1658b1a6a3f4ae239ef51b397f5d184efbccd762->enter($__internal_791d35bbcf20a5a3b26f74dd1658b1a6a3f4ae239ef51b397f5d184efbccd762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_e2d32b501cfbeec35f8bfc44f51d0056d60e1c4a6909b1d7b70ff01ff60ada06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d32b501cfbeec35f8bfc44f51d0056d60e1c4a6909b1d7b70ff01ff60ada06->enter($__internal_e2d32b501cfbeec35f8bfc44f51d0056d60e1c4a6909b1d7b70ff01ff60ada06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_791d35bbcf20a5a3b26f74dd1658b1a6a3f4ae239ef51b397f5d184efbccd762->leave($__internal_791d35bbcf20a5a3b26f74dd1658b1a6a3f4ae239ef51b397f5d184efbccd762_prof);

        
        $__internal_e2d32b501cfbeec35f8bfc44f51d0056d60e1c4a6909b1d7b70ff01ff60ada06->leave($__internal_e2d32b501cfbeec35f8bfc44f51d0056d60e1c4a6909b1d7b70ff01ff60ada06_prof);

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
